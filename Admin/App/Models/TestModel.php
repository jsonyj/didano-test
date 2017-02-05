<?php

class TestModel extends AppModel {

	function getdetection(){
		$table = `tb_student_detection` ;
		$sql = "
            SELECT * FROM tb_student_detection
            WHERE `org_img_url` LIKE  'detection/%'
        ";
        return $this->getAll($sql);
	}

	function getfile($id){
		$table = `tb_file` ;
		$sql = "
            SELECT * FROM tb_file
            WHERE id = '{$id}' 
        ";
        return $this->getOne($sql);
	}

	function savefile($form){
		$table = 'tb_file';
        $data = array(
            'file_path' => $form['file_path'],
        );
        $whereId = $form['id'];
        $this->escape($whereId);
        $whereSql = "id = '{$whereId}'";
        $this->Update($table, $data, $whereSql);
        return $form['id'];
	}
	function getdetection1(){
		$table = `tb_student_detection` ;
		$sql = "
            SELECT * FROM tb_student_detection
            WHERE id = 59240
        ";
        return $this->getAll($sql);
	}

	function getfile1($id){
		$table = `tb_file` ;
		$sql = "
            SELECT * FROM tb_file
            WHERE id = '{$id}' 
        ";
        return $this->getOne($sql);
	}

	function savefile1($form){
		$table = 'tb_file';
        $data = array(
            'file_path' => $form['file_path'],
        );
        $whereId = $form['id'];
        $this->escape($whereId);
        $whereSql = "id = '{$whereId}'";
        $this->Update($table, $data, $whereSql);
        return $form['id'];
	}
    function getParentListByStudentId($studentId) {
        $this->escape($studentId);
        $sql = "
            SELECT tb_student.`name`,tb_student_parent.relation_title,tb_school_parent.phone FROM tb_student
            LEFT JOIN tb_student_parent ON tb_student_parent.student_id = tb_student.id
            LEFT JOIN tb_school_parent ON tb_school_parent.id = tb_student_parent.parent_id
            WHERE tb_student.id = {$studentId} AND tb_student.deleted = 0";
        
        $rs = $this->getAll($sql);
        return $rs;
    }
//**结束分割**//
}