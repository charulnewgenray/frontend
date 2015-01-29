var app = angular.module('frontendApp', ['ngRoute', 'ngAnimate', 'toaster','ui.bootstrap']);

app.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider.
            when('/', {
                title: 'Home Page',
                templateUrl: 'app/partials/main.html',
                controller: 'mainCtrl'
            })
            .when('/about', {
                title: 'About Us',
                templateUrl: 'app/partials/about-us.html',
                controller: 'aboutusCtrl'
            })
            .when('/plans', {
                title: 'Coverage plans',
                templateUrl: 'app/partials/plans.html',
                controller: 'aboutusCtrl'
            })
            .when('/for-Veterinarians', {
                title: 'Veterinarians',
                templateUrl: 'app/partials/for-Veterinarians.html',
                controller: 'aboutusCtrl'
            })
            .when('/terms-and-conditions', {
                title: 'Terms and Conditions',
                templateUrl: 'app/partials/terms-and-conditions.html',
                controller: 'aboutusCtrl'
            })
            .when('/faq', {
                title: 'FAQ',
                templateUrl: 'app/partials/faq.html',
                controller: 'aboutusCtrl'
            })
            .when('/contact-us', {
                title: 'Contact Us',
                templateUrl: 'app/partials/contact-us.html',
                controller: 'aboutusCtrl'
            })
            .when('/what-we-cover', {
                title: 'What we cover',
                templateUrl: 'app/partials/What-we-cover.html',
                controller: 'aboutusCtrl'
            })
            .when('/what-not-covered', {
                title: 'What not covered',
                templateUrl: 'app/partials/What-not-covered.html',
                controller: 'aboutusCtrl'
            })
            .when('/service-for-the-dog', {
                title: 'Service for the dog',
                templateUrl: 'app/partials/Service-for-the-dog.html',
                controller: 'aboutusCtrl'
            })
            .when('/service-for-the-cat', {
                title: 'Service for the cat',
                templateUrl: 'app/partials/Service-for-the-cat.html',
                controller: 'aboutusCtrl'
            })
            .otherwise({
                templateUrl: 'app/partials/main.html'
            });
  }]);

