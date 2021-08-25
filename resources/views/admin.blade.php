<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>Nhà Thuốc Phong Nhi</title>
    <link rel="icon" href="{{asset('landingpage/img/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('landingpage/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('landingpage/css/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('landingpage/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('landingpage/css/lightgallery.min.css')}}" />
    <link rel="stylesheet" href="{{asset('landingpage/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('landingpage/css/jQueryUi.min.css')}}" />
    <link rel="stylesheet" href="{{asset('landingpage/css/textRotate.css')}}" />
    <link rel="stylesheet" href="{{asset('landingpage/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('landingpage/css/style.css')}}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="st-perloader">
        <div class="st-perloader-in">
            <div class="st-wave-first">
                <svg   enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><g><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" /></g></svg>
            </div>
            <div class="st-wave-second">
                <svg   enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><g><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" /></g></svg>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-lg-12" style="margin: 30px 0px">
                    <p style="text-align: center; font-size: 20px;">Danh Sách Khách Mua Hàng</p>
                    <div class="scroll-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Họ Tên</th>
                                    {{-- <th scope="col">Email</th> --}}
                                    <th scope="col">Phone</th>
                                    <th scope="col">Yêu Cầu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @foreach ($data as $item)
                                <tr>
                                    <th>{{ $i++ }}</th>
                                    <th>{{ $item->fullname }}</th>
                                    {{-- <td>{{ $item->email }}</td> --}}
                                    <td><a href="tel:{{ $item->phone }}">{{ $item->phone }}</a></td>
                                    <td>{{ $item->content }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="st-site-footer st-sticky-footer st-dynamic-bg" data-src="{{asset('landingpage/img/footer-bg.png')}}">
        <div class="st-copyright-wrap">
            <div class="container">
                <div class="st-copyright-in">
                    <div class="st-left-copyright">
                        <div class="st-copyright-text">Copyright 2021. Design by Thanh Phong</div>
                    </div>
                    <div class="st-right-copyright">
                        <div id="st-backtotop"><i class="fas fa-angle-up"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="st-video-popup">
        <div class="st-video-popup-overlay"></div>
        <div class="st-video-popup-content">
            <div class="st-video-popup-layer"></div>
            <div class="st-video-popup-container">
                <div class="st-video-popup-align">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="about:blank"></iframe>
                    </div>
                </div>
                <div class="st-video-popup-close"></div>
            </div>
        </div>
    </div>
  <script src="{{asset('landingpage/js/vendor/modernizr-3.5.0.min.js')}}"></script>
  <script src="{{asset('landingpage/js/vendor/jquery-1.12.4.min.js')}}"></script>
  <script src="{{asset('landingpage/js/isotope.pkg.min.js')}}"></script>
  <script src="{{asset('landingpage/js/jquery.slick.min.js')}}"></script>
  <script src="{{asset('landingpage/js/mailchimp.min.js')}}"></script>
  <script src="{{asset('landingpage/js/counter.min.js')}}"></script>
  <script src="{{asset('landingpage/js/lightgallery.min.js')}}"></script>
  <script src="{{asset('landingpage/js/ripples.min.js')}}"></script>
  <script src="{{asset('landingpage/js/wow.min.js')}}"></script>
  <script src="{{asset('landingpage/js/jQueryUi.js')}}"></script>
  <script src="{{asset('landingpage/js/textRotate.min.js')}}"></script>
  <script src="{{asset('landingpage/js/select2.min.js')}}"></script>
  <script src="{{asset('landingpage/js/main.js')}}"></script>
</body>
</html>