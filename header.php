<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <nav>
            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo home_url('/category/projects'); ?>">Projects</a></li>
                <li><a href="<?php echo home_url('/category/learning-journey'); ?>">Learning</a></li>
                <li><a href="<?php echo home_url('/category/future-goals'); ?>">Future Goals</a></li>
            </ul>
        </nav>
    </header>
