<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href = "style.css" rel= "stylesheet">
    <script defer src="script.js"></script>
</head>

<body>
    
    <main>
    <div class="shape"></div>
<div class="circle-box">
        <div id="circle"></div>
    <!--<img src="wheel.jpg" rel="zodiac_wheel" width= 400px height= 400px class="circle" id= "circle-box">-->
   

</div>
    <div class="text">
        <h1>Charakter znamení</h1>
       
        <form method="post" action="">
        <input type="date" name="birthDate" class="date">
        <input type="submit" name="btn" class="button">
        </form>
        
    <?php
    
    

    function getHoroskop($date_from_input){

        $json_data = json_decode(file_get_contents("text.json"), true);

        
        //var_dump($json_data);

        $date_as_num = str_replace("-", "", $date_from_input);

        $year = substr($date_as_num, 0, 4);
        $month = substr($date_as_num, 4, 2);
        $day = substr($date_as_num, 6, 2);

        $date = intval($month . $day);
        
       
        

        switch ($date) {

            case ($date <= 120):
                $choosed_item = "Kozoroh";
                ?><script>
                let angleToStop = <?php echo 90; ?>;
              </script><?php
                break;

            case ($date >= 121 and $date <= 220):
                $choosed_item = "Vodnář";
                ?><script>
                let angleToStop = <?php echo 60; ?>;
              </script><?php

                break;

            case ($date >= 221 and $date <= 320):
                $choosed_item = "Ryby";
                ?><script>
                let angleToStop = <?php echo 30; ?>;
              </script><?php
                
                break;

            case ($date >= 321 and $date <= 420):
                $choosed_item = "Beran";
                ?><script>
                let angleToStop = <?php echo 0; ?>;
              </script><?php
                break;

            case ($date >= 421 and $date <= 521):
                $choosed_item = "Býk";
                ?><script>
                let angleToStop = <?php echo 330; ?>;
              </script><?php
                break;

            case ($date >= 522 and $date <= 621):
                $choosed_item = "Blíženec";
                ?><script>
                let angleToStop = <?php echo 300; ?>;
              </script><?php
                break;

            case ($date >= 622 and $date <= 720):
                $choosed_item = "Rak";
                ?><script>
                let angleToStop = <?php echo 270; ?>;
              </script><?php
                break;

            case ($date >= 721 and $date <= 822):
                $choosed_item = "Lev";
                ?><script>
                let angleToStop = <?php echo 240; ?>;
              </script><?php
                break;

            case ($date >= 823 and $date <= 922):
                $choosed_item = "Panna";
                ?><script>
                let angleToStop = <?php echo 210; ?>;
              </script><?php
                break;

            case ($date >= 923 and $date <= 1023):
                $choosed_item = "Váhy";
                ?><script>
                let angleToStop = <?php echo 180; ?>;
              </script><?php
                break;

            case ($date >= 1024 and $date <= 1122):
                $choosed_item = "Štír";
                ?><script>
                let angleToStop = <?php echo 150; ?>;
              </script><?php
                break;

            case ($date >= 1123):
                $choosed_item = "Střelec";
                ?><script>
                let angleToStop = <?php echo 120; ?>;
              </script><?php
                break;
        }echo "<h3>$choosed_item</h3>";

     
        $index_in_array = array_search($choosed_item, array_column($json_data, "nazev"));
        $rand_num = rand(0, 4);

        $mytext = $json_data[$index_in_array]["text"][$rand_num];
        
        return $mytext;

    }

    $var = "Zadej datum.";

    if (isset($_POST['btn'])) {
        $data = $_POST['birthDate'];
        $var = getHoroskop($data);
    }
    
    echo "<p>". $var ."</p>";
    

    ?>

    
</div>
</main>


<script src="script.js"></script>
</body>

</html>