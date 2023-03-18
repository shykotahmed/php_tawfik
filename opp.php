<?php

//OOP - (Object Oriented programming) - PHP

/*=================================================================================================
-------------------01 - What is OOP ?=--------------------------> 
===================================================================================================*/




/*=================================================================================================
-------------------=02 - Class, Objects, Methods, Properties & $this keyword--------------------------> 
===================================================================================================*/

/* Class, Objects, Methods, Properties & $this keyword
 * Note: In a class, variables are called properties and functions are called methods!
Define a Class:
A class is defined by using the "class" keyword, followed by the name of the class and a pair of curly braces ("{}"). All its properties and methods go inside the braces:
Define Objects:
Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.
Objects of a class are created using the "new" keyword.
The "$this" Keyword:
The "$this" keyword refers to the current object, and is only available inside methods.
 *
 * https://www.php.net/manual/en/language.oop5.basic.php
 * https://www.javatpoint.com/php-oops-concepts
 * https://www.w3schools.com/php/php_oop_what_is.asp
 */

//Define a Class:
class Student {
    //property
    public $name;

    //method
    public function get_name() {
        return $this->name;
    }

    public function set_name( $name ) {
        return $this->name = $name;
    }
}

//Define Objects:
//01:
$tufik = new Student(); //Create an object of Student class

$tufik->name = "Tufik"; //you can set public property outside class
echo $tufik->name . PHP_EOL;

$tufik->name = "Tufik Hasan"; //you can update public property outside class
echo $tufik->name . PHP_EOL;

//02:
$rakib = new Student(); //Create an object of Student class

$rakib->set_name( 'Rakib' ); //set property using method
echo $rakib->get_name() . PHP_EOL;

$rakib->set_name( 'Rakib Update' ); //Update property using method
echo $rakib->get_name() . PHP_EOL;

//"$this" Keyword example:
class Cat {
    //property
    public $name;

    //method
    function set_name( $name ) {
        return $this->name = $name;
    }
    //method
    public function say() {
        echo "& say Meow";
    }
    //method
    public function myName() {
        echo "Cat name is {$this->name} ";
        $this->say();
    }
}

//Create Object Cat class
$tom = new Cat();
//set cat name
$tom->set_name( "Tom" );
//method call
$tom->myName();


/*=================================================================================================
-------------------=03 - __construct Function--------------------------> 
===================================================================================================*/

/* __construct Function
"__construct()" is a special method in PHP that is used to define constructors for classes. A constructor is a special method that is automatically called when an object is created from a class. It is used to initialize the object's properties and perform any other setup tasks that are required.
 *
 * https://www.w3schools.com/php/php_oop_constructor.asp
 * https://www.php.net/manual/en/language.oop5.decon.php
 * https://www.javatpoint.com/php-oops-constructor
 */

//01:
//constructor is automatically called when an object is created
class Person {
    public function __construct() {
        echo "I am a construct\n";
    }
}
$tufik = new Person();
$rakib = new Person();

//02:
class Human {
    public function __construct( $name ) {
        echo "My name is $name\n";
    }
}

$rony = new Human( "Rony" );

//03:
class Fruits {
    public $name;
    public $color;
    public function __construct( $fruitsName, $fruitsColor ) {
        $this->name = $fruitsName;
        $this->color = $fruitsColor;
    }
    public function info() {
        echo "{$this->name} color is {$this->color}\n";
    }
}

$mango = new Fruits( "Mango", "green" );
$mango->info();

$apple = new Fruits( "Apple", "red" );
$apple->info();



/*=================================================================================================
-------------------04 - __destruct() Function=--------------------------> 
===================================================================================================*/

/* __destruct() Function
"__destruct()" is a magic method in PHP that is automatically called when an object is destroyed, either by the end of the script or by using the unset() function on the object. This method can be used to perform any necessary cleanup tasks, such as releasing resources, closing database connections, or saving data to a file.
The "__destruct()" method is useful when working with objects that hold resources that need to be released when the object is no longer needed, such as files, network connections, and database connections. By implementing the "__destruct()" method, you can ensure that these resources are properly cleaned up, even if the script is terminated unexpectedly.
 *
 * https://www.w3schools.com/php/php_oop_destructor.asp
 * https://www.javatpoint.com/php-oops-destructor
 * https://www.php.net/manual/en/language.oop5.decon.php
 */

//01:
class MyClass {
    public function __destruct() {
        // perform cleanup tasks here
    }
}

//02:
// class Fruit {
//     public $name;
//     public $color;
//     function __construct( $name ) {
//         $this->name = $name;
//     }
//     function __destruct() {
//         echo "The fruit is {$this->name}.";
//     }
// }

// $apple = new Fruit( "Apple" );

//03:
class Demo {
    public function demo() {
        echo "constructor1...\n";
    }
    public function __destruct() {
        echo "destroy1.....\n";
    }
}
class Demo1 extends Demo {
    public function __construct() {
        echo parent::demo();
        echo "constructor2...\n";
    }
    public function __destruct() {
        echo "destroy2.....\n";
    }
}
$obj = new Demo1();


