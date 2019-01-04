@include('nav')
	
	<div class="container">
		<form name="checkoutform" id="checkoutform" action="{{ url('checkoutPage') }}" method="post">
		{{ csrf_field() }}
		<div class="checkout">
			<div class="col-sm-4 col-sm-offset-1">
				<div>
					<h3>Bill To</h3>
					<div class="form-group">
						<input name="name"id="name" value="{{ $userDetails->name }}" type="text"  placeholder="Billing Name " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="address" id="address" value="{{ $userDetails->address }}"type="text"  placeholder="Billing Address " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="city" id="city" value="{{ $userDetails->city }}" type="text"  placeholder="Billing City" class="form-control"/>
					</div>

					<div class="form-group">
						<input name="state" id="state" value="{{ $userDetails->state }}"type="text"  placeholder="Billing State " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="pincode" id="pincode" value="{{ $userDetails->pincode }}" type="text"  placeholder="Billing Pincode " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="number" id="number" value="{{ $userDetails->number}}" type="text"  placeholder="Billing Mobile " class="form-control"/>
					</div>

					

					</div>
			</div>
			<div class="col-sm-1">
				<h2></h2>
			</div> 

			 <div class="col-sm-4">
			<div>
					<h3>Ship To</h3>
						
					<div class="form-group">
						<input name="name" id="name" value="{{ $userDetails->name }}"type="text"  placeholder="Shipping Name "class="form-control"/>
					</div>

					<div class="form-group">
						<input name="address" id="address"value="{{ $userDetails->address }}" type="text"  placeholder="Shipping Address " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="city" name="city" value="{{ $userDetails->city}}" type="text"  placeholder="Shipping City" class="form-control"/>
					</div>

					<div class="form-group">
						<input name="state" name="state" value="{{ $userDetails->state}}"type="text"  placeholder="Shipping State " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="pincode" id="pincode" value="{{ $userDetails->pincode }}"type="text"  placeholder="Shipping Pincode " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="number" id="number" value="{{ $userDetails->number }}" type="text"  placeholder="Shipping Mobile " class="form-control"/>
					</div>
					
				</div>
 
 <div>
 <button type="submit" value="submit">Proceed to Purchase</button>
					</div>
		</div>
	</div>
</form>

@include('footer')

