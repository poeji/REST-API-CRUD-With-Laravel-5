# REST API CRUD With Laravel 5
Make REST API CRUD Laravel 5 and with Package Fractal (https://github.com/spatie/laravel-fractal). 

To install crud API laravel 5 :
1. You can change .env for connect database.
2. you can use migrate database first with <code>php artisan migrate</code> for import database tou your database.
3. <code>php artisan serve</code>
4. Register User : http://localhost:8000/api/auth/register (POST)
5. Login User : http://localhost:8000/api/auth/login (POST)
6. View All User : http://localhost:8000/api/users (GET) -> Must have token id, get token id with register first
7. View Detail User : http://localhost:8000/api/users/{iduser} (GET) -> Must have token id, get token id with register first
8. Insert Content : http://localhost:8000/api/post (POST) -> Must have token id, get token id with register first
9. Edit Content : http://localhost:8000/api/post/{idcontent} (PUT) -> Must have token id, get token id with register first
10. Delete Content : http://localhost:8000/api/post/{idcontent} (DELETE) -> Must have token id, get token id with register first

Any question? please send me email to poeji.exact@gmail.com (http://pujikartono.com)
