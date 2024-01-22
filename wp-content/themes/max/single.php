<?php
/** 
 * The single post.<br>
 * This file works as display full post content page and its comments.
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
?> 

<div class="innerpage-header">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inner-banner-golden-horca.webp" alt="event-management">
        <div class="pageheading-middle">
            <div>
            <h2><font>Blog</font></h2>
            <h6 id="breadcrumbs"><span><span><a href="http://localhost/goldenhorca">Home</a> » <span><a href="http://localhost/blog/">Blog</a> </span></span></span></h6>
            </div>
        </div>
</div>
                
<div class="container innerpage-content-wrap post-single">
<div class="row">
    <div class="col-lg-8 pr-lg-5">
        
        <h5 class="blog-heading-style"><?php the_title(); ?></h5>
        <h6 class="blog-date-style"><?php echo get_the_date( 'd-m-Y' ); ?></h6>
        <?php the_content(); ?>
    </div>
    <div class="col-lg-4">
        <span class="post-image">
            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
            <?php the_post_thumbnail('large'); ?>
            <?php endif; ?> 
        </span>

        <h4>Recent Post</h4>
        <ul>
        <?php query_posts('post_type=post&order=Dec&showposts=10'); ?>
        <?php while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
    	<?php wp_reset_query();?>
        </ul>
    </div>
</div>
</div>


<?php
get_footer();