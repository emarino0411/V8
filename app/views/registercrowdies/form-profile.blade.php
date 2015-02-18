<div class="form-group">
	<!-- First name Div -->
	<div class="form-group sidebyside" 
		 ng-class="{ 'has-error' : crowdieForm.firstname.$invalid &&
		                          !crowdieForm.firstname.$pristine }">

	    <label for="firstname">First Name</label>

	    <!-- First Name Input Text Field -->
	    <input type = "text" 
		    	class        = "form-control" 
		    	name         = "firstname" 
		    	ng-model     = "formData.firstname" 
		    	ng-minlength = "<?php echo MIN_FIRST_NAME;?>" 
		    	ng-maxlength = "<?php echo MAX_FIRST_NAME;?>" 
		    	ng-required  = "true" 
		    	ng-pattern   = "<?php echo NAME_PATTERN;?>" 
		    	placeholder  = "First Name"/>

	    <!-- ERROR Messages for First Name -->
	    

		<span style="color:red" 
			ng-show="crowdieForm.firstname.$dirty && 
			         crowdieForm.firstname.$invalid">

			<span ng-show="crowdieForm.firstname.$error.minlength">
				Firstname should be at least <?php echo MIN_FIRST_NAME;?> characters.
			</span>
			<span ng-show="crowdieForm.firstname.$error.maxlength">
				Firstname should limit is <?php echo MAX_FIRST_NAME;?> characters .
			</span>
			<span ng-show="crowdieForm.firstname.$error.required">
				Firstname is required.
			</span>
			<span ng-show="crowdieForm.firstname.$error.pattern">
				Invalid characters found in firstname.
			</span>	
		</span>
		<!-- Para hindi mag adjust ung label ng mobile add span padding -->
		<span ng-show="crowdieForm.lastname.$dirty && 
					   crowdieForm.lastname.$invalid">
			<?php echo NBSP; ?>
		</span>

	</div><!-- End First Name Div -->
	
	<!-- Last Name Div -->
	<div class="form-group sidebyside"
		 ng-class="{ 'has-error' : crowdieForm.lastname.$invalid &&
		                          !crowdieForm.lastname.$pristine }">

	    <label for="lastname">Last Name</label>
	    <!-- Input text field for last name -->
	    <input type = "text" 
		    	class        = "form-control" 
		    	name         = "lastname" 
		    	ng-model     = "formData.lastname" 
		    	ng-minlength = "<?php echo MIN_LAST_NAME;?>" 
		    	ng-maxlength = "<?php echo MAX_LAST_NAME;?>" 
		    	ng-required  = "true" 
		    	ng-pattern   = "<?php echo NAME_PATTERN;?>"  
		    	placeholder  = "Last Name"/>
    	<!-- Error messages for last name -->
    	
		<span style="color:red" 
				ng-show="crowdieForm.lastname.$dirty && 
						crowdieForm.lastname.$invalid">
			<span ng-show="crowdieForm.lastname.$error.minlength">
				Last name should be at least <?php echo MIN_LAST_NAME;?> 
				characters.
			</span>
			<span ng-show="crowdieForm.lastname.$error.maxlength">
				Last name limit is <?php echo MAX_LAST_NAME;?> characters only.
			</span>
			<span ng-show="crowdieForm.lastname.$error.required">
				Last name is required.
			</span>
			<span ng-show="crowdieForm.lastname.$error.pattern">
				Invalid characters found in lastname.
			</span>
		</span>
		<!-- Para hindi mag adjust ung label ng mobile add span padding -->
		<span ng-show="crowdieForm.firstname.$dirty && 
				   	   crowdieForm.firstname.$invalid">
			<?php echo NBSP; ?>
		</span>

	</div><!-- End last name Div -->
	
</div><!-- End Courier Name Div -->

<!-- Mobile Information -->
<div class="form-group">
    <label for="mobileno">Mobile No</label>
    <!-- Input text field for the mobile number -->
    <input type = "text" 
			class       = "form-control" 
			name        = "mobileno" 
			ng-model    = "formData.mobileno" 
			ui-mask     = "(999) 999-9999" 
			ng-required = "true">

	<span style="color:red" 
			ng-show="crowdieForm.mobileno.$dirty &&
		 			 crowdieForm.mobileno.$invalid">
	<span ng-show="crowdieForm.mobileno.$error.required">
		Mobile number is required.
	</span>
</div><!-- End Mobile Number Div -->

<!-- Birth Date -->
<div class="form-group" 
	ng-init="minimumBirthYear='<?php echo MAX_BIRTH_DATE;?>'"
	ng-controller="BirthDate" >

	<input type="hidden" class = "form-control" ng-model="minimumBirthYear">
	<!-- label for birth year -->
    <label for="birthdate">Birth Date</label>
    <!-- BirthDatePicker -->    
 	<p class="input-group">
		<input type = "text" 
				class            = "form-control" 
				datepicker-popup = "yyyy-MM-dd" 
				ng-model         = "formData.birthdate" 
				is-open          = "opened"
				show-button-bar  = "false"
				name             = "txt_birthdate"
				min-date         = "minDate" 
				max-date         = "maxDate"
				init-date        = "initDate"
				ng-required      = "true"
				ng-click         = "open($event)"
				ng-blur          = "checkDate()"/>

		<span class="input-group-btn">
			<button type="button" 
					class="btn btn-default" 
					ng-click="open($event)">
					<!-- Calendar Icon -->
				<i class="glyphicon glyphicon-calendar"></i>
			</button><!-- Calendar Button -->
		</span>
    </p>
    <span style="color:red" 
			ng-show="crowdieForm.birthdate.$dirty &&
		 			 crowdieForm.birthdate.$invalid">
		<span ng-show="crowdieForm.birthdate.$error.required">
			You should be 18 to be able to register.
		</span>
		<span ng-show="crowdieForm.birthdate.$error.required">
			Your birthdate is required
		</span>
    </span>
</div>

<!-- Email -->
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" ng-model="formData.emails"  placeholder="Email" ng-blur="validateEmail()">
	<span ng-show="crowdieForm.email.$error.emails" class="has-error">Invalid email</span>
</div>

<div class="form-group">
	<!-- Password1 -->	
	<div class="sidebyside">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password1" ng-model="formData.password1"  placeholder="Password">
	</div>
	<!-- Password2 -->
	<div class="sidebyside">
		<label for="password">Repeat Password</label>
		<input type="password" class="form-control" name="password2" ng-model="formData.password2"  placeholder="Repeat Password">
	</div>
</div>
<!-- Next Button, should be disabled if there are errors in the validations on the form -->
<div class="form-group row">
	<div class="col-xs-6 col-xs-offset-3">
		<br><br>
	    <a ui-sref="form.home-address" class="btn btn-block btn-info" ng-click="validateProfile()">
	    	Next Section <span class="glyphicon glyphicon-circle-arrow-right"></span>
	    </a>
	</div>
</div>