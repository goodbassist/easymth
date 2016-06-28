<div id="page-wrapper" style="min-height: 1000px;">
                <div class="col-lg-12"><br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?=$title?> <b><?=ucfirst($sub_slug)?></b>
                        </div>            
                    <div class="row">
<?php if (!isset($vid)) {?>
Page accessed incoorectly
<?php }else{ ?>
                    <div style="margin-left:20px;padding-right:10px;">
                    <iframe src="http://www.youtube.com/embed/<?=$vid['vid_link']?>" frameborder="0"  style="width:98%;height:400px;*zoom:1"></iframe>
                            </div>
                            <? } ?>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->

               <div class="row">
            <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Other Videos
                        </div>
                        <div class="panel-body">
                            <div class="row">
                             <div class="panel-body">
                            <div class="row">
                                <div class="list-group">
                                <?php
                                if (!isset($side)) {?>
                                No Videos
<?php } else { foreach ($side as $row) {?>
                                <a href="<?= base_url(); ?>maths/vid2/<?=$row['sub_slug']?>/<?=$row['cat_class']?>/<?=$row['vid_id']?>" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> <?=$row['vid_name']?>
                                    
                                </a>
                                <?php } }?>
                                
                            </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>


            <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ask Questions
                        </div>
                       


<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'stomacademy101'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
             

                </div>
                </div>
            <!-- /.row -->
        </div>
        </div>
        <!-- /#page-wrapper -->
            