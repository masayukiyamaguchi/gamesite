<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Illuminate\Support\Facades\Mail;

class SendMailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send_mail_users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'usersテーブルのemail全てにメールを送信する';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //下記を追加・修正する
        $users_infos = User::all();

        foreach ($users_infos as $users_info) {
            echo $users_info['email']."\n";

            Mail::raw("これはテストメールです", function($message) use ($users_info)
            {
                $message->to($users_info->email)->subject('test');
            });
        }
        //上記までを追加・修正する
    }
}
