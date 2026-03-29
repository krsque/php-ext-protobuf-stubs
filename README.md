# krsque/php-ext-protobuf-stubs

PHPStan / Psalm / PhpStorm stubs for `ext-protobuf` v4.32.1.

## Installation

```
composer require --dev krsque/php-ext-protobuf-stubs:~32.1.0
```

## Version convention

Stubs versions map to `ext-protobuf` with the major version dropped: ext-protobuf `v4.32.1` → stubs `32.1.*`.

## PHPStan

Works automatically if you have `phpstan/extension-installer`. Otherwise, add to your `phpstan.neon`:

```neon
includes:
    - vendor/krsque/php-ext-protobuf-stubs/extension.neon
```

## Psalm

Add to your `psalm.xml`:

```xml
<stubs>
    <file name="vendor/krsque/php-ext-protobuf-stubs/stubs/" preloadClasses="true" />
</stubs>
```
