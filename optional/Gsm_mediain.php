//:Upload a file to indicated directory
//:Use [[Gsm_mediadocs?mediadir=&message=&login]] 
global $wb;
if (!isset ($mediadir)) $mediadir = "/archief"; //directory within media directory
if (!isset ($message)) $message = "No data "; // message when error or directory empty
if (!isset ($login)) $login="no"; // only yes is checked
$returnvalue='';
if($login!="yes" || (FRONTEND_LOGIN == 'enabled' && is_numeric($wb->get_session('USER_ID')))) {
  if ($_POST) {
    $upload_Ok = false;
    $allow_ext = array ( "pdf", "html", "jpg" );
    $dir_to=WB_PATH . MEDIA_DIRECTORY . $mediadir . "/";
    $ext = strtolower( substr( basename($_FILES["doc_uploaded"]["name"]), strrpos( basename($_FILES["doc_uploaded"]["name"]), '.' ) + 1 ));
    if(in_array( $ext, $allow_ext )) $upload_Ok = true;   
    $upload_file = sprintf ("%s%s-%s-%s_%s_%s.%s", $dir_to, $_POST['datum_jaar'], $_POST['datum_maand'], $_POST['datum_dag'], $_POST['doc_bron'], $_POST['doc_titel'], $ext);
    if ($upload_Ok ) {
      if(move_uploaded_file($_FILES["doc_uploaded"]["tmp_name"], $upload_file)) {
        $returnvalue .= $upload_file.' uploaded</br>'; 
        $upload_Ok = true;
  } } } 
  $TEMPLATE ='<form action="" enctype="multipart/form-data" method="post">
    <table>
    <tr><td>Datum:</td><td>Bron:</td><td>Titel:</td></tr>
    <tr><td><input type="text" size="4" name="datum_jaar" value='.date("Y").' />
    <input size="2" type="text" name="datum_maand" value='.date("m").' />
    <input size="2" type="text" name="datum_dag" value='.date("d").' /></td>
    <td><input type="text" size="2" name="doc_bron" value="ED"  /></td>
    <td><input type="text" size="64" name="doc_titel" placeholder="omschrijving"  /></td><tr>
    <tr><td></td><td></td><td><input type="file" name="doc_uploaded" /></td><tr>   
    <tr><td><input type="submit" value="naar knipsel" /></td><td></td><td></td><tr>
    </table>
  </form>';
  $returnvalue .= $TEMPLATE;
}
return $returnvalue;