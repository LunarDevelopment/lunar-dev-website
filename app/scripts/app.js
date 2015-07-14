'use strict';

/**
 * @ngdoc overview
 * @name lunardevApp
 * @description
 * # lunardevApp
 *
 * Main module of the application.
 */
angular
  .module('lunardevApp', [
    'ngAnimate',
    'ngAria',
    'ngCookies',
    'ngMessages',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch',
    'ui.bootstrap',
    'flock.bootstrap.material',
    'ui.unique',
    'socialLinks'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main',
      })
      .when('/blog', {
        templateUrl: 'views/blog.html',
        controller: 'BlogCtrl',
        controllerAs: 'blog',
        resolve: {
          tableData: function ($http) {
            return $http.get('api/posts')
              .then(function (response) {
                return response.data;
              });
          }
        }
      })
      .when('/projects', {
        templateUrl: 'views/projects.html',
        controller: 'ProjectsCtrl',
        controllerAs: 'projects',
        resolve: {
          tableData: function ($http) {
            return $http.get('api/projects')
              .then(function (response) {
                return response.data;
              });
          }
        }
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl',
        controllerAs: 'about',
      })
      .when('/contact', {
        templateUrl: 'views/contact.html',
        controller: 'ContactCtrl',
        controllerAs: 'contact',
      })
      .otherwise({
        redirectTo: '/'
      });
  });
