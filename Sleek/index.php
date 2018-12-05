<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
    <!-- <script src="main.js"></script> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>    
    <header>
        <div class="container">
            <h1>
                <a href="index.html"><?php bloginfo('name'); ?></a>
                <small><?php bloginfo('description'); ?></small>
            </h1>
            <div class="header-right">
                <form method='get' action="<?php esc_url(home_url('/')); ?>">
                    <input name='s' type="text" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>
    
    <nav class="nav main-nav">
        <div class="container">
           <?php 
                $args=array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu($args); ?>
        </div>
    </nav>

    <div class="container content">
        <div class="block main">
            <article class="post">
                <h2>Blog Post One</h2>
                <p class="meta">posted at 11:00 by Admin</p>
                <p>Pastry apple pie croissant cake caramels icing fruitcake sweet. Jelly liquorice cake. I love candy canes candy. Sweet roll oat cake jelly powder macaroon cake. Topping halvah cheesecake dessert. I love donut cake lemon drops bear claw jelly-o pudding. Carrot cake sweet sesame snaps candy lollipop jelly beans croissant sesame snaps gummies. Tootsie roll I love jelly-o tiramisu. Croissant I love sesame snaps halvah. Lemon drops marzipan cookie gingerbread pudding tootsie roll I love tootsie roll marzipan. Tiramisu sesame snaps chocolate I love lemon drops. Toffee chocolate fruitcake. Biscuit brownie gingerbread bonbon pastry chocolate ice cream bear claw tart.</p>

                <a href="#" class="button"></a>
            </article>

            <article class="post">
                    <h2>Blog Post 2</h2>
                    <p class="meta">posted at 11:00 by Admin</p>
                    <p>Pastry apple pie croissant cake caramels icing fruitcake sweet. Jelly liquorice cake. I love candy canes candy. Sweet roll oat cake jelly powder macaroon cake. Topping halvah cheesecake dessert. I love donut cake lemon drops bear claw jelly-o pudding. Carrot cake sweet sesame snaps candy lollipop jelly beans croissant sesame snaps gummies. Tootsie roll I love jelly-o tiramisu. Croissant I love sesame snaps halvah. Lemon drops marzipan cookie gingerbread pudding tootsie roll I love tootsie roll marzipan. Tiramisu sesame snaps chocolate I love lemon drops. Toffee chocolate fruitcake. Biscuit brownie gingerbread bonbon pastry chocolate ice cream bear claw tart.</p>
    
                    <a href="#" class="button"></a>
                </article>
                <article class="post">
                        <h2>Blog Post 3</h2>
                        <p class="meta">posted at 11:00 by Admin</p>
                        <p>Pastry apple pie croissant cake caramels icing fruitcake sweet. Jelly liquorice cake. I love candy canes candy. Sweet roll oat cake jelly powder macaroon cake. Topping halvah cheesecake dessert. I love donut cake lemon drops bear claw jelly-o pudding. Carrot cake sweet sesame snaps candy lollipop jelly beans croissant sesame snaps gummies. Tootsie roll I love jelly-o tiramisu. Croissant I love sesame snaps halvah. Lemon drops marzipan cookie gingerbread pudding tootsie roll I love tootsie roll marzipan. Tiramisu sesame snaps chocolate I love lemon drops. Toffee chocolate fruitcake. Biscuit brownie gingerbread bonbon pastry chocolate ice cream bear claw tart.</p>
        
                        <a href="#" class="button"></a>
                </article>
        </div>
        <div class="side">
            <div class="block">
                <h3>Sidebar Head</h3>
                <p> I love donut cake lemon drops bear claw jelly-o pudding. Carrot cake sweet sesame snaps candy lollipop jelly beans croissant sesame snaps gummies. Tootsie roll I love jelly-o tiramisu.</p>
                <a href="#" class="button">Button</a>
            </div>
        </div>
    </div>

    <footer class='main-footer'>
        <div class="container">
            <div class="footer-left">
                <p>&copy; 2018 iQuixotic</p>
            </div>
            <div class="footer-right">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">About</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>