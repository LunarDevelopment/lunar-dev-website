'use strict';

/**
 * @ngdoc function
 * @name lunardevApp.controller:ProjectsCtrl
 * @description
 * # ProjectsCtrl
 * Controller of the lunardevApp
 */
angular.module('lunardevApp')
  .controller('ProjectsCtrl', function ($scope, tableData) {
    var vm = this;
    vm.names = ['Igor Minar', 'Brad Green', 'Dave Geddes', 'Naomi Black', 'Greg Weber', 'Dean Sofer', 'Wes Alvaro', 'John Scott', 'Daniel Nadasi'];
    console.log(tableData);
    vm.projects = tableData.projects;
    vm.searchPage = function (term) {
      vm.searchKeyword = term;
    };
    vm.getStatusClass = function (term) {
      if (term === 'Completed') {
        return 'btn-material-green';
      } else if (term === 'Planned') {
        return 'btn-material-purple';
      } else if (term === 'Cancelled') {
        return 'btn-material-red';
      } else if (term === 'Ongoing') {
        return 'btn-material-brown';
      }
    };
    /*
        vm.projects = [
        { 
          project_id: 1,
          created: '',
          category: 'Development',
          title: 'Herp derp ',
          description: 'Sriracha hella salvia, locavore mumblecore occupy twee Pitchfork craft beer ugh try-hard pug disrupt.',
          tech: 'AngularJS, PHP Rest API, Bootstrap 3, Yeoman-angular',
          status: 'Planned'
      }, {
          category: 'Herp',
          title: 'Something super cool',
          description: 'Sriracha hella salvia, locavore mumblecore occupy twee Pitchfork craft beer ugh try-hard pug disrupt.',
          tech: 'AngularJS, Material Design, Yeoman-angular',
          status: 'Completed'
          }, {
          category: 'Derp',
          title: 'Reinvent the wheel',
          description: 'Sriracha hella salvia, locavore mumblecore occupy twee Pitchfork craft beer ugh try-hard pug disrupt.',
          tech: 'AngularJS, PHP Rest API',
          status: 'Ongoing '
          }, {
          category: 'Gerp',
          title: 'My website',
          description: 'Sriracha hella salvia, locavore mumblecore occupy twee Pitchfork craft beer ugh try-hard pug disrupt.',
          tech: 'AngularJS, Slim PHP Rest API, Bootstrap 3, Yeoman-angular',
          status: 'Ongoing '
          }
      ]; */
    vm.formatData = function (objectFromDB) {
      return objectFromDB.split(', ');
    };
  });
