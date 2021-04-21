<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPTheme03</title>
    <link rel="stylesheet" href="/wp-content/themes/WPTheme03/style.css">
</head>
<body>
    <header id="mainhead">
        <h1><a href="#">WPTheme03</a></h1>
    </header>
    <div id="content">
        <!-- Starting the Loop (if and while) -->
        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <!-- Displaying title and content -->
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <!-- Ending while loop, starting else -->
        <?php endwhile; else: ?>

        <!-- Display 404 message -->
        <?php _e("Sorry!, No content available", "WPTheme03"); ?>

        <!-- End if -->
        <?php endif; ?>
    </div>
</body>
</html>