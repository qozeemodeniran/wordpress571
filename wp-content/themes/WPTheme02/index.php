<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPTheme02</title>
    <link rel="stylesheet" href="/wp-content/themes/WPTheme02/style.css">
</head>
<body>
    <header id="mainhead">
        <h1><a href="#">WPTheme02</a></h1>
    </header>
    <div id="content">
        <?php
            // Creating an array of post titles...
            $post_titles = [
                "Hello World",
                "Hello PHP",
                "Hello WorldPress!",
                "Hello Posts"
            ];
            // Loop through the array of post...
            foreach($post_titles as $post_title){
                // Call the display_title function and pass it to the post
                display_title($post_title);
            }
            /**
             * Display the title for a post
             * @param string $title The title to be displayed
             */
            function display_title($title){
                // Echo and h3-tag with the post title inside it
                echo "<h3>" . $title . "</h3>";
            }
        ?>
    </div>
</body>
</html>