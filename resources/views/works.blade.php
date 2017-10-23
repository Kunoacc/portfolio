@extends('shared.main')

@section('content')

    <!--Middle-->
    <div class="ml-4 h-75 d-flex flex-column">
        <div class="container my-auto">
        </div>
    </div>
    <!--Middle End-->

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.2/noty.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
@endsection