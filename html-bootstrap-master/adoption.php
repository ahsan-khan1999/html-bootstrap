<?php include('includes/header.php') ;?>
	<section class="adopt">
		<!-- <img src="images/cat-448339_1920-pixabay-home.jpg" alt="No "> -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>We Adop Pets Here</h2>					
				</div>

			</div>
			<div class="row">
				<div class="col-lg-12" id="form">
					<form action="connection.php?action=adoptform" method="post">
  						<div class="form-group">
  							<h6>Pet Adoption Form</h6>
    						<label style="margin-top: 15px;" for="email">Email address:</label>
    						<input style="margin-top: 10px;margin-left: 160px;" type="email" class="form-control" name="email" id="email" placeholder="abc@gmial.com">
  						</div>
  				<div class="form-group">
    					<label style="margin-top: 15px;" for="pwd">Full Name:</label>
    					<input style="margin-top: 10px;margin-left: 160px;" type="text" class="form-control" id="pwd" name="fname" placeholder="Ahsan Khan">
  				</div>
  				<div class="form-group">
    					<label style="margin-top: 15px;" for="pwd">Enter City:</label>
    					<input style="margin-top: 10px;margin-left: 160px;" type="text" class="form-control" id="pwd" name="city" placeholder="Karachi| Lahore | etc">
  				</div>


				<div class="form-group">
    					<label style="margin-top: 15px;" for="pwd">Contact Number :</label>
    					<input style="margin-top: 10px;margin-left: 160px;" type="number" class="form-control" id="pwd" name="cnum" placeholder="+92544615146">
  				</div>


  				<div class="form-group">
    					<label for="pwd">Do You Own Pet:</label>.
    					<!-- <label>Do You Own Pet</label>
    					<label style="margin-top: 25px;margin-left: 90px;"><input style="margin-top: 0px;margin-left: 0px;" type="radio" name="yes" value=1>Yes</label> -->
    					<!-- <label style="margin-top: 25px;margin-left: 125px;"><input style="margin-top: 0px;margin-left: 0px;" type="radio" name="no" value=1>No</label> -->
    					 <input  style="margin-top: 0px;margin-left: 0px;" type="radio" id="male" name="gender" value="male">
  						<label style="margin-top: 25px;margin-left: 90px;" for="male">Male</label><br>
  						<input  style="margin-top: 0px;margin-left: 0px;" type="radio" id="female" name="gender" value="female">
  						<label style="margin-top: 0px;margin-left: 0px;" for="female">Female</label><br>

    					<!-- <input type="radio" class="form-control" id="pwd" placeholder="Karachi| Lahore | etc"> -->
  				</div>
  				<div class="form-group">
    					<label style="margin-top: 100px;" for="pwd">Why Do You Want to Adopt :</label>
    					<input style="margin-top: 130px;width: 100%;margin-left: 0px;height: 100px" type="text" class="form-control" name="des" id="pwd" placeholder="">
  				</div>
  				<!-- <div class="form-group">
    					<label for="pwd">Enter City:</label>
    					<input type="text" class="form-control" id="pwd" placeholder="Karachi| Lahore | etc">
  				</div> -->
  <!-- <div class="checkbox">
<input type="checkbox">
    <label>Remember me</label>

  </div> -->
  <button type="submit" value="submit" class="btn-sucess">Submit</button>
</form>
				</div>

			</div>
		</div>
	</section>
<?php include('includes/footer.php') ;?>