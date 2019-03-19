@extends('layouts.app')

@section('content')
    <main class="scrollspy fijo" id="index">
    <div class="slider full-screen">
        <ul class="slides">
            <li>
                <img src="img/slider4.jpg" alt="">
                <div class="caption center-align">
                    <h3>{{ trans('welcome.caption1') }}</h3>
                    <h4 class="light grey-text text-lighten-3 italic">{{ trans('welcome.sub1') }}</h4>
                    <a href="#contact" class="btn btn-small deep-purple lighten-5 deep-purple-text text-darken-4">{{ trans('welcome.cta') }}</a>
                </div>
            </li>
            <li>
                <img src="img/slider2.jpg" alt="">
                <div class="caption left-align">
                    <h3>{{ trans('welcome.caption2') }}</h3>
                    <h4 class="light grey-text text-lighten-3 italic">{{ trans('welcome.sub2') }}</h4>
                </div>
            </li>
            <li>
                <img src="img/slider3.jpg" alt="">
                <div class="caption right-align">
                    <h3 class="italic">{{ trans('welcome.caption3') }}</h3>
                </div>
            </li>
        </ul>
    </div>


    <section class="section">
        <div class="center container">
            <div class="row">
                <div class="col m7 s12">
                    <h2 class="grey-text text-darken-2">{{ trans('welcome.hello') }}</h2>
                    <p class="grey-text justify">{!! trans('welcome.text1') !!}</p>
                    <h4 class="grey-text text-darken-2 italic">{!! trans('welcome.text2') !!}</h4>
                </div>
                <div class="col m5 s12">
                    <img src="/img/moni.jpg" class="responsive-img" alt="">
                </div>
                
            </div>
        </div>
    </section> 

    <section class="section scrollspy grey lighten-5" id="portfolio">
        <div class="center section container ">
            <h2 class="grey-text text-darken-2">{!! trans('welcome.title1') !!}</h2>
            <div class="row">
                @foreach ($works as $work)
                    <div class="col m4 s12">
                        <img src="{{Storage::url($work->file)}}" class="responsive-img"  alt="">
                        <p class="grey-text bold">{{ $work->name }}</p>  
                    </div>
                @endforeach
            </div>
            <a href="{{ route('work') }}" class="btn btn-small deep-purple lighten-5 deep-purple-text text-darken-4">See more</a>
        </div>
    </section>    

    <section class="section scrollspy grey lighten-5 " id="news">
        <div class="container center">
            <h2 class="grey-text text-darken-2">{!! trans('welcome.title2') !!}</h2>
            <div class="row">
                @foreach( $posts as $post)
                <div class="col m4 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ Storage::url($post->file) }}" alt="" class="responsive-img">
                        </div>
                        <div class="card-content">
                            <a href="{{ route('post', $post->slug) }}" class="grey-text text-lighten-1 ">{{ $post->name }}</a>
                            <p class="grey-text text-darken-2 small">{{ $post->created_at }}</p>
                        </div>
                    </div>
                    
                    
                </div>
                @endforeach
            </div>
        </div>
        </section>

        <section class="section">
            <div class="container center section">
                <h2 class="grey-text text-darken-2">{!! trans('welcome.title3') !!}</h2>
                <div class="row">
                    <div class="col m2 s12">
                        <img src="/img/sponsor1.jpg" class="responsive-img" alt="">
                    </div>
                    <div class="col m2 s12">
                        <img src="/img/sponsor2.jpg" class="responsive-img" alt="">
                    </div>
                    <div class="col m2 s12">
                        <img src="/img/sponsor3.jpg" class="responsive-img" alt="">
                    </div>
                    <div class="col m2 s12">
                        <img src="/img/sponsor4.jpg" class="responsive-img" alt="">
                    </div>
                    <div class="col m2 s12">
                        <img src="/img/sponsor5.jpg" class="responsive-img" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section grey lighten-5 scrollspy" id="contact">
            <div class="center container">
                
                
                    <div class="row">
                        {!!  Form::open(['route' => 'messages.store']) !!}
                        <div class="col m6 s12">
                            <div class="center"><h2 class="grey-text text-darken-2">{!! trans('welcome.title4') !!}</h2></div>
                            
                            <div class="input-field">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name' ,  null ) }}
                            </div>

                            <div class="input-field">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email' ,  null ) }}
                            </div>

                            <div class="input-field">
                                {{ Form::label('phone', 'Phone Number') }}
                                {{ Form::text('phone' ,  null ) }}
                            </div>

                            <div class="input-field">
                                {{ Form::label('date', 'Possible Date') }}
                                {{ Form::text('date' ,  null ) }}
                            </div>

                            <div class="input-field">
                                {{ Form::label('body', 'Message') }}
                                {{ Form::textarea('body' ,  null , ['class' => 'materialize-textarea']) }}
                            </div>

                            <div class="center">
                                {{ Form::submit('send', ['class' => 'btn btn-small deep-purple lighten-5 deep-purple-text text-darken-4']) }}
                            </div>
                        </div>
                        
                        <div class="col m6 s12 ">
                            <div class="center">
                                <h2 class="grey-text text-darken-2">{!! trans('welcome.title5') !!}</h2>
                                <a href=""><i class="fab fa-facebook icon deep-purple-text text-lighten-5 "></i></a>
                                <a href=""><i class="fab fa-instagram icon deep-purple-text text-lighten-5 "></i></a>
                            </div>
                            

                            <div class="center">
                                <h2 class="grey-text text-darken-2">{!! trans('welcome.title6') !!}</h2>
                                <a href="" class="btn btn-small deep-purple lighten-5 deep-purple-text text-darken-4">Read more</a>
                                <img src="/img/libelula.png" class="responsive-img" alt="">
                            </div>

                        </div>
                        
                    </div>
                    {!! Form::close() !!}

                

            </div>
        </section>
</main>
@endsection
