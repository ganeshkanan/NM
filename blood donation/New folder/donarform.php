<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTML CSS Register Form</title>
    <link rel="stylesheet" href="css/reg.css">
  </head>
  <body>
    <form class="signup-form" action="connect.php" method="POST">

      <!-- form header -->
      <div class="form-header">
        <h1>DONAR REGISTRATION</h1>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Name -->
        <div class="horizontal-group">
          <div class="form-group left">
            <!--<label for="firstname" class="label-title"> Name *</label>
            <input type="text" id="firstname" class="form-input" placeholder="enter your first name" required="required" />-->
            <label class="label-title">Name <span style="color:#d42e2e;">*</span></label>
											<div class="col-sm-7"><input type="text" name="name" placeholder="Name"  class="form-control" required></div>
										</div>
          
        </div>

        <!-- Email -->
        <div class="form-group">
          <!--<label for="email" class="label-title">Email*</label>
          <input type="email" id="email" class="form-input" placeholder="enter your email" required="required">-->
          <label class="label-title"> E-Mail Id <span style="color:#d42e2e;">*</span></label>
					<div class="col-sm-7">
					<input onkeyup="TovlidateEmailDonar(this.value);" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="E-Mail Id" lass="form-control" required >
</div>	
        </div>

        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">
          <div class="form-group left">
          <label class="label-title">Password <span style="color:#d42e2e;">*</span> </label>
											<div class="col-sm-7"><input type="password" placeholder="Password" name="pass" class="form-control" required></div>
										</div>
										
         

        <!-- state and district -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">City<span style="color:#d42e2e;">*</span> </label>
											<div class="col-sm-7">
											
											<select onchange="GetCitys(this.value,'ddlstCity');" class="form-control" name="city">
												<option value="">-Select city-</option>
                        <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select>

											
											</div>
          </div>
        

        <!-- location and pincode-->
        <div class="horizontal-group">
        <div class="form-group right">
        <label class="label-title">Location </label>
											<div class="col-sm-7"><input placeholder="Location" type="text"  class="form-control" name="location"></div>
										</div>
          </div>
          <div class="form-group">
          <label class="label-title">Pin code </label>
											<div class="col-sm-7"><input type="number" placeholder="PIN" class="form-control" name="pincode"></div>
										</div>
											
        </div>

        <!-- blood donation an last date donate-->
        <div class="horizontal-group">
        <div class="form-group left">
        <label class="label-title">Blood Group <span style="color:#d42e2e;">*</span></label>
											<div class="col-sm-7"><select class="form-control" required name="blood">
												<option value="">-Group-</option>
												<option value="A1+">A1+</option>
												<option value="A1-">A1-</option>
												<option value="A2+">A2+</option>
												<option value="A2-">A2-</option>
												<option value="B+">B+</option>
												<option value="B-">B-</option>
												<option value="A1B+-">A1B+</option>
												<option value="A1B-">A1B-</option>
												<option value="A2B+">A2B+</option>
												<option value="A2B-">A2B-</option>
												<option value="AB+">AB+</option>
												<option value="AB-">AB-</option>
												<option value="O+">O+</option>
												<option value="O-">O-</option>
												<option value="A+">A+</option>
												<option value="A-">A-</option>
												<option value="Bombay Group">Bombay Group</option>
												</select>
</div>
          </div>
          

         <!-- age and geder-->
         <div class="horizontal-group">
        <div class="form-group left">
        <label class="label-title">Age <span style="color:#d42e2e;">*</span> </label>
											<div class="col-sm-7"><input type="number" placeholder="Age"  class="form-control" required name="age"></div>
										</div>
          </div>
          <div class="form-group">
          <label class="label-title">Gender  <span style="color:#d42e2e;">*</span></label>
											<div class="col-sm-7">
											<select class="form-control" required name="gender">

												 <option value="Male">male</option>
                         <option value="female">Female</option>
                         <option value="transgender">Transgender</option>
												</select>
											</div>
											
        </div>
        <!--paid-->
        <div class="form-group">
          <label class="label-title">paid <span style="color:#d42e2e;">*</span></label>
											<div class="col-sm-7">
											<select class="form-control" required  name="paid">
								
												 <option value="yes">YES</option>
                         <option value="no">NO</option>
												</select>
											</div>
											
        </div>
        <!-- phone number-->
         <div class="horizontal-group">
        <div class="form-group left">
        <label class="label-title">Phone : Mobile <span style="color:#d42e2e;">*</span></label>
											<div class="col-sm-7"><input type="number" value="" maxlength="10" placeholder="Phone : Mobile" required class="form-control"  name="mobile"></div>
										</div>
          <!--<div class="form-group">
          <label class="label-title">Phone : Res </label>
											<div class="col-sm-7"><input type="text" value="" placeholder="Phone : Res" class="form-control" autocomplete="off" id="txtRes" name="txtRes"></div>
										</div>-->
											
        </div>

       

      <!-- form-footer -->
      <div class="form-footer">
        <span>* required</span>
<!--<button type="submit" class="btn">REGISTER</button>-->
<button type="submit" class="btn btn-primary to_be_register">Submit</button> &nbsp;&nbsp;
								<button type="reset" class="btn btn-primary to_be_register">Reset</button>
							</div>
      </div>

    </form>

    <!-- Script for range input label -->
    <script>
      var rangeLabel = document.getElementById("range-label");
      var experience = document.getElementById("experience");

      function change() {
      rangeLabel.innerText = experience.value + "K";
      }
    </script>

  </body>
</html>