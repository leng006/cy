<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::get('index','cms/index/index');
Route::get('newsDetails','cms/index/newsDetails');

Route::get('aboutUs','cms/index/aboutUs',['ext'=>'html']);
Route::get('news','cms/index/news',['ext'=>'html']);

Route::get('alibb','cms/index/alibb',['ext'=>'html']);
Route::get('marketing','cms/index/marketing',['ext'=>'html']);
Route::get('finance','cms/index/finance',['ext'=>'html']);
Route::get('logistics','cms/index/logistics',['ext'=>'html']);
Route::get('college','cms/index/college',['ext'=>'html']);
Route::get('agriculture','cms/index/agriculture',['ext'=>'html']);
Route::get('procurement','cms/index/procurement',['ext'=>'html']);

Route::get('innovation','cms/index/innovation',['ext'=>'html']);
Route::get('consult','cms/index/consult',['ext'=>'html']);
Route::get('joinUs','cms/index/joinUs',['ext'=>'html']);


