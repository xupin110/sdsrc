<?php
/**
 * Created by PhpStorm.
 * User: zhangjincheng
 * Date: 17-9-15
 * Time: 下午2:28
 */

namespace app\Process;


use app\AMQPTasks\TestAMQPTask;
use Server\Components\AMQPTaskSystem\AMQPTaskProcess;

class MyAMQPTaskProcess extends AMQPTaskProcess
{

    public function start($process)
    {
        parent::start($process);
        $this->createDirectConsume('hello');
    }

    /**
     * 路由消息返回class名称
     * @param $body
     * @return string
     */
    protected function route($body)
    {
        return TestAMQPTask::class;
    }

    protected function onShutDown()
    {
        // TODO: Implement onShutDown() method.
    }
}