<?php
class index
{
    private $db;
    public function __construct()//加载model
    {
        $this->db = pc_base::load_model('mooc_model');
        $this->_userid = param::get_cookie('_userid');
        $this->_username = param::get_cookie('_username');
        $this->_groupid = param::get_cookie('_groupid');
    }
    public function list_road(){
        $left=$_GET['left'];
        $right=$_GET['right'];
        $catid=$_GET['catid'];
        include template('content','list_road');
    }
    public function search(){
        //分两种情况。一种是从键盘输入的keyword一种是获取的fid
//        $fid=$_GET['fid'];
        if(isset($_POST['q'])){
            $keyword=$_POST['q'];
            $sql = "SELECT * FROM `mooc_course` WHERE `title` LIKE '%".$keyword."%'";
        }else{

            $sql="select * from mooc_course where fid=".$fid;
        }
//        $r=$this->db->query($sql);
//        $lists=$this->db->fetch_array($r);
//        $a=$this->db->query('select * from field');
//        $fields=$this->db->fetch_array($a);
        include template('travel','search');
    }
}