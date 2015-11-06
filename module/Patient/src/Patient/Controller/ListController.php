<?php
/**
 * Created by PhpStorm.
 * User: khaled
 * Date: 11/6/15
 * Time: 4:28 PM
 */

namespace Patient\Controller;


use Zend\View\Model\ViewModel;

class ListController extends PatientBaseController
{

    public function indexAction(){
        $queueService = $this->getServiceLocator()->get(\Patient\Service\QueueService::class);
        $todayList = $queueService->getListOfToday();

        $view = new ViewModel([
            'listPatients'=>$todayList,
        ]);

        return $view;

    }


}