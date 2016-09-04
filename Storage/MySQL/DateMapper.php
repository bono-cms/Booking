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
use Booking\Storage\DateMapperInterface;

final class DateMapper extends AbstractMapper implements DateMapperInterface
{
    /**
     * {@inheritDoc}
     */
    public static function getTableName()
    {
        return self::getWithPrefix('bono_module_booking_dates');
    }
}
