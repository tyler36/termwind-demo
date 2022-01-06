# TermWind demo <!-- omit in toc -->

- [Description](#description)
- [Demo](#demo)
- [Adding TermWind](#adding-termwind)

## Description

- "Termwind allows you to build unique and beautiful PHP command-line applications, using the Tailwind CSS API. In short, it's like Tailwind CSS, but for the PHP command-line applications."
- [Homepage](https://github.com/nunomaduro/termwind)
- Requires `PHP 8.0+`

## Demo

- The example script queries the Lavavel sub-reddit and displays the following information:
  - title
  - author
  - upvotes

```shell
$ php r-laravel.php
...
Deploy project on Ubuntu Server
Author: frevelmann | Upvotes: 8
```

## Adding TermWind

- Add Termwind

```shell
composer require nunomaduro/termwind
```

- Import the function

```php

use function Termwind\{render};
```

- Write required HTML with tailwind classes and render to display.

```php
$renderHtml = "<div class='font-bold'>Example Heading</div>";

render($renderHtml);
```
