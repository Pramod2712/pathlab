app.controller('index', function ($scope, $http,$timeout) {
    $scope.searchLabParams = {};
    $scope.quantity = {};
    $scope.searchLabParams.page = 1; 
    $scope.ajaxLoadingData = false;
    $scope.lablist = function () { 
        $scope.ajaxLoadingData = true;
//        $scope.searchLabParams.product_type = $scope.productType;
        $http({
            method: 'POST',
            url: serverAppUrl + '/getLabList',
            data: ObjecttoParams($scope.searchLabParams),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        }).success(function (response) {
            $scope.ajaxLoadingData = false;
            console.log(response);
            if (response.status) {
                $scope.testLabList  = response.data;
            }else{
                $scope.numberOfRecord = 0;
            }
        });
    }
    $scope.productType = ['offers', 'hotdeals'];
    $scope.lablist();
    $scope.formatNumber = function(i) {
        return Math.round(i * 100)/100; 
    }
});

var slidingWidth = 0;
var liWidth = $("#myTab li").width()+10;
var licount = $("#myTab li:last").index();
var totalWidth = liWidth*(licount+1);
$(".next-circle").click(function(){
    slidingWidth = slidingWidth+$(".category_main_div").width();
    if(slidingWidth<totalWidth){
        var resSpaceForSlide = totalWidth-slidingWidth;
        if(resSpaceForSlide<slidingWidth){
            slidingWidth = resSpaceForSlide;
        }
        $("#myTab").animate({left:-slidingWidth+'px'});
    }    
})
$(".prev-circle").click(function(){
    slidingWidth = 0;
    $("#myTab").animate({left:-slidingWidth+'px'});
})