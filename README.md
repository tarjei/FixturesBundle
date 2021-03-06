DavidBaduraFixturesBundle
=========================

[![Build Status](https://secure.travis-ci.org/DavidBadura/FixturesBundle.png)](http://travis-ci.org/DavidBadura/FixturesBundle)


Features
--------

* Resolve object dependency (also bidirectional references)
* Configurable default fixture converter (constructor, properties, set* and add* methods)
* Easy to create your own converter
* Extendable by events
* Fixture filtering by tags
* Object validation
* Fixturemanager as a service
* Fixture data validating and normalizing by symfony config component

Todos
-----

* XML Fixtures support
* Support MongoDB
* More tests
* Write documentations

Documentation
-------------

Read [documentation](https://github.com/DavidBadura/FixturesBundle/blob/master/Resources/doc/index.md)


1. Installation
---------------

Add DavidBaduraFixtureBundle in your composer.json

``` js

{
    "require": {
        "davidbadura/fixtures-bundle": "*"
    }
}

```

Add the DavidBaduraFixturesBundle to your application kernel:

``` php
// app/AppKernel.php
public function registerBundles()
{
    return array(
        // ...
        new DavidBadura\FixturesBundle\DavidBaduraFixturesBundle(),
        // ...
    );
}
```

2. Configuration
----------------

Configure DavidBaduraFixturesBundle:

``` yaml
# app/config/config.yml
david_badura_fixtures:
  bundles: [YourBundle]
```

3. Create fixtures
---------------

Now you must create your fixture data:

``` yaml
# @YourBundle/Resource/fixtures/install.yml
user:
    properties:
        class: "YourBundle\Entity\User"
    data:
        david:
            name: David
            email: "d.badura@gmx.de"
            groups: ["@group:admin"] # <- reference to group.admin

group:
    properties:
        class: "YourBundle\Entity\Group"
    data:
        admin:
            name: Admin
        member:
            name: Member
```
The fixture files will be automatically loaded from the `Resources\fixtures` folder.

4. Load fixtures
----------------

Command:

``` shell
php app/console davidbadura:fixtures:load
```