/*=================================================================================================
-------------------05 - Access Modifiers - Public, Private, Protected=--------------------------> 
===================================================================================================*/
/* OOP - Access Modifiers - Public, Private, Protected
Access modifiers in PHP are keywords that are used to define the accessibility of class properties and methods from outside the class. PHP has three access modifiers: public, protected, and private.
-> public: When a property or method is defined as public, it can be accessed from anywhere, both inside and outside of the class.
-> private: When a property or method is defined as private, it can be accessed only within the class itself. It cannot be accessed by any subclasses or from outside the class.
-> protected: When a property or method is defined as protected, it can be accessed only within the class itself and any subclasses that extend the class.
 *
 * https://www.w3schools.com/php/php_oop_access_modifiers.asp
 * https://www.javatpoint.com/php-oops-access-specifiers
 * https://www.php.net/manual/en/language.oop5.visibility.php
 */


 echo "\n\n------------ Public Modifier Example ---------\n";
 class Fruit
 {
     public $publicName;
     public function publicMethod()
     {
         echo "{$this->publicName}";
     }
 }
 
 $apple = new Fruit();
 $apple->publicName = "Apple"; //ok
 $apple->publicMethod(); //ok
 echo "\n";
 echo $apple->publicName; //ok
 echo "\n";
 
 
 
 
 echo "\n\n------------ Private Modifier Example ---------\n";
 class Person
 {
     private $privateName;
     private function privateMethod()
     {
         echo "My name is {$this->privateName}, I am from private modifier\n";
     }
     public function publicMethod()
     {
         //private property can be accessed only within the class itself
         $this->privateName = "Tufik Hasan";
         //private method can be accessed only within the class itself
         $this->privateMethod();
     }
 }
 
 $tufik = new Person();
 // $tufik->privateName = "Tufik"; //ERROR: Cannot access private property
 // echo $tufik->privateName; //ERROR: Cannot access private property
 // $tufik->privateMethod();   //ERROR: Call to private method
 $tufik->publicMethod(); //ok
 
 
 
 
 echo "\n\n------------ Protected Modifier Example ---------\n";
 class Human
 {
     protected $protectedName;
     protected function protectedMethod()
     {
         echo "My name is {$this->protectedName}, I am from protected modifier\n";
     }
     public function publicMethod()
     {
         //protected property can be accessed only within the class itself and any subclasses that extend the class
         $this->protectedName = "Tufik Hasan";
         //protected method can be can be accessed only within the class itself and any subclasses that extend the class
         $this->protectedMethod();
     }
 }
 echo "\n01:\n";
 $rakib = new Human();
 // $rakib->protectedName = "Tufik"; //ERROR: Cannot access protected property Human
 // echo $rakib->protectedName; //ERROR: Cannot access protected property Human
 // $rakib->protectedMethod(); //ERROR: Call to protected method
 $rakib->publicMethod(); //ok
 // echo "\n";
 
 //subclass access protected [properties or methods]
 echo "\n02: subClass:\n";
 class NewHuman extends Human
 {
     public function subMethod()
     {
         echo "I am subClass of Human\n";
         $this->protectedName = "Towfik - Name updated";
         $this->protectedMethod();
     }
 }
 $subPer = new NewHuman();
 $subPer->subMethod();



/*=================================================================================================
-------------------=06 - Hex to RGB & RGBA - Color converter--------------------------> 
===================================================================================================*/

/* Hex to RGB & RGBA - Color converter */
class ColorConverter {
    private $color, $red, $green, $blue;
    public function __construct( $colorCode = "" ) {
        $this->color = ltrim( $colorCode, "#" );
        $this->parsingColor();
    }
    public function get_color() {
        return $this->color;
    }
    public function set_color( $colorCode ) {
        $this->color = ltrim( $colorCode, "#" );
    }
    protected function parsingColor() {
        if ( $this->color ) {
            list( $this->red, $this->green, $this->blue ) = sscanf( $this->color, "%02x%02x%02x" );
        } else {
            list( $this->red, $this->green, $this->blue ) = [0, 0, 0];
        }
    }
    public function rgb() {
        return "rgb({$this->red}, {$this->green}, {$this->blue})";
    }
    public function rgba() {
        return "rgb({$this->red}, {$this->green}, {$this->blue},1)";
    }
    public function getRedColor() {
        return $this->red;
    }
    public function getGreenColor() {
        return $this->green;
    }
    public function getBlueColor() {
        return $this->blue;
    }
}

$rgba = new ColorConverter( "#ff00ff" );

echo "red = {$rgba->getRedColor()}";
echo "\n";
echo "red = {$rgba->getGreenColor()}";
echo "\n";
echo "red = {$rgba->getBlueColor()}";
echo "\n";
echo $rgba->rgb();
echo "\n";
echo $rgba->rgba();


/*=================================================================================================
-------------------=07 - Inheritance - extends class (part-01)--------------------------> 
===================================================================================================*/




/*=================================================================================================
-------------------=--------------------------> 
===================================================================================================*/




/*=================================================================================================
-------------------08 - Inheritance - Examples rectangle,triangle (part-02)=--------------------------> 
===================================================================================================*/





/*=================================================================================================
-------------------=09 - Abstract Classes and Abstract Methods--------------------------> 
===================================================================================================*/

