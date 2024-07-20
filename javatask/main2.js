


//working check
console.log ("hello world");


//check the number is even or odd

var number = parseInt(prompt('enter yout number'));
if(number % 2 === 0){
    console.log('even number');
}
else{
    console.log('odd number');
}



//compute the circle area and circumference


//soultion1
var radius = prompt('enter the radius of the circle');
var area = Math.PI * radius * radius;
var circumference = 2 * Math.PI * radius;



//solution2
var radius = prompt('enter your radius of the circle');
i = 3.14;
var area = i * radius * radius;
var circumference= 2 * i * radius; 

console.log(`area of the circle is ${area}`);
console.log(`circumference: ${circumference}`);


//print sum of two numbers

var num1 = parseInt(prompt('enter your first number'));
var num2 = parseInt(prompt('enter your second number'));
var sum = num1 + num2;
console.log(`the sum of two numbers is ${sum}`);



//check between two integers wehther negative or postive

var num1 = parseInt(prompt('enter your first number'));
var num2 = parseInt(prompt('enter your second number'));
if (num1 || num2 > 0){
    console.log('positive number');
}
else{
    console.log('negative number');
    }


//reverse a word

var word = prompt('enter your word');
var reverse = word.split('').reverse().join('');
console.log(reverse);
