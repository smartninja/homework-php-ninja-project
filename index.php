<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('thumbnail');
        }
    ?>
    <div class="vsebina"><?php the_excerpt(); ?></div>
    
<?php endwhile; else : ?>
    <p>Trenutno ne najdem vsebin</p>
<?php endif; ?>

<?php get_footer(); ?>





