<?php

StaticConfig::$pages = array(
    '_global' => array(
        'css' => array(
            '/s/_lib/bootstrap/css/bootstrap.css',
            '/s/_lib/bootstrap/css/bootstrap-responsive.css',
        ),
        'js' => array(
            '/s/_lib/jquery/jquery.js',
            '/s/_lib/bootstrap/js/bootstrap.js',
            '/s/_global/utils.js',
            '/s/_global/class.js',
        ),
    ),
    'Lovecom\Page\Index\View' => array(
        'css' => array(
            '/s/index/index.css',
        ),
        'js' => array(
            '/s/index/index.js',
        ),
    ),
    'Lovecom\Page\Login\View' => array(
        'css' => array(
            '/s/login/login.css',
        ),
        'js' => array(
        ),
    ),
    'Lovecom\Page\Login\PopupView' => array(
        'css' => array(
            '/s/login/login.css',
        ),
        'js' => array(
        ),
    ),
    'Lovecom\Page\Myaccount\View' => array(
        'css' => array(
            '/s/myaccount/myaccount.css',
        ),
        'js' => array(
        ),
    ),
    'Lovecom\Page\Lovebutton\View' => array(
        'css' => array(
            '/s/lovebutton/love.css',
        ),
        'js' => array(
            '/s/lovebutton/love.js',
        ),
    ),
);
