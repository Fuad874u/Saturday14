<?php 
//this is multidimantional assosistive array 
//there are have many kinds of indexd array in a multidimantional array
//asosiated array inside 
$questions=[
['question'=>'what is 2+2 ?','correct' =>'4'],
['question'=>'what is the capital of france ?','correct'=>'paris'],
['question'=>'who wrote "Helmet"?','correct'=>'shakespeare'],

]; 



$answers=[];
foreach($questions as $index => $question){
echo ($index+1).".".$question['question']."\n";
$answers[]= trim(readline("Your answer: "));
}
//evaluate function 


function fuad(array $questions,array $answers):int{
$score =0;
foreach ($questions as $index => $question){
if( $answers[$index]===$question['correct']){
    $score++;
    

   }

 }
return $score;
};

$score=fuad($questions,$answers);
echo "You scored $score out of ".count($questions)."\n";
if($score===count($questions)){
echo "Excellent job!\n";
}elseif($score <1){
    echo "Good Effort! \n";

}else {echo "Better luck next time! \n";}


//Hello sir welcome 

