Embedly Bundle [![Build Status](https://travis-ci.org/EmanueleMinotto/EmbedlyBundle.svg)](https://travis-ci.org/EmanueleMinotto/EmbedlyBundle)
============

Bundle for Symfony 2 providing the [embed.ly](http://embed.ly) library.

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require emanueleminotto/embedly-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding the following line in the `app/AppKernel.php`
file of your project:

```php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new EmanueleMinotto\EmbedlyBundle\EmbedlyBundle(),
        }
    }
}
```

Usage
-----

No more requirements, you can start using the `embedly` service and the [Twig extensions](https://github.com/EmanueleMinotto/Embedly#twig-extension).

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

    Resources/meta/LICENSE
