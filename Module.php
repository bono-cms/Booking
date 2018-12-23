<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

namespace Booking;

use Cms\AbstractCmsModule;
use Booking\Service\CalendarService;

final class Module extends AbstractCmsModule
{
    /**
     * {@inheritDoc}
     */
    public function getServiceProviders()
    {
        $calendarService = new CalendarService($this->getMapper('\Booking\Storage\MySQL\CalendarMapper'));

        return array(
            'calendarService' => $calendarService
        );
    }
}
