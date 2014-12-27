var blogApp = angular.module('blogApp', ['ngRoute'])

blogApp.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.
        when('/home', {
            templateUrl: 'public/partials/page.html',
            controller: 'PagesController'
        }).
        when('/login', {
            templateUrl: 'public/partials/login.html',
            controller: 'LoginController'
        })
        .when('/pages/:page', {
            templateUrl: 'public/partials/page.html',
            controller: 'PagesController'
        }).
        when('/posts/:date/:post', {
            templateUrl: 'public/partials/post.html',
            controller: 'PostController'
        }).
        when('/posts', {
            templateUrl: 'public/partials/posts.html',
            controller: 'PostsController'
        }).
        otherwise({
            redirectTo: '/home'
        })
}]);

blogApp.controller('SkillsPanelController', function ($scope) {
    $scope.counter = 0;
    $('#skills').hide();
    $scope.show = function () {
        if ($scope.counter % 2 == 0) {
            $('#skills').show();
            $scope.counter++;
        } else {
            $('#skills').hide();
            $scope.counter++;
        }
    };
})

blogApp.controller('PersonalPanelController', function ($scope) {
    $scope.counter = 0;
    $('#personal-info').hide();
    $scope.show = function () {
        if ($scope.counter % 2 == 0) {
            $('#personal-info').show();
            $scope.counter++;
        } else {
            $('#personal-info').hide();
            $scope.counter++;
        }
    };
})

blogApp.controller('PagesController', function ($scope, $routeParams, $http) {
    $scope.page = {
        title: 'Loading...',
        content: ''
    }
    var page = $routeParams.page;
    if(page == undefined){
        page = 'home';
    }
    $http.get('/pages/'+page).
        success(function (data) {
            $scope.page = data;
        });
});

blogApp.controller('PostsController', function ($scope, $routeParams, $http) {
    $scope.posts = []
    $http.get('/posts').
        success(function (data) {
            $scope.posts = data;
        });
});


blogApp.controller('PostController', function ($scope, $routeParams, $http) {
    $scope.post = {
        title: 'Loading...',
        content: ''
    }
    $http.get('/posts/'+$routeParams.date+'/'+$routeParams.post).
        success(function (data) {
            $scope.post = data;
        });
});

blogApp.controller('LoginController', function ($scope) {

})
