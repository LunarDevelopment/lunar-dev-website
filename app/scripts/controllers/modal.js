'use strict';

/**
 * @ngdoc function
 * @name lunardevApp.controller:ModalCtrl
 * @description
 * # ModalCtrl
 * Controller of the lunardevApp
 */
angular.module('lunardevApp')
  .controller('ModalCtrl', function ($http, $scope, $modalInstance) {
    var vm = this;
    vm.ok = function () {
      $modalInstance.close(vm.selected.item);
    };

    vm.cancel = function () {
      $modalInstance.dismiss('cancel');
    };
    vm.result = 'hidden';
    /*vm.resultMessage;
      vm.formData; */ //formData is an object holding the name, email, subject, and message
    vm.submitButtonDisabled = false;
    vm.submitted = false; //used so that form errors are shown only after the form has been submitted
    vm.submit = function (contactform) {
      vm.submitted = true;
      vm.submitButtonDisabled = true;
      if (contactform.$valid) {
        $http({
          method: 'POST',
          url: 'api/contact-form.php',
          data: vm.formData, //param method from jQuery
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          } //set the headers so angular passing info as form data (not request payload)
        }).success(function (data) {
          console.log(data);
          if (data.success) { //success comes from the return json object
            vm.submitButtonDisabled = true;
            vm.resultMessage = data.message;
            vm.result = 'bg-success';
          } else {
            vm.submitButtonDisabled = false;
            vm.resultMessage = data.message;
            vm.result = 'bg-danger';
          }
        });
      } else {
        vm.submitButtonDisabled = false;
        vm.resultMessage = 'Failed :( Please fill out all the fields.';
        vm.result = 'bg-danger';
      }
    };
  });
