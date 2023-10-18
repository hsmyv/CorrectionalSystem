<x-web.layout>
    <!-- is search -->




    <div class="content-wrapper">
        <div class="greennature-content">

            <!-- Above Sidebar Section-->

            <!-- Sidebar With Content Section-->
            <div class="with-sidebar-wrapper">
                <x-web.service.slide :servicePage="$servicePage" />
                <x-web.service.services />

                <x-web.service.middlesection :servicePage="$servicePage" />

                <x-web.service.statistic />

                <x-web.service.donate />
            </div>
            <!-- Below Sidebar Section-->

        </div>
        <!-- greennature-content -->
        <div class="clear"></div>
    </div>
    <!-- content wrapper -->



</x-web.layout>
