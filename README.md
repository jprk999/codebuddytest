steps to create the project
git clone
composer install
add .env file 
change db params in .env file
run php artisan voyager:install --with-dummy to create dummy admin
credentials will be
email: admin@admin.com
password: password


in categories to view the the given task 
visit http://localhost/codebuddytest/public/admin/categories/create

you might an error while creating the main category but the data will be created in database so just revisit the above URL and you can see the new category in drop down .. similarly you can create sub categories and view the result in dropdown.