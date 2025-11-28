<?php
get_header();
?>
<section class="block-events">
    <div class="container">
        <div class="title-block m-3">Tin tức</div>

        <div class="row g-4">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>">
                            <div class="event-item">

                                <div class="event-thumb">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                                    <?php else : ?>
                                        <img src="/path/to/default.jpg" alt="">
                                    <?php endif; ?>
                                </div>

                                <div class="event-title">
                                    <?php the_title(); ?>
                                </div>

                                <div class="event-date">
                                    <?= get_the_date('d-m-Y'); ?>
                                </div>

                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Không có bài viết nào.</p>
            <?php endif; ?>

        </div>

<!--        <div class="custom-pagination">-->
<!--            <a class="page-btn prev" disabled>‹</a>-->
<!--            <a class="page-btn active">1</a>-->
<!--            <a class="page-btn">2</a>-->
<!--            <a class="page-btn">3</a>-->
<!--            <a class="page-btn next">›</a>-->
<!--        </div>-->
    </div>
</section>
<?php
get_footer();
