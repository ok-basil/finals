<?php 
    get_header(); 
    $post_id = get_the_ID();
?>

<main>
    <section class="first-section">
        <div class="site-wrapper">
            <div class="container">
                <h1><?php echo get_field('title', $post_id); ?></h1>
                <div class="filter-posts" id="filter-posts">
                    <p><strong>Filter Posts:</strong></p>
                    <span>
                        <p>All Categories</p>
                        <p><img src="<?php echo get_template_directory_uri() ?> /assets/icons/dropdown.png" alt="dropdown"></p>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="second-section">
        <div class="site-wrapper">
            <div class="container">
                <div class="blog-posts-wrapper">
                    <div class="post-style" id="post-style">
                        <div class="first" id="first">
                            <img src="<?php echo get_template_directory_uri() ?> /assets/img/iphone.png" alt="iphone">
                        </div>
                        <div class="second" id="second">
                            <h2>Building a 21st century company</h2>
                            <p>Very experienced software developers take it upon themselves to oversee continued growth of the students during and after the 3 month programme.</p>
                            <span>
                                <p>Business</p>
                                <span>
                                    <p>Read More</p>
                                    <img src="<?php echo get_template_directory_uri() ?> /assets/icons/show-more.png" alt="show-more">
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="post-style" id="post-style">
                        <div class="first" id="first">
                            <img src="<?php echo get_template_directory_uri() ?> /assets/img/stock-market.png" alt="stock-market">
                        </div>
                        <div class="second" id="second">
                            <h2>Coindealer launches on NYSE</h2>
                            <p>Very experienced software developers take it upon themselves to oversee programme.</p>
                            <span>
                                <p>Business</p>
                                <span>
                                    <p>Read More</p>
                                    <img src="<?php echo get_template_directory_uri() ?> /assets/icons/show-more.png" alt="show-more">
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="post-style" id="post-style">
                        <div class="first" id="first">
                            <img src="<?php echo get_template_directory_uri() ?> /assets/img/fibre.png" alt="fibre">
                        </div>
                        <div class="second" id="second">
                            <h2>Fibre Optic Network in West Africa</h2>
                            <p>Very experienced software developers take it upon themselves to oversee programme.</p>
                            <span>
                                <p>Business</p>
                                <span>
                                    <p>Read More</p>
                                    <img src="<?php echo get_template_directory_uri() ?> /assets/icons/show-more.png" alt="show-more">
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="post-style" id="post-style">
                        <div class="first" id="first">
                            <img src="<?php echo get_template_directory_uri() ?> /assets/img/keke.png" alt="keke">
                        </div>
                        <div class="second" id="second">
                            <h2>Coindealer lauches on NYSE</h2>
                            <p>Very experienced software developers take it upon themselves to oversee programme.</p>
                            <span>
                                <p>Business</p>
                                <span>
                                    <p>Read More</p>
                                    <img src="<?php echo get_template_directory_uri() ?> /assets/icons/show-more.png" alt="show-more">
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="post-style" id="post-style">
                        <div class="first" id="first">
                            <img src="<?php echo get_template_directory_uri() ?> /assets/img/workstation.png" alt="stock-market">
                        </div>
                        <div class="second" id="second">
                            <h2>Coindealer lauches on NYSE</h2>
                            <p>Very experienced software developers take it upon themselves to oversee programme.</p>
                            <span>
                                <p>Business</p>
                                <span>
                                    <p>Read More</p>
                                    <img src="<?php echo get_template_directory_uri() ?> /assets/icons/show-more.png" alt="show-more">
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>