		</div>
    </div>
		<footer class="footer text-center"> 2018 &copy; Faculty Scheduling System</footer>
        <!-- /#page-wrapper -->
    </div>
</div>
    
    <!-- <script src="assets/plugins/bower_components/datatables/dataTables.bootstrap.js"></script> -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard1.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/validator.js"></script>

    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>

    
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script type="text/javascript">
        function resetForm1()
        {
            $('#change_pass')[0].reset();  
        }


        function changePass()
        {
            $('#openMod1').trigger('click');
        }

    $(document).ready(function()
    {
        $('#change_pass').on("submit", function(e)
        {
            e.preventDefault();
            var password = $('#con_pass').val();
            $.ajax({
                url: '<?php echo base_url("Access/changepass"); ?>', 
                type: "POST",        
                data: {password:password},
                success: function(data)   
                {
                    if(data == 'SUCCESS')
                    {
                        swal({
                                title: "Updated!",
                                text: "The password has been changed.",
                                icon: "success",
                                button: false
                                });
                        $('#modalNewPass').modal('hide');
                        setTimeout(function(){
                                window.location.replace("<?php echo base_url(); ?>")
                            },500);
                        
                    }

                    if(data == 'FAILURE')
                    {
                        swal("Not Updated!", "Something blew up. Try again", "error");
                        $('#change_pass')[0].reset();
                    }
                           
                },
                error: function(data)
                {
                        
                }
                });
            });
        });


    </script>
</body>
</html>