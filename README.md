Fabric Pattern
==============

Slim PHP wrapper for Daniel Miessler's [fabric](https://github.com/danielmiessler/fabric) pattern library.

Installation
------------

Use [Composer](https://getcomposer.org) to install the package:

```bash
composer require php-llm/fabric-pattern
```

On top to the PHP wrapper library this also downloads the Python repository into `vendor/danielmiessler/fabric`.

Usage
-----

```php
use PhpLlm\FabricPattern\Pattern;

// Return markdown of pattern's system prompt
$pattern = (new Pattern)->load('extract_wisdom');
```

You can find the list of available patterns [directly in fabric's repository](https://github.com/danielmiessler/fabric/tree/main/patterns).
