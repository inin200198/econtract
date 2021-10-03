<?php
/**
 * Template Name: Quotation
 */

get_header();
?>
<main class="page-price">
    <?php include('wp-content/themes/wp-bootstrap-starter/breadcrumb.php') ?>
    <!-- [contact-form-7 404 "Not Found"]  -->
    <section class="box-price">
        <div class="container">
            <div class="box-price-1">
                <div class="title-price text-center"><?php echo the_field('title_price', 'option'); ?></div>
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
    <section class="box-form-price" id="price-scroll">
        <div class="container">
            <div class="content-form-price">
                <div class="abs-price abs-1">
                    <img src="https://channel.mediacdn.vn/2021/9/16/abs-price-1631741689180324235847.png" class="img-fluid" alt="">
                </div>
                <div class="abs-price abs-2">
                    <img src="https://channel.mediacdn.vn/2021/9/16/abs-price-1631741689180324235847.png" class="img-fluid" alt="">
                </div>
                <div class="title-form">
                    <h3>Đăng ký mua</h3>
                </div>
                <div class="list-item-form">
                    <div class="item-form">
                        <div class="row">
                            <div class="col-md-12 lab-mb-0">
                                <label>Thông tin người đăng ký</label>
                            </div>
                            <div class="col-md-6">
                                <div class="inp_field">
                                    <input type="text" placeholder="Nhập họ và tên" id="inp_name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="ul_field">
                                    <li>
                                        <div class="inp_field">
                                            <input type="text" placeholder="Số điện thoại" id="inp_phone" required>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inp_field">
                                            <input type="email" placeholder="Email" id="inp_mail" required>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phần mềm FPT.eContract</label>
                                <div class="inp_field select_field">
                                    <select name="" class="numb_money" id="numb-1">
                                        <option value="0">Chọn</option>
                                        <option id="list0" value="1400000">FCC.50 - Gói ký 50 tài liệu</option>
                                        <option id="list1" value="2600000">FCC.100 - Gói ký 100 tài liệu</option>
                                        <option id="list2" value="4800000">FCC.200 - Gói ký 200 tài liệu</option>
                                        <option id="list3" value="11000000">FCC.500 - Gói ký 500 tài liệu</option>
                                        <option id="list4" value="20000000">FCC.1000 - Gói ký 1.000 tài liệu</option>
                                        <option id="list5" value="36000000">FCC.2000 - Gói ký 2.000 tài liệu </option>
                                        <option id="list6" value="80000000">FCC.5000 - Gói ký 5.000 tài liệu</option>
                                        <option id="list7" value="0">FCC.Max - Gói ký trên 10.000 tài liệu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Bản quyền phần mềm </label>
                                <div class="inp_field select_field">
                                    <select name="" class="numb_money" id="numb-2">
                                        <option value="0">Chọn</option>
                                        <option value="1000000">1.000.000đ/ 1 năm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Tích hợp phần mềm FPT.eContract</label>
                                <div class="inp_field select_field">
                                    <select name="" class="numb_money" id="numb-3">
                                        <option value="0">Chọn</option>
                                        <option value="50000000">Theo chuẩn API có sẵn của phần mềm FPT.eContract</option>
                                        <option value="0">Theo nhu cầu đặc biệt của khách hàng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Chữ ký số USB token</label>
                                <div class="inp_field select_field">
                                    <select name="" class="numb_money" id="numb-4">
                                        <option value="0">Chọn</option>
                                        <option value="1827000">FPT.CA Token Ký mới 1 năm</option>
                                        <option value="2739000">FPT.CA Token Ký mới 2 năm</option>
                                        <option value="3107000">FPT.CA Token Ký mới 3 năm</option>
                                        <option value="1277000">FPT.CA Token Gia hạn 1 năm</option>
                                        <option value="2189000">FPT.CA Token Gia hạn 2 năm</option>
                                        <option value="2907000">FPT.CA Token Gia hạn 3 năm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="item-form"><div class="line-form"></div></div><div class="item-form"><div class="row"><div class="col-md-6"><label>Chữ ký số USB token</label><div class="inp_field select_field"><select name="" class="numb_money" id="numb-4"><option value="0">Chọn</option><option value="1827000">FPT.CA Token Ký mới 1 năm</option><option value="2739000">FPT.CA Token Ký mới 2 năm</option><option value="3107000">FPT.CA Token Ký mới 3 năm</option><option value="1277000">FPT.CA Token  Gia hạn 1 năm</option><option value="2189000">FPT.CA Token  Gia hạn 2 năm</option><option value="2907000">FPT.CA Token  Gia hạn 3 năm</option></select></div></div><div class="col-md-6"><label>Xác thực người ký bằng eKYC</label><div class="inp_field select_field"><select name="" class="numb_money" id="numb-5"><option value="0">Liên hệ</option><option value="">K1 - Xác thực eKYC trích xuất CMT/CCDC - 2.000 vnd/lần</option><option value="">K2 - Xác thực eKYC  nhận dạng khuôn mặt - 2.500 vnd/lần</option></select></div></div></div></div><div class="item-form"><div class="row"><div class="col-md-6"><label>Xác thực người ký bằng SMS OTP</label><div class="inp_field select_field"><select name="" class="numb_money" id="numb-6"><option value="0">Chọn</option><option value="1100000">Xác thực bằng SMS OTP - O1 - Gói 500 lần ký </option><option value="2090000">Xác thực bằng SMS OTP - O2 - Gói 1.000 lần ký </option><option value="3850000">Xác thực bằng SMS OTP - O3 - Gói 2.000 lần ký </option><option value="7700000">Xác thực bằng SMS OTP - O4 - Gói 5.000 lần ký </option><option value="11000000">Xác thực bằng SMS OTP - O5 - Gói 5.000 lần ký </option></select></div></div><div class="col-md-6"><label>Chữ ký số HSM</label><div class="inp_field select_field"><select name="" class="numb_money" id="numb-7"><option value="0">Liên hệ</option><option value="">CKS xác thực mật khẩu tĩnh (passcode) P1 - Gói 500 lần ký </option><option value="">CKS xác thực mật khẩu tĩnh (passcode) P2 - Gói 1.000 lần ký </option><option value="">CKS xác thực mật khẩu tĩnh (passcode) P3 - Gói 2.000 lần ký </option><option value="">CKS xác thực mật khẩu tĩnh (passcode) P4 - Gói 5.000 lần ký </option><option value="">CKS xác thực mật khẩu tĩnh (passcode) P5 - Gói 10.000 lần ký </option><option value="">CKS xác thực bằng SMS OTP - S1 - Gói 500 lần ký </option><option value="">CKS xác thực bằng SMS OTP - S2 - Gói 1.000 lần ký </option><option value="">CKS xác thực bằng SMS OTP - S3 - Gói 2.000 lần ký </option><option value="">CKS xác thực bằng SMS OTP - S4 - Gói 5.000 lần ký </option><option value="">CKS xác thực bằng SMS OTP - S5 - Gói 10.000 lần ký </option></select></div></div></div></div> -->
                    <div class="item-form">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="price-form">
                                    <li class="field_money">
                                        <label class="mb-0">Tổng thanh toán <span>(ước tính)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="mb-0 total_show">0đ</label>
                                    </li>
                                    <!-- <li><label class="mb-0"><input type="number" name="sum" id="sum" class="form-control" readonly />đ</label></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item-form">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="price-button">
                                    <li>
                                        <input type="submit" value="ĐĂNG KÝ NGAY" class="btn-price">
                                    </li>
                                    <li>
                                        <div class="hotline-price">
                                            <a href="tel:0123456798">TƯ VẤN CHO TÔI</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
        <button type="button" class="btn btn-primary clc-fail-mail" data-toggle="modal" data-target="#myfail" style="display: none;">Open modal</button>
        <div class="modal fade modal-mail" id="myfail">
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
                            <h3>Lỗi</h3>
                            <p>Mời quý khách hàng nhập Tên, Email, Số điện thoại.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-srv-price">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="txt-srv">
                        <ul>
                            <li>
                                <div class="icon">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4962 12.803H24.4997C25.1426 12.803 25.6652 13.3234 25.6664 13.9662C25.6757 17.0824 24.4706 20.0165 22.2726 22.2262C20.0757 24.4359 17.1497 25.6574 14.0336 25.6667H13.9997C10.8952 25.6667 7.97506 24.4627 5.77356 22.2729C3.56389 20.076 2.34239 17.15 2.33306 14.0339C2.32373 10.9165 3.5289 7.98354 5.7269 5.77387C7.92373 3.56421 10.8497 2.34271 13.9659 2.33337C14.8934 2.34737 15.8384 2.44071 16.7437 2.65771C17.3691 2.80937 17.7552 3.43937 17.6036 4.06587C17.4531 4.69121 16.8196 5.07621 16.1966 4.92687C15.4721 4.75187 14.7032 4.67837 13.9729 4.66671C11.4797 4.67371 9.13823 5.65137 7.38123 7.41887C5.62306 9.18637 4.65939 11.5337 4.66639 14.0269C4.67339 16.52 5.65106 18.8604 7.41856 20.6185C9.18023 22.3697 11.5159 23.3334 13.9997 23.3334H14.0266C16.5197 23.3264 18.8612 22.3487 20.6182 20.5812C22.3764 18.8125 23.3401 16.4664 23.3331 13.9732C23.3319 13.3292 23.8522 12.8042 24.4962 12.803ZM9.6749 13.1751C10.1311 12.7189 10.8684 12.7189 11.3246 13.1751L13.9426 15.7931L21.2891 7.39775C21.7137 6.91592 22.4499 6.86459 22.9352 7.28925C23.4194 7.71275 23.4684 8.45009 23.0437 8.93542L14.8771 18.2688C14.6647 18.5114 14.3614 18.6549 14.0382 18.6666H13.9997C13.6906 18.6666 13.3942 18.5441 13.1749 18.3248L9.6749 14.8248C9.21873 14.3686 9.21873 13.6313 9.6749 13.1751Z" fill="#2E6CF6" />
                                    </svg>
                                </div>
                                <div class="i-text">Khách hàng lựa chọn gói phần mềm phù hợp với số lượng tài liệu sử dụng</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4962 12.803H24.4997C25.1426 12.803 25.6652 13.3234 25.6664 13.9662C25.6757 17.0824 24.4706 20.0165 22.2726 22.2262C20.0757 24.4359 17.1497 25.6574 14.0336 25.6667H13.9997C10.8952 25.6667 7.97506 24.4627 5.77356 22.2729C3.56389 20.076 2.34239 17.15 2.33306 14.0339C2.32373 10.9165 3.5289 7.98354 5.7269 5.77387C7.92373 3.56421 10.8497 2.34271 13.9659 2.33337C14.8934 2.34737 15.8384 2.44071 16.7437 2.65771C17.3691 2.80937 17.7552 3.43937 17.6036 4.06587C17.4531 4.69121 16.8196 5.07621 16.1966 4.92687C15.4721 4.75187 14.7032 4.67837 13.9729 4.66671C11.4797 4.67371 9.13823 5.65137 7.38123 7.41887C5.62306 9.18637 4.65939 11.5337 4.66639 14.0269C4.67339 16.52 5.65106 18.8604 7.41856 20.6185C9.18023 22.3697 11.5159 23.3334 13.9997 23.3334H14.0266C16.5197 23.3264 18.8612 22.3487 20.6182 20.5812C22.3764 18.8125 23.3401 16.4664 23.3331 13.9732C23.3319 13.3292 23.8522 12.8042 24.4962 12.803ZM9.6749 13.1751C10.1311 12.7189 10.8684 12.7189 11.3246 13.1751L13.9426 15.7931L21.2891 7.39775C21.7137 6.91592 22.4499 6.86459 22.9352 7.28925C23.4194 7.71275 23.4684 8.45009 23.0437 8.93542L14.8771 18.2688C14.6647 18.5114 14.3614 18.6549 14.0382 18.6666H13.9997C13.6906 18.6666 13.3942 18.5441 13.1749 18.3248L9.6749 14.8248C9.21873 14.3686 9.21873 13.6313 9.6749 13.1751Z" fill="#2E6CF6" />
                                    </svg>
                                </div>
                                <div class="i-text">Các gói tài liệu không giới hạn thời gian sử dụng</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4962 12.803H24.4997C25.1426 12.803 25.6652 13.3234 25.6664 13.9662C25.6757 17.0824 24.4706 20.0165 22.2726 22.2262C20.0757 24.4359 17.1497 25.6574 14.0336 25.6667H13.9997C10.8952 25.6667 7.97506 24.4627 5.77356 22.2729C3.56389 20.076 2.34239 17.15 2.33306 14.0339C2.32373 10.9165 3.5289 7.98354 5.7269 5.77387C7.92373 3.56421 10.8497 2.34271 13.9659 2.33337C14.8934 2.34737 15.8384 2.44071 16.7437 2.65771C17.3691 2.80937 17.7552 3.43937 17.6036 4.06587C17.4531 4.69121 16.8196 5.07621 16.1966 4.92687C15.4721 4.75187 14.7032 4.67837 13.9729 4.66671C11.4797 4.67371 9.13823 5.65137 7.38123 7.41887C5.62306 9.18637 4.65939 11.5337 4.66639 14.0269C4.67339 16.52 5.65106 18.8604 7.41856 20.6185C9.18023 22.3697 11.5159 23.3334 13.9997 23.3334H14.0266C16.5197 23.3264 18.8612 22.3487 20.6182 20.5812C22.3764 18.8125 23.3401 16.4664 23.3331 13.9732C23.3319 13.3292 23.8522 12.8042 24.4962 12.803ZM9.6749 13.1751C10.1311 12.7189 10.8684 12.7189 11.3246 13.1751L13.9426 15.7931L21.2891 7.39775C21.7137 6.91592 22.4499 6.86459 22.9352 7.28925C23.4194 7.71275 23.4684 8.45009 23.0437 8.93542L14.8771 18.2688C14.6647 18.5114 14.3614 18.6549 14.0382 18.6666H13.9997C13.6906 18.6666 13.3942 18.5441 13.1749 18.3248L9.6749 14.8248C9.21873 14.3686 9.21873 13.6313 9.6749 13.1751Z" fill="#2E6CF6" />
                                    </svg>
                                </div>
                                <div class="i-text">Sản phẩm phần mềm FPT.eContract không chịu thuế VAT</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4962 12.803H24.4997C25.1426 12.803 25.6652 13.3234 25.6664 13.9662C25.6757 17.0824 24.4706 20.0165 22.2726 22.2262C20.0757 24.4359 17.1497 25.6574 14.0336 25.6667H13.9997C10.8952 25.6667 7.97506 24.4627 5.77356 22.2729C3.56389 20.076 2.34239 17.15 2.33306 14.0339C2.32373 10.9165 3.5289 7.98354 5.7269 5.77387C7.92373 3.56421 10.8497 2.34271 13.9659 2.33337C14.8934 2.34737 15.8384 2.44071 16.7437 2.65771C17.3691 2.80937 17.7552 3.43937 17.6036 4.06587C17.4531 4.69121 16.8196 5.07621 16.1966 4.92687C15.4721 4.75187 14.7032 4.67837 13.9729 4.66671C11.4797 4.67371 9.13823 5.65137 7.38123 7.41887C5.62306 9.18637 4.65939 11.5337 4.66639 14.0269C4.67339 16.52 5.65106 18.8604 7.41856 20.6185C9.18023 22.3697 11.5159 23.3334 13.9997 23.3334H14.0266C16.5197 23.3264 18.8612 22.3487 20.6182 20.5812C22.3764 18.8125 23.3401 16.4664 23.3331 13.9732C23.3319 13.3292 23.8522 12.8042 24.4962 12.803ZM9.6749 13.1751C10.1311 12.7189 10.8684 12.7189 11.3246 13.1751L13.9426 15.7931L21.2891 7.39775C21.7137 6.91592 22.4499 6.86459 22.9352 7.28925C23.4194 7.71275 23.4684 8.45009 23.0437 8.93542L14.8771 18.2688C14.6647 18.5114 14.3614 18.6549 14.0382 18.6666H13.9997C13.6906 18.6666 13.3942 18.5441 13.1749 18.3248L9.6749 14.8248C9.21873 14.3686 9.21873 13.6313 9.6749 13.1751Z" fill="#2E6CF6" />
                                    </svg>
                                </div>
                                <div class="i-text">Chưa bao gồm phí SMS nếu khách hàng sử dụng dịch vụ gửi hợp đồng cho người ký bằng tin nhắn</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4962 12.803H24.4997C25.1426 12.803 25.6652 13.3234 25.6664 13.9662C25.6757 17.0824 24.4706 20.0165 22.2726 22.2262C20.0757 24.4359 17.1497 25.6574 14.0336 25.6667H13.9997C10.8952 25.6667 7.97506 24.4627 5.77356 22.2729C3.56389 20.076 2.34239 17.15 2.33306 14.0339C2.32373 10.9165 3.5289 7.98354 5.7269 5.77387C7.92373 3.56421 10.8497 2.34271 13.9659 2.33337C14.8934 2.34737 15.8384 2.44071 16.7437 2.65771C17.3691 2.80937 17.7552 3.43937 17.6036 4.06587C17.4531 4.69121 16.8196 5.07621 16.1966 4.92687C15.4721 4.75187 14.7032 4.67837 13.9729 4.66671C11.4797 4.67371 9.13823 5.65137 7.38123 7.41887C5.62306 9.18637 4.65939 11.5337 4.66639 14.0269C4.67339 16.52 5.65106 18.8604 7.41856 20.6185C9.18023 22.3697 11.5159 23.3334 13.9997 23.3334H14.0266C16.5197 23.3264 18.8612 22.3487 20.6182 20.5812C22.3764 18.8125 23.3401 16.4664 23.3331 13.9732C23.3319 13.3292 23.8522 12.8042 24.4962 12.803ZM9.6749 13.1751C10.1311 12.7189 10.8684 12.7189 11.3246 13.1751L13.9426 15.7931L21.2891 7.39775C21.7137 6.91592 22.4499 6.86459 22.9352 7.28925C23.4194 7.71275 23.4684 8.45009 23.0437 8.93542L14.8771 18.2688C14.6647 18.5114 14.3614 18.6549 14.0382 18.6666H13.9997C13.6906 18.6666 13.3942 18.5441 13.1749 18.3248L9.6749 14.8248C9.21873 14.3686 9.21873 13.6313 9.6749 13.1751Z" fill="#2E6CF6" />
                                    </svg>
                                </div>
                                <div class="i-text">Lưu trữ miễn phí dữ liệu với mỗi bộ hồ sơ ký trong vòng 10 năm</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4962 12.803H24.4997C25.1426 12.803 25.6652 13.3234 25.6664 13.9662C25.6757 17.0824 24.4706 20.0165 22.2726 22.2262C20.0757 24.4359 17.1497 25.6574 14.0336 25.6667H13.9997C10.8952 25.6667 7.97506 24.4627 5.77356 22.2729C3.56389 20.076 2.34239 17.15 2.33306 14.0339C2.32373 10.9165 3.5289 7.98354 5.7269 5.77387C7.92373 3.56421 10.8497 2.34271 13.9659 2.33337C14.8934 2.34737 15.8384 2.44071 16.7437 2.65771C17.3691 2.80937 17.7552 3.43937 17.6036 4.06587C17.4531 4.69121 16.8196 5.07621 16.1966 4.92687C15.4721 4.75187 14.7032 4.67837 13.9729 4.66671C11.4797 4.67371 9.13823 5.65137 7.38123 7.41887C5.62306 9.18637 4.65939 11.5337 4.66639 14.0269C4.67339 16.52 5.65106 18.8604 7.41856 20.6185C9.18023 22.3697 11.5159 23.3334 13.9997 23.3334H14.0266C16.5197 23.3264 18.8612 22.3487 20.6182 20.5812C22.3764 18.8125 23.3401 16.4664 23.3331 13.9732C23.3319 13.3292 23.8522 12.8042 24.4962 12.803ZM9.6749 13.1751C10.1311 12.7189 10.8684 12.7189 11.3246 13.1751L13.9426 15.7931L21.2891 7.39775C21.7137 6.91592 22.4499 6.86459 22.9352 7.28925C23.4194 7.71275 23.4684 8.45009 23.0437 8.93542L14.8771 18.2688C14.6647 18.5114 14.3614 18.6549 14.0382 18.6666H13.9997C13.6906 18.6666 13.3942 18.5441 13.1749 18.3248L9.6749 14.8248C9.21873 14.3686 9.21873 13.6313 9.6749 13.1751Z" fill="#2E6CF6" />
                                    </svg>
                                </div>
                                <div class="i-text">Miễn phí tư vấn, khảo sát ban đầu</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4962 12.803H24.4997C25.1426 12.803 25.6652 13.3234 25.6664 13.9662C25.6757 17.0824 24.4706 20.0165 22.2726 22.2262C20.0757 24.4359 17.1497 25.6574 14.0336 25.6667H13.9997C10.8952 25.6667 7.97506 24.4627 5.77356 22.2729C3.56389 20.076 2.34239 17.15 2.33306 14.0339C2.32373 10.9165 3.5289 7.98354 5.7269 5.77387C7.92373 3.56421 10.8497 2.34271 13.9659 2.33337C14.8934 2.34737 15.8384 2.44071 16.7437 2.65771C17.3691 2.80937 17.7552 3.43937 17.6036 4.06587C17.4531 4.69121 16.8196 5.07621 16.1966 4.92687C15.4721 4.75187 14.7032 4.67837 13.9729 4.66671C11.4797 4.67371 9.13823 5.65137 7.38123 7.41887C5.62306 9.18637 4.65939 11.5337 4.66639 14.0269C4.67339 16.52 5.65106 18.8604 7.41856 20.6185C9.18023 22.3697 11.5159 23.3334 13.9997 23.3334H14.0266C16.5197 23.3264 18.8612 22.3487 20.6182 20.5812C22.3764 18.8125 23.3401 16.4664 23.3331 13.9732C23.3319 13.3292 23.8522 12.8042 24.4962 12.803ZM9.6749 13.1751C10.1311 12.7189 10.8684 12.7189 11.3246 13.1751L13.9426 15.7931L21.2891 7.39775C21.7137 6.91592 22.4499 6.86459 22.9352 7.28925C23.4194 7.71275 23.4684 8.45009 23.0437 8.93542L14.8771 18.2688C14.6647 18.5114 14.3614 18.6549 14.0382 18.6666H13.9997C13.6906 18.6666 13.3942 18.5441 13.1749 18.3248L9.6749 14.8248C9.21873 14.3686 9.21873 13.6313 9.6749 13.1751Z" fill="#2E6CF6" />
                                    </svg>
                                </div>
                                <div class="i-text">Hợp đồng, tài liệu điện tử được lưu trữ tại Trung tâm dữ liệu duy nhất tại Việt Nam đạt an toàn thông tin ISO 27001:2013 và 22301:2012</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4962 12.803H24.4997C25.1426 12.803 25.6652 13.3234 25.6664 13.9662C25.6757 17.0824 24.4706 20.0165 22.2726 22.2262C20.0757 24.4359 17.1497 25.6574 14.0336 25.6667H13.9997C10.8952 25.6667 7.97506 24.4627 5.77356 22.2729C3.56389 20.076 2.34239 17.15 2.33306 14.0339C2.32373 10.9165 3.5289 7.98354 5.7269 5.77387C7.92373 3.56421 10.8497 2.34271 13.9659 2.33337C14.8934 2.34737 15.8384 2.44071 16.7437 2.65771C17.3691 2.80937 17.7552 3.43937 17.6036 4.06587C17.4531 4.69121 16.8196 5.07621 16.1966 4.92687C15.4721 4.75187 14.7032 4.67837 13.9729 4.66671C11.4797 4.67371 9.13823 5.65137 7.38123 7.41887C5.62306 9.18637 4.65939 11.5337 4.66639 14.0269C4.67339 16.52 5.65106 18.8604 7.41856 20.6185C9.18023 22.3697 11.5159 23.3334 13.9997 23.3334H14.0266C16.5197 23.3264 18.8612 22.3487 20.6182 20.5812C22.3764 18.8125 23.3401 16.4664 23.3331 13.9732C23.3319 13.3292 23.8522 12.8042 24.4962 12.803ZM9.6749 13.1751C10.1311 12.7189 10.8684 12.7189 11.3246 13.1751L13.9426 15.7931L21.2891 7.39775C21.7137 6.91592 22.4499 6.86459 22.9352 7.28925C23.4194 7.71275 23.4684 8.45009 23.0437 8.93542L14.8771 18.2688C14.6647 18.5114 14.3614 18.6549 14.0382 18.6666H13.9997C13.6906 18.6666 13.3942 18.5441 13.1749 18.3248L9.6749 14.8248C9.21873 14.3686 9.21873 13.6313 9.6749 13.1751Z" fill="#2E6CF6" />
                                    </svg>
                                </div>
                                <div class="i-text">Sử dụng chung hạ tầng CNTT bảo mật của FPT</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4962 12.803H24.4997C25.1426 12.803 25.6652 13.3234 25.6664 13.9662C25.6757 17.0824 24.4706 20.0165 22.2726 22.2262C20.0757 24.4359 17.1497 25.6574 14.0336 25.6667H13.9997C10.8952 25.6667 7.97506 24.4627 5.77356 22.2729C3.56389 20.076 2.34239 17.15 2.33306 14.0339C2.32373 10.9165 3.5289 7.98354 5.7269 5.77387C7.92373 3.56421 10.8497 2.34271 13.9659 2.33337C14.8934 2.34737 15.8384 2.44071 16.7437 2.65771C17.3691 2.80937 17.7552 3.43937 17.6036 4.06587C17.4531 4.69121 16.8196 5.07621 16.1966 4.92687C15.4721 4.75187 14.7032 4.67837 13.9729 4.66671C11.4797 4.67371 9.13823 5.65137 7.38123 7.41887C5.62306 9.18637 4.65939 11.5337 4.66639 14.0269C4.67339 16.52 5.65106 18.8604 7.41856 20.6185C9.18023 22.3697 11.5159 23.3334 13.9997 23.3334H14.0266C16.5197 23.3264 18.8612 22.3487 20.6182 20.5812C22.3764 18.8125 23.3401 16.4664 23.3331 13.9732C23.3319 13.3292 23.8522 12.8042 24.4962 12.803ZM9.6749 13.1751C10.1311 12.7189 10.8684 12.7189 11.3246 13.1751L13.9426 15.7931L21.2891 7.39775C21.7137 6.91592 22.4499 6.86459 22.9352 7.28925C23.4194 7.71275 23.4684 8.45009 23.0437 8.93542L14.8771 18.2688C14.6647 18.5114 14.3614 18.6549 14.0382 18.6666H13.9997C13.6906 18.6666 13.3942 18.5441 13.1749 18.3248L9.6749 14.8248C9.21873 14.3686 9.21873 13.6313 9.6749 13.1751Z" fill="#2E6CF6" />
                                    </svg>
                                </div>
                                <div class="i-text">Đảm bảo hệ thống dự phòng (back up) dữ liệu của FPT.</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="avar-srv text-center">
                        <img src="https://econtract.fpt.com.vn/wp-content/uploads/2021/09/Group-880.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-price-sale">
        <div class="container">
            <div class="title-price">
                <h2>Khuyến mại</h2>
            </div>
            <div class="list-sale">
                <div class="item-sale">
                    <div class="avarta">
                        <a href="">
                            <img src="https://econtract.fpt.com.vn/wp-content/uploads/2021/09/Screen-Shot-2021-09-19-at-11.40.33.png" class="img-fluid w-100" alt="">
                        </a>
                    </div>
                    <div class="info">
                        <h3>
                            <a href="https://khuyenmaiecontract.fpt.com.vn/">Miễn phí 50 hợp đồng & bản quyền 1 năm</a>
                        </h3>
                        <div class="price-sale">
                            <ul>
                                <li>
                                    <span>0 đ</span>
                                </li>
                                <li>
                                    <del>2.400.000 đ</del>
                                </li>
                            </ul>
                        </div>
                        <div class="desc">
                            <p>* Miễn phí 50 hợp đồng &amp; bản quyền 1 năm khi đăng kí trước ngày 31/10/2021:</p>
                            <p>* Miễn phí bản quyền 1 năm sử dụng</p>
                            <p>* Miễn phí 50 hợp đồng/hồ sơ/tài liệu</p>
                            <p>* Miễn phí tư vấn, khởi tạo <br /> * Tặng 200 hoá đơn điện tử và bản quyền 1 năm sử dụng </p>
                        </div>
                        <div class="btn-pack readmore">
                            <a href="#price-scroll" class="clc-scoll-form">CHỌN MUA</a>
                        </div>
                    </div>
                </div>
                <div class="item-sale">
                    <div class="avarta">
                        <a href="">
                            <img src="https://econtract.fpt.com.vn/wp-content/uploads/2021/09/Screen-Shot-2021-09-19-at-11.45.26.png" class="img-fluid w-100" alt="">
                        </a>
                    </div>
                    <div class="info">
                        <h3>
                            <a href="https://khuyenmaiecontract.fpt.com.vn/">Mua 1 gói tặng 1 gói tương ứng</a>
                        </h3>
                        <div class="price-sale">
                            <ul>
                                <li>
                                    <span>x2 số lượng ký</span>
                                </li>
                                <li>
                                    <del></del>
                                </li>
                            </ul>
                        </div>
                        <div class="desc">
                            <p>*Miễn phí 50 hợp đồng &amp; bản quyền 1 năm khi đăng kí trước ngày 31/10/2021:</p>
                            <p>* Mua bất kì gói dịch vụ nào, tặng ngay gói dịch vụ tương ứng.</p>
                            <p>* Tặng 200 hoá đơn điện tử FPT.eInvoice</p>
                            <p>* Miễn phí bản quyền sử dụng 1 năm cho FPT.eContract và FPT.eInvoice</p>
                        </div>
                        <div class="btn-pack readmore">
                            <a href="#price-scroll" class="clc-scoll-form">CHỌN MUA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-tuvan" style="background: url(https://channel.mediacdn.vn/2021/9/16/bg-123-16317420728451911325143.png);background-size: cover;">
        <div class="container">
            <div class="content-tvan">
                <div class="logo">
                    <img src="https://channel.mediacdn.vn/2021/9/16/logo-1631742250584898059537.png" class="img-fluid" alt="">
                </div>
                <div class="title-tvan">MỜI HỢP TÁC ĐẠI LÝ & CỘNG TÁC VIÊN</div>
                <div class="desc"> Trân trọng mời Đại lý và Cộng tác viên cùng cộng tác kinh doanh bộ sản phẩm của FPT IS với nhiều ưu đãi hấp dẫn! </div>
                <div class="btn-van">
                    <ul>
                        <li>
                            <a href="https://econtract.fpt.com.vn/lien-he/" class="tv-1">Tư vấn cho tôi</a>
                        </li>
                        <li>
                            <a href="" class="tv-2">GỌi tư vấn</a>
                        </li>
                    </ul>
                </div>
                <div class="tvan-more">
                    <a href="">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6654 14.007C20.6654 14.0044 20.6667 14.003 20.6667 14.0004C20.6667 13.9564 20.6454 13.9204 20.6414 13.8777C20.6307 13.7497 20.6147 13.6217 20.5654 13.5017C20.5294 13.411 20.4681 13.339 20.4134 13.259C20.3721 13.2004 20.3494 13.1324 20.2987 13.079L16.4814 9.07902C15.9721 8.54569 15.1294 8.52702 14.5961 9.03502C14.0641 9.54303 14.0441 10.387 14.5521 10.9204L16.2187 12.667H8.66673C7.93073 12.667 7.33339 13.263 7.33339 14.0004C7.33339 14.7364 7.93073 15.3337 8.66673 15.3337H16.1147L14.3907 17.0577C13.8694 17.5777 13.8694 18.4217 14.3907 18.943C14.6507 19.203 14.9921 19.3337 15.3334 19.3337C15.6747 19.3337 16.0161 19.203 16.2761 18.943L20.2761 14.943C20.3974 14.8217 20.4961 14.675 20.5627 14.5137C20.6307 14.3524 20.6641 14.1804 20.6654 14.007ZM14.0001 24.6665C8.11873 24.6665 3.33339 19.8811 3.33339 13.9998C3.33339 8.11847 8.11873 3.33314 14.0001 3.33314C19.8814 3.33314 24.6667 8.11847 24.6667 13.9998C24.6667 19.8811 19.8814 24.6665 14.0001 24.6665ZM14.0001 0.666504C6.64808 0.666504 0.666748 6.64784 0.666748 13.9998C0.666748 21.3518 6.64808 27.3332 14.0001 27.3332C21.3521 27.3332 27.3334 21.3518 27.3334 13.9998C27.3334 6.64784 21.3521 0.666504 14.0001 0.666504Z" fill="white" />
                        </svg>
                        <span>XEM CHI TIẾT</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="box-quesstion">
        <div class="container">
            <div class="title-price">
                <h2>Câu hỏi thường gặp</h2>
            </div>
            <div class="contenet-quess">
                <div class="left">
                    <div class="box-quess"></div>
                </div>
                <div class="right">
                    <div class="contact-quess">
                        <div class="titl-quess">Liên hệ</div>
                        <div class="desc"> Mọi thông tin chi tiết về chính sách hợp tác kinh doanh, các gói cước sản phẩm, dịch vụ, Quý Khách hàng vui lòng liên hệ hotline </div>
                        <div class="hotline-bn">0934.453.466/ 1900 636 191</div>
                        <div class="btn-quss">
                            <ul>
                                <li>
                                    <a href="https://econtract.fpt.com.vn/lien-he/" class="quess-1">Tư vấn cho tôi</a>
                                </li>
                                <li>
                                    <a class="quess-2" href="tel:0934.453.466/ 1900 636 191">GỌI 1900 636 191</a>
                                </li>
                            </ul>
                        </div>
                        <div class="bn-quess text-center">
                            <img src="https://econtract.fpt.com.vn/wp-content/uploads/2021/09/illus_banner.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-partner">
        <div class="container">
            <div class="slide-part">
                <div class="item-slide">
                    <div class="item-part">
                        <a href="javascript:void(0)">
                            <img src="https://econtract.fpt.com.vn/wp-content/uploads/2021/09/f1.jpeg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-part">
                        <a href="javascript:void(0)">
                            <img src="https://econtract.fpt.com.vn/wp-content/uploads/2021/09/f2.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-part">
                        <a href="javascript:void(0)">
                            <img src="https://econtract.fpt.com.vn/wp-content/uploads/2021/09/f3.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-part">
                        <a href="javascript:void(0)">
                            <img src="https://econtract.fpt.com.vn/wp-content/uploads/2021/09/f4.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-part">
                        <a href="javascript:void(0)">
                            <img src="https://econtract.fpt.com.vn/wp-content/uploads/2021/09/f5.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-part">
                        <a href="javascript:void(0)">
                            <img src="https://econtract.fpt.com.vn/wp-content/uploads/2021/09/f6.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item-part">
                        <a href="javascript:void(0)">
                            <img src="https://econtract.fpt.com.vn/wp-content/uploads/2021/09/f6.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
