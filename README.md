# demo-symfony-app
Symfony 6: Demo application

# Setup project (Without Docker)

## Step 1: Download github repository.

```
git@github.com:linkorb/demo-symfony-app.git
```

## Step 2: Composer

```
# install packages
composer install
```
Project requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

## Step 3: configuration
Copy `.env` to `.env.local` and configure paramaters like 'DATABASE_URL'.
```
cp .env  env.local
```
## Step 4: NPM Packages
npm packages install and build it.
```
npm i
node_modules/.bin/encore production && rm -rf node_modules
```
## Step 5: Database setup
Run command to create database and tables

```
bin/console doctrine:database:create
bin/console doctrine:schema:update --force
```

## setup 6: Generate fixture data
Run command to genrate fixture(fake data)
```
bin/console hautelook:fixtures:load
```
Press 'y' for furthure process.


# Setup project use Docker
Setup project use Docker file. Use docker/docker-compose to create image and container.
```
 docker build .
```
## step 1: configuration
Execute command in running container.
```
# Open running container prompt
docker exec -it  container-name bash

# Copy `.env` to `.env.local` and configure paramaters like 'DATABASE_URL'.
cp .env  env.local

# Database setup: create databse and tables
bin/console doctrine:database:create
bin/console doctrine:schema:update --force

# Run command to genrate fixture(fake data)
bin/console hautelook:fixtures:load
# Press 'y' for furthure process.
```

# Enjoy :)

