<?php 
if(!empty($_GET['st'])){
    $val=$_GET['st'];
    $covidurl='https://'.'api.rootnet.in/'.'covid19-in/contacts'.urlencode($_GET['st']);
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
 <label for="st">Select the state:</label>
    <input list="states" name="st" id="st">
    <datalist id="states">
       <option value="Andhra Pradesh">
          <option value="Arunachal Pradesh">
          <option value="Assam">
          <option value="Bihar">
          <option value="Chhattisgarh">
          <option value="Goa">
          <option value="Gujarat">
          <option value="Haryana">
          <option value="Himachal Pradesh">
          <option value="Jharkhand">
          <option value="Karnataka">
          <option value="Kerala">
          <option value="Madhya Pradesh">
          <option value="Maharashtra">
          <option value="Manipur">
          <option value="Meghalaya">
          <option value="Mizoram">
          <option value="Nagaland">
          <option value="Odisha">
          <option value="Punjab">
          <option value="Rajasthan">
          <option value="Sikkim">
          <option value="Tamil Nadu">
          <option value="Telengana">
          <option value="Tripura">
          <option value="Uttarakhand">
          <option value="Uttar Pradesh">
          <option value="West Bengal">
          <option value="Andaman and Nicobar Islands">
          <option value="Chandigarh">
          <option value="Dadra and Nagar Haveli">
          <option value="Daman & Diu">
          <option value="Delhi">
          <option value="Jammu and Kashmir">
          <option value="Ladakh">
          <option value="Lakshadweep">
          <option value="Puducherry">
    </datalist>
            <button type="submit">CLick</button>
        </form>
        
        here is the state:<br>
        <?php 
        if(!empty($covidarray)){
        foreach($covidarray['data']['contacts']['regional'] as $sdc){
            if($val==$sdc['loc']){
                echo 'helpno. is'.$sdc['number'];
            }
           // echo ' option value="'.$sdc['loc'].'"><br>';
            
        }
        }?>
    </body>
</html>