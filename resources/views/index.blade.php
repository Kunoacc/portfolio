@extends('shared.main')

@section('content')

    <!--Middle-->
    <div class="ml-4 h-75 d-flex flex-column">
        <div class="container my-auto">
            <div class="row">
                <div class="col-8">
                    <h1 class="p-2">Hi, i'm Nelson</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <p class="p-2">I'm a developer with a passion for my work and the things i do. I specialize in laravel/PHP,
                        NativeScript, vue and the likes. I also dabble with a few javascript frameworks from time to time,
                        like Adonis.js and Express. I like reading articles about stuff that don't make sense to sane people
                        and i'm a sucker for machine learning. I have competent design skills and build most of my applications
                        looking at things from the eye of the user. You can check out the awesomeness <a
                                href="{{route('works')}}">Here</a> or reach out and discuss anything at all through
                        <a href="{{route('contact')}}">this</a> contact form.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Middle End-->

@endsection