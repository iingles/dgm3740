<?php 
$title="Cabot Cruises | Home";
include "header.php"
?>
<main>
    <div class="container">
    boo
        <header class="section-header">
            <h2>Recent Articles</h2>
        </header>
        
        <section class="article-list">
            
            <a href="#" class="art-1">
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/content/blog/chairs-beach-400x400.jpg" alt="article image one"/>
                    <header class="article-title">
                        Article Title Goes Here and may wrap
                        to two lines.
                    </header>
                    <footer class="article-footer">
                        May 1, 2018
                    </footer>
                </article>
            </a>

            <a href="#" class="art-2">
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/content/blog/chairs-umbrella-400x400.jpg" alt="article image two"/>
                    <header class="article-title">
                        Article Title Goes Here and may wrap
                        to two lines.
                    </header>
                    <footer class="article-footer">
                        May 1, 2018
                    </footer>
                </article>
            </a>

            <a href="#" class="art-3">
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/content/blog/overhead-beach-400x400.jpg" alt="article image three"/>
                    <header class="article-title">
                        Article Title Goes Here and may wrap
                        to two lines.
                    </header>
                    <footer class="article-footer">
                        May 1, 2018
                    </footer>
                </article>
            </a>

            <a href="#" class="art-4">
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/content/blog/ship-400x400.jpg" alt="article image four"/>
                    <header class="article-title">
                        Article Title Goes Here and may wrap
                        to two lines.
                    </header>
                    <footer class="article-footer">
                        May 1, 2018
                    </footer>
                </article>
            </a>
            

        </section>    
        
    </div>
</main>
<?php include "footer.php"?>