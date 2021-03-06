<?php

use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\AppSettings::create([ 
           'company_name' => 'Algo Light limited',
           'company_address' => 'Mumbai',
           'email_address' => 'info@algolight.cc',
           'logo' => 'atmor.png',
           'logo_ico' => 'atmor.png',
           'theme' => 'default',
           'currency' => '€',
           'site_mode' => 'yes',
          ]);
    }
}
