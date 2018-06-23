<?php
/**
 * The template for displaying the about page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page about-hero-content">
    <div class="main-content" role="main">


			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
  </div><!-- #primary -->

<section class="services-list">
  <div class="about-services">
    <h5>Our Services</h5>
      <p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
  </div>

  <div id="primary" class="site-content">
		<div class="main-content" role="main">
      <?php query_posts('posts_per_page=4&post_type=services_offered'); ?>
			<?php while ( have_posts() ) : the_post();
        $icon_1 = get_field("icon_1");
      ?>

      <article class="services-offered clearfix">
        <aside class="services-offered-sidebar">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
        </aside>
        <div class="services-offered-images">
          <a href="<?php the_permalink(); ?>">
            <?php if($icon_1) {
              echo wp_get_attachment_image( $icon_1 );
            } ?>
          </a>
        </div>
      </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

</section>



<?php get_footer(); ?>
