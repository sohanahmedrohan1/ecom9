<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendorRecords = [
            ['id'=>1,'name'=>'John','address'=>'32/3,Baisteki,Mirpur-13,Dhaka','city'=>'Dhaka','area'=>'Mirpur','upazilla'=>'Kafrul','pincode'=>'1217','mobile'=>'01717126900','email'=>'jonakimart@gmail.com','status'=>0],
        ];
    }
}
