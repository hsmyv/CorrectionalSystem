<x-admin.layout>

    <!-- header start -->
    <x-admin.header />
    <!-- header end -->
    <!-- Left sidebar menu start -->
    <div class="ttr-sidebar">
        <div class="ttr-sidebar-wrapper content-scroll">
            <!-- side menu logo start -->
            <div class="ttr-sidebar-logo">
                <a href="#"><img alt="" src="../admin/assets/images/logo.png" width="122"
                        height="27"></a>
                <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
     <i class="material-icons ttr-fixed-icon">gps_fixed</i>
     <i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
    </div> -->
                <div class="ttr-sidebar-toggle-button">
                    <i class="ti-arrow-left"></i>
                </div>
            </div>
            <!-- side menu logo end -->
            <!-- sidebar menu start -->
            <x-admin.dashboard.sidebar />
            <!-- sidebar menu end -->
        </div>
    </div>
    <!-- Left sidebar menu end -->

    <!--Main container start -->
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">{{ setActiveBreadcrumb('admin.home.index', 'Home') }}</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>{{ setActiveBreadcrumb('admin.home.index', 'Home') }}</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>{{ setActiveBreadcrumb('admin.home.index', 'Home') }}</h4>
                        </div>
                        <div class="widget-inner">
                            <form class="edit-profile m-b30" method="POST" action="{{ route('admin.home.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>1. Slide Details</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>First Slide</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">First Slide's first word</label>
                                        <div>
                                            <input name="first_slide_first_word" class="form-control" type="text"
                                                value="{{ old('first_slide_first_word', $homePage->first_slide_first_word) }}">
                                        </div>

                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">First Slide's second word</label>
                                        <div>
                                            <input name="first_slide_second_word" class="form-control" type="text"
                                                value="{{ old('first_slide_second_word', $homePage->first_slide_second_word) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">First Slide's third word</label>
                                        <div>
                                            <input name="first_slide_third_word" class="form-control" type="text"
                                                value="{{ old('first_slide_third_word', $homePage->first_slide_third_word) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">First Slide's button</label>
                                        <div>
                                            <input name="first_slide_button" class="form-control" type="text"
                                                value="{{ old('first_slide_button', $homePage->first_slide_button) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">First Slide's Image</label>
                                        <div>
                                            <input name="first_slide_image" class="form-control" type="file">
                                        </div>
                                    </div>

                                    <div class="seperator"></div>
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>Second Slide</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Second Slide's first word</label>
                                        <div>
                                            <input name="second_slide_first_word" class="form-control" type="text"
                                                value="{{ old('second_slide_first_word', $homePage->second_slide_first_word) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Second Slide's second word</label>
                                        <div>
                                            <input name="second_slide_second_word" class="form-control" type="text"
                                                value="{{ old('second_slide_second_word', $homePage->second_slide_second_word) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Second Slide's third word</label>
                                        <div>
                                            <input name="second_slide_third_word" class="form-control" type="text"
                                                value="{{ old('second_slide_third_word', $homePage->second_slide_third_word) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Second Slide's button</label>
                                        <div>
                                            <input name="second_slide_button" class="form-control" type="text"
                                                value="{{ old('second_slide_button', $homePage->second_slide_button) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Second Slide's Image</label>
                                        <div>
                                            <input name="second_slide_image" class="form-control" type="file">
                                        </div>
                                    </div>

                                    <div class="seperator"></div>
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>Third Slide</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Third Slide's first word</label>
                                        <div>
                                            <input name="third_slide_first_word" class="form-control" type="text"
                                                value="{{ old('third_slide_first_word', $homePage->third_slide_first_word) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Third Slide's second word</label>
                                        <div>
                                            <input name="third_slide_second_word" class="form-control" type="text"
                                                value="{{ old('third_slide_second_word', $homePage->third_slide_second_word) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Third Slide's Image</label>
                                        <div>
                                            <input name="third_slide_image" class="form-control" type="file">
                                        </div>
                                    </div>
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto m-b2">
                                            <h3>2. Feature</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Features' button (EN)</label>
                                        <div>
                                            <input name="features_button" class="form-control" type="text"
                                                value="{{ old('features_button', $homePage->features_button) }}">
                                        </div>
                                    </div>
                                    {{-- Datas will come from services --}}


                                    <div
                                        class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                    </div>

                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">3. Donate Details</h3>
                                        </div>
                                    </div>
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">Donate</h3>
                                        </div>
                                    </div>

                                    <div class="form-group col-3">
                                        <label class="col-form-label">Title</label>
                                        <div>
                                            <input name="donate_title" class="form-control" type="text"
                                                value="{{ old('donate_title', $homePage->donate_title) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Excerpt</label>
                                        <div>
                                            <input name="donate_excerpt" class="form-control" type="text"
                                                value="{{ old('donate_excerpt', $homePage->donate_excerpt) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Button</label>
                                        <div>
                                            <input name="donate_button" class="form-control" type="text"
                                                value="{{ old('donate_button', $homePage->donate_button) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Content</label>
                                        <div>
                                            <textarea name="donate_content" class="form-control" type="text"
                                                value="{{ old('donate_content', $homePage->donate_content) }}">{{ old('donate_content', $homePage->donate_content) }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">Act</h3>
                                        </div>
                                    </div>

                                    <div class="form-group col-3">
                                        <label class="col-form-label">Title</label>
                                        <div>
                                            <input name="act_title" class="form-control" type="text"
                                                value="{{ old('act_title', $homePage->act_title) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Excerpt</label>
                                        <div>
                                            <input name="act_excerpt" class="form-control" type="text"
                                                value="{{ old('act_excerpt', $homePage->act_excerpt) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Button</label>
                                        <div>
                                            <input name="act_button" class="form-control" type="text"
                                                value="{{ old('act_button', $homePage->act_button) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Content</label>
                                        <div>
                                            <textarea name="act_content" class="form-control" type="text"
                                                value="{{ old('act_content', $homePage->act_content) }}">{{ old('act_content', $homePage->act_content) }}</textarea>
                                        </div>
                                    </div>
                                    <div
                                        class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                    </div>

                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">4. Recent Project Details</h3>
                                            {{-- Datas will come from projects --}}
                                        </div>
                                    </div>
                                    <div
                                        class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                    </div>

                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">5. Twitter Details</h3>
                                            {{-- Datas will come from twitter table --}}
                                        </div>
                                    </div>
                                    <div
                                        class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                    </div>

                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">5. Green Nature Details</h3>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>Main Image</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Main Image</label>
                                        <div>
                                            <input name="green_nature_image" class="form-control" type="file">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>First Writing</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">First Writing's title</label>
                                        <div>
                                            <input name="first_writing_title" class="form-control" type="text"
                                                value="{{ old('first_writing_title', $homePage->first_writing_title) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">First Writing's description</label>
                                        <div>
                                            <input name="first_writing_description" class="form-control"
                                                type="text"
                                                value="{{ old('first_writing_description', $homePage->first_writing_description) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">First Writing's Image</label>
                                        <div>
                                            <input name="first_writing_image" class="form-control" type="file">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>Second Writing</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Second Writing's title</label>
                                        <div>
                                            <input name="second_writing_title" class="form-control" type="text"
                                                value="{{ old('second_writing_title', $homePage->second_writing_title) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Second Writing's description</label>
                                        <div>
                                            <input name="second_writing_description" class="form-control"
                                                type="text"
                                                value="{{ old('second_writing_description', $homePage->second_writing_description) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Second Writing's Image</label>
                                        <div>
                                            <input name="second_writing_image" class="form-control" type="file">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>Third Writing</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Third Writing's title</label>
                                        <div>
                                            <input name="third_writing_title" class="form-control" type="text"
                                                value="{{ old('third_writing_title', $homePage->third_writing_title) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Third Writing's description</label>
                                        <div>
                                            <input name="third_writing_description" class="form-control"
                                                type="text"
                                                value="I{{ old('third_writing_description', $homePage->third_writing_description) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Third Writing's Image</label>
                                        <div>
                                            <input name="third_writing_image" class="form-control" type="file">
                                        </div>
                                    </div>
                                    <div
                                        class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                    </div>

                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">5. Subscribe To Newsletter Details</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Subscribe To Newsletter's title</label>
                                        <div>
                                            <input name="subscribe_title" class="form-control" type="text"
                                                value="{{ old('subscribe_title', $homePage->subscribe_title) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Subscribe To Newsletter's button</label>
                                        <div>
                                            <input name="subscribe_button" class="form-control" type="text"
                                                value="{{ old('subscribe_button', $homePage->subscribe_button) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Subscribe To Newsletter's Background
                                            Image</label>
                                        <div>
                                            <input name="subcscribe_bcgk_img" class="form-control" type="file">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn">Save changes</button>
                                        <button type="reset" class="btn-secondry">Cancel</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>
</x-admin.layout>
