<?php
/**
 * User.php :.
 *
 * PHP version 7.1
 *
 * @category User
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Structural\DataMapper;

/**
 * User : 用户类.
 *
 * @category User
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class User
{
    /**
     * @var int
     */
    protected $userId;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $email;

    /**
     * @param null $id
     * @param null $username
     * @param null $email
     */
    public function __construct($id = null, $username = null, $email = null)
    {
        $this->userId = $id;
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserID($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
