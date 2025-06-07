<p align="center">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
<img src="https://raw.githubusercontent.com/bigskysoftware/htmx/f690d928342b6334fa539cfbd4be515748d2ba0f/www/static/img/htmx_logo.2.png" width="200" alt="HTMX Logo">
</p>

# Laravel HTMX Starter Kit

A heavily opinionated starter kit for Laravel that bundles essential tooling with the simplicity of HTMX into a jumping off point.

## Requirements

- PHP 8.4
- [Bun](https://bun.sh/) (Can be replaced with your package manager of choice)

## Installed Packages

The following packages come pre-installed:

- [Htmx](https://htmx.org)
- [Lefthook](https://lefthook.dev)
- [Octane](https://laravel.com/docs/octane)
  - [FrankenPHP](https://frankenphp.dev)
- [Pest](https://pestphp.com)
  - [Arch Plugin](https://pestphp.com/docs/arch-testing)
  - [Laravel Plugin](https://pestphp.com/docs/plugins#laravel)
- [PHPStan](https://phpstan.org)
  - [Larastan](https://github.com/larastan/larastan)
- [Pint](https://laravel.com/docs/pint)
- [Prettier](https://prettier.io)
- [Rector](https://getrector.com)

### Pint

The Pint config is based on [Nuno Maduro's Essentials package](https://github.com/nunomaduro/essentials) with some tweaks:

- Uses PER preset
- [Groups Imports](https://cs.symfony.com/doc/rules/import/group_import.html)
  - By extension, disables [Single Import Per Statement](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html)
- [New With Parenthesis](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html)
  - Disabled for anonymous classes
- [No Unused Imports](https://cs.symfony.com/doc/rules/import/no_unused_imports.html)
- [Yoda Style](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html)

### PHPStan

By default, PHPStan is set to level 10.

### Bun

By default, this starter kit uses [Bun](https://bun.sh) to manage JavaScript dependencies. If you prefer to use a different one, do the following:

- Delete `bun.lock`

## Common Scripts

Common scripts as handled using [Mask](https://github.com/jacobdeichert/mask).

While these are useful, you're not required to have Mask installed.

## License

This starter kit is licensed under the MIT license and is intended for this starter kit only. As such, this repository does not contain a LICENSE file.

Copyright 2025 RVxLab

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
