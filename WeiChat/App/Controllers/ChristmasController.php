<?php

/**
 * @desc 帮助相关页面
 * @author
 */

class ChristmasController extends AppController {

    var $studentModel = null;
    var $christmasModel = null;


    function ChristmasController(){
    	$this->AppController();
    	$this->studentModel = $this->getModel('Student');
    	$this->christmasModel = $this->getModel('Christmas');
    }
    function indexAction(){
    	$user = $this->getSession(SESSION_USER);
        if(!$user){
            $this->redirect("?c=index&a=bind");
        }
        $student_list = $this->studentModel->getStudentListByParentPhone($user['phone']);
        
        $studentId = $this->get('studentId') ? $this->get('studentId') : $student_list[0]['id'];
        $studentInfor = $this->studentModel->getStudent($studentId);
        $gettingGiftNum = $this->christmasModel->getGettingGiftNum($studentId);
        $this->view->assign('studentInfor',$studentInfor);
        $this->view->assign('gettingGiftNum',$gettingGiftNum);
        $this->view->layout();
    }

    /*送礼物*/
   /* function classmatesChooseAction(){
        $classId = $this->get('classId');
        $studentId = $this->get('studentId');
        $classmatesList = $this->studentModel->getClassmatesList($classId,$studentId);
        $this->assign('classmatesList',$classmatesList);
        $this->view->layout();
    }*/

    /*收到礼物*/

    function gettingGiftAction(){
        $studentId = $this->get('studentId');
        $gettingGiftList = $this->christmasModel->getGettingGift($studentId);
        $this->view->assign('gettingGiftList',$gettingGiftList);
        $this->view->layout();
    }

    /*送礼物*/
    function givingGiftAction(){
        $type = $this->get('type');
        /*礼物列表*/
        if($type==1){
            $giftList = $this->christmasModel->getGift();
            $this->view->assign('giftList',$giftList);
        }
        /*学生选择*/
        else if($type==2){
            $classId = $this->get('classId');
            $studentId = $this->get('studentId');
            $classmatesList = $this->studentModel->getClassmatesList($classId,$studentId);
            $this->view->assign('classmatesList',$classmatesList);

        }
        $this->view->assign('type',$type);
        $this->view->layout();
    }


    function ajaxGivingGiftAction(){
        $form = $this->post('form');
        $this->log(print_r($form,true),'test2');
    }


    function givingSuccessAction(){
        $this->view->layout();
    }
}

?>