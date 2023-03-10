<?php 

/**
 * Template name: Front Page
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package finals_theme
 */

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
                    <?php $args = [
                        'post_type' => 'post',
                        'post_per_page' => 5,
                    ];

                    $the_query = new \WP_Query($args);
                    $post = the_post();

                    if($the_query->have_posts()){
                        $count = 0;
                        while($the_query->have_posts()) {
                            $the_query->the_post();
                            $post_id = get_the_ID();
                            $the_post = get_post($post_id);
                            $post_content = strip_tags($the_post->post_content);
                            $count ++;
                            ?>
                            <div class="post-style" id="post-style">
                                <div class="first" id="first">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" >
                                </div>
                                <div class="second" id="second">
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <p> <?php if($count === 1){
                                        echo truncate($post_content, 140);
                                        } else {?>
                                        <?php echo truncate($post_content, 90); }?>
                                    </p>
                                    <span>
                                        <p><?php $item = get_the_category(); echo $item[0]->name; ?></p>
                                        <span>
                                            <a href="<?php the_permalink(); ?>"><p>Read More</p>
                                            <img src="<?php echo get_template_directory_uri() ?> /assets/icons/show-more.png" alt="show-more"></a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
        <div class="blue-thunder">
            <span class="span">
                <img src="<?php echo get_template_directory_uri() ?> /assets/icons/frontpage-thunder.png" alt="frontpage-thunder">
            </span>
        </div>
    </section>
</main>

<?php get_footer() ?>