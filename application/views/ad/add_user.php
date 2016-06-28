<div id="page-wrapper" >
 <div class="row">

            <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          New User
                        </div>
                        <div class="panel-body">
                         <?php if ($success==1) { ?>
                          <div class="alert alert-success" style="width:200px;">
                                User Successfully Added
                            </div>
                       <?php } ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?=base_url()?>welcome/addusers" method="POST">
                                        <div class="form-group">
                                            <label>UserName:</label>
                                          
                                            <div><input class="form-control" name="username" required><?php echo form_error('username'); ?></div>
                                        
                                        </div>

                                          <div class="form-group">
                                            <label>Admin Type</label>
                                            <select class="form-control" name="user_type">
                                                <option value="admin">Admin</option>
                                                <option value="sub-admin">Sub-Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input type="password" class="form-control" name="password" required>
                                        
                                        </div>
                                        <button type="submit" class="btn btn-default">Create User</button>
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
