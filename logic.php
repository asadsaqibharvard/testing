<?php
$square = 4 * 4;
?>

<?php
$age = 20 ;

if($age < 12) {
   $person_type = "kiddo";
}
elseif($age > 12 AND $age <= 19) {
   $person_type = "teenager";
}
elseif($age > 19 AND $age <= 80) {
    $person_type = "adult";
}
else {
    $person_type = "super wise person";
}
?>

<?php
function calculate_total($subtotal, $discount, $shipping_method){
	if($shipping_method == 'priority'){
		$shipping_rate = 5;
	}
	elseif ($shipping_method == 'express') {
		$shipping_rate = 15;
	}

	$tax = .09 * $subtotal;

	$total = $subtotal + $shipping_rate - $discount;

	return $total;
}
?>



