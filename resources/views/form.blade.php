<!DOCTYPE html>
<html>
<head>
	<title>User Register</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('frontside/css/bootstrap.css') }}">
	<style type="text/css">
form{
	max-width: 460px;
	margin-left: 33em;
}
body {
        background-image: url("{{ asset('frontside/wall.jpg') }}");
    } 
</style>
</head>
<body>
<header>
            <div class="container">
                <div class="header d-lg-flex justify-content-between align-items-center py-lg-3 px-lg-3">
                    <!-- logo -->
                    <div id="logo">
                        <h1><a href="/"><span class="fa fa-recycle mr-2"></span>Rupay</a></h1>
                    </div>
                    <!-- //logo -->
                    <div class="w3pvt-bg">
                    </div>
                    </div>
                    </div>
                    </header>


<form method="POST" action="/addqry">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="card">
<h2 style="background-color: grey"><center><strong>Register</strong></center></h2>
<div class="container">
<div>
<br>
<label>Name:</label>
<input type="text" placeholder="Enter the name" name="name" class="form-control" required>
</div>
<div>
<br>
<label>Customer-id:</label>
<input type="number" placeholder="Enter the customer id" name="cid" class="form-control" required>
</div>
<div>
<br>
<label>Mobile Number:</label>
<input type="number" placeholder="Contact Number" name="no" class="form-control" required>
</div>
<div>
<br>
<label>Address:</label>
<input type="text" placeholder="Enter the address" name="address" class="form-control" required>
</div>
<br>
<div>
<br>
<label>Password:</label>
<input type="password" placeholder="Enter the password" name="pasw" class="form-control" required>
</div>
<br>
<div class="text-center">
<input type="submit" name="add" value="submit" class="btn btn-success">
</div>
</div>
<div class="copyrights">
     <p>© 2019 Rupay. All Rights Reserved | Design by Rupay Team</p>
</div>  
</form>
</body>
</html>