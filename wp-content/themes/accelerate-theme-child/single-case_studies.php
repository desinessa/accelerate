<?php
/**
 * The template for displaying the case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

        <?php while ( have_posts () ) : the_post(); 
            $services = get_field('services');
            $client = get_field('client');
            $site_link = get_field('site_link');
            $image_01 = get_field('image_01');
            $image_02 = get_field('image_02');
            $image_03 = get_field('image_03');
        ?>
        <?php $size = "full"; ?>

            <!-- CASE STUDY -->
            <section class="case-studies">
                <div class="case-studies-sidebar">
                    <h2><?php the_title(); ?> </h2>
                    <h5><?php echo $services; ?></h5>
                    <small>Client: <?php echo $client; ?></small>
                    <p><?php the_content(); ?></p>
                    <a href="http://www.example.com">Visit Live Site </a>
                </div>
                <div class="case-studies-images">
                    <?php if($image_01) { ?>
                        echo wp_get_attachment_image( $image_01, $size );
                    <?php } ?>
                    <?php if($image_02) { ?>
                        echo wp_get_attachment_image( $image_02, $size );
                    <?php } ?>
                    <?php if($image_03) { ?>
                        echo wp_get_attachment_image( $image_03, $size );
                    <?php } ?>
                </div>
            </section>
        <?php endwhile; ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>