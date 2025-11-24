<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <nav class="main-menu navbar navbar-expand-xl navbar-light justify-content-between align-items-center">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <a class="navbar-brand" href="/">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.jpg" alt="" />
                    </a>

                    <div class="menu-custom d-none d-lg-flex menu-pc" id="navbarNav">
                
                    <ul id="menu-main-menu" class="nav-bar-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Trang chủ
                            </a>
                            <!-- <ul class="dropdown-menu" aria-labelledby="brandDropdown">
                              <li><a class="dropdown-item" href="/brand?section=1">목공의 마음</a></li>
                              <li><a class="dropdown-item" href="/brand?section=2">목공의 전문성</a></li>
                              <li><a class="dropdown-item" href="/brand?section=3">온열 목공간</a></li>
                          </ul> -->
                        </li>

                        <li class="nav-item has-sub">
                            <a class="nav-link toggle-sub" href="/events.html" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sàn giao dịch
                            </a>
                            <ul class="sub-menu" aria-labelledby="productsDropdown">
                                <li>
                                    <a class="dropdown-item" href="/product/list.html?cate_no=130">
                                        <img width="32" height="32" src="https://backcom.com/wp-content/uploads/2025/06/image-2.png" class="_mi _before _image" alt="" aria-hidden="true" decoding="async">
                                        <span>Binance</span>
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="/product/list.html?cate_no=131">반신욕기</a></li>
                                <li><a class="dropdown-item" href="/product/list.html?cate_no=132">홈사우나</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/mototours/about.php">Developers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/mototours/about.php">Tin tức</a>
                        </li>
                    </ul>

                     <div class="contact-button d-block d-lg-none">
                            <a href="https://backcom.com/lien-he/">Liên hệ</a>
                    </div>
                </div>

                    <div class="d-flex align-items-center gap-3">
                        <div class="contact-button d-none d-lg-block">
                            <a href="https://backcom.com/lien-he/">Liên hệ</a>
                        </div>

                        <button class="btn_menu d-block d-lg-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H22V2H0V0ZM0 7H22V9H0V7ZM22 14H0V16H22V14Z" fill="#F4F4F4" />
                            </svg>
                        </button>
                    </div>
                </div>

                
            </nav>
            <div class="menu-overlay">
                <div class="menu-custom menu-sp" id="navbarNav">
<!--                 
                    <ul id="menu-main-menu" class="nav-bar-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Trang chủ
                            </a>
                        </li>

                        <li class="nav-item has-sub">
                            <a class="nav-link toggle-sub" href="/events.html" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sàn giao dịch
                            </a>
                            <ul class="sub-menu" aria-labelledby="productsDropdown">
                                <li>
                                    <a class="dropdown-item" href="/product/list.html?cate_no=130">
                                        <img width="32" height="32" src="https://backcom.com/wp-content/uploads/2025/06/image-2.png" class="_mi _before _image" alt="" aria-hidden="true" decoding="async">
                                        <span>Binance</span>
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="/product/list.html?cate_no=131">반신욕기</a></li>
                                <li><a class="dropdown-item" href="/product/list.html?cate_no=132">홈사우나</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/mototours/about.php">Developers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/mototours/about.php">Tin tức</a>
                        </li>
                    </ul> -->
                    <?php cashback_menu('main-menu') ?>
                    <div class="contact-button d-block d-lg-none">
                            <a href="https://backcom.com/lien-he/">Liên hệ</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php // cashback_menu('main-menu') 
    ?>