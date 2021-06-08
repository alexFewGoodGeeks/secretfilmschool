<?php

namespace App\Console\Commands;

use App\Repositories\Contracts\UserInterface;
use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create-user';

    protected $userRepository;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(UserInterface $userRepository)
    {
        parent::__construct();
        $this->userRepository = $userRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->userRepository->create([
            'name' => 'Admin',
            'last_name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => \Hash::make('makedonija')
        ]);

        $this->userRepository->create([
            'name' => 'Simon',
            'last_name' => 'Sharman',
            'email' => 'si@secretfilmschool.com',
            'password' => \Hash::make('s3cr3tp45w04d')
        ]);

        $this->info('Admin user was created!');
        return 0;
    }
}
