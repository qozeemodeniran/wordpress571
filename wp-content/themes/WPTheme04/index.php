<!-- Getting the header -->
<?php get_header(); ?>

    <div id="content">

        <!-- Starting the Loop (if and while) -->
        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <!-- Displaying title and content -->
        <article <?php post_class(); ?>>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>

            <footer>
                <p class="byline">
                    Author: 
                    <a href="<?php echo get_author_posts_url($post->post_author); ?>">
                        <?php the_author(); ?>
                    </a> |
                    Date:
                    <?php the_time('M. j, y'); ?> |
                    Category:
                    <?php the_category(', '); ?> |
                    Tags:
                    <?php the_tags('', ', ', ''); ?>
                </p>
            </footer>

        </article>

        <!-- Ending while loop, starting else -->
        <?php endwhile; else: ?>

        <!-- Display 404 message -->
        <h2><?php esc_html_e("404 Error", "WPTheme04"); ?></h2>
        <p><?php esc_html_e("Sorry, content not found", "WPTheme04"); ?></p>
        <!-- End if -->
        <?php endif; ?>

    </div>
    
<!-- Getting the footer -->
<?php get_footer(); ?>