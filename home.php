<?php include('admin/db_connect.php') ?>
  <div class="google-map">
       <iframe src="https://www.google.com/maps/d/embed?mid=1T9scVxv5p7dmVoV4s32D8wnzGcb9QoI&ehbc=2E312F" width="640" height="480"></iframe>
  </div>

<style type="text/css">
<style>
  .google-map {
    position: relative;
    padding-bottom: 75%; // This is the aspect ratio
    height: 0;
    overflow: hidden;
  }
  .google-map iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
  }
</style>