/* Abstract Classes and Abstract Methods
 *
"abstract" classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
An "abstract"" class is a class that contains at least one "abstract"" method. An "abstract"" method is a method that is declared, but not implemented in the code.
An "abstract"" class or method is defined with the "abstract"" keyword.
When inheriting from an "abstract" class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the "abstract" method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.
So, when a child class is inherited from an "abstract" class, we have the following rules:
-> The child class method must be defined with the same name and it redeclares the parent "abstract" method
-> The child class method must be defined with the same or a less restricted access modifier
-> The number of required arguments must be the same. However, the child class may have optional arguments in addition
 *
 * https://www.w3schools.com/php/php_oop_classes_abstract.asp
 * https://www.php.net/manual/en/language.oop5.abstract.php
 * https://www.geeksforgeeks.org/abstract-classes-in-php/
 * https://www.javatpoint.com/php-oops-abstract-class
 *
 */

// // ------------------------------------- 01: ------------------------------------
// //"abstract" class is a class that contains at least one "abstract" method.
// abstract class Peoples {
//     public function say() {
//         echo "Hi\n";
//     }
//     abstract function walk(); //you can't declare abstract method in parent class
// }

// class Person extends Peoples {
//     function walk() { //This function it's need. If you don't declare this function return a fatal error
//         echo "Walking\n";
//     }
// }

// //abstract class is a class that cannot be instantiated, meaning you cannot create an object of that class directly. Instead, it serves as a blueprint for other classes to extend from.
// // $obj = new Peoples();
// $obj = new Person();
// $obj->say();
// $obj->walk();

// // ----------------------------------- 02: -----------------------------------------
// abstract class Peoples {
//     abstract function walk($a); //if parent class abstract method has argument. child method need a argument
// }

// class Person extends Peoples {
//     function walk($x) { // ok
//         echo "Walking\n";
//     }
// }
// class Person2 extends Peoples {
//     function walk() {  //return error
//         echo "Walking\n";
//     }
// }

// //------------------------------ 03: ----------------------------------
// abstract class Peoples {
//     public function say() {
//         echo "Hi\n";
//     }
//     abstract protected function walk();
// }

// class Person extends Peoples {
//     //if the "abstract" method is defined as protected, the child class method must be defined as either protected or public, but not private.
//     public function walk() { //ok
//         echo "Person Walking\n";
//     }
// }

// class Person2 extends Peoples {
//     //if the "abstract" method is defined as protected, the child class method must be defined as either protected or public, but not private.
//     protected function walk() {  //ok
//         echo "Person Walking\n";
//     }
// }

// class Person3 extends Peoples {
//     //if the "abstract" method is defined as protected, the child class method must be defined as either protected or public, but not private.
//     private function walk() {  //it returns error
//         echo "Person Walking\n";
//     }
// }

// //------------------------------ 04: ----------------------------------s
// abstract class Shape {
//     protected $name;
//     protected $area;
//     public function __construct( $name ) {
//         $this->name = $name;
//         $this->calculateArea();
//     }
//     abstract public function calculateArea();

//     public function getArea() {
//         echo "This {$this->name}'s area is {$this->area}\n";
//     }
// }

// class Rectangle extends Shape {
//     private $a, $b;
//     public function __construct( $a, $b ) {
//         $this->a = $a;
//         $this->b = $b;
//         parent::__construct( "Rectangle" );
//     }
//     public function calculateArea() {
//         $this->area = $this->a * $this->b;
//     }

// }

// //Rectangle area get
// $rectangle = new Rectangle( 3, 4 );
// $rectangle->getArea();

// class Triangle extends Shape {
//     public function __construct() {
//         parent::__construct( "Triangle" );
//     }
//     public function calculateArea() {

//     }

// }

// //Triangle area get
// $triangle = new Triangle();
// $triangle->getArea();


/*=================================================================================================
-------------------10 - final Keyword - PHP=--------------------------> 
===================================================================================================*/


/* final Keyword - PHP 
 *
Final keyword in PHP is used in different context. The "final" keyword is used only for methods and classes.
01-Class: When the "final" keyword is used before a class definition, it means that no other class can extend from that class. This is useful when you want to prevent others from modifying the behavior of your class.
02-Method: When the "final" keyword is used before a method definition, it means that no child class can override that method. This is useful when you want to ensure that a particular method in your class is not modified in the subclasses.
 * https://www.php.net/manual/en/language.oop5.final.php
 * https://www.geeksforgeeks.org/final-keyword-in-php/
 * https://www.w3schools.com/php/keyword_final.asp
 * https://www.javatpoint.com/php-oops-final-keyword
 *
 */
//-------- 01: final keyword is used before a class ------
// final class Bicycle {
//   // This class cannot be extended because it is marked as final.
// }

// class Bike extends Bicycle {
//   // This will result in a fatal error because Bicycle is marked as final and cannot be extended.
// }

//-------- 02: final keyword is used before a method ------
class Vehicle {
    final public function move() {
      echo "The vehicle is moving.";
    }
  }
  class Car extends Vehicle {
    // This will result in a fatal error because move() is marked as final in the parent class.
    public function move() {
      echo "The car is moving.";
    }
  }

// //-------- 03:
// abstract class Peoples {
//     final public function goto () {
//         echo "Goto market";
//     }
// }

// class Person extends Peoples{
//   //can't override final method
//   public function goto()
//   {
    
//   }
// }



/*=================================================================================================
-------------------=11 - write better code with OOP by forcing--------------------------> 
===================================================================================================*/

/* write better code with OOP by forcing */

