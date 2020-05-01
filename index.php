<?php

include('simple_html_dom.php');

  $url = explode( '/',trim( $_SERVER['REQUEST_URI'],'//' ) ); // Parse URL

  $data = array();

  if ( isset( $url[1] ) || isset( $url[2] ) ){ // if URL = /{country}/{region} 

	define('BASE_URL','https://covid19.ascube.net/');  // Set Base URL

	$link = simple_html_dom_node::action(... $url);   // Pass to static function at simple_html_dom_node class

	$html = file_get_html( BASE_URL.$link );  // Get HTML Webpage
  
	for ($i = 0; $i<= 3; $i++){  // Loop Throuht
  
		$GLOBALS['data'][$i] = $html->find('table[id=vCases-table] td',$i)->plaintext;
  
	}
  
	$data = array(
	"overall" => simple_html_dom_node::data(...$data) // Put into array
	);

  }else{ // Afi Master Original Coding
  
	$html = file_get_html('https://covid19.ascube.net/cases/Malaysia');

	for ($i = 0; $i<= 3; $i++){
  
		$GLOBALS['overall_'.$i] = $html->find('table[id=vCases-table] td',$i)->plaintext;
  
	}
  
	
	for ($i = 0; $i<= 63; $i++){
  
		$GLOBALS['state_'.$i] = $html->find('table[id=caseRegions-table] td',$i)->plaintext;
  
	}
  
  
	$data = array(
	"overall" => array (
		"country" => "Malaysia",
		"date" => "$overall_0",
		"confirm" => "$overall_1",
		"death" => "$overall_2", 
		"recovered" => "$overall_3"
	),
	"state" => array(
			"$state_0" => array(
			"date" => "$state_1",
			"confirm" => "$state_2",
			"death" => "$state_3",
		),
			"$state_4" => array(
			"date" => "$state_5",
			"confirm" => "$state_6",
			"death" => "$state_7",
		),
			"$state_8" => array(
			"date" => "$state_9",
			"confirm" => "$state_10",
			"death" => "$state_11",
		),
			"$state_12" => array(
			"date" => "$state_13",
			"confirm" => "$state_14",
			"death" => "$state_15",
		),
			"$state_16" => array(
			"date" => "$state_17",
			"confirm" => "$state_18",
			"death" => "$state_19",
		),
			"$state_20" => array(
			"date" => "$state_21",
			"confirm" => "$state_22",
			"death" => "$state_23",
		),
			"$state_24" => array(
			"date" => "$state_25",
			"confirm" => "$state_26",
			"death" => "$state_27",
		),
			"$state_28" => array(
			"date" => "$state_29",
			"confirm" => "$state_30",
			"death" => "$state_31",
		),
			"$state_32" => array(
			"date" => "$state_33",
			"confirm" => "$state_34",
			"death" => "$state_35",
		),
			"$state_36" => array(
			"date" => "$state_37",
			"confirm" => "$state_38",
			"death" => "$state_39",
		),
			"$state_40" => array(
			"date" => "$state_41",
			"confirm" => "$state_42",
			"death" => "$state_43",
		),
			"$state_44" => array(
			"date" => "$state_45",
			"confirm" => "$state_46",
			"death" => "$state_47",
		),
			"$state_48" => array(
			"date" => "$state_49",
			"confirm" => "$state_50",
			"death" => "$state_51",
		),
	
		"$state_52" => array(
			"date" => "$state_53",
			"confirm" => "$state_54",
			"death" => "$state_55",
		),
	
		"$state_56" => array(
			"date" => "$state_57",
			"confirm" => "$state_58",
			"death" => "$state_59",
		),
	
		"$state_60" => array(
			"date" => "$state_61",
			"confirm" => "$state_62",
			"death" => "$state_63",
		),
		)
		
	);
	
	}
	



echo json_encode($data);
