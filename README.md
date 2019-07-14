# laravelmultiplelogin
# Multi type User Login System With Menu Permissions
Several people are searching for a multi-type user login system with menu permission in laravel. I'm sharing my very basic technique to handle such kind of logic. I have used the same technique for my website https://ayehaye.com. 
https://ayehaye.com is a classified advertisement website where people can sell and buy their goods. anyway, let's move on to the original topic. 
I'm using Admin LTE for making it more simple and clear for you. 
How to run this project?
1. clone this project <git clone https://github.com/Badshah1/laravelmultiplelogin.git>

2. execute the following commands:
	>> composer install
	>> copy .env.example .env
3. Create a database and update  .env file
4. execute command > php artisan config:cache
5. execute command > php artisan migrate
6. execute command > php artisan db:seed
Now the project is ready to use.
