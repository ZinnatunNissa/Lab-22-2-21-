<?php
     $name="";
	 $err_name="";
     $uname="";
	 $err_uname="";
	 $pass="";
	 $err_pass="";
	 $cpass="";
	 $err_cpass="";
	 $email="";
	 $err_email="";
	 $phone="";
	 $err_phone="";
	 $address="";
	 $err_address="";
	 $bdate="";
	 $err_bdate="";
	 $gender="";
	 $err_gender="";
     $wdyhau="";
	 $err_wdyhau="";
	 $bio="";
	 $err_bio="";
		 
     if($_SERVER["REQUEST_METHOD"]=="POST")
	 {
		     if(empty($_POST["name"])){
				 $err_name="Name Required";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["name"]);
		     }
			 else{
				 $name=$_POST["name"];
			 }
			 if(empty($_POST["uname"])){
				 $err_uname="Username Required";
			 }
			 elseif(strlen($_POST["uname"])<6){
				 $err_uname="Username Must Be 6 characters Long";
			 }
			 elseif(strpos($_POST["uname"],"")){
				 $err_uname="Username Should Not Contain White Space";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["username"]);
		     }
			 else{
				 $uname=$_POST["uname"];
			 }
			 if(empty($_POST["pass"])){
				 $err_pass="Password Required";
			 }
			 elseif(strlen($_POST["pass"])<8){
				 $err_pass="Password Must Be 8 Charachter Long";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["pass"]);
				 echo ctype_upper("");
				 echo ctype_lower("");
				 echo number_format("");

		     }
			 else{
				 $pass=$_POST["pass"];
			 }
			 if(empty($_POST["cpass"])){
				 $err_cpass="Confirm Your Password";
			 }
			 else{
				 $cpass=$_POST["cpass"];
			 }
			  if (empty($_POST["email"])) {
                 $err_email = "Email is required";
             } 
			 else {
                 $email =$err_email($_POST["email"]);
             }
			 if(empty($_POST["phone"])){
				 $err_phone="Insert Your Phone Number";
			 }
			 else{
				 $phone=$_POST["phone"];
			 }
			  if(empty($_address["address"])){
				 $err_address="Select Your Address";
			 }
			 else{
				 $address=$_POST["address"];
			 }
			  if(empty($_POST["profession"])){
				 $err_profession="Confirm Your Profession";
			 }
			 else{
				 $profession=$_POST["profession"];
			 }
			 if(empty($_POST["bio"])){
				 $err_bio="Bio Required";
			 }
			 else{
				 $bio=$_POST["bio"];
			 }
		 } 
?>

<html>
     <head></head>
	 <body>
	      <fieldset>
              <legend><h1>Club Member Registration</h1></legend>
		       <form action="" method="post">
		       <table>
			         <tr>
					    <td><span>Name</span></td>
						<td>:<input type="text" name="name" value="<?php echo $name;?>" placeholder="Name">
						<span><?php echo $err_name;?></span></td>
					</tr>
			        <tr>
					    <td><span>Username</span></td>
						<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
					    <td><span>Password</span></td>
						<td>:<input type="password" value="<?php echo $pass;?>" name="pass">
						<span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
					    <td><span>Confirm Password</span></td>
						<td>:<input type="password" value="<?php echo $cpass;?>" name="cpass">
						<span><?php echo $err_cpass;?></span></td>
					</tr>
					<tr>
					    <td><span>Email</span></td>
						<td>:<input type="text" value="<?php echo $email;?>" name="email">
						<span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
					    <td><span>Phone</span></td>
						<td>:<input type="text" value="<?php echo $phone;?>" name="phone">
						<span><?php echo $err_phone;?></span></td>
					</tr>
					<tr>
					    <td><span>Address</span></td>
						<td>:<input type="text" name="sa" placeholder="Street Address" size="12"<br>
					         <input type="text" name="city" placeholder="City" size="6">-<input type="text" name="state" placeholder="State" size="6"><br>
							 <input type="text" name="postal/zipcode" placeholder="Postal/Zip Code" size="12">
						</td> 
					</tr>
					<tr>
					    <td><span>Birth Date</span></td>
						<td>:<select name="day">
						<option disabled selected>Day</option>
						<?php
						     for($i=1;$i<=31;$i++){
								 echo "<option>$i</option>";
							 }
						?>
						</td>
						<td><select name="month">
						<option disabled selected>Month</option>
						<?php
						    $month=array("January","February","March","April","May","June","July","August","September","October","November","December");
							echo "$month[]";
						?>
						</td>
						<td>:<select name="year">
						<option disabled selected>Year</option>
						<?php
						     for($i=1985;$i<=2002;$i++){
								 echo "<option>$i</option>";
							 }
						?>
						</td>
					</tr>
					<tr>
					    <td><span>Gender</span></td>
						<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
						<input type="radio" name="gender" value="Female">Female<br>
						<span><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
					    <td><span>Where did you hear about us?</span></td>
						<td>
						    :<select name="Where did you hear about us?">
							     <option disabled selected>Chose One</option>
						         <option>A Friend or Colleague</option>
								 <option>Google</option>
								 <option>Blog Post</option>
								 <option>Blog Post</option>
								 <option>News Article</option>
							</select>
							<span><?php echo $err_wdyhau;?></span></td>
						</td>
					</tr>
					<tr>
					    <td><span>Bio</span></td>
						<td>:<textarea name="bio"><?php echo $bio;?></textarea>
						<span><?php echo $err_bio;?></span></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="register"></td>
					</tr>
			  </table>
		</form>
	</fieldset>