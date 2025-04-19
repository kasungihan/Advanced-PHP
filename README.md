# Learn PHP Advance Concept

This course will cover the advance php concept gain my knowledge to improve skill

## Course Content

- [Design Pattern](php-design-patterns/README.md)
- [Data Structure & Algorithm](data-structure-algorithm//README.md)
- [Solid Principles](solid-principles/READMED.md)
- [TDD](php-test-driven-development/README.md)
- [Best Practices](best-practices/README.php)

# Architecture

- MVC Model

# OOP concepts

## class and object

object have properties but each object will have different values for the properties.
ex:

Cat

- color
- age
- name

- jump()
- eat()
- climb()

Note: In a class, variables are called properties and functions are called methods!

keyword must use

- this
- instanceof
- final - you can not extends class or method
- const
- self
- abstract
- interface
- implements
- trait
- use
- static
- parent
- namespace
- enum - similar like constants but use as a class

## constructor

- \_\_constructor() allow you to initialize an object
- \_\_destruct() - alow you to end an object execute

## Access Modifiers

- public - the property or method can be accessed from everywhere. This is default
- protected - the property or method can be accessed within the class and by classes derived from that class
- private - the property or method can ONLY be accessed within the class

## Inheritance

protected properties work on derived class(inheritance) class not out side

inherited method can be override

## Constants

scope resolution operator (::)
recommend uppercase letter

## Abstract Classes

you abstract keyword alway use payment method or type factory design used

## Interfaces

can not make a properties only method

When one or more classes use the same interface, it is referred to as "polymorphism".

a class must use the implement to implements keyword

## Traits

single inheritance only specified in one single class

if class getting bigger can be use traits set as a multiple inherit traits readability to more help solve this problem

## Static Methods

class declared as method and properties it use with **scope resolution operator**(::)

## Namespaces

Namespaces are qualifiers

1. They allow for better organization by grouping classes that work together to perform a task
2. They allow the same name to be used for more than one class

## Iterable

# Best Practices

## bottleneck of the project

1. full meaningful class name
2. method argument fetch($billingId) => fetchByBillingId($id)

pre-increment ++i | post-increment i++

## How to optimize

1. measure
2. try something
   1. data structures
   2. profilers
   3. think about under the hood
   4. think about memory
3. measure again

you should not nest your code - never nester
methods to use de-nest

1. extraction
2. inversion

## Coding Rule

- no abbreviations code - ex: paymenthod(-) == paymentMethod(+) don't ever use $x and $y variable universal short name id fine like ID
  - bottleneck of the project
    1. full meaningful class name
    2. method argument fetch($billingId) => fetchByBillingId($id)
- don't use else - if you use return keyword, validation first then logic factory method can be used
- one level of indentation - single responsibility that can remove comment and can given a readable method

```php
<?php

function filterBy($type)
{
	$data = [];
	if(is_null($type) && $type == 'completed') // instead of this ofType($type)
	{
		return $data;
	}
}

function ofType($type)
{
	return is_null($type) && $type == 'completed'
}
```

- limit your instance variables
  way to many instant of one class at least keep 5 instance on class
  single responsibilities

```php
<?php

class UserController
{
   protected $userService;

   protected $userRegistration; //move to different controller

   protected $userRepository;

   protected $userEvent;

   protected $logger;

   public function __constructor(UserService $userService)
   {

   }

}

class AuthController
{

   protected $userRegistration

   public function __constructor(UserRegistration $userRegistration)
   {

   }

}
```

- wrap primitive sometimes - type hint

```php
<?php

class Second {

   protected $seconds;

   public function __constructor($seconds)
   {
   	$this->seconds = $seconds;
   }
}

function cache($data, Second $seconds)
{

}
cache([], 60)// cache([], new Second(60))some people declare

```

Keep in mind

1. Does it bring clarity
2. it their behavior
3. consistency
4. Important domain concept

# TestCase

---

install phpunit
`sudo apt-get install phpunit`

install sqllite
`sudo apt-get install php-sqlite3`

run test
`./vendor/bin/phpunit`
`./vendor/bin/phpunit --filter test_make_ssl_apache_file`

# SOLID Principle

[Principle](./solid-principles/READMED.md)

# Composer

---

dependency management of php
own autoloader
package version manage
package discovery
composer.lock install the dependency find out official project

Some packages are stand-alone

- services
- helpers
- api sdk

# Package Development

Reasons for developing a package

- reusability
- expandability - can be able to customize
- ease of interaction
- completed disconnect with main project

1. `composer init`
2. `composer require --dev "orchestra/testbench=^6.0"` // https://www.laravelpackage.com/02-development-environment/#orchestra-testbench

https://www.php-fig.org/psr/psr-7/

https://xdebug.org/docs/install

## TDD

Write automated tests before writing the actual code, ensuring that the code meets requirements and is robust.
