<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bai.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>Document</title>
</head>

<body>
    <?php
  

  session_start();
  
    include("../admincp/config/config.php");
    include("header.php");
    include("menu.php");
    include("main.php");
    include("footer.php");
   
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script>
    


      
    var imgs = [
    <?php            
    while($row = mysqli_fetch_array($query_lietke_slide)){
    ?>                 
    "../admincp/modules/quanlyslide/slide/<?php echo $row['hinh'] ?>",
    <?php
    }         
    ?>
    ];
    var positon = $("header").scrollTop();
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $("header").addClass("sticky");
            } else {
                $("header").removeClass("sticky");
            }
        });
    });

     var index =1; 
    doianh =  function () 
    {
        document.getElementById('anh').src = imgs[index];
        index++;
        if(index ==4)
        {
            index =0;
        }
       
    }
    setInterval(doianh,2500);
    </script>


</body>

</html>