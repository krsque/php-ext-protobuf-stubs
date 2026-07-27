# krsque/php-ext-protobuf-stubs

PHPStan / Psalm / PhpStorm stubs for `ext-protobuf` v4.33.4.

## Installation

```
composer require --dev krsque/php-ext-protobuf-stubs:~33.4.0
```

## Version convention

Stubs versions map to `ext-protobuf` with the major version dropped: ext-protobuf `v4.33.4` → stubs `33.4.*`.

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
    <file name="vendor/krsque/php-ext-protobuf-stubs/psalm/protobuf.phpstub" preloadClasses="true" />
</stubs>
```

Psalm's `<stubs>` element accepts individual files only — pointing it at the
`stubs/` directory silently loads nothing ([vimeo/psalm#5326]), so this package
ships `psalm/protobuf.phpstub`: every stub concatenated into one file.

Verify it is being picked up with `vendor/bin/psalm --debug`; you should see the
`.phpstub` file parsed, and classes such as `Google\Protobuf\Internal\Message`
should no longer report `Using reflection to get metadata`.

[vimeo/psalm#5326]: https://github.com/vimeo/psalm/issues/5326

## PhpStorm

No configuration needed — PhpStorm indexes the `stubs/` directory once the
package is installed.
