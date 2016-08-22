<?php
/**
 * Template Name: Team
 */

the_post();

// Get 'team' posts
$team_posts = get_posts( array(
  'post_type' => 'team',
  'posts_per_page' => -1, // Unlimited posts
  'orderby' => 'title', // Order alphabetically by name
) );


if ( $team_posts ):
?>
<section class="row profiles">
  <div class="intro">
    <h2><?php the_title(); ?></h2>

    <p class="lead"><?php the_content(); ?></p>
  </div>

  <?php
  foreach ( $team_posts as $post ):
  setup_postdata($post);

  // Resize and CDNize thumbnails using Automattic Photon service
  $thumb_src = null;
  if ( has_post_thumbnail($post->ID) ) {
    $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
    $thumb_src = $src[0];
  }
  ?>
  <article>
    <div>
      <?php if ( $thumb_src ): ?>
      <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>">
      <?php endif; ?>
    </div>

    <div>

     <img src="<?php the_field('team_photo'); ?>" />
    </div>

    <div>
      <h3><?php the_field('team_name'); ?></h3>
      <h5><?php the_field('team_title'); ?></h5>
      <p><?php the_field('team_description'); ?></p>
    </div>


  </article>
  <!-- /.profile -->
  <?php endforeach; ?>
</section><!-- /.row -->
<?php endif; ?>