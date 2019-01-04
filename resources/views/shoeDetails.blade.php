	<!DOCTYPE html>
<html>
<head>
	<title>ITLH PROJECT</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<LINK rel=stylesheet type="text/css" href="/css/project.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="small-container">
		<p>-/FREE RETURNS & EXCHANGES - WORLDWIDE</p>
	</div>
<nav class="navbar navbar-default">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
     
     <ul class="nav navbar-nav navbar-left">
        <li><a href="/DesignYours">Design Yours</a></li>
        <li>
          <a href="/shoe">Shoes</a>
      </li>
    </ul>

    <a href="/">
    <div class="undandy-image">
    	<img src="/images/logo.webp" >
    </div>
    </a>	


      <ul class="nav navbar-nav navbar-right">
       <li><a href="#">Accessories</a></li>
        <li>
          <a href="/undandyworld">Undandy World</a>
      </li>
     <a href="/userloginform" title="My Account"><i class="fa fa-user-o" style="font-size:24px"></i></a>
     <a href="/cart" title="Add To Cart"> <i class="fa fa-shopping-bag" style="font-size:24px"></i></a>
     <a href="/logout" title="logout" class="fa fa-sign-out" style="font-size:18px"></a>
  </ul>
</div>
</nav>
	<style type="text/css">
		.small-container{
	width:100%;
	background-color: orange;
     margin: auto;
     display:inline-block;
     font-weight: bold;	
     text-align: center;
     padding-top: 2px;
	}   

	body{
		background-color: white !important;
	}
   .logo
  {
	color:orange !important;

}
.undandy-image{
	text-align: center;
}
		.height-600{
			height:600px;
			cursor: pointer;
		}
		.oxford{
			font-size: 10px;
			color:grey;
			font-weight: bold;
			padding-top: 20px;
		}
		.powell{
			font-style:italic;	
	  		font-family: "Times New Roman", Times, serif;
			font-size: 40px;
		}
		.num{
			font-weight: bold;
		}
		.small-text{
			font-size:10px;
			color:grey;
			word-spacing: 1px;
		}
		.shoesize{
			padding-bottom: 40px;
		}
		.butn{
			background-color: orange;
            border: 1px solid orange;
            color: white;
            margin-left: 20px;
			margin-bottom: 20px;
			padding: 5px 25px;
		}
		.butn:hover{
			color:white;
		}
		.small-text2{
			font-size:10px;
			color:grey;
			word-spacing: 1px;
		}
		.big-text{
			color:grey;
			word-spacing: 1px;
		}
		.with{
			font-style:italic;	
	  		font-family: "Times New Roman", Times, serif;
			font-size: 40px;
			text-align: center;
		}

		.btns{
			margin-top: 20px;
		}
		
		.box1{
	       width:100%;
	       height:200px;
           margin: auto;
           display:inline-block;
           background-color: #E0E0E0;
           padding: 20px;
           margin-bottom: 10px;
}
.box2{
	width:100%;
	height:200px;
     margin: auto;
     display:inline-block;
     background-color: #E0E0E0;
     
}
.box-details{
	text-align: center;
	font-style: italic;
	font-size:50px;
	font-family: "Times New Roman", Times, serif;
}
.box-details2{
	text-align: center;
	font-style: italic;
	font-size:15px;
	font-family: "Times New Roman", Times, serif;
}
.details{
	text-align: center;
	font-weight:bold;
	padding-top: 10px;
}
.details1{
	text-align: center;
	color:orange;
}
.container{
	width:100%;
	height:70px;
	background-color: orange;
     margin: auto;
     display:inline-block;
	}

.apply{
	text-align: center;
	font-style: italic;
	font-family: "Times New Roman", Times, serif;
	font-size: 40px;
}
footer{
	background-color: #E0E0E0;
	padding-top: 10px;
}
ol {
	list-style-type: none;
}
.list-item{
	padding-top: 10px;
}
.btn1{
  padding:5px 25px; 

}


.btn3{
	color:black;
	border:1px solid black;
	padding:5px 10px;
	margin-left: 20px;
}
.block{
	width:100%;
	height:100px;
     margin: auto;
     display:inline-block;
}
.bag {
    background-color: orange;
    color: white;
    padding: 8px 25px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin:12px 10px;
}

