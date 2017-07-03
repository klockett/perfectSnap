<?php
/**
 * Created by PhpStorm.
 * User: kenlockett1
 * Date: 9/15/16
 * Time: 7:41 PM
 */











$contents = simplexml_load_file("myxml.xml");

foreach($contents->feed as $feeds){

    echo $feeds->from."<br />";



}



?>