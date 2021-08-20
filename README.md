## Laravel 8 SMS and Botman Chatbot

## Prerequisites

* A [free Nexmo account](https://dashboard.nexmo.com/sign-up)

## Getting Started

Clone the repo
```
    git clone git@github.com:astabile/sms.git
    cd sms
```

Install dependencies
```
    composer install
```

Create .env file
```    
    cp .env.example .env
```

Add configuration and credentials information to .env
```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=name
    DB_USERNAME=username
    DB_PASSWORD=pass
    
    NEXMO_API_KEY=yourKey
    NEXMO_API_SECRET=yourSecret
    NEXMO_NUMBER=yourNumber
```

Run migrations
```
php artisan migrate
```

Add seeders
```
php artisan db:seed
```

Run server
```
    php artisan serve

```

Check from this url
```
    http://127.0.0.1:8000
```
