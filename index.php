<?php get_header(); ?>

    <!-- banner -->
    <?php if ( have_rows( 'banner' ) ) : ?>
	<?php while ( have_rows( 'banner' ) ) : the_row(); ?>
    <section class="banner">
        <div class="container">
                <div class="row">
                        <div class="col-md-6">
                            <h1>The Outright <b>KING</b> <br> Of Zimbawe <b>Shwarmas</b> <br> All At Only <b>$1.50</b></h1>
                            <h1 id="h">The Outright Of <br> Zimbabwe Shwarmas</h1>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php $rect = get_sub_field( 'rect' ); echo $rect['url']; ?>" alt="" class="rect">
                            <img src="<?php $food = get_sub_field( 'food' ); echo $food['url']; ?>" alt="" class="food">
                            <a href="#" type="button" class="btn"><?php the_sub_field( 'btn' ); ?></a>
                        </div>
                </div>
        </div>
        <img src="imgs/pexels-nataliya-.png" alt="" class="spoon">
       <div class="aa">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Component 2 – 1.png" alt="" class="aaaa">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Component 2 – 4.png" alt="" class="aaa">
       </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end banner -->

    <!-- about -->
    <?php if ( have_rows( 'about' ) ) : ?>
	<?php while ( have_rows( 'about' ) ) : the_row(); ?>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_sub_field( 'p' ); ?></h2>
                    <img src="<?php $mamb = get_sub_field( 'mamb' );echo $mamb['url']; ?>" alt="" class="mambo">
                </div>
                <div class="col-md-6">
                    <div class="cards">
                        <div class="card">
                            <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="">
                            <p><?php the_sub_field( 'p1' ); ?></p>
                            <div class="car">
                                <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="c">
                                <p><?php the_sub_field( 'p1' ); ?></p>
                            </div>
                        </div>
                        <div class="card" id="cc">
                            <img src="<?php $img_copy = get_sub_field( 'img_copy' );echo $img_copy['url']; ?>" alt="">
                            <p><?php the_sub_field( 'p1' ); ?></p>
                            <div class="car">
                                <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="c">
                                <p><?php the_sub_field( 'p1' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="card">
                            <img src="<?php $img_copy2 = get_sub_field( 'img_copy2' );echo $img_copy2['url']; ?>" alt="">
                            <p><?php the_sub_field( 'p1' ); ?></p>
                            <div class="car">
                                <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="c">
                                <p><?php the_sub_field( 'p1' ); ?></p>
                            </div>
                        </div>
                        <div class="card" id="cc" >
                            <img src="<?php $img_copy3 = get_sub_field( 'img_copy3' );echo $img_copy3['url']; ?>" alt="">
                            <p><?php the_sub_field( 'p1' ); ?></p>
                            <div class="car">
                                <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="c">
                                <p><?php the_sub_field( 'p1' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end about -->

    <!-- services -->
    
<?php if ( have_rows( 'services' ) ) : ?>
	<?php while ( have_rows( 'services' ) ) : the_row(); ?>
    <section class="services">

        <div class="tabContainer">
            <div class="buttonContainer">
            <?php if ( have_rows( 'button' ) ) : ?>
			<?php while ( have_rows( 'button' ) ) : the_row(); ?>
                <button class="btn" onclick="showPanel(0,)"><img src="<?php $im = get_sub_field( 'im' );echo $im['url']; ?>" alt=""> <h3><?php the_sub_field( 'h3' ); ?></h3></button>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php if ( have_rows( 'button_copy' ) ) : ?>
			<?php while ( have_rows( 'button_copy' ) ) : the_row(); ?>
                <button class="btn" onclick="showPanel(1,)"><img src="<?php $imgs = get_sub_field( 'imgs' );echo $imgs['url']; ?>" alt=""><h3><?php the_sub_field( 'h3' ); ?></h3></button>
                <?php endwhile; ?>
		    <?php endif; ?>

            <?php if ( have_rows( 'button_copy2' ) ) : ?>
			<?php while ( have_rows( 'button_copy2' ) ) : the_row(); ?>
                <button class="btn" onclick="showPanel(2,)"><img src="<?php $img2 = get_sub_field( 'img2' );echo $img2['url']; ?>" alt=""><h3><?php the_sub_field( 'h3' ); ?></h3></button>
                <?php endwhile; ?>
		    <?php endif; ?>

            <?php if ( have_rows( 'button_copy3' ) ) : ?>
			<?php while ( have_rows( 'button_copy3' ) ) : the_row(); ?>
                <button class="btn" id="d" onclick="showPanel(3,)"><img src="<?php $img3 = get_sub_field( 'img3' );echo $img3['url']; ?>" alt="" id="v"><h3>shwarma</h3></button>
                <?php endwhile; ?>
		    <?php endif; ?>

            <?php if ( have_rows( 'button_copy4' ) ) : ?>
			<?php while ( have_rows( 'button_copy4' ) ) : the_row(); ?>
                <button class="btn" id="d" onclick="showPanel(4,)"><img src="<?php $img5 = get_sub_field( 'img5' );echo $img5['url']; ?>" alt="" id="d"><h3>pizzas</h3></button>
                <?php endwhile; ?>
		    <?php endif; ?>
            </div>
            <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="line">

            <?php if ( have_rows( 'tab_panel' ) ) : ?>
	        <?php while ( have_rows( 'tab_panel' ) ) : the_row(); ?>
            <div class="tabPanel">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                           <div class="text">
                            <p><?php the_sub_field( 'menu' ); ?></p>
                            <hr> 
                            <p class="c"><?php the_sub_field( 'price' ); ?></p>
                           </div>
                           <div class="text">
                            <p><?php the_sub_field( 'menu' ); ?></p>
                            <hr> 
                            <p class="c"><?php the_sub_field( 'price' ); ?></p>
                           </div>
                           <div class="text">
                            <p><?php the_sub_field( 'menu' ); ?></p>
                            <hr> 
                            <p class="c"><?php the_sub_field( 'price' ); ?></p>
                           </div>
                           <div class="text">
                            <p><?php the_sub_field( 'menu' ); ?></p>
                            <hr> 
                            <p class="c"><?php the_sub_field( 'price' ); ?></p>
                           </div>
                           <div class="text">
                            <p><?php the_sub_field( 'menu' ); ?></p>
                            <hr> 
                            <p class="c"><?php the_sub_field( 'price' ); ?></p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="text">
                            <p><p><?php the_sub_field( 'menu' ); ?></p></p>
                            <hr> 
                            <p class="c"><?php the_sub_field( 'price' ); ?></p>
                           </div>
                           <div class="text">
                            <p><p><?php the_sub_field( 'menu' ); ?></p></p>
                            <hr> 
                            <p class="c"><?php the_sub_field( 'price' ); ?></p>
                           </div>
                           <div class="text">
                            <p><p><?php the_sub_field( 'menu' ); ?></p></p>
                            <hr> 
                            <p class="c"><?php the_sub_field( 'price' ); ?></p>
                           </div>
                           <div class="text">
                            <p><p><?php the_sub_field( 'menu' ); ?></p></p>
                            <hr> 
                            <p class="c"><?php the_sub_field( 'price' ); ?></p>
                           </div>
                           <div class="text">
                            <p><p><?php the_sub_field( 'menu' ); ?></p></p>
                            <hr> 
                            <p class="c"><?php the_sub_field( 'price' ); ?></p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
		    <?php endif; ?>
            
        </div>
    </section>
    
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end services -->

    <!-- menu -->
    <?php if ( have_rows( 'slide' ) ) : ?>
	<?php while ( have_rows( 'slide' ) ) : the_row(); ?>
    <section class="m">
        <div class="slider">
            <div class="men">
                <div class="text">
                    <h4><?php the_sub_field( 'h' ); ?></h4>
                    <p></p>
                    <a href="#" type="button" class="btn"><?php the_sub_field( 'button' ); ?></a>
                </div>
                <div class="img">
                    <img src="<?php $mg = get_sub_field( 'mg' );echo $mg['url']; ?>" alt="" class="f img-fluid">
                </div>
            </div>
            <div class="men" id="nn">
                <div class="text">
                    <h4><?php the_sub_field( 'h1' ); ?></h4>
                    <p><?php the_sub_field( 'p1' ); ?></p>
                    <a href="#" type="button" class="btn"><?php the_sub_field( 'button' ); ?></a>
                </div>
                <div class="img">
                    <img src="<?php $mg1 = get_sub_field( 'mg1' );echo $mg1['url']; ?>" alt="" class="f img-fluid">
                </div>
            </div>
            
            <div class="men" id="mm">
                <div class="text">
                    <h4><?php the_sub_field( 'h2' ); ?></h4>
                    <p><?php the_sub_field( 'p2' ); ?></p>
                    <a href="#" type="button" class="btn"><?php the_sub_field( 'button' ); ?></a>
                </div>
                <div class="img">
                    <img src="<?php $mg2 = get_sub_field( 'mg2' );echo $mg2['url']; ?>" alt="" class="f img-fluid">
                </div>
            </div>
            <div class="men">
                <div class="text">
                    <h4><?php the_sub_field( 'h' ); ?></h4>
                    <p></p>
                    <a href="#" type="button" class="btn"><?php the_sub_field( 'button' ); ?></a>
                </div>
                <div class="img">
                    <img src="<?php $mg = get_sub_field( 'mg' );echo $mg['url']; ?>" alt="" class="f img-fluid">
                </div>
            </div>
            <div class="men" id="nn">
                <div class="text">
                    <h4><?php the_sub_field( 'h1' ); ?></h4>
                    <p><?php the_sub_field( 'p1' ); ?></p>
                    <a href="#" type="button" class="btn"><?php the_sub_field( 'button' ); ?></a>
                </div>
                <div class="img">
                    <img src="<?php $mg1 = get_sub_field( 'mg1' );echo $mg1['url']; ?>" alt="" class="f img-fluid">
                </div>
            </div>
            
            <div class="men" id="mm">
                <div class="text">
                    <h4><?php the_sub_field( 'h2' ); ?></h4>
                    <p><?php the_sub_field( 'p2' ); ?></p>
                    <a href="#" type="button" class="btn"><?php the_sub_field( 'button' ); ?></a>
                </div>
                <div class="img">
                    <img src="<?php $mg2 = get_sub_field( 'mg2' );echo $mg2['url']; ?>" alt="" class="f img-fluid">
                </div>
            </div>
            
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end menu -->

    <!-- testimony -->
    <?php if ( have_rows( 'testimony_' ) ) : ?>
	<?php while ( have_rows( 'testimony_' ) ) : the_row(); ?>
    <section class="testimony">
        <div class="pic">
            <img src="<?php $red1 = get_sub_field( 'red1' );echo $red1['url']; ?>" alt="" class="red1">
            <img src="	<?php $red = get_sub_field( 'red' );echo $red['url']; ?>" alt="" class="red">
        </div>
        <h2><?php the_sub_field( 'h2' ); ?></h2>
        <div class="tabsContainer">
        <?php if ( have_rows( 'panel' ) ) : ?>
			<?php while ( have_rows( 'panel' ) ) : the_row(); ?>
            <div class="tabsPanel">
                <img src="<?php $path = get_sub_field( 'path' );echo $path['url']; ?>" alt="">
                    <p><?php the_sub_field( 'pp' ); ?></p>
                        <div class="tt">
                            <h4><?php the_sub_field( 'hh' ); ?></h4>
                        <p class="panel"><?php the_sub_field( 'name' ); ?></p>
                        </div>
                        <img src="<?php $lines = get_sub_field( 'lines' );echo $lines['url']; ?>" alt="" class="lines">
            </div>
            <?php endwhile; ?>
		<?php endif; ?>

        <?php if ( have_rows( 'panel_1' ) ) : ?>
			<?php while ( have_rows( 'panel_1' ) ) : the_row(); ?>
            <div class="tabsPanel">
            <img src="<?php $path1 = get_sub_field( 'path1' );echo $path1['url']; ?>" alt="">
                    <p><?php the_sub_field( 'pp' ); ?></p>
                        <div class="tt">
                            <h4><?php the_sub_field( 'hh' ); ?></h4>
                        <p class="panel"><?php the_sub_field( 'name' ); ?></p>
                        </div>
                        <img src="<?php $lines1 = get_sub_field( 'lines1' );echo $lines1['url']; ?>" alt="" class="lines">
            </div>
            <?php endwhile; ?>
		<?php endif; ?>

        <?php if ( have_rows( 'panel_2' ) ) : ?>
			<?php while ( have_rows( 'panel_2' ) ) : the_row(); ?>
            <div class="tabsPanel">
            <img src="<?php $path1 = get_sub_field( 'path1' );echo $path1['url']; ?>" alt="">
                    <p><?php the_sub_field( 'pp' ); ?></p>
                        <div class="tt">
                            <h4><?php the_sub_field( 'hh' ); ?></h4>
                        <p class="panel"><?php the_sub_field( 'name' ); ?></p>
                        </div>
                        <img src="<?php $lines1 = get_sub_field( 'lines1' );echo $lines1['url']; ?>" alt="" class="lines">
            </div>
            <?php endwhile; ?>
		<?php endif; ?>
        
        <?php if ( have_rows( 'panel_3' ) ) : ?>
			<?php while ( have_rows( 'panel_3' ) ) : the_row(); ?>
            <div class="tabsPanel">
            <img src="<?php $path1 = get_sub_field( 'path1' );echo $path1['url']; ?>" alt="">
                    <p><?php the_sub_field( 'pp' ); ?></p>
                        <div class="tt">
                            <h4><?php the_sub_field( 'hh' ); ?></h4>
                        <p class="panel"><?php the_sub_field( 'name' ); ?></p>
                        </div>
                        <img src="<?php $lines1 = get_sub_field( 'lines1' );echo $lines1['url']; ?>" alt="" class="lines">
            </div>
            <?php endwhile; ?>
		<?php endif; ?>

        <?php if ( have_rows( 'panel_1' ) ) : ?>
			<?php while ( have_rows( 'panel_1' ) ) : the_row(); ?>
            <div class="tabsPanel">
            <img src="<?php $path1 = get_sub_field( 'path1' );echo $path1['url']; ?>" alt="">
                    <p><?php the_sub_field( 'pp' ); ?></p>
                        <div class="tt">
                            <h4><?php the_sub_field( 'hh' ); ?></h4>
                        <p class="panel"><?php the_sub_field( 'name' ); ?></p>
                        </div>
                        <img src="<?php $lines1 = get_sub_field( 'lines1' );echo $lines1['url']; ?>" alt="" class="lines">
            </div>
            <?php endwhile; ?>
		<?php endif; ?>

        <?php if ( have_rows( 'panel_5' ) ) : ?>
			<?php while ( have_rows( 'panel_5' ) ) : the_row(); ?>
            <div class="tabsPanel">
            <img src="<?php $path1 = get_sub_field( 'path1' );echo $path1['url']; ?>" alt="">
                    <p><?php the_sub_field( 'pp' ); ?></p>
                        <div class="tt">
                            <h4><?php the_sub_field( 'hh' ); ?></h4>
                        <p class="panel"><?php the_sub_field( 'name' ); ?></p>
                        </div>
                        <img src="<?php $lines1 = get_sub_field( 'lines1' );echo $lines1['url']; ?>" alt="" class="lines">
            </div>
            <?php endwhile; ?>
		<?php endif; ?>
    
             <div class="buttonsContainer">
                <button class="bt" onclick="showPanels(0,)"><img src="<?php $bb = get_sub_field( 'bb' );echo $bb['url']; ?>" alt=""></button>
                <button class="bt" onclick="showPanels(1,)"><img src="<?php $bb_1 = get_sub_field( 'bb_1' );echo $bb_1['url']; ?>" alt=""></button>
                <button class="bt" onclick="showPanels(2,)"><img src="<?php $bb_2 = get_sub_field( 'bb_2' );echo $bb_2['url']; ?>" alt=""></button>
                <button class="bt" onclick="showPanels(3,)"><img src="<?php $bb_3 = get_sub_field( 'bb_3' );echo $bb_3['url']; ?>" alt=""></button>
                <button class="bt" onclick="showPanels(4,)"><img src="<?php $bb_4 = get_sub_field( 'bb_4' );echo $bb_4['url']; ?>" alt=""></button>
                <button class="bt" onclick="showPanels(5,)"><img src="<?php $bb_5 = get_sub_field( 'bb_5' );echo $bb_5['url']; ?>" alt=""></button>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end testimony -->

    <!-- taste -->
    <?php if ( have_rows( 'taste' ) ) : ?>
	<?php while ( have_rows( 'taste' ) ) : the_row(); ?>
    <section class="taste">
        <img src="<?php $o = get_sub_field( 'o' );echo $o['url']; ?>" alt="" class="tas">
        <h2><?php the_sub_field( 'h2' ); ?></h2>
        <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="">
    </section>
    <?php endwhile; ?>
   <?php endif; ?>
    <!-- end taste -->

    <!-- news -->
    <?php if ( have_rows( 'news' ) ) : ?>
	<?php while ( have_rows( 'news' ) ) : the_row(); ?>
    <div class="news">
        <img src="<?php $bg = get_sub_field( 'bg' );echo $bg['url']; ?>" alt="" class="bg">
        <div class="new">
            <h2><?php the_sub_field( 'h2' ); ?></h2>
                <img src="<?php $path1 = get_sub_field( 'path1' );echo $path1['url']; ?>" alt="" class="path1">
        </div>

        <?php if ( have_rows( 'slick' ) ) : ?>
			<?php while ( have_rows( 'slick' ) ) : the_row(); ?>
        <div class="slide">
            <div class="slick">
                <img src="<?php $new = get_sub_field( 'new' );echo $new['url']; ?>" alt="" class="new1 ">
            <h4><?php the_sub_field( 'h' ); ?></h4>
            </div>
            <div class="slick">
            <img src="<?php $new1 = get_sub_field( 'new1' );echo $new1['url']; ?>" alt="" class="new1 ">
            <h4><?php the_sub_field( 'h1' ); ?></h4>
            </div>
            <div class="slick">
                <img src="<?php $new = get_sub_field( 'new' );echo $new['url']; ?>" alt="" class="new1 ">
            <h4><?php the_sub_field( 'h' ); ?></h4>
            </div>
            <div class="slick">
            <img src="<?php $new1 = get_sub_field( 'new1' );echo $new1['url']; ?>" alt="" class="new1 ">
            <h4><?php the_sub_field( 'h1' ); ?></h4>
            </div>
            <div class="slick">
                <img src="<?php $new = get_sub_field( 'new' );echo $new['url']; ?>" alt="" class="new1 ">
            <h4><?php the_sub_field( 'h' ); ?></h4>
            </div>
            <div class="slick">
            <img src="<?php $new1 = get_sub_field( 'new1' );echo $new1['url']; ?>" alt="" class="new1 ">
            <h4><?php the_sub_field( 'h1' ); ?></h4>
            </div>
        </div>
            <img src="imgs/Icon open-chevron-left.png" alt="" class="arrow" id="next">
            <img src="imgs/Icon open-chevron-right.png" alt="" class="arrow1" id="next1">
    </div>
    <?php endwhile; ?>
   <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end news -->

    <?php get_footer(); ?>