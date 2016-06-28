<div id="page-wrapper" style="min-height: 1000px;">
                <div class="col-lg-12"><br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <b align="right"><?=ucfirst($cat_slug)?></b>
                        </div>            
                    <div class="row">
       <div style="margin-left:30px;">
<ul class="extPosts freeUl">
<?php 
foreach ($sub as $row) {?>
					<li class="extPost">
						<div class="post">
							<div class="postCover">
								<a href="<?= base_url(); ?>maths/vid/<?=$row['cat_class']?>/<?=$row['sub_slug']?>"><img src="<?= base_url(); ?>rest/images/p1.jpg" /></a>
							</div>
							<div class="postTitleWrap">
								<div class="postTitleWrapInner">
									<img src="assets/images/users/html5.jpg" class="img30 uimg rounded" />
									<div class="postTitle">
										<a href="<?= base_url(); ?>maths/vid/<?=$row['cat_class']?>/<?=$row['sub_slug']?>"><span class="title"><?=$row['sub_cat_name']?></span></a>
										<span class="uploader"><?=$row['cat_class']?></span>
									</div>									
								</div>
							</div>
						</div>
					</li>
					<?php } ?>
                              </ul>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>