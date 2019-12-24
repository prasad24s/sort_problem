<?php

    $arr =  array(     
                    array('amount'=>5,'type'=>'cat'),
                    array('amount'=>9,'type'=>'pig'),
                    array('amount'=>2,'type'=>'tiger'),
                    array('amount'=>3,'type'=>'elephent'),
                    array('amount'=>4,'type'=>'dog'),
                    array('amount'=>15,'type'=>'boar'),
                    array('amount'=>14,'type'=>'ant'),
                    array('amount'=>12,'type'=>'rat'),
                    array('amount'=>1,'type'=>'lion'),
                  );
    $len = count($arr);
   
    for($i=1;$i<=$len;$i++){
     for($j=0;$j<$len-1;$j++){
         //for sort by type replace amount in following if condition by 'type'
          if($arr[$j]['amount'] > $arr[$j+1]['amount']){
            $temp = $arr[$j+1];
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $temp;
          }
     }//inner for   
   }//outer for
   
   echo"<pre>";
   print_r($arr);
  
    /*
      sql question
      select SUM(total) AS total,date(cratedDateTime) as selected_date 
      from demo_table 
      GROUP BY date(cratedDateTime) ORDER BY date(cratedDateTime)
   */


?>