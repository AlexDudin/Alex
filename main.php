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
                               <?php 
                                        echo '<img src="https://otv-media.ru/upload/iblock/3f1/3f18cb3d00ef4daaeed479fffa992db7.png">' ;
                                ?>
         </div>

                <div class="fullname">
                        <p> My name 
                        <?php echo $name , $surname. '<br>';
                                echo $city ; ?>
                        </p>    


                <p>To me
                <?php echo $age ; ?>
                years </p>

                <p> We learned how to creat variables </p>
                <p> We studied simple operations with them </p>
         </div>

         </div>

               <div class="knowledge">
                                   
                    <?php   'knowledge.inc.php' ; ?>
                    <?php
                        $a = 'My knowledge on' ;
                        $b = 100 ;
                        $c = '%' ; 
                        ?> <?php   echo $a, ' ', $b, ' ', $c; ?>  <br>

                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>   


                    <?php
                        $price = 15;
                        if($price >= 15 && $price <= 20)
                        $d = 'This number is between 15 and 20' ;
                        ?> 

                     <?php
                        echo $d;
                    ?> 
                </div>
                                       
                <div class="article">
                        <p class="text">
                                Hey guys, my name is Alexander , Im taking the course "Ethical hacker"  "Skill Factory" we have a very interesting visit us https://skillfactory.ru
                        </p>
                </div>
        </div>
                 <?php include 'footer.inc.php' ?>

        </div>

</body>
</html>