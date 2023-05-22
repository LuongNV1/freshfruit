<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$meta_title}} </title>

    <!-- Google Font -->
   <!-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet"-->
    <!---------Seo--------->
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    <link  rel="icon" type="image/x-icon" href="" />
    <!---------Seo--------->
    <!---------Share fb--------->
    <meta property="og:url"           content="{{$url_canonical}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$meta_title}}" />
    <meta property="og:description"   content="{{$meta_desc}}" />
    {{-- <meta property="og:image"         content="" /> --}}
    <!---------End share fb--------->
<link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets/css/fonts-family.css')}}" />
  <link rel="stylesheet" href="{{asset('public/backend/assets/css/font-awesome.min.css')}}">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}" type="text/css">
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="icon" type="image/png" href="{{asset('public/backend/assets/img/icon.png')}}">
    
</head>

<body>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>freshfruit@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <image src="{{URL::to('public/frontend/image/language1.png')}}" with="20px" height="20px" alt="">
                                <div>Ngôn Ngữ</div>
                                <span class="arrow_carrot-down"></span>
                               
                                <ul style="width:150px;background:white">
                                    <li><a class="dropdown-item" href="{{URL::to('language',['en'])}}"><img src="https://cdn.iconscout.com/icon/premium/png-64-thumb/england-flag-3846997-3195943.png" height="20" width="30"><span>English</span></a></li>
                                    <li><a class="dropdown-item" href="{{URL::to('language',['vi'])}}"><img src="https://cdn.iconscout.com/icon/free/png-64/vietnam-flag-country-nation-union-empire-33148.png" height="20" width="30"><span> Vietnamese</span></a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__language">
                                {{-- kiểm tra id khách hàng nếu chưa bắt đăng nhập --}}
                                <?php
                                    $customer_id = Session::get('customer_id');
                                    if ($customer_id != NULL) {

                                        ?>
                                        <i class="fa fa-user"></i> <div>Thông tin</div>
                                        <span class="arrow_carrot-down"></span>
                                        <ul style="width:150px;background:white">
                                            <li><a class="dropdown-item" href="{{URL::to('/history-order')}}"><span><i class="fa fa-history" aria-hidden="true"></i> Lịch Sử</span> </a></li></a></li>
                                            <li><a class="dropdown-item" href="{{URL::to('/logout-checkout')}}"><span><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng Xuất</span> </a></li>
                                        </ul>
                                        <?php
                                    }else{
                                        ?>

                                        <i class="fa fa-user"></i><a href="{{URL::to('/login-checkout')}}"><div style="margin-left: 5px;">{{__('Đăng Nhập')}}</div></a>
                                        <?php 
                                    }      
                                        ?>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="{{-- header__logo --}}">
                       <center> <a href="{{URL::to('/trang-chu')}}"><image style="display: block;max-width:200px;max-height:150px;width: auto;height: auto;" src="{{URL::to('public/frontend/image/logo.png')}}" alt=""></a></center>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{URL::to('/trang-chu')}}">{{__('Trang Chủ')}}</a></li>
                            <li><a href="{{URL::to('/tin-tuc')}}">{{__('Tin Tức')}}</a>
                            </li>

                            <?php
                            $customer_id = Session::get('customer_id');
                            if ($customer_id != NULL) {

                                ?>
                                <li><a href="{{URL::to('/gio-hang')}}">{{__('Giỏ Hàng')}}</a></li>
                                <?php
                            }else{
                                ?>

                                <li><a href="{{URL::to('/login-checkout')}}">{{__('Giỏ Hàng')}}</a></li>
                                <?php 
                            }      
                            ?>

                            <?php
                            $customer_id = Session::get('customer_id');
                            $shipping_id = Session::get('shipping_id');
                            if ($customer_id != NULL && $shipping_id ==NULL ) {

                                ?>
                                <li><a href="{{URL::to('/checkout')}}">{{__('Thanh Toán')}}</a></li>
                                <?php
                            }elseif($customer_id != NULL && $shipping_id !=NULL ){
                                ?>
                                <li><a href="{{URL::to('/payment')}}">{{__('Thanh Toán')}}</a></li>
                                <?php 
                            }else{      
                                ?>
                                <li><a href="{{URL::to('/login-checkout')}}">{{__('Thanh Toán')}}</a></li>
                                <?php
                            }
                            ?>
                          
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="header__cart">
                        <ul>
                            {{-- kiểm tra id khách hàng nếu chưa bắt đăng nhập --}}
                             {{-- <?php
                                    $customer_id = Session::get('customer_id');
                                    if ($customer_id != NULL) {

                                        ?> --}}
                                        <li><a onclick="scanqr();"  data-toggle="modal" data-target="#dialog1"><i class="fa fa-qrcode"></i></a></li>
                                        <li id="show-cart"></li>
                                     {{--    <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-bag"></i> <span>1</span></a></li> --}}
                                        {{-- <?php
                                    }else{
                                        ?>

                                        <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-shopping-bag"></i> <span>1</span></a></li>
                                        <?php 
                                    }      
                                        ?> --}}

                        </ul>
                        <div class="header__cart__price" id="total-home"></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <div class="modal fade" id="dialog1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h5 style="text-align: center;" class="modal-title">{{__('Quét Mã Qr Của Bạn')}}</h5>
                        <button type="button" onclick="close();" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="modal-body">
                    <image style="display: block;width: auto;height: auto;"
                                    src="{{URL::to('public/frontend/image/qr.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Header Section End -->
    
    <!-- Hero Section Begin -->
    
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    
    <!-- Categories Section End -->
    <!-- Featured Section Begin -->
    <div  id="chat-container">
        <div class="card-header bg-success text-white">Fresh Fruit AI</div>
        <div class="card-body" style="padding-right:0; padding-left:0; background:white; border-radius:0px; padding:0">
            <div class="message"  id="chat-messages">
            <p class="message-a bg-success text-white">Chào, Fresh Fruit có thể giúp gì bạn ?</p>
            </div>
            
            <form id="chat-form">
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" placeholder="Nhập" id="chat-input"></input>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-success">
                                Gửi</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="chat" id="chat-icon">
        <svg class='chat-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
                d="M320 0c17.7 0 32 14.3 32 32V96H472c39.8 0 72 32.2 72 72V440c0 39.8-32.2 72-72 72H168c-39.8 0-72-32.2-72-72V168c0-39.8 32.2-72 72-72H288V32c0-17.7 14.3-32 32-32zM208 384c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H208zm96 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H304zm96 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H400zM264 256a40 40 0 1 0 -80 0 40 40 0 1 0 80 0zm152 40a40 40 0 1 0 0-80 40 40 0 1 0 0 80zM48 224H64V416H48c-26.5 0-48-21.5-48-48V272c0-26.5 21.5-48 48-48zm544 0c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H576V224h16z" />
        </svg>
    </div>
    @yield('content')
  <!-- Banner Begin -->
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
   
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    
    <!-- Blog Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                @foreach($contact_info as $key => $ci)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <br>
                    <div class="footer__about">
                        <center><h5>{{__('Địa Chỉ')}}</h5></center>
                        <div class="footer__about__logo">
                            <a href="{{URL::to('/trang-chu')}}"><image width="300" height="150" src="{{URL::to('public/upload/contact/'.$ci->info_logo)}}" alt=""></a>
                        </div>
                        <ul>
                            <li>{!!$ci->info_contact!!}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <br>
                    <div class="footer__about">
                        <center><h5>{{__('Bài Viết Hữu Ích')}}</h5></center>
                        <ul>
                            @foreach($post_huuich as $key => $huuich)
                            <li><a href="{{URL::to('/bai-viet/'.$huuich->post_slug)}}">{{$huuich->post_title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="footer__about">
                        <center><h5>{{__('Map')}}</h5></center>
                        <center>{!!$ci->info_map!!}</center>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <br>
                    <div class="footer__about">
                        <center><h5>{{__('Fanpage FaceBook')}}</h5></center>
                        {!!$ci->info_fanpage!!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('public/frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('public/frontend/js/mixitup.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
{{--     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>

    {{-- script share fb --}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="he8bFVjf"></script>
    {{-- end script --}}
    {{-- add số lượng --}}
    <script>//<![CDATA[
        $('input.input-qty').each(function() {
          var $this = $(this),
            qty = $this.parent().find('.is-form'),
            min = Number($this.attr('min')),
            max = Number($this.attr('max'))
          if (min == 0) {
            var d = 0
          } else d = min
          $(qty).on('click', function() {
            if ($(this).hasClass('minus')) {
              if (d > min) d += -1
            } else if ($(this).hasClass('plus')) {
              var x = Number($this.val()) + 1
              if (x <= max) d += 1
            }
            $this.attr('value', d).val(d)
          })
        })
    </script>
    {{-- end add số lượng --}}
    <script>
        $('#dialog1').modal('show')
        function scanqr(){
             let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
              scanner.addListener('scan', function (content) {
                window.location.href=content;
              });
              Instascan.Camera.getCameras().then(function (cameras) {
                if (cameras.length > 0) {
                  scanner.start(cameras[0]);
                } else {
                  console.error('No cameras found.');
                }
              }).catch(function (e) {
                console.error(e);
              });
          }
    </script>
    {{-- qr scan --}}
    {{-- end qr scan --}}
    {{-- sản phẩm yêu thích javascript --}}
    <script type="text/javascript">
        function del_wishList(id){
          if (localStorage.getItem('data')!=null) {
            var data = JSON.parse(localStorage.getItem('data'));
            var index = data.findIndex(item => item.id == id);
            // alert(index);
            data.splice(index, 1);
            localStorage.setItem('data', JSON.stringify(data));

            document.getElementById("delete"+id).remove(); 
        
          }
        }

         function view(){
            

             if(localStorage.getItem('data')!=null){

                 var data = JSON.parse(localStorage.getItem('data'));

                 data.reverse();// đảo ngược sản phẩm mới lên đầu

                 document.getElementById('row_wishlist').style.overflow = 'scroll';
                 document.getElementById('row_wishlist').style.height = '200px';
                
                 for(i=0;i<data.length;i++){

                    var name = data[i].name;
                    var price = data[i].price;
                    var image = data[i].image;
                    var url = data[i].url;
                    var id = data[i].id;

                    $('#row_wishlist').append('<div class="row" id="delete'+id+'" style="margin:10px 0"><div class="col-md-4"><img width="100%" src="'+image+'"></div><div class="col-md-8 info_wishlist"><p>'+name+'</p><p style="color:#FE980F">'+price+'</p><a class="abc" href="'+url+'">Đặt hàng</a><a class="abc" style="margin-left:5px" onclick="del_wishList('+id+')">Xóa</a></div>');
                }

            }

        }

        view();
       

       function add_wistlist(clicked_id){
           
            var id = clicked_id;
            var name = document.getElementById('wishlist_productname'+id).value;
            var price = document.getElementById('wishlist_productprice'+id).value;
            var image = document.getElementById('wishlist_productimage'+id).src;
            var url = document.getElementById('wishlist_producturl'+id).href;
            var newItem = {
                'url':url,
                'id' :id,
                'name': name,
                'price': price,
                'image': image
            }
            //kiem tra neu chua co thi set la rong
            if(localStorage.getItem('data')==null){
               localStorage.setItem('data', '[]');
            }
            //neu co roi thi lay lai
            var old_data = JSON.parse(localStorage.getItem('data'));

            var matches = $.grep(old_data, function(obj){
                return obj.id == id;
            })

            if(matches.length){
                alert('{{__('Sản phẩm bạn đã yêu thích,nên không thể thêm')}}');

            }else{

                old_data.push(newItem);

               $('#row_wishlist').append('<div class="row" id="delete'+id+'" style="margin:10px 0;"><div class="col-md-4"><img width="100%" src="'+newItem.image+'"></div><div class="col-md-8 info_wishlist"><p>'+newItem.name+'</p><p style="color:#FE980F">'+newItem.price+'</p><a class="abc" href="'+newItem.url+'">Đặt hàng</a><a class="abc" style="margin-left:5px" onclick="del_wishList('+id+')">Xóa</a></div>');

            }
           
            localStorage.setItem('data', JSON.stringify(old_data));

           
       }
    </script>
    {{-- end sản phẩm yêu thích --}}
    {{-- script sweetalert --}}
    <script type="text/javascript">
        show_cart();//đếm giỏ hàng
        total_home();
            function show_cart(){
                $.ajax({
                    url:'{{url('/show-cart')}}',
                    method: "GET",
                    success:function(data){
                        $('#show-cart').html(data);
                    }

                });
            }
            //total home
            function total_home(){
                $.ajax({
                    url:'{{url('/total-home')}}',
                    method: "GET",
                    success:function(data){
                        $('#total-home').html(data);
                    }

                });
            }
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var _token = $('input[name="_token"]').val();

                if (parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                    if (parseInt(cart_product_quantity)==0) {
                        swal("{{__('Vui lòng liên hệ SĐT: 0334972001 để đặt hàng!')}}");
                    } else{
                        swal("{{__('Vui Lòng Nhập Số Lượng Nhỏ Hơn')}} "+cart_product_quantity,"", "warning");
                    }
                }else{
                    $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                    success:function(){
                        swal({
                                title: "{{__('Sản Phẩm Của Bạn Đã Thêm Vào Giỏ Hàng')}}",
                                text: "{{__('Tiếp Tục Mua Hàng Hoặc Thanh Toán')}}",
                                showCancelButton: true,
                                cancelButtonText: "{{__('Mua Tiếp')}}",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "{{__('Giỏ Hàng')}}",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });
                            show_cart();
                            total_home();

                    }

                });
                }
            });
        });
    </script>
    {{-- phí vận chuyển --}}
    <script type="text/javascript">

    $(document).ready(function(){
        $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';

            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-city-home')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                   $('#'+result).html(data);     
                }
            });
        }); 
    });
  </script>
  <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp == '' || maqh =='' || xaid ==''){
                    swal("{{__('Lỗi!')}}", "{{__('Vui lòng chọn thông tin để tính phí vận chuyển !')}}", "info");
                }else{
                    $.ajax({
                    url : '{{url('/calculate-ship')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                       location.reload(); 
                    }
                    });
                } 
        });
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
           $('.null-fee').click(function(){
                    swal("{{__('Lỗi!')}}", "{{__('Vui lòng chọn phí vận chuyển ở trên !')}}", "warning");     
        });
             });
        </script>
         <script type="text/javascript">
        $(document).ready(function(){
           $('.null-customer').click(function(){
                    swal("{{__('Bạn Chưa Đăng Nhập !')}}", "{{__('Đăng Nhập Để Tiếp Tục!')}}", "info");           
        });
             });
        </script>
         <script type="text/javascript">
        $(document).ready(function(){
           $('.null-cart').click(function(){
                    swal("{{__('Giỏ Hàng Trống !')}}", "{{__('Vui Lòng Thêm Sản Phẩm Để Tiếp Tục!')}}", "info");           
        });
             });
        </script>
    {{-- end phí vận chuyển --}}
    {{-- send-order --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $('.send-order').click(function(){
                swal({
                  title: "{{__('Đơn hàng của bạn')}}",
                  text: "{{__('Đơn hàng sẽ không được hoàn trả sau khi đặt, bạn có muốn tiếp tục ?')}}",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "{{__('Tiếp tục!')}}",
                  cancelButtonText: "{{__('Hủy!')}}",
                  closeOnConfirm: false,
                  closeOnCancel: false
              },
              function(isConfirm) {
                  if (isConfirm) {
                    var shipping_name = $('.shipping_name').val();
                    var shipping_city = $('.shipping_city').val();
                    var shipping_address = $('.shipping_address').val();
                    var shipping_phone = $('.shipping_phone').val();
                    var shipping_email = $('.shipping_email').val();
                    var shipping_note = $('.shipping_note').val();
                    var shipping_method = $("input[name='payment']:checked").val();
                    var order_fee = $('.order_fee').val();
                    var order_coupon = $('.order_coupon').val();
                    var _token = $('input[name="_token"]').val();
                    // alert(shipping_method);
                    if (shipping_method == 0) {
                        $.ajax({
                        url : '{{url('/payment-online')}}',
                        method: 'POST',
                        data:{shipping_name:shipping_name,shipping_city:shipping_city,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_email:shipping_email,shipping_note:shipping_note,shipping_method:shipping_method,order_fee:order_fee,order_coupon:order_coupon,_token:_token},
                        success:function(){
                         $(location).attr('href', 'thanh-toan');
                        }
                        });
                    }else{
                    $.ajax({
                        url : '{{url('/save-order')}}',
                        method: 'POST',
                        data:{shipping_name:shipping_name,shipping_city:shipping_city,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_email:shipping_email,shipping_note:shipping_note,shipping_method:shipping_method,order_fee:order_fee,order_coupon:order_coupon,_token:_token},
                        success:function(){
                         swal("{{__('Đơn hàng !')}}", "{{__('Cảm ơn bạn đã đặt hàng, đơn hàng của bạn đang được xử lí !')}}", "success");
                             window.setTimeout(function(){
                                location.reload();
                            },3000);
                        },error:function(){
                         swal("{{__('vui lòng !')}}", "{{__('Cảm ơn bạn đã đặt hàng, đơn hàng của bạn đang được xử lí !')}}", "success");
                        }
                    });
                    
                    }
                } else {
                    swal("{{__('Hủy!')}}", "{{__('Đơn hàng của bạn chưa được đặt')}}", "error");
                }
            });
        });
    });
    </script>
    {{-- end send-order --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
    const chatMessages = document.querySelector('#chat-messages');
    const chatForm = document.querySelector('#chat-form');
    const chatInput = document.querySelector('#chat-input');

    // Handle form submit event
    chatForm.addEventListener('submit', function(event) {
        event.preventDefault();
        sendMessage();
    });

    // Handle Enter key press event
    chatInput.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            sendMessage();
        }
    });

    // Send message to server
    function sendMessage() {
        const input = chatInput.value;
        chatMessages.innerHTML += ` <p class="message-b">${input}</p> `
        chatMessages.innerHTML += `<p class="message-a bg-success text-white process">...</p>`;
        chatInput.value = '';
        // Send input to server using Axios
        axios.post("{{URL::to('/chat')}}", {
                input: input
            })
            .then(function(response) {
                // Add server response to chat messages
                const processingMessage = chatMessages.querySelector('.process');
      if (processingMessage) {
        processingMessage.remove();
      }
      chatMessages.innerHTML +=
        `<p class="message-a bg-success text-white">${response.data.output}</p>`;
            })
            .catch(function(error) {
                console.log(error);
            });
    }
    const chatIcon = document.getElementById("chat-icon");
    const chatContainer = document.getElementById("chat-container");
    chatIcon.addEventListener("click", function() {
        console.log(chatContainer.style.display);
  // Toggle lớp CSS "hidden" để hiển thị hoặc ẩn form
  if (chatContainer.style.display == 'none' || chatContainer.style.display == '' ) {
    // Nếu form đang ẩn, hiển thị form
    chatContainer.style.display = 'block';
  } else {
    // Nếu form đang hiển thị, ẩn form
    chatContainer.style.display = 'none';
  }
});
    </script>
</body>

</html>
<style>
    .container-fluid {
        width:78%;
    }
    svg.chat-icon {

width: 70px;
height: 70px;
z-index: 9000;
}

.chat {
position: fixed;
top: 700px;
right: 10px;
cursor: pointer;
}

#chat-container {
position: fixed;
top: 300px;
right: 20px;
width: 350px;
display: none;
z-index: 9000;
}

#chat-messages {
height: 300px;
overflow-y: scroll;
}
.message-a {
display: inline-block;
padding: 10px;
float: left;
clear: both;
margin: 10px;
}

.message-b {
display: inline-block;
padding: 10px;
background : #d0d6d1;
float: right;
clear: both;
margin: 10px;
}


</style>