app.directive('employee', function(){
  return {
    restrict: 'E',
    scope: {
      info: '='
    },
    templateUrl: 'js/directives/employee.html'
  };
})
