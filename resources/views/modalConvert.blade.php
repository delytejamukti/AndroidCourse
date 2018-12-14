<div class="modal fade" id="modal_convert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="judul" id="judul_modal"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
        <input type="hidden" name="nama_vidio" id="nama_vidio" value="{{$course->nama_vidio}}">
          <div class="form-group">
            <label for="format">Output Format</label>
            <select id="format" name="format">
              <option value="">Please select output format...</option>
              <option value="mp4">MP4</option>
              <option value="mkv">MKV</option>
              <option value="avi">AVI</option>
            </select>
          </div>
          
          <div class="form-group">
          <label for="frame_size">Resolution</label>
          <select id="frame_size" name="frame_size" required>
            <option value="" >Please select frame size</option>
            <option value="426x240">426x240</option>
            <option value="480x360">480x360</option>
            <option value="680x480">680x480</option>
            <option value="1280x720">1280x720</option>
          </select>
          </div>
          
          <div class="form-group">
            <label for="framerate">Frame Rate</label>
            <select id="framerate" name="framerate">
              <option value="" selected="selected">Not Determined</option>
              <option value=" -r 24 ">24 fps</option>
              <option value=" -r 25 ">25 fps</option>
              <option value=" -r 30 ">30 fps</option>
              <option value=" -r 48 ">48 fps</option>
              <option value=" -r 50 ">50 fps</option>
              <option value=" -r 60 ">60 fps</option>
            </select>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" id="btn_convert" data-dismiss="modal">Download</button>
      </div>
    </div>
  </div>
</div>
