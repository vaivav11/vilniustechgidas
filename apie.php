<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<?php 
	include 'header.php' 
?>
<body class="hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
<div class="wrapper">
  <?php include 'topbar.php' ?>


  <div class="content-wrapper">
  	 <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-body text-white">
	    </div>
	  </div>
    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
    <section class="about-section">
        <div class="container">
            <div class="row">                
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Pagrindiniai kontaktai</h2>
                        </div>
                      <div class="text">
                      Dokumentų valdymo skyrius: <br>
                      Saulėtekio al. 11, 10223 Vilnius <br>
                       <br>
                      Telefonas (8 5) 274 5030 <br>
                      Vietinis telefonas 9030 <br>
                      Informacija stojantiesiems: (8 5) 274 4949, priemimas@vilniustech.lt <br>
                      El. paštas vilniustech@vilniustech.lt <br>
                      Kabinetas SRC 702 <br>
                      Pagrindinė internetinė svetainė: <a href="https://www.vilniustech.lt/">https://www.vilniustech.lt</a> <br>
                      <br>

                        <div class="btn-box">
                            <!-- <a href="#" class="theme-btn btn-style-one">Contact Us</a> -->
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </section>


  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>&copy; 2023  Vilnius Tech. </strong>
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- Bootstrap -->
<?php include 'footer.php' ?>
</body>
</html>
