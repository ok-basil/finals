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
    <div class="site-wrapper">
        <div class="container">
            <div class="first-half" id="first-half">
                <h4><?php the_field('call_to_action', $post_id); ?></h4>
            </div>
            <div class="contact-form">
                <form  class= "form" id="contact-form" method="post" action="">
                    <input name="name" type="text" class="form-control" placeholder="Full Name" required><br>
                    <input name="email" type="email" class="form-control" placeholder="Email" required><br>
                    <input name="phone-no" type="telephone" class="form-control" placeholder="Phone No" required><br>
                    <input name="message" type="text" class="form-control" placeholder="Message" required></textarea><br>
                    <button><p>Submit</p></button>
                </form>
            </div>
        </div>
    </div>
    <div class="address-map" id="address-map">
        <div class="address-holder" id="address-holder">
            <div class="site-wrapper">
                <div class="address-content">
                    <h1>Office Address</h1>
                    <p><?php the_field('office_address', $post_id); ?></p>
                    <p><?php the_field('email_address', $post_id); ?></p>
                    <p><?php the_field('phone_number', $post_id); ?></p>
                </div>
            </div>
        </div>
        <div class="map" id="map">
            <p><?php the_field('map_location', $post_id); ?></p>
        </div>
    </div>
</section>