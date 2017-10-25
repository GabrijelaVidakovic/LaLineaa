<?php // Template Name: Home ?>
<?php get_header(); ?>

<div class="main-wrap">
	<main class="main" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article>
			<div class="carousel" id="home-carousel">
				<ul class="bjqs">
					<li>
						<img src="<?php echo get_template_directory_uri() ?>/photos/img1.jpg" width="685" height="420" alt="Auris Dizajn" />
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri() ?>/photos/img2.jpg" width="685" height="420" alt="Auris Dizajn" />
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri() ?>/photos/img3.jpg" width="685" height="420" alt="Auris dizajn" />
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri() ?>/photos/img4.jpg" width="685" height="420" alt="Auris dizajn" />
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri() ?>/photos/img5.jpg" width="685" height="420" alt="Auris dizajn" />
					</li>
				</ul>
			</div>
			<h1 class="page-title">Pozivnice La Linea</h1>
			<div class="article-body">
				<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile; endif; ?>
	</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