/* When moving the mouse over the submit button, add a darker green color */
.bag:hover {
    background-color:orange ;
    color: black;
}


	</style>
</head>
<body>
	<p class="text-center">
		@if( Session::has( 'success' ))
			{{ Session::get( 'success' ) }}
		@elseif( Session::has( 'warning' ))
		    {{ Session::get( 'warning' ) }}
		 @endif
		</p>

	
	<div class="imgsrc">
		<div class="col-md-12">
	<div class="col-md-2">
	<p>OXFORD</p>
	</div>


		<div class="col-md-5" >

		<div class="product-card image-center">
			<img src="{{ $shoe->image }}" class="img-responsive height-600">
		</div>
	</div>

	<div class="col-md-5">
		<form name="addtocartform" id="addtocartform" action="{{ url('add-cart') }}" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="name" value="{{ $shoe->name }}">
		<input type="hidden" name="product_id" value="{{ $shoe->id }}">

		<input type="hidden" name="quantity" value="{{ $shoe->quantity }}">

		<input type="hidden" name="size" value="{{ $shoe->size }}">

		<input type="hidden" name="price" value="{{ $shoe->price }}">


			<p class="oxford">OXFORD</p>
			<p class="powell">
				{{ $shoe->name }}
			</p>

			<p class="num"> ${{ $shoe->price }} </p>
			<p class="small-text">Made to order, typically delivers within 2 weeks. Free returns & exchanges - worldwide.</p>
			<hr>

			<p class="big-text">{{ $shoe->description }}</p>


            <div>
			<select>
  					 <option value="shoesize" class="shoesize" required>-Select Shoe Size-</option>
                    <option value="38">38 UK 5 1/2 US 6</option>
                    <option value="39">39 UK 6 US 6 1/2</option>
                    <option value="40">40 UK 6 1/2 US 7</option>
                     <option value="41">41 UK 7 US 7 1/2</option>
                      <option value="42">42 UK 7 1/2 US 8</option>
                       <option value="43">43 UK 8 US 8 1/2</option>
                        <option value="44">44 UK 8 1/2 US 9</option>
                         <option value="45">45 UK 9 US 9 1/2</option>
            </select>
        </div>

            <br>

            	<div class="quantity">
            		<p>QUANTITY</p>
            		<input type="text" name="quantity" size="5" required="required">
            	</div>
            
  				
            	<div class="btns">
            		<button class="btn1">CUSTOMIZE</button>	
            		<button class="bag" type="submit">ADD TO BAG</button>
            	</form>
		</div>
	</form>

            	<div>
            	     <p class="small-text2">Fits true to size. If between sizes, select the size down.  For extended sizes, click here..</p>
            	 </div>    
			<hr>
		</div>
		
  </div>
</div>
<div class="block"></div>
<div class="box1">
		<div class="box-details">
			<p>Get In Touch</p>
		</div>
		<div class="box-details2">
			<p>May we be of assistance? There is nothing that we love more than helping our<br>customers find their sole mate. Whether it's fit,function or just to get better <br>acquainted with Undandy, we're here to help.</p>
		</div>	
	</div>

<div class="box2">
		<div class="col-md-12">
			<div class="col-md-4">	
					<div class="details">
						<p><strong>Email</strong></p>
					</div>
					<div class="details1">
						<p>CUSTOMERCARE@UNDANDY.COM</p>
					</div>
					<div class="details2">
						<p>We're delighted to converse over emails. You shall be responded to within 24 hours, and a gentleman never breaks a promise.</p>
					</div>
			</div>
					 
				<div class="col-md-4">	
					 <div class="details">
						<p><strong>CALL</strong></p>
				     </div>
					<div class="details1">
						<p>+351 210 497 840</p>
					</div>
					<div class="details2">
						<p>In the digital age, sometimes there is nothing better than a good old-fashioned chit chat on the telephone. We are awaiting your call.</p>
					 </div>
				</div>

				<div class="col-md-4">	
					 <div class="details">
						<p><strong>CHAT</strong></p>
				     </div>
					<div class="details1">
						<p>IN A DASH ?</p>
					</div>
					<div class="details2">
						<p>Talk to a real person, quick as a flash and conveniently through our live chat service. Impatience is a virtue here.</p>
					 </div>
				</div>
		</div>
	</div>



		@include('footer')	
		
</body>
</html>