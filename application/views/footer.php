    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url(); ?>rest/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>rest/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>rest/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- Page-Level Plugin Scripts - Dashboard -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url(); ?>rest/js/sb-admin.js"></script>
    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->


    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="<?php echo base_url(); ?>rest/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>rest/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
<!--script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>rest/js/jquery.youtubeplaylist.js"></script>
<script type="text/ecmascript">

        $(function() {
            $("ul.demo1").ytplaylist({deepLinks: true});
            $("ul.demo2").ytplaylist({
                addThumbs:true, 
                autoPlay: false,
                onChange: function() {
                    console.log('changed');
                },
                holderId: 'ytvideo2'});
        });

</script>-->


</body>

</html>