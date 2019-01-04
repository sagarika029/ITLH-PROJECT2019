<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN FORM</title>
	<style type="text/css">
		#container_demo {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
}
h1{
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
.register{
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.register:hover {
    background-color:orange ;
    color: black;
}
.block{
	width:100%;
	height:100px;
     margin: auto;
     display:inline-block;
     color: white;
}

	</style>
</head>
<body>

	@include('nav')
	<p class="text-center">
		@if( Session::has( 'success' ))
			{{ Session::get( 'success' ) }}
		@elseif( Session::has( 'warning' ))
		    {{ Session::get( 'warning' ) }}
		 @endif
		</p>
		<div id="container_demo" >
	<div id="wrapper">
		<div id="login" class="animate form">
			<form  method="POST" action="/login"> 
				{{ csrf_field() }}
				<h1> USER LOGIN FORM</h1> 
				<p> 
 					<label for="username" class="uname" data-icon="u" > <b>Your Email Address</b> </label>
					<input id="username" name="email" required="required" type="text" placeholder="enter username" size="30" />
				</p>
				<p> 
					<label for="password" class="youpasswd" data-icon="p"> <b>Your password </b></label>
					<input id="password" name="password" required="required" type="password" placeholder="enter your password" /> 
				</p>
				<p>
					<input type="submit" value="Login" /> 
				</p>
			    <p>  
			    	<label for="reg" class="reg" data-icon="p"><b>If not log in, Then register</b>
			    	</label>
			    	<br>
			    	<br>
				  <a class="register" href="userregistrationform">Register</a>
			  </p>
		</div>
	</form>
</div>
</div>
</div>
<div class="block"></div>
</body>
</html>
@include('footer')
			