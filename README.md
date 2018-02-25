# Grid Layout & Symfony Ecnore Test

This is a grid layout test.
Stack: SASS, PHP 7.1, Symfony Encore...

## Initial setup

    npm i -g yarn
    yarn

## Dev PHP 7.1 web server

    php -S localhost:80 -t public
    
OR
    
    docker run  --rm -p 8000:80  -v "/$PWD":/usr/src/myapp -w //usr/src/myapp php:7.1-cli php -S 0.0.0.0:80 -t public

## Dev hot reload

    yarn run encore dev-server

## Dev watch

    yarn run encore dev --watch

## Production build

    yarn run encore production
