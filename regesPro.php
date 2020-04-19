<HTML>

<HEAD>

<link rel="stylesheet" type="text/css" href="ext.css">

<link rel="stylesheet" type="text/css" href="external.css">

<TITLE>REGISTRATION FORM</TITLE>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function validateform()
 {
	        var sname,pass,email;
		var x = $(".name").val();
		if(x == '')
		{
			alert("Name field left blank");
			return false;
		}
 		var sname = $(".surname").val();
		if(sname =="")
		{
			alert("Last Name Field left blank");
			return false;
  		}
                pass =  document.forms["reges"]["password"].value;
		if(pass =="")
		{
			alert("Password Field left blank");
			return false;
  		} 
                email =  document.forms["reges"]["email1"].value;
		if(email =="")
		{
			alert("Email Field left blank");
			return false;
                }
                var y=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
                if(!y.test(email))
		{
			alert("Please Enter valid email");
			return false;
  		}
	}
</script>
</HEAD>
<BODY >
<ul>
  <li><a href="regesPRO.php">REGISTER</a></li>
  <li><a href="index.php">LOGIN</a></li>
</ul>

<FORM name="reges" onsubmit="return validateform()" action="add.php" method="post">

<TABLE ALIGN="CENTER" cellpadding="5">
<TR>
<TD>FIRST NAME<font color="red"<sup>*</sup></font></TD>
<TD><INPUT NAME="name" class="name" TYPE="TEXT" PLACEHOLDER="Enter Your First Name"></TD>
</TR>
<TR>
<TD>LAST NAME <font color="red">*</font></TD>
<TD><INPUT NAME="surname" class="surname" TYPE="TEXT" PLACEHOLDER="Enter Your Last Name"></TD>
</TR>
<TR>
<TD>EMAIL ID<font color="red">*</font></TD> 
<TD><INPUT TYPE="TEXT" name="email1" PLACEHOLDER="Enter valid email id"></TD>
</TR>
<TR>
<TD> PASSWORD<font color="red">*</font> </TD>
<TD><INPUT NAME="password" ID="pas" TYPE="password" PLACEHOLDER="Enter Your Password"></TD>
</TR>
<TR>
<TD>ADDRESS   </TD>
<TD><INPUT TYPE="TEXT" NAME="ADDRESS" PLACEHOLDER="Enter your Address"></TEXTAREA>
</TD></TR>
<TR>
<TD>BUYER/SELLER</TD>
<TD><INPUT TYPE="RADIO" NAME="BS"VALUE="buyer" CHECKED>BUYER</TD>
</TR>
<TR>
<TD></TD>
<TD><INPUT TYPE="RADIO" NAME="BS"VALUE="seller">SELLER</TD>
</TR>
<TD COLSPAN="2"ALIGN="CENTER"><INPUT TYPE="SUBMIT" VALUE="SIGNUP"></TD>
</TR>
</TABLE>
</FORM>
</BODY>
</HTML>
