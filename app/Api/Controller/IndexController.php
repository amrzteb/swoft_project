<?php


namespace App\Api\Controller;

use Swoft;
use Swoft\Bean\Exception\ContainerException;
use Swoft\Context\Context;
use Swoft\Http\Message\ContentType;
use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\View\Renderer;

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