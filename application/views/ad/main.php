
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <!-- /input-group -->
                    </li>
                    <?php 
foreach ($class as $row) {?>
                    <li> 
                        <a href="<?php echo base_url();?>welcome/maincat/<?=$row['cat_class']?>"><i class="fa fa-dashboard fa-fw"></i><?=$row['cat_class']?></a>
                    </li>
                <? } ?>
                   
                   <li>
                        <a href="<?php echo base_url();?>welcome/userslist"><i class="fa fa-table fa-fw"></i> Users</a>
                    </li>
                 </ul>

                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        
    <!-- /#wrapper -->