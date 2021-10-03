<section class="box-bread">
    <div class="container">
        <ul>
            <li>
                <?php if( get_locale() == 'vi' ):?>
                    <a href="/">Trang chủ</a>
                <?php else: ?>
                    <a href="/<?php 
                                $str = get_locale();
                                echo substr($str,0, 2); 
                            ?>">Home
                    </a>
                <?php endif; ?>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12L10 8L6 4" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li>
            <li><a href="javascript:void(0)"><span><?php the_title(); ?></span></a></li>
        </ul>
    </div>
</section>