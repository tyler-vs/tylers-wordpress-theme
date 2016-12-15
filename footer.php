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

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <?php wp_footer(); ?>
    </body>
</html>
