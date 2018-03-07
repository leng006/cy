<?php
namespace app\cms\admin;

use app\admin\controller\Admin;
use app\cms\model\CmsNews;

class Index extends Admin
{

    public function index()
    {
        $map=[];
        $data_list = CmsNews::where($map)->paginate();
        $pages = $data_list->render();
        $this->assign('data_list', $data_list);
        $this->assign('pages', $pages);
        return $this->afetch();
    }

    public function add(){
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $data['time'] = strtotime($data['time']);
            $data['content']= htmlspecialchars_decode($data['content']);
            unset($data['id']);
            if (!CmsNews::create($data)) {
                return $this->error('添加失败！');
            }
            return $this->success('添加成功。');
        }
        return $this->afetch();
    }

    public function edit($id= 0){

        if($this->request->post()){
            $data = $this->request->post();
            $data['time'] = strtotime($data['time']);
            $data['content']= htmlspecialchars_decode($data['content']);
            if(!CmsNews::update($data)){
                return $this->error('修改失败！');
            }
            return $this->success('保存成功。', url('index/'));
        }
        $data = CmsNews::where('id', $id)->find();

        $this->assign('data_info', $data);
        return $this->afetch("index/add");
    }

    public function del()
    {
        $id = input('param.ids/a');
        $model = new CmsNews();
        if ($model->del($id)) {
            return $this->success('删除成功。');
        }
        return $this->error($model->getError());
    }
}