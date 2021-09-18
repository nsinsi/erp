<!DOCTYPE html>
<html lang="en"><head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="YONECO INVENTORY SYSTEM">
  <meta name="author" content="YONECO ICT 2021">
  <meta name="keyword" content="YONECO, inventory system">
  <title>INVENTORY SYSTEM</title>
  <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/manifest.json">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/mycss.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/font-awesome.min.css">

  <link href="https://coreui.io/demo/3.4.0/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  <meta name="robots" content="noindex">
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-118965717-1');
</script><style type="text/css">/* Chart.js */
/*
* DOM element rendering detection
* https://davidwalsh.name/detect-node-insertion
*/
@keyframes chartjs-render-animation {
  from { opacity: 0.99; }
  to { opacity: 1; }
}

.chartjs-render-monitor {
  animation: chartjs-render-animation 0.001s;
}

/*
* DOM element resizing detection
* https://github.com/marcj/css-element-queries
*/
.chartjs-size-monitor,
.chartjs-size-monitor-expand,
.chartjs-size-monitor-shrink {
  position: absolute;
  direction: ltr;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  pointer-events: none;
  visibility: hidden;
  z-index: -1;
}

.chartjs-size-monitor-expand > div {
  position: absolute;
  width: 1000000px;
  height: 1000000px;
  left: 0;
  top: 0;
}

.chartjs-size-monitor-shrink > div {
  position: absolute;
  width: 200%;
  height: 200%;
  left: 0;
  top: 0;
}
</style></head>
<body class="c-app">
  @include('dashboard.admin.sidebar')
  <div class="c-wrapper c-fixed-components">
    @include('dashboard.admin.header')
    <div class="c-body">
      @yield('body')
      @include('dashboard.admin.footer')
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="{{asset('js/coreui.bundle.min.js')}}"></script>
  <!--[if IE]><!-->
  <script src="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/js/svgxuse.min.js"></script>
  <!--<![endif]-->
  <script src="js/coreui-chartjs.bundle.js"></script>
  <script src="js/coreui-utils.js"></script>
  <script src="js/main.js"></script>
    <script src="js/charts.js"></script>
  @yield('scripts')

</body>
</html>
