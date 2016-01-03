//:standaard text  for the footer. Contents is to be modified
//:Use: [[Gsm_foot?para=&lang=]] default 3. Contents is to be modified      
if (!isset($para)) $para = 3;
if (!isset($lang)) $lang = "EN";
$footer = array();
switch($lang) {
  case 'EN':
    $footer[] = "<p>In mei 2005 heeft de Staatssecretaris van R.O.V aan alle gemeente en provincies in Nederland geschreven, geen bestemmingsplannen te ontwikkelen in de nabijheid van Hoogspannings leidingen (H.L.) en het z.g.n. voorzorgbeginsel te hanteren.</p>";
    $footer[] = "<p>Dit wil zeggen geen situaties te creëren waar een straling van meer dan 0,4 microtesla voorkomt.</p>";
    $footer[] = "";
    break;
  default:
    $footer[] = "<p>In mei 2005 heeft de Staatssecretaris van R.O.V aan alle gemeente en provincies in Nederland geschreven, geen bestemmingsplannen te ontwikkelen in de nabijheid van Hoogspannings leidingen (H.L.) en het z.g.n. voorzorgbeginsel te hanteren.</p>";
    $footer[] = "<p>Dit wil zeggen geen situaties te creëren waar een straling van meer dan 0,4 microtesla voorkomt.</p>";
    $footer[] = "";
}
$para = (int)$para;
if ($para <= 0) $para = 1;
$returnvalue = "";
for ( $i=0 ; $i<$para ; $i++) { $returnvalue .= $footer[$i]; }
return $returnvalue;