<?php
/**
 * RoleVisitorInterface.php :
 *
 * PHP version 7.1
 *
 * @category RoleVisitorInterface
 * @package  App\Behavioral\Visitor
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Visitor;

/**
 * 访问者接口
 *
 * Interface RoleVisitorInterface
 *
 * @package App\Behavioral\Visitor
 */
interface RoleVisitorInterface
{
    /**
     * 访问 User 对象
     *
     * @param User $user
     *
     * @return string
     */
    public function visitUser(User $user);

    /**
     * 访问 Group 对象
     *
     * @param Group $group
     *
     * @return string
     */
    public function visitGroup(Group $group);
}
