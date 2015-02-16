<div class="form-group">
    <label for="name">Vehicle Type</label>
    <input type="text" class="form-control" name="vehicle" ng-model="formData.vehicle" placeholder="Pick Your Ride Type">
</div>
<div class="form-group">
	<div class="form-group sidebyside">
	    <label for="name">Driver's License</label>
	    <input type="text" class="form-control" name="license" ng-model="formData.license" ng-required="true" ng-Minlength="<?php echo MIN_FIRST_NAME;?>" ng-pattern="<?php echo NAME_PATTERN;?>" placeholder="Your Driver's License No">
	</div>

	<div class="form-group sidebyside">
	    <label for="name">Issuing State</label>
	    <input type="text" class="form-control" name="state" ng-model="formData.lastname" ng-required="true" ng-Minlength="<?php echo MIN_LAST_NAME;?>" ng-pattern="<?php echo NAME_PATTERN;?>" placeholder="State where you got your license">
	</div>
</div>


<div class="form-group">
    <label for="name">Your License will expire in</label>
    <input type="text" class="form-control" name="expiration" ng-model="formData.expiration"  placeholder="MM/DD/YYYY">
</div>

<div class="form-group row">
	<div class="col-xs-6 col-xs-offset-3">
		<br><br>
	    <a ui-sref="form.home-address" class="btn btn-block btn-info" ng-click="validateProfile($event)">
	    	Next Section <span class="glyphicon glyphicon-circle-arrow-right"></span>
	    </a>
	</div>
</div>