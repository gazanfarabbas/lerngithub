<?php
/*$a = 10;     //Global variable : use every where 
$b= 1;
function Addition(){
global $a,$b;
//$a = 10;   ///local variable : use only with in the function.When a function is completed, all of its variables are normally deleted.
//$b= 1;
//static $a =10;   //Static variable : sometimes you want a local variable to not be deleted then use static keyword.
//echo $a.'<br />';
//$a++;
echo 'Sum of given number '.$c=$a+$b.'<br/ >';
}
function Sub(){
global $a,$b;
echo 'SuB of given number '.$c=$a-$b;
}

Addition();
Sub();
*/

/*function Addition($arryadd){
	extract($arryadd);				 
	echo 'Sum of given number '.$c=$A+$B.'<br/ >';
}
$arryadd['A']=10;
$arryadd['B']=21;
Addition($arryadd);
*/
/*class Abc {    ///Class
	public $lname = 'Abbas';
	public static $fname = 'gazanfar';
	public function __construct(){    //Construct Automatically with out call
		echo "This is constrcut function <br />";
	}

	public function test(){
		echo "This is testing function.Which is develop by ".self::$fname.' '.$this->lname;
	}
}
$obj = new Abc;    ///objects
$obj->test();*/
//Abc::test();    ///scope resolution
//echo Abc::$fname;

/*class Abc {
	public $a = 10;
	protected $b = 20;
	public static $c = 30;
	public function __construct(){    
		echo "This is constrcut function for ABC and Variable access ".$this->a." <br />";
	}
	public function test(){
		echo "This is testing function.Which is develop by parrent.<br />";
	}
}
class xyz extends Abc{
	public function __construct(){  
		parent::__construct(); 
		echo "This is constrcut function for xyz and Variable access ".$this->b." <br />";
	}
	public function test1(){
		parent::test(); 
		echo "This is testing function.Which is develop by Child and Variable access ".self::$c." .";
	}
}
$obj = new xyz;    ///objects
$obj->test1();
*/

/////////Encapsulation = Binding of related methode and properties. 
/*class Abbas{
 	public $a=10;
	public $b=22;
	function add (){  
		echo $c= $this->a + $this->b .'<br />';
	}
	function sub (){
			echo $c= $this->a - $this->b.'<br />';
		}
	function mul (){
			echo $c= $this->a * $this->b.'<br />';
		}
	function div (){
			echo $c= $this->b / $this->b;
		}
}
class gazanfar extends Abbas{	
	function div (){
		parent::add();
		parent::sub();
		parent::mul();
		echo $c= $this->b / $this->a;
	}
}
//$obj = new Abbas();
$obj = new gazanfar();
 ///$obj->add();
// $obj->sub();
 //$obj->mul();
 $obj->div();*/
//inherit one class to another class
//*******inheritence********/

/*class Abbas{
 public $Address = 'Jafrabad';
 public $City = 'Jalalpur';
static $Dist = 'Ambedkar Nagar';
function AbbasName($FirstName,$LastName){
		echo $FirstName.' '.$this->Address.' '.$this->City.'<br />'; 
	}
}
class Abid extends Abbas{
	function AbidName($FirstName,$LastName){
		parent::AbbasName('Gazanfar','Abbas');
		echo $FirstName.' '.$LastName.' '.$this->Address.' '.$this->City.' '.self::$Dist;
	}
}
//$obj1 = new Abbas();
//$obj1->AbbasName('Gazanfar','Abbas');
$obj2 = new Abid();
$obj2->AbidName('Abid','Raza');*/
/*********************/

