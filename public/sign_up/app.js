
// create our angular app and inject ngAnimate and ui-router 
// =============================================================================
var app = angular.module('formApp', ['ngAnimate', 
                                     'ui.router',
                                     'ui.utils',
                                     'ui.bootstrap']);

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

app.controller('BirthDate', function ($scope) {
    /*Set the current value to today*/
    $scope.toggleMin = function() {       
        $scope.maxDate  = new Date($scope.minimumBirthYear);
        $scope.initDate = new Date($scope.minimumBirthYear);
        $scope.formData.birthdate = new Date($scope.minimumBirthYear);
    };    
    /* Display the datepicker dialog box*/
    $scope.open = function($event) {
        $event.preventDefault();
        $event.stopPropagation(); 
        $scope.toggleMin();
        $scope.opened = true;
    };
    /* Check if the age is > 18 */
    $scope.checkDate = function(){
        var currentDate = new Date($scope.formData.birthdate);
        if( currentDate > $scope.maxDate ){
            $scope.toggleMin();
            $scope.crowdieForm.birthdate.$setValidity('required', true);
            alert();
        }else{
            $scope.crowdieForm.birthdate.$setValidity('required', false);
            alert();
        }
    }
});

