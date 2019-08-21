app.factory('employed', ['$http', function($http){
  return{
    $http.get('http://localhost/scripts/getlist.php').then(fucntion(responce){
      $scope.emlist = responce.data;
    }, function err(reponce){
      $scope.emlist = responce.statusText;
  });
}]);
