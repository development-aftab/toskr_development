<?php
 
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttachmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attachments')->delete();
        
        \DB::table('attachments')->insert(array (
            0 => 
            array (
                'id' => 32,
                'created_at' => '2021-11-18 06:01:07',
                'updated_at' => '2021-11-18 06:01:07',
                'deleted_at' => NULL,
                'task_id' => '4',
                'employee_id' => '4',
                'company_id' => 3,
                'manager_id' => 4,
            'Name' => 'Complaint (1).pdf',
                'attachment' => 'taskattachment/YTRlZlE3QC7WXq1Ps0zFg2K8AkjaB4cPMz7YjqDH.pdf',
            'description' => 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample "zero-padded integers":',
            ),
            1 => 
            array (
                'id' => 33,
                'created_at' => '2021-11-18 06:01:24',
                'updated_at' => '2021-11-18 06:01:24',
                'deleted_at' => NULL,
                'task_id' => '4',
                'employee_id' => '4',
                'company_id' => 3,
                'manager_id' => 4,
                'Name' => 'Tosker.pdf',
                'attachment' => 'taskattachment/WH3o7ua6beXsCg0QO4lDNLem6MuRu091E9paROn0.pdf',
            'description' => 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample "zero-padded integers":',
            ),
            2 => 
            array (
                'id' => 34,
                'created_at' => '2021-11-18 06:01:39',
                'updated_at' => '2021-11-18 06:01:39',
                'deleted_at' => NULL,
                'task_id' => '4',
                'employee_id' => '4',
                'company_id' => 3,
                'manager_id' => 4,
            'Name' => 'logo (1).png',
                'attachment' => 'taskattachment/xj709vh9TcV0kwe4Gt4CrBU0HKEgbIcsbsJGmVv1.png',
            'description' => 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample "zero-padded integers":',
            ),
            3 => 
            array (
                'id' => 35,
                'created_at' => '2021-11-18 06:02:00',
                'updated_at' => '2021-11-18 06:02:00',
                'deleted_at' => NULL,
                'task_id' => '4',
                'employee_id' => '4',
                'company_id' => 3,
                'manager_id' => 4,
            'Name' => 'Certificate (5).pdf',
                'attachment' => 'taskattachment/39w45zc02cGctx1VkKFPRFyW8ij3NmEs3ladOp0u.pdf',
            'description' => 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample "zero-padded integers":',
            ),
            4 => 
            array (
                'id' => 36,
                'created_at' => '2021-11-18 06:02:16',
                'updated_at' => '2021-11-18 06:02:16',
                'deleted_at' => NULL,
                'task_id' => '4',
                'employee_id' => '4',
                'company_id' => 3,
                'manager_id' => 4,
                'Name' => 'soccer-ball-with-denmark-national-flag-colors-vector-35742830.jpg',
                'attachment' => 'taskattachment/7OdloMAuUmEwaYOoEQMpSTjV3BvXTcK8PpABxVIq.jpeg',
            'description' => 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample "zero-padded integers":',
            ),
            5 => 
            array (
                'id' => 37,
                'created_at' => '2021-11-18 06:02:32',
                'updated_at' => '2021-11-18 06:02:32',
                'deleted_at' => NULL,
                'task_id' => '4',
                'employee_id' => '4',
                'company_id' => 3,
                'manager_id' => 4,
            'Name' => 'Safeguarding (admin).docx',
                'attachment' => 'taskattachment/rWIIVGNd1lTum3J8mwrm014pO7kWbUkk7PD5OabE.docx',
            'description' => 'EDIT (somehow requested by the downvotes), from the page linked above, here\'s a sample "zero-padded integers":',
            ),
            6 => 
            array (
                'id' => 38,
                'created_at' => '2021-12-03 16:22:23',
                'updated_at' => '2021-12-03 16:22:23',
                'deleted_at' => NULL,
                'task_id' => '7',
                'employee_id' => '4',
                'company_id' => 3,
                'manager_id' => 4,
            'Name' => 'Progressive World - Stage 2 (1) (1).pdf',
                'attachment' => 'taskattachment/tsnOXAAhn26YkEOLL4J17pj6dvUWOmgcXayuCv8t.pdf',
                'description' => NULL,
            ),
            7 => 
            array (
                'id' => 39,
                'created_at' => '2021-12-03 16:52:05',
                'updated_at' => '2021-12-03 16:52:05',
                'deleted_at' => NULL,
                'task_id' => '7',
                'employee_id' => '4',
                'company_id' => 3,
                'manager_id' => 4,
                'Name' => '6DA439B1-5E8D-4D0C-A503-9FE6C19933A9.jpeg',
                'attachment' => 'taskattachment/rjinvP4BraOJAvvI0sRLFsXnjsVDlxHzJTDT826W.jpeg',
                'description' => NULL,
            ),
        ));
        
        
    }
}