<?php get_header(); ?>

<div class="business-single">
	<div class="container">
		<div class="row">
			<div class="box">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-lg-12">
						<?php the_post_thumbnail( 'post-trumbnail', array ( 'class' => 'img-responsive img-border img-full' )) ?>        
                    <h2 class="text-center"><?php the_title(); ?>
                        <br>
                        <small><?php the_time( 'F, j, Y'); ?></small>
                    </h2>
                    <p><?php the_content(); ?></p>
					</div>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
