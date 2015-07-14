'use strict';

describe('Directive: autoActive', function () {

  // load the directive's module
  beforeEach(module('lunardevApp'));

  var element,
    scope;

  beforeEach(inject(function ($rootScope) {
    scope = $rootScope.$new();
  }));

  it('should make hidden element visible', inject(function ($compile) {
    element = angular.element('<auto-active></auto-active>');
    element = $compile(element)(scope);
    expect(element.text()).toBe('this is the autoActive directive');
  }));
});
