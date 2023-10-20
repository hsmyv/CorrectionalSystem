<section id="content-section-3">
    <div class="greennature-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; ">
        <div class="container">
            <div class="six columns">
                <div class="greennature-video-item greennature-item">
                    <video src="{{ asset('storage/' . $servicePage->middle_section_video) }}" width="620"
                        height="348" controls></video>
                </div>
            </div>
            <div class="six columns">
                <div class="greennature-item greennature-about-us-item greennature-normal">
                    <div class="about-us-title-wrapper">
                        <h3 class="about-us-title"> {{ $servicePage->middle_section_title }}</h3>
                        <div class="about-us-caption greennature-title-font greennature-skin-info">
                            {{ $servicePage->middle_section_excerpt }}</div>
                        <div class="about-us-title-divider"></div>
                    </div>
                    <div class="about-us-content-wrapper">
                        <div class="about-us-content greennature-skin-content">
                            <p> {{ $servicePage->middle_section_content }}</p>

                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
</section>
