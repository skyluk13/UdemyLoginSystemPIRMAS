<?php

 /*
 *Pradedam sesiją.
 *
 * */
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(   // DB parametrai
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'db' => 'udemy_login_system_1'
    ),
    'remember' => array(      //Skirta sausainukams(Cookies - kiek laiko laikysis ir pan.).
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800, // |1week = 604800 seconds| sioje vietoje nurodom, kaip ilgai laikysis cookies
    ),
    'session' => array(

    )
);
