<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Search sample data for $name or $year or $state from form. */
function search($search) {
    global $pms; 
	
	if(!empty($search)){
		$words = explode ( " " , $search);
		foreach($words as $word){
			 // Filter $pms by $search
			$results = array();
			foreach ($pms as $pm) {
			    if (stripos($pm['name'], $word) !== FALSE ||
			    	strpos($pm['from'], $word) !== FALSE || 
			        strpos($pm['to'], $word) !== FALSE ||
			        stripos($pm['state'], $word) !== FALSE){
			        $results[] = $pm;
				}
			}
		}
		$pms = $results;
	}
	return $pms;
}
?>
