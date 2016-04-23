<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage R53Studio
 */
get_header(); // подключаем header.php ?>
<section class="site-content page">
	<!-- open .container -->
	<div class="container">
		<?php get_sidebar(); ?>

		<!-- open .workspace -->
		<div class="workspace workspace_page">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
					<h3><?php the_title(); // заголовок поста ?></h3>
					<?php the_content(); // контент ?>					
					
				</article>
			<?php endwhile; // конец цикла ?>
		</div>
		<!-- close .workspace -->
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>