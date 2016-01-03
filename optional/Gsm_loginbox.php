//:Puts a Login / Logout box on your page.
//:Use: [[Gsm_loginbox]]. Remember to enable frontend login in your website settings.
global $wb, $TEXT, $MENU;
$return_value = " ";
if(FRONTEND_LOGIN == 'enabled' && VISIBILITY != 'private' && $wb->get_session('USER_ID') == '') {
	$return_value  = '<form name="login" action="'.LOGIN_URL.'" method="post" class="login_table">';
	$return_value .= $TEXT['USERNAME'].':<input type="text" name="username" style="text-transform: lowercase;" />';
	$return_value .= $TEXT['PASSWORD'].':<input type="password" name="password" />';
	$return_value .= '<input type="submit" name="submit" value="'.$TEXT['LOGIN'].'" class="dbutton" />';
	$return_value .= '<a href="'.FORGOT_URL.'">'.'Vergeten? '.'</a>';
	if(is_numeric(FRONTEND_SIGNUP))  
		$return_value .= '<a href="'.SIGNUP_URL.'">'.$TEXT['SIGNUP'].'?</a>';
	$return_value .= '</form>';
} elseif(FRONTEND_LOGIN == 'enabled' && is_numeric($wb->get_session('USER_ID'))) {
	$return_value = '<form name="logout" action="'.LOGOUT_URL.'" method="post" class="login_table">';
	$return_value .= '<a href="'.PREFERENCES_URL.'">'.$wb->get_display_name().'</a>  ';
	$return_value .= '<input type="submit" name="submit" value="'.$MENU['LOGOUT'].'" class="dbutton" />';
	$return_value .= '</form>';
}
return $return_value;