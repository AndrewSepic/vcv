<? get_header(); ?>
    <section id='content' class='container clearfix '>
        <h1>News</h1>
        
 <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
	?>
		<h2><? the_title(); ?></h2>
		<time><? the_date(); ?></time>
		<? if(has_post_thumbnail()){
			the_post_thumbnail('large');
		}?>
        <? the_content(); ?>
       
        <?
	} // end while
} // end if
?>
        
    </section>
    <? get_footer(); ?>