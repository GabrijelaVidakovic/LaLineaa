<?php get_header(); ?>

<div class="main-wrap">
	<main class="main" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="single-product">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="product-body">
				<?php the_content(); ?>
				<?php
					$product_price = get_post_meta($post->ID,'wpcf-price',TRUE);
					$disable_order = get_post_meta($post->ID,'wpcf-disable-order',TRUE);
					if( $product_price != '' || !$disable_order ):
				?>
				<div class="meta cf">
					<?php if( $product_price != '' ): ?>
					<p class="price"><strong class="label">Cijena:</strong> <span class="amount"><?php echo $product_price ?> kn</span></p>
					<?php endif; ?>
					<?php if ( !$disable_order ): ?>
					<a href="<?php echo get_permalink( 39 ); ?>?proizvod=<?php echo $post->ID; ?>" class="button" title="<?php the_title(); ?>">Naručite uzorak</a>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
		</article>
		<?php
			$term_list = wp_get_post_terms($post->ID, 'product_tag', array("fields" => "slugs"));
			if ( $term_list ):
				$args = array(
					'posts_per_page' => -1,
					'orderby' => 'rand',
					'post_type' => 'product',
					'post__not_in' => array ( $post->ID ),
					'tax_query' => array(
						array(
							'taxonomy' => 'product_tag',
							'field' => 'slug',
							'terms' => $term_list
						)
					)
				);
				$related = new WP_Query( $args );
				if ( $related->have_posts() ):
		?>
		<aside class="product-list related-products">
			<h3 class="box-title">Povezani proizvodi</h3>
			<div class="list-body">
				<ul class="cf list">
					<?php while ( $related->have_posts() ): $related->the_post(); ?>
					<li id="post-<?php echo $post->ID; ?>">
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
								<p class="price"><strong class="label">Cijena:</strong> <span class="amount"><?php echo $product_price ?> kn</span></p>
								<?php endif; ?>
								<!-- <a href="<?php the_permalink() ?>" class="button" title="<?php the_title(); ?>">Detalji</a> -->
							</div>
						</article>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</aside>
		<?php endif; wp_reset_postdata(); endif; ?>
		<?php endwhile; endif; ?>
	</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