// //-------- 01:
// class Shapes {
//     private $shapes;
//     public function __construct() {
//         $this->shapes = [];
//     }

//     public function addShape( $shape ) {
//         array_push( $this->shapes, $shape );
//     }
//     public function totalShapes() {
//         return count( $this->shapes );
//     }
// }
// class Triangle {

// }
// class Rectangle {

// }

// class Student {

// }

// $shapeCollection = new Shapes();
// $shapeCollection->addShape( new Triangle );
// $shapeCollection->addShape( new Rectangle );
// $shapeCollection->addShape( new Student );
// echo $shapeCollection->totalShapes();

//-------- 02:
class Shapes {
    private $shapes;
    public function __construct() {
        $this->shapes = [];
    }

    public function addShape( Shape $shape ) {
        array_push( $this->shapes, $shape );
    }
    public function totalShapes() {
        return count( $this->shapes );
    }
}
class Shape {

}
class Triangle extends Shape {

}
class Rectangle extends Shape {

}

class Student {

}

$shapeCollection = new Shapes();
$shapeCollection->addShape( new Triangle );
$shapeCollection->addShape( new Rectangle );
// $shapeCollection->addShape( new Student );  //return fatal error because this is not a shape
echo $shapeCollection->totalShapes();

/*=================================================================================================
-------------------=11 - OOP - Interfaces--------------------------> 
===================================================================================================*/

/* IteratorAggregate interface - practical example
 *
 * https://www.php.net/manual/en/class.iteratoraggregate.php
 *
 */

// //01:
// class Districts {
//     private $districts;
//     public function __construct() {
//         $this->districts = [];
//     }
//     public function addDistrict( $district ) {
//         array_push( $this->districts, $district );
//     }
//     public function getTotalDistrict() {
//         return $this->districts;
//     }
// }
// $allDistricts = new Districts;
// $allDistricts->addDistrict( "Bogura" );
// $allDistricts->addDistrict( "Dhaka" );
// $allDistricts->addDistrict( "Rajshahi" );

// print_r( $allDistricts->getTotalDistrict() );
// echo count( $allDistricts->getTotalDistrict() ) . PHP_EOL;

// $_districts = $allDistricts->getTotalDistrict();
// foreach ( $_districts as $district ) {
//     echo $district . ", ";
// }

//02:
class Districts implements IteratorAggregate {
    private $districts;
    public function __construct() {
        $this->districts = [];
    }
    public function addDistrict( $district ) {
        array_push( $this->districts, $district );
    }
    function getIterator(): Traversable {
        return new ArrayIterator( $this->districts );
    }
}
$allDistricts = new Districts;
$allDistricts->addDistrict( "Bogura" );
$allDistricts->addDistrict( "Dhaka" );
$allDistricts->addDistrict( "Rajshahi" );

foreach ( $allDistricts as $district ) {
    echo $district . ", ";
}


/*=================================================================================================
-------------------=-12 - IteratorAggregate interface - practical example-------------------------> 
===================================================================================================*/

/* IteratorAggregate interface - practical example
 *
 * https://www.php.net/manual/en/class.iteratoraggregate.php
 *
 */

// //01:
// class Districts {
//     private $districts;
//     public function __construct() {
//         $this->districts = [];
//     }
//     public function addDistrict( $district ) {
//         array_push( $this->districts, $district );
//     }
//     public function getTotalDistrict() {
//         return $this->districts;
//     }
// }
// $allDistricts = new Districts;
// $allDistricts->addDistrict( "Bogura" );
// $allDistricts->addDistrict( "Dhaka" );
// $allDistricts->addDistrict( "Rajshahi" );

// print_r( $allDistricts->getTotalDistrict() );
// echo count( $allDistricts->getTotalDistrict() ) . PHP_EOL;

// $_districts = $allDistricts->getTotalDistrict();
// foreach ( $_districts as $district ) {
//     echo $district . ", ";
// }

//02:
class Districts implements IteratorAggregate {
    private $districts;
    public function __construct() {
        $this->districts = [];
    }
    public function addDistrict( $district ) {
        array_push( $this->districts, $district );
    }
    function getIterator(): Traversable {
        return new ArrayIterator( $this->districts );
    }
}
$allDistricts = new Districts;
$allDistricts->addDistrict( "Bogura" );
$allDistricts->addDistrict( "Dhaka" );
$allDistricts->addDistrict( "Rajshahi" );

foreach ( $allDistricts as $district ) {
    echo $district . ", ";
}


/*=================================================================================================
-------------------=-13 - Countable interface-------------------------> 
===================================================================================================*/


/* Countable interface
 *
 * https://www.php.net/manual/en/class.countable.php
 * https://www.php.net/manual/en/class.iteratoraggregate.php
 *
 */

// //01:
class Districts implements Countable {
    private $districts;
    public function __construct() {
        $this->districts = [];
    }
    public function addDistrict( $district ) {
        array_push( $this->districts, $district );
    }
    function count(): int {
        return count( $this->districts );
    }
}
$allDistricts = new Districts;
$allDistricts->addDistrict( "Bogura" );
$allDistricts->addDistrict( "Dhaka" );
$allDistricts->addDistrict( "Rajshahi" );

echo count( $allDistricts );

