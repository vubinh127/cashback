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
                        <img src="https://wintechcapital.vn/assets/logo-DtnypJpb.png" alt="" />
                    </a>

                    <div class="d-flex align-items-center gap-3">
                        <div class="language-switcher">
                            <a class="language d-flex align-items-center gap-2" id="en-language" href="https://cashback.exchange/vi">
                                <img src="https://cashback.exchange/image/EN.png" alt="English Flag">
                                <span>EN</span>
                            </a>
                        </div>

                        <form class="form-enter-id d-none d-lg-flex">
                            <input type="text" class="input-search" name="your_uid" data-lang="en" placeholder="Enter your UID">
                            <select name="exchange" id="exchange">
                                <option value="ref_code">Referral code</option>
                                <option value="binance">Binance</option>
                                <option value="bingx">BingX</option>
                                <option value="bybit">Bybit</option>
                                <option value="exness">Exness</option>
                                <option value="xm">XM</option>
                                <option value="mexc">MEXC</option>
                                <option value="okx">OKX</option>
                                <option value="bitget">Bitget</option>
                                <option value="gate">Gate</option>
                                <option value="kucoin">Kucoin</option>
                                <option value="lbank">LBank</option>
                            </select>
                            <button class="" id="btn_search_your_uid" type="submit">
                                <svg fill="#fff" width="20px" height="20px" viewBox="0 0 0.375 0.375" xmlns="http://www.w3.org/2000/svg" id="arrow">
                                    <path d="M0.207 0.057a0.025 0.025 0 0 1 0.035 0l0.113 0.113a0.025 0.025 0 0 1 0 0.035l-0.113 0.113a0.025 0.025 0 0 1 -0.035 -0.035L0.275 0.213H0.038a0.025 0.025 0 0 1 0 -0.05H0.275L0.207 0.093a0.025 0.025 0 0 1 0 -0.035"></path>
                                </svg>
                            </button>
                        </form>

                        <button class="btn_menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H22V2H0V0ZM0 7H22V9H0V7ZM22 14H0V16H22V14Z" fill="#F4F4F4" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="menu-custom" id="navbarNav">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                        <svg width="20px" height="20px" viewBox="0 0 0.4 0.4" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#fff" fill-rule="evenodd" d="M0.282 0.082a0.025 0.025 0 1 1 0.035 0.035L0.235 0.2l0.082 0.082a0.025 0.025 0 0 1 -0.035 0.035L0.2 0.235l-0.082 0.082a0.025 0.025 0 0 1 -0.035 -0.035L0.165 0.2 0.082 0.118a0.025 0.025 0 0 1 0.035 -0.035L0.2 0.165z"></path>
                        </svg>
                    </button>
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
                                Sự kiện
                            </a>
                            <ul class="sub-menu" aria-labelledby="productsDropdown">
                                <li><a class="dropdown-item" href="/product/list.html?cate_no=130">족욕기</a></li>
                                <li><a class="dropdown-item" href="/product/list.html?cate_no=131">반신욕기</a></li>
                                <li><a class="dropdown-item" href="/product/list.html?cate_no=132">홈사우나</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/mototours/about.php">Developers</a>
                        </li>
                    </ul>
                    <form class="form-enter-id d-flex d-lg-none mt-5">
                        <input type="text" class="input-search" name="your_uid" data-lang="en" placeholder="Enter your UID">
                        <select name="exchange" id="exchange">
                            <option value="ref_code">Referral code</option>
                            <option value="binance">Binance</option>
                            <option value="bingx">BingX</option>
                            <option value="bybit">Bybit</option>
                            <option value="exness">Exness</option>
                            <option value="xm">XM</option>
                            <option value="mexc">MEXC</option>
                            <option value="okx">OKX</option>
                            <option value="bitget">Bitget</option>
                            <option value="gate">Gate</option>
                            <option value="kucoin">Kucoin</option>
                            <option value="lbank">LBank</option>
                        </select>
                        <button class="" id="btn_search_your_uid" type="submit">
                            <svg fill="#fff" width="20px" height="20px" viewBox="0 0 0.375 0.375" xmlns="http://www.w3.org/2000/svg" id="arrow">
                                <path d="M0.207 0.057a0.025 0.025 0 0 1 0.035 0l0.113 0.113a0.025 0.025 0 0 1 0 0.035l-0.113 0.113a0.025 0.025 0 0 1 -0.035 -0.035L0.275 0.213H0.038a0.025 0.025 0 0 1 0 -0.05H0.275L0.207 0.093a0.025 0.025 0 0 1 0 -0.035"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </nav>
            <div class="menu-overlay"></div>
        </div>
    </header>
    <?php // cashback_menu('main-menu') 
    ?>