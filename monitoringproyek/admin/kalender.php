<?php include_once('functions.php'); ?>
<!DOCTYPE HTML>
<html>
<?php include"tampilan/head.php";?>
<link type="text/css" rel="stylesheet" href="jscript/style.css"/>
<script src="jscript/jquery.min.js"></script>

<body class="cbp-spmenu-push">
	<div class="main-content">
<?php include"tampilan/menukal.php";?>
	<?php include"tampilan/topkal.php";?>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
	
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<center><h2 class="title1">Kalender Jadwal Pengawasan</h2><center>
			
                   
	<!--//photoday-section-->

		<!-- mainpage-chit -->
		<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                                        <header class="widget-header">
                                            <h4 class="widget-title">Recent Followers</h4>
                                        </header>
							<hr class="widget-separator">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Project</th>
                                      <th>Manager</th>                                   
                                                                        
                                      <th>Status</th>
                                      <th>Progress</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Face book</td>
                                  <td>Alexander</td>                                 
                                                             
                                  <td><span class="label label-danger">in progress</span></td>
                                  <td><span class="badge badge-info">70%</span></td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Twitter</td>
                                  <td>Lucika adam</td>                               
                                                                  
                                  <td><span class="label label-success">completed</span></td>
                                  <td><span class="badge badge-success">80%</span></td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Google</td>
                                  <td>Michael</td>                                
                                  
                                  <td><span class="label label-warning">in progress</span></td>
                                  <td><span class="badge badge-warning">30%</span></td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>LinkedIn</td>
                                  <td>Chris dany</td>                                 
                                                             
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-info">55%</span></td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>Tumblr</td>
                                  <td>Jacob velly</td>                                
                                                                 
                                  <td><span class="label label-warning">in progress</span></td>
                                  <td><span class="badge badge-danger">75%</span></td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>Tesla</td>
                                  <td>Donald chris</td>                                  
                                                             
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-success">25%</span></td>
                              </tr>
                              <tr>
                                  <td>7</td>
                                  <td>Behance</td>
                                  <td>alexa louis</td>                                  
                                                             
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-success">100%</span></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
      <div class="col-md-6 chit-chat-layer1-rit">    	
      	  <div class="geo-chart">
					<section id="charts1" class="charts">
				<div class="wrapper-flex">
				
				 
				
				    <div class="col geo_main">
				         <h3 id="geoChartTitle">World Market</h3>
				        <div id="calendar_div" class="chart"> <?php echo getCalender(); ?> </div>
				        <div id="calendar_div" class="container">

   
				    </div>
				
				
				</div><!-- .wrapper-flex -->
				</section>				
			</div>

      </div>
     <div class="clearfix"> </div>
</div>
		<!-- //mainpage-chit -->
		
		
		<!-- //calendar -->	
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	   </div>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->
	
	<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
		</script>
	<!-- //calendar -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>