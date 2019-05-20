<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Usuario;
use Mail;
use Carbon\Carbon;

class UsersWithoutPaymentsRegister extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:payments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send notifications from users without payments register';

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
     * @return mixed
     */
    public function handle()
    {

        $users = Usuario::where('created_at', '>=', Carbon::now()->startOfDay())->get();

        $count = 0;
        foreach ($users as $user) {
            if($user->Payments()->count() == 0) {
                $count++;
            }
        }

        Mail::send('emails.user', ['msg' => $count], function($m) {
            $m->to('apirest@challenge.com', 'Daniel')->subject('Cantidad de usuarios sin pagos realizados');
        });

        echo 'El email ha sido enviado con existo.';
    }
}
