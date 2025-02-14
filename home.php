<?php

get_header(); ?>

<div class="hero">
    <h2>Welcome to My Portfolio</h2>
    <p>Discover my journey, projects, and future ambitions.</p>
</div>

<div class="container">
    <div class="section">
        <h2>📚 What I've Learned</h2>
        <p>I started learning HTML, CSS, and JavaScript. I'm currently struggling with JavaScript, but I'm improving every day!</p>
    </div>

    <div class="section">
        <h2>🔥 A Project I'm Proud Of</h2>
        <p>One of my favorite projects was my Whack-a-Mole game, which was really fun to make.</p>
    </div>

    <div class="section">
        <h2>🎯 Future Goals</h2>
        <p>My goal is to become a web Designer. Eventhough I swapped program from health science into web design!</p>
    </div>

    <div class="section">
        <h2>📰 Latest Blog Posts</h2>
        <ul>
            <?php
            $recent_posts = new WP_Query(array(
                'posts_per_page' => 3,
            ));
            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                    <li>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <p><?php the_excerpt(); ?></p>
                    </li>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </ul>
    </div>
</div>

<?php get_footer(); ?>

