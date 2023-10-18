<x-web.layout>


    <!-- is search -->
    <div class="content-wrapper">
        <div class="greennature-content">

            <!-- Above Sidebar Section-->

            <!-- Sidebar With Content Section-->
            <div class="with-sidebar-wrapper">

                <x-web.home.slide :homePage="$homePage" />

                <x-web.home.feature />

                <x-web.home.donate :homePage="$homePage" />

                <x-web.home.projects />

                <x-web.home.twitter />

                <x-web.home.greennature :homePage="$homePage" />

                <x-web.home.newsletter :homePage="$homePage" />

                <x-web.home.statistics />
            </div>
            <!-- Below Sidebar Section-->

        </div>
        <!-- greennature-content -->
        <div class="clear"></div>
    </div>
    <!-- content wrapper -->

</x-web.layout>
