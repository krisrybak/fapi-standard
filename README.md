Fapi Standard Edition
=============

Welcome to the Fapi Standard Edition - a fully-functional Fapi
application that you can use as the skeleton for your new applications.

This document contains information on how to download, install, and start
using Fapi.

When it comes to installing the Fapi Standard Edition, you have the
following options.

### Use Composer (*recommended*)

As Fapi uses Composer to manage its dependencies, the recommended way
to create a new project is to use it.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to generate a new Fapi application:

    php composer.phar create-project rybakdigital/fapi-standard-edition path/to/install

Composer will install Fapi and all its dependencies under the
`path/to/install` directory.
