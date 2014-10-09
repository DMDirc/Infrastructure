<?php

 if (get_magic_quotes_gpc()) {
  foreach ($_REQUEST as $k => $v) { $_REQUEST[$k] = stripslashes($v); }
 }

 if (isset($_REQUEST['feedback']) && isset($_REQUEST['version'])) {
  $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "Not given";
  $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "Not given";
  $feedback = $_REQUEST['feedback'];
  $serverInfo = isset($_REQUEST['serverInfo']) ? $_REQUEST['serverInfo'] : "Not given";
  $dmdircInfo = isset($_REQUEST['dmdircInfo']) ? $_REQUEST['dmdircInfo'] : "Not given";
  $version = $_REQUEST['version'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $date = date('r');

  $body = <<<EOF
 Name: $name
 Email: $email
 Version: $version
 Date: $date
 IP: $ip

 Message:
 $feedback


 Server info:
 $serverInfo

 Client info:
 $dmdircInfo
EOF;

  mail("devs-public@dmdirc.com", "[DMDirc feedback] Feedback from $name <$email>", $body);

  echo "Thank you. Your feedback has been recorded for the DMDirc developers.";

 } else {
  die('Failure: Invalid parameters.');
 }
?>
