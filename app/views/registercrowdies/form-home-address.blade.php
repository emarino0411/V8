<div class="form-group">
	<div class="form-group sidebyside">
	    <label for="street">Street</label>
	    <input type="text" class="form-control" name="street" ng-model="formData.street" ng-required="true" ng-Minlength="<?php echo MIN_FIRST_NAME;?>" ng-pattern="<?php echo NAME_PATTERN;?>" placeholder="Your Street">
	</div>

	<div class="form-group sidebyside">
	    <label for="lineaddress2">Line Address 2</label>
	    <input type="text" class="form-control" name="lineaddress2" ng-model="formData.lineaddress2" ng-required="true" ng-Minlength="<?php echo MIN_LAST_NAME;?>" ng-pattern="<?php echo NAME_PATTERN;?>" placeholder="Your Apartment no or Line Address 2">
	</div>
</div>
<div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" ng-model="formData.city" placeholder="Your City">
</div>

<div class="form-group">
    <label for="state">State</label>
    <input type="text" class="form-control" name="state" ng-model="formData.state"  placeholder="Your Current State">
</div>

<div class="form-group">
    <label for="zip">Zip</label>
    <input type="text" class="form-control" name="zip" ng-model="formData.zip"  placeholder="Your Zip Code">
</div>

<div class="form-group">	
	<label for="password">How did hear about Crowd To Go?</label>
	<input type="password" class="form-control" name="password" ng-model="formData.password"  placeholder="Friend, Magazine, Internet or a Poster">
</div>

<div class="form-group row">
	<div class="col-xs-6 col-xs-offset-3">
		<br><br>
	    <a ui-sref="form.photo-id" class="btn btn-block btn-info" ng-click="validateProfile($event)">
	    	Next Section <span class="glyphicon glyphicon-circle-arrow-right"></span>
	    </a>
	</div>
</div>