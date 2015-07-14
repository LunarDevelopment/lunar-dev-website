'use strict';

/**
 * @ngdoc function
 * @name lunardevApp.controller:ContactCtrl
 * @description
 * # ContactCtrl
 * Controller of the lunardevApp
 */
angular.module('lunardevApp')
  .controller('ContactCtrl', function ($scope, $log, $modal) {
    var vm = this;
    vm.contact = '';
    vm.open = function () {

      var modalInstance = $modal.open({
        animation: true,
        templateUrl: 'views/contactmodal.html',
        controller: 'ModalCtrl',
        size: ''
      });

      modalInstance.result.then(function (selectedItem) {
        vm.selected = selectedItem;
      }, function () {
        $log.info('Modal dismissed at: ' + new Date());
      });
    };
  });
