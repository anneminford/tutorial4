<?php
/**
 * The template used for displaying portfolio items
 *
 * @package bootstrapwp
 */
?>

<div class="col-sm-6 col-md-4 item">
  <div class="grid mask">
    <figure>
      <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
      <figcaption>
        <h5>
          <?php the_title(); ?>
        </h5>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg">Take a Look</a></figcaption>
    </figure>
    <!-- /figure --> 
  </div>
  <!-- /grid-mask --> 
</div>
