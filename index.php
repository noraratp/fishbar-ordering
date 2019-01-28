<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fishbar87 Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Fishbar87 Order">
    <meta name="author" content="PICH Fishbar87">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">


    <link rel="stylesheet" type="text/css" href='style/fishbar.css'>
    <link rel="stylesheet" type="text/css" href='libs/css/bootstrap.css'>
    <link rel="stylesheet" type="text/css" href="libs/css/animate.css">

</head>

<body ng-app="myApp" ng-controller="myCtrl">

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Fishbar87</h4>
                        <p class="text-muted">เมนูอาหาร Online</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Fishbar87 Menu</strong>
                </a>
            </div>
        </div>
    </header>

    <main role="main" id="dvMain">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">เมนูอาหาร</h1>
                <p class="lead text-muted">Fishbar87 ยินดีต้อนรับ</p>

            </div>
        </section>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h2>หมายเลขโต๊ะ : {{customer}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row" ng-if="state1">
                    <div class="col-md-4" ng-repeat='item in data'>
                        <div class="card mb-4 box-shadow" ng-click="getItem(item.id)">
                            <img class="card-img-top" src="img/{{item.pic}}" width="200px" height="200px"
                                alt="{{item.value}}">
                            <div class="card-body">
                                <h3 class="card-text">{{item.value}}</h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                                        <p>{{item.desc}}</p>
                                    </div>
                                    <small class="text-muted"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" ng-if="state2">
                    <div class="col-md-12"><a ng-click="main()" class='btn btn-primary'>Back to main</a></div>
                    <div class="col-md-4" ng-repeat='item in items'>
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="img/{{item.pic}}" width="200px" height="200px"
                                alt="{{item.value}}">
                            <div class="card-body">
                                <h3 class="card-text">{{item.value}}</h3>
                                <small>Price : {{item.price | number}} Baht</small>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <p>{{item.desc}} </p>
                                    </div>
                                    <small class="text-muted" ng-click="addCart(item)"><button type="button"
                                            class="btn btn-success btn-sm">เลือกเมนู</button></small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="fixed" id="dvFixed">
            <div style="text-align:right"> <button type="button" class="btn btn-default" data-toggle="modal"
                    data-target="#cartModal">
                    รายการอาหาร <span class="badge badge-light">{{orderList.length  | number}}</span>
                </button>
                <span class="glyphicon-shopping-cart"></span>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cartModal">ยืนยันรายการอาหาร</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>รายการอาหาร</th>
                                <th>จำนวน</th>
                                <th>ราคา</th>
                                <th>#</th>
                            </tr>
                            <tr ng-repeat="item in orderList">
                                <td>{{item.value}}</td>
                                <td>{{item.qty}}</td>
                                <td>{{item.price}}</td>
                                <td>ลบ</td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">สั่งอาหาร</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>

                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>&copy; Copyright 2019 by Fishbar87</p>
        </div>
    </footer>
</body>

</html>
<?
?>
<style>
.fixed {
    position: fixed;
    top: 60px;
    right: 20px
}
</style>
<script src='libs/js/jquery.js' type='text/javascript'></script>
<script src='libs/js/angular.js' type='text/javascript'></script>
<script src='libs/js/bootstrap.js' type='text/javascript'></script>
<script src="assets/js/vendor/holder.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {

    $('#dvMain').scroll(function() {
        $('#dvFixed').animate({
            top: $(this).scrollTop()
        });
    });

    $scope.orderList = [];
    $scope.customer = "005"
    $scope.data = [];
    $scope.items = [];
    $scope.firstName = "John";
    $scope.lastName = "Doe";
    $scope.state1 = true;
    $scope.state2 = false;
    $scope.state3 = false;
    $scope.data.push({
        id: 1,
        value: "อาหาร",
        desc: "สั่งอาหาร ได้ที่นี้",
        pic: "food.jpg"
    }, {
        id: 2,
        value: "เครื่องดื่ม",
        desc: "เครื่องดื่มต่างๆ ",
        pic: "beer.png"
    }, {
        id: 3,
        value: "ขอเพลง",
        desc: "ขอเพลงโปรดของท่าน",
        pic: "song.png"
    });
    $scope.items.push({
        id: 1,
        value: "ต้มยำ",
        desc: "หร่อยมากกก",
        pic: "tumyum.jpg",
        price: 250
    }, {
        id: 2,
        value: "ขนม",
        desc: "กับแกล้ม",
        pic: "bean.png",
        price: 100

    }, {
        id: 3,
        value: "หมูกรอบ",
        desc: "กรอบสัสๆ",
        pic: "moo.jpg",
        price: 120
    })

    $scope.getItem = function(x) {
        $scope.state1 = false;
        $scope.state2 = true;
        console.log(x);
    }
    $scope.main = function() {
        $scope.state1 = true;
        $scope.state2 = false;
    }
    $scope.addCart = function(obj) {
        console.log(obj)
        $scope.orderList.push({
            id: obj.id,
            value: obj.value,
            desc: obj.desc,
            price: obj.price,
            pic: obj.pic,
            qty: 1

        });
    }
});
</script>