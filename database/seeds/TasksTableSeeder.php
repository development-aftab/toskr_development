<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tasks')->delete();
        
        \DB::table('tasks')->insert(array (
            0 => 
            array (
                'id' => 2,
                'created_at' => '2021-11-01 13:48:21',
                'updated_at' => '2021-12-03 16:56:54',
                'deleted_at' => NULL,
                'company_id' => '3',
                'manager_id' => '4',
                'project_name' => 'zuhair',
                'category' => '1',
                'image' => '',
                'start_date' => '2021-11-01',
                'end_date' => '2021-11-03',
                'assign_to' => NULL,
                'priority' => 'Medium',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'status' => 'inProgress',
                'bar_link' => '100',
            ),
            1 => 
            array (
                'id' => 3,
                'created_at' => '2021-11-02 09:05:36',
                'updated_at' => '2021-11-08 09:57:07',
                'deleted_at' => NULL,
                'company_id' => '3',
                'manager_id' => '4',
                'project_name' => 'Java',
                'category' => '1',
                'image' => '',
                'start_date' => '2021-11-01',
                'end_date' => '2021-11-06',
                'assign_to' => NULL,
                'priority' => 'High',
                'description' => 'xzczxczxc',
                'status' => 'completed',
                'bar_link' => '100',
            ),
            2 => 
            array (
                'id' => 4,
                'created_at' => '2021-11-08 08:42:10',
                'updated_at' => '2021-11-09 06:47:35',
                'deleted_at' => NULL,
                'company_id' => '3',
                'manager_id' => '4',
                'project_name' => 'Java Delia',
                'category' => '1',
                'image' => '',
                'start_date' => '2021-11-10',
                'end_date' => '2021-11-13',
                'assign_to' => NULL,
                'priority' => 'High',
                'description' => 'testing',
                'status' => 'assigned',
                'bar_link' => '40',
            ),
            3 => 
            array (
                'id' => 5,
                'created_at' => '2021-11-08 08:43:44',
                'updated_at' => '2021-11-08 09:04:34',
                'deleted_at' => NULL,
                'company_id' => '3',
                'manager_id' => '4',
                'project_name' => 'ramzi is best',
                'category' => '1',
                'image' => '',
                'start_date' => '2021-11-10',
                'end_date' => '2021-11-15',
                'assign_to' => NULL,
                'priority' => 'Medium',
                'description' => 'testing jbjkbkjbjkb kbkjbkjb',
                'status' => 'inProgress',
                'bar_link' => '50',
            ),
            4 => 
            array (
                'id' => 6,
                'created_at' => '2021-11-18 08:33:35',
                'updated_at' => '2021-11-18 12:36:22',
                'deleted_at' => NULL,
                'company_id' => '19',
                'manager_id' => '20',
                'project_name' => 'php',
                'category' => '2',
                'image' => 'taskimages/gnRQxy7d9UDa3pY5tf7NXRjfDtawMtjyasAYdewq.pdf',
                'start_date' => '2021-11-19',
                'end_date' => '2021-11-22',
                'assign_to' => NULL,
                'priority' => 'Medium',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'status' => 'completed',
                'bar_link' => '100',
            ),
            5 => 
            array (
                'id' => 7,
                'created_at' => '2021-12-03 16:19:09',
                'updated_at' => '2021-12-03 16:51:04',
                'deleted_at' => NULL,
                'company_id' => '3',
                'manager_id' => '4',
                'project_name' => 'Demo Talal',
                'category' => '1',
                'image' => 'taskimages/XOv4fpndIb2HQIK0LFBpi62VoR9M2cejh6b5BJ3T.pdf',
                'start_date' => '2021-12-04',
                'end_date' => '2021-12-05',
                'assign_to' => NULL,
                'priority' => 'High',
                'description' => 'nlah blahafsf',
                'status' => 'assigned',
                'bar_link' => '80',
            ),
            6 => 
            array (
                'id' => 8,
                'created_at' => '2022-01-17 17:10:48',
                'updated_at' => '2022-01-17 17:10:48',
                'deleted_at' => NULL,
                'company_id' => '3',
                'manager_id' => '11',
                'project_name' => 'Java Delia',
                'category' => '1',
                'image' => 'taskimages/Nr4cF9pI7sdPHHZ7FEylXlHLS7xFhGnsoKCvSyey.png',
                'start_date' => '2022-01-18',
                'end_date' => '2022-01-24',
                'assign_to' => NULL,
                'priority' => 'Medium',
                'description' => 'xsczxxczxczc',
                'status' => 'assigned',
                'bar_link' => '0',
            ),
            7 => 
            array (
                'id' => 9,
                'created_at' => '2022-01-17 20:04:36',
                'updated_at' => '2022-01-17 20:04:36',
                'deleted_at' => NULL,
                'company_id' => '3',
                'manager_id' => '11',
                'project_name' => 'abc',
                'category' => '1',
                'image' => 'taskimages/9qh2wotlkJAFweZVICi35dsBd2Ye1ffPMiAe3Jmc.jpeg',
                'start_date' => '2022-01-19',
                'end_date' => '2022-01-28',
                'assign_to' => NULL,
                'priority' => 'High',
                'description' => 'abc',
                'status' => 'assigned',
                'bar_link' => '0',
            ),
        ));
        
        
    }
}