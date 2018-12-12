@extends('layouts.app')

@section('content')


    @php
    $HOST = "192.168.100.53";
    $SRC = "http://".$HOST.":8181/player.js";
    @endphp



    <!-- Page Content -->
    <div class="container">
    <div class="pull-right">
        <span class="badge badge-primary ">Beginner Class</span>
    </div>
    <h4 class="text-center">Learning Progress</h4>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div>

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Introduction
        <small>Android Course</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <video class="videoPlayer" controls autoplay width="500px" height="700px" src="uploaded/video1.mp4" type="video/mp4"> </video>
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Video Description</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
          <h3 class="my-3">Video Details</h3>
          <ul>
            <li>Lorem Ipsum</li>
            <li>Dolor Sit Amet</li>
            <li>Consectetur</li>
            <li>Adipiscing Elit</li>
          </ul>
        </div>
      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Videos</h3>

      <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
              <img src="temp.jpg" style="height: 200px"></img>
              <div class="card-body">
                    <h4 class="card-title">
                    <a href="play?id=video1">Basic ListView Demo: Android Programming</a>
                    </h4>
                    <h5>Description :</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-success" onclick="View('Video1.mkv')">View Video</button>  
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
              <img src="temp.jpg" style="height: 200px"></img>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="play?id=video2">Basic ListView Demo: Android Programming</a>
                </h4>
                <h5>Description :</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary" onclick="View('Video1.mkv')">View Video</button>  
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <img src="temp.jpg" style="height: 200px"></img>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="play?id=video3">How to Make a Button Open a New Activity - Android Studio Tutorial</a>
                </h4>
                <h5>Description :</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary" onclick="View('Video2.mkv')">View Video</button>  
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <img src="temp.jpg" style="height: 200px"></img>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="play?id=video4">How to Create Welcome Screen (Splash Screen) in Android Studio</a>
                </h4>
                <h5>Description :</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary" onclick="View('Video3.mkv')">View Video</button>  
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <img src="temp.jpg" style="height: 200px"></img>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="play?id=video5">How To Learn Android App Development (2018)</a>
                </h4>
                <h5>Description :</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary" onclick="View('Video4.mkv')">View Video</button>  
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <img src="temp.jpg" style="height: 200px"></img>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="play?id=video6">Introduction to Android development with NetBeans and Maven</a>
                </h4>
                <h5>Description :</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary " onclick="View('Video5.mkv')">View Video</button>  
              </div>
          </div>
        </div>

      </div>
      <!-- /.row -->




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