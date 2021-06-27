<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
          'blog_name'=>('blog_name'),
            'phone_number'=>('phone_number'),
            'blog_Email'=>('blog_Email'),
            'address'=>('address'),
            'twitter'=>('twitter'),
            'facebook'=>('facebook'),
            'linkedIn'=>('linkedIn')

        ]);
    }
}
