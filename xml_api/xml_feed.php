<?php
















header("Content-type:text/xml");





$xmlfile = "<?xml version='1.0' encoding ='UTF-8'?>";
$xmlfile .= "<feeds>";

$xmlfile .= "<feed>";
$xmlfile .= "<from>Ken</from>";
$xmlfile .= "<message>This is my assignment</message>";
$xmlfile .= "</feed>";

$xmlfile .= "<feed>";
$xmlfile .= "<from>Ken</from>";
$xmlfile .= "<message>week#3</message>";
$xmlfile .= "</feed>";

$xmlfile .= "</feeds>";

echo $xmlfile;

$dom = new DOMDocument("1.0");
$dom->loadXML($xmlfile);
$dom->save("myxml.xml");
?>