<?php get_header(); ?>

<div class="main-wrap">
	<main class="main" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article>
			<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="article-body">
				<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile; endif; ?>
	</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