/*final Class A{       ///can not inherit in child class
	var $x=10;
	var $y=2;
	function show(){
		$sum=$this->x+$this->y;
		echo "Sum of given no=".$sum;
	 }
} 
class B extends A{
	function show(){
		$mult=$this->x * $this->y;
		echo "Multiplication of given no=".$mult.'<br/>';
		parent::show();
	}
} 	
$obj= new B();
$obj->show();
*/
/*$addition = function($a,$b){
return $c = $a+$b;
};
echo $addition(20,10);*/
/*Polymorphism : Poly =>Many
		   Morphism=>Properties
overloading = same method with different signature it is not support in php
overriding = same method define in parrent and child class and perform same signature */
/**************overriding****************/
/*class base{ 
function add($a,$b,$c){ 
$res=$a*$b+$c; 
echo "Multiplication = ".$res; 
} 
} 
class child extends base{ 
function add($a,$b){ 
$res=$a+$b; 
echo "Sum  = ".$res.'<br />'; 
//parent::add($a,$b);
} 
} 
 $obj= new child(); 
 $obj->add(1000,500);*/   ///1500
 /*********************/

/***********Access modifier(public,protected,private)***********/
/*class demo{ 
//private $x=1500; ///calls with in class can not calls out side the class.
//private $y=500;
public $x=1500; ///call every where with in class and out side the class. 
public $y=500;
//protected $x=1500; ///calls with in class and child class (inherit) .
//protected $y=500;
static $z = 200;		
	function add(){
		echo $sum=$this->x+$this->y+$this->z."<br/>"; 
	}		
} 
class child extends demo{ 
	function sub(){ 
		parent::add();
		echo $sub=$this->x - $this->y."<br/>"; 
	} 
}
$obj= new child; 
//$obj->add(); 
$obj->sub();*/
 /**********************************************************/
/*************Abstract ************/
/*abstract class Abc{
	public abstract function test();
	//private $xyz = 10;
	//protected $xyz = 10;
	public $xyz = 10;
	function demo(){
		echo "This is demo function <br />";
	}
}
class Xyz extends Abc{
	public function test(){
		//parent::demo();
		echo 'This is abstract function. In Abstract class u can not create objects '.$this->xyz.'<br />';
	}
}
$obj = new Xyz;
$obj->test();
$obj->demo();*/
/*************************/
/************Interface***Fully abstract class is called interface*********/
/*interface A {
	 function xyz();
}
interface B {
	 function abc();
}
class C implements A,B{
	 public function __construct(){
		echo "This is constrcut function <br />";
	 }
	 function xyz(){
		echo "Interface of A.<br />";
	}	
	function abc(){
		echo "Interface of B";
	}
}
$obj = new C;
$obj->xyz();
$obj->abc();*/
/*************************/
/**********Scope resolution**************/
/*class Organisation {
function getStrength() {
echo  "hello";
} 
function getName($fname,$lname){
return $fname.' '.$lname.' jalalpur Ambedkar nagar';
}
}
//$strength = Organisation::getStrength();
echo Organisation::getName('Gazanfar','Abbas');*/
/*********************************************/
/*****************************/
/*class Organisation{
	function getStrength() {
		echo "gazanfar abbas";
	} 
}
$obj = new Organisation();
$obj->getStrength();*/
/**************************/
/*class abc {
	public $a= 10;
	const MAX = 100;
	public static $var1 = "Static";
	public function __construct(){
	//echo "Called ".$this->a;
	//echo "Called ".self::$var1;
	echo "Called ".self::MAX;
	}
}
//echo abc::$var1.'<br>';
//echo abc::MAX;
$obj = new abc;*/
/*****************************/
/*class a {
	public  static $var1 = "Gazanfar abbas";
	public function abc(){
		echo self::$var1;
	}
}
$obj = new a();
$obj->abc();
//echo a::$var1;
*/
/********************************/




/*class B {
	// public function __invoke(){
	public function __construct(){
	echo "hello invoke <br>";
 }

	function Sum($a,$b){
	echo $a+$b;
	}

}
$obj = new B();
//$obj();
$obj->Sum('10','2');*/

///////Lambda
/*$meessage = function(){
echo "Welcome to  lambda function";
};
$meessage();
*/
/*
function Sum($a,$b){
echo $a+$b;
}
 Sum('12','2');*/
/*$Greeting = function(){
return "welcome to lambda function";
}
echo $Greeting();*/
//Clouser : it can access variables outside the scope that it was created.
/*$a='every one';
$greeting = function() use ($a) {  
echo "Hello ".$a;  
};
$greeting();*/






?>
