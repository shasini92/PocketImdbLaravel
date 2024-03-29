# PocketIMDb application using Laravel for the backend and Vue for the front

## Project setup and installing all the dependencies
```
composer install
```

### Make a copy of the ".env.example" and call it ".env"
```
Make sure to input your database connection credentials
```

### Create an application key
```
php artisan key:generate
```

### Run the migrations so that your database is the same as the project one
```
php artisan migrate
```

### Seed the database
```
php artisan db:seed
```
### Download ElasticSearch and run the elasticsearch.exe from:
[Get Elastic](https://www.elastic.co/downloads/elasticsearch)

### Run this command to index your database in ElasticSearch
```
php artisan search:index
```

### Generate a secret key for your application to be used with JWT
```
php artisan jwt:secret
```

### Make sure to download and follow the instructions for the UI part from: 
```
https://github.com/shasini92/PocketImdbVue
```
