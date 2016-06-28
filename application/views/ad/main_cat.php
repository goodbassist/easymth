<div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?=$title?>
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
foreach ($main as $row) {?>
                                        <tr class="odd gradeX">
                                            <td><?=$row['cat_name']?></td>
                                            <td><?=$row['cat_class']?></td>
                                            <td class="center"><a href="<?= base_url(); ?>welcome/subcat/<?=$row['cat_class']?>/<?=$row['cat_slug']?>"><button type="button" class="btn btn-success"><i class="fa fa-bar-chart-o fa-fw"></i>Sub Category</button></a>
                                            <a href="<?= base_url(); ?>welcome/editcat/<?=$row['cat_id']?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i>Edit</button></a>
                                            <a href="<?= base_url(); ?>welcome/deletecat/<?=$row['cat_id']?>"><button type="button" class="btn btn-danger" onclick="return confirm(
  'Are you sure you want delete?');"><i class="fa fa-times"></i></i>Delete</button></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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
                            <?=$title?> New Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                        
                                    <form role="form" action="<?=base_url()?>welcome/new_cat" method="POST">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" type="hidden" name="cat_class" value="<?=$title?>">
                                            <input class="form-control" name="cat_name" required>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Category Description</label>
                                            <textarea class="form-control" rows="3" name="cat_desc"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Create Category</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>


            <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?=$title?> New Sub Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?=base_url()?>welcome/new_sub_cat" method="POST">


                                        <div class="form-group">
                                            <label>Sub Category Name</label>
                                            <input class="form-control" type="hidden" name="cat_class" value="<?=$title?>">
                                            <input class="form-control" name="sub_cat_name" required>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control" name="cat_slug">
                                           <?php 
                                            foreach ($main as $row) {?>
                                                <option value="<?=$row['cat_slug']?>"><?=$row['cat_name']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Category Description</label>
                                            <textarea class="form-control" rows="3" name="sub_desc"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Create SubCat</button>
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
