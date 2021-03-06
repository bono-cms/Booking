<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

return array(
    '/%s/module/booking' => array(
        'controller' => 'Admin:Calendar@indexAction'
    ),

    '/%s/module/booking/edit/(:var)' => array(
        'controller' => 'Admin:Calendar@editAction'
    ),

    '/%s/module/booking/delete/(:var)' => array(
        'controller' => 'Admin:Calendar@deleteAction'
    ),

    '/%s/module/booking/save' => array(
        'controller' => 'Admin:Calendar@saveAction'
    )
);
