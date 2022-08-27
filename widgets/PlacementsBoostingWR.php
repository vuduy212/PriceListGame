<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class PlacementsBoostingWR  extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Placements Boosting WR';
    }

    public function get_title()
    {
        return __('Placements Boosting WR', 'artisansweb-elementor-add-on');
    }

    public function get_icon()
    {
        return 'fa fa-sliders';
    }

    public function get_categories()
    {
        return ['general'];
    }


    public function get_script_depends()
    {

        wp_register_script('widget-script-1', plugins_url('assets/slide/js/owl.carousel.min.js', __DIR__));
        wp_register_script('js-file', plugins_url('assets/js.js', __DIR__));

        return [
            'widget-script-1',
            'js-file'
        ];
    }

    public function get_style_depends()
    {

        wp_register_style('widget-css-1', plugins_url('assets/slide/css/owl.carousel.min.css', __DIR__));
        wp_register_style('widget-css-2', plugins_url('assets/slide/css/owl.theme.default.min.css', __DIR__));
        wp_register_style('awesome-file', plugins_url('assets/Awesome/font-awesome.min.css', __DIR__));
        wp_register_style('css-file', plugins_url('assets/css.css', __DIR__));
        return [
            'widget-css-1',
            'widget-css-2',
            'awesome-file',
            'css-file'
        ];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Tab Header', 'artisansweb-elementor-add-on'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );





        $this->end_controls_section();
    }

    protected function render()
    {
        // generate the final HTML on the frontend using PHP
        $settings = $this->get_settings_for_display();
        if (true) {
?>

            <form action="https://boostingmarket.com/en/cart/3db9e85351f99b009944b68864a8afa0" method="post" class="row form formAjax formAjax-change align-items-start packDetails" id="formPack">
                <input type="hidden" name="basePathImg" value="/images/app/icons/packs_and_ranks/league-of-legends-boost/ranks/">
                <input type="hidden" name="imgRank" value="1">
                <input type="hidden" name="game_id" value="2">
                <input type="hidden" name="boosting_pack_id" value="10">
                <input type="hidden" name="isRedirect" value="0">
                <div class="col-12 col-lg-8 _py-5 _background--color-black-3 _border-left-radius-10">
                    <div class="row">
                        <div class="col-12 px-4 py-3 py-lg-5 background--color-black-3 border-left-radius-10">
                            <input type="hidden" name="platform" value="1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row wrap align-items-center">
                                        <div class="col-12">
                                            <div class="row align-items-center mb-3">
                                                <div class=" col-4 col-md-2  text-center">
                                                    <img src="" class="imgCurrentRank" loading="lazy">
                                                </div>
                                                <div class="col-12  col-md-10 ">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <div class="heading-2">
                                                                <span>Previous season</span> Rank
                                                            </div>
                                                            <p class="paragraph-4 color-grey">
                                                                Please select your Previous Season <span>Rank</span> and <span>Division</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3">
                                                <div class="col-12">
                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-12 col-md-6">
                                                            <fieldset>
                                                                <div class="form-select">
                                                                    <select class="form-control" name="current_rank" required="">
                                                                        <option value="">Select Rank *</option>
                                                                        <option value="10">Unranked</option>
                                                                        <option value="9">Iron</option>
                                                                        <option value="1">Bronze</option>
                                                                        <option value="2">Silver</option>
                                                                        <option value="3">Gold</option>
                                                                        <option value="4">Platinum</option>
                                                                        <option value="5">Diamond</option>
                                                                        <option value="6">Master +</option>
                                                                    </select>
                                                                </div>
                                                                <span class="invalid-feedback" role="alert"></span>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <fieldset class="checkVisibility">
                                                                <div class="form-select">
                                                                    <select class="form-control" name="current_division" required="">
                                                                        <option value="">Select Division *</option>
                                                                        <option value="2">IV</option>
                                                                        <option value="3">III</option>
                                                                        <option value="4">II</option>
                                                                        <option value="5">I</option>
                                                                    </select>
                                                                </div>
                                                                <span class="invalid-feedback" role="alert"></span>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-12 col-md-6">
                                                            <fieldset>
                                                                <div class="form-select">
                                                                    <select class="form-control" name="server" required="">
                                                                        <option value="">Select Server *</option>
                                                                        <option value="1">EUW</option>
                                                                        <option value="2">EUNE</option>
                                                                        <option value="3">NA</option>
                                                                        <option value="4">OCE</option>
                                                                        <option value="5">LAS</option>
                                                                        <option value="6">LAN</option>
                                                                        <option value="7">BR</option>
                                                                        <option value="8">CN</option>
                                                                        <option value="9">KR</option>
                                                                        <option value="10">RU</option>
                                                                        <option value="11">TR</option>
                                                                        <option value="12">JP</option>
                                                                        <option value="13">SG</option>
                                                                        <option value="14">TW</option>
                                                                        <option value="15">TH</option>
                                                                        <option value="16">VN</option>
                                                                        <option value="17">PH</option>
                                                                    </select>
                                                                </div>
                                                                <span class="invalid-feedback" role="alert"></span>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <fieldset>
                                                                <div class="form-select">
                                                                    <select class="form-control" name="queue" required="">
                                                                        <option value="">Select Queue *</option>
                                                                        <option value="1">Solo/Duo</option>
                                                                        <option value="2">Flex 5vs5</option>
                                                                    </select>
                                                                </div>
                                                                <span class="invalid-feedback" role="alert"></span>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-5">
                                                <div class="col-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <p class="heading-2">
                                                                Numbers of <span>Matches</span>
                                                            </p>
                                                        </div>
                                                        <div class="col-12 col-md-6 text-right">
                                                            <p class="heading-2">
                                                                <span class="currentWins">0</span> Matches
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row align-items-center rowRangeSlider">
                                                        <div class="col-2 d-none d-md-block text-center">
                                                            <button type="button" class="btn btn-secondary btn-block rangeSlider-remove">
                                                                -
                                                            </button>
                                                        </div>
                                                        <div class="col-12 col-md-8">
                                                            <div class="slider slider-horizontal" id="">
                                                                <div class="slider-track">
                                                                    <div class="slider-track-low" style="left: 0px; width: 0%;"></div>
                                                                    <div class="slider-selection" style="left: 0%; width: 0%;"></div>
                                                                    <div class="slider-track-high" style="right: 0px; width: 100%;"></div>
                                                                </div>
                                                                <div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="10" aria-valuenow="0" tabindex="0" style="left: 0%;"></div>
                                                                <div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="10" aria-valuenow="0" tabindex="0" style="left: 0%;"></div>
                                                            </div><input class="rangeSlider rangeSlider-single" type="text" name="games_total" data-value="0" value="0" style="display: none;">
                                                        </div>
                                                        <div class="col-2 d-none d-md-block text-center">
                                                            <button type="button" class="btn btn-secondary btn-block rangeSlider-add">
                                                                +
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <fieldset class="col-12 mb-0">
                                                    <div class="row align-items-center mb-3">
                                                        <div class="col-12 text-center">
                                                            <div class="heading-2">
                                                                <span>Spell Order</span>
                                                            </div>
                                                            <p class="paragraph-4">
                                                                Select your <span>Spell Order</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="col-auto form-check form-check-box">
                                                            <input type="radio" value="D" id="flash-d" name="flash">
                                                            <label for="flash-d">D-Flash</label>
                                                        </div>
                                                        <div class="col-auto form-check form-check-box">
                                                            <input type="radio" value="F" id="flash-f" name="flash">
                                                            <label for="flash-f">F-Flash</label>
                                                        </div>
                                                    </div>
                                                    <span class="invalid-feedback text-center" role="alert"></span>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <fieldset class="mb-0">
                                        <input type="hidden" name="amountcheck">
                                        <span class="invalid-feedback" role="alert"></span>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 _align-items-center _justify-content-center d-none d-lg-flex">
                        <div class="col-4 col-lg-auto mb-2 mb-lg-0 text-center px-2">
                            <img src="https://boostingmarket.com/images/app/elements/_paypal.svg" height="30px" width="104" loading="lazy" alt="PayPal">
                        </div>
                        <div class="col-4 col-lg-auto mb-2 mb-lg-0 text-center px-2">
                            <img src="https://boostingmarket.com/images/app/elements/_stripe.svg" height="30px" width="77" loading="lazy" alt="Stripe">
                        </div>
                        <div class="col-4 col-lg-auto mb-2 mb-lg-0 text-center px-2">
                            <img src="https://boostingmarket.com/images/app/elements/_visa.png" height="30px" width="122" loading="lazy" alt="Visa">
                        </div>
                        <div class="col-4 col-lg-auto mb-2 mb-lg-0 text-center px-2">
                            <img src="https://boostingmarket.com/images/app/elements/_ssl.svg" height="30px" width="51" loading="lazy" alt="SSL">
                        </div>
                        <div class="col-4 col-lg-auto mb-2 mb-lg-0 text-center px-2">
                            <img src="https://boostingmarket.com/images/app/payment_methods/skrill_w.png" height="30px" width="60" loading="lazy" alt="Skrill">
                        </div>
                        <div class="col-4 col-lg-auto mb-2 mb-lg-0 text-center px-2">
                            <img src="https://boostingmarket.com/images/app/payment_methods/coinbase_w.png" height="30px" width="66" loading="lazy" alt="Coinbase">
                        </div>
                        <div class="col-4 col-lg-auto mb-2 mb-lg-0 text-center px-2">
                            <img src="https://boostingmarket.com/images/app/payment_methods/paysafe_w.png" height="30px" width="75" loading="lazy" alt="Paysafe">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 pl-0 pr-0 pr-lg-3 cart_summary sticky-top" data-href="https://boostingmarket.com/en/cart-summary">
                    <div class="row mx-0">
                        <div class="col-12 px-0">
                            <div class="row mx-0 background--color-black-1">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 p-3 text-center">
                                            <h5 class="heading-2">Your Order</h5>
                                            <p class="paragraph-2 color-orange">
                                                Placements Boosting
                                            </p>
                                            <p class="paragraph-5">
                                                Gold I - 0 Game(s)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mx-0 background--color-black-5">
                                <div class="col-12 p-3">
                                    <div class="row">
                                        <div class="col-12 form-check form-check-switch mb-3">
                                            <input type="checkbox" name="extra_options[]" value="1" id="extraOption1">
                                            <label for="extraOption1" class="trackEvent" data-name="Live Streaming" data-action="click" data-category="customExtraOption">
                                                <span class="switcho "></span>
                                                Live Streaming
                                                <span class="color-orange ml-1">10%</span>
                                                <span class="tooltipe ml-1" data-toggle="tooltipe" data-placement="right" title="" tabindex="0" data-trigger="hover" data-original-title="Your order will be livestreamed by the booster assigned to it in a high quality for your leisure and peace of mind. (Not available if DuoQ has been previously selected)">
                                                    <i class="fa fa-info-circle"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-check form-check-switch mb-3">
                                            <input type="checkbox" name="extra_options[]" value="9" id="extraOption9">
                                            <label for="extraOption9" class="trackEvent" data-name="Booster Plays Alone" data-action="click" data-category="customExtraOption">
                                                <span class="switcho "></span>
                                                Booster Plays Alone
                                                <span class="color-orange ml-1">10%</span>
                                                <span class="tooltipe ml-1" data-toggle="tooltipe" data-placement="right" title="" tabindex="0" data-trigger="hover" data-original-title="Your order will be completed by the booster assigned to you alone without queuing up with other booster/player.">
                                                    <i class="fa fa-info-circle"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-check form-check-switch mb-3">
                                            <input type="checkbox" name="extra_options[]" value="14" id="extraOption14">
                                            <label for="extraOption14" class="trackEvent" data-name="Normalize Score" data-action="click" data-category="customExtraOption">
                                                <span class="switcho "></span>
                                                Normalize Score
                                                <span class="color-orange ml-1">10%</span>
                                                <span class="tooltipe ml-1" data-toggle="tooltipe" data-placement="right" title="" tabindex="0" data-trigger="hover" data-original-title="Your assigned booster will do his best to avoid irregular K/D/A’s in order to avoid suspicious looking account statistics.">
                                                    <i class="fa fa-info-circle"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-check form-check-switch mb-3">
                                            <input type="checkbox" name="extra_options[]" value="6" id="extraOption6">
                                            <label for="extraOption6" class="trackEvent" data-name="DuoQ" data-action="click" data-category="customExtraOption">
                                                <span class="switcho "></span>
                                                DuoQ
                                                <span class="color-orange ml-1">50%</span>
                                                <span class="tooltipe ml-1" data-toggle="tooltipe" data-placement="right" title="" tabindex="0" data-trigger="hover" data-original-title="Play in a Duo Queue with your booster while he is playing the purchased amount of games on an alternate account.">
                                                    <i class="fa fa-info-circle"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-check form-check-switch mb-3">
                                            <input type="checkbox" name="extra_options[]" value="13" id="extraOption13">
                                            <label for="extraOption13" class="trackEvent" data-name="Specific Roles/Champions" data-action="click" data-category="customExtraOption">
                                                <span class="switcho "></span>
                                                Specific Roles/Champions
                                                <span class="isFree color-orange ml-1">FREE</span>
                                                <span class="tooltipe ml-1" data-toggle="tooltipe" data-placement="right" title="" tabindex="0" data-trigger="hover" data-original-title="Your order shall be completed by the booster assigned to it using specific champions of your choice.">
                                                    <i class="fa fa-info-circle"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-check form-check-switch mb-3">
                                            <input type="checkbox" name="extra_options[]" value="3" id="extraOption3">
                                            <label for="extraOption3" class="trackEvent" data-name="Play Offline" data-action="click" data-category="customExtraOption">
                                                <span class="switcho "></span>
                                                Play Offline
                                                <span class="isFree color-orange ml-1">FREE</span>
                                                <span class="tooltipe ml-1" data-toggle="tooltipe" data-placement="right" title="" tabindex="0" data-trigger="hover" data-original-title="The booster will appear offline during your order progression">
                                                    <i class="fa fa-info-circle"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 form-check form-check-switch mb-3">
                                            <input type="checkbox" name="extra_options[]" value="19" id="extraOption19">
                                            <label for="extraOption19" class="trackEvent" data-name="Booster Vip" data-action="click" data-category="customExtraOption">
                                                <span class="switcho  switcho-vip "></span>
                                                Booster Vip
                                                <span class="isFree color-orange ml-1">FREE</span>
                                                <span class="tooltipe ml-1" data-toggle="tooltipe" data-placement="right" title="" tabindex="0" data-trigger="hover" data-original-title="Your order will be assigned to our team of Top Performing boosters only. You will be able to pick one of them in the checkout page. To check their achievements, go to &quot;Our Boosters&quot; page.">
                                                    <i class="fa fa-info-circle"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mx-0 background--color-black-5">
                                <div class="col-12 my-3">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-8">
                                            <fieldset class="m-0">
                                                <input type="text" class="form-control" name="discount" value="" placeholder="Coupon code">
                                            </fieldset>
                                        </div>
                                        <div class="col-4">
                                            <div class="row align-items-center justify-content-end">
                                                <div class="col-auto col-10 pr-1">
                                                    <a href="javascript: void(0);" class="btn btn-primary btn-small addCoupon" data-href="https://boostingmarket.com/en/cart/3db9e85351f99b009944b68864a8afa0/coupon/add">
                                                        Add
                                                    </a>
                                                </div>
                                                <div class="col-auto col-1 pl-1">
                                                    <span class="tooltipe" data-toggle="tooltipe" data-placement="right" title="" tabindex="0" data-trigger="hover" data-original-title="To get a promo code, all you need to do is leave a review for an order that has been completed for you!">
                                                        <i class="fa fa-info-circle"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mx-0 py-3  mb-3  background--color-black-2">
                                <div class="col-12 py-3">
                                    <div class="row mb-3 align-items-center justify-space-around">
                                        <div class="col-6 col-md-4 pr-1 mb-1 text-center">
                                            <p class="paragraph-4">
                                                <span class="price-currency color-white">
                                                    $
                                                </span>
                                                <span class="price-discount color-white strike">
                                                    <del>
                                                        0.00
                                                    </del>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col-6 col-md-4 py-1 mb-1 text-center text-truncate">
                                            <p class="heading-2">
                                                <span class="price-currency">
                                                    $
                                                </span>
                                                <span class="price-current">
                                                    0
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-4 pl-md-1 mb-1 text-center">
                                            <div class="form-select">
                                                <select class="form-control" name="currency" required="">
                                                    <option value="USD" selected="">USD</option>
                                                    <option value="EUR">EUR</option>
                                                    <option value="CAD">CAD</option>
                                                    <option value="AUD">AUD</option>
                                                    <option value="GBP">GBP</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-4 py-0 text-right">
                                            <p class="paragraph-4 color-grey-1">
                                                OR
                                            </p>
                                        </div>
                                        <div class="col-4 py-0 text-center">
                                            <p class="heading-2">
                                                <span class="price-coins icon-coins icon-coins-2 text-truncate">
                                                    0
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mx-0 py-3 mb-3">
                                <div class="col-12 text-center">
                                    <a href="https://boostingmarket.com/en/checkout" class="btn btn-primary goToCheckout">
                                        Next Step
                                    </a>
                                </div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-12 text-center">
                                    <p class="paragraph-4 p-1 pulse-animation">
                                        <span></span>
                                        Low queue: your order will start immediately.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

<?php
        }
    }
}
