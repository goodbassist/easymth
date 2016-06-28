<div id="page-wrapper" >
            <!-- /.row --><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?=$title?> <?=$cat_slug?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Class Name</th>
                                            <th>Actions(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
foreach ($sub as $row) {?>

                                        <tr class="odd gradeX">
                                            <td><?=$row['sub_cat_name']?></td>
                                            <td><?=$row['cat_class']?></td>
                                            <td class="center"><a href="<?= base_url(); ?>welcome/videos/<?=$row['cat_class']?>/<?=$row['sub_slug']?>" class="btn btn-success"><i class="fa fa-bar-chart-o fa-fw"></i>Videos</a>
                                            <a href="<?= base_url(); ?>welcome/sub_del/<?=$row['sub_id']?>" class="btn btn-danger" onclick="return confirm(
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

            <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?=$title?> New Video
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?=base_url()?>welcome/new_video" method="POST">
                                        <div class="form-group">
                                            <label>Video Name:</label>
                                            <input class="form-control" type="hidden" name="cat_class" value="<?=$title?>">
                                            <input class="form-control" type="hidden" name="cat_slug" value="<?=$cat_slug?>">
                                            <input class="form-control" name="vid_name" required>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Video Link:</label>
                                            <div style="width:450px;"><input class="form-control" name="vid_link" required></div>
                                        
                                        </div>

                                        <div class="form-group">
                                            <label>Sub Categoery</label>
                                            <select class="form-control" name="sub_slug">
                                           <?php 
                                            foreach ($sub as $row) {?>
                                                <option value="<?=$row['sub_slug']?>"><?=$row['sub_cat_name']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Video Description</label>
                                            <textarea class="form-control" rows="3" name="vid_desc"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Create Video</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
             

                </div>
                </div>
            <!-- /.row -->
