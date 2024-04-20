<?php

//use App\Charact\Dog;

include 'App/Charact/Dog.php';

class App
{
    public static function init()
    {
        $animal1 = new Dog();
        return $animal1->eat();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    //include 'includes/autoloader.inc.php';

    //include 'includes/person.inc.php';

    /* $pet = new Pet;
    echo $pet->owner(); */

    //$person1 = new Person\Person('fsfs');// set name like set path of person folder

    //$person1->setFirstName('Kasun');

    //echo $person1->getFirstName();

    //call static property 
    //echo Person::$drinkingAge;

    // static method are use to don't part of instance or object but it should be a class for understading perpose
    //echo Person::setDrinkingAge(16);

    //echo Person::$drinkingAge;

    //echo Person::getDrinkingAge();

    //abstract class testing
    //include 'Paypal.php';
    //include 'Card.php';
    //$cat = new Paypal("master");
    //echo $cat->pay('1.10');

    //$patment = new Card("visa");
    //echo $patment->pay('7.74');

    //abstract class testing
    //include 'Cat.php';

    //$animal = new Cat();
    //echo $animal->eat();


    echo App::init();
    ?>

</body>

</html>