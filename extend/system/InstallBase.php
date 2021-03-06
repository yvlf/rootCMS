<?php

// +----------------------------------------------------------------------
// | rootCMS 模块安装脚本抽象类
// +----------------------------------------------------------------------
// | Copyright (c) 2015-2016 http://www.rootcms.cn, All rights reserved.
// +----------------------------------------------------------------------
// | Author: 
// +----------------------------------------------------------------------

namespace system;

abstract class InstallBase {

    //错误信息
    protected $error = '';

    /**
     * 卸载开始执行
     * @return boolean
     */
    public function run() {
        return true;
    }

    /**
     * 卸载完回调
     * @return boolean
     */
    public function end() {
        return true;
    }

    /**
     * 获取错误
     * @return string
     */
    public function getError() {
        return $this->error;
    }

}
