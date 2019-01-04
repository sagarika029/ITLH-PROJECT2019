@include('nav')

<style type="text/css">
	.tableContainer-1{
		height: 100%;
		width:100%;
		display: table;
		text-align: center;
	}
	.myTable{
		margin: auto;
		border-collapse: collapse;
		font-family: arial,sans-serif;

	}
	td,th{
		margin: 20px;
		border:1px solid #dddddd;

	}
	tr:nth-child(even){
		background-color: #dddddd;
	}
	h1{
		text-align: center;
	}
	.Order{
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
}
.Order:hover{
    background-color:orange ;
    color: black;
}
.block{
	width:100%;
	height:100px;
     margin: auto;
     display:inline-block;
}
</style>
</head>
<body>

<div class="container">
		<form action="/confirm">
			{{ csrf_field()}}
		<div class="row1">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="log">
					<h2>Bill To</h2>
					<div class="form-group">
						{{ $userDetails->name }}
					</div>

					<div class="form-group">
				        {{ $userDetails->address }}
					</div>

					<div class="form-group">
						{{ $userDetails->city }}
					</div>

					<div class="form-group">
					    {{ $userDetails->state }}
				   </div>

					<div class="form-group">
						{{ $userDetails->pincode }}
					</div>

					<div class="form-group">
						{{ $userDetails->number}}
					</div>

					

					</div>
			</div>
			<div class="col-sm-1">
				<h2></h2>
			</div> 

			 <div class="col-sm-4">
			<div class="signup form">
					<h2>Ship To</h2>
						
					<div class="form-group">
						{{ $userDetails->name }}
					</div>

					<div class="form-group">
						{{ $userDetails->address }}
					</div>

					<div class="form-group">
						{{ $userDetails->city}} 
					</div>

					<div class="form-group">
						{{ $userDetails->state}}
					</div>

					<div class="form-group">
						{{ $userDetails->pincode }}
					</div>

					<div class="form-group">
						{{ $userDetails->number }}
					</div>
					
				</div>

		</div>
	</div>


	
	
				<div class="tableContainer-1">
					<h2>ORDER REVIEW</h2>
						<table class="myTable" border>
							<thead>
								<tr>
				
									<th>PRODUCT NAME</th>
									<th>QUANTITY</th>
									<th>PRICE</th>
									<th>SIZE</th>
									<th>STATUS</th>
									<th>TOTAL AMOUNT</th>
									<th>REMOVE</th>
								</tr>
							</thead>

							<tbody>
							@php($total = 0)
							@foreach($shoes as $shoe)
							<tr>
								<td> {{ $shoe->name }} </td>
								<td> {{ $shoe->quantity  }} </td>
								<td> ${{ $shoe->price  }} </td>
								<td> {{ $shoe->size }} </td>
								<td> {{ $shoe->status }} </td>
								<td> ${{ $shoe->price*(int)$shoe->quantity }} </td>
								<td><a href="/removeshoe/{{ $shoe->id }}">Remove</a></td>
							</tr>
							@php($total += ((int)$shoe->quantity * (int)$shoe->price))
							@endforeach

							

							Grand Total : ${!! $total !!}

						</tbody>	
							
						</table>
						<br>   

						<label for="payment">Payment Method</label>
						<input type="radio" name="gender" value="male"> COD
                        <input type="radio" name="gender" value="female"> Credit/Debit Card
                        <input type="radio" name="gender" value="other"> Net Banking

						<div>
							<button type="submit" value="submit" class="Order">CONFIRM ORDER</button>
						</div>
					</div>

					<div class="block">
					</div>
				

				</body>

				</form>



@include('footer')