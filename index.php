<?php get_header(); ?>

<body>
    <div class="container">
        <section class="home" id="home">
            <nav class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#works">Works</a></li>
                    <li><a href="#tools">Tools</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="hero">
                <h1>Web Development Portfolio</h1>
            </div>
        </section>
        <section class="works" id="works">
            <h2>Works</h2>
            <div class="flex">
                <a href="<?php bloginfo('url'); ?>/css/" target="_blank">
                    <div class="flex_item hovereffect">
                        <h3>CSS3 Animation</h3>
                        <div class="overlay">
                            <p>Pure CSS animation with no images or multimedia files, only CSS rules.</p>
                        </div>
                    </div>
                </a>
                <a href="<?php bloginfo('url'); ?>/js/" target="_blank">
                    <div class="flex_item hovereffect">
                        <h3>JS Calc</h3>
                        <div class="overlay">
                            <p>Calculator in JavaScript running on integers. Additional screen clear button.</p>
                        </div>
                    </div>
                </a>
                <a href="<?php bloginfo('url'); ?>/php/" target="_blank">
                    <div class="flex_item hovereffect">
                        <h3>WP PHP Widget</h3>
                        <div class="overlay">
                            <p>Wordpress Plugin/Widget displays products from the XML file at random.</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section class="tools" id="tools">
            <h2>Tools</h2>
            <div class="logos">
                <img alt="Logo HTML" src="<?php bloginfo('stylesheet_directory'); ?>/img/html5.svg">
                <img alt="Logo CSS3" src="<?php bloginfo('stylesheet_directory'); ?>/img/css3.svg">
                <img alt="Logo JS" src="<?php bloginfo('stylesheet_directory'); ?>/img/js.svg">
                <img alt="Logo PHP" src="<?php bloginfo('stylesheet_directory'); ?>/img/php.svg">
            </div>
        </section>
        <section class="contact" id="contact">
            <h2>Contact</h2>
            <p><i class="fas fa-phone fa-lg"></i><span class="personal-data">420499405</span></p>
            <p><i class="fas fa-envelope fa-lg"></i><?php
echo esc_html( antispambot( 'marta.kwasniak@gmail.com' ) );
?></p>
            <p><i class="fab fa-github fa-lg"></i><a href="https://github.com/majoakwsn" target="_blank">github.com/majoakwsn</a></p>
        </section>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up fa-3x"></i></button>
</body>
</html>