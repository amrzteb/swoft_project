<?php


namespace App\Api\Controller;

/**
 * @Controller(prefix="/test1")
 */
class IndexController
{
    /**
     * @RequestMapping(route="")
     */
    public function index(){
        return time();
    }
}