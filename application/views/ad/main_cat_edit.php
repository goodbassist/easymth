<div id="page-wrapper">
            <!-- /.row -->
            <div class="row"><br>
            <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Category Edit
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                        <?php if ($success==1) {?>
                            <div class="alert alert-success alert-dismissable" style="width:300px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Category Edited.
                            </div>
                <? } ?>
                                    <form role="form" action="<?=base_url()?>welcome/editcat/<?=$edit_det['cat_id']?>" method="POST">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" name="cat_name" required value="<?=$edit_det['cat_name']?>">
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Category Description</label>
                                            <textarea class="form-control" rows="3" name="cat_desc"><?=$edit_det['cat_desc']?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Edit Category</button>
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

                </div>
                </div>
            <!-- /.row -->
