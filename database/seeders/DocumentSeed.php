<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentSeed extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        #adult
        #1
        \App\Models\File::factory()->create([
            'title' => 'Adult Video #1',
            'description' => 'Adult Video #1',
            'file' => 'storage/mp4/xKOV4ySeFiaZPLiDOHNgX7B8zd0zglaA59SLzCDG.mp4',
            'file_size' => '21811717',
            'file_type' => 'mp4'
        ]);
        
        #2
        \App\Models\File::factory()->create([
            'title' => 'Adult Video #2',
            'description' => 'Adult Video #2',
            'file' => 'storage/mp4/qL6j3BRb8QzaE9eNU5oHLBI8jfZZlVcnvZnrXS3p.mp4',
            'file_size' => '39459508',
            'file_type' => 'mp4'
        ]);

        #3
        \App\Models\File::factory()->create([
            'title' => 'Adult Video #3',
            'description' => 'Adult Video #3',
            'file' => 'storage/mp4/sonP7sjdDpbBx9AZP2KQaAl9YlolYo3JI6gOshBA.mp4',
            'file_size' => '6334218',
            'file_type' => 'mp4'
        ]);
        #4
        \App\Models\File::factory()->create([
            'title' => 'Adult Video #4',
            'description' => 'Adult Video #4',
            'file' => 'storage/mp4/xKOV4ySeFiaZPLiDOHNgX7B8zd0zglaA59SLzCDG.mp4',
            'file_size' => '21811717',
            'file_type' => 'mp4'
        ]);


        #kids
        #5
        \App\Models\File::factory()->create([
            'title' => 'Kids Video #1',
            'description' => 'Kids Video #1',
            'file' => 'storage/mp4/B9LiL7uwjnhgapUTIwLBjjlVbz9Xf3iTCrDMSnfp.mp4',
            'file_size' => '20175977',
            'file_type' => 'mp4'
        ]);

        #6
        \App\Models\File::factory()->create([
            'title' => 'Kids Video #2',
            'description' => 'Kids Video #2',
            'file' => 'storage/mp4/KY2eNP2eaH1WQbmffUhexMs0gWP4W0FKSCa65JJG.mp4',
            'file_size' => '16354492',
            'file_type' => 'mp4'
        ]);

        #7
        \App\Models\File::factory()->create([
            'title' => 'Kids Video #3',
            'description' => 'Kids Video #3',
            'file' => 'storage/mp4/B9LiL7uwjnhgapUTIwLBjjlVbz9Xf3iTCrDMSnfp.mp4',
            'file_size' => '20175977',
            'file_type' => 'mp4'
        ]);

        #8
        \App\Models\File::factory()->create([
            'title' => 'Kids Video #4',
            'description' => 'Kids Video #4',
            'file' => 'storage/mp4/KY2eNP2eaH1WQbmffUhexMs0gWP4W0FKSCa65JJG.mp4',
            'file_size' => '16354492',
            'file_type' => 'mp4'
        ]);



        #teenage
        #9
        \App\Models\File::factory()->create([
            'title' => 'Teenage Video #1',
            'description' => 'Teenage Video #1',
            'file' => 'storage/mp4/KY2eNP2eaH1WQbmffUhexMs0gWP4W0FKSCa65JJG.mp4',
            'file_size' => '21811717',
            'file_type' => 'mp4'
        ]);
        
        #10
        \App\Models\File::factory()->create([
            'title' => 'Teenage Video #2',
            'description' => 'Teenage Video #2',
            'file' => 'storage/mp4/qL6j3BRb8QzaE9eNU5oHLBI8jfZZlVcnvZnrXS3p.mp4',
            'file_size' => '39459508',
            'file_type' => 'mp4'
        ]);

        #11
        \App\Models\File::factory()->create([
            'title' => 'Teenage Video #3',
            'description' => 'Teenage Video #3',
            'file' => 'storage/mp4/KY2eNP2eaH1WQbmffUhexMs0gWP4W0FKSCa65JJG.mp4',
            'file_size' => '6334218',
            'file_type' => 'mp4'
        ]);
        #12
        \App\Models\File::factory()->create([
            'title' => 'Teenage Video #4',
            'description' => 'Teenage Video #4',
            'file' => 'storage/mp4/xKOV4ySeFiaZPLiDOHNgX7B8zd0zglaA59SLzCDG.mp4',
            'file_size' => '21811717',
            'file_type' => 'mp4'
        ]);

        
    }
}
