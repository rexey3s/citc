<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php 
		$data =  file_get_contents("http://muasamcangay.com/tool/weather/?size=180&fsize=12&bg=images/bg.png&repeat=repeat-x&r=1&w=1&g=1&col=1&d=0");
		$finalData = str_replace(array("\r\n", "\r","\n"), "", $data);
		$finalData = trim($finalData);
		echo $finalData;
		
		// regex for getting currency price
		preg_match_all('~<td class="ctd" bgcolor="#ffffff">&nbsp;&nbsp;(.*)</td>|<td class="ctd" bgcolor="#ffffff">&nbsp;(.*)</td>~U',$finalData, $currency, PREG_PATTERN_ORDER);
		
		// regex for getting gold price
		preg_match('~SJC</td><td class="ctd" align="center"  bgcolor="#ffffff">([0-9,]{6})</td><td align="center" class="ctd"  bgcolor="#ffffff">([0-9,]{6})</td>~i',$finalData, $SJC);
		
		$pricesA = array();
		// add currency information
		for ($i = 0 ; $i < count($currency[1]); $i += 2)
		{
			$pricesA[$currency[1][$i]] = $currency[2][$i+1];
		}
		$pricesA['gold-SJC-buy'] = $SJC[1];
		$pricesA['gold-SJC-sell'] = $SJC[2];
		
		// get compare and save gold price
		$old_price = file_get_contents("old_price.txt");
		//var_dump($old_price);
		$old_price = json_decode($old_price);
		
		$new_price = json_encode($old_price);
		file_put_contents("old_price.txt",$new_price);
		
	?>
</body>
</html>