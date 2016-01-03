//:Image location reference to media directory
//:[[Gsm_loc?para=1]] 1 to get WB_PATH, 2, WB_URL, 3= TEMPLATE_DIR (default) 
if (!isset($para)) $para = 3;
$returnvalue="";
if ($para==1) {$returnvalue = WB_PATH;}
elseif ($para==2){$returnvalue = WB_URL;}
else { $returnvalue .= TEMPLATE_DIR; }
return $returnvalue;