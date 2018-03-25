<html>
<head>
<title>Payment</title>
<script type="script/text">
function random()
{
	var a = Math.floor(Math.random() * 1000000);
	return a;
}

function checksumstr(form)
{
	var a = form.PRN.value;
	var b = form.AMOUNT.value;
	var c = form.MERCHANTCODE.value;
	a = a.tostring();
	b = b.tostring();
	c = c.tostring();
	var d = "|";
	var e = e.concat(c,d,a,d,b,d,"#2&[W<nJ*K\"xO_z");
	return e;
}

</script>
</head>
<body>
<form  name="pay" action="http://emitrauat.rajasthan.gov.in/payments/v1/init" method="POST">
<input type="hidden" name="MERCHANTCODE" value="HACKATHON2017" />
<input type="hidden" name="PRN" value="random();" id="prf" />
<input type="hidden" name="REQTIMESTAMP" value="20170320224010777" />
<input type="hidden" name="PURPOSE" value="Payment" />
<input type="hidden" name="AMOUNT" placeholder="Amount" id="amt" value=""/>
<input type="hidden" name="SUCCESSURL" value="https://rajasthan-hackathon.hackerearth.com/" />
<input type="hidden" name="FAILUREURL" value="https://rajasthan-hackathon.hackerearth.com/" />
<input type="hidden" name="CANCELURL" value="https://rajasthan-hackathon.hackerearth.com/" />
<input type="hidden" name="USERNAME" placeholder="UserName" />
<input type="hidden" name="USERMOBILE" value="UserMobile" />
<input type="hidden" name="USEREMAIL" value="UserEmail" />
<input type="hidden" name="UDF1" value="<UDF1>" />
<input type="hidden" name="UDF2" value="<UDF2>" />
<input type="hidden" name="UDF3" value="<UDF3>" />
<input type="hidden" name="OFFICECODE" value="<OFFICECODE>" />
<input type="hidden" name="REVENUEHEAD" value="<REVENUEHEAD>" />
<input type="hidden" name="CHECKSUMSTR" value="<?php md5('checksumstr(this.form);');?>"/>
<button type="submit">Submit</button>
</form>
</body>
</html>
