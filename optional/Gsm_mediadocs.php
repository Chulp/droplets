//:Display the contents of a media directory and (its sub) directory p+userid (e.g. p1) types pdf, jpg  and .html
//:Use [[Gsm_mediadocs?mediadir=&subdir&width=600&structure=&height=&message=&login]] 
global $wb;
if (!isset ($mediadir)) $mediadir = "/castor/castor"; //directory within media directory
if (!isset ($subdir)) $subdir = "PV"; // dir within mediadir will be filled in case of login
if (!isset ($width)) $width = "200"; // .jpg only
if (!isset ($height)) $height = " "; // .jpg only
if (!isset ($message)) $message = "No data "; // message when error or directory empty
if (!isset ($login)) $login="yes"; // only yes is checked
if($login=="yes" &&  isset($_SESSION['USER_ID']) && is_numeric($_SESSION['USER_ID']))$subdir = 'P'.$_SESSION['USER_ID']; 
$nodisplay=true; $prev= ''; 
$allow_ext = array ( "pdf", "html", "jpg", "zip" ); 
$allow_sub = array ( $subdir );
$full=false; if ($width < 201) $full=true; 
$clear='<div id="clr"></div>';
$returnvalue = $clear;
$fileArray = array ();
$dir_from=WB_PATH . MEDIA_DIRECTORY. $mediadir;
if(is_dir($dir_from)) {
  $dirs = array( $dir_from);
  while( NULL !== ($dir = array_pop( $dirs))) {
    if( $handle = opendir($dir)) {
      while( false !== ($file = readdir($handle))) {
        if( $file == '.' || $file == '..') continue;
        $path = $dir . '/' . $file;
	  $ext = strtolower( substr( $file, strrpos( $file, '.' ) + 1 ));
        if( is_dir( $path ) && is_readable( $path ) && in_array( $file, $allow_sub )) { 
	  array_unshift($dirs, $path);
        } elseif ( in_array( $ext, $allow_ext ) ) { 
	  $fileArray[ $file ] = $path;
    } } }
    closedir($handle);	
  }	
  krsort( $fileArray );
  foreach ( $fileArray as $key => $value ) {
    $ext =  strtolower( substr( $key, strrpos( $key, '.' )));
    if ( $ext==".pdf" ) { 
      if ( $nodisplay || $prev == ".jpg" )  $returnvalue .= $clear;
      $keyh = str_replace( ".pdf", "", $key );
      $returnvalue .= '<p><a class="pdf" href="'.str_replace( WB_PATH , WB_URL, $value).' "> ' . $keyh .'</a></p>';
      $nodisplay=false;  $prev = ".pdf"; // skip no data message
    } elseif  ( $ext==".zip" ) { 
      if ( $nodisplay || $prev == ".jpg" )  $returnvalue .= $clear;
      $keyh = str_replace( ".zip", "", $key );
      $returnvalue .= '<p><a class="zip" href="'.str_replace( WB_PATH , WB_URL , $value).' "> ' . $keyh .'</a></p>';
      $nodisplay=false;  $prev = ".zip"; // skip no data message
    } elseif ( $ext==".html" ) { 
      $returnvalue .= $clear;   
      ob_start();
      include $value;
      $returnvalue .= ob_get_clean();
      $returnvalue .= $clear; 
      $nodisplay=false;  $prev = ".html"; // skip no data message
    } elseif ( $ext== ".jpg" ) {
      if ( $nodisplay || $prev != ".jpg" )  $returnvalue .= $clear;  
      $keyh = str_replace( ".jpg", "", $key );
      if ($full) { // opt to display full image
        $returnvalue .= '<a href="'.str_replace( WB_PATH , WB_URL, $value).' "><img src="'.str_replace( WB_PATH , WB_URL, $value).' " width="'.$width.'" height="'.$height.'" /></a>';
      } else { // only in displayed size
        $returnvalue .= '<p><img src="'.str_replace( WB_PATH , WB_URL, $value).' " width="'.$width.'" height="'.$height.'" vspace="5"/></p>';
      } 
      $nodisplay=false; $prev = ".jpg"; // skip no data message
} } }
if ($nodisplay) { $returnvalue .= $message;  // no data message
} else { $returnvalue .=$clear;}
return $returnvalue;