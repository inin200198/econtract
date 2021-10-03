<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>

<footer>
    <div class="footer-menu">
        <div class="container">
            <div class="content-menu-ft">
                <div class="ft-logo"><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo.png" class="img-fluid" alt=""></a></div>
                <div class="ft-menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </div>
                <div class="ft-social">
                    <ul>
                        <li><a href="">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM15.9769 11.7476C17.277 11.7476 18.1539 12.3099 18.6539 12.7799L20.6078 10.8693C19.4078 9.7523 17.8462 9.06667 15.9769 9.06667C13.2691 9.06667 10.9306 10.6228 9.79207 12.8877L12.0306 14.6287C12.5922 12.957 14.1461 11.7476 15.9769 11.7476ZM22.6233 16.1541C22.6233 15.584 22.5772 15.168 22.4771 14.7366H15.9769V17.3096H19.7924C19.7155 17.949 19.3001 18.912 18.377 19.5591L20.5617 21.2539C21.8694 20.0444 22.6233 18.2649 22.6233 16.1541ZM12.0383 17.3713C11.8921 16.9399 11.8075 16.4776 11.8075 16C11.8075 15.5224 11.8921 15.0601 12.0306 14.6287L9.79207 12.8877C9.32282 13.8276 9.05358 14.883 9.05358 16C9.05358 17.117 9.32282 18.1724 9.79207 19.1123L12.0383 17.3713ZM15.9769 22.9333C17.8462 22.9333 19.4155 22.317 20.5617 21.2539L18.377 19.5591C17.7924 19.9674 17.0077 20.2524 15.9769 20.2524C14.1461 20.2524 12.5922 19.043 12.0383 17.3713L9.79976 19.1123C10.9383 21.3772 13.2691 22.9333 15.9769 22.9333Z"
                                        fill="#121E28" />
                                </svg>
                            </a></li>
                        <li><a href="">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM17.6677 25.4077V16.7028H20.0706L20.3891 13.7031H17.6677L17.6718 12.2017C17.6718 11.4193 17.7461 11.0001 18.8698 11.0001H20.372V8H17.9688C15.0821 8 14.066 9.4552 14.066 11.9024V13.7034H12.2667V16.7031H14.066V25.4077H17.6677Z"
                                        fill="#121E28" />
                                </svg>
                            </a></li>
                        <li><a href="">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM24.1767 12.0488C23.9804 11.2948 23.4021 10.7011 22.6677 10.4996C21.3369 10.1333 16 10.1333 16 10.1333C16 10.1333 10.6631 10.1333 9.33217 10.4996C8.59782 10.7011 8.01949 11.2948 7.82322 12.0488C7.46667 13.4154 7.46667 16.2667 7.46667 16.2667C7.46667 16.2667 7.46667 19.1179 7.82322 20.4845C8.01949 21.2385 8.59782 21.8323 9.33217 22.0339C10.6631 22.4 16 22.4 16 22.4C16 22.4 21.3369 22.4 22.6677 22.0339C23.4021 21.8323 23.9804 21.2385 24.1767 20.4845C24.5333 19.1179 24.5333 16.2667 24.5333 16.2667C24.5333 16.2667 24.5333 13.4154 24.1767 12.0488Z"
                                        fill="#121E28" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.3999 19.1995V13.8662L18.6666 16.533L14.3999 19.1995Z" fill="#121E28" />
                                </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="item-ft">
                        <h3>LIÊN HỆ TƯ VẤN</h3>
                        <div class="info-place">
                            <ul>
                                <li>
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/ft-1.png" class="img-fluid" alt="">
                                    <p>
                                        <span>Tổng đài 24/7</span>
                                        <label>1900.636.191 - ext 3</label>
                                    </p>
                                    <p>
                                        <span>Miền Bắc</span>
                                        <label>0934.583.499 /0919.626.829</label>
                                    </p>
                                    <p>
                                        <span>Miền Nam</span>
                                        <label>0934.453.466 /0932.991.468</label>
                                    </p>
                                </li>
                                <li>
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/ft-2.png" class="img-fluid" alt="">
                                    <span></span>
                                    <label>fpt.econtract@fpt.com.vn</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-ft">
                        <h3>HỖ TRỢ KHÁCH HÀNG</h3>
                        <div class="info-place">
                            <ul>
                                <li>
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/ft-1.png" class="img-fluid" alt="">
                                    <p>
                                        <span>Tổng đài 24/7</span>
                                        <label>1900.636.191 - ext 3</label>
                                    </p>
                                </li>
                                <li>
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/ft-2.png" class="img-fluid" alt="">
                                    <span></span>
                                    <label>customersupport@fpt.com.vn</label>
                                </li>
                                <li>
                                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/ft-3.png" class="img-fluid" alt="">
                                    <span></span>
                                    <label>Tầng 22, toà nhà Keangnam Landmark 72, E6 Phạm Hùng, Nam Từ Liêm, Hà
                                        Nội</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-ft col-link-ft">
                        <h3>DỊCH VỤ</h3>
                        <div class="link-ft">
                            <ul>
                                <li><a href="">Báo giá</a></li>
                                <li><a href="">Hỗ trợ</a></li>
                                <li><a href="">Dùng thử</a></li>
                                <li><a href="">Đăng nhập</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-ft">
                        <h3>Một sản phẩm của</h3>
                        <div class="logo-sp">
                            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/sp-ft.png" class="img-fluid" alt="">
                            <label>Công ty TNHH Hệ thống thông tin FPT</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reserved text-center">
        <div class="container">
            <p>Copyright © 2020 FPT Information System. All rights reserved</p>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>