<?php
abstract class hero {
    public  $mass; 
    public  $height; 
    abstract public function walk();
   
    public function character($arr){
        $this->mass= $arr['mass'];
        $this->height= $arr['height'];  
    }
    public function power($arr){
    	$this->power=$arr['mass']+$arr['height'];
    }
    public function mpower($arr){
    	$this->magic=$arr['magic'];
    	$this->mag_power=$arr['magic']*($arr['mass']+$arr['height']);
    }
}

class boec  extends hero{
    public function __construct($arr){     
        $this->character($arr);
        $this->power($arr);
    }
	public function walk(){
 		echo "хожу<br>"."<br/>";
	}
	public function run(){
		echo "бегу<br>"."<br/>";
	}
 	public function hit(){
		echo "бью<br>"."<br/>";
	}
 }
 class bogatir  extends hero{
 	public $agility=5;
    public function __construct($arr){     
        $this->character($arr);
        $this->power($arr);
    }
	public function walk(){
		echo "хожу <br>";
 	}
 	public function run(){
		echo "бегу <br>";
	}
	public function hit(){
		echo "бью <br>";
	}
	public function jump(){
		echo "прыгаю <br>";
	}
 }

 class mag  extends hero{
 	public $magic=10;
    public function __construct($arr){     
        $this->character($arr);
        $this->mpower($arr);
    }
		public function walk(){
			echo "хожу <br>";
		}
		public function fly(){
			echo "лечу <br>";
		}
		public function destroyed(){
			echo "разрушаю <br>";
		}
 }


 $boec=new boec(array(
    "mass"=>"70",
    "height"=>"178kg",
));


 $bogatir=new bogatir(array(
    "mass"=>"120kg",
    "height"=>"200",
    "agility"=>"5"
));


 $mag=new mag(array(
    "mass"=>"55kg",
    "height"=>"170",
    "magic"=>"10"
));

print_r($boec);
echo "<br>";
print_r($bogatir);
echo "<br>";
print_r($mag);
echo "<br>";
$mag->fly();