<?php

global $marvel_creative;

if(has_custom_logo()){
	the_custom_logo();
}else{?>

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php if(!empty($header_logo_text)){ echo esc_html($header_logo_text); } else{ bloginfo( 'name' );} ?></a>
<?php }	
	
?>
