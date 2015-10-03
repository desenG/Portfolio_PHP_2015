var app = angular.module('myApp', ['ngRoute']);
app.factory("services", ['$http', function($http) {
  var serviceBase = 'services/'
    var obj = {};
    obj.getPortfolios = function(){
        return $http.get(serviceBase + 'portfolios');
    }
    obj.getPortfolio = function(portfolioID){
        return $http.get(serviceBase + 'portfolio?id=' + portfolioID);
    }

    obj.insertPortfolio = function (portfolio) {

    return $http.post(serviceBase + 'insertPortfolio', portfolio).then(function (results) {
        return results;
    });
	};

	obj.updatePortfolio = function (id,portfolio) {
	    return $http.post(serviceBase + 'updatePortfolio', {id:id, portfolio:portfolio}).then(function (status) {
	        return status.data;
	    });
	};

	obj.deletePortfolio = function (id) {
	    return $http.delete(serviceBase + 'deletePortfolio?id=' + id).then(function (status) {
	        return status.data;
	    });
	};

    return obj;   
}]);

app.controller('listCtrl', function ($scope, services) {
    services.getPortfolios().then(function(data){
        $scope.portfolios = data.data;
    });
});

app.controller('editCtrl', function ($scope, $rootScope, $location, $routeParams, services, portfolio) {

	
    var portfolioID = ($routeParams.portfolioID) ? parseInt($routeParams.portfolioID) : 0;
    $rootScope.title = (portfolioID > 0) ? 'Edit Portfolio' : 'Add BLog';
    $scope.buttonText = (portfolioID > 0) ? 'Update BLog' : 'Add New Portfolio';
      var original = portfolio.data;
      original._id = portfolioID;
      $scope.portfolio = angular.copy(original);
      $scope.portfolio._id = portfolioID;


      
      $scope.isClean = function() {
        return angular.equals(original, $scope.portfolio);
      }

      $scope.deletePortfolio = function(portfolio) {
        $location.path('/');
        if(confirm("Are you sure to delete portfolio number: "+$scope.portfolio._id)==true)
        services.deletePortfolio(portfolio.portfolio_id);
      };

      $scope.savePortfolio = function(portfolio) {
        $location.path('/');
        if (portfolioID <= 0) {
            services.insertPortfolio(portfolio);
        }
        else {
            services.updatePortfolio(portfolioID, portfolio);
        }
    };
});

app.controller('previewCtrl', function ($scope, $rootScope, $location, $routeParams, services, portfolio) {
	
    $rootScope.portfolio_text = portfolio.data.portfolio_text;

});

app.controller('apiCtrl', function (portfolio) {
    
    window.location.href = portfolio.config.url;
});


app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        title: 'Portfolios',
        templateUrl: 'partials/portfolios.php',
        controller: 'listCtrl'
      })
      .when('/edit-portfolio/:portfolioID', {
        title: 'Edit Portfolios',
        templateUrl: 'partials/edit-portfolio.php',
        controller: 'editCtrl',
        resolve: {
          portfolio: function(services, $route){
        	  
            var portfolioID = $route.current.params.portfolioID;

            return services.getPortfolio(portfolioID);
          }
        }
      })
      .when('/preview-portfolio/:portfolioID', {
        title: 'Preview Portfolios',
        templateUrl: 'partials/preview-portfolio.php',
        controller: 'previewCtrl',
        resolve: {
          portfolio: function(services, $route){
        	  
            var portfolioID = $route.current.params.portfolioID;

            return services.getPortfolio(portfolioID);
          }
        }
      })
      .when('/api-portfolio/:portfolioID', {
        title: 'api Portfolio',
        templateUrl: 'services/portfolio?id=',
        controller: 'apiCtrl',
        resolve: {
            portfolio: function(services, $route){
                var portfolioID = $route.current.params.portfolioID;
                return services.getPortfolio(portfolioID);
              }
        }
      })
      .when('/api-portfolios', {
        title: 'api Portfolios',
        templateUrl: 'services/portfolios',
        controller: 'apiCtrl',
        resolve: {
            portfolio: function(services, $route){
                return services.getPortfolios();
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