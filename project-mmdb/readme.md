# Installation My Movie DataBase

## Vendors
```
composer install
```

## Create DB
*in /database*
```
sqlite3 database.sqlite ""
```

## Migrate
*in /*
```
php artisan migrate
```

## Seed database
```
php artisan db:seed
```

## Create your own .env file
```
cp .env.example .env
```

### When error in config files
```
php artisan config:clear
```

### When autoload not found
```
composer dump-autoload
```

### when app key error
```
php artisan key:generate
```