// //02:
// class Districts implements IteratorAggregate, Countable {
//     private $districts;
//     public function __construct() {
//         $this->districts = [];
//     }
//     public function addDistrict( $district ) {
//         array_push( $this->districts, $district );
//     }
//     function getIterator(): Traversable {
//         return new ArrayIterator( $this->districts );
//     }
//     function count(): int {
//         return count( $this->districts );
//     }
// }
// $allDistricts = new Districts;
// $allDistricts->addDistrict( "Bogura" );
// $allDistricts->addDistrict( "Dhaka" );
// $allDistricts->addDistrict( "Rajshahi" );

// foreach ( $allDistricts as $district ) {
//     echo $district . ", ";
// }
// echo count( $allDistricts );


/*=================================================================================================
-------------------=-14 - Static Methods - Static Properties-------------------------> 
===================================================================================================*/

/* Static Methods - Static Properties
Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. These can also be accessed statically within an instantiated class object.
Static Methods & properties are declared with the static keyword:
To access a static method & property use the class name, double colon (::), and the method/property name:
A static method & property can be accessed from a method in the same class using the "self" keyword and double colon (::)
To call a static method & property from a child class, use the "parent" keyword inside the child class:
 *
 * https://www.w3schools.com/php/php_oop_static_methods.asp
 * https://www.w3schools.com/php/php_oop_static_properties.asp
 * https://www.geeksforgeeks.org/static-function-in-php/
 * https://www.php.net/manual/en/language.oop5.static.php
 *
 */

//------------------ Static Methods ------------------------
// //01:
class ClassName {
    public static function staticMethod() {
        echo "Hello World!\n";
    }
}
ClassName::staticMethod();

//02:
// class People {
//     public function __construct() {
//         $this->staticMethod(); //you call static method inside a class like this
//         self::staticMethod(); //you call static method inside a class use "self::" keyword
//     }
//     public static function staticMethod() {
//         echo "I am from static method\n";
//     }
// }
// new People();

// //03:
// class greeting {
//     public static function welcome() {
//         echo "Some other class\n";
//     }
// }

// class SomeOtherClass {
//     public function message() {
//         greeting::welcome();
//     }
// }
// $obj = new SomeOtherClass();
// $obj->message();

// //04: Inheritance class
// class Human {
//     public static function walk() {
//         echo "I am walking\n";
//     }
// }
// class Person extends Human {
//     public function __construct() {
//         $this->walk();
//         self::walk();
//         parent::walk();
//         Human::walk();
//     }
// }
// new Person();

//------------------ Static Properties ------------------------
//01:
class Animal {
    static $name = "Cat";
}
echo Animal::$name;

// //02:
// class Animal {
//     static $name = "Cat";
//     public function __construct() {
//         // echo $this->name; //Error: you can't access static property like this.
//         echo self::$name; //using "self" keyword to access static property
//     }
// }
// new Animal();
// echo "\n";
// echo Animal::$name;

// //03:
// class Animal {
//     static $name = "Cat";
// }
// class Cat {
//     public function __construct() {
//         echo Animal::$name;
//     }
// }
// new Cat();

// //04:
// class Animal {
//     static $name = "Cat\n";
// }
// class Cat extends Animal {
//     public function __construct() {
//         // echo $this->name; //Error: you can't access static property like this.
//         echo Animal::$name;
//         echo self::$name;
//         echo parent::$name;
//     }
// }
// $obj = new Cat();


/*=================================================================================================
-------------------=15 - Static Methods & Property overrides--------------------------> 
===================================================================================================*/

/* Static Methods & Property overrides */

//------------------ Static Method overrides ------------------------
//01:
class A {
    static function say() {
        echo "Hi from A\n";
    }
}
class B extends A {
    //can't overrides static method like this
    // function say(){
    //     echo "Hi from A\n";
    // }

    static function say() {
        echo "Hi from B\n";
        parent::say();
    }
}
B::say();

//------------------ Static Properties overrides ------------------------
//01
class Superclass {
    public static $myStaticProperty = "Hello, World!\n";
}

class Subclass extends Superclass {
    public static $myStaticProperty = "Goodbye, World!\n";
}

echo Superclass::$myStaticProperty; // Outputs "Hello, World!"
echo Subclass::$myStaticProperty; // Outputs "Goodbye, World!"

//02:
class X {
    static $name = "x";
}
class Y extends X {
    static $name = "y";
    public function __construct() {
        echo self::$name;
        echo "\n";
        echo parent::$name;
        echo "\n";
        echo parent::$name = "Z";
    }
}
new Y();


/*=================================================================================================
-------------------=-16 - Early and Late binding-------------------------> 
===================================================================================================*/

/* Early and Late binding
 *
 * https://www.php.net/manual/en/language.oop5.late-static-bindings.php
 * https://www.geeksforgeeks.org/what-is-late-static-bindings-in-php/
 *
 */

//--------------- Early Bindings ---------
class X {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class Y extends X {
    public static function who() {
        echo __CLASS__;
    }
}

Y::test();

echo "\n";

//--------------- Late Static Bindings ---------
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); // Here comes Late Static Bindings
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();


/*=================================================================================================
-------------------=--17 - Static Scope------------------------> 
===================================================================================================*/

/* Static Scope */

//01: public scope
class A {
    public static $name;
    static function say() {
        self::$name = "Hello\n";
    }
}
class B extends A {
    static function say() {
        echo parent::say();
        echo parent::$name;
        echo "Hi from B\n";
    }
}
echo A::$name;
echo B::say();
echo B::$name;

