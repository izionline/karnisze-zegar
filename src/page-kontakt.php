<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>

<section>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>
                        <?php echo the_title(); ?>
                    </h1>
                </div>

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
    </article>
</section>

<div class="container-fluid">
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.96356288942!2d19.83977731545687!3d50.1056889794292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471659a4f34ff875%3A0xb369e2d2b5a8899!2sA.Witek!5e0!3m2!1spl!2spl!4v1516225020158" frameborder="0" class="google-map" allowfullscreen=""></iframe>
    </div>
</div>

<?php get_footer(); ?>