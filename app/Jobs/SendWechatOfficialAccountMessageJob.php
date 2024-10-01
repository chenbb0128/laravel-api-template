<?php

namespace App\Jobs;

use App\Repositories\Models\User;
use App\Services\Wechat\OfficialAccountService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWechatOfficialAccountMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user;
    private $msg;
    private $msgType;

    /**
     * Create a new job instance.
     */
    public function __construct(User $user, $msg, $msgType)
    {
        $this->user = $user;
        $this->msg = $msg;
        $this->msgType = $msgType;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $server = OfficialAccountService::getInstance()->getServe();
        switch ($this->msgType) {
            case 'text':
                $server->customer_service->message($this->msg)->to($this->user['official_openid'])->send();
        }
    }
}
