@extends('layout/user/index')

@section('content')
<div class="container">
    <section class="bar_body_top">
        <div class="category_frame">
            <ul>
                @foreach($countries as $country)
                <li><a href="{{url('/world/'.$country->name)}}">{{$country->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="hot_news_frame">
        <div class="left_frame">
            <a href="{{url('world/'.$countryNews->countryname.'/'.$countryNews->name)}}" class="main_news_frame">
                <h3 class="tittle">{{$countryNews->name}}
                </h3>
                <div class="time">
                    {{ date_format(date_create($countryNews->date), 'M-d-Y') }}
                </div>
                <div class="main_news_photo">
                    <img src="{{asset('images/'.$countryNews->picture)}}">
                </div>
                <div class="content">
                    {{$countryNews->description}}
                </div><br>
                <div class="content">
                    {{$countryNews->title}}
                </div>
            </a>
        </div>
        <div class="right_frame">
            <div class="frame_1">
                @foreach($worldNews as $worldPost)
                <a href="{{url('/world/'.$worldPost->countryname.'/'.$worldPost->name)}}" class="frame_0">
                    <img src="{{asset('images/'.$worldPost->picture)}}">
                    <div class="news_frame">
                        <div class="news_type">{{$worldPost->countryname}}</div>
                        <div class="tittle">Exclusive: {{$worldPost->name}}</div>
                        <div class="time">{{ date_format(date_create($worldPost->date), 'M-d-Y') }}</div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="frame_1">
                @foreach($breakingNews as $breakingPost)
                <a href="{{url('/breakingnews/news/'.$breakingPost->name)}}" class="frame_0">
                    <div class="news_frame">
                        <div class="news_type">{{$breakingPost->categoriesname}}
                        </div>
                        <div class="tittle">Exclusive: {{$breakingPost->name}}</div>
                        <div class="time"> {{ date_format(date_create($breakingPost->date), 'M-d-Y') }}
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="mt-5">
            <div class="row">
                @foreach($countryList as $Post)
                <div class="col-md-4 mb-4">
                    <a href="{{url('/world/'.$Post->countryname.'/'.$Post->name)}}" class="frame_0">
                        <img src="{{asset('images/'.$Post->picture)}}" class="img-fluid">
                        <div class="news_frame">
                            <div class="news_type">{{$Post->countryname}}</div>
                            <div class="tittle">Exclusive: {{$Post->name}}</div>
                            <div class="time">{{ date_format(date_create($Post->date), 'M-d-Y') }}</div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{ $countryList->links() }}

</div>

@endsection('content')