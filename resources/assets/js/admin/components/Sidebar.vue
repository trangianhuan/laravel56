<template>
    <div class="col-xs-3 col-md-2 sidebar" id="main-sidebar" data-hook="admin_tabs">
        <ul class="nav nav-sidebar">
            <li class="sidebar-menu-item selected">
                <a class="icon-link with-tip action-shopping-cart" href="/admin/orders" data-original-title="" title="">
                    <span class="icon icon-shopping-cart"></span>
                    <span class="text">Orders</span>
                </a>
            </li>
        </ul>

        <ul class="nav nav-sidebar">
            <li class="sidebar-menu-item">
                <a data-toggle="collapse" data-parent="#sidebar" href="#sidebar-returns">
                    <span class="fa fa-user fa-lg"></span>
                    <span class="text"> User</span>
                    <span class="fa fa-chevron-left pull-right"></span>
                </a>
                <ul id="sidebar-returns" class="collapse nav nav-pills nav-stacked" data-hook="admin_returns_sub_tabs">
                    <li class="sidebar-menu-item">
                        <router-link to="/admin/user" class="nav-link">List</router-link>
                    </li>

                    <li class="sidebar-menu-item">
                        <router-link to="/admin/user/create" class="nav-link">Create</router-link>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="nav nav-sidebar">
            <li class="sidebar-menu-item">
                <a data-toggle="collapse" data-parent="#sidebar" href="#sidebar-product">
                    <span class="fa fa-newspaper-o fa-lg"></span><span class="text"> Article</span>
                    <span class="fa fa-chevron-left pull-right"></span>
                </a>
                <ul id="sidebar-product" class="collapse nav nav-pills nav-stacked" data-hook="admin_product_sub_tabs">
                    <li class="sidebar-menu-item">
                        <router-link to="/admin/article" class="nav-link">List</router-link>
                    </li>

                    <li class="sidebar-menu-item">
                        <router-link to="/admin/article/create" class="nav-link">Create</router-link>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="spree-version hidden-xs hidden-sm">3.6.0.beta</div>

    </div>
