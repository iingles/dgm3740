<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <h1>Search Results</h1>

        <?php while ( have_posts() ) : the_post(); ?>    
            <?php the_title('<h2>','</h2>'); ?>
            <?php the_excerpt(); ?>
        <?php endwhile; ?>
        </div>
    </div>    
</div>
<?php get_footer(); ?>