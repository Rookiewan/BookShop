<?php

class CartModel extends Model{
	public function buyBookFormCart($data){
		$date=date('Y-m-j');
		for($i=0;$i<count($data);$i++){
			$arr_add=array(
				'uid' => $data[$i]['uid'],
				'bid' => $data[$i]['bid'],
				'count' => $data[$i]['count'],
				'price' => $data[$i]['price'],
				'time' => $date
			);
			$rst=$this->add($arr_add);
			$bid= $data[$i]['bid'];
			$bcount=$data[$i]['count'];
			$updData=array(
				'bid' => $bid,
				'bcount' => $bcount
			);
			$bookObj=D('Bookinfo');
			$sql="update bs_bookinfo set bcount=bcount-".$bcount." where bid=".$bid;
			$bookObj->execute($sql);
		}
		return 1;
		
	}

	public function getBuyBook($uid){
		$rst=$this->where("uid=".$uid)->order("time desc")->select();
		if($rst){
			$count=count($rst);
			$bookObj=D('Bookinfo');
			for($i=0;$i<$count;$i++){
				$bookinfo=$bookObj->where("bid=".$rst[$i]['bid'])->find();
				$rst[$i]['bname']=$bookinfo['bname'];
			}

			return $rst;
		}else{
			return 'error';
		}
	}

	public function getOrder() {
		$rst=$this->order("time desc")->select();
		if($rst){
			$count=count($rst);
			$bookObj=D('Bookinfo');
			for($i=0;$i<$count;$i++){
				$bookinfo=$bookObj->where("bid=".$rst[$i]['bid'])->find();
				$rst[$i]['bname']=$bookinfo['bname'];
				$rst[$i]['bcount']=$bookinfo['bcount'];
			}

			$userObj=D('Users');
			for($i = 0; $i < $count; $i++) {
				$userInfo = $userObj->where('uid='.$rst[$i]['uid'])->find();
				$rst[$i]['unick']=$userInfo['unick'];
			}
			return $rst;
		}else{
			return 'error';
		}
	}
}