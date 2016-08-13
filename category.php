<?php get_header(); ?>

<!-- INDEX TOP -->
<div class="container-fluid" id="indexTop">
    <div id="taidoido" class="hidden-xs hidden-sm"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="Tai Doido"></div>
    
    <div class="container hidden-md hidden-lg">
        <div id="taidoidossm" class="hidden-md hidden-lg"><img src="<?php bloginfo('template_directory');?>/images/logosm.png" alt="Tai Doido"></div>
    </div>
</div>

<!-- NEWS FEED -->
<div class="container">
    <div class="row">
        <ul id="listEvents">
            <h1>Próximos Eventos</h1>
            <?php while ( have_posts() ) : the_post();  ?>
            <a href="<?php echo get_permalink(); ?>" target="_self">
            <li class="col-xs-6 col-lg-3">
               <?php //the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' ) ); ?>
               
                <?php $image_id = get_post_thumbnail_id(); ?>
                <?php $image_attributes = wp_get_attachment_image_src( $image_id, 'full');  ?>
                <img alt="" src="<?php echo $image_attributes[0]; ?>" width="100%" height="100%" class="singleImage">
                
               <h2><?php the_title();?></h2>
            </li>
            </a>
            <?php endwhile; ?>
        </ul>
        </div></div>
        
<!-- MAIN FEED -->
<div class="container">
    <div class="row">
        <ul id="mainFeed">
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
    </div>
</div>

<?php get_footer(); ?>