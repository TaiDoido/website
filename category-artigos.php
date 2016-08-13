<?php get_header(); ?>

<!-- INDEX TOP -->
<div class="container-fluid" id="indexTop">
    <div id="taidoido" class="hidden-xs hidden-sm"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="Tai Doido"></div>
    
    <div class="container hidden-md hidden-lg">
        <div id="taidoidossm" class="hidden-md hidden-lg"><img src="<?php bloginfo('template_directory');?>/images/logosm.png" alt="Tai Doido"></div>
    </div>
</div>
        
<!-- MAIN FEED -->
<div class="container">
    <div class="row">
        <ul id="mainFeed">
            <h1>Artigos</h1>
            <?php while ( have_posts() ) : the_post();  ?>
            <a href="<?php echo get_permalink(); ?>" target="_self">
            <li>
               <?php //the_post_thumbnail( 'large', array( 'class' => 'img-responsive' ) ); ?>
               
                <?php $image_id = get_post_thumbnail_id(); ?>
                <?php $image_attributes = wp_get_attachment_image_src( $image_id, 'full');  ?>
                <img alt="" src="<?php echo $image_attributes[0]; ?>" width="100%" class="singleImage">
               <h2><?php the_title();?></h2>
            </li>
            </a>
            <?php endwhile; ?>
        </ul>
        <br><br>
    </div>
</div>

<?php get_footer(); ?>