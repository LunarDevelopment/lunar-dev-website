'use strict';

/**
 * @ngdoc function
 * @name lunardevApp.controller:BlogCtrl
 * @description
 * # BlogCtrl
 * Controller of the lunardevApp
 */
angular.module('lunardevApp')
  .controller('BlogCtrl', function ($scope, tableData) {
    var vm = this;
    vm.classes = [
    'blue-grey', 'grey', 'brown', 'deep-orange', 'orange', 'amber', 'light-green', 'green', 'teal', 'cyan', 'light-blue', 'blue', 'indigo', 'deep-purple', 'purple', 'pink', 'red'
  ];
    vm.posts = tableData;
    /*
  $scope.posts = [{
      category: 'Development',
      created: '10-12-2014',
      title: 'Derp Herp',
      imgurl: 'http://placehold.it/900x300',
      subtitle: 'Insights into the herpderp',
      author: 'Lewis Dimmick',
      time: 'August 28, 2013 at 10:00 PM',
      content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.'
  }, {
      category: 'Development',
      created: '09-12-2014',
      title: 'Herp Derp',
      imgurl: '',
      subtitle: 'Insights into the herpderp',
      author: 'Lewis Dimmick',
      time: 'August 28, 2013 at 10:00 PM',
      content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.'
        }];
*/
  });
