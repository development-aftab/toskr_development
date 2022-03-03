Laravel Project Configurations
	Requirements 
		Install Composer 'laravel Dependencies Manager'
		Install xampp or wamp on windows (optional)
	Project Framework & Other Details 
		Framework 
			Laravel 7.0
		Min PHP Required
			7.2  
		Bootstrap used
			v4.6.1
		Note: All these things can be viewed in composer.json (Please do not modify)
	Configurations	
		Download and extract project in any folder (you can create new folder with any name in any directory) 
		Create empty database in mysql
		Edit .env file exist in (root folder) and update these database variable values
			DB_DATABASE=your database name
			DB_USERNAME=your mysql username
			DB_PASSWORD=your myslq password		
		Open Command Prompt or PowerShell window on project root directory and run these commands
			composer update
			php artisan migrate
			php artisan db:seed
			php artisan storage:link (optional)
			php artisan serve
		Note: Before executing these commands you must install Composer.
	Execustion 
		After all above setting project is ready to run on localhost		
		Goto browser and type 
			http://localhost:8000
				or
			http://127.0.0.1:8000
	Important Note (These steps are performed while pushing project on cpanel)
		There is no need of public folder in project because all the files/folders from public are moved to public_html (on cpanel) 
		and all other laravel main files like (Models,Views,Controllers,Routes etc) are moved outside of public_html (with any name currently we are using  				`toskr_main_files` this name is defined in root `index.php` file) 
		this step is taken due to security reasons in any case we can not allow our users to access our (Models,Controllers and .Env) files directly from URL.
 			
Project Folders and Files structure 
	All the website `User End` assets (images,css,js,fonts) exists in public folder in root directory.
	Other folders & files like (less,log_viewer,robots etc) are default files and folders created while installing laravel project and other dependencies.
	
	The main and important directory where all the users and admins views (FrontEnd) files, Models, Routes & Controllers are present in root folder.
		All our forntend pages exists in (\resources\views\website) here is sompe explaination about folders and files of this directory.
			Ajax (Folder)
				All the ajax requests views on websites are called/loaded from this folder.
			Email (Folder)
				All the emails sent from website are stored here currently only one file present here `registration.blade.php` this is used while sending email to user on registration.
 			Layout (Folder)
				The file inside this folder is `master.blade.php` is most important file for website frontend where all the website (css,js) is defined here and the header and footers are defined here.
			All other files inside this folders are the frontend pages of website with default website header & footers (defined in layout/master.blade.php)
		
		All the dashboard views exists in the (\resources\views) folder like
			In department folder we can find departments views
			In groupChat we can find all the views related to groupChat
		The most important files & folders for admin header/footer and other styling and js exists in (\resources\views\layout)
			Here header and footers can be viewed in (\resources\views\layout\master.blade.php)
			Other files like navbar, sidebar can be edited form (\resources\views\layout\partials) folder.
	Project Models
		All the project models (toskr_main_files\app)
	Project Controllers
		All the project controllers (\app\Http\Controllers)
	Project Routes
		All the project routes (\routes\web.php)
	
This is the breif information about project configurations and file structure.	
