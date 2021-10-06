<?php
/**
* Template Name: New
 */

get_header(); 
?>
<main class="page-price">
	<?php include('wp-content/themes/wp-bootstrap-starter/breadcrumb.php') ?> 
    <section class="box-case-study news-study">
        <div class="container">
            <div class="title-price">Tin luật mới</div>
            <div class="slide-casestudy dot-circle">
                <?php 
                    $args_nb=array(
                        'category_name' => 'Tin luật', 
                        'post_type' => 'post',
                        'orderby'   => 'publish_date',
                        'order'     => 'DESC',
                        // 'posts_per_page' => 10, 
                    );   
                    $my_query_nb = new wp_query($args_nb);
                ?>
                <?php if ( $my_query_nb->have_posts() ): ?>
                    <?php while ($my_query_nb->have_posts()):$my_query_nb->the_post(); ?>
                        <div class="item-slide">
                            <div class="item-case">
                                <div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
                                <div class="info">
                                    <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                <?php endif;wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="box-news-list">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-price">Tin FPT.eContract</div>
                </div>
                <div class="col-md-8">
                    <div class="list-news">
                        <?php 
                            $args=array(
                                'category_name' => 'Tin tức', 
                                'post_type' => 'post',
                                'orderby'   => 'publish_date',
                                'order'     => 'DESC',
                                // 'posts_per_page' => 10, 
                            );   
                            $my_query = new wp_query($args);
                        ?>
                        <?php if ( $my_query->have_posts() ): ?>
                            <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
                                <div class="item-news">
                                    <div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
                                    <div class="info">
                                        <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                        <p>
                                            <label><span>Tin FPT.eContract </span><span>• <?php echo get_the_date('d/m/Y'); ?></span></label>
                                            <label class="views">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 10.5C11.173 10.5 10.5 11.173 10.5 12C10.5 12.827 11.173 13.5 12 13.5C12.827 13.5 13.5 12.827 13.5 12C13.5 11.173 12.827 10.5 12 10.5ZM12 15.5C10.07 15.5 8.5 13.93 8.5 12C8.5 10.07 10.07 8.50001 12 8.50001C13.93 8.50001 15.5 10.07 15.5 12C15.5 13.93 13.93 15.5 12 15.5ZM21.868 11.502C21.229 10.39 17.706 4.81601 11.729 5.00301C6.202 5.14401 2.986 10.014 2.132 11.502C1.956 11.811 1.956 12.189 2.132 12.498C2.762 13.595 6.162 19 12.025 19C12.106 19 12.188 18.999 12.271 18.997C17.798 18.856 21.014 13.986 21.868 12.498C22.044 12.189 22.044 11.811 21.868 11.502Z" fill="#BDBDBD"/>
                                                </svg>
                                                600
                                            </label>
                                        </p>
                                        <div class="desc">
                                            <?php echo get_the_excerpt(); ?>
                                        </div>
                                        <div class="readmore">
                                            <a href="<?php echo get_the_permalink() ?>">
                                                <span>Read more</span>
                                                <svg width="35" height="18" viewBox="0 0 35 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L33 9" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                                                    <path d="M25 1L33 9L25 17" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile ?>
                        <?php endif;wp_reset_query(); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="side-bar-news text-center">
                        <h4>Triển khai với Quy trình Không chạm, hợp đồng Không giấy</h4>
                        <div class="avr-side"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/side-avr.png" class="img-fluid" alt=""></div>
                        <div class="btn-side"><a href="">Dùng thử</a></div>
                        <div class="side-bott">
                            <ul>
                                <li><a href="" class="hotline-side">Hotline 0934.453.466</a></li>
                                <li>Email: fpt.eContract@fpt.com.vn</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-case-study news-study">
        <div class="container">
            <div class="title-price">Báo chí nói về FPT.eContract</div>
            <div class="slide-casestudy dot-circle">
                <?php 
                    $args_bao=array(
                        'category_name' => 'Tin tức', 
                        'post_type' => 'post',
                        'orderby'   => 'publish_date',
                        'order'     => 'DESC',
                        // 'posts_per_page' => 10, 
                    );   
                    $my_query_bao = new wp_query($args_bao);
                ?>
                <?php if ( $my_query_bao->have_posts() ): ?>
                    <?php while ($my_query_bao->have_posts()):$my_query_bao->the_post(); ?>
                        <div class="item-slide">
                            <div class="item-case">
                                <div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
                                <div class="info">
                                    <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                <?php endif;wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="banner-qc">
        <div class="container">
            <div class="content-qc">
                <div class="logo-qc"><img src="<?php echo get_field('logo_bott','option')['url'] ?>" class="img-fluid" alt=""></div>
                <h3><?php the_field('title_bott','option') ?> </h3>
                <div class="link-more">
                    <a href="<?php echo the_field('link_bott','option') ?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.6">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.999 12.0054C16.999 12.0034 17 12.0024 17 12.0004C17 11.9674 16.984 11.9404 16.981 11.9084C16.973 11.8124 16.961 11.7164 16.924 11.6264C16.897 11.5584 16.851 11.5044 16.81 11.4444C16.779 11.4004 16.762 11.3494 16.724 11.3094L13.861 8.30943C13.479 7.90943 12.847 7.89543 12.447 8.27643C12.048 8.65743 12.033 9.29043 12.414 9.69043L13.664 11.0004H7.99996C7.44796 11.0004 6.99996 11.4474 6.99996 12.0004C6.99996 12.5524 7.44796 13.0004 7.99996 13.0004H13.586L12.293 14.2934C11.902 14.6834 11.902 15.3164 12.293 15.7074C12.488 15.9024 12.744 16.0004 13 16.0004C13.256 16.0004 13.512 15.9024 13.707 15.7074L16.707 12.7074C16.798 12.6164 16.872 12.5064 16.922 12.3854C16.973 12.2644 16.998 12.1354 16.999 12.0054ZM12 20C7.58896 20 3.99996 16.411 3.99996 12C3.99996 7.58901 7.58896 4.00001 12 4.00001C16.411 4.00001 20 7.58901 20 12C20 16.411 16.411 20 12 20ZM12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12C22 6.486 17.514 2 12 2Z"
                                    fill="white" />
                            </g>
                        </svg>
                        <span>Xem chi tiết</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
 