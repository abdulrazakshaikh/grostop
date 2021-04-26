
<div class="login-wrap">

<!-- 
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Signup</a>
  </li>
</ul>
 -->

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
    <div class="modal-body">
    	<div class="form-group">
    		<label for="">Enter mobile number</label>
    		<div class="input-group">
    			<div class="input-group-prepend bg-white">
    				<span class="input-group-text">+91</span>
  				</div>
    			<input type="text" class="form-control" placeholder="xxxxxxxxxx" id="">
    		</div>
  		</div>
    	<div class="form-group text-center">
  			<button class="btn btn-primary btn-login btn-block">Login using OTP</button>
    	</div>
    	<div class="or"><span>OR</span></div>
    	<div class="form-group d-flex justify-content-center">
  			<button class="btn btn-facebook">
  				<img src="img/login-facebook.png" alt="">
  				<span>Facebook</span>
  			</button>
  			<button class="btn btn-google">
  				<img src="img/login-google.png" alt="">
  				<span>Google</span>
  			</button>
    	</div>
    </div>
  	<div class="modal-footer">
  		<div class="login-foot">
  			<span>not yet registered ?</span>
  			<a class="nav-link"  id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Signup</a>
  		</div>
  	</div>
  </div>
  <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
    <div class="modal-body">
    	<div class="form-group">
    		<label for="">Enter mobile number / email address</label>
    		<div class="input-group">
    			<div class="input-group-prepend bg-white">
    				<span class="input-group-text">+91</span>
  				</div>
    			<input type="text" class="form-control" placeholder="xxxxxxxxxx" id="">
    		</div>
  		</div>
    	<div class="form-group text-center">
  			<button class="btn btn-primary btn-signup btn-block">Signup using OTP</button>
    	</div>
    	<div class="or"><span>OR</span></div>
    	<div class="form-group d-flex justify-content-center">
  			<button class="btn btn-facebook">
  				<img src="img/login-facebook.png" alt="">
  				<span>Facebook</span>
  			</button>
  			<button class="btn btn-google">
  				<img src="img/login-google.png" alt="">
  				<span>Google</span>
  			</button>
    	</div>
    </div>
  	<p class="terms-text">By Continuing you must agree to our 
  		<a href="#" class="gs-text-secondary">Terms & Conditions</a> 
  		and 
  		<a href="#" class="gs-text-secondary">Privacy Policy</a>
  	</p>
  	<div class="modal-footer">
		<div class="login-foot">
			<span>already have an account ?</span>
			<a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
		</div>
  	</div>
  </div>
</div>


<div class="otp-wrap hidden">
	<div class="modal-body">
		<div class="form-group">
    		<label for="">Enter OTP received on your mobile number +91 XXXXXXXXXX</label>
    		<div class="input-group otp-input-group">
    			<input type="text" class="form-control form-control-lg" maxlength="1" placeholder="-" id="">
    			<input type="text" class="form-control form-control-lg" maxlength="1" placeholder="-" id="">
    			<input type="text" class="form-control form-control-lg" maxlength="1" placeholder="-" id="">
    			<input type="text" class="form-control form-control-lg" maxlength="1" placeholder="-" id="">
    			<input type="text" class="form-control form-control-lg" maxlength="1" placeholder="-" id="">
    			<input type="text" class="form-control form-control-lg" maxlength="1" placeholder="-" id="">
    		</div>
  			<div class="d-flex align-items-center justify-content-between flex-column mt-3">
  				<h5 class="timer">0.30s</h5>
  				<a href="#" class="btn btn-link text-right">Resend OTP</a>
  			</div>
  		</div>
  		<div class="form-group">
			<button class="btn btn-primary btn-otp btn-block">Submit</button>
  		</div>
	</div>
</div>

<div class="success-wrap hidden">
	<div class="modal-body">
		<div class="animatedicon"><img src="img/success.gif" class="img-fluid" alt=""></div>	
		<h5 class="success-title text-center">Signup Successfully</h5>
		<div class="form-group text-center">
  			<a href="myaccount.php" class="btn btn-primary btn-loginsignup btn-block">Fill your Details</a>
    	</div>
	</div>
</div>

<script>
  $('#signup-tab, #login-tab').on('click', function () {
    $(this).removeClass('active');
  });
  $('.btn-login, .btn-signup').on('click', function () {
    $('.tab-content').addClass('hidden');
    $('.otp-wrap').removeClass('hidden');
  });
  $('.btn-otp').on('click', function () {
    $('.success-wrap').removeClass('hidden');
    $('.otp-wrap').addClass('hidden');
  });
</script>