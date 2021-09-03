# jumia
Installation

- git clone https://github.com/sherifelkhiat/jumia.git 
- cd jumia
- cp .env.example .env 
- docker-compose build
- docker-compose up -d
- chmod -R 777 /path/to/folder  // just in local not prodution
- ./composer install
- ./composer update
- ./php-artisan migrate --seed
- ./php-artisan key:generate
- Enjoy :)
