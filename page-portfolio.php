<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 

	<section class="site-content page-portfolio">
		<!-- open .page-contacts__wrap -->
		<div class="page-portfolio__wrap">
			<!-- open .container -->
			<div class="container">
				<?php get_sidebar(); ?>

				<!-- open .workspace -->
				<div class="workspace workspace_page">
					<!-- open .breadscrubs -->
					<div class="breadscrubs">
						<a href="#">Главная</a>
						<a href="#">Портфолио</a>
						<a href="#">Наружная реклама</a>
					</div>
					<!-- close .breadscrubs -->
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
							<h3><?php the_title(); // заголовок поста ?></h3>
							<?php the_content(); // контент ?>
							<?php do_shortcode('[portfolio]') ?>
						</article>
					<?php endwhile; // конец цикла ?>
				</div>
				<!-- close .workspace -->
			</div>
		</div>
		<!-- close .page-contacts__wrap -->
	</section>

<?php get_footer(); // подключаем footer.php ?>