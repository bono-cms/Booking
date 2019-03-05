<?php

/**
 * Module configuration container
 */

return array(
    'name' => 'Booking',
    'description' => 'Booking module lets your visitors schedule various actions',
    'menu' => array(
        'name' => 'Booking',
        'icon' => 'fa fa-calendar fa-5x',
        'items' => array(
            array(
                'route' => 'Booking:Admin:Calendar@indexAction',
                'name' => 'View all bookings'
            )
        )
    )
);