<div class="form-group">
	<div class="form-group sidebyside">
	    <label for="firstname">First Name</label>
	    <input type="text" class="form-control" name="firstname" ng-model="formData.firstname" ng-minlength="<?php echo MIN_FIRST_NAME;?>" required  ng-pattern="<?php echo NAME_PATTERN;?>" placeholder="First Name">
		<span style="color:red" ng-show="crowdieForm.firstname.$dirty && crowdieForm.firstname.$invalid">
		<span ng-show="crowdieForm.firstname.$error.minlength">Firstname should be <?php echo MIN_FIRST_NAME;?>.</span>
		<span ng-show="crowdieForm.firstname.$error.required">Firstname is required.</span>
		<span ng-show="crowdieForm.firstname.$error.pattern">Invalid characters found in firstname.</span>
		<span>&nbsp;</span>
	</div>

	<div class="form-group sidebyside">
	    <label for="lastname">Last Name</label>
	    <input type="text" class="form-control" name="lastname" ng-model="formData.lastname" ng-Minlength="<?php echo MIN_LAST_NAME;?>" required ng-pattern="<?php echo NAME_PATTERN;?>" placeholder="Last Name">
		<span style="color:red" ng-show="crowdieForm.lastname.$dirty && crowdieForm.lastname.$invalid">
		<span ng-show="crowdieForm.lastname.$error.minlength">Last name should be <?php echo MIN_FIRST_NAME;?>.</span>
		<span ng-show="crowdieForm.lastname.$error.required">Last name is required.</span>
		<span ng-show="crowdieForm.lastname.$error.pattern">Invalid characters found in lastname.</span>
	    <span>&nbsp;</span>
	</div>
</div>
<div class="form-group">
    <label for="mobileno">Mobile No</label>
    <input type="text" class="form-control" name="mobileno" ng-model="formData.mobileno" placeholder="Mobile No" phone-number>
</div>

<div class="form-group">
    <label for="birthdate">Birth Date</label>
    <input type="text" class="form-control" name="birthdate" ng-model="formData.birthdate"  placeholder="MM/DD/YYYY">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" ng-model="formData.emails"  placeholder="Email" ng-blur="validateEmail()">
	<span ng-show="crowdieForm.email.$error.emails" class="has-error">Invalid email</span>
</div>

<div class="form-group">	
	<div class="sidebyside">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password1" ng-model="formData.password1"  placeholder="Password">
	</div>
	<div class="sidebyside">
		<label for="password">Repeat Password</label>
		<input type="password" class="form-control" name="password2" ng-model="formData.password2"  placeholder="Repeat Password">
	</div>
</div>

<div class="form-group row">
	<div class="col-xs-6 col-xs-offset-3">
		<br><br>
	    <a ui-sref="form.home-address" class="btn btn-block btn-info" ng-click="validateProfile()">
	    	Next Section <span class="glyphicon glyphicon-circle-arrow-right"></span>
	    </a>
	</div>
</div>