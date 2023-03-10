<? get_header(); ?>
    <section id='content' class='container clearfix'>
        <h1><? the_title(); ?></h1>
                <? the_post_thumbnail('medium'); ?>
        <? the_content(); ?>
    </section>
    <section id='actions' class='container '>
    
    <?php
    
    $args = array(
		'post_type' => 'actions',
		'posts_per_page' => '-1',
		'orderby'=>  'menu_order',
		'order'=>'asc'
	);

	// The Query
	$the_query = new WP_Query( $args );
	
	// The Loop
	if ( $the_query->have_posts() ) {
	
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			?>
				<!-- action -->
	    	<div class='action' class='clearfix'>

			 	<div class='img'><? the_post_thumbnail('thumbnail')  ?></div> 
			 	<div class='description'>
			 		<header>
				   		<h2><a href='<?  the_permalink(); ?>'><? the_title(); ?></a></h2>
		    			<a href='<?  the_permalink(); ?>' class='btn'>Take Action</a>
		    		</header>
		    		<div class='excerpt'><? the_excerpt();  ?></div>
		    		
	    		</div>
	    		<div class='clearme'></div>
	    	</div>
	    	<?
		}
		
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}
?>
   	
    </section>
 
    <? get_footer(); ?>