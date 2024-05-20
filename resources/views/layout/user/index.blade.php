<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bo÷otstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!--  -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $("#date").datepicker({
                dateFormat: 'yy/mm/dd'
            });
        });
    </script>

</head>

<body>
    <div class="header_top "></div>
    <header class="container-fluid">
        <div class="row">
            <div class="logo col-sm-1 mt-1">
                <a href="{{url('/index')}}"><img src="{{asset('images/logo.png')}}" width="100%"></a>
            </div>
            <nav class="col-md-6">
                <ul class="mt-3">
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="{{url('/world')}}" role="" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="tittle">World</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                @foreach($countries as $country)
                                <li><a class="dropdown-item" href="{{url('/world/'.$country->name)}}">
                                        <div class="tittle">{{$country->name}}</div>
                                    </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    @foreach($categories as $category)
                    <li>
                        <a href="{{url('/category/'.$category->name)}}">
                            <div class="tittle">{{$category->name}}</div>
                        </a>
                    </li>
                    @endforeach
                    <li>
                        <a href="{{url('/breakingnews')}}">
                            <div class="tittle">Breaking News</div>
                        </a>
                    </li>

                </ul>
            </nav>
            <div class="right_frame col-md-4">
                <div class="row">
                    <div class="col-md-2">
                        <a href="{{url('/profile')}}" class="my_view">
                            <div class="tittle mt-3">
                                Profile
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <form method="get" action="{{url('/search')}}">
                            <div class="row">
                            <div class="input-group mb-2 mt-2 col-md-10">
                                <input type="text" class="form-control" placeholder="Search" name="keyword" aria-label="Search" aria-describedby="basic-addon2">
                            </div>
                            <button type="submit" class="col-md-2" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div></form>
                    </div>
                    <div class="col-md-4">
                        @if(Auth::check())
                        <div class="utilities_frame mt-2">
                            <div class="col">
                                Welcome, {{ Auth::user()->name }}
                            </div>
                            <div class="utilities_frame col mt-2">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="register btn">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                            </div>
                        </div>
                        @else
                        <div class="utilities_frame mt-2">
                            <a href="{{ url('/logins') }}" class="log_in btn">Login</a>
                            <a href="{{ url('/registers') }}" class="register btn">Register</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
        <section class="category container">
            <a href="{{url('/world/American')}}" class="label">
                <span class="tittle">
                    <h2>American</h2>
                </span>
                <span class="icon">
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            </a>
            <div class="layout_frame">
                @foreach($listWorldNews as $post)
                <a href="{{url('/world/'.$post->countryname.'/'.$post->name)}}" class="news">
                    <img src="{{asset('images/'.$post->picture)}}">
                    <span class="tittle">{{$post->name}}</span>
                    <span class="time">{{ date_format(date_create($post->date), 'M-d-Y') }}</span>
                </a>
                @endforeach
            </div>
            <div class="cach-ngang"></div>
        </section>
        <section class="category container">
            <a href="{{url('/category/Business')}}" class="label">
                <span class="tittle">
                    <h2>Business</h2>
                </span>
                <span class="icon">
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            </a>
            <div class="layout_frame">
                @foreach($listBusinessNews as $post)
                <a href="{{url('/category/Business/'.$post->name)}}" class="news">
                    <img src="{{asset('images/'.$post->picture)}}">
                    <span class="tittle">{{$post->name}}</span>
                    <span class="time">{{ date_format(date_create($post->date), 'M-d-Y') }}</span>
                </a>
                @endforeach
            </div>
            <div class="cach-ngang"></div>
        </section>

        <section class="comment container mb-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col mt-3">
                            <h3>Feedback</h3>
                        </div>
                    </div>
                    <div>
                        @if(Auth::check())
                        <form method="post" action="{{url('index/saveFeedback')}}" class="row mb-3">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <b>{{ Auth::user()->email }}</b>
                                    <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                    <br>
                                    <div class="row">
                                        <div class="form-group col">
                                            <input type="text" name="content" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                        @endif
                    </div>
                    <div id="feedbacksCarousel" class="carousel slide row mt-3" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($feedbacks as $key => $feedback)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="card">
                                    <div class="card-body">
                                        <b>
                                            <h4><i class="fa fa-circle" aria-hidden="true"></i>
                                                {{ $feedback->email }}
                                            </h4>
                                        </b>
                                        <br>
                                        <p>{{ $feedback->content }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#feedbacksCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#feedbacksCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container-fluid mt-3 row">
        <div class="left_frame col-md">
            <div class="frame_footer">
                <span class="label">
                    <a href="{{url('/')}}">Home</a>
                </span>
            </div>
            <div class="frame_footer">
                @foreach($countries as $country)
                <span class="label">
                    <a href="{{url('/world/'.$country->name)}}">{{$country->name}}</a>
                </span>
                @endforeach
            </div>
            <div class="frame_footer">
                @foreach($categories as $category)
                <span class="label">
                    <a href="{{url('/category/'.$category->name)}}">{{$category->name}}</a>
                </span>
                @endforeach
            </div>
        </div>
        <div class="right_frame col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading"><b>Contact Us</b></h4>
                        <hr>
                        <h5><b>Address</b></h5>
                        <p class="mb-0">35/6 D5 Street, Ward 25, Binh Thanh Distrist, Ho Chi Minh City </p>
                        <hr>
                        <h5><b>Phone</b></h5>
                        <p class="mb-0">1800 1779 </p>
                        <hr>
                        <h5><b>Time</b></h5>
                        <p class="mb-0">Mon - Sat: 7:30 - 22:00</p>
                        <p class="mb-0">Sun: Close</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.9412965499331!2d106.71396444137396!3d10.806659638172174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529ed00409f09%3A0x11f7708a5c77d777!2zQXB0ZWNoIENvbXB1dGVyIEVkdWNhdGlvbiAtIEjhu4cgVGjhu5FuZyDEkMOgbyB04bqhbyBM4bqtcCBUcsOsbmggVmnDqm4gUXXhu5FjIHThur8gQXB0ZWNo!5e0!3m2!1svi!2s!4v1710752000985!5m2!1svi!2s" width="300" height="380" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--  -->
<!-- jQuery -->
<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('admin')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('admin')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('admin')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('admin')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('admin')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('admin')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('admin')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin')}}/dist/js/pages/dashboard.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
</script>

</html>