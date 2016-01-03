<div class="bottom-footer">
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <h2 class="fg-white text-center"><a href="#">BECOME A PARTNER WITH US</a> </h2>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <h5 class="fg-white">Company</h5>
                    <ul>
                        <li><a href="#">Link 1</a> </li>
                        <li><a href="#">Link 1</a> </li>
                        <li><a href="#">Link 1</a> </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h5 class="fg-white">Partner</h5>
                    <ul>
                        <li><a href="#">Link 1</a> </li>
                        <li><a href="#">Link 1</a> </li>
                        <li><a href="#">Link 1</a> </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h5 class="fg-white">Policy Info</h5>
                    <ul class="">
                        <li><a href="#">Link 1</a> </li>
                        <li><a href="#">Link 1</a> </li>
                        <li><a href="#">Link 1</a> </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h5 class="fg-white">Thanks for people</h5>
                    <ul>
                        <li><a href="#">Link 1</a> </li>
                        <li><a href="#">Link 1</a> </li>
                        <li><a href="#">Link 1</a> </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
    <div class="row text-center">
            <h3 class="fg-white fg-hover-red">just-jawai</h3>
            <h5 class="fg-white">TM & © 2015, Sumerpur Government</h5>
    </div>
</div>
</div>

        <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url() ?>asset/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <!--File upload-->
    <script src="<?php echo base_url() ?>asset/js/jquery.fileupload.js" type="text/javascript"></script>

    <!--angularks-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.14.3/ui-bootstrap-tpls.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url() ?>asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url() ?>asset/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>asset/dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url() ?>asset/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url() ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url() ?>asset/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url() ?>asset/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>asset/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo base_url() ?>asset/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php echo base_url() ?>asset/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <!-- Parsley 2.0.7 -->
    <script src="<?php echo base_url() ?>asset/plugins/parsley/parsley.min.js" type="text/javascript"></script>
    <!--select 2--> 
    <script src="<?php echo base_url() ?>asset/plugins/select2/js/select2.js" type="text/javascript"></script>
    <!--easy ticker-->
    <script src="<?php echo base_url() ?>asset/ticker/jquery.easing.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>asset/ticker/jquery.easy-ticker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>asset/notifier/js/jquery.toast.js" type="text/javascript"></script>
    <!--enable select2 search in modal-->
    <script type="text/javascript">$.fn.modal.Constructor.prototype.enforceFocus = function () {};</script>
    <!--Site application js-->
    <script src="<?php echo base_url() ?>asset/js/app.js" type="text/javascript"></script>
    
    </body>
</html>

<script>

//main carousel 
$(document).ready( function() {
    $('#myCarousel').carousel({
    	interval:   4000
	});
    $('[data-toggle="tooltip"]').tooltip()
	
	
});

</script>

<script type="text/javascript">
$(document).ready(function(){

	var dd = $('.vticker').easyTicker({
		direction: 'up',
		easing: 'easeInOutBack',
		speed: 'slow',
		interval: 5000,
		height: 'auto',
		visible: 3,
		mousePause: 0,
                controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle',
			stopText: 'Stop !!!'
		}
	}).data('easyTicker');
//        dd.stop();
	
	cc = 1;
	$('.aa').click(function(){
		$('.vticker ul').append('<li>' + cc + ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
		cc++;
	});
	
	$('.vis').click(function(){
		dd.options['visible'] = 5;
		
	});
	
	$('.visall').click(function(){
		dd.stop();
		dd.options['visible'] = 0 ;
		dd.start();
	});
        
        
        
        

        $('#drpdwn-category').select2({
            placeholder: "Category"
        });
	
});
</script>
<script type="text/javascript">
        //$.get('http://api.openweathermap.org/data/2.5/weather?zip=306902,india',function (res){
          //  console.log(res);
        //});
</script>


