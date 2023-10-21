<x-web.layout>
    <!-- is search -->

    <div class="content-wrapper">
        <div class="greennature-content">

            <!-- Above Sidebar Section-->
            <x-web.contact.map :contactPage="$contactPage"/>

            <!-- Sidebar With Content Section-->
            <x-web.contact.form :contactPage="$contactPage" />

            <!-- Below Sidebar Section-->
            <x-web.contact.feature />

        </div>
        <!-- greennature-content -->
        <div class="clear"></div>
    </div>
    <!-- content wrapper -->


</x-web.layout>
