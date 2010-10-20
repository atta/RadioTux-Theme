<?php 
 /**
 * The template for displaying Searchform.
 *
 * @package WordPress
 * @subpackage RadioTux
 * @since RadioTux 1.0
 */
?>
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<input type="text" size="50" value="<?php _e('suchen','notepad-theme'); ?>" name="s" id="s" onblur="if (this.value == '') {this.value = '<?php _e('suchen','notepad-theme'); ?>';}" onfocus="if (this.value == '<?php _e('suchen','notepad-theme'); ?>') {this.value = '';}" />
<input type="hidden" id="searchsubmit" />
</form> 