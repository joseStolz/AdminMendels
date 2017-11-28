// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
// 'starter.controllers' is found in controllers.js
angular.module('starter', ['ionic', 'starter.controllers'])

        .run(function ($ionicPlatform) {
            $ionicPlatform.ready(function () {
                // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
                // for form inputs)
                if (window.cordova && window.cordova.plugins.Keyboard) {
                    cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
                    cordova.plugins.Keyboard.disableScroll(true);

                }
                if (window.StatusBar) {
                    // org.apache.cordova.statusbar required
                    StatusBar.styleDefault();
                }
            });
        })

        .config(function ($stateProvider, $urlRouterProvider) {
            $stateProvider

                    .state('app', {
                        url: '/app',
                        abstract: true,
                        templateUrl: 'templates/menu.html',
                        controller: 'AppCtrl'
                    })

                    .state('app.promoDetalle', {
                        url: '/promoDetalle',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/promoDetalle.html'
                            }
                        }
                    })
                    .state('app.promos', {
                        url: '/promo',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/promo.html',
                            }
                        }
                    })
                    .state('app.contact', {
                        url: '/contact',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/contact.html',
                                controller: 'contactctrl'
                            }
                        }
                    })

                    .state('app.category', {
                        url: '/category',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/category.html',
                                controller: 'categoryctrl'
                            }
                        }
                    })

                    .state('app.favoritos', {
                        url: '/favoritos',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/favoritos.html',
                                controller: 'favoritosctrl'
                            }
                        }
                    })

                    .state('app.login', {
                        url: '/login',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/login.html',
                                controller: 'loginctrl'
                            }
                        }
                    })

                    .state('app.customer', {
                        url: '/customer',
                        views: {
                            'menuContent': {
                                templateUrl: 'templates/customer.html',
                                controller: 'customerctrl'
                            }
                        }
                    });
            // if none of the above states are matched, use this as the fallback
            $urlRouterProvider.otherwise('/app/login');
        });
