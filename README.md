# BuyStation

Requirements:

1. PHP version-^7.3|^8.0, Laravel version-^8.75
2. composer
3. phpMyAdmin

To Run The Project:

1. Start Apache and MySQL in XAMPP.
2. Create a DB named 'buy_station' in phpMyAdmin.
3. Clone the project.
4. Go inside the project folder (BuyStation) and run the following commands one by one in git bash / cmd:
   1. composer install
   2. cp .env.example .env /rename (.env.example) to (.env) if you face any error with the command.
   3. Go inside the .env file and change the DB name to 'buy_station'.
   4. php artisan key:generate
   5. php artisan serve

Login credential:

Username: emp1 password: emp#1
