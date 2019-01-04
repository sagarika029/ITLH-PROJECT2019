<!DOCTYPE html>
<html>
<head>
	<title>LIST OF PRODUCTS</title>
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
	.logout{
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
}
.logout:hover {
    background-color:orange ;
    color: black;
}
</style>
</head>
<body>
	<h1>LIST OF PRODUCTS</h1>
			
				<div class="tableContainer-1">
						<table class="myTable" border>
							<thead>
								<tr>
				
									<th>PRODUCT NAME</th>
									<th>QUANTITY</th>
									<th>PRICE</th>
									<th>STATUS</th>
									<th>EDIT</th>
									<th>DELETE</th>	
								</tr>
							</thead>

						<tbody>
							@foreach($products as $product)
							<tr>
								<td> {{ $product->name }} </td>
								<td> {{ $product->quantity }} </td>
								<td> {{ $product->price }} </td>
								<td> {{ $product->status }} </td>
								<td><a href="/editproduct/{{ $product->id }}">Edit</a></td>
								<td><a href="/deleteproduct/{{ $product->id }}">delete</a></td>
							</tr>
							@endforeach

						</tbody>	
							
						</table>
						<p>  
			    	<label for="log" class="log" data-icon="p"><b>ADMIN LOGOUT</b>
			    	</label>
			    	<br>
			    	<br>
				  <a class="logout" href="userloginform">Logout</a>
			       </p>
			</div>


					 
        </body>
        </html>