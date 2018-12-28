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
use Krystal\Stdlib\VirtualEntity;

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

    /**
     * {@inheritDoc}
     */
    protected function toEntity(array $row)
    {
        $entity = new VirtualEntity();
        $entity->setId($row['id'])
               ->setStart($row['start'])
               ->setEnd($row['end'])
               ->setComment($row['comment']);

        if (isset($row['duration'])) {
            $entity->setDuration($row['duration']);
        }

        return $entity;
    }

    /**
     * Returns last calendar ID
     * 
     * @return int
     */
    public function getLastId()
    {
        return $this->calendarMapper->getMaxId();
    }

    /**
     * Fetches calendar item by its ID
     * 
     * @param int $id Calendar item ID
     * @return array
     */
    public function fetchById($id)
    {
        return $this->prepareResult($this->calendarMapper->findByPk($id));
    }

    /**
     * Fetch all calendar items
     * 
     * @return array
     */
    public function fetchAll()
    {
        return $this->prepareResults($this->calendarMapper->fetchAll());
    }

    /**
     * Deletes calendar item by its ID
     * 
     * @return boolean
     */
    public function deleteById($id)
    {
        return $this->calendarMapper->deleteByPk($id);
    }

    /**
     * Save calendar item
     * 
     * @param array $input
     * @return boolen
     */
    public function save(array $input)
    {
        return $this->calendarMapper->persist($input);
    }
}
