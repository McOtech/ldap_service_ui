<?php

namespace Paudel\App\includes;

class Footer
{
  function __construct()
  {
  }
}

?>

<?php if ($_GET['r'] != 'login' && $_GET['r'] != 'register') { ?>
</div>
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<footer class="footer">
  <div class="container-fluid clearfix">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Kisii University</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Visit <a
        href="https://kisiiuniversity.ac.ke/" target="_blank">Kisii University</a>
      website</span>
  </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
<?php } ?>
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="assets/js/shared/off-canvas.js"></script>
<script src="assets/js/shared/misc.js"></script>
<!-- endinject -->
<script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>