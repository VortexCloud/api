<?php declare(strict_types=1);

namespace App\Http\Controller;

use App\Rpc\Lib\UsersInterface;
use Swoft\Breaker\Annotation\Mapping\Breaker;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Server\Annotation\Mapping\RequestMethod;
use Swoft\Rpc\Client\Annotation\Mapping\Reference;


/**
 * Class UsersController
 *
 * @Controller(prefix="/users")
 */
class UsersController
{
    /**
     * @Reference(pool="user.pool")
     *
     * @var UsersInterface
     */
    protected $usersService;

    /**
     * @Breaker()
     * @RequestMapping("index",method=RequestMethod::GET)
     *
     * @return array
     */
    public function index() :array
    {
        return $this->usersService->getList();
    }
}
