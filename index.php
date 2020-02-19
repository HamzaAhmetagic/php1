<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <a href="" class="navbar-brand">php test</a>
        <ul class="navbar-nav ">
            <?php
             $links = ["home","about","contact","gallery"];
            //  echo count($links);
            //  die();
             for($i=0;$i<count($links);$i++){
                echo '<li class="nav-item">
                <a class="nav-link">'.$links[$i].'</a>
                </li>';
             }
            ?>
        </ul>
    </nav>
    <?php
   
    // $num = 10;
    // $num2 = 20;
    // $num3 = $num+$num2;
    // $name = "Hamza";
    // $lastName = "Ahmetagic";
    // // echo '$name uci php';
    // $istina = true;
    // $laz = false;
    // echo $istina;
    // var_dump($name);
    // $job = null;
    // var_dump($job);
    // echo $name." ".$lastName ;
    // echo $name." uci php";
    // $mix = ["Danilo",$num];
    // $mix[2]="Hamza";
    // $mix[] = "Ivan";
    // unset($mix[0]);
    // $ocjene = [
    //     "js"=>5,
    //     "php"=>3
    // ];
    
    // var_dump($ocjene["js"]);
    // for($i = 0; $i<5; $i++){
    //     echo "<h1>Hamza $i</h1>";
    // };
    // die();
    ?>
    <!-- <h1>Hamza</h1>
    <h1>Hamza</h1>
    <h1>Hamza</h1>
    <h1>Hamza</h1> -->
    <script >
    function display(x){
        x()
    }
    function info(){
        console.log("Radi")
    }
    display(info)
    </script>
</body>
</html>