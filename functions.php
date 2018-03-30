<?php
	add_theme_support( 'post-thumbnails' );
	if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	}
function add_jquery() {
    wp_enqueue_script( 'jquery' );
  }
  add_action('init', 'add_jquery');
  require_once('wp-bootstrap-navwalker.php');
	register_nav_menus( array(
	  'primary' => __( 'Primary Menu', 'primary' ),
	) );
	add_action( 'wp_default_scripts', 'move_jquery_into_footer' );
	function lang() {
		global $post;
		$direct_parent = $post->post_parent;
		if ($direct_parent == 6 || $post->ID == 6){ $lang = "es"; } else {$lang = "en"; }
		return $lang;
	 }
function move_jquery_into_footer( $wp_scripts ) {

    if( is_admin() ) {
        return;
    }
    $wp_scripts->add_data( 'jquery', 'group', 1 );
    $wp_scripts->add_data( 'jquery-core', 'group', 1 );
    $wp_scripts->add_data( 'jquery-migrate', 'group', 1 );
}
// if you want only logged in users to access this function use this hook
add_action('wp_ajax_mail_before_submit', 'mycustomtheme_send_mail_before_submit');

// if you want none logged in users to access this function use this hook
add_action('wp_ajax_nopriv_mail_before_submit', 'mycustomtheme_send_mail_before_submit');

// if you want both logged in and anonymous users to get the emails, use both hooks above

function mycustomtheme_send_mail_before_submit(){
    check_ajax_referer('my_email_ajax_nonce');
    if ( isset($_POST['action']) && $_POST['action'] == "mail_before_submit" ){
			$captcha=$_POST['g-recaptcha-response'];
			$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdRoksUAAAAAFoqSF1OlwFlMinBWleVqJMeVdJt&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
			  if($response['success'] == false)
			  {
			    echo 'error';
					die();
			  }
			  else
			  {
			    echo "good";
			    $name = htmlspecialchars($_POST['name']);
			    $telephone = htmlspecialchars($_POST['telephone']);
			    $date = htmlspecialchars($_POST['date']);
			    $time = htmlspecialchars($_POST['time']);
			    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			    $message = htmlspecialchars($_POST['message']);
			    $formcontent="From: $name\nEmail: $email\nTelephone: $telephone\nRequested Date: $date\nRequested Time: $time\nMessage: $message";
			    $subject = "Contact Page";
			    wp_mail(get_bloginfo('admin_email'), $subject, $formcontent);
					die();
			  }
    }
    echo 'error';
    die();
}



// add_filter('tiny_mce_before_init', 'wpa_45815');

?>
