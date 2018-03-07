<?php
namespace app\cms\home;
use app\cms\model\CmsNews;
use app\common\controller\Common;

class Index extends Common
{
    public function index()
    {

        $list = CmsNews::all(function($query){
            $query->where('status', 1)->limit(2)->order('sort', 'asc');
        });
        $this->assign('list', $list);

        return $this->fetch('homePage');
    }
   
    public function aboutUs(){
        //思洋简介
        return $this->fetch();
    }
    public function news(){
        //新闻资讯
        $map=[];
        $map['status']=1;
        $data_list = CmsNews::where($map)->order('time','desc')->paginate();
        $pages = $data_list->render();
        $this->assign('data_list', $data_list);
        $this->assign('pages', $pages);
        return $this->fetch();
    }
    // 新闻详情
    public function newsDetails($id='')
    {
        $map['id'] = $id;
        $data = CmsNews::where($map)->find();
        $this->assign('data', $data);
        return $this->fetch();
    }

    //业务范畴
    public function alibb(){
        //电子商务
        return $this->fetch("index/businessScope/alibb");
    }
    public function marketing(){
        //移动营销
        return $this->fetch("index/businessScope/marketing");
    }
    public function finance(){
        //普惠金融
        return $this->fetch("index/businessScope/finance");
    }
    public function logistics(){
        //智慧物流
        return $this->fetch("index/businessScope/logistics");
    }
    public function college(){
        //电商学院
        return $this->fetch("index/businessScope/college");
    }
    public function agriculture(){
    //现代农业
        return $this->fetch("index/businessScope/agriculture");
    }
    public function procurement(){
        //大企业采购
        return $this->fetch("index/businessScope/procurement");
    }

    public function innovation(){
        //创新创业
        return $this->fetch();
    }

    public function consult(){
        //联络我们
        return $this->fetch();
    }
    public function joinUs(){
        //加入我们
        return $this->fetch();
    }

}