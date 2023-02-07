# demo-symfony-app

Symfony 6: Demo application

Build status: [![Release](https://github.com/linkorb/demo-symfony-app/actions/workflows/release.yaml/badge.svg)](https://github.com/linkorb/demo-symfony-app/actions/workflows/release.yaml)

# Setup project (Without Docker)

## Step 1: Download github repository.

``sh
git@github.com:linkorb/demo-symfony-app.git
```

## Step 2: Composer

```sh
# install packages
composer install
```
Project requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

## Step 3: configuration
Copy `.env` to `.env.local` and configure paramaters like 'DATABASE_URL'.

```sh
cp .env  env.local
```
## Step 4: NPM Packages
npm packages install and build it.

```sh
npm i
node_modules/.bin/encore production && rm -rf node_modules
```
## Step 5: Database setup
Run command to create database and tables

```sh
bin/console doctrine:database:create
bin/console doctrine:schema:update --force
```

## setup 6: Generate fixture data

* Use ["hautelook/alice-bundle](https://github.com/theofidry/AliceBundle) for generate fixture/fake data.  More information is available on a package README.md.
* Fixture file(s) contain in a `fixtures/` directory. Load fixtures order set in `fixtures/all.yaml`.  Code locate in `src/Locator/FixturesCustomOrderFilesLocator.php` file.  More details avialable on ["hautelook/alice-bundle](https://github.com/theofidry/AliceBundle/blob/master/doc/advanced-usage.md#load-fixtures-in-a-specific-order)

* Run command to genrate fixture(fake data)

```sh
bin/console hautelook:fixtures:load --env=dev
```

Press 'y' for furthure process.


# Setup project use Docker
Setup project use Docker file. Use docker/docker-compose to create image and container.

```sh
 docker build .
```

## step 1: configuration
Execute command in running container.

```sh
# Open running container prompt
docker exec -it  container-name bash

# Copy `.env` to `.env.local` and configure paramaters like 'DATABASE_URL'.
cp .env  env.local

# Database setup: create databse and tables
bin/console doctrine:database:create
bin/console doctrine:schema:update --force
```

Check [setup 6: Generate fixture data](https://github.com/linkorb/demo-symfony-app#setup-6-generate-fixture-data)

# Enjoy :)

