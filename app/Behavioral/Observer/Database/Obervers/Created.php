<?php
/**
 * Created.php :.
 *
 * PHP version 7.1
 *
 * @category Created
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Observer\Database\Obervers;

use App\Behavioral\Observer\Database\Event;

class Created implements Observer
{
    /**
     * {@inheritdoc}
     */
    public function handle(Event $event)
    {
        $id = array_get($event->model, 'id', 0);
        echo sprintf('id为%s的数据刚刚创建了%s', $id, PHP_EOL);
    }
}
