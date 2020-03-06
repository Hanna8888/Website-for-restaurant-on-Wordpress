<?php

?>
<div class="col-lg-12 text-center">
	                <?php the_post_thumbnail( 'post-trumbnail', array ( 'class' => 'img-responsive img-border img-full' )) ?>                   
                    <h2><?php the_title(); ?>
                        <br>
                        <small><?php the_time( 'F, j, Y'); ?></small>
                    </h2>
                    <p><?php the_content( '' ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-default btn-lg"><?php esc_html_e( 'Read More', 'business' ); ?></a>
                    <hr>
</div>
