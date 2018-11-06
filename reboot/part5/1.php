<?php
class Point{
	public $x1;
	public $x2;
	public $y1;
	public $y2;
	public $z1;
	public $z2;
}
$count = new Point;
$count->x1 = 3; 
$count->x2 = 7;
$count->y1 = 5; 
$count->y2 = 8;
$count->z1 = 6; 
$count->z2 = 10; 
$new_count1 = pow($count->x2 - $count->x1, 2); 
$new_count2 = pow($count->y2 - $count->y1, 2); 
$new_count3 = pow($count->z2 - $count->z1, 2);
$result = sqrt($new_count1+$new_count2+$new_count3);
echo $result; 


