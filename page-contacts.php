<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 

	<section class="site-content page-contacts">
		<!-- open .page-contacts__wrap -->
		<div class="page-contacts__wrap">
			<!-- open .container -->
			<div class="container">
				<?php get_sidebar(); ?>

				<!-- open .workspace -->
				<div class="workspace workspace_page">

					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
							<h3><?php the_title(); // заголовок поста ?></h3>
							<?php the_content(); // контент ?>
							<form action="#">
								<input type="text" name="contacts_name" class="workspace_page_input" placeholder="Имя" />
								<input type="email" name="contacts_email" class="workspace_page_input" placeholder="E-mail"/>
								<textarea name="contacts_comment" class="workspace_page_text" placeholder="Комментарий"></textarea>
								<button type="submit" class="workspace_page_input_submit">Отправить</button>
							</form>
							
						</article>
					<?php endwhile; // конец цикла ?>
				</div>
				<!-- close .workspace -->
			</div>
		</div>
		<!-- close .page-contacts__wrap -->
		
		
		<!-- open .ya_map -->
		<section class="ya_map">
			<div id="map" width="100%" height="100%"></div>
		</section>
		<!-- close .ya_map -->
	</section>

	


<?php get_footer(); // подключаем footer.php ?>