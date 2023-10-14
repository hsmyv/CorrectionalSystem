<x-admin.layout>

    <!-- header start -->
    <x-admin.header />
    <!-- header end -->
    <!-- Left sidebar menu start -->
    <div class="ttr-sidebar">
        <div class="ttr-sidebar-wrapper content-scroll">
            <!-- side menu logo start -->
            <div class="ttr-sidebar-logo">
                <a href="#"><img alt="" src="../../admin/assets/images/logo.png" width="122"
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
                <h4 class="breadcrumb-title">{{ setActiveBreadcrumb('admin.posts.create', 'Post') }}</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Blog</a></li>
                    <li>{{ setActiveBreadcrumb('admin.posts.create', 'Post') }}</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>{{ setActiveBreadcrumb('admin.posts.create', 'Post') }}</h4>
                        </div>
                        <div class="widget-inner">
                            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                            </div>
                            <form class="edit-profile m-b30">
                                <div class="row">
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">1. Publish Service</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Title</label>
                                        <div>
                                            <input name="title" class="form-control" type="text"
                                                value="Make Donation">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Description</label>
                                        <div>
                                            <input name="description" class="form-control" type="text"
                                                value="Your money can cure this earth">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="photos" class="col-form-label">Icon</label>
                                        <div>
                                            <input onchange="loadFile(event)" class="form-control" type="file"
                                                id="icon" wire:model="newImage" name="icon">
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Content</label>
                                        <div>
                                            <textarea name="donate_content" class="form-control" type="text" value="">We are a larhge froup of people who powered movement fighting for a green and peaceful future for your land, forest, ocenas, foods, climate and pass the green earth to our children. Each one of us can make small changes in our lives, but together we can change the world.</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Image</label>
                                        <div>
                                            <img src="" id="output" width="250" height="250" />

                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <button type="reset" class="btn">Save changes</button>
                                        <button type="reset" class="btn-secondry">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>

    <script>
        function loadFile(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        }
    </script>

</x-admin.layout>
