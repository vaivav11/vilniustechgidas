  <?php include'admin/db_connect.php' ?>
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
        <div class="container">
            <div class="row">                
             <div class="col-lg-12">
                <div class="sec-title">
            <h2>Auditorijų užimtumas</h2>
        </div>
            <div class="card card-outline card-primary">
                <div class="card-header">
                <div class="card-body">
                    <table class="table tabe-hover table-bordered" id="list">
                        <colgroup>
                            <col width="10%">
                            <col width="30%">
                            <col width="50%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Laikas</th>
                                <th>Vieta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $qry = $conn->query("SELECT * FROM categories order by unix_timestamp(date_created) desc ");
                            while($row= $qry->fetch_assoc()):
                                $trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
                                unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
                                $desc = strtr(html_entity_decode($row['laikas']),$trans);
                                $desc=str_replace(array("<li>","</li>"), array("",", "), $desc);
                            ?>
                            <tr>
                                <th class="text-center"><?php echo $i++ ?></th>
                                <td><b><?php echo ucwords($row['vieta']) ?></b></td>
                                <td><b class="truncate"><?php echo strip_tags($desc) ?></b></td>
                            </tr>   
                        <?php endwhile; ?>
                        </tbody>
                    </table>

            </div>
        </div>
                </div>


              
            </div>
        </div>
 
     <script>
    $(document).ready(function(){
        $('#list').dataTable()
    $('.delete_category').click(function(){
    _conf("Ar tikrai norite ištrintį šį auditorijų užimtumą?","delete_category",[$(this).attr('data-id')])
    })
    })
    function delete_category($id){
        start_load()
        $.ajax({
            url:'ajax.php?action=delete_category',
            method:'POST',
            data:{id:$id},
            success:function(resp){
                if(resp==1){
                    alert_toast("Sėkmingas pašalinimas!",'success')
                    setTimeout(function(){
                        location.reload()
                    },1500)

                }
            }
        })
    }
</script>

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
