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
                <h4 class="breadcrumb-title">{{ setActiveBreadcrumb('admin.blog.index', 'Blog') }}</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>{{ setActiveBreadcrumb('admin.blog.index', 'Blog') }}</li>
                </ul>
            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>{{ setActiveBreadcrumb('admin.blog.index', 'Blog') }}</h4>
                        </div>
                        <div class="widget-inner">
                            <form class="edit-profile m-b30" method="POST" action="{{ route('admin.blog.store') }}"
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
                                                value="{{ old('upper_slide_title', $blogPage->upper_slide_title) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Description</label>
                                        <div>
                                            <input name="upper_slide_description" class="form-control" type="text"
                                                value="{{ old('upper_slide_description', $blogPage->upper_slide_description) }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Background Image</label>
                                        <div>
                                            <input name="upper_slide_bckg_img" class="form-control" type="file">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn">Save changes</button>
                                    </div>
                                </div>
                            </form>
                            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                            </div>
                            <form class="edit-profile m-b30">
                                <div class="row">
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">2.Recent Works</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Recent Works Status</label>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                            </div>
                            <form class="edit-profile m-b30">
                                <div class="row">
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">3.Recent Comments</h3>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Recent Comments</label>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                            </div>
                            <div class="row">
                                <div class="col-12 m-t20">
                                    <div class="ml-auto">
                                        <h3 class="m-form__section">4. Add Item</h3>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <table id="item-add" style="width:100%;">
                                        <tr class="list-item">
                                            <td>
                                                <div class="row">
                                                    @foreach ($tags as $tag)

                                                    <div class="col-md-4">

                                                        <label class="col-form-label">Tag Name</label>
                                                            <div>
                                                            <input name="tag_name" class="form-control"
                                                                type="text" value="{{$tag->name}}">
                                                            </div>

                                                    </div>

                                                    <div class="col-md-2">
                                                        <label class="col-form-label">Close</label>
                                                        <div class="form-group">
                                                            <a class="delete" href="#"><i
                                                                    class="fa fa-close"></i></a>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                            <form class="edit-profile" action="{{route('admin.blog.tag.store')}}" method="POST" >
                                @csrf
                                <div class="row">
                                    <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">4. Add Item</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <table id="item-add" style="width:100%;">
                                            <tr class="list-item">
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="col-form-label">Tag Name</label>
                                                            <div>
                                                                <input name="tag_names[]" class="form-control"
                                                                    type="text" value="">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <label class="col-form-label">Close</label>
                                                            <div class="form-group">
                                                                <a class="delete" href="#"><i
                                                                        class="fa fa-close"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn-secondry add-item m-r5"><i
                                                class="fa fa-fw fa-plus-circle"></i>Add Item</button>
                                        <button type="submit" class="btn">Save changes</button>
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

</x-admin.layout>
