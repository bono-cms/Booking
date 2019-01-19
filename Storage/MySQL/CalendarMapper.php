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
     * Checks whether date and time available
     * 
     * @param string $datetime
     * @return boolean
     */
    public function isAvailable($datetime)
    {
        $db = $this->db->select()
                       ->count('id')
                       ->from(self::getTableName())
                       ->whereNotBetween('start', 'end', $datetime);

        return (bool) $db->queryScalar();
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
