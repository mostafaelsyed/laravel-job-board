<?php

namespace App\Models;


class Job 
{
    public static function all()
    {
        return [
            [
                'title' => 'Laravel Developer',
                'company' => 'Acme Inc.',
                'location' => 'Remote',
                'description' => 'We are looking for a Laravel developer to join our team.',
            ],
            [
                'title' => 'Frontend Developer',
                'company' => 'Tech Solutions',
                'location' => 'New York, NY',
                'description' => 'Seeking a skilled frontend developer with experience in React.',
            ],
            [
                'title' => 'Backend Developer',
                'company' => 'Innovatech',
                'location' => 'San Francisco, CA',
                'description' => 'Looking for a backend developer proficient in Node.js and MongoDB.',
            ],
        ];
    }
}
