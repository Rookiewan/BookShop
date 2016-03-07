<?php
class BookinfoModel extends Model{
	public function getNewBook(){
		$rst=$this->limit(0,4)->where("bisnew=1")->select();
		return $rst;
	}
	public function getGoodCommentBook($offset,$num){
		$rst=$this->limit($offset,$num)->select();
		return $rst;
	}

	public function getBookDetailByBid($bid){
		$rst=$this->find($bid);
		return $rst;
	}
}