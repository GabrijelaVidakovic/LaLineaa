<?php get_header(); ?>

<div class="main-wrap">
	<main class="main" role="main">
		<section class="product-list">

			<div class="cf">

				<?php
					$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
					$title = $term->name;
				?>
				<div class="wrap-page-title">
					<h1 class="page-title page-title__pagination"><span class="first-letter" role="presentation" aria-hidden="true">P</span><?php echo $title ?></h1>
				</div>

				<?php wp_pagenavi( array( 'before' => '<div class="top-pagination">', 'after' => '</div>' ) ); ?>

			</div>

			<?php if (have_posts()): ?>
			<div class="list-body">
				<ul class="list">
					<?php while (have_posts()) : the_post(); ?>
					<li id="post-<?php the_ID(); ?>">
						<article>
							<a href="<?php the_permalink() ?>" class="img-wrap" title="<?php the_title(); ?>">
								<?php echo main_image(); ?>
							</a>
							<h2 class="product-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<div class="meta cf">
								<?php
									$product_price = get_post_meta($post->ID,'wpcf-price',TRUE);
									if( $product_price != '' ):
								?>
								<p class="price"><!-- <strong class="label">Cijena:</strong> --> <span class="amount"><?php echo $product_price ?> kn</span></p>
								<?php endif; ?>
								<!-- <a href="<?php the_permalink() ?>" class="button" title="<?php the_title(); ?>">Detalji</a> -->
							</div>
						</article>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>

			<?php wp_pagenavi( array( 'before' => '<div class="bottom-pagination cf">', 'after' => '</div>' ) ); ?>

			<?php else: ?>
			<div class="article-body">
				<p>Žao nam je, ova kategorija nema proizvoda.</p>
			</div>
			<?php endif; ?>
		</section>
	</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php /*
	<span class="prev"><?php next_posts_link('&laquo; Prethodna stranica') ?></span>
	<span class="next"></span>
*/ ?>
