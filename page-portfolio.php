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
							<!-- open .page-portfolio__tabmenu -->
							<ul class="page-portfolio__tabmenu">
								<li class="page-portfolio__tabmenu_active"><a href="#" class="page-portfolio__tabmenu_btn"> Наружная реклама</a>
									
								</li>
								<li><a href="#" class="page-portfolio__tabmenu_btn">Интерьерные работы</a>
								
									
								</li>
							</ul>
							<!-- close .page-portfolio__tabmenu -->

							<!-- open .page-portfolio__tabmenu_sub -->
							<ul class="page-portfolio__tabmenu_sub" >
								<li><a href="#" class="page-portfolio__tabmenu_sub_active">item 1</a></li>
								<li><a href="#">item 2</a></li>
								<li><a href="#">item 3</a></li>
								<li><a href="#">item 4</a></li>
								<li><a href="#">item 5</a></li>
							</ul>
							<!-- close .page-portfolio__tabmenu_sub -->

							<!-- open .page-portfolio__content -->
								<article class="page-portfolio__content">
									<a class="page-portfolio__item" href="<?php bloginfo('template_directory'); ?>/img/trade-center-night.jpg" data-lightbox="gallery-set">
										<span class="page-portfolio__item_img">
											<img src="<?php bloginfo('template_directory'); ?>/img/trade-center-night.jpg" alt="" />
										</span>


										
										<h4>title</h4>
									</a>
									<a class="page-portfolio__item" href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" data-lightbox="gallery-set">
										<span class="page-portfolio__item_img">
											<img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt="" />
										</span>
										
										<h4>title</h4>
									</a>
									<a class="page-portfolio__item" href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" data-lightbox="gallery-set">
										<span class="page-portfolio__item_img">
											<img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt="" />
										</span>
										
										<h4>title</h4>
									</a>
									<a class="page-portfolio__item" href="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" data-lightbox="gallery-set">
										<span class="page-portfolio__item_img">
											<img src="<?php bloginfo('template_directory'); ?>/img/tablo.jpg" alt="" />
										</span>
										
										<h4>title</h4>
									</a>
								</article>
								<!-- close .page-portfolio__content -->	
						</article>
					<?php endwhile; // конец цикла ?>
				</div>
				<!-- close .workspace -->
			</div>
		</div>
		<!-- close .page-contacts__wrap -->
	</section>

<?php get_footer(); // подключаем footer.php ?>