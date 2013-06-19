PhpDocFillBundle
=======

The PhpDocFillBundle help you to write your documentation for all your symfony2 projects.


## Install


Declare the bundle in your AppKernel.php:

    public function registerBundles() {
        $bundles = array(
            [...]
            new AppVentus\PhpDocFillBundle\AvPhpDocFillBundle(),
            [...]

Then declare the routing.yml in your application:


    # PhpDocFillBundle Routing
    av_php_doc_fill_bundle_routes:
        resource: "@AvPhpDocFillBundle/Resources/config/routing.yml"
        prefix:   /


Then add the php templating engine support in your framework configuration :

    framework:
        templating:
            engines: ['twig', 'php']
        ...

You now have a new action available in the symfony2 debug bar.

Enjoy !

## Credits

This bundle is based on existing library created by [Clement Nedelcu](http://cnedelcu.net/phpdocfill/).
Thanks him for his work.
