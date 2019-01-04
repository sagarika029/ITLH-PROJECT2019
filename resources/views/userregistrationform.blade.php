 <!DOCTYPE html>
<html>
<head>
	<title>USER REGI STRATION FORM</title>
	<style type="text/css">
		h1{
			text-align: center;
		}
		#register {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
}
input[type=submit]:hover {
    background-color:orange ;
    color: black;
}

input[type=submit] {
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
	</style>
</head>
@include('nav')
<body>
<div id="register" class="animate form">
			<form  method="POST" action="/register"> 
			{{ csrf_field() }}
				<h1> USER REGISTRATION FORM </h1> 

				<p> 
					<label for="First Name" class="fname" data-icon="u"><b>First name</b></label>
					<input id="Firstname" name="name" required="required" type="text" placeholder="Enter your first Name" />
				</p>

				
				<p> 
					<label for="emailsignup" class="youmail" data-icon="e" > <b>Your email</b></label>
					<input id="emailsignup" name="email" required="required" type="email"
					 placeholder="Enter your email" /> 
				</p>
				<p> 
					<label for="passwordsignup" class="youpasswd" data-icon="p"><b>Your password</b>
					 </label>
					<input id="passwordsignup" name="password" required="required" type="password" placeholder=""/>
				</p>

				<p> 
					<label for="number" class="number" data-icon="n"><b>Enter your number </b></label>
					<input id="number" name="number" required="required" type="text" 
					placeholder="enter number"/>
				</p>

				<p> 
					<label for="address" class="address" data-icon="n"><b>Address </b></label>
					<input id="address" name="address" required="required" type="address"
					 placeholder="enter address"/>
				</p>
				
				<p> 
					<label for="city" class="city" data-icon="n"> <b>City</b> </label>
					<input id="city" name="city" required="required" type="city" 
					placeholder="enter city"/>
				</p>

					<p> 
					<label for="state" class="state" data-icon="n"> <b>State</b> </label>
					<input id="state" name="state" required="required" type="state"
					 placeholder="enter state"/>
				</p>

					<p> 
					<label for="pincode" class="pincode" data-icon="n"> <b>Pin code</b> </label>
					<input id="pincode" name="pincode" required="required" type="pincode
					" placeholder="enter Pincode"/>
				</p>

					<p> 
					<label for="landmark" class="landmark" data-icon="n"> <b>Landmark </b></label>
					<input id="landmark" name="landmark" required="required" type="landmark
					" placeholder="enter Landmark"/>
				</p>

			
				<p> 
					<input type="submit" value="Register"/> 
				</p>
				<p class="change_link">  
					<b>Already a member ?</b>
					<a href="/userloginform" class="to_register"> Go and log in </a>
				</p>
			</form>
		</div>
		
	</div>
</div> 
<div class="block"></div>
@include('footer') 
</body>
</html>