@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">
    <div class="pull-right">
        <span class="badge badge-primary ">Beginner Class</span>
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

        <div class="col-md-8">
          <video class="videoPlayer" controls autoplay width="500px" height="700px" src="video/intro.mp4" type="video/mp4"> </video>
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Introduction to Android Course</h3>
          <p>Welcome to the introductory lesson of the Android applications development for beginners offered by EduSite. In this video you will get an overview of the course.
          </p>
          <h3 class="my-3">Course Levels</h3>
          <ul>
            <li>Basic</li>
            <li>Advanced</li>
          </ul>
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
                <a href="{{ url('home/play/'.$c->id)}}">
                  <button class="btn btn-success">View Video</button>  
                </a>
              @else
                <a href="{{ url('home/play/'.$c->id)}}">
                  <button class="btn btn-primary">View Video</button>  
                </a>
              @endif
              </div>
          </div>
        </div>
        @endforeach


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-waitingfor/1.2.7/bootstrap-waitingfor.js"></script>
  <script>
      function Download(nama_vidio){
        $("#judul_modal").html("Download "+nama_vidio);
        $("#modal_convert").modal('show');
        $("#id_vidio").val(nama_vidio);
      }

      $(document).on('click','#btn_convert', function(){
        $("#modal_convert").modal('hide');
        var id = $("#id_vidio").val();
        var format = $("#format option:selected").val();
        var frame_size = $("#frame_size option:selected").val();
        var framerate = $("#framerate option:selected").val();
        
        console.log(framerate);
        setTimeout(function() {
        }, 300);
        waitingDialog.show('Converting',{
        headerText: '',
        headerSize: 3,
        headerClass: '',
        dialogSize: 'm',
        progressType: '',
        contentElement: 'p',
        contentClass: 'content'
        });

        $.ajax({ url: 'eksekusi.php',
         data: {
           id:id,
           format:format,
           frame_size:frame_size,
           framerate:framerate},
         type: 'post',
         success: function(data) {
              if(data.flag == "sukses"){
                waitingDialog.hide();
                $("a[href='http://dummylink']").attr('href', data.link );
                $("#modal_download").modal('show');

              }else{
                console.log("gagal convert");
              }
         }
        });
      });

  
  </script>
    <!-- /.container -->

    <!-- Footer -->
    

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>




@endsection