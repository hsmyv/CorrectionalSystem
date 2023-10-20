<x-web.layout>
    <!-- is search -->

    <div class="content-wrapper">
        <div class="greennature-content">

            <!-- Above Sidebar Section-->

            <!-- Sidebar With Content Section-->
            <div class="with-sidebar-wrapper">
                <x-web.about.slide :aboutPage="$aboutPage" />
                <x-web.about.middlesection :aboutPage="$aboutPage" />
                <x-web.about.team />
                <x-web.about.donate />
                <x-web.about.statistic />
            </div>
            <!-- Below Sidebar Section-->

        </div>
        <!-- greennature-content -->
        <div class="clear"></div>
    </div>
    <!-- content wrapper -->

</x-web.layout>
