<?php

 $text = "Hello world, this is my first Alexa Skill i got working!";

$array = array("version" => "1.0", "response" => array("outputSpeech"=>"PlainText","text" = $text)));

echo json_encode($array);

?>
