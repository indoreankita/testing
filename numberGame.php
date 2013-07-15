<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//function to read from stdin
function read_stdin()
{
        $fr=fopen("php://stdin","r");   // open our file pointer to read from stdin
        while ( $line = fgets($fr, 1000) ) {
            $input[]=$line;
        }
        fclose ($fr);                   // close the file handle
        return $input;                  // return the text entered
}

//fetch input
//$input = read_stdin();
$input[0]=3;
$input[1]="2 2 1";
$input[2]="3 3 2";
$input[3]="1 5 12";
//$n=no of rings
//$k=no of tower
//from input find n and k
$testCases=$input[0];

for($i=1;$i<=$testCases;$i++){
    $line = explode(" ",$input[$i]);
    $n=(int)$line[0];
    $m=(int)$line[1];
    $k=(int)$line[2];
    $arraySet=array();
    $counterArr=array();
    for($j=0;$j<$k;$j++){
        $row=1;$col=1;
        
        while($col<$m||$row<$n){
            if($j%2==0||$row==$n)
                $col=$col+1;
            else
                $row=$row+1;
            
            if(array_search($row,$arraySet['x'])==array_search($col,$arraySet['y'])){
                $var=$row.",".$col;  
                $counterArr[$var]++;
            } //end of if array search
            
            $arraySet['x'][]=$row;
            $arraySet['y'][]=$col;
            
          
        }//end of while
        echo max($counterArr);
    }
}
?>