// //02: protected
// class A {
//     protected static $name;
//     static function say() {
//         self::$name = "Hello\n";
//     }
// }
// class B extends A {
//     static function say() {
//         echo parent::say();
//         echo parent::$name;
//         echo "Hi from B\n";
//     }
// }
// echo B::say();
// // echo A::$name; //error
// // echo B::$name; //error

// //03: private
// class A {
//     private static $name;
//     static function say() {
//         self::$name = "Hello\n";
//     }
// }
// class B extends A {
//     static function say() {
//         echo parent::say();
//         // echo parent::$name; //error
//         echo "Hi from B\n";
//     }
// }
// echo B::say();
// // echo B::$name; //error
// // echo A::$name; //error



/*=================================================================================================
-------------------=--18 - Class Constants - const keyword------------------------> 
===================================================================================================*/

/* Class Constants
In Object-Oriented Programming (OOP) in PHP, constants are defined using the "const" keyword inside a class. A constant is a value that cannot be changed during the execution of a program. It is similar to a variable, but once its value is set, it cannot be modified.
A class constant is declared inside a class with the "const" keyword.
Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters:
We can access a constant from (outside) the class by using the class name followed by the scope resolution operator (::) followed by the constant name:
we can access a constant from (inside) the class by using the "self" keyword followed by the scope resolution operator (::) followed by the constant name:
 *
 * https://www.w3schools.com/Php/php_oop_constants.asp
 * https://www.php.net/manual/en/language.oop5.constants.php
 *
 */

//------------------ Static Properties overrides ------------------------
//01:
class X {
    const CONSTANT = "Hello World!\n";
}
echo X::CONSTANT;

//02:
class A {
    const WEL = "Welcome\n";
    public function greeting() {
        echo self::WEL;
        echo $this::WEL;
    }
}
$obj = new A();
$obj->greeting();

//03:
class ParentClass {
    const PAR = "I am a constant\n";
}
class ChildClass extends ParentClass {
    public function __construct() {
        echo parent::PAR;
        echo self::PAR;
        echo $this::PAR;
    }
}
new ChildClass();


/*=================================================================================================
-------------------=---19 - Traits - OOP PHP-----------------------> 
===================================================================================================*/
/* Traits - OOP PHP
In PHP, a trait is a mechanism for code reuse in object-oriented programming. A trait is similar to a class in that it defines a set of methods, but it is not intended to be instantiated on its own. Instead, traits are designed to be included in classes using the use statement.\
 *
 * https://www.w3schools.com/php/php_oop_traits.asp
 * https://www.php.net/manual/en/language.oop5.traits.php
 * https://www.youtube.com/watch?v=Jkmj7LgMNHY
 *
 */

// //------------ example 01: --------------
// trait t1 {
//     public function fun1() {
//         echo "i am from t1:fun1\n";
//     }
// }
// class c1 {
//     use t1;
// }
// class c2 {
//     public function funC2() {
//         echo "I am from c2:funC2\n";
//     }
// }
// class c3 {
//     use t1;
// }

// ( new c1 )->fun1();
// // ( new c2 )->fun1();  // return error because fun1() undefined c2
// ( new c3 )->fun1();

// //---------- example 02: multiple trait use in one line ---------
// trait t1 {
//     public function fun1() {
//         echo "i am from t1:fun1\n";
//     }
// }
// trait t2 {
//     public function fun2() {
//         echo "i am from t2:fun2\n";
//     }
// }
// class c1 {
//     use t1, t2;
// }

// ( new c1 )->fun1();
// ( new c1 )->fun2();

// //---------- example 03: trait method override in a class ---------
// trait t1 {
//     public function fun1() {
//         echo "i am from t1:fun1\n";
//     }
// }
// class c1 {
//     use t1;
//     public function fun1() {
//         echo "i am override function from c1:fun1\n";
//     }

// }
// ( new c1 )->fun1();

// //---------- example 04: if 2 trait have ame method with the same name return error ---------
// //If two traits in PHP have the same method with the same name and signature, it will result in a fatal error because PHP does not allow multiple trait methods with the same name.
// trait t1 {
//     public function fun1() {
//         echo "i am from t1:fun1\n";
//     }
// }
// trait t2 {
//     public function fun1() {
//         echo "i am from t2:fun1\n";
//     }
// }
// class c1 {
//     use t1, t2;
// }
// ( new c1 )->fun1();

//---------- example 04: if 2 trait have ame method with the same name return error ---------
//To resolve this error, you can use the insteadof keyword to specify which trait method should be used when there are naming conflicts.
trait t1 {
    public function fun1() {
        echo "i am from t1:fun1\n";
    }
}
trait t2 {
    public function fun1() {
        echo "i am from t2:fun1\n";
    }
}
class c1 {
    use t1, t2 {
        t1::fun1 insteadof t2; // insteadof keyword to specify which trait method should be used
        t2::fun1 as fun2; //alias of fun1 as fun2
    }
}

( new c1 )->fun1();
( new c1 )->fun2();




/*=================================================================================================
-------------------=20 - __set() & __get() - PHP Magic Methods--------------------------> 
===================================================================================================*/

