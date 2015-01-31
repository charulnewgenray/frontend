var app = angular.module('frontendApp', ['ngRoute', 'ngAnimate', 'toaster','ui.bootstrap']);

app.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider.
            when('/', {
                title: 'Home Page',
                templateUrl: 'app/partials/main.html',
                controller: 'mainCtrl',
                activetab: 'home'
            })
            .when('/about', {
                title: 'About Us',
                templateUrl: 'app/partials/about-us.html',
                controller: 'mainCtrl',
                activetab: 'about'
            })
            .when('/login', {
                title: 'Customer Login',
                templateUrl: 'app/partials/Login.php',
                controller: 'mainCtrl'
            })
            .when('/login-veterinarians', {
                title: 'Veterinarian Login',
                templateUrl: 'app/partials/Login-Veterinarians.php',
                controller: 'mainCtrl'
            })
            .when('/request-quote', {
                title: 'Request-Quote',
                templateUrl: 'app/partials/Request-Quote.php',
                controller: 'mainCtrl'
            })
            .when('/plans', {
                title: 'Coverage plans',
                templateUrl: 'app/partials/plans.html',
                controller: 'mainCtrl',
                activetab: 'plans'
            })
            .when('/for-Veterinarians', {
                title: 'Veterinarians',
                templateUrl: 'app/partials/for-Veterinarians.html',
                controller: 'mainCtrl',
                activetab: 'for-Veterinarians'
            })
            .when('/terms-and-conditions', {
                title: 'Terms and Conditions',
                templateUrl: 'app/partials/terms-and-conditions.html',
                controller: 'mainCtrl'
            })
            .when('/faq', {
                title: 'FAQ',
                templateUrl: 'app/partials/faq.html',
                controller: 'mainCtrl'
            })
            .when('/contact-us', {
                title: 'Contact Us',
                templateUrl: 'app/partials/contact-us.html',
                controller: 'mainCtrl'
            })
            .when('/what-we-cover', {
                title: 'What we cover',
                templateUrl: 'app/partials/What-we-cover.html',
                controller: 'mainCtrl'
            })
            .when('/what-not-covered', {
                title: 'What not covered',
                templateUrl: 'app/partials/What-not-covered.html',
                controller: 'mainCtrl'
            })
            .when('/service-for-the-dog', {
                title: 'Service for the dog',
                templateUrl: 'app/partials/Service-for-the-dog.html',
                controller: 'mainCtrl'
            })
            .when('/service-for-the-cat', {
                title: 'Service for the cat',
                templateUrl: 'app/partials/Service-for-the-cat.html',
                controller: 'mainCtrl'
            })
            .when('/join/1', {
                title: 'Join',
                templateUrl: 'app/partials/join.html',
                controller: 'mainCtrl'
            })
            .when('/join/2', {
                title: 'Join',
                templateUrl: 'app/partials/join-2.html',
                controller: 'mainCtrl'
            })
            .when('/join/3', {
                title: 'Join',
                templateUrl: 'app/partials/join-3.html',
                controller: 'mainCtrl'
            })
            .when('/join/4', {
                title: 'Join',
                templateUrl: 'app/partials/join-4.html',
                controller: 'mainCtrl'
            })
            .otherwise({
                templateUrl: 'app/partials/main.html'
            });
  }]);

