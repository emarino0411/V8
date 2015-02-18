<div class="account-container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div id="form-container">
        
            <div class="page-header text-center">
                <h2>Courier Register</h2>
                
                <!-- the links to our nested states using relative paths -->
                <!-- add the active class if the state matches our ui-sref -->
                <div id="status-buttons" class="text-center">
                    <a ui-sref-active="active" ui-sref=".profile"><span>1<i class="fa fa-user"></i></span> Profile</a>
                    <a ui-sref-active="active" ui-sref=".home-address"><span>2</span> Address</a>
                    <a ui-sref-active="active" ui-sref=".photo-id"><span>3</span> Vehicle</a>
                    <a ui-sref-active="active" ui-sref=".terms"><span>4</span> Agreement</a>
                    <!-- <a ui-sref-active="active" ui-sref=".agreement"><span>4</span> Agreement</a> -->
                </div>
            </div>
            
            <!-- use ng-submit to catch the form submission and use our Angular function -->
            <form id="signup-form" ng-controller="formController" ng-submit="processForm()" name="crowdieForm">
                <!-- our nested state views will be injected here -->
                <div id="form-views" ui-view></div>
            </form>
        
        </div>
    
    <!-- show our formData as it is being typed eto ung magreretain ng values para sa form natin -->
    <pre style="display:none">
      {{ formData }}
    </pre>
    
    </div>

 </div> <!-- /content -->
  
</div> <!-- /account-container -->

