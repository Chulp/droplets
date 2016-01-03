//:Data in a side window. Contents is to be modified
//:Use: [[Gsm_side?para=8 ]] Contents is to be modified       
if (!isset($para)) $para = 8;
$nieuws = array();
$nieuws[0] = '<p><hr></p>'; 
$nieuws[1] = '<p style="font: normal 12px Verdana;">Partners:</p>';
//$nieuws[2] = '<p style="font: normal 12px Verdana; color: #FFFFFF; "><a href="http://www.contracthulp.nl"><span style="font: normal 16px impact,chicago; color: #ff0000; ">ContractHulp</span></a></p>';
$nieuws[2] = '<p><a href="http://www.contracthulp.nl" style="text-decoration:none"><span style="font: normal 16px impact,chicago; color: #ff0000; ">ContractHulp</span></a></p>';
//$nieuws[3] = '<p><a href="http://www.avadvocatuur.com" style="text-decoration:none"><img src="'.TEMPLATE_DIR.'/img/side_av.png" alt="AV Advocatuur" /><br>AV Advocatuur</a><br><br></p>';
//$nieuws[3] = '<p><a href="http://www.incassocontact.nl"><img src="'.TEMPLATE_DIR.'/img/side_ic.png" alt="Incasso Contact" /><br></a><br><br></p>';
//$nieuws[4] = '<p><a href="http://www.admirari.nl"><img src="'.TEMPLATE_DIR.'/img/side_ad.png" alt="Admirari" /><br></a><br><br></p>';
//$nieuws[5] = '<p><a href="http://www.stamboom-online.eu"><img src="'.TEMPLATE_DIR.'/img/side_st.png" alt="Stamboom" /><br>Stamboom-Online</a><br><br></p>';
$nieuws[6] ='';
$nieuws[5] ='';
$nieuws[3] ='';
$nieuws[4] = '<p><hr></p>'; 
$nieuws[7] = '';
if ($para >9) $para = 9;
$returnvalue = " ";
for ( $i=0 ; $i<$para ; $i++) {
    $returnvalue .= "\n".$nieuws[$i];
}
return $returnvalue;