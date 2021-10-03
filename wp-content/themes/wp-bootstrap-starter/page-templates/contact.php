<?php
/**
* Template Name: Contact
 */

get_header(); 
?>
<main class="page-price">
    <?php include('wp-content/themes/wp-bootstrap-starter/breadcrumb.php') ?>
    <section class="box-contact" style="padding-top: 60px">
        <div class="svg-abs svg-4"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-4.png" class="img-fluid" alt=""></div>
        <div class="container">
            <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s">Để lại thông tin ngay để nhận <br> tư vấn miễn phí</div>
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
    </section>
    <section class="box-info-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo.png" class="img-fluid" alt=""></div>
                </div>
                <div class="col-md-6">
                    <div class="txt-contact">
                        <ul>
                            <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9994 16.92V19.92C22.0006 20.1985 21.9435 20.4741 21.832 20.7293C21.7204 20.9845 21.5567 21.2136 21.3515 21.4018C21.1463 21.5901 20.904 21.7335 20.6402 21.8227C20.3764 21.9119 20.0968 21.945 19.8194 21.92C16.7423 21.5856 13.7864 20.5341 11.1894 18.85C8.77327 17.3146 6.72478 15.2661 5.18944 12.85C3.49942 10.2412 2.44769 7.27097 2.11944 4.17997C2.09446 3.90344 2.12732 3.62473 2.21595 3.3616C2.30457 3.09846 2.44702 2.85666 2.63421 2.6516C2.82141 2.44653 3.04925 2.28268 3.30324 2.1705C3.55722 2.05831 3.83179 2.00024 4.10944 1.99997H7.10944C7.59475 1.9952 8.06524 2.16705 8.43321 2.48351C8.88624 3.83454 9.45791 6.07511 9.89335 7.65085C9.81359 8.02482 9.62831 8.36808 9.35944 8.63997L8.08944 9.90997C9.513 12.4135 11.5859 14.4864 14.0894 15.91L15.3594 14.64C15.6313 14.3711 15.9746 14.1858 16.3486 14.1061C17.6383 14.5064 20.0987 15.1492 21.526 15.5775C21.8431 15.9518 22.0116 16.4295 21.9994 16.92Z" fill="#121E28"/>
                                </svg>
                                <a href="javascript:void(0)">024 3562 6000 - 024 7300 7373 </a>
                            </li>
                            <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8C11.173 8 10.5 8.673 10.5 9.5C10.5 10.327 11.173 11 12 11C12.827 11 13.5 10.327 13.5 9.5C13.5 8.673 12.827 8 12 8ZM12 13C10.07 13 8.5 11.43 8.5 9.5C8.5 7.57 10.07 6 12 6C13.93 6 15.5 7.57 15.5 9.5C15.5 11.43 13.93 13 12 13ZM12 2C7.589 2 4 5.554 4 9.923C4 13.722 7.22734 18.5731 12 22C17.1054 18.6434 20 13.5814 20 9.923C20 5.554 16.411 2 12 2Z" fill="#121E28"/>
                                </svg>
                                <span>Tầng 22, toà nhà Keangnam Landmark 72, E6 Phạm Hùng, Nam Từ Liêm, Hà Nội</span>
                            </li>
                            <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 13H12C11.448 13 11 12.553 11 12V8C11 7.447 11.448 7 12 7C12.552 7 13 7.447 13 8V11H16C16.553 11 17 11.447 17 12C17 12.553 16.553 13 16 13ZM12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12C22 6.486 17.514 2 12 2Z" fill="#121E28"/>
                                </svg>
                                <span>8:00 am - 5:3m p.m</span>
                            </li>
                            <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.002 4.27252H1.99805V18.7274C1.99805 19.2797 2.44576 19.7274 2.99805 19.7274H21.002C21.5543 19.7274 22.002 19.2797 22.002 18.7274V4.27252ZM12.6274 11.4358L20.7898 5.68671H3.22266L11.3851 11.4358C11.7703 11.661 12.2421 11.661 12.6274 11.4358Z" fill="#121E28"/>
                                </svg>
                                <span>eContract@fpt.com.vn</span>
                            </li>
                        </ul>
                    </div>
                    <h4>Tham gia thảo luận FPT e.Contract</h4>
                    <div class="sc-contact">
                        <ul>
                            <li><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/sct-1.png" class="img-fluid" alt=""></a></li>
                            <li><a href=""><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/sct-2.png" class="img-fluid" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8870574515176!2d105.81139931540206!3d20.997163994231034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac90e551a65d%3A0xd2e7a57b0f76ec2d!2zNDIgxJDGsOG7nW5nIEtoxrDGoW5nIMSQw6xuaCwgVGjGsOG7o25nIMSQw6xuaCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1632844944861!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.999 12.0054C16.999 12.0034 17 12.0024 17 12.0004C17 11.9674 16.984 11.9404 16.981 11.9084C16.973 11.8124 16.961 11.7164 16.924 11.6264C16.897 11.5584 16.851 11.5044 16.81 11.4444C16.779 11.4004 16.762 11.3494 16.724 11.3094L13.861 8.30943C13.479 7.90943 12.847 7.89543 12.447 8.27643C12.048 8.65743 12.033 9.29043 12.414 9.69043L13.664 11.0004H7.99996C7.44796 11.0004 6.99996 11.4474 6.99996 12.0004C6.99996 12.5524 7.44796 13.0004 7.99996 13.0004H13.586L12.293 14.2934C11.902 14.6834 11.902 15.3164 12.293 15.7074C12.488 15.9024 12.744 16.0004 13 16.0004C13.256 16.0004 13.512 15.9024 13.707 15.7074L16.707 12.7074C16.798 12.6164 16.872 12.5064 16.922 12.3854C16.973 12.2644 16.998 12.1354 16.999 12.0054ZM12 20C7.58896 20 3.99996 16.411 3.99996 12C3.99996 7.58901 7.58896 4.00001 12 4.00001C16.411 4.00001 20 7.58901 20 12C20 16.411 16.411 20 12 20ZM12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12C22 6.486 17.514 2 12 2Z" fill="white"></path>
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
