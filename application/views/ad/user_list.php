<div id="page-wrapper" >
            <!-- /.row --><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Users Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Actions(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
foreach ($adm as $row) {?>

                                        <tr class="odd gradeX">
                                            <td><?=$row['username']?></td>
                                            <td><?=$row['user_type']?></td>
                                            <td class="center">
                                            <a href="<?= base_url(); ?>welcome/deleteuser/<?=$row['user_id']?>" class="btn btn-danger" onclick="return confirm(
  'Are you sure you want delete?');"> <i class="fa fa-edit fa-fw"></i>Delete</a>

                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
    <script src="<?php echo base_url(); ?>rest/js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        $(document).ready( function() {

            $('.btn-primary').click( function() {
        
                var id = $(this).attr("id");
         
                if(confirm("Are you sure you want to delete this News?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_news.php",
                        data: ({id: id}),
                        cache: false,
                        success: function(html){
                            $(".del"+id).fadeOut('slow'); 
                        } 
                    }); 
                }else{
                    return false;}
            });             
        });
    </script>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                    <!-- /.panel -->
             

                </div>
                </div>
            <!-- /.row -->
