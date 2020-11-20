<?php 
if(!empty($_GET['st'])){
    $val=$_GET['st'];
    $covidurl='https://'.'api.rootnet.in/'.'covid19-in/notifications'.urlencode($_GET['st']);
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
    <body>
        <form action="">
    <input type='text' name='st'>
            <button type="submit">CLick</button>
        </form>
        
        here is the state:<br>
        <?php 
        if(!empty($covidarray)){
        foreach($covidarray['data']['notifications'] as $sdc){
            /*if($val==$sdc['loc']){
                echo 'helpno. is'.$sdc['number'];
            }*/
            $date=substr($sdc['title'],0,10);

            if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1]).(0[1-9]|1[0-2]).[0-9]{4}$/",$date)) {
                $da=substr($sdc['title'],0,10);
                $ti=trim($sdc['title'],$da);
                $li=$sdc['link'];
               echo $da.'<br>'.$ti.'<br>'.$li.'<br>';
            } 
           // echo $date.'<br>';
            
        }
        }?>
    </body>
</html>