<?php

















$contents = simplexml_load_file("http://localhost:8888/SSL/week3/xml_api/xml_feed.php");

foreach($contents->feed as $feeds){

   echo $feeds->message."<br />";

}
?>

<pre>
<?php


var_dump($contents);
?>
</pre>


































?>