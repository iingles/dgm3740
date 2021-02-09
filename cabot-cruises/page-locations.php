<?php get_header(); ?>
<main>
    <div class="container location">
    <?php the_title('<h1 class="page-title">','</h1>'); ?>
        <div class="row">
            <div class="col">            
                <p>
                    <a 
                    href="https://www.google.com/maps/place/277+E+100+N,+Bountiful,+UT+84010/@40.8905979,-111.8765838,17z/data=!3m1!4b1!4m5!3m4!1s0x8752f7f6094373f7:0x4811cbde1ae32384!8m2!3d40.8905979!4d-111.8743951"
                    target="_blank">
                        CABOT CRUIZES <br />
                        277 E. 100 N. <br />
                        Bountiful, UT 84010
                    </a>                            
                </p>
                <h2>Phone:</h2>
                <p><a href="tel:18005551234">1-800-555-1234</a></p>

                <h2>Email:</h2>
                <p><a href="mailto:contact@example.com">contact@example.com</a></p>
            </div>

        </div>
        <div class="map">
            <iframe
            width="600"
            height="450"
            frameborder="0" style="border:0"
            allowfullscreen
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBqoGvE_tOI9_ni7XaT7pWZ7yYjFqIS_Y0
                &q=277+E+100+N,+Bountiful,+UT+84010/" allowfullscreen>
            </iframe>
        </div> 
          
    </div>
</main>
<?php get_footer(); ?>