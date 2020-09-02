<?php
/**
 * Saved.php :.
 *
 * PHP version 7.1
 *
 * @category Saved
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Observer\Database\Obervers;

use App\Behavioral\Observer\Database\Event;

class Saved implements Observer
{
    protected $key = 'User:save:';

    /**
     * {@inheritdoc}
     */
    public function handle(Event $event)
    {
        $id = array_get($event->model, 'id', 0);
        $count = app('redis')->hincrby($this->key, $id, 1);
        echo sprintf('id为%s的数据保存了%s次了%s', $id, $count, PHP_EOL);
    }
}
