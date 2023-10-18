<section id="content-section-5">
    <div class="greennature-color-wrapper  gdlr-show-all greennature-skin-service-half greennature-half-bg-wrapper"
        style="background-color: #f5f5f5; padding-bottom: 20px; ">
        <div class="greennature-half-bg greennature-bg-solid"
            style="background-image: url({{ $homePage->getFirstMediaUrl('green_nature_image') }});">
        </div>
        <div class="container">
            <div class="six columns">
                <div class="greennature-item greennature-content-item">
                </div>
            </div>
            <div class="six columns">
                <div class="greennature-item greennature-icon-with-list-item">
                    <div class="list-with-icon-ux greennature-ux">
                        <div class="list-with-icon greennature-left">
                            <div class="list-with-icon-image"><img
                                    src="{{ $homePage->getFirstMediaUrl('first_writing_image') }}" alt=""
                                    width="80" height="80" /></div>
                            <div class="list-with-icon-content">
                                <div class="list-with-icon-title greennature-skin-title">
                                    {{ $homePage->first_writing_title }}</div>
                                <div class="list-with-icon-caption">
                                    <p>{{ $homePage->first_writing_description }}</p>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="list-with-icon-ux greennature-ux">
                        <div class="list-with-icon greennature-left">
                            <div class="list-with-icon-image"><img
                                    src="{{ $homePage->getFirstMediaUrl('second_writing_image') }}" alt=""
                                    width="80" height="80" /></div>
                            <div class="list-with-icon-content">
                                <div class="list-with-icon-title greennature-skin-title">
                                    {{ $homePage->second_writing_title }}</div>
                                <div class="list-with-icon-caption">
                                    <p>{{ $homePage->second_writing_description }}</p>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="list-with-icon-ux greennature-ux">
                        <div class="list-with-icon greennature-left">
                            <div class="list-with-icon-image"><img
                                    src="{{ $homePage->getFirstMediaUrl('third_writing_image') }}" alt=""
                                    width="80" height="80" /></div>
                            <div class="list-with-icon-content">
                                <div class="list-with-icon-title greennature-skin-title">
                                    {{ $homePage->third_writing_title }}</div>
                                <div class="list-with-icon-caption">
                                    <p>{{ $homePage->third_writing_description }}.</p>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</section>
