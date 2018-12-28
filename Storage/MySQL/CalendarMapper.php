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
use Krystal\Db\Sql\RawSqlFragment;

final class CalendarMapper extends AbstractMapper implements CalendarMapperInterface
{
    /**
     * {@inheritDoc}
     */
    public static function getTableName()
    {
        return self::getWithPrefix('bono_module_booking_calendar');
    }

    /**
     * Fetch all calendar items
     * 
     * @return array
     */
    public function fetchAll()
    {
        // Columns to be selected
        $columns = array(
            'id',
            'start',
            'end',
            'comment',
            new RawSqlFragment('TIMEDIFF(`end`, `start`) AS duration')
        );

        $db = $this->db->select($columns)
                       ->from(self::getTableName())
                       ->orderBy('id')
                       ->desc();

        return $db->queryAll();
    }
}
