<?php
session_start();
include_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="res/im/w.png" sizes="16x16">
<title>bookworm</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<style type="text/css">
	#logo{
			padding-top: 0.7%;						
			width: 14%;
			height: 9.65%;
			float: left;
			position: fixed;
			margin-left: 2px;
		}
</style>

<script type="text/javascript">
	function checkoutFunction(){
		
		
		alert("order Placed");
		window.location.assign("inp.php");

	}
</script>
</head>
<body>



<h1 align="center" style="color:blue;">shopping list</h1>

<div class="w3-container">

<form method="post" action="up.php">
<table width="60%"  cellpadding="5" cellspacing="0" class="w3-table-all"><thead><tr><th>quantity</th><th>category</th><th>name</th><th>Price</th><th>total</th><th>delete</th></tr></thead>
  <tbody>
 	<?php
	if(isset($_SESSION["cart_products"])) 
    {
		$total= 0; 
		$b= 0;  
		foreach ($_SESSION["cart_products"] as $cart_itm)
       {
			
	
			$product_name = $cart_itm["product_name"];
			$category = $cart_itm["category"];
			$product_code = $cart_itm["product_code"];				
			$product_price = $cart_itm["product_price"];
				
			$product_qty = $cart_itm["product_qty"];	
			$subtotal = ($product_price * $product_qty); 
			$b_color = ($b++%2==1) ? 'odd' : 'odd'; 

		    echo '<tr class="'.$b_color.'">';
		    echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
			
			
			echo '<td>'.$category.'</td>';
			
			echo '<td>'.$product_name.'</td>';			
			
			echo '<td>'.$product_price.'</td>';
			
			echo '<td>'.$subtotal.'</td>';
			
			echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
            echo '</tr>';
			$total= ($total + $subtotal); 
      }
		
		
	}
function convert_number_to_words($number) {

    $hyphen      = '-';
    $conjunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'zero',
        1                   => 'one',
        2                   => 'two',
        3                   => 'three',
        4                   => 'four',
        5                   => 'five',
        6                   => 'six',
        7                   => 'seven',
        8                   => 'eight',
        9                   => 'nine',
        10                  => 'ten',
        11                  => 'eleven',
        12                  => 'twelve',
        13                  => 'thirteen',
        14                  => 'fourteen',
        15                  => 'fifteen',
        16                  => 'sixteen',
        17                  => 'seventeen',
        18                  => 'eighteen',
        19                  => 'nineteen',
        20                  => 'twenty',
        30                  => 'thirty',
        40                  => 'fourty',
        50                  => 'fifty',
        60                  => 'sixty',
        70                  => 'seventy',
        80                  => 'eighty',
        90                  => 'ninety',
        100                 => 'hundred',
        1000                => 'thousand',
        1000000             => 'million',
        1000000000          => 'billion',
        1000000000000       => 'trillion',
        1000000000000000    => 'quadrillion',
        1000000000000000000 => 'quintillion'
    );

    if (!is_numeric($number)) {
        return false;
    }

    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }

    $string = $fraction = null;

    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }

    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }

    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }

    return $string;
}

    ?>

    <tr><td colspan="7">&nbsp;</td></tr>
    <tr><td colspan="6"><span style="text-align: right; float:right;">Amount: <?php echo sprintf("%01.3f", $total); echo "<br>";echo convert_number_to_words($total); echo " Taka only";?></span></td></tr>

<tr>
    	
    	<td colspan="3"><a href="inp.php" class="button">add books</a> </td>
    	<td><button type="submit">updates</button></td>


    	<td><input type="button"  onclick="checkoutFunction();"  value="confirm" id="checkoutButton"/></td>
    	<td colspan="3"><a href="inp.php" class="button">Home</a> </td>
    

   </tr>


  </tbody>


</table>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />


</form>


</div>

</body>
</html>
