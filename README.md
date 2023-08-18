# MONSTREET #
![hero](https://github.com/Melkijo/monstreet-online-store/assets/93898408/a9185e20-fcad-45ae-8f17-2a2811b49f0f)
### Description project ###
Monstreet is an online clothing brand that offers bold, modern and unique styles for individuals who want to express their personality through clothing. With a focus on the latest fashion trends and innovative designs, Monstreet has become the go-to destination for those seeking clothing that is not only comfortable and quality, but also reflects the urban spirit that is full of energy.
### Features ###
- Authentication (login, register)
- Multi-user (admin, customer)
- Searching product
- Pagination product
- CRUD product
- Order History
- Product cart
- Checkout
### Tech Stack ###
php, laravel, tailwind, daisyui

### Setup ###
#### Requirement ####
node, composer
#### Git ####
```
git clone https://github.com/Melkijo/monstreet-online-store.git
cd monstreet-online-store
```
#### Installation ####
```
npm install
composer install
```
#### Database ####
change the `.env.example` to `.env` file, and set your database using MySQL or SQLite <br/>
how to set database using SQlite : [here][https://laravel.com/docs/10.x/database#sqlite-configuration]
```
php artisan migrate
php artisan db:seed
```
#### Live ####
```
npm run dev
php artisan serve
```
the server will running on http://127.0.0.1:8000 or you can see in the `php artisan serve` info

#### account ####
```
admin
email: admin@admin.com
pass: admin123
```
```
user
email: user@example.com
pass: user123
```
### Screenshot ###
![login](https://github.com/Melkijo/monstreet-online-store/assets/93898408/febc0733-fbac-463b-898c-2ab8ed623ea2) <br/>
![admin-product](https://github.com/Melkijo/monstreet-online-store/assets/93898408/ff0d056e-d367-4e4a-8172-e921d6849ca6) <br/>
![admin-add-product](https://github.com/Melkijo/monstreet-online-store/assets/93898408/a780a357-02b5-498e-b63e-7e0bfa1ffb45) <br/>
![user-cart](https://github.com/Melkijo/monstreet-online-store/assets/93898408/e1db9f8a-e45b-4d01-ab29-231194341661) <br/>
![user-history](https://github.com/Melkijo/monstreet-online-store/assets/93898408/cabacbe4-5f4f-480f-a860-20e9af3b4567) <br/>
![admin-history](https://github.com/Melkijo/monstreet-online-store/assets/93898408/d8f79870-a161-4468-a18c-6d6886f3bc21)
