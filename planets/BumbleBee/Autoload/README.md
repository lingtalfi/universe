Butineur Autoloader
=========================
2015-10-05



This is a simple [BSR-0] (https://github.com/lingtalfi/universe/blob/master/planets/BumbleBee/Autoload/convention.bsr0.eng.md)
autoloader for any php project.


How to use?
----------------


First, assuming that there is yet no autoloader in your application, 
we have to manually include the classes files for the Butineur autoloader.<br>
This should be done once at the beginning of your application's life (in a file like init.php for instance)


```php
// a good place for those lines would be the init script of your application
require_once __DIR__ . '/classes/BeeAutoloader.php';
require_once __DIR__ . '/classes/ButineurAutoloader.php';
```


Next, we need to tell where our classes will reside


```php
ButineurAutoLoader::getInst()
    ->addLocation(__DIR__ . "/modules")
    // ->addLocation(__DIR__ . "/myclasses") // we could use multiple directories if needed 
    ->start();
```

That's it!
Now you can use any classes that you want in your application.
For a concrete example, please look in the [BSR-0 convention file] (https://github.com/lingtalfi/universe/blob/master/planets/BumbleBee/Autoload/convention.bsr0.eng.md).
