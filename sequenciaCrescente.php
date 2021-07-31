
<?php

/* 
    Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

Exemplos para teste 

Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
        -  Sequencias com apenas um elemento são consideradas como TRUE

[1, 3, 2, 1]  false
[1, 3, 2]  true
[1, 2, 1, 2]  false
[3, 6, 5, 8, 10, 20, 15] false
[1, 1, 2, 3, 4, 4] false
[1, 4, 10, 4, 2] false
[10, 1, 2, 3, 4, 5] true
[1, 1, 1, 2, 3] false
[0, -2, 5, 6] true
[1, 2, 3, 4, 5, 3, 5, 6] false
[40, 50, 60, 10, 20, 30] false
[1, 1] true
[1, 2, 5, 3, 5] true
[1, 2, 5, 5, 5] false
[10, 1, 2, 3, 4, 5, 6, 1] false
[1, 2, 3, 4, 3, 6] true
[1, 2, 3, 4, 99, 5, 6] true
[123, -17, -5, 1, 2, 3, 12, 43, 45] true
[3, 5, 67, 98, 3] true


*/
function SequenciaCrescente($arr){
	$valida = 0;

    for($i=0; $i<count($arr)-1; $i++) 
    {
        for($j=0; $j<count($arr)-1; $j++)
        {
            if($arr[$j]> $arr[$j+1]){
                $arr_temp= $arr[$j+1];
                $arr[$j+1]= $arr[$j];
                $arr[$j]= $arr_temp;
                $valida += $j;
            }
        }
    }
    if($valida <= 1){
        return 'true';
    }else{
        return 'false';
    }
}

echo SequenciaCrescente(array(1,3,2)) . PHP_EOL;
echo SequenciaCrescente(array(1, 3, 2, 1)) . PHP_EOL;
echo SequenciaCrescente(array(1, 3, 2)) . PHP_EOL;  
echo SequenciaCrescente(array(1, 2, 1, 2)) . PHP_EOL;  
echo SequenciaCrescente(array(3, 6, 5, 8, 10, 20, 15)) . PHP_EOL; 
echo SequenciaCrescente(array(1, 1, 2, 3, 4, 4)) . PHP_EOL; 
echo SequenciaCrescente(array(1, 4, 10, 4, 2)) . PHP_EOL; 
echo SequenciaCrescente(array(10, 1, 2, 3, 4, 5)) . PHP_EOL;
echo SequenciaCrescente(array(1, 1, 1, 2, 3)) . PHP_EOL;
echo SequenciaCrescente(array(0, -2, 5, 6)) . PHP_EOL;
echo SequenciaCrescente(array(1, 2, 3, 4, 5, 3, 5, 6)) . PHP_EOL;
echo SequenciaCrescente(array(40, 50, 60, 10, 20, 30)) . PHP_EOL;
echo SequenciaCrescente(array(1, 1)) . PHP_EOL;
echo SequenciaCrescente(array(1, 2, 5, 3, 5)) . PHP_EOL;
echo SequenciaCrescente(array(1, 2, 5, 5, 5)) . PHP_EOL;
echo SequenciaCrescente(array(10, 1, 2, 3, 4, 5, 6, 1)) . PHP_EOL;
echo SequenciaCrescente(array(1, 2, 3, 4, 3, 6)) . PHP_EOL;
echo SequenciaCrescente(array(1, 2, 3, 4, 99, 5, 6)) . PHP_EOL;
echo SequenciaCrescente(array(123, -17, -5, 1, 2, 3, 12, 43, 45)) . PHP_EOL;
echo SequenciaCrescente(array(3, 5, 67, 98, 3)) . PHP_EOL;