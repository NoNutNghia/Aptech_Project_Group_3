<?php

use Illuminate\Database\Seeder;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feedback::create([
            'user_id' => 2,
            'feedback' => 'I want to see comment and comment in article, if no comment so who verify this information?'
        ]);

        Feedback::create([
            'user_id' => 1,
            'feedback' => 'Search bar is good, but live bar is better. Develop it!'
        ]);

        Feedback::create([
           'user_id' => 1,
           'feedback' => 'Develop more feature in user system, reply feedback from user via email'
        ]);

        Feedback::create([
            'user_id' => 1,
            'feedback' => 'Someone is spamming, it\'s not good. Optimize feedback system!'
        ]);
    }
}
