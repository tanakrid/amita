# php-starter
> Simple PHP Framework

## Dependencies 
* doctrine/inflector 1.3
    * The Doctrine Inflector has static methods for inflecting text. The features include pluralization, singularization, converting between camelCase and under_score and capitalizing words.
    * [Document](https://www.doctrine-project.org/projects/doctrine-inflector/en/1.3/index.html)
* vlucas/phpdotenv 3.4
    * Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.
    * [Github](https://github.com/vlucas/phpdotenv)
* league/plates 3.3
    * Native PHP Template System
    * [platesphp.com](https://platesphp.com/)
    * folder `resources/views/`

## Create `.env` file  
```dotenv
DB_HOST=localhost
DB_NAME=your-database-name
DB_USER=your-db-username
DB_PASSWORD=your-secret
```

## Change document root to directory `public/`
* apache virtual host
```apacheconfig
<VirtualHost *:80> 
    DocumentRoot "/part/to/php-starter/public/"
    ServerName php-starter.test
    ServerAlias *.php-starter.test
    <Directory "/part/to/php-starter/public/">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

## Request URI
`host:port/{controllerName}/{methodName}/params...?query=...`
