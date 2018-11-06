<?php
function odd($number){
		$remain = $number%2;
		if($remain!=0){
				return true;
		}else{
			return false;
		}

}
var_dump(odd(23));