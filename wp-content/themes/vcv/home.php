<? get_header(); ?>
    <section id='content' class='container '>
        <h1>News</h1>
        
 <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
	?>
		<article class='news clearfix'>
		<h2><a href='<?  the_permalink();  ?>'><? the_title(); ?></a></h2>
		<time><? the_date(); ?></time>
		<? if(has_post_thumbnail()){
			the_post_thumbnail('thumbnail');
		}?>
        <? the_excerpt(); ?>
        </article>
        <?
	} // end while
} // end if
?>
    </section>
    
    <? get_footer(); ?>