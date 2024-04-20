<?php


class NewClass 
{
    // Properties and Methods gose here

    public $info = "I am a property";


    public function __construct()
    {
        echo "Thiis Class has been instantiated <br>";
    }

    public function setNewProperty($newdata)
    {
       $this->data = $newdata; 
    }

    public function getProperty()
    {
        return $this->data;
    }


    public function __destruct()
    {
        echo "<br> This is the end of the class!";
    }



}

// intentioned(චේතනාවෙන්) class
$object = new NewClass;
unset($object);
echo $object->getProperty();
//var_dump($object);