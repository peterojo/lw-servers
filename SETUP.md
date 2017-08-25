# Setup Instructions

**Requirements**
----
* Git
* Composer
* Node/NPM
* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

**Installation**
----
**Step 1:**
Clone this repository
```bash
git clone https://github.com/peterojo/lw-servers.git 
```

**Step 2:**
Switch into `lw-servers` directory
```bash
cd lw-servers
```

**Step 3:**
Install dependencies
```bash
composer install
```

**Step 4:**
Set local mysql database details in `.env` configuration file.

First, run the following command:
```bash
cp .env.example .env
```
Then, edit the `.env` file to set the `DB_DATABASE`,`DB_USERNAME` and `DB_PASSWORD` fields.

**Step 5:**
Generate application key
```
php artisan key:generate
```

**Step 6:**
Migrate and seed database
```
php artisan migrate --seed
```

**Step 7:**
Make sure `storage` and `bootstrap/cache` directories are writable by the server.

```
sudo chmod -R 755 storage && sudo chmod -R 755 bootstrap/cache
```
**_Side Note:_**
I contributed this feature to the [laravel/installer](https://github.com/laravel/installer/commit/7f70b9fb8e8ec0da042baee93745c9f152d200eb) package


**Step 8:**
Install and build front-end dependencies
```
npm install && npm run dev
```

**Step 9:**
Serve up application using Laravel development server
```
php artisan serve
```
---
**Preview**
----
Now, you should be able to preview the application in your browser by navigating to 
[http://127.0.0.1:8000](http://127.0.0.1:8000>)

Enjoy!

---
**Testing**
----
You can run all tests using phpunit
```
phpunit
```
