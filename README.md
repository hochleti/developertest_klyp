### Overview
I have created a simple website with a search funcitonality. The homepage of the website displays movies in card design. Each movie links to another page which outlines their details such as title year and image. There is a search bar on the homepage to search for movies containing any of the following words: red, green, blue or yellow. The search output will then display movies that has a matching word in their titles with any of the colours. 

### Technical Aspect
- The website is built with Lavarel, following the MVC model. 
- CSS and Bootstrap are used to style the web pages
- phpMyAdmin and MySQL are used to create, populate and manage the database.

### The Approach
Before starting the project, I took some time to familiar myself with Lavarel and the following how I set up my project with Lavarel.

1. Install Composer and Lavarel

https://getcomposer.org/

```composer global require laravel/installer```

2. Create a project

```composer create-project --prefer-dist laravel/laravel project```

Then I needed to connect the database to Lavarel by editing the env file and database.php


### Encounter error 
If you encounter a PHP Warning, type in
```composer install```

And run the app again with:
```php artisan serve```
