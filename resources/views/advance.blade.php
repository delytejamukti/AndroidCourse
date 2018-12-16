@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">
    <div class="pull-right">
        <span class="badge badge-primary ">Advance Class</span>
    </div>
    <h4 class="text-center">Learning Progress</h4>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width:{{$persen}}.%" aria-valuemin="0" aria-valuemax="100">{{$persen}}%</div>
    </div>

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Introduction
        <small>Android Course</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">
      <div class="col-md-12">
          <div class="row">
              <div class="col-md-7" style="margin-top:-150px;">
                <video class="videoPlayer" controls autoplay width="500px" height="700px" src="video/intro.mp4" type="video/mp4"> </video>
              </div>

                <div class="col-md-4" style="margin-top:50px;">
                  <h3 class="my-3">Introduction to Android Course</h3>
                  <p>Welcome to the introductory lesson of the Android applications development for beginners offered by EduSite. In this video you will get an overview of the course.
                  </p>
                  <h3 class="my-3">Course Levels</h3>
                  <ul>
                    <li>Basic</li>
                    <li>Advanced</li>
                    @if($persen == 100)
                    <a href="{{route('download_certificate')}}">
                      <button class="btn btn-success mt-3">Download E-Certificate</button>
                    </a>
                    @endif

                  </ul>
                </div>
          </div>
        </div>
        
      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Videos</h3>

      <div class="row">

        @foreach($courses as $c)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
              <img src="{{asset('banner/'.$c->id.'.jpg')}}" style="height: 200px">
              <div class="card-body">
                    <h4 class="card-title">
                      {{$c->judul}}
                    </h4>
                    <h5>Description :</h5>
                    <p class="card-text">{{ str_limit($c->diskripsi, $limit = 70, $end = '....') }}</p>
              </div>
              <div class="card-footer text-center">
              @if($c->play == 1)
                <a href="{{ url('advance/play/'.$c->id)}}"> 
                  <button class="btn btn-success"> <span><i class="fa fa-check" aria-hidden="true"></i></span>View Video</button>  
                </a>
              @else
                <a href="{{ url('advance/play/'.$c->id)}}">
                  <button class="btn btn-primary">View Video</button>  
                </a>
              @endif
              </div>
          </div>
        </div>
        @endforeach


  
    <!-- /.container -->

    <!-- Footer -->
    




@endsection