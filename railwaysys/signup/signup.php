<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>
Jmail Registration Portal
</title>
<!--<bdo dir="rtl">juan john </bdo> -->

<script>
        
        function validator()
        {
            if(document.forms[0].password.value=="" || document.forms[0].username.value=="" || document.forms[0].email_id.value=="" || document.forms[0].phonenum.value=="")
            {
                window.alert("you must enter all fields to continue");
                die();
            }
            else if(document.forms[0].password.value!=document.forms[0].rpassword.value)
            {
                window.alert("The password did not match");
                document.forms[0].password.value="";
                document.forms[0].rpassword.value="";
                die();
            }
            else
            {
                document.forms[0].action="store.php";
            }
        }
        
</script>
<noscript>You may have disabled javascript on your browser.Please enable it to continue.</noscript>
</head>
<body onload="document.forms[0].username.focus()">
    
    <form method="POST" action="signup.php"><p><fieldset>
    Enter username:
    <input type="text" name="username" size="15" value="Enter username" onFocus="document.forms[0].username.value=''"/><br/><br/>
    Enter password:
    <input type="password" name="password" size="15" /><br/><br/>
    Reenter password:
    <input type="password" name="rpassword" size="15" /><br/><br/>
    Enter your Date of Birth:
    <input type="text" size="15" name="DOB"/><br/><br/> 
    Enter valid email id:
    <input type="text" name="email_id" value="Enter email id" onFocus="document.forms[0].email_id.value=''" size="15"/><br/><br/>
    Enter your phone number:
    <input type="text" name="phonenum" maxlength="14" size="15"/><br/><br/>
    <input type="submit" onClick="validator()" value="signup" />
    <input type="reset" value="reset"/></fieldset></p>
    </form>
</body>
</html>


