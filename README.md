Embedly Bundle
==============

[![Build Status](https://img.shields.io/travis/EmanueleMinotto/EmbedlyBundle.svg?style=flat)](https://travis-ci.org/EmanueleMinotto/EmbedlyBundle)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/adccb1cb-2295-41c3-b3d9-c4d6073df6ef.svg?style=flat)](https://insight.sensiolabs.com/projects/adccb1cb-2295-41c3-b3d9-c4d6073df6ef)
[![Coverage Status](https://img.shields.io/coveralls/EmanueleMinotto/EmbedlyBundle.svg?style=flat)](https://coveralls.io/r/EmanueleMinotto/EmbedlyBundle)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/EmanueleMinotto/EmbedlyBundle.svg?style=flat)](https://scrutinizer-ci.com/g/EmanueleMinotto/EmbedlyBundle/)
[![Total Downloads](https://img.shields.io/packagist/dt/emanueleminotto/embedly-bundle.svg?style=flat)](https://packagist.org/packages/emanueleminotto/embedly-bundle)

Bundle for Symfony 2 providing the [embed.ly](http://embed.ly) library.

API: [emanueleminotto.github.io/EmbedlyBundle](http://emanueleminotto.github.io/EmbedlyBundle/)

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
        );
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
