<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class ChampionMasteryLol  extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'Champion Mastery Lol';
    }

    public function get_title()
    {
        return __('Champion Mastery Lol', 'artisansweb-elementor-add-on');
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
                <input type="hidden" name="basePathImg" value="/images/app/icons/packs_and_ranks/league-of-legends-boost/champion-mastery-icons/">
                <input type="hidden" name="imgRank" value="1">
                <input type="hidden" name="game_id" value="2">
                <input type="hidden" name="boosting_pack_id" value="13">
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
                                                <div class="col-12 text-center">
                                                    <div class="heading-2">
                                                        Current and Desired <span>Tier</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-end justify-content-center mb-5">
                                                <div class="col-12 col-md-6">
                                                    <div class="row justify-content-center">
                                                        <div class=" col-4  text-center">
                                                            <img src="" class="imgCurrentRank" loading="lazy">
                                                        </div>
                                                        <div class="col-12 text-center mb-3">
                                                            <p class="paragraph-4">
                                                                Please select your current <span>Tier</span>
                                                            </p>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-select">
                                                                <select class="form-control" name="current_tier" required="">
                                                                    <option value="">Select Tier *</option>
                                                                    <option value="1">Tier 1</option>
                                                                    <option value="2">Tier 2</option>
                                                                    <option value="3">Tier 3</option>
                                                                    <option value="4">Tier 4</option>
                                                                    <option value="5">Tier 5</option>
                                                                    <option value="6">Tier 6</option>
                                                                    <option value="7">Tier 7</option>
                                                                </select>
                                                            </div>
                                                            <span class="invalid-feedback" role="alert"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="row justify-content-center">
                                                        <div class=" col-4  text-center">
                                                            <img src="" class="imgDesiredRank" loading="lazy">
                                                        </div>
                                                        <div class="col-12 text-center mb-3">
                                                            <p class="paragraph-4">
                                                                Please select your desired <span>Tier</span>
                                                            </p>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-select">
                                                                <select class="form-control" name="desired_tier" required="">
                                                                    <option value="">Select Tier *</option>
                                                                    <option value="1">Tier 1</option>
                                                                    <option value="2">Tier 2</option>
                                                                    <option value="3">Tier 3</option>
                                                                    <option value="4">Tier 4</option>
                                                                    <option value="5">Tier 5</option>
                                                                    <option value="6">Tier 6</option>
                                                                    <option value="7">Tier 7</option>
                                                                </select>
                                                            </div>
                                                            <span class="invalid-feedback" role="alert"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-12 col-md-4 mb-3 text-center">
                                                    <img src="" class="imgChampion" loading="lazy">
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <fieldset>
                                                                <div class="form-select">
                                                                    <select class="form-control" name="champion" required="">
                                                                        <option value="">Select Champion *</option>
                                                                        <option value="32" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/aatrox.jpg">Aatrox</option>
                                                                        <option value="33" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/ahri.jpg">Ahri</option>
                                                                        <option value="34" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/akali.jpg">Akali</option>
                                                                        <option value="533" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/akshan.png">Akshan</option>
                                                                        <option value="35" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/alistar.jpg">Alistar</option>
                                                                        <option value="36" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/amumu.jpg">Amumu</option>
                                                                        <option value="37" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/anivia.jpg">Anivia</option>
                                                                        <option value="38" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/annie.jpg">Annie</option>
                                                                        <option value="188" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/aphelios.jpg">Aphelios</option>
                                                                        <option value="39" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/ashe.jpg">Ashe</option>
                                                                        <option value="40" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/aurelionsol.jpg">AurelionSol</option>
                                                                        <option value="41" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/azir.jpg">Azir</option>
                                                                        <option value="42" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/bard.jpg">Bard</option>
                                                                        <option value="760" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/bel-veth.png">Bel'Veth</option>
                                                                        <option value="43" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/blitzcrank.jpg">Blitzcrank</option>
                                                                        <option value="44" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/brand.jpg">Brand</option>
                                                                        <option value="45" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/braum.jpg">Braum</option>
                                                                        <option value="46" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/caitlyn.jpg">Caitlyn</option>
                                                                        <option value="47" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/camille.jpg">Camille</option>
                                                                        <option value="48" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/cassiopeia.jpg">Cassiopeia</option>
                                                                        <option value="49" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/chogath.jpg">Chogath</option>
                                                                        <option value="50" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/corki.jpg">Corki</option>
                                                                        <option value="51" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/darius.jpg">Darius</option>
                                                                        <option value="52" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/diana.jpg">Diana</option>
                                                                        <option value="54" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/draven.jpg">Draven</option>
                                                                        <option value="53" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/drmundo.jpg">DrMundo</option>
                                                                        <option value="55" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/ekko.jpg">Ekko</option>
                                                                        <option value="56" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/elise.jpg">Elise</option>
                                                                        <option value="57" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/evelynn.jpg">Evelynn</option>
                                                                        <option value="58" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/ezreal.jpg">Ezreal</option>
                                                                        <option value="59" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/fiddlesticks.jpg">Fiddlesticks</option>
                                                                        <option value="60" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/fiora.jpg">Fiora</option>
                                                                        <option value="61" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/fizz.jpg">Fizz</option>
                                                                        <option value="62" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/galio.jpg">Galio</option>
                                                                        <option value="63" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/gangplank.jpg">Gangplank</option>
                                                                        <option value="64" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/garen.jpg">Garen</option>
                                                                        <option value="65" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/gnar.jpg">Gnar</option>
                                                                        <option value="66" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/gragas.jpg">Gragas</option>
                                                                        <option value="67" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/graves.jpg">Graves</option>
                                                                        <option value="471" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/gwen.png">Gwen</option>
                                                                        <option value="68" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/hecarim.jpg">Hecarim</option>
                                                                        <option value="69" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/heimerdinger.jpg">Heimerdinger</option>
                                                                        <option value="70" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/illaoi.jpg">Illaoi</option>
                                                                        <option value="71" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/irelia.jpg">Irelia</option>
                                                                        <option value="72" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/ivern.jpg">Ivern</option>
                                                                        <option value="73" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/janna.jpg">Janna</option>
                                                                        <option value="74" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/jarvaniv.jpg">JarvanIV</option>
                                                                        <option value="75" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/jax.jpg">Jax</option>
                                                                        <option value="76" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/jayce.jpg">Jayce</option>
                                                                        <option value="77" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/jhin.jpg">Jhin</option>
                                                                        <option value="78" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/jinx.jpg">Jinx</option>
                                                                        <option value="79" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/kaisa.jpg">Kaisa</option>
                                                                        <option value="80" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/kalista.jpg">Kalista</option>
                                                                        <option value="81" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/karma.jpg">Karma</option>
                                                                        <option value="82" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/karthus.jpg">Karthus</option>
                                                                        <option value="83" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/kassadin.jpg">Kassadin</option>
                                                                        <option value="84" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/katarina.jpg">Katarina</option>
                                                                        <option value="85" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/kayle.jpg">Kayle</option>
                                                                        <option value="86" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/kayn.jpg">Kayn</option>
                                                                        <option value="87" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/kennen.jpg">Kennen</option>
                                                                        <option value="88" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/khazix.jpg">Khazix</option>
                                                                        <option value="89" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/kindred.jpg">Kindred</option>
                                                                        <option value="90" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/kled.jpg">Kled</option>
                                                                        <option value="91" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/kogmaw.jpg">KogMaw</option>
                                                                        <option value="92" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/leblanc.jpg">Leblanc</option>
                                                                        <option value="93" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/leesin.jpg">LeeSin</option>
                                                                        <option value="94" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/leona.jpg">Leona</option>
                                                                        <option value="208" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/lillia.jpg">Lillia</option>
                                                                        <option value="95" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/lissandra.jpg">Lissandra</option>
                                                                        <option value="96" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/lucian.jpg">Lucian</option>
                                                                        <option value="97" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/lulu.jpg">Lulu</option>
                                                                        <option value="98" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/lux.jpg">Lux</option>
                                                                        <option value="99" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/malphite.jpg">Malphite</option>
                                                                        <option value="100" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/malzahar.jpg">Malzahar</option>
                                                                        <option value="101" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/maokai.jpg">Maokai</option>
                                                                        <option value="102" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/masteryi.jpg">MasterYi</option>
                                                                        <option value="103" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/missfortune.jpg">MissFortune</option>
                                                                        <option value="104" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/mordekaiser.jpg">Mordekaiser</option>
                                                                        <option value="105" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/morgana.jpg">Morgana</option>
                                                                        <option value="106" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/nami.jpg">Nami</option>
                                                                        <option value="107" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/nasus.jpg">Nasus</option>
                                                                        <option value="108" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/nautilus.jpg">Nautilus</option>
                                                                        <option value="173" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/neeko.jpg">Neeko</option>
                                                                        <option value="109" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/nidalee.jpg">Nidalee</option>
                                                                        <option value="759" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/nilah.png">Nilah</option>
                                                                        <option value="110" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/nocturne.jpg">Nocturne</option>
                                                                        <option value="111" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/nunu.jpg">Nunu</option>
                                                                        <option value="112" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/olaf.jpg">Olaf</option>
                                                                        <option value="113" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/orianna.jpg">Orianna</option>
                                                                        <option value="114" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/ornn.jpg">Ornn</option>
                                                                        <option value="115" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/pantheon.jpg">Pantheon</option>
                                                                        <option value="116" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/poppy.jpg">Poppy</option>
                                                                        <option value="172" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/pyke.jpg">Pyke</option>
                                                                        <option value="189" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/qiyana.jpg">Qiyana</option>
                                                                        <option value="117" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/quinn.jpg">Quinn</option>
                                                                        <option value="118" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/rakan.jpg">Rakan</option>
                                                                        <option value="119" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/rammus.jpg">Rammus</option>
                                                                        <option value="120" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/reksai.jpg">RekSai</option>
                                                                        <option value="212" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/rell.jpg">Rell</option>
                                                                        <option value="543" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/renata-glasc.png">Renata Glasc</option>
                                                                        <option value="121" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/renekton.jpg">Renekton</option>
                                                                        <option value="122" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/rengar.jpg">Rengar</option>
                                                                        <option value="123" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/riven.jpg">Riven</option>
                                                                        <option value="124" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/rumble.jpg">Rumble</option>
                                                                        <option value="125" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/ryze.jpg">Ryze</option>
                                                                        <option value="213" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/samira.jpg">Samira</option>
                                                                        <option value="126" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/sejuani.jpg">Sejuani</option>
                                                                        <option value="190" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/senna.jpg">Senna</option>
                                                                        <option value="211" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/seraphine.jpg">Seraphine</option>
                                                                        <option value="191" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/sett.jpg">Sett</option>
                                                                        <option value="127" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/shaco.jpg">Shaco</option>
                                                                        <option value="128" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/shen.jpg">Shen</option>
                                                                        <option value="129" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/shyvana.jpg">Shyvana</option>
                                                                        <option value="130" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/singed.jpg">Singed</option>
                                                                        <option value="131" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/sion.jpg">Sion</option>
                                                                        <option value="132" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/sivir.jpg">Sivir</option>
                                                                        <option value="133" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/skarner.jpg">Skarner</option>
                                                                        <option value="134" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/sona.jpg">Sona</option>
                                                                        <option value="135" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/soraka.jpg">Soraka</option>
                                                                        <option value="136" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/swain.jpg">Swain</option>
                                                                        <option value="174" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/sylas.jpg">Sylas</option>
                                                                        <option value="137" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/syndra.jpg">Syndra</option>
                                                                        <option value="138" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/tahmkench.jpg">TahmKench</option>
                                                                        <option value="139" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/taliyah.jpg">Taliyah</option>
                                                                        <option value="140" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/talon.jpg">Talon</option>
                                                                        <option value="141" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/taric.jpg">Taric</option>
                                                                        <option value="142" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/teemo.jpg">Teemo</option>
                                                                        <option value="143" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/thresh.jpg">Thresh</option>
                                                                        <option value="144" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/tristana.jpg">Tristana</option>
                                                                        <option value="145" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/trundle.jpg">Trundle</option>
                                                                        <option value="146" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/tryndamere.jpg">Tryndamere</option>
                                                                        <option value="147" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/twistedfate.jpg">TwistedFate</option>
                                                                        <option value="148" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/twitch.jpg">Twitch</option>
                                                                        <option value="149" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/udyr.jpg">Udyr</option>
                                                                        <option value="150" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/urgot.jpg">Urgot</option>
                                                                        <option value="151" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/varus.jpg">Varus</option>
                                                                        <option value="152" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/vayne.jpg">Vayne</option>
                                                                        <option value="153" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/veigar.jpg">Veigar</option>
                                                                        <option value="154" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/velkoz.jpg">Velkoz</option>
                                                                        <option value="535" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/vex.png">Vex</option>
                                                                        <option value="155" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/vi.jpg">Vi</option>
                                                                        <option value="218" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/viego.jpg">Viego</option>
                                                                        <option value="156" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/viktor.jpg">Viktor</option>
                                                                        <option value="157" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/vladimir.jpg">Vladimir</option>
                                                                        <option value="158" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/volibear.jpg">Volibear</option>
                                                                        <option value="159" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/warwick.jpg">Warwick</option>
                                                                        <option value="160" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/monkeyking.jpg">Wukong</option>
                                                                        <option value="161" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/xayah.jpg">Xayah</option>
                                                                        <option value="162" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/xerath.jpg">Xerath</option>
                                                                        <option value="163" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/xinzhao.jpg">XinZhao</option>
                                                                        <option value="164" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/yasuo.jpg">Yasuo</option>
                                                                        <option value="207" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/yone.jpg">Yone</option>
                                                                        <option value="165" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/yorick.jpg">Yorick</option>
                                                                        <option value="192" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/yuumi.jpg">Yuumi</option>
                                                                        <option value="166" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/zac.jpg">Zac</option>
                                                                        <option value="167" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/zed.jpg">Zed</option>
                                                                        <option value="542" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/zeri.png">Zeri</option>
                                                                        <option value="168" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/ziggs.jpg">Ziggs</option>
                                                                        <option value="169" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/zilean.jpg">Zilean</option>
                                                                        <option value="170" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/zoe.jpg">Zoe</option>
                                                                        <option value="171" data-image="/images/app/icons/packs_and_ranks/league-of-legends-boost/heroes/zyra.jpg">Zyra</option>
                                                                    </select>
                                                                </div>
                                                                <span class="invalid-feedback" role="alert"></span>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
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
                <div class="col-12 col-lg-4 pl-0 pr-0 pr-lg-3 cart_summary sticky-top" data-href="https://boostingmarket.com/en/cart-summary">
                    <div class="row mx-0">
                        <div class="col-12 px-0">
                            <div class="row mx-0 background--color-black-1">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 p-3 text-center">
                                            <h5 class="heading-2">Your Order</h5>
                                            <p class="paragraph-2 color-orange">
                                                Champion Mastery
                                            </p>
                                            <p class="paragraph-5">
                                                Tier 3 &gt; Tier 3 -
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
