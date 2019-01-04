<!DOCTYPE html>
<html>
<head>
	<title>PRODUCT DETAILS PAGE</title>
	<style type="text/css">
		input[type=text], select, textarea {
   
    padding: 12px; 
    border: 1px solid #ccc; 
    border-radius: 4px; 
    box-sizing: border-box; 
    margin-top: 6px;
    margin-bottom: 16px; 
    
}

input[type=submit] {
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin:12px 10px;
}

input[type=submit]:hover {
    background-color:orange ;
    color: black;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
}
h1{
    text-align: center;
}

	</style>
</head>
<h1> PRODUCT DETAILS </h1>
<body>
	<div class="container">
		<label for="fname">ENTER PRODUCT ID:-</label>
    <input type="text" id="" name="" placeholder="enter product ID" size="20" required>
    <br>

    <label for="fname">ENTER PRODUCT NAME:-</label>
    <input type="text" id="" name="" placeholder="enter product name" size="20" required>
<br>
    

<div class="city">

  <label class="id">PRICE:-</label>
  		<input type="text" name="price" placeholder="enter prize" size="20"required>
        
     </div>

 <div>        
     <label for="description">DESCRIPTION:-</label>
     <input type="text" name="description" placeholder="product details" size="30"required>
</div>

    <div>
 <label class="id" for="fileupload">SELECT AN IMAGE TO UPLOAD</label> 
    <input type="file" name="image" value="fileupload" id="fileupload">
</div>


 <div>
  <input type="submit" value="Submit" />
</div>

</div>


</body>
</html>