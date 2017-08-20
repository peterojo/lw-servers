# README #

This is a Server Listing app, which was built as a PHP Developer application interview exercise for LeaseWeb

### How It Works ###

Servers are listed on the index page.
Server listing can be filtered with the following criteria:
- Storage
- RAM
- Harddisk type
- Location

### How do I get set up? ###

* Clone this repo by running the following command: `git clone https://peterojo@bitbucket.org/peterojo/lw-servers.git`
* Change directories into the newly cloned directory: `cd lw-servers`
* Install dependencies: `composer install`
* Copy example env file and edit to set up your local config details: `cp .env.example .env`
* Generate application key: `php artisan key:generate`
* Serve application: `php artisan serve`

