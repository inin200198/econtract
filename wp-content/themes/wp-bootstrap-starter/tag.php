<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */
$noibat = array(
    'post_type' => 'post',
    'orderby'   => 'publish_date',
    'posts_per_page' => 5,
    'order'     => 'DESC',
    'meta_query'	=> array(
        array(
            'key'	  	=> 'noi_bat',
            'value'	  	=> 'Có',
            'compare' 	=> '=',
        ),
    ),
);
$tag = get_queried_object();
get_header();
?>
    <main class="page-price">
        <section class="box-bread">
            <div class="container">
                <ul>
                    <li>
                        <a href="/">Home</a>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L10 8L6 4" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </li>
                    <li><a href="javascript:void(0)"><span>Tin tức</span></a></li>
                </ul>
            </div>
        </section>
        <section class="box-news-list">
            <div class="container">
                <div class="row">
                    <?php
                    global $query_string;
                    wp_parse_str( $query_string, $search_args );
                    $search_query = new WP_Query($search_args);
                    $total_results = $search_query->found_posts ? $search_query->found_posts : 0;
                    echo '<div class="col-md-8"><div class="title-price title-tags">Các chủ đề liên quan: '.$tag->name ;
                    echo '</div></div>';
                    if($search_query->have_posts()):
                        ?>
                        <div class="col-md-8">
                            <div class="list-news">
                                <div class="">
                                    <?php
                                    while($search_query->have_posts()):
                                        $search_query->the_post();
                                        ?>
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
                                    <?php
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                    ?>
                    <div class="col-md-4">
                        <div class="side-bar-news text-center">
                            <h4>Triển khai với Quy trình Không chạm, hợp đồng Không giấy</h4>
                            <div class="avr-side"><img src="images/side-avr.png" class="img-fluid" alt=""></div>
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
        <section class="box-juridical" style="background: #EDF2FE">
            <div class="container">
                <div class="content-juridical">
                    <div class="icon wow fadeInUp wHighlight" data-wow-delay=".2s"><img src="images/juridical.png" class="img-fluid" alt=""></div>
                    <div class="info">
                        <h3 class=" wow fadeInUp wHighlight" data-wow-delay=".2s">Đáp ứng tiêu chuẩn pháp lý và kỹ thuật về chữ ký số tại Việt Nam </h3>
                        <ul>
                            <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z" fill="#2E6CF6"/>
                                </svg>
                                <span>Dễ dàng tích hợp chữ ký số CA Cloud</span>
                            </li>
                            <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z" fill="#2E6CF6"/>
                                </svg>
                                <span>Đáp ứng mọi thiết bị USB Token</span>
                            </li>
                            <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z" fill="#2E6CF6"/>
                                </svg>
                                <span>Thiết kế theo quy định pháp lý</span>
                            </li>
                        </ul>
                        <div class="btn-tags">
                            <ul>
                                <li>
                                    <a href="" class="btn-tag-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.8462 10.8273C21.8675 10.8954 21.8888 10.9635 21.903 11.0342C21.965 11.3472 22 11.6692 22 12.0002C22 12.3082 21.964 12.6112 21.908 12.9102C21.8956 12.9784 21.879 13.0437 21.8623 13.1091C21.8547 13.1387 21.8472 13.1683 21.84 13.1982C21.79 13.3972 21.731 13.5922 21.658 13.7832C21.62 13.8822 21.581 13.9792 21.537 14.0752C21.45 14.2652 21.349 14.4472 21.238 14.6262C21.2208 14.654 21.2043 14.6821 21.1879 14.7103C21.1606 14.7573 21.1333 14.8042 21.102 14.8492C21.0929 14.8622 21.0851 14.8756 21.0774 14.889C21.0691 14.9034 21.0609 14.9177 21.051 14.9312C21.0433 14.9422 21.0325 14.9493 21.0219 14.9563C21.0133 14.962 21.0047 14.9676 20.998 14.9752C20.086 16.1972 18.642 17.0002 17 17.0002H16.988C16.964 16.5342 16.787 16.0752 16.439 15.7152C16.065 15.3262 15.54 15.1032 15 15.1032C14.644 15.1032 14.301 15.1962 14 15.3712V12.0002C14 10.8972 13.103 10.0002 12 10.0002C10.898 10.0002 10 10.8972 10 12.0002V15.2662C9.699 15.0932 9.357 15.0002 9 15.0002C8.466 15.0002 7.964 15.2082 7.586 15.5862C7.196 15.9752 7.001 16.4882 7.001 17.0002H7C5.358 17.0002 3.914 16.1972 3.003 14.9752C2.99599 14.9678 2.98745 14.9622 2.97888 14.9567C2.96789 14.9496 2.95687 14.9425 2.949 14.9312C2.93842 14.9167 2.92971 14.9013 2.92095 14.8859C2.91398 14.8735 2.90698 14.8612 2.899 14.8492C2.86708 14.8033 2.83883 14.7552 2.8106 14.7073C2.79462 14.6801 2.77863 14.653 2.762 14.6262C2.652 14.4472 2.55 14.2652 2.463 14.0752C2.42041 13.9823 2.38345 13.8884 2.34576 13.7928L2.342 13.7832C2.27 13.5922 2.21 13.3972 2.161 13.1982C2.15467 13.1729 2.14814 13.1478 2.14161 13.1228C2.12339 13.0528 2.10526 12.9831 2.092 12.9102C2.037 12.6112 2 12.3082 2 12.0002C2 11.6692 2.036 11.3472 2.097 11.0342C2.11157 10.9613 2.13378 10.8913 2.15598 10.8212C2.16881 10.7807 2.18164 10.7402 2.193 10.6992C2.19718 10.6839 2.20135 10.6685 2.20551 10.6531C2.25319 10.4774 2.30087 10.3017 2.368 10.1352C2.40422 10.0447 2.44869 9.95993 2.4933 9.87494C2.51273 9.83791 2.53219 9.80084 2.551 9.76321C2.5574 9.7505 2.56378 9.7378 2.57015 9.72511C2.64042 9.58517 2.70965 9.44733 2.794 9.31621C2.85777 9.21531 2.93001 9.12223 3.00231 9.02907C3.01958 9.00682 3.03684 8.98457 3.054 8.96221L3.05754 8.95766C3.15434 8.8332 3.25031 8.7098 3.358 8.59421C3.45448 8.49017 3.55811 8.39686 3.66298 8.30244C3.66898 8.29704 3.67499 8.29163 3.681 8.28621C3.799 8.18021 3.919 8.07821 4.047 7.98421C4.166 7.89621 4.288 7.81621 4.415 7.74021C4.555 7.65421 4.698 7.57721 4.846 7.50621C4.976 7.44321 5.106 7.38621 5.242 7.33521C5.404 7.27321 5.571 7.22421 5.741 7.18021C5.876 7.14421 6.008 7.10921 6.148 7.08621C6.17442 7.08137 6.20007 7.07439 6.22571 7.06742C6.25829 7.05855 6.29086 7.04969 6.325 7.04521C7.146 4.66121 9.42 3.00021 12 3.00021C14.581 3.00021 16.855 4.66121 17.675 7.04521C17.7092 7.0497 17.7422 7.05859 17.7751 7.06747C17.8009 7.07443 17.8266 7.08138 17.853 7.08621C17.992 7.10921 18.125 7.14421 18.259 7.18021C18.429 7.22421 18.596 7.27321 18.758 7.33521C18.894 7.38621 19.025 7.44321 19.154 7.50621C19.302 7.57721 19.445 7.65421 19.585 7.74021C19.712 7.81621 19.835 7.89621 19.954 7.98421C20.081 8.07821 20.201 8.18021 20.319 8.28621C20.431 8.38621 20.54 8.48421 20.643 8.59421C20.752 8.71121 20.849 8.83621 20.946 8.96221C20.9587 8.97857 20.9714 8.99486 20.9841 9.01113C21.0614 9.11031 21.1383 9.20884 21.207 9.31621C21.2901 9.44681 21.359 9.58408 21.429 9.72345C21.4357 9.73669 21.4423 9.74994 21.449 9.76321C21.4678 9.80084 21.4873 9.83791 21.5067 9.87494C21.5513 9.95993 21.5958 10.0447 21.632 10.1352C21.7003 10.3022 21.7481 10.4785 21.7959 10.6547C21.7999 10.6696 21.804 10.6844 21.808 10.6992C21.8195 10.7423 21.8329 10.7848 21.8462 10.8273ZM13.0004 17.6438L14.3054 16.3838C14.7034 16.0008 15.3364 16.0118 15.7194 16.4088C16.1034 16.8068 16.0924 17.4398 15.6954 17.8228L12.6954 20.7198C12.5004 20.9058 12.2504 20.9998 12.0004 20.9998C11.7444 20.9998 11.4884 20.9028 11.2934 20.7068L8.2934 17.7068C7.9024 17.3168 7.9024 16.6838 8.2934 16.2928C8.6834 15.9028 9.3164 15.9028 9.7074 16.2928L11.0004 17.5858V11.9998C11.0004 11.4468 11.4484 10.9998 12.0004 10.9998C12.5524 10.9998 13.0004 11.4468 13.0004 11.9998V17.6438Z" fill="white"/>
                                        </svg>
                                        <span>Tải tool ký số</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="btn-tag-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14 3.978L17.742 8H14.714C14.32 8 14 7.619 14 7.15V3.978ZM19.741 7.328L15.296 2.328C15.107 2.119 14.838 2 14.556 2H6.556C5.146 2 4 3.122 4 4.5V19.5C4 20.878 5.146 22 6.556 22H17.444C18.854 22 20 20.878 20 19.5V8C20 7.751 19.908 7.512 19.741 7.328Z" fill="#2E6CF6"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.741 7.328L15.296 2.328C15.107 2.119 14.838 2 14.556 2H6.556C5.146 2 4 3.122 4 4.5V19.5C4 20.878 5.146 22 6.556 22H17.444C18.854 22 20 20.878 20 19.5V8C20 7.751 19.908 7.512 19.741 7.328ZM19.741 7.328L15.296 2.328C15.107 2.119 14.838 2 14.556 2H6.556C5.146 2 4 3.122 4 4.5V19.5C4 20.878 5.146 22 6.556 22H17.444C18.854 22 20 20.878 20 19.5V8C20 7.751 19.908 7.512 19.741 7.328Z" fill="#2E6CF6"/>
                                            <path d="M7 13H15.5" stroke="white"/>
                                            <path d="M7 16H15.5" stroke="white"/>
                                        </svg>
                                        <span>Hướng dẫn cài đặt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
