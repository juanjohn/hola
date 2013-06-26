<?php
ob_start();
session_start();
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
header("Location: login/login.php");
ob_end_flush();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<header>
<link rel="shortcut icon" href="images.jpg">
</header>
<head>

	<style type="text/css" >
	bdy 
	{
	  /* fallback */
	  background-color: #1a82f7;
	  background: url(images/linear_bg_2.png);
	  background-repeat: repeat-x;
	
	  /* Safari 4-5, Chrome 1-9 */
	  background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#1a82f7), to(#2F2727));
	
	  /* Safari 5.1, Chrome 10+ */
	  background: -webkit-linear-gradient(top, #2F6060, #1a82f7);
	
	  /* Firefox 3.6+ */
	  background: -moz-linear-gradient(top, #2F6060, #1a82f7);
	
	  /* IE 10 */
	  background: -ms-linear-gradient(top, #2F6060, #1a82f7);
	
	  /* Opera 11.10+ */
	  background: -o-linear-gradient(top, #2F2727, #1a82f7);
	}
    fieldset
    {
		border:0px;
    	height:490px;
    	text-align:right;
    	
    }
	#signin
	{
		position:relative;
		top:100px;
		right:70px;
	}
	#register,#submit
	{
		background-color:#cccccc;
	}
	#shadow
	{
		width: 1366px;
		height: 13px;
		background: radial-gradient(at 50%, rgb(255, 255, 255), rgba(255, 255, 255, 0.035) 80%) center -9px;
		backgound-size: 400px 12px;
		background-repeat: no-repeat;
		opacity: 0.4;
		-webkit-animation: shadow 1s infinite alternate;
		-moz-animation:shadow 1s infinite alternate;
		-ms-animation:shadow 1s infinite alternate;
		-animation:shadow 1s infinite alternate;
	}
	
	{
		color:#1a82f7;
		border:1px solid #C00;
	}
    </style>
    <script type="text/javascript">
	function loc()
	{
		top.location.href="signup/signup.php";
	}
	</script>

    <title>
        Welcome to Jmail
    </title>
    <meta name"homepage" description="da hme pg of jmail"/>
    
</head>
<body onload="document.forms[0].username.focus()" style="background-color:#b0c4de;">
	<div align="center">
		<img src="main.png" style="position:absolute;width:1348px; height:110px;left:0px;top:0px;">
    	<img src="opac-80.png" style="position:absolute;width:745px; height:40px;top:35px; left:300px; opacity:1; border:1px solid #FFF;"/>
    </div>
    
    <div id="1" align="center"><pre><br/></pre><h1 style="position:relative;top:-13px; color:rgb(255,255,255);">Welcome to Jtravels, the Online Reservation System</h1><pre></pre></div>
    <div id="3">
    
    <fieldset><div id="signin">
        <form action="login/login.php" method="POST"><p>
        Username<br/>
        <input type="text" name="username" /><br/>
        Password<br/>
        <input type="password" name="password"/><br/>
        <input type="Submit" id="submit" value="Sign In" /><br/>
        Not registered yet?    
        </p>
        </form>
        <input type="button" id="register" value="register" onClick="loc()"/>
    </div></fieldset>
    
    <!--<img src="icons.png" id="_icons" style="position:absolute;left:150px;top:165px;"/>-->
    <div align="center">
    <div id="shadow"></div>
    <img src="social-icon.png" style="display:block; background:no-repeat;" />
    <aside style="color:rgba(255,255,255,0.6);"> &copy;2013 Jtravel stays private limited</aside>
    <a rel="sidebar" target="_blank" href="pparar"></a>
    </div>
    </div>
    
</body>
</html>