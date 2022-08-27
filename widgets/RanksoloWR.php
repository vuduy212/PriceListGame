<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class RanksoloWR  extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Rank Solo WR';
    }

    public function get_title()
    {
        return __('Rank Solo WR', 'artisansweb-elementor-add-on');
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

<form action="#" method="post" class="row form formAjax formAjax-change align-items-start packDetails" id="formPack">

<input type="hidden" name="basePathImg" value="/images/app/icons/packs_and_ranks/league-of-legends-boost/ranks/">
<input type="hidden" name="imgRank" value="1">
<input type="hidden" name="game_id" value="2">
<input type="hidden" name="boosting_pack_id" value="9">
<input type="hidden" name="isRedirect" value="0">

<div class="col-12 col-lg-8 _py-5 _background--color-black-3 _border-left-radius-10">
    <div class="row">
        <div class="col-12 px-4 py-3 py-lg-5 background--color-black-3 border-left-radius-10">
            <input type="hidden" name="platform" value="1">
            <div class="row">
                <div class="col-12">
                    <div class="row wrap _align-items-center">
                        <div class="col-12 ">
                            <div class="row align-items-center mb-3">
                                <div class=" col-4 col-md-2  text-center">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_9.webp', __DIR__) ?>" class="imgCurrentRank" id="rank_9" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_1.webp', __DIR__) ?>" class="imgCurrentRank" id="rank_1" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_2.webp', __DIR__) ?>" class="imgCurrentRank" id="rank_2" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_3.webp', __DIR__) ?>" class="imgCurrentRank" id="rank_3" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_4.webp', __DIR__) ?>" class="imgCurrentRank" id="rank_4" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_5.webp', __DIR__) ?>" class="imgCurrentRank" id="rank_5" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_6.webp', __DIR__) ?>" class="imgCurrentRank" id="rank_6" loading="lazy">
                                </div>
                                <div class="col-12  col-md-10 ">
                                    <div class="heading-2">
                                        <span>Current</span> Rank
                                    </div>
                                    <p class="paragraph-4 color-grey">
                                        Please select your Current <span>Rank</span> and <span>Division</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center mb-4">
                                <div class="col-12  col-md-4 ">
                                    <fieldset>
                                        <div class="form-select">
                                            <select class="form-control" name="current_rank" class="current_rank" required="">
                                                <option value="">Select Rank *</option>
                                                <option value="9">Iron</option>
                                                <option value="1">Bronze</option>
                                                <option value="2">Silver</option>
                                                <option value="3">Gold</option>
                                                <option value="4">Platinum</option>
                                                <option value="5">Diamond</option>
                                                <option value="6">Master +</option>
                                                <option value="7">GrandMaster</option>
                                            </select>
                                        </div>
                                        <span class="invalid-feedback" role="alert"></span>
                                    </fieldset>
                                </div>
                                <div class="col-12  col-md-4  checkVisibility">
                                    <fieldset class="">
                                        <div class="form-select">
                                            <select class="form-control" name="current_division" required="">
                                                <option value="">Select Division *</option>
                                                <option value="4">IV</option>
                                                <option value="3">III</option>
                                                <option value="2">II</option>
                                                <option value="1">I</option>
                                            </select>
                                        </div>
                                        <span class="invalid-feedback" role="alert"></span>
                                    </fieldset>
                                </div>
                                <div class="col-12  col-md-4  checkVisibility">
                                    <fieldset class="">
                                        <div class="form-select">
                                            <select class="form-control" name="current_elo" required="">
                                                <option value="">Select Elo LP *</option>
                                                <option value="80">1-9</option>
                                                <option value="40">10-14</option>
                                                <option value="20">15-17</option>
                                                <option value="0">18-24</option>
                                            </select>
                                        </div>
                                        <span class="invalid-feedback" role="alert"></span>
                                    </fieldset>
                                </div>
                                <div class="col-12  col-md-6  checkVisibility d-none">
                                    <div class="row align-items-center">
                                        <div class="col-7 text-right d-none d-md-block">
                                            <fieldset>
                                                <p class="paragraph-4">
                                                    Select Current LP *
                                                </p>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <fieldset>
                                                <input type="number" class="form-control text-center" name="current_lp_master" placeholder="" value="0" _min="0" max="470" required="">
                                                <span class="invalid-feedback" role="alert"></span>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="row align-items-center mb-3">
                                <div class=" col-4 col-md-2  text-center">
                                    <img src="" class="imgDesiredRank" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_9.webp', __DIR__) ?>" class="imgDesiredRank" id="rankdivi_9" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_1.webp', __DIR__) ?>" class="imgDesiredRank" id="rankdivi_1" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_2.webp', __DIR__) ?>" class="imgDesiredRank" id="rankdivi_2" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_3.webp', __DIR__) ?>" class="imgDesiredRank" id="rankdivi_3" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_4.webp', __DIR__) ?>" class="imgDesiredRank" id="rankdivi_4" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_5.webp', __DIR__) ?>" class="imgDesiredRank" id="rankdivi_5" loading="lazy">
                                    <img src="<?php echo plugins_url('assets/ImageRank/rank_6.webp', __DIR__) ?>" class="imgDesiredRank" id="rankdivi_6" loading="lazy">
                                </div>
                                <div class="col-12  col-md-10 ">
                                    <div class="heading-2">
                                        <span>Desired</span> Rank
                                    </div>
                                    <p class="paragraph-4 color-grey">
                                        Please select your Desired <span>Rank</span> and <span>Division</span>
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center mb-4">
                                <div class="col-12  col-md-6 ">
                                    <fieldset>
                                        <div class="form-select">
                                            <select class="form-control" name="desired_rank" required="">
                                                <option value="">Select Rank *</option>
                                                <option value="9">Iron</option>
                                                <option value="1">Bronze</option>
                                                <option value="2">Silver</option>
                                                <option value="3">Gold</option>
                                                <option value="4">Platinum</option>
                                                <option value="5">Diamond</option>
                                                <option value="6">Master +</option>
                                                <option value="7">GrandMaster</option>
                                                <option value="8">Thách đấu</option>
                                            </select>
                                        </div>
                                        <span class="invalid-feedback" role="alert"></span>
                                    </fieldset>
                                </div>
                                <div class="col-12  col-md-6 checkVisibility">
                                    <fieldset>
                                        <div class="form-select">
                                            <select class="form-control" name="desired_division" required="">
                                                <option value="">Select Division *</option>
                                                <option value="4">IV</option>
                                                <option value="3">III</option>
                                                <option value="2">II</option>
                                                <option value="1">I</option>
                                            </select>
                                        </div>
                                        <span class="invalid-feedback" role="alert"></span>
                                    </fieldset>
                                </div>
                                <div class="col-12  col-md-7  checkVisibility d-none">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-7 text-right d-none d-md-block">
                                            <fieldset>
                                                <p class="paragraph-4">
                                                    Select Desired LP *
                                                </p>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <fieldset>
                                                <input type="number" class="form-control text-center" name="desired_lp_master" placeholder="" value="30" _min="30" max="30" required="">
                                                <span class="invalid-feedback" role="alert"></span>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-6">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-12">
                                            <div class="heading-2">
                                                <span>Options</span>
                                            </div>
                                            <p class="paragraph-4 color-grey">
                                                Please select your <span>Server</span> and <span>Queue</span> type
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12  col-md-6 ">
                                            <fieldset>
                                                <div class="form-select">
                                                    <select class="form-control" name="server" required="">
                                                        <option value="">Select Server *</option>
                                                        <option value="1">EUW</option>
                                                        <option value="2">EUNE</option>
                                                        <option value="3">NA</option>
                                                    </select>
                                                </div>
                                                <span class="invalid-feedback" role="alert"></span>
                                            </fieldset>
                                        </div>
                                        <div class="col-12  col-md-6 ">
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
<div class="col-12 col-lg-4 pl-0 pr-0 pr-lg-3 cart_summary sticky-top" >
    <div class="row mx-0">
        <div class="col-12 px-0">
            <div class="row mx-0 background--color-black-1">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 p-3 text-center">
                            <h5 class="heading-2">Your Order</h5>
                            <p class="paragraph-2 color-orange">
                                Division Boosting
                            </p>
                            <!-- <p class="paragraph-5">
                                Iron &gt; Bronze III
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0 background--color-black-3 py-2 align-items-center">
                <div class="col-12 text-center">
                    <p class="paragraph-6">
                        Approximate completion time: <span>1 day(s) 18h </span>
                    </p>
                </div>
            </div>

            <div class="row mx-0 background--color-black-5 gettotal_sale">
                <div class="col-12 p-3">
                    <div class="row">
                        <div class="col-12 form-check form-check-switch mb-3">
                            <input type="checkbox" name="extraboost" value="10" id="extraOption1">
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
                            <input type="checkbox" name="extraboost" value="10" id="extraOption9">
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
                            <input type="checkbox" name="extraboost" value="10" id="extraOption14">
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
                            <input type="checkbox" name="extraboost" value="0" id="extraOption13">
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
                            <input type="checkbox" name="extraboost" value="0" id="extraOption3">
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
                            <input type="checkbox" name="extraboost" value="0" id="extraOption19">
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
                                <input type="text" class="form-control" name="discount" data-coupon="0"  placeholder="Coupon code">
                            </fieldset>
                        </div>
                        <div class="col-4">
                            <div class="row align-items-center justify-content-end">
                                <div class="col-auto col-10 pr-1">
                                    <a href="javascript: void(0);" class="btn btn-primary btn-small getCode addCoupon" data-href="https://boostingmarket.com/en/cart/3db9e85351f99b009944b68864a8afa0/coupon/add">
                                        Add
                                    </a>
                                </div>
                                <div class="col-auto col-1 pl-1">
                                    <span class="tooltipe" data-toggle="tooltipe" data-placement="right" title="" tabindex="0" data-trigger="hover" data-original-title="To get a promo code, all you need to do is leave a review for an order that has been completed for you!">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div>
                                <div class="test-ajak">

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
                                <a  class="btn btn-primary btn-small addCoupon checkPrice" >
                                    Check Price
                                </a>
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
                    <a href="#" class="btn btn-primary goToCheckout">
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
