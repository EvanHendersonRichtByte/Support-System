@extends('layout.user_master')

@section('tab-title')
Close Tickets
@endsection

@section('body')

<body class="aps-ctrl-p site-theme site-theme-2 ticket-closed-tickets">
    @include('partials.user.page_loader')
    <div class="container-fluid app-content">
        <div class="app-client-2-header">
            @include('partials.user.navbar')
            <div class="container ">
                <div class="row app-header-bottom">

                    <section class="content-header">
                        <h1>
                            <i class="fa fa-ticket"></i>
                            Close Tickets </h1>
                    </section>
                </div>
            </div>
        </div>

        <div class="app-content p-t-15">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <aside class="sidebar-left">
                            <div class="client-menu-sidebar">
                                <div class="sidebar-nav">
                                    <div class="navbar navbar-client-menu" role="navigation">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <span class="visible-xs navbar-brand"><img src="https://demo.appsbd.com/support-system/images/default-user-image.png" alt="Mohamed Sharaf"> My Menu</span>
                                        </div>
                                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                                            <ul class=" client-my-menu list-group">
                                                <li class="list-group-item hidden-xs ">
                                                    <div class="text-center profile-container">
                                                        <div class="outer-w">
                                                            <div class="profile-img">
                                                                <img src="https://demo.appsbd.com/support-system/images/default-user-image.png" alt="Mohamed Sharaf">
                                                            </div>
                                                        </div>
                                                        <div>User</div>
                                                        <small>Join : Feb 02, 2018</small>
                                                    </div>
                                                </li>
                                                <li><a class="" href="{{url('/client/panel/dashboard')}}"><i class="fa fa-th"></i> Dashboard</a></li>
                                                <li><a class="" href="{{url('/ticket/active-tickets')}}"><i class="fa fa-ticket"></i> Active Tickets</a></li>
                                                <li><a class="active" href="{{url('/ticket/closed-tickets')}}"><i class="fa fa-ticket"></i> Closed Tickets</a></li>
                                                <li><a class="" href="{{url('/client/panel/profile')}}"><i class="fa fa-user-circle-o"></i> Profile</a></li>
                                                <li><a class="popupformWR apopf" data-effect="mfp-move-from-top" href="https://demo.appsbd.com/support-system/alluser/user/change-password.html"><i class="fa fa-hashtag"></i> Change Password</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <div class="row">

                            <section class="content-breadcrumb">
                                <ol class="breadcrumb m-b-10">
                                    <li>
                                        <a href="{{url('/client/panel/dashboard')}}"><i class="fa fa-user-o"></i> User Panel</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-ticket"></i>
                                        Close Tickets </li>
                                </ol>
                            </section>
                            <div class="panel panel-default app-panel-box">
                                <div class="panel-heading">Closed Tickets</div>
                                <div class="panel-body p-0 app-nice-scroll a-nice-scroll" style="max-height: 400px; overflow: hidden; outline: none;" tabindex="1">
                                    <h3 class="text-success text-center m-15">No closed ticket found</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-left m-t-0 m-b-5" style="font-size: 10px; font-style: italic;">
                        ** The time is base on Asia/Dhaka timezone</div>
                </div>
            </div>
        </div>

        @include('partials.user.footer')
        <button class="go_top btn-theme animated hidden zoomOut"><i class="fa fa-chevron-up"></i></button>
    </div>

    <script src="https://demo.appsbd.com/support-system/theme/client/js/theme-main.js" type="text/javascript"></script>
    @include('partials.user.stickey_top')
    @include('partials.user.chat_system')
</body>
@endsection