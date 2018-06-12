<?php 
	header("Access-Control-Allow-Origin: *");

	$arr = array('code' => 1,'msg'=>"呵呵呵呵呵呵" );

	$callback= $_GET["callback"];

	if( empty( $_GET["callback"] ) != 1 ){
		echo $callback."(".json_encode($arr).")";
	}else{
		echo json_encode($arr);
	}
	
?>