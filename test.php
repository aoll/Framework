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
$tmp = "rcargou";
$tmp2 = "alexandre";
$filter="(|(uid=$tmp))";

//$justthese = array("jpegphoto");
 
$justthese = array();

 
$sr=ldap_search($ds, $dn, $filter, $justthese);
$info = ldap_get_entries($ds, $sr);

print_r($info); 
//$data = $info[0]["dn"];
//print_r($info[0]["uid"]);
//$data = $info[0]["jpegphoto"][0];


//print($data);

/*
header("content-type: image/jpeg");


imagejpeg(imagecreatefromstring($data));
*/

ldap_close($ds);
}
else {
 //   echo 'Impossible de se connecter au serveur LDAP.' . PHP_EOL;
}

?>
