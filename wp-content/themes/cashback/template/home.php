<?php

/**
 * Template Name: Home
 */
get_header();
?>
<main>
    <section class="banner-home">
        <div class="container">
            <div class="banner-inner">
                <div class="banner-content">
                    <h1>Top 1 dịch vụ Backcom 100% cho Trader</h1>
                    <p>Hoàn phí giao dịch – giải pháp đơn giản để tối ưu hóa lợi nhuận. Áp dụng mã giới thiệu của Backcom.com, bạn sẽ được hoàn phí tự động mỗi ngày ở mức cao nhất, minh bạch và không phí ẩn.</p>
                    <div class="start-button">
                        <a href="#" target="">Bắt đầu ngay</a>
                    </div>
                </div>
                <div class="banner-video">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/K3RgioijylQ?enablejsapi=1&amp;version=3&amp;playerapiid=ytplayer" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                    <div class="banner-image">
                        <img width="2560" height="1440" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/78e76deab2c806965fd9-1536x864.jpg" class="attachment-full size-full" alt="" decoding="async" fetchpriority="high" srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/img/78e76deab2c806965fd9-1536x864.jpg" sizes="(max-width: 2560px) 100vw, 2560px">
                    </div>
                </div>
            </div>
            <div class="list-icon-featured">
                <ul>
                    <li>
                        <div class="icon-image">
                            <div class="icon-inner">
                                <img width="28" height="28" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/refresh-ccw-04.svg" class="attachment-full size-full" alt="" decoding="async">
                            </div>
                        </div>
                        <div class="info">
                            <h3>Auto</h3>
                            <p>Hoàn toàn tự động</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-image">
                            <div class="icon-inner">
                                <img width="28" height="28" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/currency-dollar.svg" class="attachment-full size-full" alt="" decoding="async">
                            </div>
                        </div>
                        <div class="info">
                            <h3>$2M+</h3>
                            <p>Tổng tiền phí được hoàn</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-image">
                            <div class="icon-inner">
                                <img width="28" height="28" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/users-01.svg" class="attachment-full size-full" alt="" decoding="async">
                            </div>
                        </div>
                        <div class="info">
                            <h3>10,000+</h3>
                            <p>Người tham gia hoàn tiền</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-image">
                            <div class="icon-inner">
                                <img width="28" height="28" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/face-content.svg" class="attachment-full size-full" alt="" decoding="async">
                            </div>
                        </div>
                        <div class="info">
                            <h3>99%</h3>
                            <p>Người dùng hài lòng</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="block-main">
        <div class="container">
            <div class="title-block">Danh sách sàn giao dịch</div>

            <div class="block-exchanges">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button">All</button>
                        <button class="nav-link" id="nav-crypto-tab" data-bs-toggle="tab" data-bs-target="#nav-crypto" type="button">Crypto</button>
                        <button class="nav-link" id="nav-forex-tab" data-bs-toggle="tab" data-bs-target="#nav-forex" type="button">Forex</button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">

                    <!-- ===================== ALL ===================== -->
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel">
                        <div class="list-exchanges">
                            <?php template_include_broker(); ?>
                        </div>
                    </div>


                    <!-- ===================== CRYPTO ===================== -->
                    <div class="tab-pane fade" id="nav-crypto" role="tabpanel">
                        <div class="list-exchanges">
                            <?php template_include_broker('crypto'); ?>
                        </div>
                    </div>


                    <!-- ===================== FOREX ===================== -->
                    <div class="tab-pane fade" id="nav-forex" role="tabpanel">
                        <div class="list-exchanges">
                            <?php template_include_broker('forex'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="content-box-intro">
        <div class="container">
            <div class="content-inner">
                <h2>Backcom là gì?</h2>
                <p></p>
                <p><span style="font-weight: 400;">Backcom (Back Commission) là chương trình hoàn phí giao dịch forex và crypto. Trong đó, trader sẽ được hoàn trả lại một phần phí giao dịch thông qua Đối tác giới thiệu (IB) của sàn.</span></p>
                <p><span style="font-weight: 400;">Backcom.com là dịch vụ hoàn phí giao dịch hàng đầu thị trường, là đối tác của nhiều sàn lớn, uy tín. Đăng ký nhận backcom với chúng tôi, các bạn sẽ được hoàn phí ở mức cao nhất và không giới hạn thời gian.</span></p>
                <p></p>
            </div>
            <div class="banner-image">
                <img width="1176" height="814" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/z6661126732881_48255ee395333b04886e657a26d2d83a.jpg" class="attachment-full size-full" alt="" decoding="async" srcset="https://backcom.com/wp-content/uploads/2025/06/z6661126732881_48255ee395333b04886e657a26d2d83a.jpg 1176w, https://backcom.com/wp-content/uploads/2025/06/z6661126732881_48255ee395333b04886e657a26d2d83a-300x208.jpg 300w, https://backcom.com/wp-content/uploads/2025/06/z6661126732881_48255ee395333b04886e657a26d2d83a-1024x709.jpg 1024w, https://backcom.com/wp-content/uploads/2025/06/z6661126732881_48255ee395333b04886e657a26d2d83a-768x532.jpg 768w" sizes="(max-width: 1176px) 100vw, 1176px">
                <img width="1307" height="969" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/z6661126819439_39e3f394823912a85dd40b6840b044c4.jpg" class="attachment-full size-full" alt="" decoding="async" srcset="https://backcom.com/wp-content/uploads/2025/06/z6661126819439_39e3f394823912a85dd40b6840b044c4.jpg 1307w, https://backcom.com/wp-content/uploads/2025/06/z6661126819439_39e3f394823912a85dd40b6840b044c4-300x222.jpg 300w, https://backcom.com/wp-content/uploads/2025/06/z6661126819439_39e3f394823912a85dd40b6840b044c4-1024x759.jpg 1024w, https://backcom.com/wp-content/uploads/2025/06/z6661126819439_39e3f394823912a85dd40b6840b044c4-768x569.jpg 768w" sizes="(max-width: 1307px) 100vw, 1307px">
            </div>
        </div>
    </section>

    <section class="list-why-choose-us">
        <div class="container">
            <div class="section-heading">
                <h2>Tại sao chọn Backcom.com?</h2>
                <p>Là dịch vụ hoàn phí giao dịch hàng đầu hiện nay trên thị trường, Backcom.com cam kết mang lại chất lượng dịch vụ tốt nhất và uy tín nhất cho bạn.</p>
            </div>
            <div class="list-inner">
                <ul>
                    <li>
                        <div class="image">
                            <img width="82" height="82" src="https://backcom.com/wp-content/uploads/2025/05/advantage-1.png" class="attachment-full size-full" alt="" decoding="async">
                        </div>
                        <div class="info">
                            <h3>Đối tác cao cấp</h3>
                            <p>Lựa chọn IB cấp bậc cao nhất, bạn sẽ nhận được backcom mức cao nhất.</p>
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <img width="82" height="82" src="https://backcom.com/wp-content/uploads/2025/05/advantage-6.png" class="attachment-full size-full" alt="" decoding="async">
                        </div>
                        <div class="info">
                            <h3>Hoàn toàn tự động</h3>
                            <p>Hoàn phí tự động mỗi ngày và không giới hạn thời gian.</p>
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <img width="82" height="82" src="https://backcom.com/wp-content/uploads/2025/05/Featured-icon.png" class="attachment-full size-full" alt="" decoding="async">
                        </div>
                        <div class="info">
                            <h3>Hỗ trợ nhiều sàn giao dịch</h3>
                            <p>Hỗ trợ hoàn phí nhiều sàn Forex và Crypto lớn, uy tín</p>
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <img width="82" height="82" src="https://backcom.com/wp-content/uploads/2025/05/advantage-3.png" class="attachment-full size-full" alt="" decoding="async">
                        </div>
                        <div class="info">
                            <h3>Hoàn phí vĩnh viễn</h3>
                            <p>Hoàn tiền trọn đời, không phí ẩn, theo dõi dễ dàng trên hệ thống</p>
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <img width="82" height="82" src="https://backcom.com/wp-content/uploads/2025/05/advantage-4.png" class="attachment-full size-full" alt="" decoding="async">
                        </div>
                        <div class="info">
                            <h3>Đăng ký nhanh chóng</h3>
                            <p>Cài backcom chưa đến 5 phút với hướng dẫn chi tiết từng sàn</p>
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <img width="82" height="82" src="https://backcom.com/wp-content/uploads/2025/05/Featured-icon-1.png" class="attachment-full size-full" alt="" decoding="async">
                        </div>
                        <div class="info">
                            <h3>Hỗ trợ 24/7</h3>
                            <p>Đội ngũ hỗ trợ tận tâm, giải đáp mọi thắc mắc, đồng hành cùng nhà giao dịch</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="list-testimonials">
        <div class="container">
            <div class="section-heading mb-4">
                <h2>Khách hàng nói gì về chúng tôi</h2>
                <p>Hãy lắng nghe những khách hàng tuyệt vời đã sử dụng dịch vụ hoàn phí của chúng tôi.</p>
            </div>
        </div>
        <div class="swiper testimonials-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="detail-testimonials">
                        <div class="rating">
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <div class="content">
                            “Tôi đã tiết kiệm được 1 số tiền đáng kể khi sử dụng sản phẩm của backcoms.”
                        </div>
                        <div class="info">
                            <div class="avatar">
                                <span class="user-default">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" ssr="true" class="size-7 text-gray-500 lg:size-8 iconify iconify--icons" style="font-size:20px;" width="1em" height="1em" viewBox="0 0 24 24">
                                        <g fill="none">
                                            <g id="iconifyVue494">
                                                <path id="iconifyVue495" d="M20 21C20 19.6044 20 18.9067 19.8278 18.3389C19.44 17.0605 18.4395 16.06 17.1611 15.6722C16.5933 15.5 15.8956 15.5 14.5 15.5H9.5C8.10444 15.5 7.40665 15.5 6.83886 15.6722C5.56045 16.06 4.56004 17.0605 4.17224 18.3389C4 18.9067 4 19.6044 4 21M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="info-cus">
                                <h3>Nguyễn Anh Tú</h3>
                                <p>Nhân viên văn phòng</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="detail-testimonials">
                        <div class="rating">
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <div class="content">
                            “Tôi đã tiết kiệm được 1 số tiền đáng kể khi sử dụng sản phẩm của backcoms.”
                        </div>
                        <div class="info">
                            <div class="avatar">
                                <span class="user-default">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" ssr="true" class="size-7 text-gray-500 lg:size-8 iconify iconify--icons" style="font-size:20px;" width="1em" height="1em" viewBox="0 0 24 24">
                                        <g fill="none">
                                            <g id="iconifyVue494">
                                                <path id="iconifyVue495" d="M20 21C20 19.6044 20 18.9067 19.8278 18.3389C19.44 17.0605 18.4395 16.06 17.1611 15.6722C16.5933 15.5 15.8956 15.5 14.5 15.5H9.5C8.10444 15.5 7.40665 15.5 6.83886 15.6722C5.56045 16.06 4.56004 17.0605 4.17224 18.3389C4 18.9067 4 19.6044 4 21M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="info-cus">
                                <h3>Nguyễn Anh Tú</h3>
                                <p>Nhân viên văn phòng</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="detail-testimonials">
                        <div class="rating">
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <div class="content">
                            “Tôi đã tiết kiệm được 1 số tiền đáng kể khi sử dụng sản phẩm của backcoms.”
                        </div>
                        <div class="info">
                            <div class="avatar">
                                <span class="user-default">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" ssr="true" class="size-7 text-gray-500 lg:size-8 iconify iconify--icons" style="font-size:20px;" width="1em" height="1em" viewBox="0 0 24 24">
                                        <g fill="none">
                                            <g id="iconifyVue494">
                                                <path id="iconifyVue495" d="M20 21C20 19.6044 20 18.9067 19.8278 18.3389C19.44 17.0605 18.4395 16.06 17.1611 15.6722C16.5933 15.5 15.8956 15.5 14.5 15.5H9.5C8.10444 15.5 7.40665 15.5 6.83886 15.6722C5.56045 16.06 4.56004 17.0605 4.17224 18.3389C4 18.9067 4 19.6044 4 21M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="info-cus">
                                <h3>Nguyễn Anh Tú</h3>
                                <p>Nhân viên văn phòng</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="detail-testimonials">
                        <div class="rating">
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <div class="content">
                            “Tôi đã tiết kiệm được 1 số tiền đáng kể khi sử dụng sản phẩm của backcoms.”
                        </div>
                        <div class="info">
                            <div class="avatar">
                                <span class="user-default">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" ssr="true" class="size-7 text-gray-500 lg:size-8 iconify iconify--icons" style="font-size:20px;" width="1em" height="1em" viewBox="0 0 24 24">
                                        <g fill="none">
                                            <g id="iconifyVue494">
                                                <path id="iconifyVue495" d="M20 21C20 19.6044 20 18.9067 19.8278 18.3389C19.44 17.0605 18.4395 16.06 17.1611 15.6722C16.5933 15.5 15.8956 15.5 14.5 15.5H9.5C8.10444 15.5 7.40665 15.5 6.83886 15.6722C5.56045 16.06 4.56004 17.0605 4.17224 18.3389C4 18.9067 4 19.6044 4 21M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="info-cus">
                                <h3>Nguyễn Anh Tú</h3>
                                <p>Nhân viên văn phòng</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="detail-testimonials">
                        <div class="rating">
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <div class="content">
                            “Tôi đã tiết kiệm được 1 số tiền đáng kể khi sử dụng sản phẩm của backcoms.”
                        </div>
                        <div class="info">
                            <div class="avatar">
                                <span class="user-default">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" ssr="true" class="size-7 text-gray-500 lg:size-8 iconify iconify--icons" style="font-size:20px;" width="1em" height="1em" viewBox="0 0 24 24">
                                        <g fill="none">
                                            <g id="iconifyVue494">
                                                <path id="iconifyVue495" d="M20 21C20 19.6044 20 18.9067 19.8278 18.3389C19.44 17.0605 18.4395 16.06 17.1611 15.6722C16.5933 15.5 15.8956 15.5 14.5 15.5H9.5C8.10444 15.5 7.40665 15.5 6.83886 15.6722C5.56045 16.06 4.56004 17.0605 4.17224 18.3389C4 18.9067 4 19.6044 4 21M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="info-cus">
                                <h3>Nguyễn Anh Tú</h3>
                                <p>Nhân viên văn phòng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="list-faqs">
        <div class="container">
            <div class="section-heading">
                <h2>Câu hỏi thường gặp</h2>
                <p>Về chương trình hoàn phí giao dịch tại Backcom.com</p>
            </div>
            <div class="list-content-accord">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Backcom.com có uy tín không?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Backcom.com</strong> là một trong những dịch vụ hoàn phí giao dịch forex và crypto uy tín, chất lượng nhất trên thị trường. Hiện tại, chúng tôi đang cung cấp dịch vụ cho hàng chục nghìn trader với mức hoàn phí cao nhất mà chưa từng xảy ra bất kỳ khiếu nại nào từ phía trader. Hãy xem thêm về chất lượng dịch vụ của Backcom.com thông qua phần đánh giá của khách hàng nhé.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
