//:random value between 1 and para
//:Use: [[Gsm_rand?para=6]] 2 = default   
if (!isset($para)) $para = 2;
$returnvalue = intval(rand(1,$para));
return $returnvalue;