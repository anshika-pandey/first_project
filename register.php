<html>
	<head>
		<script type="text/javascript">
		var reg= new RegExp("[^a-z|^A-Z]");
		var flag=0;
		var r=new RegExp("[0-9]");
		document.write("hi");
		function val_user(f1)
		{
			if(reg.test(f1.user.value)||f1.user.value=="")
			{
				alert("enter valid n");
				flag=1;
			}
		}
		function val_pass(f1)
		{
			if(f1.pwd.value.length<5)
			{
				alert("password must be atleast 5 characters long");
				flag=1;
			}
		}
		function val_mob(f1)
		{
			if(f1.mob.value.length!=10||(! r.test(f1.mob.value)))
			{
				alert("Enter valid phone number(must be of 10 digit) and only digits");
				flag=1;
			}
		}
		function val_email(f1)
		{
			var x=document.f1.email.value;  
			var atposition=x.indexOf("@");  
            var dotposition=x.lastIndexOf(".");  
			if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
			{  
			alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
       
		
			}
		}
		</script>
	</head>
	<body>
	<form name="f1"  method="get" action="validate.php">

	userid<input type="text" name="user" onblur="val_user(this.form)"><br><br>
	password<input type="password" name="pwd" onblur="val_pass(this.form)"><br>
	<br>
	mobile no<input type="text" name="mob" onblur="val_mob(this.form)"><br><br>
	email id<input type="text" name="email"><br>

 
	<input type="submit" >
	
	</form>

</body>
</html>
