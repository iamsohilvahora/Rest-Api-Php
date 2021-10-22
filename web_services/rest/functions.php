<?php
	function get_price($find){
		$books = array('c'=>1000, 'c++'=>500, 'java'=>350, 'php'=>650, 'SQL'=>550);
		
		foreach($books as $book=>$price){
			if($book==$find){
				return $price;
				break;
			}
		}
	}
?>