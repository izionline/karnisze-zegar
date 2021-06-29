<?php get_header(); ?>
	
<section>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?php echo the_title(); ?></h1>
                </div>
                <div class="col-12 article">

                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

                <?php if(is_single()) : ?>
                    <?php the_content(); ?>
                    <?php comments_template(); ?>
                <?php elseif(is_page()) : ?>
                    <?php the_content(); ?>
                <?php else : ?>
                    <?php the_excerpt(); ?>
                <?php endif; ?>

                <?php // adres strony: // the_permalink(); ?>

                <?php endwhile; else : ?>
                    <p>Brak wpisów</p>
                <?php endif; ?>

                </div>
            </div>
        </div>
    </article>
</section>

<?php get_footer(); ?>