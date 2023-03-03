<?php 

/**
 * Template part for displaying posts
 * 
 * @package finals_theme
 */
?>

<section class="blog-post-header" id="blog-post-header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"> 
    <div class="site-wrapper">
        <div class="the-title" id="the-title">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
    </div>
</section>

<section class="content" id="content">
    <div class="site-wrapper">
        <div class="mid-section" id="mid-section">
            <div class="top-half" id="top-half">
                <span>
                    <span>
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/icons/return.png">
                        <form><input type="button" value="Back" onclick="history.back()"></form>
                    </span>
                    <p><?php $item = get_the_category(); echo $item[0]->name; ?></p>
                </span>
            </div>
            <div class="lower-half" id="lower-half">
                <p><?php echo the_content(); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="send-message" id="send-message">
    <div class="site-wrapper">
        <div class="message" id="message">
            <h4>send us a message</h4>
            <p>Whatever stage you're at, we're happy to chat.</p>
            <span>
                <button> <p>GET IN TOUCH</p> <img src="<?php echo get_template_directory_uri(); ?> /assets/icons/show-more.png"></button>
            </span>
        </div>
    </div>
</section>