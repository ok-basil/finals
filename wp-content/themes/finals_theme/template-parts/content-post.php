<?php 

/**
 * Template part for displaying posts
 * 
 * @package finals_theme
 */
?>

<section class="blog-post-header" id="blog-post-header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>"> 
    <div class="site-wrapper">
        <div>
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </div>
</section>

<section class="content" id="content">
    <div class="site-wrapper">
        <div class="mid-section" id="mid-section">
            <div>
                <span>
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/icons/return.png">
                        <form><input type="button" value="Back" onclick="history.back()"></form>
                    </span>
                    <p><?php get_the_category();?></p>
                </span>
            </div>
            <div>
                <p><?php echo $post_content; ?></p>
            </div>
        </div>
    </div>
</section>
