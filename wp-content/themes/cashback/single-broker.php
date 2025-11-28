<?php
get_header();

// Lấy ACF với fallback
//$title          = get_field('ten_san') ?: get_the_title();
$motasan        = get_field('mo_ta_san') ?: '';
$rebate         = get_field('hoan_phi') ?: '';
$youtube_link   = get_field('link_youtube') ?: '';
$referral_link  = get_field('link_moi') ?: '';
$code_invite    = get_field('ma_gioi_thieu') ?: '';
$type           = get_field('loai') ?: '';
$vidu           = get_field('vi_du') ?: '';
$thumbnail_url   = get_the_post_thumbnail_url() ?: '';
?>

<section class="block-event-detail">
    <div class="container">
        <div class="content-summary">
            <div class="logo-trading">
                <img width="242" height="224"
                     src="<?php echo $thumbnail_url; ?>"
                     class="attachment-full size-full wp-post-image" alt="">
            </div>

            <div class="title-floor">
                <h1><?php echo esc_html(get_the_title()); ?></h1>
                <p class="desc"><?php echo esc_html($motasan); ?></p>

                <div class="button-group">
                    <?php if ($youtube_link): ?>
                        <a href="<?php echo esc_url($youtube_link); ?>" target="_blank" class="view-video">
                            Xem hướng dẫn
                        </a>
                    <?php endif; ?>

                    <?php if ($referral_link): ?>
                        <a href="<?php echo esc_url($referral_link); ?>" target="_blank" class="regsiter-btn">
                            Đăng ký ngay
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="additional-info">
                <ul>
                    <li>
                        <span class="label">Hoàn phí Backcom</span>
                        <span class="blue"><?php echo esc_html($rebate); ?>%</span>
                    </li>

                    <li>
                        <span class="label">Loại</span>
                        <span class="value"><?php echo esc_html($type); ?></span>
                    </li>

                    <li class="intro-code">
                        <span class="label">Mã giới thiệu</span>
                        <span class="value">
                            <?php echo esc_html($code_invite); ?>
                            <?php if ($code_invite && $code_invite !== 'Không có'): ?>
                                <a class="copy"><span>Đã sao chép liên kết</span></a>
                                <input type="hidden" value="<?php echo esc_attr($code_invite); ?>">
                            <?php endif; ?>
                        </span>
                    </li>

                    <li>
                        <span class="label">Ví dụ</span>
                        <span class="value"><?php echo esc_html($vidu); ?></span>
                    </li>
                </ul>
            </div>

            <div class="button-group-mobile">
                <?php if ($youtube_link): ?>
                    <a href="<?php echo esc_url($youtube_link); ?>" target="_blank" class="view-video">
                        Xem hướng dẫn
                    </a>
                <?php endif; ?>

                <?php if ($referral_link): ?>
                    <a href="<?php echo esc_url($referral_link); ?>" target="_blank" class="register-btn">
                        Đăng ký ngay
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <div class="event-detail-box">
            <div class="event-detail-body">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
