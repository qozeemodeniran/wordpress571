<?php get_header(); ?>
    <div id="primary" class="content-area">
        <?php get_sidebar(); ?>
        <main id="main" class="site-main" role="main">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1>index.php</h1>
                </header>
                <div class="enyrt-content">
                <p>Lorem ip?sum dolor sit amet consectetur adipisicing elit. <br> Reprehenderit inventore reiciendis neque aspernatur <br> eos tempora ipsa expedita rerum, aperiam <br> ab! Harum officia adipisci est a. <br> Eveniet, rerum? Mollitia, quo deserunt</p>
                </div>
            </article>
        </main>
    </div>
<?php get_footer(); ?>