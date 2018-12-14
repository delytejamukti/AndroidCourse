@extends('layouts.app')


@section('content')

<div class="container" id="cont_1"> 
      <div class="card">
        <div class="card-body"> 
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                <h3 class="card-title">{{$course->judul}}</h3><p></p><hr>
                <div class="mistvideo" id="video1">
                <!--  start replace sementara -->
                  <!-- <noscript>
                    <a href="http://<?php // echo $HOST ?>:8181/video1.html" target="_blank">
                      Click here to play this video
                    </a>
                  </noscript>
                  <script>
                    var a = function(){
                      mistPlay("{{$id}}",{
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
                  </script> -->
                    <!--end replace sementara-->

                      <!-- kalau servernya sudah siap, hapus tag video dibawah ini -->
                <video src="{{ asset('video/'.$course->nama_vidio) }}" type='video/x-matroska; codecs="theora, vorbis"'></video>
                
                </div>
                <hr>
                <div class="description">
                  <h4>Description</h4>
                  <p>{{$course->diskripsi}}</p>
                </div>
                <button class="btn btn-primary" onclick="Convert('{{$course->nama_vidio}}')">Convert & Download</button>                
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

@section('js')
<script>
  function Convert(nama_vidio){
    $("#judul_modal").html("Download "+nama_vidio);
    $("#modal_convert").modal('show');
  }
  $(document).on('click','#btn_convert', function(){
        $("#modal_convert").modal('hide');
        var nama_vidio = $("#nama_vidio").val();
        var format = $("#format option:selected").val();
        var frame_size = $("#frame_size option:selected").val();
        var framerate = $("#framerate option:selected").val();

        console.log(nama_vidio,format,frame_size,framerate);
        
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
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({ 
        url: "{{route('beginner.convert')}}",
        method:"POST",
        dataType:'JSON',
         data: {
                nama_vidio:nama_vidio,
                format:format,
                frame_size:frame_size,
                frame_rate:framerate
              },
         success: function(data) {
              if(data.flag){
                waitingDialog.hide();
                console.log(data.message);
                $("a[href='http://dummylink']").attr('href', data.link );
                $("#modal_download").modal('show');

              }else{
                console.log("gagal convert");
              }
         }
        });
      });



</script>

@endsection


