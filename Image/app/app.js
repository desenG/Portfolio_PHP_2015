var app = angular.module('myApp', ['ngRoute']);
app.factory("services", ['$http', function($http) {
  var serviceBase = 'services/'
    var obj = {};
    obj.getImages = function(){
        return $http.get(serviceBase + 'images');
    }
    
    obj.getCategories = function(){
        return $http.get(serviceBase + 'categories');
    }
    obj.getImage = function(imageID){
        return $http.get(serviceBase + 'image?id=' + imageID);
    }

    obj.insertImage = function (image) {
    return $http.post(serviceBase + 'insertImage', image).then(function (results) {
        return results;
    });
	};

	obj.updateImage = function (id,image) {
	    return $http.post(serviceBase + 'updateImage', {id:id, image:image}).then(function (status) {
	        return status.data;
	    });
	};

	obj.deleteImage = function (id) {
	    return $http.delete(serviceBase + 'deleteImage?id=' + id).then(function (status) {
	        return status.data;
	    });
	};

    return obj;   
}]);

app.controller('imagelistCtrl', function ($scope, services) {
    services.getImages().then(function(data){
        $scope.images = data.data;
    });
});

app.controller('imageaddCtrl', function ($scope, $rootScope,services) {
//    $scope.image_ctgys = [
//                          {name:'Project', portfolio:'Space Design'},
//                          {name:'Decoration', portfolio:'Space Design'},
//                          {name:'Vision', portfolio:'Graphic Design'},
//                          {name:'Design Expo', portfolio:'Graphic Design'},
//                        ];
    
    
    $rootScope.title = 'Add Image';
    $scope.buttonText = 'Add New Image';


      $scope.isClean = function() {
        return angular.equals(original, $scope.image);
      }
    $scope.saveImages = function(addImagesVM) {
        
        services.saveImages(addImagesVM.image_ctgy.name,addImagesVM.files);
        $location.path('/');
    };
});

app.controller('imageeditCtrl', function ($scope, $rootScope, $location, $routeParams, services, image) {

//    $scope.image_ctgys = [
//                     {name:'Project', portfolio:'Space Design'},
//                     {name:'Decoration', portfolio:'Space Design'},
//                     {name:'Vision', portfolio:'Graphic Design'},
//                     {name:'Design Expo', portfolio:'Graphic Design'},
//                   ];
                   //$scope.myPortfolio = $scope.portfolios[2]; // red
	
    var imageID = ($routeParams.imageID) ? parseInt($routeParams.imageID) : 0;
    
 
    $rootScope.title = 'Edit Image' ;
    $scope.buttonText = 'Update Image' ;
      var original = image.data;
      original._id = imageID;
      $scope.image = angular.copy(original);
      $scope.image._id = imageID;

      $scope.isClean = function() {
        return angular.equals(original, $scope.image);
      }

      $scope.deleteImage = function(image) {
        $location.path('/');
        if(confirm("Are you sure to delete image number: "+$scope.image._id)==true)
        services.deleteImage(image.image_id);
      };

      $scope.saveImage = function(image) {
        $location.path('/');

        services.updateImage(imageID, image);
        
    };

});

app.controller('imageapiCtrl', function (image) {
    
    window.location.href = image.config.url;
});


app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        title: 'Images',
        templateUrl: 'partials/images.php',
        controller: 'imagelistCtrl'
      })
      .when('/edit-image/:imageID', {
        title: 'Edit Images',
        templateUrl: 'partials/edit-image.php',
        controller: 'imageeditCtrl',
        resolve: {
          image: function(services, $route){
            var imageID = $route.current.params.imageID;
            return services.getImage(imageID);
          }
        }
      })
      .when('/add-images', {
        title: 'Add Images',
        templateUrl: 'partials/add-images.php',
        controller: 'imageaddCtrl'
        
      })
      .when('/api-image/:imageID', {
        title: 'api Images',
        templateUrl: 'services/image?id=',
        controller: 'imageapiCtrl',
        resolve: {
            image: function(services, $route){
                var imageID = $route.current.params.imageID;
                return services.getImage(imageID);
              }
        }
      })
      .otherwise({
        redirectTo: '/'
      });
}]);
app.run(['$location', '$rootScope', function($location, $rootScope) {
    $rootScope.$on('$routeChangeSuccess', function (event, current, previous) {
        $rootScope.title = current.$$route.title;
    });
}]);