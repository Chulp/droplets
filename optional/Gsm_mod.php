//:Displays the last modification time of the current page
//:Use [[Gsm_mod?text=Laatst gewijzigd]]
global $database, $wb;
if (!isset($text)) $text = '';
if (PAGE_ID>0) {
	$query=$database->query("SELECT modified_when FROM ".TABLE_PREFIX."pages where page_id=".PAGE_ID);
	$mod_details=$query->fetchRow();
	return $text." ".date("d/m/Y",$mod_details[0]);
}