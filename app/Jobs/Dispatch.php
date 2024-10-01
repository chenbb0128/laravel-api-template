<?php

namespace App\Jobs;

class Dispatch
{
    /**
     * 默认消息队列
     * @param $job
     * @param $queue
     * @return void
     */
    public function dispatchToDefault($job, $queue = 'default')
    {
        dispatch($job)->onConnection('database')->onQueue($queue);
    }

    /**
     * 发送公众号消息
     * @param $job
     * @param $queue
     * @return void
     */
    public function dispatchToMessage($job, $queue = 'message')
    {
        dispatch($job)->onConnection('database')->onQueue($queue);
    }
}
