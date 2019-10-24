        </div><!-- end content -->
        </div><!--end wrap-->
        <footer>
          <div class="logo"><span class="accessible-hide">Kislak Center for Special Collections</span></div>

            <div class="row">
                <div id="footer-text" class="col-sm-9">
                    <?php if ( $footerText = get_theme_option('Footer Text') ): ?>
                    <p><?php echo $footerText; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                        <p><?php echo $copyright; ?></p>
                    <?php endif; ?>
                </div>

            </div>
            <div>
                <?php fire_plugin_hook('public_footer'); ?>
            </div>
        </footer>

    <?php
    // Omeka 2.4 and Bootstrap 3.3.7 use the same jQuery (1.12), so it is not
    // recalled.
    ?>
    <?php if (get_theme_option('Use Internal Bootstrap')) :?>
    <script src="<?php echo src('bootstrap.min', 'javascripts', 'js'); ?>"></script>
    <?php else: ?>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php endif; ?>


</body>
</html>
