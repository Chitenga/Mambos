
<?php wp_footer(); ?>
<!-- footer -->
<?php if ( have_rows( 'footer' ) ) : ?>
	<?php while ( have_rows( 'footer' ) ) : the_row(); ?>
<section class="footer"  >
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="<?php $logo1 = get_sub_field( 'logo1' );echo $logo1['url']; ?>" alt="" class="logo1">
                </div>
                <div class="col-md-3">
                    <img src="<?php $pexels = get_sub_field( 'pexels' );echo $pexels['url']; ?>" alt="" class="pexels">
                </div>
                <div class="col-md-7">
                    <div class="link">
                        <div class="lin">
                            <h3><?php the_sub_field( 'h3' ); ?></h3>
                            <h3><?php the_sub_field( 'h33' ); ?></h3>
                        </div>
                        <?php if ( have_rows( 'text1' ) ) : ?>
			            <?php while ( have_rows( 'text1' ) ) : the_row(); ?>
                        <div class="text1">
                            <a href="#"><?php the_sub_field( 'a' ); ?></a>
                            <p><?php the_sub_field( 'p' ); ?></p>
                        </div>
                        <div class="text1">
                            <a href="#"><?php the_sub_field( 'a_copy' ); ?></a>
                            <p><?php the_sub_field( 'p' ); ?></p>
                        </div>
                        <div class="text1">
                            <a href="#"><?php the_sub_field( 'a_copy2' ); ?></a>
                            <p><?php the_sub_field( 'p' ); ?></p>
                        </div>
                        <div class="text1">
                            <a href="#"><?php the_sub_field( 'a_copy3' ); ?></a>
                            <p><?php the_sub_field( 'p' ); ?></p>
                        </div> 
                        <?php endwhile; ?>
		                <?php endif; ?>
                    </div>
                   <img src="<?php $rec = get_sub_field( 'rec' );echo $rec['url']; ?>" width="100%" alt="" class="rec mt-5">
                </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end footer -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/jQuery v2.2.0.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
</body>
</html>