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
use Krystal\Stdlib\VirtualEntity;

final class Calendar extends AbstractController
{
    /**
     * Renders the calendar
     * 
     * @return string
     */
    public function indexAction()
    {
        return $this->createForm(new VirtualEntity());
    }

    /**
     * Creates form
     * 
     * @param \Krystal\Stdlib\VirtualEntity $entity
     * @return string
     */
    private function createForm(VirtualEntity $entity)
    {
        // Append breadcrumb
        $this->view->getBreadcrumbBag()
                   ->addOne('Booking');

        $calendar = $this->getModuleService('calendarService')->fetchAll();

        return $this->view->render('index', array(
            'calendar' => $calendar,
            'entity' => $entity
        ));
    }

    /**
     * Renders edit form
     * 
     * @param int $id Calendar item ID
     * @return mixed
     */
    public function editAction($id)
    {
        $item = $this->getModuleService('calendarService')->fetchById($id);

        if ($item !== false) {
            return $this->createForm($item);
        } else {
            return false;
        }
    }

    /**
     * Deletes an item by its ID
     * 
     * @param int $id
     * @return string
     */
    public function deleteAction($id)
    {
        $this->getModuleService('calendarService')->deleteById($id);

        $this->flashBag->set('success', 'Selected element has been removed successfully');
        return 1;
    }

    /**
     * Saves a calendar
     * 
     * @return string
     */
    public function saveAction()
    {
        $input = $this->request->getPost('item');

        $calendarService = $this->getModuleService('calendarService');
        $calendarService->save($input);

        if ($input['id']) {
            $this->flashBag->set('success', 'The element has been updated successfully');
            return 1;
        } else {
            $this->flashBag->set('success', 'The element has been added successfully');
            return $calendarService->getLastId();
        }
    }
}
