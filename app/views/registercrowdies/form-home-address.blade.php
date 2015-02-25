<div class="form-group">
	<div class="form-group sidebyside">
	    <label for="street">Street</label>
	    <input type="text" 
	           class="form-control" 
	           name="street" 
	           ng-model="formData.street" 
	           ng-required="true" 
	           ng-minlength="<?php echo MIN_STREET;?>" 
	           ng-maxlength="<?php echo MAX_STREET;?>" 
	           ng-pattern="<?php echo STREET_PATTERN;?>" 
	           placeholder="Your Street">

	    <!-- ERROR Messages for Street -->
		<span style="color:red" 
			ng-show="crowdieForm.street.$dirty && 
			         crowdieForm.street.$invalid">

			<span ng-show="crowdieForm.street.$error.minlength">
				Street should be at least <?php echo MIN_FIRST_NAME;?> characters.
			</span>
			<span ng-show="crowdieForm.street.$error.maxlength">
				Street should limit is <?php echo MAX_FIRST_NAME;?> characters .
			</span>
			<span ng-show="crowdieForm.street.$error.required">
				Street is required.
			</span>
			<span ng-show="crowdieForm.street.$error.pattern">
				Invalid characters found in Street.
			</span>	
		</span>
		<!-- Para hindi mag adjust ung label ng mobile add span padding -->
		<span ng-show="crowdieForm.lineaddress2.$dirty && 
					   crowdieForm.lineaddress2.$invalid">
			<?php echo NBSP; ?>
		</span>
	</div>

	<div class="form-group sidebyside">
	    <label for="lineaddress2">Line Address 2</label>
	    <input type     = "text" 
	           class    = "form-control" 
	           name     = "lineaddress2" 
	           ng-model = "formData.lineaddress2" 
	           ng-maxlength = "<?php echo MAX_STREET;?>" 
	           ng-pattern   = "<?php echo STREET_PATTERN;?>" 
	           placeholder  = "Your Apartment no or Line Address 2">
	    <!-- ERROR Messages for Street -->
		<span style="color:red" 
			ng-show="crowdieForm.lineaddress2.$dirty && 
			         crowdieForm.lineaddress2.$invalid">

			<span ng-show="crowdieForm.lineaddress2.$error.maxlength">
				Line Address 2 limit is <?php echo MAX_FIRST_NAME;?> characters .
			</span>
			<span ng-show="crowdieForm.lineaddress2.$error.pattern">
				Invalid characters found in Line Address 2.
			</span>	
		</span>
		<!-- Para hindi mag adjust ung label ng mobile add span padding -->
		<span ng-show="crowdieForm.street.$dirty && 
					   crowdieForm.street.$invalid">
			<?php echo NBSP; ?>
		</span>
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
		<a ui-sref="form.photo-id" class="btn btn-inline btn-warning">
	    	<span class="glyphicon glyphicon-circle-arrow-left"></span>Previous Section
	    </a>
	    <a ui-sref="form.photo-id" class="btn btn-inline btn-info">
	    	Next Section <span class="glyphicon glyphicon-circle-arrow-right"></span>
	    </a>
	</div>
</div>