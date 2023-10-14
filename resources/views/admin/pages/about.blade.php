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
                <h4 class="breadcrumb-title">About</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>About</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>About</h4>
                        </div>
                        <div class="widget-inner">
                            <form class="edit-profile m-b30">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>1. Slide Details</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>Upper Slide</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Title</label>
                                        <div>
                                            <input name="title" class="form-control" type="text" value="Together">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Description</label>
                                        <div>
                                            <input name="description" class="form-control" type="text"
                                                value="CTO">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Background Image</label>
                                        <div>
                                            <input name="bckg_img" class="form-control" type="file">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">2. Middle Section</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Title</label>
                                        <div>
                                            <input name="donate_title" class="form-control" type="text"
                                                value="Who Are We Working For?">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Excerpt</label>
                                        <div>
                                            <input name="donate_excerpt" class="form-control" type="text"
                                                value="Amet Dapibus Mollis">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="image" class="col-form-label">Image</label>
                                        <div>
                                            <input onchange="loadFile(event)" class="form-control" type="file"
                                                id="image" wire:model="newImage" name="image">
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Content</label>
                                        <div>
                                            <textarea name="donate_content" class="form-control" type="text" value="">We are a large group of people who powered movement fighting for a green and peaceful future for your land, forest, oceans, foods, climate and pass the green earth to our children. Each one of us can make small changes in our lives, but together we can change the world. Sed posuere consectetur est at lobortis. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo.</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Image</label>
                                        <div>
                                            <img src="" id="output" width="250" height="250" />

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="reset" class="btn">Save changes</button>
                                    <button type="reset" class="btn-secondry">Cancel</button>
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
