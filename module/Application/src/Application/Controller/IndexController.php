<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Session\Container;
use Application\Model\common;

class IndexController extends AbstractActionController {

    public $commonObj;
    public $view;
    public $session;

    public function __construct() {
        $this->view = new ViewModel();
        $this->session = new Container('User');
        $this->commonObj = new common();
//        if(empty($this->session['city_list'])){
//            $this->session['city_list'] = $this->getCityList();
//            $GLOBALS['city_list'] = $this->session['city_list'];
//        }
//        //if(empty($this->session['category_list'])){
//            $this->session['category_list'] = $this->categoryList();
        //}
    }

    public function indexAction() {
        return $this->view;
    }

    public function getLabListAction() {
        $postParams = (array) $this->getRequest()->getPost();
        $postParams['lat'] = '28.7041';
        $postParams['lng'] = '77.1025';
        $postParams['city_id'] = '1';
        $postParams['page'] = !empty($postParams['page']) ? $postParams['page'] : 1;
        $getLabList = $this->commonObj->curlhit($postParams, 'searchLab', 'managetestcontroller');

        echo $getLabList;
        exit;
    }

    public function aboutAction() {
        return $this->view;
    }

    public function searchAction() {
        $searchParams = array();
        $request = (array) $this->getRequest()->getQuery();

        return $this->view;
    }

}
