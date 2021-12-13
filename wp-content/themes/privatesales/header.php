<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title></title>
            <?php wp_head();?>
        </head>
        <body <?php body_class('test'); ?>>
        <header>
            <div class="container">

                <div class="row" >
                    <div class="col  d-flex align-items-center justify-content-between">
                        <a href="<?php bloginfo('url');  ?>">

                    <img src="<?php  bloginfo('template_directory');?> /jmg/logo.PNG" class="img-fluid logo" alt="">
                        </a>
                            <?php
                wp_nav_menu(
                        array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'top-menu d-flex'
                        )
                );?>
                    </div>
                </div>
            </div>
        </header>

