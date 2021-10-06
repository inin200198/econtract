<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'econtract' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8`B+NCPVk!.aw#fe9x|?6p`lA|Ykb;X&v[e7SqZ:ADA?ZMjoZ{lif:)) 5_!Auz5' );
define( 'SECURE_AUTH_KEY',  '{P^=pSlYG.7bZi70=M;Zi^Frk{frut{OLW~~5CJ0gI|nV% McR@zeyv/T?8uLT}D' );
define( 'LOGGED_IN_KEY',    'eGi&w.[GIF)B,=8>fDAQz~uxW7/92zO>qVcJLj=1/khR;~;sV4<^Ov(#[kNzJ0a*' );
define( 'NONCE_KEY',        '<NT,KjXY3)]AJ>TuMVVWD|MR@k[|V/BWD5Lu@vA&;PXa:3!F}V=)Y)kq,V!xz[su' );
define( 'AUTH_SALT',        '[Je7-!$i@XH>o_gnvY>0}3L#HX!|CalCl{AC&gk)=Ak}hdDy>!7P|7T3~4|8S_~,' );
define( 'SECURE_AUTH_SALT', 'ZRs{e@uF%!7zj>2/frgG=YM4<]<4{wh=YIk/rELLh&,HMB@%5O;:N]ZS;*yIgse-' );
define( 'LOGGED_IN_SALT',   '.?5W0X;Vq~m{QU^vK][O>PZ%T(!|(l[<s|,&C;a1a!p3>I$7[Q8T9sRPP|@B&`Zd' );
define( 'NONCE_SALT',       '[QWHOjilf-X_O;30S68I``Lw.G!1OYd5=ET|XR,2uf: UFN^}YNx_i(>-C sBLbx' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_CACHE', true );

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */
/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
