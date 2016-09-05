<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

namespace Booking\Controller\Admin;

use Cms\Controller\Admin\AbstractController;

final class Calendar extends AbstractController
{
    /**
     * Renders the calendar
     * 
     * @return string
     */
    public function indexAction()
    {
    }

    /**
     * Renders all bookings associated with a date
     * 
     * @param string $date
     * @return string
     */
    public function viewAction($date)
    {
        
    }
}
