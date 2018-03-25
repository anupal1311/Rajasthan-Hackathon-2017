<?php
require("connection.php");
$AMOUNt= urldecode($_POST['AMOUNT']);
$USERNAMe= urldecode($_POST['USERNAME']);
$USERMOBILe= urldecode($_POST['USERMOBILE']);
$USEREMAIl= urldecode($_POST['USEREMAIL']);

function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$PRn = generateRandomString();
$CHECKSUm = "HACKATHON2017"."|"."$PRn"."|"."$AMOUNt"."|"."#2&[W<nJ*K\"xO_z";
echo "$CHECKSUm";
echo "<br>";
echo "$AMOUNt";
echo "<br>";
echo "$PRn";
echo "<br>";
echo "$USERMOBILe";
echo "<br>";
echo "$USEREMAIl";
echo "<br>";
echo "$USERNAMe";
echo "<br>";
/* echo
'<!DOCTYPE html>
<head>
<title></title>
</head>
<body>
<form action="http://emitrauat.rajasthan.gov.in/payments/v1/init" method="POST">
<fieldset>
<legend>Pay Form</legend>
<input type="hidden" name="MERCHANTCODE" value="HACKATHON2017" />
<input type="hidden" name="PRN" value="$PRn" />
<input type="hidden" name="REQTIMESTAMP" value="20172103010310321" />
<input type="hidden" name="PURPOSE" value="Haan" />
<input type="number" name="AMOUNT" value="$AMOUNt" />
<input type="hidden" name="SUCCESSURL" value="https://www.google.co.in/?gfe_rd=cr&ei=esDPWIetIpDz8Aesm5W4BA&gws_rd=ssl" />
<input type="hidden" name="FAILUREURL" value="https://www.facebook.com/" />
<input type="hidden" name="CANCELURL" value="https://www.youtube.com/" />
<input type="hidden" name="USERNAME" value="$USERNAMe" />
<input type="hidden" name="USERMOBILE" value="$USERMOBILe" />
<input type="hidden" name="USEREMAIL" value="$EMAIl"/>
<input type="hidden" name="UDF1" value="#" />
<input type="hidden" name="UDF2" value="#" />
<input type="hidden" name="UDF3" value="#" />
<input type="hidden" name="OFFICECODE" value="#" />
<input type="hidden" name="REVENUEHEAD" value="#" />
<input type="hidden" name="CHECKSUM" value="$CHECKSUm" />
<button type="submit">Submit</button>
</fieldset>
</form>
</body>
</html>'*/
?>
