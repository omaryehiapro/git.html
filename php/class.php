<?php

 class employee {
    public int $employee_id;
    public string $first_name;

    public string $last_name;
    
    public int $employee_salary;
    public function __construct(int $employee_id, string $first_name,string $last_name ,  int $employee_salary  )
    {
        $this->employee_id = $employee_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->employee_salary = $employee_salary;
        }

  public function getid($employee_id) {
    $this->employee_id=$employee_id;
}

public function getFname( string $first_name){
    $this->first_name=$first_name;

} 
public function setsFname( string $first_name)  :void {
    $this->first_name=$first_name;

 } 
 public function getLname(string $last_name){
    $this->last_name=$last_name;
 }
 public function setLname( string $last_name) :void {
    $this->last_name=$last_name;
 }
 public function getsalary(int $employee_salary){
    $this->employee_salary=$employee_salary;

 }
 public function setsalaryint(int $employee_salary)  :void {
    $this->employee_salary=$employee_salary;

 } 
 public function getAnnualsalary():int {
   return $this->employee_salary * 12 ; 

 } 
 public function getRaisesalary() :float  {
   return $this->employee_salary * 0.10  ; 

 } 
}

$calcA = new employee (1,"omar", "yehia",3000);

echo $calcA->getRaisesalary() . ' ' . $calcA->getAnnualsalary();


///////////////////////////////////////////circle

class circle{
    private float $radius = 1.0;
    private string $color = "red";

 public function __construct(float $radius , string $color){
    $this->radius = $radius;
    $this->color = $color;


 }
 public function getradius(): float {
    return  $this->radius ;
}

public function setradius(float $length): void {
    $this->radius = $length;
   
}

public function getarea(): float {
    return 3.14 * ($this->radius * 2);
}
public function setarea(float $radius): void {
    $this->radius = $radius;
   
}
}
$calc = new circle (1.0 , 3.14);
echo $calc->getArea() . ' ' ;

/////////////////////////////////////////////////////////////////amount
class account{
    public string $name = "John";
    public int $balance = 0;
    public string $id  ;
   
 public function __construct( string $name, int $balance , string $id  ) {
    $this->name = $name;
    $this->balance = $balance ;
    $this->id = $id ;


 }

 public function getID() :string{
    return $this->id ;

 }
  public function getName():string{
    return $this->name ;

  }

  public function getBalance():int{
    return $this->balance ;
  }
 public function setBalance(int $balance): void {
    $this->balance = $balance;
    }
    public function setName(string $name): void {
        $this->name = $name;
        }
        public function setId(string $id): void {
            $this->id = $id;
            }
    
    public function credit(int $amount): void{

        $this->balance += $amount;

    }
      public function debit(int $amount):void {
        if ($amount > $this->balance) {
            echo "Insufficient funds";
            } else {
                $this->balance -= $amount ;
                }
                }
                public function __toString()
                {
                    return "Account ID: $this->id, Name: $this->name, Balance:
                    $this->balance";
                    }
        }
        $clac =  new  account("omar", 2000 , "1");
        echo $clac->__toString() . "\n";
        $clac->credit(100);
        echo "Balance after credit: " . $clac->getBalance() . "\n";
        $clac->debit(1000);
        echo "Balance after debit: " . $clac->getBalance() . "\n";













?>