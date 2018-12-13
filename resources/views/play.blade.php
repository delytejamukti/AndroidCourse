@extends('layouts.app')


@section('content')
<div class="container" id="cont_1"> 
      <div class="card">
        <div class="card-body"> 
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                <h3 class="card-title">{{$judul}}</h3><p></p><hr>
<!-- <div class="mistvideo" id="videoPlayer">
  <noscript>
    <a href="http://localhost:8181/v{{$id}}.html" target="_blank">
      Click here to play this video
    </a>
  </noscript>
  <script>
    var a = function(){
      mistPlay("v{{$id}}",{
        target: document.getElementById("videoPlayer"),
        forcePlayer: "html5",
        forceType: "html5/video/webm",
        controls: "stock",
        maxwidth: 830,
        maxheight: 480
      });
    };
    if (!window.mistplayers) {
      var p = document.createElement("script");
      p.src = "http://localhost:8181/player.js"
      document.head.appendChild(p);
      p.onload = a;
    }
    else { a(); }
  </script>
</div> -->
<video src="{{ asset('video/'.$course->nama_vidio) }}" type='video/x-matroska; codecs="theora, vorbis"'></video>
                <hr>
                <div class="description">
                  <h4>Description</h4>
                  <p>{{$diskripsi}}}</p>
                </div>
                <button class="btn btn-primary" >Convert & Download</button>                

              </div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
@include('modalConvert')
@include('modalDownload')


@endsection