</template>
<style lang="scss" scoped>
    li.sidebar-menu-item{
        flex: 1 100%;
    }
    #sidebar-toggle {
        display: block;
        border: none;
        padding: 0;
        margin: 0;
        position: absolute;
        right: 0;
        margin-top: 17px;
        cursor: pointer;
    }
    #main-sidebar {
        position: fixed;
        top: 52px;
        bottom: 0;
        left: 0;
        padding: 0;
        z-index: 1000;
        display: block;
        overflow-x: hidden;
        overflow-y: auto;
        background-color: #fbfbfb;
        border-right: 1px solid #e2e2e2
    }

    #main-sidebar a {
        -webkit-font-smoothing: antialiased;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -webkit-font-feature-settings: "kern" 1;
        -moz-font-feature-settings: "kern" 1
    }

    #main-sidebar ul.nav-sidebar>li {
        border-bottom: 1px solid #eeeeee
    }

    #main-sidebar ul.nav-sidebar>li>a {
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 12px;
        font-weight: 500;
        padding: 15px;
        display: block;
        color: #555555
    }

    #main-sidebar ul.nav-sidebar>li>a .glyphicon,
    #main-sidebar ul.nav-sidebar>li>a .icon,
    #main-sidebar ul.nav-sidebar>li>a .select2-container-multi .select2-choices .select2-search-choice .select2-search-choice-close,
    .select2-container-multi .select2-choices .select2-search-choice #main-sidebar ul.nav-sidebar>li>a .select2-search-choice-close,
    #main-sidebar ul.nav-sidebar>li>a #ui-datepicker-div .ui-widget-header .ui-icon.ui-icon-circle-triangle-w,
    #ui-datepicker-div .ui-widget-header #main-sidebar ul.nav-sidebar>li>a .ui-icon.ui-icon-circle-triangle-w,
    #main-sidebar ul.nav-sidebar>li>a #ui-datepicker-div .ui-widget-header .ui-icon.ui-icon-circle-triangle-e,
    #ui-datepicker-div .ui-widget-header #main-sidebar ul.nav-sidebar>li>a .ui-icon.ui-icon-circle-triangle-e {
        font-size: 18px;
        vertical-align: bottom;
        padding-right: 5px
    }

    #main-sidebar ul.nav-sidebar>li>a .glyphicon.pull-right,
    #main-sidebar ul.nav-sidebar>li>a .pull-right.icon,
    #main-sidebar ul.nav-sidebar>li>a .select2-container-multi .select2-choices .select2-search-choice .pull-right.select2-search-choice-close,
    .select2-container-multi .select2-choices .select2-search-choice #main-sidebar ul.nav-sidebar>li>a .pull-right.select2-search-choice-close,
    #main-sidebar ul.nav-sidebar>li>a #ui-datepicker-div .ui-widget-header .pull-right.ui-icon.ui-icon-circle-triangle-w,
    #ui-datepicker-div .ui-widget-header #main-sidebar ul.nav-sidebar>li>a .pull-right.ui-icon.ui-icon-circle-triangle-w,
    #main-sidebar ul.nav-sidebar>li>a #ui-datepicker-div .ui-widget-header .pull-right.ui-icon.ui-icon-circle-triangle-e,
    #ui-datepicker-div .ui-widget-header #main-sidebar ul.nav-sidebar>li>a .pull-right.ui-icon.ui-icon-circle-triangle-e {
        font-size: 8px;
        line-height: 2;
        color: #777777;
        position: absolute;
        right: 5px;
        top: 50%;
        margin-top: -8px
    }

    #main-sidebar ul.nav.nav-pills {
        background-color: white;
        border-top: 1px solid #eeeeee
    }

    #main-sidebar ul.nav.nav-pills li a {
        padding: 5px 15px;
        font-size: 12px
    }

    #main-sidebar ul.nav.nav-pills li a:hover {
        border-radius: 0
    }

    #main-sidebar ul.nav.nav-pills li.selected a {
        color: #7DB942
    }

    #main-sidebar .spree-version {
        position: absolute;
        z-index: -1;
        left: 15px;
        bottom: 15px
    }

    #wrapper.sidebar-minimized #main-sidebar {
        width: 50px;
        overflow: visible
    }

    #wrapper.sidebar-minimized #main-sidebar li:hover,
    #wrapper.sidebar-minimized #main-sidebar li.menu-active {
        background-color: #eeeeee
    }

    #wrapper.sidebar-minimized #main-sidebar .icon-link,
    #wrapper.sidebar-minimized #main-sidebar [data-toggle="collapse"] {
        text-align: center
    }

    #wrapper.sidebar-minimized #main-sidebar .icon-link .icon,
    #wrapper.sidebar-minimized #main-sidebar [data-toggle="collapse"] .icon {
        padding: 0
    }

    #wrapper.sidebar-minimized #main-sidebar .icon-link .text,
    #wrapper.sidebar-minimized #main-sidebar .icon-link .icon-chevron-left,
    #wrapper.sidebar-minimized #main-sidebar .icon-link .icon-chevron-down,
    #wrapper.sidebar-minimized #main-sidebar [data-toggle="collapse"] .text,
    #wrapper.sidebar-minimized #main-sidebar [data-toggle="collapse"] .icon-chevron-left,
    #wrapper.sidebar-minimized #main-sidebar [data-toggle="collapse"] .icon-chevron-down {
        display: none
    }

    #wrapper.sidebar-minimized #main-sidebar ul.collapse.in {
        display: none
    }

    #wrapper.sidebar-minimized #main-sidebar .submenu-active {
        display: block !important;
        height: auto !important;
        position: fixed;
        top: 52px;
        bottom: 0;
        left: 0;
        padding: 0;
        z-index: 1000;
        display: block;
        overflow-x: hidden;
        overflow-y: auto;
        left: 50px;
        min-width: 180px;
        visibility: visible;
        background-color: #fbfbfb;
        border-top: none;
        border-right: 1px solid #e2e2e2;
        padding-top: 5px
    }


    #main-part {
        padding: 15px 35px 0
    }

    #main-part.sidebar-collapsed {
        padding-left: 85px
    }

    .logo.navbar-brand {
        padding: 5px 15px
    }

    #logo {
        width: auto;
        height: 40px
    }

    .content-header.page-header {
        margin-top: 15px
    }

    .content-header.page-header h1 {
        font-size: 24px;
        margin: 0;
        line-height: 38px
    }

    .content-header.page-header.with-page-tabs {
        border-bottom: 0;
        margin-bottom: 6px;
        padding-bottom: 0
    }

    .content-header.page-header.with-page-tabs h1 {
        margin-bottom: 8px
    }

    .content-header.page-header.with-page-tabs .nav-tabs {
        padding-left: 15px;
        padding-top: 15px
    }

    .content-header.page-header .page-actions {
        text-align: right
    }

    .content-header.page-header .page-actions form {
        display: inline-block
    }
    .nav>li {
        position: relative;
        display: block;
    }
</style>