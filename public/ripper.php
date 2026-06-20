<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL); 

//header('Content-Type: application/octet-stream');

$sturl = "https://nitro.habbo.st/client/assets";
$uri = $_SERVER["REQUEST_URI"];

if (substr($uri, 0, 9) == "/c_images" || substr($uri, 0, 4) == '/dcr') $sturl = "https://swf.habbo.st";
//if ($_SERVER["HTTP_ORIGIN"] != "https://nitro.habbo.la" && $sturl != "https://swf.habbo.st") exit("Nothing to see here :)");

$handle = fopen($sturl . $uri, "rb");
$contents = stream_get_contents($handle);
file_put_contents("/home/www/HabboLA/Assets" . $uri, $contents);

header("HTTP/1.1 200 OK", true, 200);
if (substr($uri, -6) == ".nitro") {
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"" . basename($uri) . "\"");
}
echo $contents;
fclose($handle);
?>
