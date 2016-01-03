//:shows a section
//:[[Gsm_showsection?section=32]]
global $database, $wb;
$get_content = $database->query("SELECT content FROM ".TABLE_PREFIX."mod_wysiwyg WHERE section_id = '$section'");
$fetch_content = $get_content->fetchRow();
$content = ($fetch_content['content']);
$wb->preprocess($content);
return $content;