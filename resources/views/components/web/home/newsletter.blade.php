<section id="content-section-7">
    <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all greennature-skin-newsletter"
        id="greennature-parallax-wrapper-2" data-bgspeed="0"
        style="background-image: url('/upload/newsletter-bg.jpg'); padding-top: 145px; padding-bottom: 60px; ">
        <div class="container">
            <div class="greennature-title-item" style="margin-bottom: 45px;">
                <div class="greennature-item-title-wrapper greennature-item  greennature-center greennature-large ">
                    <div class="greennature-item-title-container container">
                        <div class="greennature-item-title-head">
                            <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">
                                {{ $homePage->subscribe_title }}</h3>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="greennature-subscribe-item greennature-item">
                <div class="greennature-newsletter-subscribe">

                    <div class="newsletter newsletter-subscription">
                        <form method="post" action="#">
                            <input class="newsletter-email" type="email" name="ne" size="30" required
                                placeholder="Please fill your email" />
                            <input class="newsletter-submit greennature-button" type="submit"
                                value="{{ $homePage->subscribe_button }}" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</section>