/*  __set() & __get() - PHP Magic Methods
In PHP, "__get()" and "__set()" are magic methods that allow you to define custom behavior when getting or setting object properties that are inaccessible or do not exist.
"__get($property)" method is called when an undefined or inaccessible property is accessed using the object instance, or when a property is accessed with protected or private visibility. It accepts a single parameter, "$property", which is the name of the property being accessed, and should return the value of the property.
"__set($property", $value) method is called when an undefined or inaccessible property is set using the object instance, or when a property is set with protected or private visibility. It accepts two parameters, "$property", which is the name of the property being set, and "$value", which is the value to be assigned to the property.
 *
 * https://www.php.net/manual/en/language.oop5.overloading.php#object.set
 * https://www.php.net/manual/en/language.oop5.magic.php
 * https://www.geeksforgeeks.org/what-are-magic-methods-and-how-to-use-them-in-php/
 *
 */

// //Manually getter setter
// class Student {
//     private $name;
//     private $age;
//     public function __construct( $name, $age ) {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     public function getName() {
//         return $this->name;
//     }
//     public function setName( $name ) {
//         $this->name = $name;
//     }
//     public function getAge() {
//         return $this->age;
//     }
//     public function setAge( $age ) {
//         $this->name = $age;
//     }
// }

// $rakib = new Student( "Rakib", 25 );
// echo $rakib->getName() . PHP_EOL;
// $rakib->setName( "Rakib Update" );
// echo $rakib->getName();

//********** Magic method __set() & __get() **********
class Student {
    private $name;
    private $age;
    public function __construct( $name = "", $age = "" ) {
        $this->name = $name;
        $this->age = $age;
    }
    public function __get( $property ) {
        return $this->$property;
    }
    public function __set( $property, $value ) {
        $this->$property = $value;
    }
}

$rakib = new Student( "Rakib", 25 );
echo $rakib->name . PHP_EOL;
$rakib->name = "Tufik";
echo $rakib->name;


/*=================================================================================================
-------------------=21 - Object Cloning __clone() - Magic Methods--------------------------> 
===================================================================================================*/

/*  Object Cloning "__clone()" - Magic Methods
If any of the properties was a reference to another variable or object, then only the reference is copied. Objects are always passed by reference, so if the original object has another object in its properties, the copy will point to the same object. This behavior can be changed by creating a "__clone()" method in the class.
The "clone" keyword is used to create a copy of an object.
 *
 * https://www.php.net/manual/en/language.oop5.cloning.php
 * https://www.w3schools.com/php/keyword_clone.asp
 *
 */

// --------------- Shallow Copy / Copy by Reference ---------------
// //01:
// class Fruits {
//     public $data;
//     public function __construct( $data ) {
//         $this->data = $data;
//     }
//     public function setFruit( $data ) {
//         $this->data = $data;
//     }
// }
// $o1 = new Fruits( "Mango" );
// print_r( $o1 );

// $o2 = clone $o1;
// print_r( $o1 );
// print_r( $o2 );

// $o2->setFruit( "Apple" );
// print_r( $o2 );

// //02:
// class Color {
//     public $color;
//     public function __construct( $color ) {
//         $this->color = $color;
//     }
//     public function setColor( $color ) {
//         $this->color = $color;
//     }
// }
// class FavColor {
//     public $color;
//     public function __construct( $color ) {
//         $this->color = new Color( $color );
//     }
//     public function updateColor( $color ) {
//         $this->color->setColor( $color );
//     }
// }

// $obj1 = new FavColor( "red" );
// print_r( $obj1 );

// $obj2 = clone $obj1;
// print_r( $obj2 );

// $obj2->updateColor( "Green" );
// print_r( $obj1 );
// print_r( $obj2 );

// //----------------     Deep Copy / Copy by value [using __clone() magic method] --------------
class Color {
    public $color;
    public function __construct( $color ) {
        $this->color = $color;
    }
    public function setColor( $color ) {
        $this->color = $color;
    }
}
class FavColor {
    public $color;
    public function __construct( $color ) {
        $this->color = new Color( $color );
    }
    public function updateColor( $color ) {
        $this->color->setColor( $color );
    }

    public function __clone() {
        $this->color = clone $this->color;
    }
}

$obj1 = new FavColor( "red" );
print_r( $obj1 );

$obj2 = clone $obj1;
print_r( $obj2 );

$obj2->updateColor( "Green" );
print_r( $obj1 );
print_r( $obj2 );


/*=================================================================================================
-------------------=22 - Conversion from object to string - __toString() Magic Methods--------------------------> 
===================================================================================================*/
/*  Conversion from object to string  - "__toString()" Magic Methods
The __toString() method allows a class to decide how it will react when it is treated like a string.
 *
 * https://www.php.net/manual/en/language.oop5.magic.php#object.tostring
 *
 */

//Error - Object of class Fruits could not be converted to string
// class Fruits {
//     public $fruit;
//     public function __construct( $fruit ) {
//         $this->fruit = $fruit;
//     }
// }
// $mango = new Fruits( "Mango" );
// echo $mango;

//Object to String conversion
class Fruits {
    public $fruit;
    public function __construct( $fruit ) {
        $this->fruit = $fruit;
    }
    public function __toString() {
        return "This is an {$this->fruit}";
    }
}
$mango = new Fruits( "Mango" );
echo $mango;




/*=================================================================================================
-------------------=--------------------------> 
===================================================================================================*/




