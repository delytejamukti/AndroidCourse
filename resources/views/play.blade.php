@extends('layouts.app')
@include('modalConvert')
@include('modalDownload')

@section('content')



<div class="container" id="cont_1"> 
      <div class="card">
        <div class="card-body"> 
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                <h3 class="card-title">{{$judul}}</h3><p></p><hr>
                <div class="mistvideo" id="video1">
                  <noscript>
                    <!-- <a href="http://<?php // echo $HOST ?>:8181/video1.html" target="_blank"> -->
                      Click here to play this video
                    </a>
                  </noscript>
                  <script>
                    var a = function(){
                      mistPlay("video1",{
                        target: document.getElementById("video1"),
                        autoplay: false,
                        width: 853,
                        height: 480
                      });
                    };
                    if (!window.mistplayers) {
                      var p = document.createElement("script");
                        // p.src = "<?php // echo $SRC ?>"
                      document.head.appendChild(p);
                      p.onload = a;
                    }
                    else { a(); }
                  </script>
                </div>
                <hr>
                <div class="description">
                  <h4>Description</h4>
                  <p>{{$diskripsi}}}</p>
                </div>
                <button class="btn btn-primary" onclick="Download('{{$nama_vidio}}')">Convert & Download</button>                
              </div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
