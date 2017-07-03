<?php



$xmlStr = file_get_contents("http://localhost:8888/SSL/week3/xml_api/xml_feed.php");


$xmlStr = new SimpleXMLElement($xmlStr);

foreach ($xml->feed as $feeds) {
    echo $feeds->from . ' says..' . $feeds->message . '<br />';

}
?>

<pre>
<?php


var_dump($contents);
?>
</pre>
