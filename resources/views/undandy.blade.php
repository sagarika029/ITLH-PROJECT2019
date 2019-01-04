

  @include('nav')
<div class="parent">
	<img src="images/0_s.webp">
</div>	
	<div class="slider-box left-side">
            <div class=" square" >
            	<div class="content">CREATE OUR LEGACY</div>
            	<div class="content-text"><p>Unleash your creative genius by custoising shoes as authentic<br>and utterly unique as you are<p></div>
            		<div>
            		 <a href="/DesignYours"><button class="button">DESIGN YOURS</button></a>
            		</div>
            	</div>
            </div>

   <div class="blk"></div>

<div class="sentence">
	<p>
		<strong> A TRADITIONAL WAY OF CRAFTING,A CONTEMPORARY WAY OF PURCHASING</strong>
	</p>
</div>

<div class="division">
	<div class="col-md-12">
		<div class="col-md-4">
			<a href="/DesignYours">
			<div class="div1">
				<p> Design <br> yours</p>
			</div>
		</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="div1">
				<p> Your shoe is <br> handcrafted</p>
			</div>
		</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="div1">
				<p>Unwrap your new <br> sole mates after <br> 14 days</p>
			</div>
		</a>
		</div>
	</div>
</div>

<div class="block"></div>

<div class="leading">
	<p>
		<strong>LEADING MEN</strong>
	</p>
</div>
<div class="row  ">
			<div class="col-md-12">
				@foreach($shoes as $shoe)
				<div class="col-md-4" >
                   <a href="{{ url('shoeDetails', [$shoe->id]) }}"> 
						<div class="product-card text-center">
							<img src="{{ $shoe->image }}" class="img-responsive height-250">
							<div class="black">
								<p><strong>{{ $shoe->name }}</strong></p>
							</div>
							<p class="text-muted"><strong>{{ $shoe->price }}</strong></p>
						</div>
					</a>
				</div>
				@endforeach
			</div>


							
</div >

<div class="block"></div>
<div class="contemp">
		<div>
		<p>-/CONTEMPORARY CRAFTMANSHIP</p>
		</div>
</div>

<div class="art">
	<div>
		<p>THE ART OF SHOEMAKING</p>
	</div>
</div>
<hr>



	<div class="row">
	<div class="col-md-12">
		<div class="col-md-4" >
                 <div class="site1">
					<img src="images/site.webp" class="img-responsive height-250">
				</div>	
		</div>

<div class="row">
	<div class="col-md-4" >
			<div class="transparent">
					Undandys are proudly handcrafted in a third-generation shoe workshop in São João da Madeira, often referred to as the shoe capital of Portugal. Portuguese craftsmanship is world renowned, most of our cobblers have been working with shoes for over 40 years passed from generation to generation, with incredible passion and dedication to crafting each and every pair of shoes.
			</div>	
			<div class="tab"><button>DISCOVER MORE</button></div>

		</div>

		<div class="row ">
		<div class="col-md-4" >
				<div class="site2">
					<img src="images/artofshoe.webp" class="img-responsive height-400">
				</div>	
		</div>
    </div>
</div>
</div>
</div>

<div class="block"></div>

  <div class="row">
   	<div class="col-md-12">
		<div class="col-md-6">
			
				<div>
					<img src="images/capture.webp" class="img-responsive height-400">
					
				</div>
			
			</div>

		<div class="col-md-6">
			
				<div class="text">
				  <div>-/PATINAS</div>
			   </div>	

		<div>
				<p class="text2">THE STROKE OF GENIUS</p>
		</div>
		<hr>
				<div class="text3">The creme de la creme of traditional, artisan <br> craftmanship, this hand painted finish is utterly unique<br> and breathes authenticity into each pair of shoes.</div>
				</div>

		<div class="tab"><button>DISCOVER THE COLLECTION</button></div>
			
		</div>

		<div class="block"></div>


		<div class="text4">-/UNDANDY</div>

		<div class="header-text">

			<p> Come Walk With Us</p>

		</div>

		<div class="header-text2">
			<p>Behind Every Great pair of Shoes,There Should Always Be a Greater Man.Discover the path of Enlightment.</p>
		</div>

<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
						
				<div class="lit">
					<a href="readmore">
					<img src="images/lat.webp">
				</a>
					<p> Mr Undandy | 27 aug 2018</p>
				</div>
				<div class="image-text1">
					<p>Invest In Shoes And Beds</p>
				</div>
				<div class="image-text2">
					<p>One philosophy of success is that no-one will invest in you, until you truly begin to invest in yourself.</p>
				</div>
				<div class="link">	
				<a href="readmore"> READ MORE </a>
			   </div>
		</div>	 





<div class="col-md-6">
	<div class="lit">
		<a href="readmore1">
			 <img src="images/lat2.webp">
		</a>
				<p> Mr Undandy | 27 Aug 2018</p>
		</div>
		<div class="image-text3">
				<p>Why Undandy Is Better For You Than Tinder</p>
		</div>
		<div class="image-text4">
				<p>Whatever you want, the internet can provide it. But all these limitless options can start to get a bit exhausting, and no more so than when it comes to the dating world..</p>
		</div>
		<div class="link">	
			<a href="readmore1"> READ MORE </a>
		</div>
	</div>
</div>

<div class="block"></div>


<div class="division">
	<div class="col-md-12">
		<div class="col-md-4">
			<a href="#">
			<div class="div1">
				<p> Custom Made <br> Dress Shoes</p>
			</div>
		</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="div1">
				<p> Handcrafted Using <br> Finest Materials</p>
			</div>
		</a>
		</div>
		<div class="col-md-4">
			<a href="#">
			<div class="div1">
				<p>Delivered to you <br> in 14 days</p>
			</div>
		</a>
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