<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

namespace Booking\Service;

use Booking\Storage\CalendarMapperInterface;
use Cms\Service\AbstractManager;

final class CalendarService extends AbstractManager
{
    /**
     * Any compliant calendar mapper
     * 
     * @var \Booking\Storage\CalendarMapperInterface
     */
    private $calendarMapper;

    /**
     * State initialization
     * 
     * @param \Booking\Storage\CalendarMapperInterface $calendarMapper
     * @return void
     */
    public function __construct(CalendarMapperInterface $calendarMapper)
    {
        $this->calendarMapper = $calendarMapper;
    }
}
