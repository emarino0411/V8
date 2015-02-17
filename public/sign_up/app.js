
// create our angular app and inject ngAnimate and ui-router 
// =============================================================================
var app = angular.module('formApp', ['ngAnimate', 'ui.router']);

// configuring our routes 
// =============================================================================
app.config(function($stateProvider, $urlRouterProvider) {
    
    $stateProvider
    
        // route to show our basic form (/form)
        .state('form', {
            url: '/form',
            templateUrl: '/form',
            controller: 'formController'
        })
        
        // nested states 
        // each of these sections will have their own view
        // url will be nested (/form/profile)
        .state('form.profile', {
            url: '/profile',
            templateUrl: '/form_profile'
        })
        
        // url will be /form/address
        .state('form.home-address', {
            url: '/home-address',
            templateUrl: '/home-address'
        })
        
        // url will be /form/vehicle
        .state('form.photo-id', {
            url: '/photo-id',
            templateUrl: '/photo-id'
        })

        // url will be /form/agreement
        .state('form.terms', {
            url: '/terms',
            templateUrl: '/agreement'
        });

        // url will be /form/payment
        // .state('form.agreement', {
        //     url: '/agreement',
        //     templateUrl: '/form_payment'
        // });
       
       
    // catch all route
    // send users to the form page 
    $urlRouterProvider.otherwise('/form/profile');
});

// our controller for the form
// =============================================================================
app.controller('formController', function($scope) {

    // we will store all of our form data in this object
    $scope.formData = {};
   

    
    /* Function for each page validation */
    $scope.validateProfile = function( isValid ){
        alert(isValid);
         if (isValid) {
            alert('awesome!');  
        }else{
            alert('there are invalid fields');
        }
    }

    // function to process the form
    $scope.processForm = function(isValid) {
        if (isValid) {
            alert('awesome!');  
        }else{
            alert('there are invalid fields');
        }
    };
    
});

app.directive('phoneNumber', ['$filter', function ($filter) {
    return {
        require: '?ngModel',
        link: function (scope, elem, attrs, ctrl) {
            if (!ctrl) return;

            var symbol = ""; // dummy usage

            ctrl.$formatters.unshift(function (a) {
                return $filter(attrs.format)(ctrl.$modelValue) +  symbol;
            });

            ctrl.$parsers.unshift(function (viewValue) {

               var value = viewValue.trim().replace(/[^0-9]/, '');

                if (value.match(/[^0-9]/)) {
                    return value;
                }
                var country, city, number;

                switch (value.length) {
                    case 10: // +1PPP####### -> C (PPP) ###-####
                        country = 1;
                        city = value.slice(0, 3);
                        number = value.slice(3);
                        break;

                    case 11: // +CPPP####### -> CCC (PP) ###-####
                        country = value[0];
                        city = value.slice(1, 4);
                        number = value.slice(4);
                        break;

                    case 12: // +CCCPP####### -> CCC (PP) ###-####
                        country = value.slice(0, 3);
                        city = value.slice(3, 5);
                        number = value.slice(5);
                        break;

                    default:
                        return tel;
                }

                if (country == 1) {
                    country = "";
                }

                number = number.slice(0, 3) + '-' + number.slice(3);

                return (country + " (" + city + ") " + number).trim();
            });
        }
    };
}]);

