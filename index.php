<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/index.css">
   <title>the euphoria bot wiki</title>
</head>

<body>
   <div id="tempBoxHolder">
      <div class="textBox" id="smallBox">
         <div class="textHeader">
            The Euphoria Bot Wiki
         </div>
         <div class="textBody">
            <i>dedicated to preserving the bots of euphoria since 2023</i>
         </div>
      </div>
      

      <div class="textBox" id="thickBox">
         <div class="textHeader">
            about
         </div>
         <div class="textBody">
            a thing by <span class="cp1Nick">c+1</span>.<br><br>
            this website is powered by the <b>nest.place web<?php echo $word;?></b>!<br>
            <div class="textInset">
               <i><a class="textLink" href="/installer.html">install the nest.place web<?php echo $word;?> today!</a></i>
            </div>
         </div>
      </div>
   </div>

   <div class="textBox">
      <div class="textHeader">
         this is a list of registered users.
      </div>
      <div class="textBody">
         sort by:
         <div class="form">
            <div class="buttonContainer">
               <button class="button sort" id="sortScore">score</button>
               <button class="button sort" id="sortAge">age</button>
               <button class="button sort" id="sortName">name</button>
               <button class="button sort" id="sortID">id</button>
            </div>
            <div class="buttonContainer">
               <button class="button ord" id="ASC">ASC</button>
               <button class="button ord" id="DESC">DESC</button>
            </div>
            <div class="buttonContainer">
               <button class="button" id="fresh">REFRESH</button>
            </div>
         </div>
         <div class="textInset" id="listUsers">
         </div>
         you can get yourself an account <a href="/register" class="textLink">here</a>.
      </div>
   </div>

   <div class="textBox">
      <div class="textHeader">
         other things:
      </div>
      <div class="textBody">
         <div class="buttonContainer">
            <a class="button" href="/randomart/" title="your very own daily ssh randomart">randomart</a>
            <a class="button" href="/type/" title="wheatfundefinedundefinedundefinedundefined">type</a>
            <a class="button" href="/ip/" title="information about you">ip</a>
         </div>
      </div>
   </div>

   <div class="textBox">
      <div class="textHeader">
         johnvertisements
      </div>

      <div class="textBody">
         <div id="johnContainer">
            <div class="buttonContainer">
               <button class="button buttonBlue" id="experienceJohn">experience</button>
            </div>
         </div>
         
            
      </div>
   </div>

   <script src="/js/index.js"></script>
</body>
</html>
