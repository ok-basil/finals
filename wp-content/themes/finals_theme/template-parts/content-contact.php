<?php 
/**
 * Template part for displaying the contact page
 * 
 * @package finals_theme
 */
$post_id = get_the_ID();
?>

<section class="first-section" id="first-section">
    <div class="site-wrapper">
        <div class="know-more" id="know-more">
            <h1><?php the_field('title', $post_id); ?></h1>
            <p><?php the_field('subtitle', $post_id); ?></p>
        </div>
    </div>
</section>

<section class="second-section" id="second-section">
    <div class="yellow-container"></div>
    <div class="site-wrapper">
        <div class="container">
            <div class="first-half" id="first-half">
                <h4><?php the_field('call_to_action', $post_id); ?></h4>
            </div>
            <div class="contact-form">
                <form  class= "form" id="contact-form" method="post" action="">
                    <?php the_field('contact_form', $post_id); ?>
                </form>
            </div>
            <span class="lighting">
                <img src="<?php echo get_template_directory_uri() ?> /assets/icons/yellow-thunder.png" alt="yellow-thunder">
            </span>
        </div>
    </div>
    <div class="address-map" id="address-map">
        <div class="address-holder" id="address-holder">
            <div class="site-wrapper">
                <div class="address-content">
                    <h1>Office Address</h1>
                    <p><?php the_field('office_address', $post_id); ?></p>
                    <p>Email:<?php the_field('email_address', $post_id); ?></p>
                    <p>Tel:<?php the_field('phone_number', $post_id); ?></p>
                </div>
            </div>
            <span class="lighting">
                <img src="<?php echo get_template_directory_uri() ?> /assets/icons/frontpage-thunder.png" alt="frontpage-thunder">
            </span>
        </div>
        <div class="map" id="map">
            <p><div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=120%20vyse%20street%20Birmingham,%20United%20Kingdom%20+(Studio%2014)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div></p>
        </div>
    </div>
</section>