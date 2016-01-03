//:Inline display pdf
//:[[Gsm_pdf?url=http://www.somewhere.com/filename.pdf&width=750&height=650]]    mandatory parameter:url=(the url of a PDF document)   optional parameter: width=(the width), height=(the height)
$returnval = "";
if (!isset($height)) $height=650;
if (!isset($width)) $width=750;
$returnval .= '<center>';
$returnval .= '<embed height="'.$height.'" width="'.$width.'" ';
$returnval .= 'src="' .$url.'#toolbar=1&navpanes=0&scrollbar=1">';
$returnval .= '</embed>';
$returnval .= '</center>';
return $returnval;