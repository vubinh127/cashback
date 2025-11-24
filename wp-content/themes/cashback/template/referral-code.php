<?php

/**
 * Template Name: Home
 */
get_header();
?>
<section class="block-refferal-id">
    <div class="container">
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
    </div>
</section>

<?php

get_footer();
