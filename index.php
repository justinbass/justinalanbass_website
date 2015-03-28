<?php
include("scripts/Mobile_Detect.php");
$detect = new Mobile_Detect();

#Calculate age
$birthDate = "07/11/1991";
$birthDate = explode("/", $birthDate);
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
? ((date("Y") - $birthDate[2]) - 1)
: (date("Y") - $birthDate[2]));

#If IEEI essay is not available, load a local copy instead
$IEEI = "http://intelligence.org/files/IE-EI.pdf";
$file_headers = @get_headers($IEEI);
if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
    $IEEI = "files/IE-EI.pdf";
}

$body = 
"
<h1>Welcome</h1>
<p>My name is Justin Alan Bass, and among other things I am a " . $age . 
" year old software engineer, UCI and UCLA alumni, Southern Californian, <a href=\"" . $IEEI .
"\">singularitarian</a>, snowboarder, and licensed skydiver. I love challenging myself with difficult problems in computer science and in life.</p>
";

if ($detect->isMobile()) {
    $page = file_get_contents("blankmobile.php");
}
else {
    $page = file_get_contents("blank.php");
}

$page = str_replace("<!--SELECTED1-->", " class=\"selected\"", $page);
$page = str_replace("<!--SELECTED2-->", "", $page);
$page = str_replace("<!--SELECTED3-->", "", $page);
$page = str_replace("<!--CONTENT-->", $body, $page);

echo $page
?>