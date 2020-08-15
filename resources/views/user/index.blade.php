<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('user')}}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('user')}}/css/bootstrap.min.css">

    <script src="{{asset('user')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('user')}}/js/bootstrap.min.js"></script>
    <!---->
    <link rel="stylesheet" type="text/css" href="{{asset('user')}}/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('user')}}/css/slick-theme.css" />
    <!--slide-->
    <link rel="stylesheet" type="text/css" href="{{asset('user')}}/css/style.css">

</head>

<body>
    <div id="wrapper">
        <!---->
        <!--HEADER-->
        <div id="header">
            <div id="header-top">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-6" id="header-text">
                            @if (Session::has('sucesss'))
                            <div class="pull-right alert alert-success" style="">
                                <strong>Success!</strong> {{session('sucesss')}}
                              </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <nav id="header-nav-top">
                                <ul class="list-inline pull-right" id="headermenu">
                                    @if (!get_data_user('web'))


                                    <li>
                                        <a href="{{route('userlogin')}}"><i class="fa fa-unlock"></i> Login</a>
                                        <a href="{{route('signup')}}"><i class="fa fa-unlock"></i> SignUp</a>
                                    </li>
                                    @else
                                    <li>
                                        <a href=""><i class="fa fa-user"></i> My Account <i
                                                class="fa fa-caret-down"></i></a>
                                        <ul id="header-submenu" style="width: fit-content">
                                        <li><a href="{{route('resetpassword')}}">Change Password</a></li>
                                            <li><a href="{{route('uploadproduct.index')}}">UpLoad Product</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('userlogout')}}"><i class="fa fa-share-square-o"></i>
                                            Checkout</a>
                                    </li>
                                    @endif



                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" id="header-main">
                    <div class="col-md-5">
                        <form class="form-inline">
                            <div class="form-group">
                                <label>
                                    <select name="category" class="form-control">
                                        <option> All Category</option>
                                        <option> Dell </option>
                                        <option> Hp </option>
                                        <option> Asuc </option>
                                        <option> Apper </option>
                                    </select>
                                </label>
                                <input type="text" name="keywork" placeholder=" input keywork" class="form-control">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <img src="{{asset('user')}}/images/logo-default.png">
                        </a>
                    </div>
                    <div class="col-md-3" id="header-right">
                        <div class="pull-right">
                            <div class="pull-left">
                                <i class="glyphicon glyphicon-phone-alt"></i>
                            </div>
                            <div class="pull-right">
                                <p id="hotline">HOTLINE</p>
                                <p>0327460560</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END HEADER-->


        <!--MENUNAV-->
        <div id="menunav">
            <div class="container">
                <nav>
                    <!--menu main-->
                    <ul id="menu-main">
                        <li> <a href="">Trang chủ</a></li>
                        <li>
                            <a href="">Shop</a>
                        </li>
                        <li>
                            <a href="">Mobile</a>
                        </li>
                        <li>
                            <a href="">Contac</a>
                        </li>
                        <li>
                            <a href="">Blog</a>
                        </li>
                        <li>
                            <a href="">About us</a>
                        </li>
                        <li class="btn">
                            <button class=" btn" id="main-shopping" data-toggle="collapse" data-target="#navbarText"><i
                                    class="fa fa-list"></i></button>
                        </li>
                    </ul>
                    <!-- end menu main-->

                    <!--Shopping-->
                    <ul class="pull-right" id="main-shopping">
                        <li class="btn">
                            <a href=""><i class="fa fa-shopping-basket"></i> My Cart </a>
                        </li>
                    </ul>


                </nav>
                <div class="collapse navbar-collapse " id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li> <a href="">Trang chủ</a></li>
                        <li>
                            <a href="">Shop</a>
                        </li>
                        <li>
                            <a href="">Mobile</a>
                        </li>
                        <li>
                            <a href="">Contac</a>
                        </li>
                        <li>
                            <a href="">Blog</a>
                        </li>
                        <li>
                            <a href="">About us</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        Navbar text with an inline element
                    </span>
                </div>
            </div>
        </div>
        <!--ENDMENUNAV-->

        <div id="maincontent">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-4  fixside">
                        <div class="box-left box-menu">
                            <h3 class="box-title"><button data-toggle="collapse" data-target="#demo"><i
                                        class="fa fa-list"></i></button> Danh mục</h3>

                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="">Máy tính <span class="badge pull-right">14</span></a>
                                    <ul>
                                        <li><a href=""> Sonny 1</a></li>
                                        <li><a href=""> Sonny 2</a></li>
                                        <li><a href=""> Sonny 3</a></li>
                                        <li><a href=""> Sonny 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Máy giặt <span class="badge pull-right">14</span></a>
                                    <ul>
                                        <li><a href=""> Sonny 1</a></li>
                                        <li><a href=""> Sonny 2</a></li>
                                        <li><a href=""> Sonny 3</a></li>
                                        <li><a href=""> Sonny 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Đồ điện <span class="badge pull-right">14</span></a>
                                </li>
                                <li>
                                    <a href=""> Thiết bị văn phòng <span class="badge pull-right">14</span> </a>
                                    <ul>
                                        <li><a href=""> Sonny 1</a></li>
                                        <li><a href=""> Sonny 2</a></li>
                                        <li><a href=""> Sonny 3</a></li>
                                        <li><a href=""> Sonny 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="box-left box-menu">
                            <h3 class="box-title"><button data-toggle="collapse" data-target="#hot"><i
                                        class="fa fa-warning"></i> </button>sản phẩm </h3>
                            <ul id="hot" class="collapse">

                                <li class="clearfix">
                                    <a href="">
                                        <img src="{{asset('user')}}/images/16-270x270.png"
                                            class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name"> Loa mới nhất 2016 Loa mới nhất 2016 Loa mới nhất 2016</p>
                                            <b class="price">Giảm giá: 6.090.000 đ</b><br>
                                            <b class="sale">Giá gốc: 7.000.000 đ</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i
                                                    class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="clearfix">
                                    <a href="">
                                        <img src="{{asset('user')}}/images/16-270x270.png"
                                            class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name"> Loa mới nhất 2016 Loa mới nhất 2016 Loa mới nhất 2016</p>
                                            <b class="price">Giảm giá: 6.090.000 đ</b><br>
                                            <b class="sale">Giá gốc: 7.000.000 đ</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i
                                                    class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="clearfix">
                                    <a href="">
                                        <img src="{{asset('user')}}/images/16-270x270.png"
                                            class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name"> Loa mới nhất 2016 Loa mới nhất 2016 Loa mới nhất 2016</p>
                                            <b class="price">Giảm giá: 6.090.000 đ</b><br>
                                            <b class="sale">Giá gốc: 7.000.000 đ</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i
                                                    class="fa fa-heart-o"></i> 10</span>

                                        </div>
                                    </a>
                                </li>

                                <li class="clearfix">
                                    <a href="">
                                        <img src="{{asset('user')}}/images/16-270x270.png"
                                            class="img-responsive pull-left" width="80" height="80">
                                        <div class="info pull-right">
                                            <p class="name"> Loa mới nhất 2016 Loa mới nhất 2016 Loa mới nhất 2016</p>
                                            <b class="price">Giảm giá: 6.090.000 đ</b><br>
                                            <b class="sale">Giá gốc: 7.000.000 đ</b><br>
                                            <span class="view"><i class="fa fa-eye"></i> 100000 : <i
                                                    class="fa fa-heart-o"></i> 10</span>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                            <!-- </marquee> -->
                        </div>
                    </div>
                    <div class="col-md-8 col-8 bor">
                        <section id="slide" class="text-center">
                            <img src="{{asset('user')}}/images/slide/sl3.jpg" class="img-thumbnail">
                        </section>

                        <section class="box-main1">
                            <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> Máy Canong
                                </a> </h3>

                            <div class="showitem">
                                <div class="row">
                                @foreach ($product as $item)
                                <div class="col-md-3 col-sm-3 item-product bor">
                                    <a href="">
                                        <img src="{{asset('user')}}/images/anh1.png" class="" width="100%" height="180">
                                    </a>
                                    <div class="info-item">
                                        <a href="">{{$item->name}}</a>
                                        <p><strike class="sale">19.000.000 đ</strike> <b
                                                class="price">{{$item->price}}</b></p>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href=""><i class="fa fa-search"></i></a></p>
                                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                                        <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                               
                            </div>
                        </section>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-4 bottom-content">
                    <a href=""><img src="{{asset('user')}}/images/free-shipping.png"></a>
                </div>
                <div class="col-md-4 bottom-content">
                    <a href=""><img src="{{asset('user')}}/images/guaranteed.png"></a>
                </div>
                <div class="col-md-4 bottom-content">
                    <a href=""><img src="{{asset('user')}}/images/deal.png"></a>
                </div>
            </div>
            <div class="container-pluid">
                <section id="footer">
                    <div class="container">
                        <div class="col-md-3" id="shareicon">
                            <ul>
                                <li>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8" id="title-block">
                            <div class="pull-left">

                            </div>
                            <div class="pull-right">

                            </div>
                        </div>

                    </div>
                </section>
                <section id="footer-button">
                    <div class="container-pluid">
                        <div class="container">
                            
                                <div class="col-md-3 " id="ft-about">

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco </p>
                                </div>
                                <div class="row" id="ifofooter">
                                <div class="col-md-3 col-3 box-footer">
                                    <h3 class="tittle-footer">my accout</h3>
                                    <ul>
                                        <li>
                                            <i class="fa fa-angle-double-right"></i>
                                            <a href=""><i></i> Giới thiệu</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-angle-double-right"></i>
                                            <a href=""><i></i> Liên hệ </a>
                                        </li>
                                        <li>
                                            <i class="fa fa-angle-double-right"></i>
                                            <a href=""><i></i> Contact </a>
                                        </li>
                                        <li>
                                            <i class="fa fa-angle-double-right"></i>
                                            <a href=""><i></i> My Account</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-angle-double-right"></i>
                                            <a href=""><i></i> Giới thiệu</a>
                                        </li>
                                    </ul>
                                </div>
                                
                              
                                <div class="col-md-3 col-3" id="footer-support">
                                    <h3 class="tittle-footer"> Liên hệ</h3>
                                    <ul>
                                        <li>

                                            <p><i class="fa fa-home" style="font-size: 16px;padding-right: 5px;"></i>
                                            </p>
                                            <p><i class="sp-ic fa fa-mobile"
                                                    style="font-size: 22px;padding-right: 5px;"></i> </p>
                                            <p><i class="sp-ic fa fa-envelope"
                                                    style="font-size: 13px;padding-right: 5px;"></i> </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="ft-bottom">
                    <p class="text-center">Copyright © 2020 . Design by ... !!! </p>
                </section>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="{{asset('user')}}/js/slick.min.js"></script>

</body>

</html>

<script type="text/javascript">
    $(function () {
        $hidenitem = $(".hidenitem");
        $itemproduct = $(".item-product");
        $itemproduct.hover(function () {
            $(this).children(".hidenitem").show(100);
        }, function () {
            $hidenitem.hide(500);
        })
    })
</script>