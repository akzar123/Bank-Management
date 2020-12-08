<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Loan Application</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Home Loan Application Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="{{ asset('f1/css/style.css') }}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{ asset('f1/css/jquery-ui.css') }}" />
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=GFS+Neohellenic:400,400i,700,700i&amp;subset=greek" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>Loan Application</h1>
		</div>
		<!--//header-->
		<!--main-->
	<div class="agileits-register">
		<form action="/addloanqry" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				<div class="w3_modal_body_grid">
					<span>Loan Type :</span>
					<input type="text" name="loantype" placeholder="Enter the loan type" required=""/>
					
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid">
					<span>Amount :</span>
					<input type="text" name="amount" placeholder="Enter the amount" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Customer ID :</span>
					<input type="text" name="cid" placeholder="Enter the customer ID" required=""/>
					<div class="clear"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Branch Number :</span>
					<input type="text" name="branchno" placeholder="Enter the branch number" required=""/>
					
				</div>
				
				
				
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Account Number :</span>
					<input type="text" name="accno" placeholder="Enter the account number" required=""/>
					
				</div>
				
				
				<div class="w3_modal_body_grid">
				
				<input type="submit" value="Apply Now" />
				<div class="clear"></div>
			</form>
		</div>
		
		<!--//main-->
		
	</div>
	<!--footer-->
		<div class="footer">
			<h2>&copy; 2019 Rupay. All rights reserved | Design by Rupay Team</h2>
		</div>
		<!--//footer-->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->		

</body>
</html>