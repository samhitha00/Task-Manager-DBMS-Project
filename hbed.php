<?php 
if(!empty($_GET['st'])){
    $val=$_GET['st'];
    $covidurl='https://'.'api.rootnet.in/'.'covid19-in/hospitals/beds'.urlencode($_GET['st']);
    $covidjson=file_get_contents($covidurl);
    $covidarray=json_decode($covidjson,true);
   // $st=$covidarray['data']['contacts']['regional'][$val]['loc'];
    
}


?>
<html>
    <head>
        <title>
            API works
        </title>
    </head>
    <form action="">
        
<button type="submit" name="st" value="Andhra Pradesh"> ap</button>
<button type="submit" name="st" value="Arunachal Pradesh"> arun</button>
<button type="submit" name="st" value="Assam">assa</button>


    </form>
    <body>
        
       
        here is the state:<br>
        <?php 
        if(!empty($covidarray)){
        foreach($covidarray['data']['regional'] as $sdc){
            if($val==$sdc['state']){
                echo 'helpno. is'.$sdc['totalBeds'];
            }
           
          //  echo 'button type="submit" name="st" value="'.$sdc['state'].'"><br>';
          
            
        }
        }?>
    </body>
</html>