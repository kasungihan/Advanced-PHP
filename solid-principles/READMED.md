# SOLID Principle

5 principle for modular, scalable, maintainable code created by Robert Martin(uncle bob)

1. Single Responsibility Principle(SRP)

Source code write for one job in single class, function or method but it can be divided to smaller peaces responsible each separate method.

In Laravel, we can refactor controller to different services.

**using a real-world example**

Each worker should have only one job. The plumber handles pipes, the electrician handles wiring, and the carpenter does the woodwork. If one person tries to do everything, it becomes messy. In coding, each class should have only one reason to change.

2. Open-Closed Principle(OCP)

Open for extension, Close for modification. We can get example Laravel package vender, we can not modify. which mean modify package without damage the package.

Isolate logic that changes behind an interface, and reference that interface in your class.
Write a way that allows new functionality without altering what's already been written.

**using a real-world example**

The house should allow new things to be added (like an extra room) without breaking the existing structure. In coding, your code should be open for adding new features but closed for modifying existing ones.

3. Liskov Substitution Principle(LSP) - ආදේශ කිරීම

class should be interchangeable two classes implement same interface that can be divided without braking code.

A class must be replaceable by its subclas without breaking the application. type hint interface

**using a real-world example**

If a door fits a regular doorway, any type of door (wooden, glass, metal) should work without problems. In coding, if a class (child) extends another class (parent), it should work without unexpected behavior.

4. Interface Segregation Principle (වෙන් කිරීම)

Clients should not be forced to depend upon interface that they don't use, if interface have too many method violate.

Clients should not be forced to depend upon interfaces that they do not use

in Laravel ex: Jsonable, Switchable, Serviceable, HTMLable

**using a real-world example**

A chef doesn’t need to know plumbing, and a plumber doesn’t need to know cooking. Instead of one giant instruction manual, everyone gets only the parts they need. In coding, don’t force classes to implement methods they don’t use—break large interfaces into smaller, more specific ones.

5. Dependency inversion principle (පෙරළීම)

not keep depend on high level(ex: ui) to low level(ex: db connection). which interface not depend on concert implementation insead of class on abstration.

**using a real-world example**

Instead of hiring individual workers directly, you hire a contractor who finds the best workers for each job. In coding, rely on abstractions (high-level rules) rather than specific classes, so you can easily switch or replace parts without breaking everything.

switchable - interface class
switch on - parent class
lightbulb / tv - child class
