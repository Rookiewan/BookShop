<?php
class BookAction extends Action{
	public function cart(){
		if($_POST){
			$cartBook=$_POST['cartBook'];
			$cartObj=D('Cart');
			$rst=$cartObj->buyBookFormCart($cartBook);
			echo $rst;
			return;
		}
		$this->display();
	}
	public function cagorie(){

		if($_GET){
			$btype=$_GET['btype'];
			$btype_s=$_GET['s'];//小分类
			$pagenow=$_GET['pn'];
			$bookObj=D('Bookinfo');
			$offset=($pagenow-1)*4;
			$arr_btypeBook=$bookObj->where("btype='".$btype."'")->limit($offset,4)->select();

			$commentObj=D('Comment');
			for($i=0;$i<count($arr_btypeBook);$i++){
				$commentNum=$commentObj->where("bid=".$arr_btypeBook[$i]['bid'])->count();
				$arr_btypeBook[$i]['commentNum']=$commentNum;

			}
			$count=$bookObj->where("btype='".$btype."'")->count();

			$pagenum=ceil($count/4);
			$this->assign('btype',$btype);
			$this->assign('btype_s',$btype_s);
			$this->assign('bookTypesInfo',$arr_btypeBook);

			$this->assign('pagenum',$pagenum);
			$this->assign('pagenow',$pagenow);
		}
		$this->display();
	}
	public function bookDetail(){
		$bookObj=D('Bookinfo');

		if($_GET){
			$bookId=$_GET['bid'];
			$bookInfo=$bookObj->getBookDetailByBid($bookId);

			$commentObj=D('Comment');
			$commentsInfo=$commentObj->getCommentsByBid($bookId);
			$commentNum=$commentObj->where("bid=".$bookId)->count();
			if($bookInfo){
				$this->assign('bookInfo',$bookInfo);
			}
			$this->assign('commentNum',$commentNum);
		}

		if($_POST){
			if($_POST['option']=='addComment'){
				$commentObj=D('Comment');
				$rst=$commentObj->addComment($_POST);
				echo $rst;
				return;
			}
			if($_POST['option']=='getComment'){
				$bid=$_POST['bid'];
				$pagenow=$_POST['pagenow'];
				$offset=($pagenow-1)*5;
				$commentObj=D('Comment');
				$rst_comments=$commentObj->getCommentsByBid($bid,$offset);


				$commentNum=$commentObj->where("bid=".$bid)->count();
				$pagenum=ceil($commentNum/5);
				echo json_encode(array('comments' => $rst_comments,'pagenum' => $pagenum));
				return;
			}
		}
		
    	$newBooks=$bookObj->getNewBook();//新书
    	$this->assign('newBooks',$newBooks);

    	$goodCommentBook=$bookObj->getGoodCommentBook(4,3);//好评书籍
    	$this->assign('goodCommentBook',$goodCommentBook);

    	$popBook=$bookObj->getGoodCommentBook(7,3);//最受关注
    	$this->assign('popBook',$popBook);

    	$collectionBook=$bookObj->getGoodCommentBook(10,3);//人气收藏
    	$this->assign('collectionBook',$collectionBook);

    	$assortBook1=$bookObj->getGoodCommentBook(0,5);
    	$this->assign('assortBook1',$assortBook1);

    	$assortBook2=$bookObj->getGoodCommentBook(5,5);
    	$this->assign('assortBook2',$assortBook2);

    	$assortBook3=$bookObj->getGoodCommentBook(10,5);
    	$this->assign('assortBook3',$assortBook3);

    	$assortBook4=$bookObj->getGoodCommentBook(15,5);
    	$this->assign('assortBook4',$assortBook4);
		$this->display();
	}
	public function search(){
		if($_GET){
			$key=$_GET['key'];
			$pagenow=$_GET['pn'];
			$bookObj=D('Bookinfo');
			$offset=($pagenow-1)*4;
			$arr_btypeBook=$bookObj->where("bname like '%".$key."%'")->limit($offset,4)->select();

			$commentObj=D('Comment');
			for($i=0;$i<count($arr_btypeBook);$i++){
				$commentNum=$commentObj->where("bid=".$arr_btypeBook[$i]['bid'])->count();
				$arr_btypeBook[$i]['commentNum']=$commentNum;

			}
			$count=$bookObj->where("bname like '%".$key."%'")->count();

			$pagenum=ceil($count/4);
			$this->assign('key',$key);
			$this->assign('bookTypesInfo',$arr_btypeBook);

			$this->assign('pagenum',$pagenum);
			$this->assign('pagenow',$pagenow);
		}
		$this->display();
	}

	public function getBuyRecord(){
		if($_GET){
			$uid=$_GET['uid'];
			$cartObj=D('Cart');
			
			$rst=$cartObj->getBuyBook($uid);
			echo json_encode(array('buyBookRecord' => $rst));
			return;
		}
	}
}