/*=================================================================================================
---------------23 - Comparing Objects----=--------------------------> 
===================================================================================================*/

/* Comparing Objects
 *
 * https://www.php.net/manual/en/language.oop5.object-comparison.php
 *
 */

//01
class Fruits {
    public $fruit;
    public function __construct( $fruit ) {
        $this->fruit = $fruit;
    }
}
$mango = new Fruits( "Mango" );
$mango2 = new Fruits( "Mango" );
$orange = new Fruits( "Orange" );
$orange2 = $orange;
//01:
if ( $mango == $mango2 ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}
//02:
if ( $mango === $mango2 ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}

echo "\n";

//03:
if ( $mango == $orange ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}
//04:
if ( $mango === $orange ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}

echo "\n";

//05:
if ( $orange == $orange2 ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}
//06:
if ( $orange === $orange2 ) {
    echo "Similar Object\n";
} else {
    echo "Not Similar Object\n";
}


/*=================================================================================================
---------24 - property overloading & the __isset() & __unset() magic methods----------=--------------------------> 
===================================================================================================*/
/* property overloading & the __isset() & __unset() magic methods
 *
 * https://www.php.net/manual/en/language.oop5.magic.php
 *
 */

//**************  __isset()  ***************/
class Bike {
    private $parameter;
    public function __construct( $name, $model, $price ) {
        $this->parameter = [];
        $this->parameter["name"] = $name;
        $this->parameter["model"] = $model;
        $this->parameter["price"] = $price;
    }
    // public function __isset( $name ) {
    //     if ( !isset( $this->parameter[$name] ) ) {
    //         return false;
    //     }
    //     return true;
    // }
    public function __isset( $name ) {
        return isset( $this->parameter[$name] );
    }
}
$suzuki = new Bike( "FZ", "v-2", 200000 );
if ( isset( $suzuki->model ) ) {
    echo "Found";
} else {
    echo "Not Found";
}

//************** __unset() ***********/
class Vehicle {
    private $parameter;
    public function __construct( $name, $model, $price ) {
        $this->parameter = [];
        $this->parameter["name"] = $name;
        $this->parameter["model"] = $model;
        $this->parameter["price"] = $price;
    }
    public function __unset( $name ) {
        print_r( $this->parameter );
        unset( $this->parameter[$name] );
        print_r( $this->parameter );
    }
}
$car = new Vehicle( "BMW", "1200", 10000000 );
unset( $car->model );

//***********  __get() && __set **********/
//01:
// class Student {
//     private $name, $lastName, $age;
//     public function __construct( $name, $lastName, $age ) {
//         $this->name = $name;
//         $this->lastName = $lastName;
//         $this->age = $age;
//     }
//     public function __get( $name ) {
//         echo $this->$name;
//     }
// }
// $student = new Student( "Tufik", "Hasan", 25 );
// $student->name;

//02:
// class Student {
//     private $stdArr;
//     public function __construct( $name, $lastName, $age ) {
//         $this->stdArr = [];
//         $this->stdArr["name"] = $name;
//         $this->stdArr["lastName"] = $lastName;
//         $this->stdArr["age"] = $age;
//     }
//     public function __get( $name ) {
//         echo $this->stdArr[$name];
//     }
//     public function __set( $name, $value ) {
//         $this->stdArr[$name] = $value;
//     }
// }
// $student = new Student( "Tufik", "Hasan", 25 );
// $student->name;
// $student->name = "Rakib";
// echo "\n";
// $student->name;



/*=================================================================================================
----------------25 - Method Overloading __call() & __callStatic() Magic Methods---=--------------------------> 
===================================================================================================*/

/* Method Overloading __call() & __callStatic() Magic Methods
In PHP, "__call()" and "__callStatic()" are magic methods that are used to handle method calls on an object or a class respectively when the method being called is not accessible or does not exist.
"__call()" is invoked when an inaccessible or undefined method is called on an object instance. It takes two parameters: the method name that was called, and an array of arguments that were passed to the method. It can be used to provide dynamic method invocation, as well as to implement "getters" and "setters" for object properties.
"__callStatic()" is invoked when an inaccessible or undefined static method is called on a class. It takes two parameters: the method name that was called, and an array of arguments that were passed to the method. It can be used to provide dynamic static method invocation.
 *
 * https://www.php.net/manual/en/language.oop5.magic.php
 *
 */

//**************  __call()  ***************/
class Bike {
    public function __call( $method, $args ) {
        if ( "run" == $method ) {
            if ( $args ) {
                foreach ( $args as $arg ) {
                    static $count;
                    $count++;
                    echo "running Argument($count) = {$arg},";
                }
                echo "\n";
            } else {
                echo "I am running\n";
            }
        }
    }
}
$suzuki = new Bike();
$suzuki->run();
$suzuki->run( "name", "price" );

//************** __unset() ***********/
class Vehicle {
    static function __callStatic( $method, $args ) {
        echo "\nStatic CAll";
    }
}
Vehicle::wash();


/*=================================================================================================
-------------26 - Class file autoloading - spl_autoload_register()------=--------------------------> 
===================================================================================================*/





/*=================================================================================================
------------------26 - namespace - OOP PHP-=--------------------------> 
===================================================================================================*/



/*=================================================================================================
------------27 - Sorting and autoloading the file structure of large projects by namespace=--------------------------> 
===================================================================================================*/




?>
