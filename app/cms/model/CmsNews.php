<?php
namespace app\cms\model;

use think\Model;
use think\Db;
class CmsNews extends Model
{
    // 定义时间戳字段名
    protected $createTime = 'time';
    // 更新时间字段
    protected $updateTime = 'time';
    // 自动写入时间戳
    protected $autoWriteTimestamp = true;


    /**
     * 删除新闻
     * @return bool
     */
    public function del($ids = '') {
        if (is_array($ids)) {
            foreach ($ids as $k => $v) {
                Db::name('cms_news')->where('id', $v)->delete();
            }
            return true;
        }
        $this->error = '参数传递错误';
        return false;
    }

}