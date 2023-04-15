<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            ['id'=>0,'name'=>'John','type'=>'vendor','vendor_id'=>2,'mobile'=>'01717126900','email'=>'jonakimart@gmail.com','password'=>'$2a$12$NLCVuK4f7Wh/u.u64Ki/NOOATFSrtrVCMlQ1BpdxjINbdLboKfZLq','image'=>'','Status'=>1],
        ];
        Admin::insert($adminRecords);
    }
}
