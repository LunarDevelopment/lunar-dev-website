'use strict';

/**
 * @ngdoc directive
 * @name lunardevApp.directive:randomPanelClass
 * @description
 * # randomPanelClass
 */
angular.module('lunardevApp')
  .directive('randomPanelClass', function () {
  return {
    restrict: 'EA',
    replace: false,
    link: function (scope, elem) {
      //Add random background class to selected element
      scope.ngClasses = [
        'blue-grey', 'grey', 'brown', 'deep-orange', 'orange', 'amber', 'light-green', 'green', 'teal', 'cyan', 'light-blue', 'blue', 'indigo', 'deep-purple', 'purple', 'pink', 'red'
      ];
      elem.addClass('panel-material-' + scope.ngClasses[Math.floor(Math.random() * (scope.ngClasses.length))]);
    }
  };
});
