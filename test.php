<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ds = ldap_connect("ldap://ldap.42.fr", 389);
ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);

$myDn = "uid=aollivie,ou=september,ou=2014,ou=paris,ou=people,dc=42,dc=fr";
$myPwd = "nuB-3xcO";

if ($ds) { 
    $result = ldap_bind($ds, $myDn, $myPwd);
  //  echo 'Result = ' . $result . '' . PHP_EOL;

$dn = "dc=42, dc=fr";
$filter="(|(uid=aollivie)(givenname=aollivie))";
$justthese = array("jpegphoto");
 
//$sr=ldap_search($ds, $dn, $filter, $justthese);
 
$sr=ldap_search($ds, $dn, $filter, $justthese);
$info = ldap_get_entries($ds, $sr);
 
//echo $info["count"]." entries returned\n";
//print_r($info);
$data = $info[0]["jpegphoto"][0];
//$data = $info[0]["jpegphoto"];
/*
print("OK! ");
if (exif_imagetype($data) === FALSE)
   print("PAS OK!");
*/

header("content-type: image/jpeg");

//if (base64_decode($data) === FALSE)
  // print("NO");
imagejpeg(imagecreatefromstring($data));



ldap_close($ds);
}
else {
 //   echo 'Impossible de se connecter au serveur LDAP.' . PHP_EOL;
}

?>
