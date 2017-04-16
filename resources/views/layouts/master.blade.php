<!DOCTYPE html>
<html lang="en">
<head>
    <title>Master</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/assets/master/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/master/css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="/assets/master/css/fullcalendar.css"/>
    <link rel="stylesheet" href="/assets/master/css/matrix-style.css"/>
    <link rel="stylesheet" href="/assets/master/css/matrix-media.css"/>
    <link href="/assets/master/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/assets/master/css/jquery.gritter.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="/master">Control Panel</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
</div>
<!--close-top-Header-menu-->


<!--sidebar-menu-->
<div id="sidebar">
    {{--<a href="/master" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>--}}
    <ul>
        <li class="active"><a href="/master"><i class="icon icon-home"></i> <span>Dashboard</span></a></li>
        {{--<li class="active"><a href="/master/products"><i class="icon icon-exchange"></i> <span>Product Manager</span></a> </li>--}}
        <li class="submenu"><a href="#"><i class="icon icon-th-list"></i> <span>Product Manager</span></a>
            <ul>
                <li><a href="/master/product/create">Create Product</a></li>
                <li><a href="/master/products">Product List</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="/master" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        </div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        @yield('content')
    </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a
                href="/assets/master/http://themedesigner.in">Themedesigner.in</a></div>
</div>

<!--end-Footer-part-->

<script src="/assets/master/js/excanvas.min.js"></script>
<script src="/assets/master/js/jquery.min.js"></script>
<script src="/assets/master/js/jquery.ui.custom.js"></script>
<script src="/assets/master/js/bootstrap.min.js"></script>
<script src="/assets/master/js/jquery.flot.min.js"></script>
<script src="/assets/master/js/jquery.flot.resize.min.js"></script>
<script src="/assets/master/js/jquery.peity.min.js"></script>
<script src="/assets/master/js/fullcalendar.min.js"></script>
<script src="/assets/master/js/matrix.js"></script>
<script src="/assets/master/js/matrix.dashboard.js"></script>
<script src="/assets/master/js/jquery.gritter.min.js"></script>
<script src="/assets/master/js/matrix.interface.js"></script>
<script src="/assets/master/js/matrix.chat.js"></script>
<script src="/assets/master/js/jquery.validate.js"></script>
<script src="/assets/master/js/matrix.form_validation.js"></script>
<script src="/assets/master/js/jquery.wizard.js"></script>
<script src="/assets/master/js/jquery.uniform.js"></script>
<script src="/assets/master/js/select2.min.js"></script>
<script src="/assets/master/js/matrix.popover.js"></script>
<script src="/assets/master/js/jquery.dataTables.min.js"></script>
<script src="/assets/master/js/matrix.tables.js"></script>
<script src="/assets/master/js/wysihtml5-0.3.0.js"></script>
<script src="/assets/master/js/bootstrap-wysihtml5.js"></script>

<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage(newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-") {
                resetMenu();
            }
            // else, send page to designated URL            
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }

    $(document).ready(function () {
        $('.textarea_editor').wysihtml5();
    });
</script>
</body>
</html>
