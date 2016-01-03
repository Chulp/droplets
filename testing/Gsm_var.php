//:Debug of the variables
//:[[Gsm_var]]
global $wb;
$returnvalue ="";
if ($wb->get_session('GROUP_ID')!=8) {
  $returnvalue .="<fieldset>";
  $returnvalue .= "<legend>debug ".str_replace(' ',PAGE_SPACER,MENU_TITLE).".php</legend>";
  $returnvalue .= "<table>";
  $returnvalue .= "<tr><td>Variables</td><td></td><td></td></tr>";
  $returnvalue .= "<tr><td>--WB_PATH</td><td> | </td><td>".WB_PATH."</td></tr>";
  $returnvalue .= "<tr><td>--WB_URL</td><td> | </td><td>".WB_URL."</td></tr>";
  $returnvalue .= "<tr><td>--TABLE_PREFIX</td><td> | </td><td>".TABLE_PREFIX."</td></tr>";
  if (defined("CH_PATH")) {
    $returnvalue .= "<tr><td>--CH_PATH</td><td> | </td><td>" . CH_PATH . "</td></tr>";	
    $returnvalue .= "<tr><td>--CH_MODULE</td><td> | </td><td>" . CH_MODULE . "</td></tr>";
    $returnvalue .= "<tr><td>--CH_SUFFIX</td><td> | </td><td>" . CH_SUFFIX . "</td></tr>";
    $returnvalue .= "<tr><td>--CH_DBBASE</td><td> | </td><td>" . CH_DBBASE . "</td></tr>";	
    $returnvalue .= "<tr><td>--CH_LOC</td><td> | </td><td>" . CH_LOC . "</td></tr>";
    $returnvalue .= "<tr><td>--CH_RETURN</td><td> | </td><td>" . CH_RETURN . "</td></tr>";
    }
  $returnvalue .= "<tr><td>--PAGE_TITLE</td><td> | </td><td>".PAGE_TITLE."</td></tr>";
  $returnvalue .= "<tr><td>--MENU_TITLE</td><td> | </td><td>".MENU_TITLE."</td></tr>";
  $returnvalue .= "<tr><td>--VISIBILITY</td><td> | </td><td>" . VISIBILITY . "</td></tr>";
  $returnvalue .= "<tr><td>--TEMPLATE</td><td> | </td><td>" . TEMPLATE . "</td></tr>";
  $returnvalue .= "<tr><td>--MEDIA_DIRECTORY</td><td> | </td><td>".MEDIA_DIRECTORY."</td></tr>";
  $returnvalue .= "<tr><td>--LANGUAGE</td><td> | </td><td>" . LANGUAGE . "</td></tr>";
  if (isset($_SESSION['USER_ID'])){
    $returnvalue .= "<tr><td>--SESSION['USER_ID']</td><td> | </td><td>".$_SESSION['USER_ID']."</td></tr>";
    $returnvalue .= "<tr><td>--SESSION['GROUP_ID']</td><td> | </td><td>".$_SESSION['GROUP_ID']."</td></tr>";
    $returnvalue .= "<tr><td>--SESSION['GROUP_NAME']</td><td> | </td><td>".$_SESSION['GROUP_NAME'][$_SESSION['GROUP_ID']]."</td></tr>";
    $returnvalue .= "<tr><td>--SESSION['USERNAME']</td><td> | </td><td>".$_SESSION['USERNAME']."</td></tr>";
    $returnvalue .= "<tr><td>--SESSION['DISPLAY_NAME']</td><td> | </td><td>".$_SESSION['DISPLAY_NAME']."</td></tr>";
    $returnvalue .= "<tr><td>--SESSION['EMAIL']</td><td> | </td><td>".$_SESSION['EMAIL']."</td></tr>";
    $returnvalue .= "<tr><td>--SESSION['HOME_FOLDER']</td><td> | </td><td>".$_SESSION['HOME_FOLDER']."</td></tr>";
    $returnvalue .= "<tr><td>--SERVER['SCRIPT_NAME']</td><td> | </td><td>".$_SERVER['SCRIPT_NAME']."</td></tr>";
    }
  $returnvalue .= "</table>";
  $returnvalue .= "</fieldset>";
  }
return $returnvalue; 