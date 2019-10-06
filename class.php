<?php

  function FF0_TD_AR_TO_EN($y,$m,$d)
    {
        if(($d>=1 AND $d<=30) AND ($m>=1 AND $m<=12))
        {
            $jd=(int)((11*$y+3)/30)+354*$y+30*$m-(int)(($m-1)/2)+$d+1948440-385;
            if ($jd>2299160 )
            {
              $l=$jd+68569;
              $n=(int)((4*$l)/146097);
              $l=$l-(int)((146097*$n+3)/4);
              $i=(int)((4000*($l+1))/1461001);
              $l=$l-(int)((1461*$i)/4)+31;
              $j=(int)((80*$l)/2447);
              $d=$l-(int)((2447*$j)/80);
              $l=(int)($j/11);
              $m=$j+2-12*$l;
              $y=100*($n-49)+$i+$l;
            }
            else
            {
              $j=$jd+1402;
              $k=(int)(($j-1)/1461);
              $l=$j-1461*$k;
              $n=(int)(($l-1)/365)-(int)($l/1461);
              $i=$l-365*$n+30;
              $j=(int)((80*$i)/2447);
              $d=$i-(int)((2447*$j)/80);
              $i=(int)($j/11);
              $m=$j+2-12*$i;
              $y=4*$k+$n+$i-4716;
            }
        }
        else
        {
            $y=0;
            $m=0;
            $d=0;
        }
        return array($y,$m,$d);
    }




    //  التحويل من التاريخ الميلادي الى الهجري
    function FF0_Date_From_EN_To_AR($y,$m,$d)
    {
        if (($y>1582)||(($y == 1582)&&($m>10))||(($y == 1582)&&($m == 10)&&($d>14)))
        {
            $jd=(int)((1461*($y+4800+(int)(($m-14)/12)))/4)+(int)((367*($m-2-12*((int)(($m-14)/12))))/12)-(int)((3* ((int)(($y+4900+ (int)(($m-14)/12) )/100)) ) /4)+$d-32073;
        }
        else
        {
            $jd=367*$y-(int)((7*($y+5001+(int)(($m-9)/7)))/4)+(int)((275*$m)/9)+$d+1729777;
        }
        $l=$jd-1948440+10632;
        $n=(int)(($l-1)/10631);
        $l=$l-10631*$n+353;
        $j=((int)((10985-$l)/5316))*((int)((50*$l)/17719))+((int)($l/5670))*((int)((43*$l)/15238));
        $l=$l-((int)((30-$j)/15))*((int)((17719*$j)/50))-((int)($j/16))*((int)((15238*$j)/43))+29 ;
        $m=(int)((24*$l)/709);
        $d=$l-(int)((709*$m)/24);
        $y=30*$n+$j-30;

        return array($y,$m,$d);
    }






function calc_str($old,$new){
    list($m1,$d1,$y1) = explode("/",$old);
    list($m2,$d2,$y2) = explode("/",$new);
    $years = $y2 - $y1;
    if($m2<$m1){
        $years--;
        $months = ($m2+12) - $m1;
    }else{
        $months = $m2 - $m1;
    }
    if($d2<$d1){
        $months--;
        $days = ($d2+30) - $d1;
    }else{
        $days = $d2 - $d1;
    }
    echo "$years years  $months months  $days days";
}
?>
<?php
/*
//date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = $_POST['old'];
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  echo "Age is:" . $age;
*/
?>