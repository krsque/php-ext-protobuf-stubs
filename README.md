# krsque/php-ext-protobuf-stubs

PHPStan / Psalm / PhpStorm stubs for `ext-protobuf` v4.32.0.

## Use cases for this package

This package exists for projects that use the **C extension only**. Without the
pure-PHP `google/protobuf` package in `vendor/`, a static analyser has no source to
read: it either knows nothing about `Google\Protobuf\*` at all, or — where the
extension happens to be loaded — sees the classes by reflection but gets `mixed` for
every parameter and return. These stubs supply the types either way.

**1. An application pinned to one `ext-protobuf` version.** The extension is installed
wherever you analyse, and `composer.lock` is committed. This is the case the package
was built for, and everything works: full types under both analysers, and the class
aliases resolve through reflection regardless of what the stubs say.

**2. A library that pins nothing.** Contributors and CI run whatever `ext-protobuf`
their platform ships — or none at all. The stubs are then the *only* source of both
classes and types. Psalm is complete here. PHPStan has one known gap, in the class
aliases; see the FAQ.

| | Psalm | PHPStan | PhpStorm |
|---|---|---|---|
| Extension installed (case 1) | complete | complete | complete |
| Extension absent (case 2) | complete | one alias direction — see [FAQ](#phpstan-rejects-googleprotobufrepeatedfield-where-internalrepeatedfield-is-expected) | complete |

Psalm is the most complete target because its `<stubs>` support lets this package ship
a real `class_alias()` call that Psalm resolves. PHPStan has no equivalent channel, so
the aliased name is stubbed as a subclass instead — which is why the one gap above is
PHPStan's alone, and only when reflection isn't there to paper over it.

### When you do *not* need this package

If `google/protobuf` is in your `composer.json`, skip it — that package ships the
pure-PHP classes and your analyser reads their source directly. Installing both is
harmless (neither analyser reports a duplicate-class error), just redundant.

## Installation

```
composer require --dev krsque/php-ext-protobuf-stubs:~32.0.0
```

That pins the stubs to `ext-protobuf` v4.32.0 — case 1 above, an application
whose `composer.lock` is committed.

For case 2, a library whose lock file is not committed, require it loosely instead:

```
composer require --dev krsque/php-ext-protobuf-stubs:*
```

Every release declares `"conflict": {"ext-protobuf": "!=4.32.0"}`, so
Composer resolves a loose constraint to the stubs line matching the installed
extension, and to the newest release when `ext-protobuf` is not installed at all.
Pinning the line by hand defeats that and makes the dev dependency uninstallable for
anyone on a different patch build.

## Version convention

Stubs versions map to `ext-protobuf` with the major version dropped: ext-protobuf `v4.32.0` → stubs `32.0.*`.

There is one stubs line per `ext-protobuf` patch release — `4.33.5` and `4.33.6` are
`33.5.*` and `33.6.*`, not one shared line. The third component is reserved for
stub-only fixes against the same extension build.

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

Load the aggregate **only**. Do not list files from `stubs/` alongside it. The
aggregate registers the extension's class aliases with a real `class_alias()` call,
which Psalm resolves, so `Google\Protobuf\Internal\RepeatedField` and
`Google\Protobuf\RepeatedField` are one type. `stubs/` instead declares the aliased
name as a subclass, which is the best PHPStan can read from a file it only parses.
Loading both replaces the alias with that subclass and costs you assignability in one
direction — Psalm's main advantage here, given away.

Verify the aggregate is being picked up with `vendor/bin/psalm --debug`; you should see
the `.phpstub` file parsed, and classes such as `Google\Protobuf\Internal\Message`
should no longer report `Using reflection to get metadata`.

One reflection line is expected even on a correct setup:

```
Using reflection to locate file for Google\Protobuf\Internal\RepeatedField
```

Aliased names have no declaration of their own in the aggregate — only a
`class_alias()` call — so Psalm locates the file by reflection. The type it resolves to
still comes from the stub, template parameters included.

[vimeo/psalm#5326]: https://github.com/vimeo/psalm/issues/5326

## PHPStan

Works automatically if you have `phpstan/extension-installer`. Otherwise, add to your `phpstan.neon`:

```neon
includes:
    - vendor/krsque/php-ext-protobuf-stubs/extension.neon
```

Either way PHPStan reads the `stubs/` directory, not the Psalm aggregate. If you
analyse without `ext-protobuf` loaded, read the first two FAQ entries — both describe
things that only happen in that configuration.

## PhpStorm

No configuration needed — PhpStorm indexes the `stubs/` directory once the
package is installed.

## FAQ

### PHPStan rejects `Google\Protobuf\RepeatedField` where `Internal\RepeatedField` is expected

At runtime those two names are one class — the extension registers the `Internal\`
one as an alias with `zend_register_class_alias_ex()`. PHPStan picks that up only from
a `class_alias()` call it executes (`bootstrapFiles` or the autoloader), which a stubs
package cannot supply: the call needs the target class to exist at runtime, which is
exactly what is missing when the extension is absent. So `stubs/` declares the aliased
name as a subclass of the canonical one instead. That makes the assignment work in the
direction protoc actually produces — an `Internal\RepeatedField` from generated code,
passed where `RepeatedField` is expected — but not the reverse, which is what this
error is.

It only appears when the extension is not loaded; with it, PHPStan resolves the alias
by reflection and neither direction is an issue. Fixes, in order of preference:

1. Annotate the parameter with `Google\Protobuf\RepeatedField`, the name upstream has
   made canonical since protobuf 4.31.0.
2. Failing that, `// @phpstan-ignore argument.type` at the call site.

Psalm is unaffected: the aggregate stub carries a real `class_alias()`, which Psalm
resolves, so both directions type-check.

### PHPStan gives different results in CI jobs with and without `ext-protobuf`

PHPStan's result cache does not record which extensions were loaded, so a result
computed in a job that had `ext-protobuf` is reused verbatim in one that does not, and
vice versa. If you analyse both ways — a reasonable thing for a library to do — give
the two jobs separate `tmpDir`s, or don't share the cache directory between them.

Only the alias behaviour above actually differs between the two, so this is narrow;
it is also silent, which is why it is worth knowing.

### `new $class()` is reported as instantiating a protected constructor

`Google\Protobuf\Internal\Message::__construct()` really is `protected` in the C
extension, and generated message classes override it as `public`. Neither analyser can
prove that when the class is only known as `class-string<Message>` — the normal shape
of an RPC dispatcher — so both need suppressing at the call site:

```php
/** @psalm-suppress UnsafeInstantiation */
$message = new $class(); // @phpstan-ignore new.protectedConstructor
```
