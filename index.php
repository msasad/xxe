<?php
//libxml_disable_entity_loader(true);
$xml =  file_get_contents('php://input');
error_log($xml);
$doc = new DOMDocument();
$doc->loadXML($xml, LIBXML_NOENT);
$parsed = simplexml_import_dom($doc);
?>
    Showing search results for <?=$parsed?>
