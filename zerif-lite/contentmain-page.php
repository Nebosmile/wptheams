	<div class="my_contents" style="background-color:rgb(251, 250, 251)">		<?php			/* translators: %s: Name of current post */			the_content( sprintf(				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'zerif-lite' ),				the_title( '<span class="screen-reader-text">', '</span>', false )			) );			wp_link_pages( array(				'before' => '<div class="page-links">' . __( 'Pages:', 'zerif-lite' ),				'after'  => '</div>',			) );		?>	</div><!-- .entry-content -->