<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">

        <?php $image_id = get_post_thumbnail_id(); ?>
        <?php $image_attributes = wp_get_attachment_image_src( $image_id, 'full');  ?>
        <img src="<?php echo $image_attributes[0]; ?>" width="100%" height="400" class="singleImage">
            
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <?php if (have_posts()): while (have_posts()) : the_post();?>
                <h1><?php the_title();?></h1>
                <?php the_content(); ?>
                <br><br>
        <?php endwhile; else:?>
        <?php endif;?>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>