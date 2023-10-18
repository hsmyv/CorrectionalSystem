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
                <h4 class="breadcrumb-title">Service</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Service</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Service</h4>
                        </div>
                        <div class="widget-inner">
                            <form class="edit-profile m-b30" action="{{ route('admin.service.store') }}" method="POST"
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
                                            <h3>Upper Slide</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Title</label>
                                        <div>
                                            <input name="upper_slide_title" class="form-control" type="text"
                                                value="{{ old('upper_slide_title', $servicePage->upper_slide_title) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Description</label>
                                        <div>
                                            <input name="upper_slide_description" class="form-control" type="text"
                                                value="{{ old('upper_slide_description', $servicePage->upper_slide_description) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Background Image</label>
                                        <div>
                                            <input name="upper_slide_bckg_img" class="form-control" type="file">
                                        </div>
                                    </div>

                                </div>
                                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                </div>
                                <div class="row">
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">2.Services</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Services Status</label>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                </div>
                                <div class="row">
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">3. Middle Section</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Title</label>
                                        <div>
                                            <input name="middle_section_title" class="form-control" type="text"
                                                value="{{ old('middle_section_title', $servicePage->middle_section_title) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Excerpt</label>
                                        <div>
                                            <input name="middle_section_excerpt" class="form-control" type="text"
                                                value="{{ old('middle_section_excerpt', $servicePage->middle_section_excerpt) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="video" class="col-form-label">Video</label>
                                        <div>
                                            <input onchange="loadFile(event)" class="form-control" type="file"
                                                id="video" wire:model="newImage" name="middle_section_video">
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Content</label>
                                        <div>
                                            <textarea name="middle_section_content" class="form-control" type="text"
                                                value="{{ old('middle_section_content', $servicePage->middle_section_content) }}">{{ old('middle_section_content', $servicePage->middle_section_content) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Video</label>
                                        <div>
                                            <video id="output" src="" type="video/mp4" width="400"
                                                controls>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn">Save changes</button>
                                </div>
                            </form>
                        </div>


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
