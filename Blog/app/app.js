var app = angular.module('myApp', ['ngRoute']);
app.factory("services", ['$http', function($http) {
  var serviceBase = 'services/'
    var obj = {};
    obj.getBlogs = function(){
        return $http.get(serviceBase + 'blogs');
    }
    obj.getBlog = function(blogID){
        return $http.get(serviceBase + 'blog?id=' + blogID);
    }

    obj.insertBlog = function (blog) {

    return $http.post(serviceBase + 'insertBlog', blog).then(function (results) {
        return results;
    });
	};

	obj.updateBlog = function (id,blog) {
	    return $http.post(serviceBase + 'updateBlog', {id:id, blog:blog}).then(function (status) {
	        return status.data;
	    });
	};

	obj.deleteBlog = function (id) {
	    return $http.delete(serviceBase + 'deleteBlog?id=' + id).then(function (status) {
	        return status.data;
	    });
	};

    return obj;   
}]);

app.controller('listCtrl', function ($scope, services) {
    services.getBlogs().then(function(data){
        $scope.blogs = data.data;
    });
});

app.controller('editCtrl', function ($scope, $rootScope, $location, $routeParams, services, blog) {

    var blogID = ($routeParams.blogID) ? parseInt($routeParams.blogID) : 0;
    $rootScope.title = (blogID > 0) ? 'Edit Blog' : 'Add BLog';
    $scope.buttonText = (blogID > 0) ? 'Update BLog' : 'Add New Blog';
      var original = blog.data;
      original._id = blogID;
      $scope.blog = angular.copy(original);
      $scope.blog._id = blogID;


      
      $scope.isClean = function() {
        return angular.equals(original, $scope.blog);
      }

      $scope.deleteBlog = function(blog) {
        $location.path('/');
        if(confirm("Are you sure to delete blog number: "+$scope.blog._id)==true)
        services.deleteBlog(blog.blog_id);
      };

      $scope.saveBlog = function(blog) {
        $location.path('/');
        if (blogID <= 0) {
            services.insertBlog(blog);
        }
        else {
            services.updateBlog(blogID, blog);
        }
    };
});

app.controller('previewCtrl', function ($scope, $rootScope, $location, $routeParams, services, blog) {
	
    $rootScope.blog_text = blog.data.blog_text;

});

app.controller('apiCtrl', function (blog) {
    
    window.location.href = blog.config.url;
});


app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        title: 'Blogs',
        templateUrl: 'partials/blogs.php',
        controller: 'listCtrl'
      })
      .when('/edit-blog/:blogID', {
        title: 'Edit Blogs',
        templateUrl: 'partials/edit-blog.php',
        controller: 'editCtrl',
        resolve: {
          blog: function(services, $route){
        	  
            var blogID = $route.current.params.blogID;

            return services.getBlog(blogID);
          }
        }
      })
      .when('/preview-blog/:blogID', {
        title: 'Preview Blogs',
        templateUrl: 'partials/preview-blog.php',
        controller: 'previewCtrl',
        resolve: {
          blog: function(services, $route){
        	  
            var blogID = $route.current.params.blogID;

            return services.getBlog(blogID);
          }
        }
      })
      .when('/api-blog/:blogID', {
        title: 'api Blogs',
        templateUrl: 'services/blog?id=',
        controller: 'apiCtrl',
        resolve: {
            blog: function(services, $route){
                var blogID = $route.current.params.blogID;
                return services.getBlog(blogID);
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