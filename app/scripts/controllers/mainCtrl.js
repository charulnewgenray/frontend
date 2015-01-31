app.controller('mainCtrl',function($scope,$route){
    $scope.$route = $route;
});
app.controller('joinCtrl', function($scope, $route,Data) {
    $scope.dogbreedrec = {}
    Data.get('getDogBreeds').then(function(data){
        $scope.dogbreedrec = data.data;
        console.log(data.data);

    });
    Data.get('getCatBreeds').then(function(data){
        $scope.catbreedrec = data.data;
        console.log(data.data);

    });
});