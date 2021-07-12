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
<!-- /#wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
<?php }else { ?>

<hr>

<!-- Footer -->
<footer>
  <div class="row">
    <div class="col-lg-12">
      <p>Copyright &copy; Your Website 2014</p>
    </div>
  </div>
  <!-- /.row -->
</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>

<?php } ?>