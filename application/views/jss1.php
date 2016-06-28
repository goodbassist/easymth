                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> J.S.S. 1<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php 
foreach ($jss_1 as $row) {?>
                            <li>
                                <a href="<?= base_url(); ?>maths/cat/<?=$row['cat_class']?>/<?=$row['cat_slug']?>"><?=$row['cat_name']?></a>
                            </li>
<?php } ?>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
 <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> J.S.S. 2<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php 
foreach ($jss_2 as $row) {?>
                            <li>
                                <a href="<?= base_url(); ?>maths/cat/<?=$row['cat_class']?>/<?=$row['cat_slug']?>"><?=$row['cat_name']?></a>
                            </li>
<?php } ?>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> J.S.S. 3<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php 
foreach ($jss_3 as $row) {?>
                            <li>
                                <a href="<?= base_url(); ?>maths/cat/<?=$row['cat_class']?>/<?=$row['cat_slug']?>"><?=$row['cat_name']?></a>
                            </li>
<?php } ?>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> S.S.S. 1<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php 
foreach ($sss_1 as $row) {?>
                            <li>
                                <a href="<?= base_url(); ?>maths/cat/<?=$row['cat_class']?>/<?=$row['cat_slug']?>"><?=$row['cat_name']?></a>
                            </li>
<?php } ?>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                                         <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> S.S.S. 2<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php 
foreach ($sss_2 as $row) {?>
                            <li>
                                <a href="<?= base_url(); ?>maths/cat/<?=$row['cat_class']?>/<?=$row['cat_slug']?>"><?=$row['cat_name']?></a>
                            </li>
<?php } ?>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                                         <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> S.S.S. 3<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php 
foreach ($sss_3 as $row) {?>
                            <li>
                                <a href="<?= base_url(); ?>maths/cat/<?=$row['cat_class']?>/<?=$row['cat_slug']?>"><?=$row['cat_name']?></a>
                            </li>
<?php } ?>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
