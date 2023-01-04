<? get_header(); ?>
    <section id='content' class='container clearfix '>        
 <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		
		$icon =get_field('icons');  
		$src=$icon['url'];
	?>
		<h1><div class='img'><img src='<?  echo $src ?> ' width="70"' align='middle'  /></div><? the_title(); ?></h1>
		
        <? the_content(); ?>
   
    </section>
    
    <footer class='container content'>
    	<? the_field("footer_content"); ?>
    </footer>
    
            <?
	} // end while
} // end if
?>
    <? get_footer(); ?>