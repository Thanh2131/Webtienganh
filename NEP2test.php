<?php
@include 'config.php';
$answers = array(
    '1' => array('Monkey'),
    '2' => array('Sheep'),
    '3' => array('Cat'),
    '4' => array('Snake')
);

$score = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($answers as $key => $value) {
        if (isset($_POST[$key])) {
            $selectedAnswers = $_POST[$key];
            sort($selectedAnswers);
            if ($selectedAnswers == $value) {
                $score++;
            }
        }
    }
}
$sql = "INSERT INTO `nep2test` (`id`, `diemdung`) VALUES (NULL, '$score')";
if (mysqli_query($conn, $sql)) {
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Listen</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <style>
      .nghedoc{
      text-align: center;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      font-weight: 50px;
      }
      .nghe1{
        margin-left: 600px;
        margin-bottom: 10px;
        }
      .nghe2{
        margin-left: 600px;
        margin-bottom: 10px;
      }
      .nghe3{
        margin-left: 600px;
        margin-bottom: 10px;
      }
      .nghe4{
        margin-left: 600px;
        margin-bottom: 10px;
      }
      .nghedoc3{
          text-align: center;
          font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
          font-weight: 400px;
      }
      .nghedoc2{
          text-align: center;
          font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
          font-weight: 400px;
      }
      .haitamhinh{
          display: flex;
          justify-content: center;
      }
      .khi{
          box-shadow: 0px 0px 5px 5px #9c9ca1;
          border: #466E73 solid 4px ;
          border-radius: 10px;
          margin-right: 50px;
      }
      .voi{
        box-shadow: 0px 0px 5px 5px #9c9ca1;
          border: #466E73 solid 4px ;
          border-radius: 10px;
          margin-left: 50px;
      }
      .cuu{
        box-shadow: 0px 0px 5px 5px #9c9ca1;
          border: #466E73 solid 4px ;
          border-radius: 10px;
          margin-right: 50px;
      }
      .soi{
        box-shadow: 0px 0px 5px 5px #9c9ca1;
          border: #466E73 solid 4px ;
          border-radius: 10px;
          margin-left: 50px;
        }
        .cho{
            box-shadow: 0px 0px 5px 5px #9c9ca1;
          border: #466E73 solid 4px ;
          border-radius: 10px;
          margin-right: 50px;
        }
        .meo{
            box-shadow: 0px 0px 5px 5px #9c9ca1;
          border: #466E73 solid 4px ;
          border-radius: 10px;
          margin-left: 50px;
        }
        .ran{
            box-shadow: 0px 0px 5px 5px #9c9ca1;
          border: #466E73 solid 4px ;
          border-radius: 10px;
          margin-right: 50px;
        }
        .chuot{
            box-shadow: 0px 0px 5px 5px #9c9ca1;
          border: #466E73 solid 4px ;
          border-radius: 10px;
          margin-left: 50px;
        }
      .ketqua1{
          text-align: center;
      }
      .ketqua2{
          text-align: center;
      }
      .ketqua3{
          text-align: center;
      }
      .ketqua4{
          text-align: center;
      }
      .buttonkhi{
          background-color: rgb(248, 164, 216);
          color: white;
          padding: 10px;
          font-size: 16px;
          cursor: pointer;
          margin-right: 130px;
          border-radius: 15px;
      }
      .buttonvoi{
          background-color: rgb(248, 164, 216);
          color: white;
          padding: 10px;
          font-size: 16px;
          cursor: pointer;
          margin-left: 150px;
          border-radius: 15px;
      }
      .buttoncuu{
          background-color: rgb(248, 164, 216);
          color: white;
          padding: 10px;
          font-size: 16px;
          cursor: pointer;
          margin-right: 150px;
          border-radius: 15px;
      }
      .buttonsoi{
          background-color: rgb(248, 164, 216);
          color: white;
          padding: 10px;
          font-size: 16px;
          cursor: pointer;
          margin-left: 150px;
          border-radius: 15px;
      }
      .buttoncho{
          background-color: rgb(248, 164, 216);
          color: white;
          padding: 10px;
          font-size: 16px;
          cursor: pointer;
          margin-right: 150px;
          border-radius: 15px;
      }
      .buttonmeo{
          background-color: rgb(248, 164, 216);
          color: white;
          padding: 10px;
          font-size: 16px;
          cursor: pointer;
          margin-left: 150px;
          border-radius: 15px;
      }
      .buttonran{
          background-color: rgb(248, 164, 216);
          color: white;
          padding: 10px;
          font-size: 16px;
          cursor: pointer;
          margin-right: 150px;
          border-radius: 15px;
      }
      .buttonchuot{
          background-color: rgb(248, 164, 216);
          color: white;
          padding: 10px;
          font-size: 16px;
          cursor: pointer;
          margin-left: 150px;
          border-radius: 15px;
      }
      .button:hover{
          background-color: blue;
      }
      .nopbai{
       
        padding: 15px 25px ;
        border: 2px solid #333;
        border-radius: 20px;
        font-weight: bolder;
        text-decoration: none;
        display: flex;
        justify-content: center;
        margin-top: 20px;
        margin-bottom: 20px;
        color: rgb(250, 252, 251);
        background-color: #29c47b;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      }
      #totalCorrect{    
        
      }
      .container{
        box-shadow: 0px 0px 5px 5px #9c9ca1;
        border: #a6edf7 solid 4px ;
        border-radius: 10px;
        background-color: #a9d9d4;
        margin-bottom: 10px  ;
        padding-bottom: 5px;
      }
      .container2{
        box-shadow: 0px 0px 5px 5px #9c9ca1;
        border: #a6edf7 solid 4px ;
        border-radius: 10px;
        background-color: #a9d9d4;
        margin-bottom: 10px  ;
        padding-bottom: 5px;
      }
      .container3{
        box-shadow: 0px 0px 5px 5px #9c9ca1;
        border: #a6edf7 solid 4px ;
        border-radius: 10px;
        background-color: #a9d9d4;
        margin-bottom: 10px  ;
        padding-bottom: 5px;
      }
      .container4{
        box-shadow: 0px 0px 5px 5px #9c9ca1;
        border: #a6edf7 solid 4px ;
        border-radius: 10px;
        background-color: #a9d9d4;
        margin-bottom: 10px  ;
        padding-bottom: 5px;
      }
      .header{
        box-shadow: 0px 0px 5px 5px #9c9ca1;
        border: #fcd6ed solid 4px ;
        border-radius: 10px;
        background-color: #f7c8e3;
        margin-bottom: 10px  ;
        padding-bottom: 5px;
      }
     .dem{
        font-family: Arial, Helvetica, sans-serif;
        font-style: italic;
        font-weight: bolder;
        font-size: xx-large;
     }
     .home{
      text-decoration: none;
        color: #f0fadf;
        font-size: 50px;
        display: flex;
        justify-content: center;
       }
  </style>
  <body>
  <div class="to">


      <div class="header">
      
        <h1 class="nghedoc">Listening Test</h1>
        <h2 class="nghedoc2">CLICK ON THE BUTTON. WHICH ANIMAL DO YOU HEAR?</h2>
        <div class="icon">
          <a href="home.php"><i class="fa-solid fa-house home"></i></a>
      </div>
        <a href=""><img src="" alt=""></a>
      </div>
        
      <div class="container">
          
          <h2 class="nghedoc3">Question 1</h2>
      <audio class="nghe1" controls src="audio/khinghe.mp3"></audio>
    <div class="haitamhinh">
      <nav class="khi">
          <a href=""><img src="img/khi.jpg" alt="" height="250px" width="250px"></a>
      </nav>
      <nav class="voi">
          <a href=""><img src="img/voi.jpg" alt="" height="250px" width="250px"></a>
      </nav>
    </div>
      <div class="ketqua1">
          <button class="buttonkhi" id="khi" value="Monkey">Monkey</button>
          <button class="buttonvoi" id="voi" value="Elephant">Elephant</button>
      </div>
      </div>
  </div>
  <div class="container2">
      <h2 class="nghedoc3">Question 2</h2>

  <audio class="nghe2" controls src="audio/cuunghe.mp3"></audio>
  <div class="haitamhinh">
  <nav class="cuu">
      <a href=""><img src="img/cừu.jpg" alt="" height="250px" width="250px"></a>
  </nav>
  <nav class="soi">
      <a href=""><img src="img/sói.jpg" alt="" height="250px" width="250px"></a>
  </nav>
  </div>
  <div class="ketqua2">
      <button class="buttoncuu" id="cuu" value="Sheep">Sheep</button>
      <button class="buttonsoi" id="soi" value="Wolf">Wolf</button>
  </div>
  </div>
  <div class="container3">
    <h2 class="nghedoc3">Question 3</h2>
  <audio class="nghe3" controls src="audio/meonghe.mp3"></audio>
  <div class="haitamhinh">
  <nav class="khi">
    <a href=""><img src="img/cho.avif" alt="" height="250px" width="250px"></a>
  </nav>
  <nav class="voi">
    <a href=""><img src="img/meo.jpg" alt="" height="250px" width="250px"></a>
  </nav>
  </div>
  <div class="ketqua3"><button class="buttoncho" id="cho" value="Dog">Dog</button>
    <button class="buttonmeo" id="meo" value="Cat">Cat</button>
  </div>
  </div>
  </div>  
  <div class="container4">
  <h2 class="nghedoc3">Question 4</h2>

  <audio class="nghe4" controls src="audio/rannghe.mp3"></audio>
  <div class="haitamhinh">
  <nav class="cuu">
  <a href=""><img src="img/ran.png" alt="" height="250px" width="250px"></a>
  </nav>
  <nav class="soi">
  <a href=""><img src="img/chuot.jpg" alt="" height="250px" width="250px"></a>
  </nav>
  </div>
  <div class="ketqua4">
    <button class="buttonran" id="ran" value="Snake">Snake</button>
  <button class="buttonchuot" id="chuot" value="Rat">Rat</button>
  </div>
  </div>
    </div>
    <div class="dem" id="totalCorrect">Tổng số câu trả lời đúng: 0</div>
  

  <script>
    const khiButton = document.getElementById("khi");

    const voiButton = document.getElementById("voi");
   
    const cuuButton = document.getElementById("cuu");
    
    const soiButton = document.getElementById("soi");
    
    const choButton = document.getElementById("cho");
    
    const meoButton = document.getElementById("meo");
    
    const ranButton = document.getElementById("ran");
    
    const chuotButton = document.getElementById("chuot");
    
    const correctAnswers = {
      "khi": "Monkey",
      "cuu": "Sheep",
      "meo": "Cat",
      "ran": "Snake",
    };
    
    let totalCorrect = 0;

    
    khiButton.addEventListener("click", () => {
        const result = checkResult("khi");
        document.querySelector(".ketqua1").innerHTML = result;

        if (result === "Correct!") {
            totalCorrect++;
            document.querySelector("#totalCorrect").textContent = `Tổng số câu trả lời đúng: ${totalCorrect}`;
        }
    });
    voiButton .addEventListener("click", () => {
      const result = checkResult("voi");
      document.querySelector(".ketqua1").innerHTML = result;
    
      if (result === "Correct!") {
            totalCorrect++;
            document.querySelector("#totalCorrect").textContent = `Tổng số câu trả lời đúng: ${totalCorrect}`;
        }
    });
    
    cuuButton.addEventListener("click", () => {
      const result = checkResult("cuu");
      document.querySelector(".ketqua2").innerHTML = result;
    
      if (result === "Correct!") {
            totalCorrect++;
            document.querySelector("#totalCorrect").textContent = `Tổng số câu trả lời đúng: ${totalCorrect}`;
        }
    });
    
    soiButton.addEventListener("click", () => {
      const result = checkResult("soi");
      document.querySelector(".ketqua2").innerHTML = result;
    
      if (result === "Correct!") {
            totalCorrect++;
            document.querySelector("#totalCorrect").textContent = `Tổng số câu trả lời đúng: ${totalCorrect}`;
        }
    });
    choButton.addEventListener("click", () => {
      const result = checkResult("cho");
      document.querySelector(".ketqua3").innerHTML = result;
    
      if (result === "Correct!") {
            totalCorrect++;
            document.querySelector("#totalCorrect").textContent = `Tổng số câu trả lời đúng: ${totalCorrect}`;
        }
    });
    meoButton.addEventListener("click", () => {
      const result = checkResult("meo");
      document.querySelector(".ketqua3").innerHTML = result;
    
      if (result === "Correct!") {
            totalCorrect++;
            document.querySelector("#totalCorrect").textContent = `Tổng số câu trả lời đúng: ${totalCorrect}`;
        }
    });
    ranButton.addEventListener("click", () => {
      const result = checkResult("ran");
      document.querySelector(".ketqua4").innerHTML = result;
    
      if (result === "Correct!") {
            totalCorrect++;
            document.querySelector("#totalCorrect").textContent = `Tổng số câu trả lời đúng: ${totalCorrect}`;
        }
    });
    chuotButton.addEventListener("click", () => {
      const result = checkResult("chuot");
      document.querySelector(".ketqua4").innerHTML = result;
    
      if (result === "Correct!") {
            totalCorrect++;
            document.querySelector("#totalCorrect").textContent = `Tổng số câu trả lời đúng: ${totalCorrect}`;
        }
    });
    
  function checkResult(buttonId) {
    const button = document.getElementById(buttonId);
    const correctAnswer = correctAnswers[buttonId];
    if (button.value === correctAnswer) {
    return "Correct!";
  } else {
    return "Incorrect!";
  }
} 
document.querySelector("#totalCorrect").textContent = `Tổng số câu trả lời đúng: ${totalCorrect}`;
    </script>
  </body>
  </html>