<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
	<title>Graphs - mobileMule</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.css" />
	<link rel="stylesheet" href="mystyle.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="myscript.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.js"></script>
</head>
	<?php amule_load_vars("stats_graph"); ?>
<body>
	<div data-role="page" id="graphs" class="type-interior">

        <div data-role="panel" id="menu-panel" data-display="reveal" data-position-fixed="true">
            <!-- here is injected menù from pagebeforecreate event -->
        </div>

        <div data-role="header" data-position="fixed">
            <a href="#menu-panel" data-rel="close" id="btMenu" data-icon="home" class="ui-btn-left">Menu</a>
            <h1><i class="fa fa-bar-chart-o fa-fw"></i> Graph</h1>
            <a href="#" data-rel="back" data-icon="arrow-l" class="ui-btn-right">Back</a>
        </div><!-- /header -->

		<div data-role="content">
				<div data-role="collapsible-set">
					<div data-role="collapsible"  data-content-theme="c" data-collapsed="false">
						<h3>Download-Speed</h3>
						<img src="amule_stats_download.png" width="100%" border="0" />
					</div>
					<div data-role="collapsible"  data-content-theme="c">
						<h3>Upload-Speed</h3>
			        	<img src="amule_stats_upload.png" width="100%" border="0" />
			        </div>
			        <div data-role="collapsible"  data-content-theme="c">
			      		<h3>Connections</h3>
			          	<img src="amule_stats_conncount.png" width="100%" border="0" />
			        </div>
		        </div>
		</div>
		<!-- /content -->

        <div id="menu" class="content-secondary">
            <!-- here is injected menù from pagebeforecreate event -->
        </div>
	</div>
	<!-- /page -->

	<script>
            //App custom javascript
        </script>
</body>
</html>
