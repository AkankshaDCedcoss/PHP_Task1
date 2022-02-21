<?php
$marks=30;
$mm=100;
$percent=($marks/$mm)*100;
echo $percent;
if($percent >= 60)
{
    echo " Grade : first Division <br>";
}
else{
         if(($percent >= 45) && ($percent <= 59))
        {
            echo " Grade : Second Division <br>";
        }
         
        else{
                if(($percent >= 33) && ($percent <= 44))
                {
                    echo " Grade : Third Division <br>";
                }
                else
                {
                     echo " FAILED !";
                }
            
            }
        }

?>
