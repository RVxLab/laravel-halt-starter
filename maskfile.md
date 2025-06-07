# Common Scripts

These are some common scripts to run within the project.

## lint

Run the linters. The following linters are in use:

- [Pint](https://laravel.com/pint)
- [Prettier](https://prettier.io)

> Run linters

```sh
vendor/bin/pint
bun run prettier -w .
```

## phpstan

Run [PHPStan](https://phpstan.org) for static analysis.

PHPStan is run in Level 10 with the memory limit turned off.

> Analyze the codebase using PHPStan

```sh
vendor/bin/phpstan analyze --memory-limit=-1
```

## test

Run all unit tests using [Pest](https://pestphp.com).

**OPTIONS**

- parallel
    - flags: -p --parallel
    - desc: Run tests in parallel

> Run all unit tests

```sh
FLAGS=""
[ "$parallel" = "true" ] && FLAGS="$FLAGS -p"

php artisan test $FLAGS
```

## rector

Run [Rector](https://getrector.com) to clean up the code.

**OPTIONS**

- dry
    - flags: -n --dry-run --dryrun --dry
    - desc: Perform a dry run, no files will be changed

> Run Rector

```sh
FLAGS=""
[ "$dry" = "true" ] && FLAGS="$FLAGS -n"

vendor/bin/rector process $FLAGS
```

## normalize

Normalize the composer.json file using [Composer Normalize](https://github.com/ergebnis/composer-normalize).

> Normalize composer.json

```sh
composer normalize
```

## bump

Bump all PHP and JavaScript dependencies

> Bump dependencies

```sh
composer bump
bun update
git commit -m "Bump dependencies" composer.json composer.lock package.json bun.lock
```
