<!DOCTYPE html>
<html lang="en">
@include('shared.head')
@yield('head')

<body>
    <div class="wrapper">
        <div class="row h-100 w-100">
            <div class="w-75 bg-white"></div>
            <div class="position-absolute d-flex flex-column w-100 h-100">
                <div class="justify-content-center h-75 w-75 bg-white m-auto box-shadow">
                    <div class="d-flex flex-column h-100 {{(url()->current() == route('contact')) ? 'bg-image' : ''}}">
                    @if(url()->current() == route('contact'))
                    <div class="bg-white-gradient d-flex flex-column h-100">
                    @endif
                        <!--Top-->
                        <div class="my-auto top">
                            <div class="row mx-auto">
                                <div class="col">
                                    <h6 class="ml-4"><a href="{{route('index')}}">iDesign&coDe</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--Top End-->

                        @yield('content')

                        <!--Bottom-->
                        <div class="my-auto bottom">
                            <div class="row mx-auto text-center">
                                <div class="col">
                                    <p><a href="mailto:nelson@nelsonatuonwu.me">nelson@nelsonatuonwu.me</a></p>
                                </div>
                                <div class="col"><p><i class="fa fa-map-marker"></i> Somewhere on earth</p></div>
                                <div class="col d-block">
                                    <a href="https://twitter.com/blvckcoder"><i class="fa fa-twitter"></i></a>
                                    <a href="https://linkedin.com/in/nelsonatuonwu"><i class="fa fa-linkedin"></i></a>
                                    <a href="https://github.com/kunoacc"><i class="fa fa-github-square"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--Bottom End-->

                        @if(url()->current() == route('contact'))
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@yield('scripts')
@include('shared.scripts')
</body>
</html>