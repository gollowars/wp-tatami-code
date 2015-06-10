<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package tatami-code
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-sm-2 tc-sidebar widget-area" role="complementary">
      <div class="sidebar-module sidebar-module-inset">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- .tc-sidebar -->
</div>