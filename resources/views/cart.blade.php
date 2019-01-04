@include('nav')

<title>YOUR CART PAGE</title>
<style type="text/css">
	.tableContainer-1{
		height: 100%;
		width:100%;
		display: table;
		text-align: center;
	}
	.myTable{
		margin:0 auto;
		border-collapse: collapse;
		font-family: arial,sans-serif;

	}
	td,th{
		padding: 8px;
		border:1px solid #dddddd;

	}
	tr:nth-child(even){
		background-color: #dddddd;
	}
	h1{
		text-align: center;
	}
	.order{
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
}
.order:hover {
    background-color:orange ;
    color: black;
}
</style>
</head>
<body>
	<h1>YOUR CART</h1>
	
			
				<div class="tableContainer-1">
						<table class="myTable" border>
							<thead>
								<tr>
									<th>PRODUCT NAME</th>
									<th>QUANTITY</th>
									<th>PRICE</th>
									<th>SIZE</th>
									<th>STATUS</th>
									<th>REMOVE</th>
								</tr>
							</thead>

							<tbody>
							@php($total = 0)
							@foreach($shoes as $shoe)
							<tr>
								<td> {{ $shoe->name }} </td>
								<td> {{ $shoe->quantity }} </td>
								<td> ${{ $shoe->price }} </td>
								<td> {{ $shoe->size }} </td>
								<td> {{ $shoe->status }} </td>
								<td><a href="/removeshoe/{{ $shoe->id }}">Remove</a></td>
							</tr>
						
							  @php($total += ((int)$shoe->quantity * (int)$shoe->price))
							@endforeach

							Grand Total : ${!! $total !!}


						</tbody>	
							
						</table>
						<br>

						<div>
							<a class="order" href="{{ url('/checkout') }}">Place Order</a>
						</div>
					</div>
				

				</body>


				


	
   