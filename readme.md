# Simple blog

I built this simple blog with [Laravel](https://laravel.com/) PHP Framework.

In this app admin can login, add a post and also edit or delete a post, also add comments and delete them.

This app is inspired by [Mackenzie Child](https://github.com/mackenziechild). Here is a [tutorial](https://www.youtube.com/watch?v=BI_VnnOLSKY) where he built this blog in Rails 4.

# Instructions

To run this on your local server.
- You need to install PHP. Easiest way to do this is to use [XAMPP](https://www.apachefriends.org/index.html)
- Clone this repo to your xampp/htdocs dir
- Create a database named blog from localhost/phpmyadmin
- Rename the .env.example file to .env
- Run the following command in that dir

    php artisan migrate
