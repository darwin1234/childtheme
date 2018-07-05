<?php  get_header(); ?>
<div style="width:80%; margin:0 auto;">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
	
		<div class="content-wrap">
			<div class="image">
				<?php echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );?>
			</div>
			 
			<div class="description">
				<h2><?php the_title(); ?></h2>
				<p><?php  the_content(); ?></p>
			</div>
			
			<div class="stats">
				<h4>Stats</h4>
				<p>Dog Breed: <?php echo get_field('dog_breed_group'); ?></p>
				<p>Height: <?php echo get_field('height'); ?></p>
				<p>Weight: <?php echo get_field('weight'); ?></p>
				<p>Life Span: <?php echo get_field('life_span'); ?></p>
				<p>Details Link: <?php echo get_field('details_link'); ?></p>
			</div>
		</div>
			
	<?php endwhile; ?>
<?php endif; ?>
</div>
<?php  get_footer(); ?>