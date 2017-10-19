
<?php
/*below are my variable--> */

$first_name = "hossein";
$last_name = "ghaffary" ;
$name = "hossein" ;     

$age = 23 ;
//we can use double cout and in v7 we learn how to use single cout
echo "my firstname is $first_name and my last name is $last_name and  I am $age y/o <br>"  ;
echo "this is my first program<br>";

//v7--------------------------v7
$world = 'world';
//not using double coutation
echo 'hello'. $world ;
echo 'hello'. $world . '<br>' ;

//using HTML must put --single coutation-- and  for variable better double coutation
echo '<a href="www.google.com">google</a><br>' ;
$link = "google";
echo '<a href="www.google.com">' . $link . '</a><br>' ;
//-using single cout in sentence using \
echo 'hello it\'s a nice day<br>';

//v8-------------------------------------------v8
//MATH
echo 10 + 5 . '<br>';
$num1 = 10;
$num2 = 15;
$result = $num1 * num2 ; 
//addition
echo $num1 + $num2 . '<br>';
//subtraction
echo $result . '<br>';
//multiplication
echo $num1 * $num2 . '<br>';
//devision
echo $num1 / $num2 . '<br>';

//each time increment 1 number
$num1++;
$num1++;
echo $num1 . '<br>';

$num1--;
$num1--;
echo $num1 . '<br>';
        
//v9----------------------------------v9
//if statement
        
$name1 = "hossein" ;
if($name1 == 'hossein')
{
 echo 'hello hossein <br>';
}
if($name1 == 'tom')
{
 echo 'hello tom';
}

$total = 5+1 ;
if($total == 6)
{
 echo 'yuor answer is 6<br>';
}

//v10--------------------------------------v10

if( $name1 == 'ali')
{
    echo 'welcome to website hossein <br>';
}else
{
   echo  'hey, you\'re not hossein <br>';
   echo 'who you are? <br>';
}
//with elseif we can add condition but with else no
if( $name1 == 'ali')
{
    echo 'welcome to website hossein <br>';
}elseif ($name1 =='tom')
{
   echo  'hey, you\'re not hossein <br>';
   echo 'who the hell you are? <br>';
}
 else {
    
     echo 'please don\'t try again <br>';
 }
 
 //v11-----------------------------------------------------v11
 //if with math (comparison operaters) == , < , > , >= , <=, !=
 
 //v12-----------------------------------------------------v12
 //logical operaters
 $password='password1';
 $pass='password2';
 
 if($name='hossein' and $password = 'passwprd1')
 {
     echo 'welcome to the website <br>';
 }
 
 $password='password1';
 
 if($name='hossein' or $pass = 'passwprd1')
 {
     echo 'welcome to the website <br>';
 }
 
 //v13----------------------------------v13
 //string Array
 $names = ['hossein' , 'chris' , 'tom'];
 $names1 = array ('ali' , 'mo' , 'alex');

 
 echo $names[1] , '<br>'  ;
 echo $names1[2] , '<br>';
 
 //integer array
 $ages = ['hossein'=> 30 ,'chris'=>20 , 'tom'=> 18];
 echo $ages['hossein'], '<br>';
 
 echo 'hossein is older than' . $ages['hossein'] .  'and chris is older than' . $ages['chris'] . '<br>';
 
 // printing array
 print_r($ages);
 
 //v14----------------------------------------------v14
 //while loop
 //num1 value is 10(define above)
 while ($num1 < 20)
 {
     echo 'the number is' . $num1 . '<br>';
     $num1++;
 }
 
 //v15----------------------------------------------v15
 
 //foreach
 
 $names5 = ['hgh1' , 'hgh2' , 'hgh3'];
 
 foreach ($names5 as $person) 
{
    echo 'the name is' . $person . '<br>';
}

//v16--------------------------------------------------v16
//dynamic web pages -- get input from user
//define variable $_GET[](get value from browser)
$name4 = $_GET['user'];
$age4 = $_GET['age'];

echo 'welcome to the website' . $name4 . 'you are' . $_age4 . 'y/o <br>';
//now we must open a html page and write some code to create a form 


//v18-------------------------------v18
//post method----creat login not secure
//invisible
$username = $_post['username'];
$password = $_post['password'];
if ($username == 'hossein' and password == 'hossein')
{
    echo 'welcome to secret website, you are in! '; 
} else 
{
   echo 'wrong username or password'; 
}


?> 
