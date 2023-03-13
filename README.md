demo-symfony-app
============

Build status: [![Release](https://github.com/linkorb/demo-symfony-app/actions/workflows/30-release-and-build.yaml/badge.svg)](https://github.com/linkorb/demo-symfony-app/actions/workflows/30-release-and-build.yaml)

Demo application for best practices used in Symfony projects at LinkORB

## Installation

### Prerequisites

* Ensure [composer](https://getcomposer.org/) is installed
* Ensure [npm](https://www.npmjs.com/) is installed

### Steps

```bash
# Clone the repository
git clone git@github.com:linkorb/demo-symfony-app.git
cd demo-symfony-app

# Install PHP dependencies
composer install

# Install node dependencies
npm install

# Generate the assets
node_modules/.bin/encore prod
```

## TODO

- [x] Add repo.yaml
- [ ] Add devcontainer configuration


## Brought to you by the LinkORB Engineering team

<img src="http://www.linkorb.com/d/meta/tier1/images/linkorbengineering-logo.png" width="200px" /><br />
Check out our other projects at [linkorb.com/engineering](http://www.linkorb.com/engineering).

By the way, we're hiring!
