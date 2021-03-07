<!DOCTYPE html>
<?php 
$host="localhost";
$user="root"; 
$password="";
$db="demo";

$con=mysqli_connect($host, $user, $password, $db);

if(isset($_POST['submit']))
{
    
    $uname=$_POST['Username'];
    $pswd=$_POST['Password'];
    
    $sql="select * from loginform where User='".$uname."' AND Pass='".$pswd."' limit 1";
    
    $result=mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)==1){
		echo'<script> window.location="Home.html";</script>';
    }
    else{
		
        echo"<script>alert('UserID and Password is Incorrect');</script>";
	
    }
        
}

?>
<html class="bg-teal">        
	<head>
		<meta charset="utf-8"/>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
		<!-- bootstrap 3.0.2 -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<!-- font Awesome -->
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<!-- Theme style -->
		<link href="css/AdminLTE.css" rel="stylesheet" type="text/css"/>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>     
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>  
        <![endif]-->
		<title><span id="lblHeaderTitle">CashLine</span></title>
	</head>
	<body class="bg-teal">
		<div class="form-box" id="login-box">
		<div align="center" style="background: #eaeaec;padding:0px;border-radius: 5px 5px 0px 0px;">  
		<img id="ImgLogo" src="img/logoN.png"/>
		<span id="lblStatus"></span>
		</div>
		<div class="header">
		<span id="lblHeader">CashLine Login</span></div>
		<form action="#" id="Form1" method="post">
		<input id="__VIEWSTATE" name="__VIEWSTATE" type="hidden" value="/wEPDwUKMTQyMjI2MjY1NQ9kFgJmD2QWBAIBD2QWAgIBDw8WAh4EVGV4dAUIQ2FzaExpbmVkZAIDD2QWBgIBDw8WAh4ISW1hZ2VVcmwFDWltZy9sb2dvTi5wbmdkZAIFDw8WAh8ABQ5DYXNoTGluZSBMb2dpbmRkAgcPZBYCAgkPDxYCHgdWaXNpYmxlZ2RkZJzGkZZUBTNiEp+tMvWjv2x+sEcOOZXB3H7qNAYlGWut"/>
		<input id="__VIEWSTATEGENERATOR" name="__VIEWSTATEGENERATOR" type="hidden" value="E5C39EDF"/>  
		<input id="__EVENTVALIDATION" name="__EVENTVALIDATION" type="hidden" value="/wEdAARdWDOCJEdmoA8W6fidbB3T6Oc9oEn6HP4pV7M/82MxKRxVGFH6LyUTpRw/USGolDuoIatKanHO+uhiF/QUpC21wbRbVCLrYNg1OmMr91X5B18SBoxVDohR55eTk3lqmjw="/>
		<div class="body bg-gray">
		<div class="form-group">
		<input class="form-control" id="txtUserID" name="Username" placeholder="User ID" type="text"/>
		</div>
		<div class="form-group">
		<input class="form-control" id="txtPass" name="Password" placeholder="Password" type="password"/>
		</div>
		</div>
		<div class="footer">
		<input class="btn bg-olive btn-block" id="btnLogin" name="submit" type="submit" value=" Login "/>
		<div id="PnlResetPass">
		<p>Forgot Password? <a href="PassReset.aspx">Click Here</a></p>
		</div>
		</div>
		</form>
		</div>
		<!-- jQuery 2.0.2 -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>        
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<div class="margin text-center">
		</div>
	</body>
</html>>