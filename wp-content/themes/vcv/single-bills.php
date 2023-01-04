<? get_header(); ?>
    <section id='content' class='container '>
        <h1><?  the_field('bill_number');  ?> &ndash; <? the_title(); ?></h1>
        <? the_content(); ?>
    </section>
    <? get_footer(); ?>