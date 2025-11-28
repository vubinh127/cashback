<?php
get_header();
?>

<section class="block-event-detail">
    <div class="container">
        <div class="event-detail-box">
            <h1 class="event-detail-title"><?php the_title() ?></h1>
            <div class="event-detail-date"> <?php echo get_the_date('d-m-Y'); ?></div>

            <div class="event-detail-body mt-4">
                <?php
                    the_content()
                ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
