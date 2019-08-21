app.controller('listcontroller', ['$scope', 'employed', 'employee', function($scope, employed, employee){
  employed.success(function(data){
    $scope.emlist = data;
  });
}]);
