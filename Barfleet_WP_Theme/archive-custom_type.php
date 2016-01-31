<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be archive-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

	<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

			<header class="article-header">
				<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			</header>

			<section class="entry-content cf">
				<div class="inner-entry-content cf">
					<?php bones_show_bardate(); ?>

					<?php the_excerpt(); ?>
				</div>
			</section>

			<footer class="article-footer">
			</footer>

		</article>

		<?php endwhile; ?>

				<?php bones_page_navi(); ?>

		<?php else : ?>

			<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
				</footer>
			</article>

		<?php endif; ?>

	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
