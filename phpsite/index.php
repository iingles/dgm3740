<?php 
$title="Cabot Cruises | Home";
include "_top.php"
?>
<main>
    <div class="container">

        <section class="carousel">
            <picture>
                <source srcset="./img/content/slides/large/slide1-1200x350.jpg" media="(min-width: 680px)" />
                <img src="./img/content/slides/small/slide1-350x350.jpg" srcset="./img/content/slides/small/slide1-350x350.jpg" alt="slider image one" />
            </picture>

            <picture>
                <source srcset="./img/content/slides/large/slide2-1200x350.jpg" media="(min-width: 680px)" />
                <img src="./img/content/slides/small/slide2-350x350.jpg" srcset="./img/content/slides/small/slide2-350x350.jpg" alt="slider image two" />
            </picture>

            <picture>
                <source srcset="./img/content/slides/large/slide3-1200x350.jpg" media="(min-width: 680px)" />
                <img src="./img/content/slides/small/slide3-350x350.jpg" srcset="./img/content/slides/small/slide3-350x350.jpg" alt="slider image three" />
            </picture>

            <picture>
                <source srcset="./img/content/slides/large/slide4-1200x350.jpg" media="(min-width: 680px)" />
                <img src="./img/content/slides/small/slide4-350x350.jpg" srcset="./img/content/slides/small/slide4-350x350.jpg" alt="slider image four" />
            </picture> 
        </section>

        <header class="section-header">
            <h2>Recent Articles</h2>
        </header>
        
        <section class="article-list">
            
            <a href="#" class="art-1">
                <article>
                    <img src="./img/content/blog/chairs-beach-400x400.jpg" alt="article image one"/>
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
                    <img src="./img/content/blog/chairs-umbrella-400x400.jpg" alt="article image two"/>
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
                    <img src="./img/content/blog/overhead-beach-400x400.jpg" alt="article image three"/>
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
                    <img src="./img/content/blog/ship-400x400.jpg" alt="article image four"/>
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
<?php include "_bot.php"?>