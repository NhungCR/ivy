<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ivymoda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ivymoda' ); ?></a>

        <header id="masthead" class="site-header">


            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ivymoda' ); ?></button>
                <div class="header">
                    <div class="container">
                        <div class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></div>
                        <div class="menu-nav">
                            <ul>
                                <li><a href="nu">NỮ</a>
                                    <ul>
                                        <li><a href="#">Hàng mới về</a></li>
                                        <li><a href="#">Hàng mới về</a></li>
                                    </ul>
                                </li>
                                <li><a href="">NAM</a>
                                    <ul>
                                        <li><a href="#">Hàng mới về</a></li>
                                        <li><a href="#">Hàng mới về</a></li>
                                    </ul>
                                </li>
                                <li><a href="">TRẺ EM</a>
                                    <ul>
                                        <li><a href="#">Hàng mới về</a></li>
                                        <li><a href="#">Hàng mới về</a></li>
                                    </ul>
                                </li>
                                <li><a href="">SALE</a>
                                    <ul>
                                        <li><a href="#">Hàng mới về</a></li>
                                        <li><a href="#">Hàng mới về</a></li>
                                    </ul>
                                </li>
                                <li><a href="">BỘ SƯU TẬP</a>
                                    <ul>
                                        <li><a href="#">Hàng mới về</a></li>
                                        <li><a href="#">Hàng mới về</a></li>
                                    </ul>
                                </li>
                                <li><a href="">TIN TỨC</a>
                                    <ul>
                                        <li><a href="#">Hàng mới về</a></li>
                                        <li><a href="#">Hàng mới về</a></li>
                                    </ul>
                                </li>
                                <li><a href="">THÔNG TIN</a>
                                    <ul>
                                        <li><a href="#">Hàng mới về</a></li>
                                        <li><a href="#">Hàng mới về</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="header-right">
                            <div class="search">
                                <form action=""><input type="text" placeholder="tìm kiếm"><i class="fas fa-search"></i>
                                </form>
                            </div>
                            <div class="login"><i class="fas fa-user"></i></div>
                            <div class="cart"><i class="fas fa-shopping-bag"></i></div>
                        </div>
                    </div>
                </div>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

        <div id="content" class="site-content">