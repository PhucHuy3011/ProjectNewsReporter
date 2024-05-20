@extends('layout/user/index')

@section('content')

<div class="container">
    <section class="hot_news_frame">
        <div class="left_news_frame">
            <a href="" class="main_news_frame">
                <h3 class="tittle">{{$news->name}}
                </h3>
                <div class="time">
                    {{ date_format(date_create($news->date), 'M-d-Y') }}
                </div>
                <div class="main_news_photo">
                    <img src="{{asset('images/'.$news->picture)}}" alt="">
                </div>
                <div class="content">
                    {{$news->description}}
                </div><br>
                <div class="content fs-5">
                    {!! $news->content !!}
                </div>
            </a>
        </div>
        <div class="right_news_frame">
            <div class="frame_1">
                @foreach($breakingNews as $breakingPost)
                <a href="{{url('breakingnews/news/'.$breakingPost->name)}}" class="frame_0">
                    <div class="news_frame">
                        <div class="news_type">{{$breakingPost->countryname}}
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

</div>
@endsection('content')