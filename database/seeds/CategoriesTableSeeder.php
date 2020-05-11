<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Men',
                'slug' => 'men',
                'created_at' => '2020-05-10 05:26:49',
                'updated_at' => '2020-05-10 05:26:49',
            ),
            1 => 
            array (
                'id' => 4,
                'parent_id' => 3,
                'order' => 2,
                'name' => 'Watch',
                'slug' => 'watch',
                'created_at' => '2020-05-10 05:27:09',
                'updated_at' => '2020-05-10 05:27:09',
            ),
            2 => 
            array (
                'id' => 5,
                'parent_id' => NULL,
                'order' => 4,
                'name' => 'Women',
                'slug' => 'women',
                'created_at' => '2020-05-10 05:27:23',
                'updated_at' => '2020-05-10 05:27:23',
            ),
            3 => 
            array (
                'id' => 6,
                'parent_id' => 5,
                'order' => 1,
                'name' => 'Cosmetics',
                'slug' => 'cosmetics',
                'created_at' => '2020-05-10 05:28:03',
                'updated_at' => '2020-05-10 05:28:03',
            ),
            4 => 
            array (
                'id' => 7,
                'parent_id' => 6,
                'order' => 1,
                'name' => 'Lipsticks',
                'slug' => 'lipsticks',
                'created_at' => '2020-05-10 05:29:13',
                'updated_at' => '2020-05-10 05:29:13',
            ),
        ));
        
        
    }
}