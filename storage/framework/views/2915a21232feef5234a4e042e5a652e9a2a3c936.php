<!DOCTYPE html>
<html lang="en">
<head>

  <?php echo $__env->make('requisitions.storesModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('requisitions.travelModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('liquidations.cashModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('liquidations.fuelliModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('leave.applicationModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('item.reportModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('item.bookModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="YONECO INVENTORY SYSTEM">
  <meta name="author" content="YONECO ICT 2021">
  <meta name="keyword" content="YONECO, inventory system">
  <title>YONECO SYSTEM</title>
  <link rel="manifest" href="assets/favicon/manifest.json">
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/mycss.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/font-awesome.min.css">
  <link href="https://coreui.io/demo/3.4.0/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  <meta name="robots" content="noindex">
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-118965717-1');
</script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<style type="text/css">/* Chart.js */
/*
* DOM element rendering detection
* https://davidwalsh.name/detect-node-insertion
*/
@keyframes  chartjs-render-animation {
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
  <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="c-wrapper c-fixed-components">
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="c-body">
      <?php echo $__env->yieldContent('body'); ?>
      <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="<?php echo e(asset('js/coreui.bundle.min.js')); ?>"></script>
  <script src="https://coreui.io/demo/3.4.0/vendors/@coreui/icons/js/svgxuse.min.js"></script>
  <script src="js/coreui-chartjs.bundle.js"></script>
  <script src="js/coreui-utils.js"></script>
  <script src="js/main.js"></script>
  <script src="js/charts.js"></script>
  <script>
  $(document).ready( function () {
    $('#liquidation-expenditure').on('change', function () {
      var linput = $(event.relatedTarget);
      var id = linput.data('id');
      console.log(id)
    })
  });
  </script>
  <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\erp\resources\views/layouts/master.blade.php ENDPATH**/ ?>