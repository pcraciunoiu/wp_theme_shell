<?php // vim: set ts=2 et sts=2 sw=2:
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 */
?>
  <div id="sidebar" class="widgets" role="complementary">
    <ul>
    <?php
  	/* When we call the dynamic_sidebar() function, it'll spit out
	   * the widgets for that widget area. If it instead returns false,
  	 * then the sidebar simply doesn't exist, so we'll hard-code in
	   * some default sidebar stuff just in case.
  	 */
  	if ( ! dynamic_sidebar( 'widgets' ) ) : ?>
      <li>Sidebar goes here.</li>
    <?php endif; // end primary widget area ?>
    </ul>
  </div><!-- #sidebar -->
