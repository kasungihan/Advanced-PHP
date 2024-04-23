# SOLID Principle

5 principle for modular, scalable, maintainable code created by Robert Martin(uncle bob)

1. Single Responsibility(SRP)

Source code write for one job in single function or method but it can be divided to smaller peaces resposible each separate method.

in laravel we can refactor controller to different services.

2. Open-Closed Principle

Close for modification open for extention we can get example laravel package vender we can not modify. which mean modify package without damage the package.

Isolate logic that changes behind an interface, and reference that interface in your class.
Write a way that allows new functionality without altering what's already been written.

3. Liskov Substituation Principle (ආදේශ කිරීම)

class should be interchangeable two classes implement same interface that can be divided without braking code.

A class must be replaceable by its subclas without breaking the application. type hint interface

4. Interface Segregation Principle (වෙන් කිරීම)

Clients should not be forced to depend upon interface that they don't use, if interface have too many method violate.

Clients should not be forced to depend upon interfaces that they do not use

in Laravel ex: Jsonable, Switchable, Serviceable, HTMLable

5. Dependency inversion principle (පෙරළීම)

not keep depend on high level(ex: ui) to low level(ex: db connection). which interface not depend on concert implementation insead of class on abstration.

switchable - interface class
switch on - parent class
lightbulb / tv - child class
