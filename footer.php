<?php
/**
 * footer.php
 *
 * template partial to include footer information such as contact info,
 * copyright notices, sitemap.
 */
 ?>
<?php tvs_container_after(); ?>

<?php do_action( 'tvs_before_footer' ); ?>
<footer class="blog-footer" role="colophone">
  <div class="container">
      <div class="row">
          <div class="col-sm-12 text-center">
            <?php tvs_footer_colophone(); ?>
          </div><!-- /.col-sm-12 -->
      </div><!-- /.row -->
  </div><!-- /.container -->
</footer> <!-- /.blog-footer -->
<?php do_action( 'tvs_after_footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>