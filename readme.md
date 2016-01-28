Change `.env.example` file to `.env`

Change to directory that cloned and write commands:

    composer install

    php artisan migrate
    
	php artisan db:seed
	
You need to chage `vendor/zizaca/entrust/src/Entrust/Middleware/EntrustRole.php` line 39

```
abort(403);
```

to

```
return redirect('/auth/login');
```

This is my first web project with laravel. Thank you to www.laracasts.com is i have learned laravel still following there and https://github.com/Zizaco/entrust. Im sure have many problems, tons of missing and incomplete things. Pls let me know all things that will help to me and strenght my skills a step further.   
	






