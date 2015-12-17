<?php
include("scripts/Mobile_Detect.php");
$detect = new Mobile_Detect();

$body = 
"
<h1>About</h1>
<p>This website is set up using a Raspberry Pi 2 running Apache 2.0 and using HTTP. It is sometimes port-forwarded through port 8080, depending on which ISP I am using.</p>
";

if ($detect->isMobile()) {
    $page = file_get_contents("blankmobile.php");
}
else {
    $page = file_get_contents("blank.php");
}

$page = str_replace("<!--SELECTED1-->", "", $page);
$page = str_replace("<!--SELECTED2-->", "", $page);
$page = str_replace("<!--SELECTED3-->", " class=\"selected\"", $page);
$page = str_replace("<!--CONTENT-->", $body, $page);

echo $page
?>
