app.controller('mainCtrl',function($scope,$route){
    $scope.$route = $route;
});
app.controller('joinCtrl', function($scope, $route,Data) {
    $scope.dogbreedrec = {}
    Data.get('getDogBreeds').then(function(data){
        $scope.dogbreedrec = data.data;
    });
    Data.get('getCatBreeds').then(function(data){
        $scope.catbreedrec = data.data;
    });
    $scope.saveJoin = function (details,id) {
        details.step = id;
        Data.post('saveJoin',details).then(function(result){
            if(result.status != 'error'){
                var x = angular.copy(details);
                x.save = 'insert';
                x.id = result.data;

            }else{
                console.log(result);
            }

        });
    }

});