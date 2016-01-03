//:Debug of the Post command
//:use [[Gsm_post]]
global $wb;
$returnvalue ='';
if ($wb->get_session('GROUP_ID')!=8) {
  $returnvalue .="<fieldset>";
  $returnvalue .= "<legend>debug ".str_replace(' ',PAGE_SPACER,MENU_TITLE).".php</legend>";
  $returnvalue .= "<table>";
  $returnvalue .= "<tr><td>POST</td><td></td><td></td></tr>";
  foreach ( $_POST as $key2 => $value2 ) {
    if (is_array($value2)) {
      $returnvalue .= "<tr><td>--".$key2."</td><td> | </td><td>---</td></tr>";
      foreach ($value2 as $key3 => $value3){
        $returnvalue .= "<tr><td>----".$key3."</td><td> | </td><td>".$value3."</td></tr>";
      }
    } else {
      $returnvalue .= "<tr><td>--".$key2."</td><td> | </td><td>".$value2."</td></tr>";
    }	
  }
  $returnvalue .= "<tr><td>GET</td><td></td><td></td></tr>";
  foreach ( $_GET as $key2 => $value2 ) {    
    if (is_array($value2)) {
      $returnvalue .= "<tr><td>--".$key2."</td><td> | </td><td>---</td></tr>";
      foreach ($value2 as $key3 => $value3){
        $returnvalue .= "<tr><td>----".$key3."</td><td> | </td><td>".$value3."</td></tr>";
      }
    } else {
      $returnvalue .= "<tr><td>--".$key2."</td><td> | </td><td>".$value2."</td></tr>";
    }	
  }
  $returnvalue .= "</table>";
  $returnvalue .= "</fieldset>";
}
return $returnvalue; 