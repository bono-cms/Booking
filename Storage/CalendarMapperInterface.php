<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

namespace Booking\Storage;

interface CalendarMapperInterface
{
    /**
     * Fetch all calendar items
     * 
     * @return array
     */
    public function fetchAll();
}
