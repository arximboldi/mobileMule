<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Status - mobileMule</title>
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.css" />
	<link rel="stylesheet" href="mystyle.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="myscript.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.js"></script>
</head>
<body>
	<div data-role="page" id="status" class="type-interior">

        <div data-role="panel" id="menu-panel" data-display="push">
            <!-- here is injected menù from pagebeforecreate event -->
        </div>

        <div data-role="header" data-position="inline">
            <a href="#menu-panel" data-rel="close" id="btMenu" data-icon="home">Menu</a>
            <h1>Status</h1>
            <a href="#" data-rel="back" data-icon="arrow-l">Back</a>
        </div><!-- /header -->

		<div data-role="content">
				<ul data-role="listview" data-theme="c" data-divider-theme="d">
					<li data-role="list-divider">Speed</li>
					<li>Download / Limit<span id="speed_down" class="ui-li-aside">n / n</span></li>
					<li>Upload / Limit<span id="speed_up" class="ui-li-aside">n / n</span></li>
					<li id="server" data-role="list-divider">Server (init ...)</li>
					<li class="server-child">Address <span id="server-address" class="ui-li-aside">x.x.x.x</span></li>
					<li class="server-child">Name <span id="server-name" class="ui-li-aside">init</span></li>
					<!-- <li class="server-child">Users <span id="server-users" class="ui-li-aside">n</span></li>-->
					<li id="kad" data-role="list-divider">Kad (init ...)</li>
					<li><p><strong>note:</strong> this info is refred each 3 seconds.</p></li>
				</ul>
		</div>
		<!-- /content -->

        <div data-role="footer" role="contentinfo" class="ui-footer" data-theme="c">
            <a href="#" id="btScrollUp" data-role="button" data-icon="arrow-u" data-iconpos="right">scroll up</a>
            <p>&nbsp;<a href="amuleweb-main-about.php" title="about" data-rel="dialog" data-transition="pop">mobileMule</a> &copy; 2014</p>
        </div>
        <!-- /footer -->
	</div>
	<!-- /page -->
</body>
</html>