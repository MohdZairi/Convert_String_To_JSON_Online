<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert To JSON Online</title>
</head>
<body>
<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Convert String Value to JSON Object</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-6">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" id="firstname"/>
			</div>
			<div class="form-group">
				<label>Matric Number</label>
				<input type="text" class="form-control" id="matricnumber"/>
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" class="form-control" id="address"/>
			</div>
			<center><button onclick="convertToJSON()" class="btn btn-default">Convert</button></center>
		</div>
		<div class="col-md-6">
			
			<h4>Result</h4>
			<div id="result"></div>
		</div>
	</div>
</body>
<script src="script.js"></script>
</html>