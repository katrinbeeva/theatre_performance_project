@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="about-us-content">

                            <div class="container">
                                <table class="styled-table">
                                    <style>
                                        table, th, td {
                                            border: 1px solid black;
                                        }
                                    </style>
                                    <thead>
                                    <tr>
                                        <th>Име на театър</th>
                                        <th>Адрес</th>
                                        <th>Град</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($venues as $venue)
                                        <tr>
                                            <td>{{$venue->name_of_theatre}}</td>
                                            <td>{{$venue->location}}</td>
                                            <td>{{$venue->city}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

        </div><!--/.about-us-content-->
    </div><!--/.container-->
@endsection
@section('header')
    <div class="container">
        <div class="header-left">
            <ul class="pull-left">
                <li>
                    <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i> +359 87 817 3419
                    </a>
                </li><!--/li-->
                <li>
                    <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i>S21090109@sd.uni-vt.bg
                    </a>
                </li><!--/li-->
            </ul><!--/ul-->
        </div><!--/.header-left -->
        <div class="header-right pull-right">
            <ul>
                <li class="reg">
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
                        Регистрирай се
                    </a>
                    /
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                        Вход
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
                                        <input type="text" class="form-control" placeholder="Enter Password">
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
                                    <h4 class="modal-title" id="myLargeModalLabel">Регистрирай се</h4>
                                    <form class="lg-frm" style="padding:25px">
                                        <label>Name :</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                        <label>Email :</label>
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                        <label>Passoward :</label>
                                        <input type="text" class="form-control" placeholder="Enter Password">
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
                    <h2 style = color:white>Театър</h2>
                </a>
            </div><!--/.navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">Начална страница</a>
                    </li>
                    <li><a href="/performance_view">Представления</a></li>
                    <li><a href="/venues_view">Места за провеждане</a></li>
                    <li><a href="/tickets_view">Билети</a></li>
                    <li><a href="/admin">Регистрирай се</a></li>
                    <li class="search">
                        <form action="/performance" method="GET">

                            <label for="search" class="sr-only">
                                Search
                            </label>
                            <input type="text" name="s" placeholder="Търси....">
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
        @section('hm-footer')   <div class="container">
            <div class="hm-footer-details">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title ">
                                <div class="logo">
                                    <a href="index.html">
                                        <h2 style = color:white>Театър</h2>
                                    </a>
                                </div><!-- /.logo-->
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-para">
                                <p>"Аплаузите пареха ръцете,<br>
                                    а огънят, жарава бе в душата.<br>
                                    Едно обикновено представление<br>
                                    разкриваше магията ТЕАТЪР..."</p>
                            </div><!--/.hm-foot-para-->
                            <div class="hm-foot-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><!--/li-->
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><!--/li-->
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><!--/li-->
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><!--/li-->
                                </ul><!--/ul-->
                            </div><!--/.hm-foot-icon-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-2 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>Полезни линкове</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="footer-menu ">
                                <ul class="">
                                    <li><a href="/" >Начална страница</a></li>
                                    <li><a href="/performance_view">Представления</a></li>
                                    <li><a href="/venues_view">Места за провеждане</a></li>
                                    <li><a href="/tickets_view">Билети</a></li>
                                    <li><a href="/admin">Регистрирай се</a></li>
                                </ul>
                            </div><!-- /.footer-menu-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-3 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <img src="https://yt3.googleusercontent.com/ytc/AMLnZu85CAqWR5Qc43zkQ3uxDyJJl_lT9jgeVysBDhDG=s900-c-k-c0x00ffffff-no-rj" alt="VTU">
                            </div>
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-3 col-sm-6  col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <img src="https://scontent.fsof11-1.fna.fbcdn.net/v/t39.30808-6/315051662_2257076807787358_5705695343087107995_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=MEJrvHM4l-oAX9Rpzcd&_nc_ht=scontent.fsof11-1.fna&oh=00_AfC4v4XfFv9pEeHDXxpaAvaKBllgTg3Bpz4X-VaJB4Hd5w&oe=63CC1FAC" alt="KB">
                            </div><!--/.hm-foot-email-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.hm-footer-details-->
        </div><!-- /.container -->
        @endsection
        @section('footer-copyright') <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="foot-copyright pull-left">
                        <p>
                            &copy; All Rights Reserve
                            <a href="https://www.themesine.com">Театър</a>
                        </p>
                    </div><!--/.foot-copyright-->
                </div><!--/.col-->
                <div class="col-sm-5">
                    <div class="foot-menu pull-right
						">
                        <ul>
                            <li ><a href="#">legal</a></li>
                            <li ><a href="#">sitemap</a></li>
                            <li ><a href="#">privacy policy</a></li>
                        </ul>
                    </div><!-- /.foot-menu-->
                </div><!--/.col-->
            </div><!--/.row-->
            <div id="scroll-Top">
                <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div><!--/.scroll-Top-->
@endsection
