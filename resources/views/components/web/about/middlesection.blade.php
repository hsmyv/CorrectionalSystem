<section id="content-section-2">
    <div class="greennature-color-wrapper  gdlr-show-all no-skin greennature-half-bg-wrapper"
        style="background-color: #ffffff; ">
        <div class="greennature-half-bg greennature-bg-solid"
            style="background-image: url({{ $aboutPage->getFirstMediaUrl('middle_section_image') }});"></div>
        <div class="container">
            <div class="six columns"></div>
            <div class="six columns">
                <div class="greennature-item greennature-about-us-item greennature-normal">
                    <div class="about-us-title-wrapper">
                        <h3 class="about-us-title">{{ $aboutPage->middle_section_title }}</h3>
                        <div class="about-us-caption greennature-title-font greennature-skin-info">{{ $aboutPage->middle_section_description }}</div>
                        <div class="about-us-title-divider"></div>
                    </div>
                    <div class="about-us-content-wrapper">
                        {{-- content databazad string kimidir deyi text ele adminden melumati elave ve hemcinin sekil de elave ele--}}
                        <div class="about-us-content greennature-skin-content">
                            <p>{{ $aboutPage->middle_section_content }}</p>
                        </div><a class="about-us-read-more greennature-button" href="#">Read
                            More</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</section>
