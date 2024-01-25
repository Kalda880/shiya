<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
 use App\Models\SiteUser;
class TestCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //\Mail::to("dif.rabie@gmail.com")->send(new  \App\Mail\ResetPassword(url('/')));
        $design = \App\Models\Design::first();
        $this->info($design->getTable());//$2y$10$tlXdxe23fMyFLbOY7AJyGuhXhLsBmLxJZ4.LiesvAYNE3FlYzO8z.
        $this->info(bcrypt('Sh123123!!'));
		$users = SiteUser::whereNull('code')->get();
		foreach($users as $user){
			do{
				$code =\Str::random(5);
			}while(SiteUser::where('code',$code)->first());
		  $user->is_affiliate=true;
			$user->code = $code;
			$user->save();
		}
        return 0;
    }
}
