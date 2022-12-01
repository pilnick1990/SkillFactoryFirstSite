<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/iam.jpg" style="width:200px;>';?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p> Я научилися создавать переменные </p>
                    <p> Изучил простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c, ' ', $f; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        $e = 'сумма чисел';
                        echo $e, ' ', $a, ' ', 'и', ' ', $b, ' ', 'равна', ' ', $c;
                        
                    ?>   <br>                
                     <?php
                        echo $price, '-';
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Я работаю инженером на фабрике спортивных товаров. 
                    В свободное время летом люблю велопрогулки и отдых на концертах! 
                    Зима проходит за изучением материала Skillfactory
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
