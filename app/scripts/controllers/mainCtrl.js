app.controller('mainCtrl',function($scope,$route,$location){
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
            if(result.message == 'No row updated' && result.status == 'warning'){
               console.log(document.location);
                var x = angular.copy(details);
                x.save = 'insert';
                x.id = result.data;
            }else if(result.status == 'success'){

            }else{
                console.log(result);
            }

        });
    }
    $scope.submit = function (details) {
        console.log(details);
        $scope.submitted = true;
    }


});