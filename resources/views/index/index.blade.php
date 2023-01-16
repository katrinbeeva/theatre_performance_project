@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="about-us-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-about-us">
                        <div class="about-us-txt">
                            <h2>{{$title}}</h2>
                            {!! $text !!}
                        </div><!--/.about-us-txt-->
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
                <div class="col-sm-6">
                    <div class="single-about-us">
                        <div class="about-us-img">
                            @if(isset($entry->image))
                            <img src="{{$imgURL}}" alt="about images">
                            @endif
                        </div><!--/.about-us-img-->
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.about-us-content-->
    </div><!--/.container-->
@endsection

@section('header')
    <div class="container">
        <div class="header-left">
            <ul class="pull-left">
                <li>
                    <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i> +992 563 542
                    </a>
                </li><!--/li-->
                <li>
                    <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i>info@mail.com
                    </a>
                </li><!--/li-->
            </ul><!--/ul-->
        </div><!--/.header-left -->
        <div class="header-right pull-right">
            <ul>
                <li class="reg">
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
                        Register
                    </a>
                    /
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                        Log in
                    </a>

                    <!-- small modal -->
                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											 	<span aria-hidden="true">
											 		<i class="fa fa-close"></i>
											 	</span>
                                    </button>
                                    <h4 class="modal-title" id="mySmallModalLabel">
                                        Sign In
                                    </h4>
                                    <form class="sm-frm" style="padding:25px">
                                        <label>Name :</label>
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                        <label>Passoward :</label>
                                        <input type="text" class="form-control" placeholder="Enter Passoward">
                                        <label><input type="checkbox" name="personality"> Remenber Me</label>
                                        <button type="button" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- large modal -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											 	<span aria-hidden="true">
											 		<i class="fa fa-close"></i>
											 	</span>
                                    </button>
                                    <h4 class="modal-title" id="myLargeModalLabel">Register</h4>
                                    <form class="lg-frm" style="padding:25px">
                                        <label>Name :</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                        <label>Email :</label>
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                        <label>Passoward :</label>
                                        <input type="text" class="form-control" placeholder="Enter Passoward">
                                        <button type="button" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><!--/li -->
                <li>
                    <div class="social-icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul><!--/.ul -->
                    </div><!--/.social-icon -->
                </li><!--/li -->
            </ul><!--/ul -->
        </div><!--/.header-right -->
    </div>
@endsection
@section('menu')<div class="container">
    <div class="menubar">
        <nav class="navbar navbar-default">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo/logo.png" alt="logo">
                </a>
            </div><!--/.navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="smooth-menu">
                        <a href="#home">Home</a>
                    </li>
                    <li class="smooth-menu"><a href="/admin">About</a></li>
                    <li class="smooth-menu"><a href="#service">Service</a></li>
                    <li class="smooth-menu"><a href="#project">Project</a></li>
                    <li class="smooth-menu"><a href="#team">Team</a></li>
                    <li class="smooth-menu"><a href="#blog">Blog</a></li>
                    <li class="smooth-menu"><a href="#contact">Contact</a></li>
                    <li>
                        <a href="#">
                            <span class="lnr lnr-cart"></span>
                        </a>
                    </li>
                    <li class="search">
                        <form action="">
                            <input type="text" name="search" placeholder="Search....">
                            <a href="#">
                                <span class="lnr lnr-magnifier"></span>
                            </a>
                        </form>
                    </li>
                </ul><!-- / ul -->
            </div><!-- /.navbar-collapse -->
        </nav><!--/nav -->
    </div><!--/.menubar -->
</div>@endsection
