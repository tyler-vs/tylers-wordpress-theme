<?php
/**
 * footer.php
 *
 * template partial to include footer information such as contact info,
 * copyright notices, sitemap.
 */
 ?>
        <footer class="blog-footer">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 text-center">
                      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>. Running on <a href="https://wordpress.org/" title="WordPress">WordPress <?php bloginfo('version'); ?></a>. The year is <?php echo date('Y'); ?>.</p>
                      <p>
                        <a href="#">Back to top</a>
                      </p>
                  </div>
              </div>
          </div>
        </footer> <!-- /footer -->


        <?php wp_footer(); ?>
    </body>
</html>
