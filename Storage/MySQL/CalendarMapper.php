<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

namespace Booking\Storage\MySQL;

use Cms\Storage\MySQL\AbstractMapper;
use Booking\Storage\CalendarMapperInterface;

final class CalendarMapper extends AbstractMapper implements TimeMapperInterface
{
    /**
     * {@inheritDoc}
     */
    public static function getTableName()
    {
        return self::getWithPrefix('bono_module_booking_calendar');
    }
}
