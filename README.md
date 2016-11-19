Universe
================
2015-10-03 -- 2016-11-19


library of php classes.



The metaphor
-----------------

In the universe, new planets are created, some other are destroyed, and sometimes we have weird things like black holes.

There can be multiple universes, and altogether they form what I call the multiverse, which is the biggest thing ever.

Each universe has its own form and evolves at its own pace.


Okay, now let's dive in.


A universe is just a set of php classes owned by one developer.

How the set is organized is purely a matter of taste.

A planet is a php class.

And so, this repo is basically my universe (or one of my universe should I say).

I put it here with the intention of accessing it from anywhere (assuming an internet connection, that is).


What is for you?
--------------------

If you stumble upon this repo, hooray, you can use it too.

I'll confess that what follows is not for me, because I know how my universe work and I don't need no documentation, but rather for an imaginary you.


So here is my tutorial for you, I'll assume that you know php and the [autoloading](http://php.net/manual/en/language.oop5.autoload.php) system, and that you know [composer](https://getcomposer.org/) and [PSR-0](http://www.php-fig.org/psr/psr-0/).


Tutorial
------------

To install the universe, clone this repo where you want.

```bash
git clone <theUniverseUrl>
```

I generally have only one repo per machine, but it's also possible to import it on a per application basis.


When the cloning is over, you'll end up with a planets directory, and a bigbang.php file.


```txt
- bigbang.php
- planets/
```

Include the bigbang.php script and you're done, basically (i.e. you can use any planet).

The bigbang.php script and the planets dir should be one next to each other.

If you decide to do otherwise, then you should edit the bigbang.php file.


Now, there are a few more important things.


Every planet uses the [BSR-0](https://github.com/lingtalfi/BumbleBee/blob/master/Autoload/convention.bsr0.eng.md) naming convention, which is a simpler verson of PSR-0 (i.e. no special treatment on the old underscore cased classes).


From there, you are free to go where you want (if you want to create your own planets).


Bigbang
-----------

The bigbang is the entry point of an universe.

You should totally read the ligthweight source code of the universe.

Basically, you get two bonus functions for free:

- a: an alias for a better version of var_dump
- az: same as a, but followed by an exit statement


Those are incredibly useful, believe me.

I mean, the only constant in development is that you will encounter bugs,
almost every time, like steps in a stair.

So debugging is important, and typing var_dump is just a pain in the butt compared to typing just a.

But that's just the bonus part of the bigbang.php script.

The main purpose of the bigbang.php script is to autoload the php classes.

By default, it loads the classes in the planets directory.

But you can add any number of directories.

For instance, if in a typical web application, I always have a "class" directory where I put all my app specific classes.

Then in my init, I will do this:


```php
$__butineurStart = false; 
require_once "bigbang.php";  
ButineurAutoloader::getInst()
->addLocation(__DIR__ . "/class")
// ->addLocation(__DIR__ . "/another_class_dir") // you could add other directories if needed...
->start();
```


Don't be scared, it's not complicated.

The **$__butineurStart** variable tells the bigbang.php script that we want to load some classes manually.

Then we call the bigbang script. 

I like to put it in my php.ini (include_path directive), so that I can just call the bigbang from anywhere on the machine without worrying of the actual path (it's more portable).


Then we use the ButineurAutoloader class to register the directories where the autoload mechanism should look inside of.

The last thing we do is call the "start" method, which actually launches the php autoloading mechanism (via spl_autoload_register).



So hopefully you will find that the bigbang.php script is ridiculously simple, and understand that loading a class is not the problem anymore.


Now, the important thing is: what will be your universe? 








Related
-----------------

- https://github.com/karayabin/universe-snapshot: universes snapshots

Note: this current repo and the **universe-snapshot** repo do basically the same things, but
it's more convenient for me to upload to this current repo, so it will be updated more often.









