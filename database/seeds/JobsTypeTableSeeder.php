<?php

use Illuminate\Database\Seeder;
use App\JobType;

class JobsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        JobType::Create([
        	'type'=>'Full Stack Developer',
            'imgUrl'=>'public/img/type/web.jpg'
        	]);

        JobType::Create([
            'type'=>'Event Volunteer',
            'imgUrl'=>'public/img/type/event.jpg'
            ]);

        JobType::Create([
            'type'=>'Sales',
            'imgUrl'=>'public/img/type/sales.jpg'
            ]);

        JobType::Create([
            'type'=>'Business Developer',
            'imgUrl'=>'public/img/type/business.jpg'
            ]);

        JobType::Create([
            'type'=>'Project Manager',
            'imgUrl'=>'public/img/type/manager.jpg'
            ]);

        JobType::Create([
            'type'=>'Digital Marketing',
            'imgUrl'=>'public/img/type/digitalmarketing.jpg'
            ]);

        JobType::Create([
            'type'=>'Accountant',
            'imgUrl'=>'public/img/type/accountant.jpg'
            ]);

        JobType::Create([
            'type'=>'Teacher',
            'imgUrl'=>'public/img/type/teacher.jpg'
            ]);

        JobType::Create([
        	'type'=>'Android Mobile Developer',
            'imgUrl'=>'public/img/type/mobile.jpg'
        	]);

        JobType::Create([
            'type'=>'Front End Developer',
            'imgUrl'=>'public/img/type/web.jpg'
            ]);

        JobType::Create([
            'type'=>'Back End Developer',
            'imgUrl'=>'public/img/type/web.jpg'
            ]);

        JobType::Create([
        	'type'=>'Ios Mobile Developer',
            'imgUrl'=>'public/img/type/mobile.jpg'
        	]);

        JobType::Create([
        	'type'=>'Desktop Developer',
            'imgUrl'=>'public/img/type/desktop.jpg'
        	]);

        JobType::Create([
        	'type'=>'Event Organizer',
            'imgUrl'=>'public/img/type/event.jpg'
        	]);


        JobType::Create([
        	'type'=>'Other',
            'imgUrl'=>'public/img/type/web.jpg'
        	]);
    }
}
