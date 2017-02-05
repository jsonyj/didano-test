<?php

class ChristmasModel extends AppModel {
   
/*获取对应学生受到的礼物数量*/
	function getGettingGiftNum($studentId){
		$this->escape($studentId);
		$sql = "SELECT gift_num FROM tb_gift_getting WHERE getting_studentId = '{$studentId}'";
		$rs = $this->getOne($sql);
		return $rs;
	}


	function getGettingGift($studentId){
		$this->escape($studentId);
		$sql = "SELECT * FROM  tb_gift_getting_giving WHERE getting_studentId = '{$studentId}'";
		$rs = $this->getAll($sql);
		return $rs;
	}

	/*获取礼物列表*/
	function getGift(){
		$sql = "SELECT * FROM  tb_gift WHERE deleted = 0";
		$rs = $this->getAll($sql);
		return $rs;
	}
}

?>
