<?php // vim: set ts=2 et sts=2 sw=2:
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>

  <div id="container">
  <article id="content" role="main">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<div class="page-link">Pages:', 'after' => '</div>' ) ); ?>
				<?php edit_post_link('Edit', '<span class="edit-link">', '</span>'); ?>
			</div><!-- .entry-content -->
		</div><!-- #page-## -->

  <?php endwhile; ?>
  </article><!-- #content -->
  </div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
