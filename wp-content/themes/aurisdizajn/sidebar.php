
<div class="sidebar">
	<div class="nav-box">
		<?php wp_nav_menu( array('menu' => 'Kategorije', 'container' => 'nav', 'container_class' => 'cat-nav' )); ?>
		<!-- Slider -->
	</div>
	<?php
		if(is_single()):
			$additional_gallery = types_render_field("in-other-color", array());
			if ( $additional_gallery ):
	?>
	<div class="additional-gallery">
		<h3 class="box-title">U drugoj boji</h3>
		<div class="slider">
			<?php echo $additional_gallery ?>
		</div>
	</div>
	<?php endif; endif; ?>
</div>
