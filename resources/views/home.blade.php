@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hai Beginner,
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start content-->
<ul class="nav nav-tabs mb-3">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#beg">Beginner</a>
    </li>
</ul>

<div class="tab-content">
    <!-- Beg -->
    <div class="tab-pane fade show active" id="beg">
        <p>Beginner</p>
        <div class="container">
            <div class="row p-3">
                <div class="" style="width: 100%;">
                    <h1>TITLE</h1>
                </div>
                <div class="" style="width: 100%;height: 300px;">
                    <video style="width: 400px;height: 300px" controls>
                        <source src="mov_bbb.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="" style="width: 100%;max-height: 300px; overflow: hidden;">
                    TEXTasd asdas das dasdasa asddd ddd ddd dddddas  ddd  dd ddd  dd ddddd dddd ddddddd dd  ddddsdasdasd asd asd asd as dasd asd asda sdasdasdas das dasd asdasdasd asd asd asdasdas asddd ddd ddd dddddas  ddd  dd ddd  dd ddddd dddd ddddddd dd  ddddsdasdasd asd asd asd as dasd asd asda sdasdasdas das dasd asdasdasd asd asd asdasdas asddd ddd ddd dddddas  ddd  dd ddd  dd ddddd dddd ddddddd dd  ddddsdasdasd asd asd asd as dasd asd asda sdasdasdas das dasd asdasdasd asd asd asdasdas
                </div>
            </div>
            <div class="row p-3">
                <div class="" style="width: 100%;">
                    <h1>TITLE</h1>
                </div>
                <div class="" style="width: 100%;height: 300px;">
                    <video style="width: 400px;height: 300px" controls>
                        <source src="mov_bbb.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="" style="width: 100%;max-height: 300px; overflow: hidden;">
                    TEXTasd asdas das dasdasa asddd ddd ddd dddddas  ddd  dd ddd  dd ddddd dddd ddddddd dd  ddddsdasdasd asd asd asd as dasd asd asda sdasdasdas das dasd asdasdasd asd asd asdasdas asddd ddd ddd dddddas  ddd  dd ddd  dd ddddd dddd ddddddd dd  ddddsdasdasd asd asd asd as dasd asd asda sdasdasdas das dasd asdasdasd asd asd asdasdas asddd ddd ddd dddddas  ddd  dd ddd  dd ddddd dddd ddddddd dd  ddddsdasdasd asd asd asd as dasd asd asda sdasdasdas das dasd asdasdasd asd asd asdasdas
                </div>
            </div>
        </div>
    </div>

  </div>
<!-- end content -->
@endsection
