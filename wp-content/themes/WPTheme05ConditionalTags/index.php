<!-- Getting the header -->
<?php get_header(); ?>

    <div id="content">

        <!-- Static front page -->
        <?php if(is_front_page() && !is_home() ): ?>
            <h1>Static Front Page</h1>
        <?php endif; ?>

        <!-- Blog Home -->
        <?php if(is_home()): ?>
            <h1>Blog Page</h1>
        <?php endif; ?>

        <!-- Page (Not front page) -->
        <?php if(is_page() && !is_front_page() ): ?>
            <h1>Page</h1>
        <?php endif; ?>

        <!-- Single Post -->
        <?php if(is_single() && !is_attachment() ): ?>
            <h1>Post</h1>
        <?php endif; ?>

        <!-- Single Attachment (Media) -->
        <?php if( is_attachment() ): ?>
            <h1>Attachment</h1>
        <?php endif; ?>

        <!-- Category Archive -->
        <?php if( is_category() ): ?>
            <h1><?php single_cat_title(); ?></h1>
        <?php endif; ?>

        <!-- Tag archive -->
        <?php if( is_tag() ): ?>
            <h1><?php single_tag_title(); ?></h1>
        <?php endif; ?>

        <!-- Author archive -->
        <?php if( is_author() ): ?>
            <h1><?php the_archive_title(); ?></h1>
        <?php endif; ?>

        <!-- Tag archive -->
        <?php if( is_date() ): ?>
            <h1><?php the_archive_title(); ?></h1>
        <?php endif; ?>

        <!-- 404 Page -->
        <?php if( is_404() ): ?>
            <h1>404</h1>
        <?php endif; ?>
        
    </div>
    
<!-- Getting the footer -->
<?php get_footer(); ?>