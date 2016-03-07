<?php
class IndexAction extends Action {
    public function index(){
    	$bookObj=D('Bookinfo');
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
}