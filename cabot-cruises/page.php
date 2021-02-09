<?php get_header(); ?>
<main>
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>    
            <?php the_title('<h1 class="page-title">','</h1>'); ?>
            <?php the_content(); ?>
            <?php 
            
            if( is_page('home') ):
                $args = array(
                    'numberposts' => 4,
                    'category' => 'blog'
                );

                $posts = get_posts( $args );

                if( ! empty ($posts) ):
                    echo '<header class="section-header">
                            <h2>Recent Articles</h2>
                        </header>
                        <section class="article-list">';

                    foreach ( $posts as $idx => $p ) {
                        $count = $idx + 1;
                        $date = date('F j, Y', strtotime($p->post_date));

                        echo '<a href="' . get_permalink( $p->ID ) . '" class="art-'. $count . '">';
                            echo '<article>';
                                echo '<img src="'. get_template_directory_uri() .'/img/content/blog/chairs-beach-400x400.jpg." alt="article image one"/>';
                                echo '<header class="article-title">';
                                    echo $p->post_title;
                                echo '</header>';
                                echo '<footer class="article-footer">
                                        '. $date .'
                                    </footer>';
                            echo '</article>';
                        echo '</a>';
                    }

                    echo '</section>';
                endif;  
            
            endif;
            ?>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>