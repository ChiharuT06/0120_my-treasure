<?php

$name=$_POST['name'];




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Animate Javascript</title>
</head>
<body>

       <h1>受信ページ</h1>
        <p>名前：<?php echo $name ?>さん</p>
    

    <div class="container">
        <h2>Animate Javascript</h2>
    </div>
    
    <script src="anime.min.js"></script>
    <script>
      const container = document.querySelector(".container");
      for(let i=0; i<=50; i++){
          const blocks = document.createElement("div");
          blocks.classList.add("block");
          container.appendChild(blocks);
      }
      function animateBlocks(){
        anime({
          targets:".block",
          translateX:function(){
            return anime.random(-800,700);/*X座標から-800pxから700pxまでをランダムで動く*/
          },
          translateY:function(){
            return anime.random(-500,500);
          },
          scale:function(){
            return anime.random(1,3);/*1～3の大きさで描写*/
          },
          duration:2500,

        });
      }

      animateBlocks();
    </script>
    
</body>
</html>