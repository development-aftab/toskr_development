<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run(){
        $main = array(
        	\Database\Seeders\UserInsightsTableSeeder::class,
        	\Database\Seeders\UsersTableSeeder::class,
        	\Database\Seeders\ActivityLogTableSeeder::class,
        	\Database\Seeders\CommonSettingsTableSeeder::class,
        	\Database\Seeders\AttachmentsTableSeeder::class,
        	\Database\Seeders\CompaniesTableSeeder::class,
        	\Database\Seeders\ContactsTableSeeder::class,
        	\Database\Seeders\CoworkerRequestsTableSeeder::class,
        	\Database\Seeders\DepartmentsTableSeeder::class,
        	\Database\Seeders\EmployeesTableSeeder::class,
        	\Database\Seeders\FailedJobsTableSeeder::class,
        	\Database\Seeders\FaqsTableSeeder::class,
        	\Database\Seeders\FeaturesTableSeeder::class,
        	\Database\Seeders\GroupChatsTableSeeder::class,
        	\Database\Seeders\HomePagesTableSeeder::class,
        	\Database\Seeders\HowItWorksTableSeeder::class,
        	\Database\Seeders\InformationTableSeeder::class,
        	\Database\Seeders\InvitationsTableSeeder::class,
        	\Database\Seeders\MessagesTableSeeder::class,
        	\Database\Seeders\MessageViewedsTableSeeder::class,
        	\Database\Seeders\PasswordResetsTableSeeder::class,
        	// AdminSeeder::class,
        	// CountrySeeder::class,
        	\Database\Seeders\RolesTableSeeder::class,
        	\Database\Seeders\PermissionsTableSeeder::class,
        	\Database\Seeders\PermissionRoleTableSeeder::class,
        	\Database\Seeders\ProfilesTableSeeder::class,
        	\Database\Seeders\ProgresTableSeeder::class,
        	\Database\Seeders\RoleUserTableSeeder::class,
        	\Database\Seeders\SocialAccountsTableSeeder::class,
        	\Database\Seeders\SocialMediaTableSeeder::class,
        	\Database\Seeders\TaskAssignedsTableSeeder::class,
        	\Database\Seeders\TaskCategoriesTableSeeder::class,
        	\Database\Seeders\TaskDetailsTableSeeder::class,
        	\Database\Seeders\TaskInsightsTableSeeder::class,
        	\Database\Seeders\TaskLogsTableSeeder::class,
        	\Database\Seeders\TasksTableSeeder::class,
        );
                $this->call($main);
    }
    // public function run()
    // {
    //      $this->call(\Database\Seeders\AttachmentsTableSeeder::class);
    // }
}
