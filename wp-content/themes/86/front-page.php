<?php get_header(); ?>
	<?php get_sidebar();?>
	<div id="content">
		<section class="content">
		<div class="wrapper">
		<article>
			<?php
		if(have_posts()) : while(have_posts()) : the_post();?>
		<h1><?php the_title();?></h1>
		<?php
		the_content();	
		endwhile;endif;
		?>			
		</div>
		</article>
	</div>
	</section>

	
<?php get_footer(); ?>