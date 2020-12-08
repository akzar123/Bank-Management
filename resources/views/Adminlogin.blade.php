<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Master  Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{ asset('fronts/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('//fonts.googleapis.com/css?family=Cormorant+SC:300,400,500,600,700') }}" rel="stylesheet">
<link href="{{ asset('//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i') }}" rel="stylesheet">
</head>

<body>
  <div class="main-w3-pvt-header-sec" id="home">

        <!-- header -->
        <header>
            <div class="container">
                <div class="header d-lg-flex justify-content-between align-items-center py-lg-3 px-lg-3">
                    <!-- logo -->
                    <div id="logo">
                        <h1><a href="/"><span class="fa fa-recycle mr-2"></span>Repay</a></h1>
                    </div>
                    <!-- //logo -->
                    <div class="w3pvt-bg">
	<div class="padding-all">
		<div class="header">
			<h1>Admin Login Form</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<form action="/adminLogin" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="text" name="name" placeholder="User Name" required=""/>
					<input type="password"  name="password" class="padding" placeholder="Password" required=""/>
					<input type="submit" value="login">
				</form>
			</div>
		  <div class="clear"> </div>
		</div>
		
		<div class="footer">
		<p>© 2019 Rupay. All Rights Reserved | Design by  Rupay Team</p>
		</div>
	</div>
</body>
</html>