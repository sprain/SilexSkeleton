# SprainSilexSkeleton
My personal [Silex](http://silex.sensiolabs.org/) skeleton app.

## Usage

### Get it running
1. `git clone https://github.com/sprain/SilexSkeleton.git ~/Sites/new-app`
2. `composer install`
3. `cp app/config_local.dist.php app/config_local.php`
3. `sh app/skeleton/permissions.sh`
4. `php -S 127.0.0.1:8080 -t web`
5. Open (http://127.0.0.1:8080/?name=sprain)


### Make it a new project
1. Search and replace `Sprain\Silex` with desired base namespace
2. Check out `web/index.php` and `src` folder.
3. Code some stuff!

### Use a database
1. Manually create database
2. Update database params in `app/config.php`
3. Create desired entities in `src/Entity`
4. `php vendor/bin/doctrine orm:schema-tool:create`
