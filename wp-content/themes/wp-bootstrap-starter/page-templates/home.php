<?php
/**
 * Template Name: Home
 */

get_header();
?>
<main>
    <section class="box-banner">
        <div class="container"> 
            <div class="slide-banner">
                <?php while ( has_sub_field('danh_sach_slide')) : ?>
                    <div class="item-slide">
                        <div class="item-banner">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="txt-banner">
                                        <h2 class="wow fadeInDown wHighlight" data-wow-delay=".2s"><?php the_sub_field( 'title_slide'); ?></h2>
                                        <div class="desc wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_sub_field( 'desc_slide'); ?></div>
                                        <div class="btn-banner wow fadeInUp wHighlight" data-wow-delay=".3s">
                                            <ul>
                                                <li><a href="<?php the_sub_field( 'link_slide'); ?>" class="btn-main-gray">Gọi tư vấn cho tôi</a></li>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="avar text-center wow fadeInRight wHighlight" data-wow-delay=".2s"><img src="<?php echo get_sub_field( 'avr_slide' )['url']; ?>" class="img-fluid" alt=""></div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="box-video">
        <div class="container">
            <div class="content-video">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="txt-video">
                            <h3 class="desc wow fadeInUp wHighlight" data-wow-delay=".2s"><?php echo the_field('title_video') ?></h3>
                            <div class="info-txt-video">
                                <?php while ( has_sub_field('content_video')) : ?>
                                    <div class="item-txt-video wow fadeInUp wHighlight" data-wow-delay=".2s">
                                        <div class="icon"><img src="<?php echo get_sub_field( 'icon_video' )['url']; ?>" class="img-fluid" alt=""></div>
                                        <div class="info">
                                            <?php the_sub_field( 'desc_video' ); ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="iframe-video">
                            <svg width="72" height="71" viewBox="0 0 72 71" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.92091 0H71.2069V70.1684H13.2936C5.59452 70.1684 -0.30822 63.252 0.8159 55.5478L8.92091 0Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M71.2938 0H8.33082L0.140632 55.528C-0.996619 63.2384 4.90835 70.1684 12.6155 70.1684H71.2938V53.8224H22.654C16.3728 53.8224 11.6062 48.0989 12.6731 41.8378L15.1601 27.2426C15.9975 22.3286 20.2112 18.7382 25.1411 18.7382H46.3111C52.5053 18.7382 57.2388 24.3284 56.2868 30.5194C55.5218 35.4934 51.2876 39.1615 46.3111 39.1615H30.3714C28.6299 39.1615 27.2181 37.7336 27.2181 35.9721C27.2181 34.2106 28.6299 32.7826 30.3714 32.7826H46.3111C48.1789 32.7826 49.7681 31.4058 50.0552 29.539C50.4126 27.2153 48.636 25.1171 46.3111 25.1171H25.1411C23.2809 25.1171 21.6909 26.4719 21.3749 28.3261L18.8879 42.9213C18.4853 45.2838 20.2839 47.4434 22.654 47.4434H71.2938V0Z"
                                    fill="#3981F3" />
                            </svg>
                            <?php echo the_field('iframe_video') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-number-hot">
        <div class="svg-abs svg-1"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-1.png" class="img-fluid" alt=""></div>
        <div class="container">
            <div class="number-top" id="counter">
                <div class="row">
                    <?php while ( has_sub_field('number_top' ) ) : ?>
                        <div class="col-md-6 col-sm-6">
                            <div class="item-number-top">
                                <div class="icon"><img src="<?php echo get_sub_field( 'icon_numb_top' )['url']; ?>" class="img-fluid" alt=""></div>
                                <div class="info">
                                    <h4><span class="count counter-value" data-count="<?php the_sub_field( 'number_count' ); ?>"></span>+</h4>
                                    <div class="desc"><?php the_sub_field( 'desc_numb' ); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="number-bott">
                <div class="row">
                    <?php $count_numb = 0; ?>
                    <?php while ( has_sub_field('number_bott' ) ) : ?>
                        <div class="col-md-3 col-6 col-sm-6 wow fadeInUp wHighlight" data-wow-delay=".<?php echo $count_numb++?>5s">
                            <div class="item-nb text-center">
                                <div class="icon"><img src="<?php echo get_sub_field( 'icon_numb_bott' )['url']; ?>" class="img-fluid" alt=""></div>
                                <div class="desc">
                                    <h4><?php the_sub_field( 'title_numb_bott' ); ?></h4>
                                    <p><?php the_sub_field( 'desc_numb_bott' ); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="box-step">
        <div class="container">
            <div class="title-price text-center wow fadeInUp wHighlight" data-wow-delay=".2s"><?php echo the_field('title_program'); ?></div>
            <div class="list-step">
                <div class="row">
                    <?php 
                        $list_prog = 1;
                        $anm_prog = 5;
                    ?>
                    <?php while ( has_sub_field('list_program' ) ) : ?>
                        <div class="col-md-3 wow fadeInLeft wHighlight" data-wow-delay=".<?php echo $anm_prog-=1 ?>s">
                            <div class="item-step">
                                <span class="numb-step"><?php echo $list_prog++ ?></span>
                                <h3 class="text-center"><?php the_sub_field( 'title_item_prog' ); ?></h3>
                                <div class="icon-avr"><img src="<?php echo get_sub_field( 'icon_prog')['url']; ?>" class="img-fluid" alt=""></div>
                                <div class="desc">
                                    <ul>
                                        <li>Nhận email thông báo tự động</li>
                                        <li>Duyệt trước nội dung hợp đồng</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <div class="col-md-12">
                        <div class="btn-buy text-center wow fadeInUp wHighlight" data-wow-delay=".2s"><a href=""
                                class="btn-main">MUA NGAY</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-juridical">
        <div class="svg-abs svg-2 wow fadeInUp wHighlight" data-wow-delay=".2s"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-2.png"
                class="img-fluid" alt=""></div>
        <div class="container">
            <div class="content-juridical">
                <div class="icon wow fadeInUp wHighlight" data-wow-delay=".2s"><img src="<?php echo get_field('avr_phaply')['url'] ?>" class="img-fluid" alt=""></div>
                <div class="info">
                    <h3 class="wow fadeInUp wHighlight" data-wow-delay=".2s"><?php echo the_field('title_ply') ?></h3>
                    <ul>
                        <?php while ( has_sub_field('content_ply' ) ) : ?>
                            <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span><?php the_sub_field( 'item_ply' ); ?></span>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="box-optimal">
        <div class="container">
            <div class="content-optimal">
                <div class="row">
                    <div class="col-md-6 pr-0">
                        <div class="info-opt">
                            <h3 class=" wow fadeInUp wHighlight" data-wow-delay=".2s">Tối ưu an toàn, an ninh thông tin
                            </h3>
                            <ul>
                                <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z"
                                            fill="#2E6CF6"></path>
                                    </svg>
                                    <span>Đáp ứng đầy đủ tính pháp lý về xác thực điện tử</span>
                                </li>
                                <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z"
                                            fill="#2E6CF6"></path>
                                    </svg>
                                    <span>Giải pháp bảo mật chống tấn công từ bên ngoài 24/7</span>
                                </li>
                                <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z"
                                            fill="#2E6CF6"></path>
                                    </svg>
                                    <span>Hợp đồng, tài liệu điện tử được lưu trữ tại Trung tâm dữ liệu duy nhất tại
                                        Việt Nam đạt an toàn thông tin ISO 27001:2013 và 22301:2012</span>
                                </li>
                                <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z"
                                            fill="#2E6CF6"></path>
                                    </svg>
                                    <span>Phần mềm xây dựng theo quy trình chuẩn quốc tế về quản lý chất lượng, bảo mật
                                        thông tin ISO 9001:2008, ISO 2700 và CMMI3</span>
                                </li>
                                <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z"
                                            fill="#2E6CF6"></path>
                                    </svg>
                                    <span>Hệ thống áp dụng nhiều giải pháp, nhiều tầng, lớp bảo mật khác
                                        nhau: Firewall, Web-App Firewall, Mã hóa kênh truyền, Mã hóa dữ liệu,
                                        Multi-tenancy, Pentest"</span>
                                </li>
                            </ul>
                            <div class="btn-banner text-uppercase wow fadeInUp wHighlight" data-wow-delay=".2s">
                                <ul>
                                    <li class="p-0 mb-0"><a href="" class="btn-main-blue" style="min-width: 280px">Mua
                                            ngay</a></li>
                                    <li class="p-0 mb-0"><a href="" class="btn-main-gray">Gọi tư vấn cho tôi </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="avr wow fadeInRight wHighlight" data-wow-delay=".2s"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/optimal.png"
                                class="img-fluid" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-tool-step">
        <div class="container">
            <div class="slide-tool dot-circle">
                <div class="item-slide wow fadeInUp wHighlight" data-wow-delay=".2s">
                    <div class="item-tool text-center">
                        <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/tool-1.png" class="img-fluid" alt=""></div>
                        <p>Tải tool ký số</p>
                    </div>
                </div>
                <div class="item-slide wow fadeInUp wHighlight" data-wow-delay=".25s">
                    <div class="item-tool text-center">
                        <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/tool-2.png" class="img-fluid" alt=""></div>
                        <p>Hướng dẫn cài đặt</p>
                    </div>
                </div>
                <div class="item-slide wow fadeInUp wHighlight" data-wow-delay=".3s">
                    <div class="item-tool text-center">
                        <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/tool-3.png" class="img-fluid" alt=""></div>
                        <p>Liên hệ làm đại lý</p>
                    </div>
                </div>
                <div class="item-slide wow fadeInUp wHighlight" data-wow-delay=".35s">
                    <div class="item-tool text-center">
                        <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/tool-4.png" class="img-fluid" alt=""></div>
                        <p>Đăng ký sử dụng</p>
                    </div>
                </div>
                <div class="item-slide wow fadeInUp wHighlight" data-wow-delay=".4s">
                    <div class="item-tool text-center">
                        <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/tool-3.png" class="img-fluid" alt=""></div>
                        <p>Liên hệ làm đại lý</p>
                    </div>
                </div>
                <div class="item-slide wow fadeInUp wHighlight" data-wow-delay=".45s">
                    <div class="item-tool text-center">
                        <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/tool-4.png" class="img-fluid" alt=""></div>
                        <p>Đăng ký sử dụng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-price price-home">
        <div class="container">
            <div class="box-price-1">
                <div class="title-price text-center wow fadeInUp wHighlight" data-wow-delay=".2s"><?php echo the_field('title_price', 'option'); ?></div>
                <div class="list-package-price">
                    <div class="slide-pack">
                        <?php $key = 0; ?>
						    <?php while ( has_sub_field('danh_sach_slide', 'option') ) : ?>
							<div class="item-slide">
								<div class="item-pack text-center">
									<div class="name-pack"><?php the_sub_field( 'ten_goi' ); ?></div>
									<div class="desc">
										<p><?php the_sub_field( 'desc_pack' ); ?></p>
										<div class="price-pack"><?php the_sub_field( 'price_pack' ); ?><span>đ</span></div>
										<div class="btn-pack"><a href="#price-scroll" class="clc-scoll-form picksales" data-stt="<?php echo $key ; ?>">CHỌN MUA
											<svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.07084 5.14251C9.71818 5.53091 9.71818 6.46909 9.07085 6.85749L2.0145 11.0913C1.34797 11.4912 0.5 11.0111 0.5 10.2338L0.5 1.76619C0.5 0.988896 1.34797 0.508783 2.0145 0.908698L9.07084 5.14251Z" fill="#2E6CF6"/>
											</svg>
										</a></div>
									</div>
								</div>
							</div>
							<?php $key++ ; ?>
						<?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-tab">
        <div class="container">
            <div class="title-price text-center wow fadeInUp wHighlight" data-wow-delay=".2s">Áp dụng ngay với mọi loại
                hợp đồng/tài liệu/<br>chứng nhận điện tử</div>
            <div class="list-tab-acc">
                <ul>
                    <li class="wow fadeInUp wHighlight" data-wow-delay=".2s"><a href="javascript:void(0)" class="active"
                            data-tab="tab-1">Tài chính – Ngân hàng</a></li>
                    <li class="wow fadeInUp wHighlight" data-wow-delay=".25s"><a href="javascript:void(0)"
                            data-tab="tab-2">Bảo hiểm</a></li>
                    <li class="wow fadeInUp wHighlight" data-wow-delay=".3s"><a href="javascript:void(0)"
                            data-tab="tab-1">Bất động sản </a></li>
                    <li class="wow fadeInUp wHighlight" data-wow-delay=".35s"><a href="javascript:void(0)"
                            data-tab="tab-2">Hợp đồng lao động</a></li>
                    <li class="wow fadeInUp wHighlight" data-wow-delay=".4s"><a href="javascript:void(0)"
                            data-tab="tab-1">Khám chữa bệnh</a></li>
                    <li class="wow fadeInUp wHighlight" data-wow-delay=".45s"><a href="javascript:void(0)"
                            data-tab="tab-2">Ngành khác</a></li>
                </ul>
            </div>
            <div class="tab-content-acc wow fadeInUp wHighlight" data-wow-delay=".2s">
                <div class="tab-content active" id="tab-1">
                    <div class="info-tab">
                        <ul>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Mở tài khoản tại nhà</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Làm thủ tục vay từ xa</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Mở tài khoản tại nhà</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Làm thủ tục vay từ xa</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Mở tài khoản tại nhà</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Làm thủ tục vay từ xa</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="tab-2">
                    <div class="info-tab">
                        <ul>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Mở tài khoản tại nhà 1</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Làm thủ tục vay từ xa 1</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ 1</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Mở tài khoản tại nhà</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Làm thủ tục vay từ xa</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Mở tài khoản tại nhà</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Làm thủ tục vay từ xa</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ</span>
                            </li>
                            <li>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span>Thông báo thay đổi thỏa thuận dịch vụ</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-case-study">
        <div class="container">
            <div class="title-price text-center wow fadeInUp wHighlight" data-wow-delay=".2s">Case Study</div>
            <div class="slide-casestudy dot-circle wow fadeInUp wHighlight" data-wow-delay=".2s">
                <div class="item-slide">
                    <div class="item-case">
                        <div class="avarta"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/case-1.png" class="img-fluid w-100" alt=""></a>
                        </div>
                        <div class="info">
                            <h3><a href="">Ký kết hợp đồng điện tử lĩnh vực hàng không</a></h3>
                        </div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-case">
                        <div class="avarta"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/case-2.png" class="img-fluid w-100" alt=""></a>
                        </div>
                        <div class="info">
                            <h3><a href="">Ký kết hợp đồng điện tử lĩnh vực hàng không</a></h3>
                        </div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-case">
                        <div class="avarta"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/case-1.png" class="img-fluid w-100" alt=""></a>
                        </div>
                        <div class="info">
                            <h3><a href="">Ký kết hợp đồng điện tử lĩnh vực hàng không</a></h3>
                        </div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-case">
                        <div class="avarta"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/case-2.png" class="img-fluid w-100" alt=""></a>
                        </div>
                        <div class="info">
                            <h3><a href="">Ký kết hợp đồng điện tử lĩnh vực hàng không</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-feedback">
        <div class="container">
            <div class="slide-feedback dot-circle wow fadeInUp wHighlight" data-wow-delay=".2s">
                <div class="item-slide">
                    <div class="item-feed">
                        <div class="icon-fb"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/fb.png" class="img-fluid" alt=""></div>
                        <div class="info">
                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt augue
                                tristique tempor elementum, donec euismod ut neque, aenean. Fermentum fusce lorem turpis
                                dignissim egestas sit.</div>
                            <div class="fb-bott text-right">
                                <h6>Nguyễn Văn Thủy</h6>
                                <label>CEO Pitstudio</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-feed">
                        <div class="icon-fb"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/fb.png" class="img-fluid" alt=""></div>
                        <div class="info">
                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt augue
                                tristique tempor elementum, donec euismod ut neque, aenean. Fermentum fusce lorem turpis
                                dignissim egestas sit.</div>
                            <div class="fb-bott text-right">
                                <h6>Nguyễn Văn Thủy</h6>
                                <label>CEO Pitstudio</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-feed">
                        <div class="icon-fb"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/fb.png" class="img-fluid" alt=""></div>
                        <div class="info">
                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt augue
                                tristique tempor elementum, donec euismod ut neque, aenean. Fermentum fusce lorem turpis
                                dignissim egestas sit.</div>
                            <div class="fb-bott text-right">
                                <h6>Nguyễn Văn Thủy</h6>
                                <label>CEO Pitstudio</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-feed">
                        <div class="icon-fb"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/fb.png" class="img-fluid" alt=""></div>
                        <div class="info">
                            <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt augue
                                tristique tempor elementum, donec euismod ut neque, aenean. Fermentum fusce lorem turpis
                                dignissim egestas sit.</div>
                            <div class="fb-bott text-right">
                                <h6>Nguyễn Văn Thủy</h6>
                                <label>CEO Pitstudio</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-part">
        <div class="container">
            <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s">Khách hàng tiêu biểu</div>
            <div class="slide-partner dot-circle wow fadeInUp wHighlight" data-wow-delay=".2s">
                <div class="item-slide">
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-1.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-1.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-2.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-2.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-3.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-3.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-4.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-4.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-5.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-5.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-6.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-6.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-4.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="item-partner"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/part-4.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-proce">
        <div class="svg-abs svg-3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-3.png" class="img-fluid" alt=""></div>
        <div class="container">
            <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s">Triển khai với Quy trình Không
                chạm,<br> hợp đồng Không giấy</div>
            <div class="content-proce">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-proce">
                            <ul>
                                <li class="wow fadeInUp wHighlight" data-wow-delay=".2s">
                                    <div class="item-proce text-center">
                                        <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/i-pr-1.png" class="img-fluid" alt=""></div>
                                        <div class="info">
                                            <h5>30 giây</h5>
                                            <p>Đăng ký online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp wHighlight" data-wow-delay=".25s">
                                    <div class="item-proce text-center">
                                        <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/i-pr-2.png" class="img-fluid" alt=""></div>
                                        <div class="info">
                                            <h5>2 giờ</h5>
                                            <p>Triển khai trực tuyến</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp wHighlight" data-wow-delay=".3s">
                                    <div class="item-proce text-center">
                                        <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/i-pr-3.png" class="img-fluid" alt=""></div>
                                        <div class="info">
                                            <h5>1 phút</h5>
                                            <p>Ký hợp đồng điện tử</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp wHighlight" data-wow-delay=".35s">
                                    <div class="item-proce text-center">
                                        <div class="icon"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/i-pr-4.png" class="img-fluid" alt=""></div>
                                        <div class="info">
                                            <h5>24/7</h5>
                                            <p>Hỗ trợ đa kênh</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="avarta wow fadeInRight wHighlight" data-wow-delay=".2s"><img
                                src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/avr-proce.png" class="img-fluid" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-contact">
        <div class="svg-abs svg-4"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-4.png" class="img-fluid" alt=""></div>
        <div class="container">
            <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s">Để lại thông tin ngay để nhận <br> tư
                vấn miễn phí</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-contact">
                        <div class="item-form wow fadeInUp wHighlight" data-wow-delay=".2s">
                            <label>Họ và tên</label>
                            <input type="text" class="txt_field" placeholder="Nhập tên của bạn">
                        </div>
                        <div class="item-form wow fadeInUp wHighlight" data-wow-delay=".2s">
                            <label>Email</label>
                            <input type="text" class="txt_field" placeholder="Nhập email">
                        </div>
                        <div class="item-form wow fadeInUp wHighlight" data-wow-delay=".2s">
                            <label>Số điện thoại</label>
                            <input type="text" class="txt_field" placeholder="Nhập số điện thoại">
                        </div>
                        <div class="item-form wow fadeInUp wHighlight" data-wow-delay=".2s">
                            <input type="submit" value="Gửi thông tin" class="btn-contact-submit text-uppercase">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="avarta"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/contact.png" class="img-fluid" alt=""></div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary clc-send-mail" data-toggle="modal" data-target="#myModal" style="display: none;">Open modal</button>
        <div class="modal fade modal-mail" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="content-popup text-center">
                            <button type="button" class="close" data-dismiss="modal">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.8285 24L35.4145 15.414C36.1965 14.632 36.1965 13.368 35.4145 12.586C34.6325 11.804 33.3685 11.804 32.5865 12.586L24.0005 21.172L15.4145 12.586C14.6325 11.804 13.3685 11.804 12.5865 12.586C11.8045 13.368 11.8045 14.632 12.5865 15.414L21.1725 24L12.5865 32.586C11.8045 33.368 11.8045 34.632 12.5865 35.414C12.9765 35.804 13.4885 36 14.0005 36C14.5125 36 15.0245 35.804 15.4145 35.414L24.0005 26.828L32.5865 35.414C32.9765 35.804 33.4885 36 34.0005 36C34.5125 36 35.0245 35.804 35.4145 35.414C36.1965 34.632 36.1965 33.368 35.4145 32.586L26.8285 24Z" fill="#2E3A59" />
                                </svg>
                            </button>
                            <div class="avar-popup-mail">
                                <img src="https://channel.mediacdn.vn/2021/9/17/sendmail-16318807952691738132089.png" class="img-fluid" alt="">
                            </div>
                            <h3>Cảm ơn bạn đã đăng ký</h3>
                            <p>FPT.eContract sẽ liên hệ trong thời gian sớm nhất.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-qc">
        <div class="container">
            <div class="content-qc">
                <div class="logo-qc"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo-qc.png" class="img-fluid" alt=""></div>
                <h3>Tiên phong giải pháp số hoá doanh nghiệp </h3>
                <div class="link-more">
                    <a href="">
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