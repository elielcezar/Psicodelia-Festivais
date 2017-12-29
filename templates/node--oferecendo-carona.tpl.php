
	
<?php 

	$id_festival = $node->field_evento['und'][0]['nid']; 
	$url_festival = "http://partiufestival.com/node/".$id_festival."";

	header("Location: ".$url_festival."#".$nid.""); 
	exit();

?>  

