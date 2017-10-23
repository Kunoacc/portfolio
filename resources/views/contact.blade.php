@extends('shared.main')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.2/noty.min.css" />
@endsection

@section('content')

    <!--Middle-->
    <div class="ml-4 h-75 d-flex flex-column">
        <div class="container my-auto">
            <div class="row">
                <div class="col-10">
                    <h1>Say Hi.</h1>
                    <h4 class=" h3 text-info my-4">
                        Let's have a professional conversation over
                        <i class="fa fa-coffee"></i>
                    </h4>
                </div>
                <div class="col-12">
                    <p class="font-weight-bold">Address :</p>
                    <p class="text-info font-weight-bold">Abuja, Nigeria</p>
                </div>
                <div class="col-12">
                    <p class="font-weight-bold">Phone Number :</p>
                    <p class="text-info font-weight-bold">08103402615</p>
                </div>
                <div class="col-12">
                    <button class="btn btn-info" id="btn" data-clipboard-text="nelson@nelsonatuonwu.me">Copy Email Address</button>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <p class="p-2"></p>
                </div>
            </div>
        </div>
    </div>
    <!--Middle End-->

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.2/noty.min.js"></script>
    <script src="js/main.js"></script>

@endsection