
<?php
    //IMPUT STRING - aoonthehcaadeo
    /*function findPos($par){
        $arr = array();
        $arr = str_split($par);
        //var_dump($arr);
        $times = 0;
        $pos = 0;
        foreach($arr as $a){
            $times = 0;
            for ($i=0;$i<count($arr);$i++){
                if ($a == $arr[$i]){
                    $times++;
                }
                //echo $times;
            }
             if ($times == 1){
                 $pos = array_search($a,$arr);
                 break;
             }
        }
        return $pos;
    }

    $str = "aoonthehcaadeo";
    echo findPos($str);*/


function counIsland($arr){
    $colums = count($arr[0]);
    $island = array();
    $islands = 0;
    for ($i=0;$i<count($arr);$i++){
        for ($j=0;$j<count($arr[$i]);$j++){
            //echo $arr[$i][$j];
            if($arr[$i][$j]==1){
                if (($i == 0) || ($arr[$i-1][$j] == 0) && ($arr[$i][$j-1]==0 || ($j==0))){
                    $islands++;
                }
            }
        }
    }
    return $islands;
    
}

$grid = [
  ["1","1","1","1","0"],
  ["1","1","0","1","0"],
  ["1","1","0","0","0"],
  ["0","0","0","0","0"]
];
$grid1 = [
  ["1","1","0","0","0"],
  ["1","1","0","0","0"],
  ["0","0","1","0","0"],
  ["0","0","0","1","1"]
];

echo counIsland($grid1);
