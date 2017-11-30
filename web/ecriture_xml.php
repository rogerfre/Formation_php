<?php
// 
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><document></document>');

$xml->addAttribute("version", "1.0");
$person = $xml->addChild("person");
$person->addAttribute("id", "1");
$person->addChild("last_name", "SPORTELLI");
$person->addChild("first_name", "Felix");

echo $xml->asXml();
//$xml->asXml("resources/export2.xml");

$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXml($xml->asXml());
$dom->save("resources/export2.xml");