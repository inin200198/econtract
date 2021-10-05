<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
$current_language = qtranxf_getLanguage();
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" href="https://econtract.fpt.com.vn/wp-content/themes/Newspaper/fptecontract/img/favicon.png" type="image/png" sizes="16x16">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a> -->

        <header id="masthead" class="site-header">
            <div class="header-top">
                <div class="container">
                    <div class="info-head">
                        <div class="left">
                            <div class="btn-bar"><a href="javascript:void(0)">
                                    <svg width="24" height="16" viewBox="0 0 24 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.26449 0H22.7352C23.4312 0 24.0005 0.569333 24.0005 1.26533V1.40133C24.0005 2.09733 23.4312 2.66667 22.7352 2.66667H1.26449C0.568488 2.66667 0.000488281 2.09733 0.000488281 1.40133V1.26533C0.000488281 0.569333 0.568488 0 1.26449 0ZM22.7352 6.66667H1.26449C0.568488 6.66667 0.000488281 7.236 0.000488281 7.932V8.068C0.000488281 8.764 0.568488 9.33333 1.26449 9.33333H22.7352C23.4312 9.33333 24.0005 8.764 24.0005 8.068V7.932C24.0005 7.236 23.4312 6.66667 22.7352 6.66667ZM22.7352 13.3333H1.26449C0.568488 13.3333 0.000488281 13.9027 0.000488281 14.5987V14.7347C0.000488281 15.4307 0.568488 16 1.26449 16H22.7352C23.4312 16 24.0005 15.4307 24.0005 14.7347V14.5987C24.0005 13.9027 23.4312 13.3333 22.7352 13.3333Z"
                                            fill="#2E3A59" />
                                    </svg>
                                </a>
							</div>
                            <div class="logo"><a href="/<?php echo $current_language; ?>"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo.png" class="img-fluid" alt=""></a></div>
                            <div class="h-menu">
                                <?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
                            </div>
                        </div>
                        <div class="right">
                            <ul>
                                <li><a href="">Đăng nhập</a></li>
                                <li>
                                    <div class="translate">
                                        <a href="#">
                                            <?php if( $current_language == 'vi' ):?>
                                                <img src="<?php echo get_template_directory_uri();?>/assets/images/tran1.png" class="img-fluid" alt="FPT ECONTRACT" title="FPT ECONTRACT"/>
                                            <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri();?>/assets/images/tran2.png" class="img-fluid" alt="FPT ECONTRACT" title="FPT ECONTRACT"/>    
                                            <?php endif; ?>
                                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect width="8" height="8" fill="white" />
                                                <path
                                                    d="M4.83205 5.75192C4.43623 6.34566 3.56377 6.34566 3.16795 5.75192L1.03647 2.5547C0.59343 1.89015 1.06982 1 1.86852 1L6.13148 1C6.93018 1 7.40657 1.89015 6.96353 2.5547L4.83205 5.75192Z"
                                                    fill="#2E6CF6" />
                                            </svg>
                                        </a>
                                        <div class="subtrans">
                                            <?php echo qtranxf_generateLanguageSelectCode('image'); ?>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-mobile">
                        <div class="info-menu-mb">
                            <div class="close-menu"><a href="javascript:void(0)"><svg width="32" height="32"
                                        viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 16C0 7.16344 7.16344 0 16 0V0C24.8366 0 32 7.16344 32 16V16C32 24.8366 24.8366 32 16 32V32C7.16344 32 0 24.8366 0 16V16Z"
                                            fill="#71787E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.8857 16L23.6097 10.276C24.131 9.75463 24.131 8.91197 23.6097 8.39063C23.0883 7.8693 22.2457 7.8693 21.7243 8.39063L16.0003 14.1146L10.2763 8.39063C9.755 7.8693 8.91233 7.8693 8.391 8.39063C7.86967 8.91197 7.86967 9.75463 8.391 10.276L14.115 16L8.391 21.724C7.86967 22.2453 7.86967 23.088 8.391 23.6093C8.651 23.8693 8.99233 24 9.33367 24C9.675 24 10.0163 23.8693 10.2763 23.6093L16.0003 17.8853L21.7243 23.6093C21.9843 23.8693 22.3257 24 22.667 24C23.0083 24 23.3497 23.8693 23.6097 23.6093C24.131 23.088 24.131 22.2453 23.6097 21.724L17.8857 16Z"
                                            fill="white" />
                                    </svg>
                                </a>
							</div>
                            <?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<div class="fix-icon-box">
			<ul>
				<li><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/fx-1.png" class="img-fluid" alt=""></a></li>
				<li><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/fx-2.png" class="img-fluid" alt=""></a></li>
				<li><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/fx-3.png" class="img-fluid" alt=""></a></li>
			</ul>
			<div class="box-gif">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/gif-1.png" class="img-fluid" alt="">
				<span><a href="https://khuyenmaiecontract.fpt.com.vn/" target="_blank">Khuyến mại lớn</a></span>
			</div>
		</div>