<?php
@include 'config.php';
$answers = array(
    '1' => array('Sheep and wolf'),
    '2' => array('Sweet grass'),
    '3' => array('Eat the sheep'),
    '4' => array('Sheep and wolf'),
    '5' => array('Sweet grass'),
    '6' => array('7 years old'),
    '7' => array('Three'),
    '8' => array('Yes, he does'),
    '9' => array('In his classroom'),
    '10' => array('On his desk')
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
$sql = "INSERT INTO `nep1test` (`id`, `diemdung`) VALUES (NULL, '$score')";
if (mysqli_query($conn, $sql)) {
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Test Nep 1</title>
</head><div class="header">
  <div>
      <h1 class="title1">ENGLISH FOR CHILDREN</h1>
      <div class="icon">
        <a href="home.php"><i class="fa-solid fa-house home"></i></a>
    </div>
  </div>
</div> <style>		
.header{
  background-color: #466E73;
	color: #fffefd;
	padding: 10px 0;
	text-align: center;
  box-shadow: 0px 0px 5px 5px #9c9ca1;
  border-radius: 10px;
}
.home{
  text-decoration: none;
  color: #fdfdfd;
  font-size: 50px;
}
.button{
  box-shadow: 0px 0px 5px 5px #9c9ca1;
  padding: 15px 10px ;
  border: 3px solid #207335;
  border-radius: 20px;
        font-weight: bolder;
        text-decoration: none;
        display: flex;
        justify-content: center;
        margin-top: 20px;
        margin-bottom: 20px;  
        margin-left: 450px;
        margin-right: 450px;
        color: rgb(250, 252, 251);
        background-color: #6ebf49;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
       }
       .cauhoi{
        display: flex;
       }
       .doanvan{
        box-shadow: 0px 0px 5px 5px #9c9ca1;
        border: #466E73 solid 4px ;
        border-radius: 10px;
        background-color: #a9d9d4;
        margin-bottom: 10px  ;
       }  
       .bainghe{
        box-shadow: 0px 0px 5px 5px #9c9ca1;
        border: #466E73 solid 4px ;
        border-radius: 10px;
        background-color: #a9d9d4;
        margin-bottom: 10px ;
        }
.btn{
  border: none;
  padding: 0;
  background: none;
  color: white;
}
</style>
<br></html></br>
<body>
<div class="handsome">
  <div class="content">
      <div class="container">
         <div class="column">
           <center><img src="https://th.bing.com/th/id/R.f5ea5c25687b6aacfc1904c8dee560ac?rik=r7zja7%2bEWkptDQ&riu=http%3a%2f%2fimages.china.cn%2fattachement%2fjpg%2fsite1002%2f20110529%2f001aa0c6c27e0f4c32591e.jpg&ehk=aIMyOIYBCh0pvgTdeLwbkWxkMPCVAQ6U1By%2fOoQbmcg%3d&risl=&pid=ImgRaw&r=0" alt=""style height="50%" width="50%"></center>
         </div>
      </div>
  </div>
</div>
<h1>NEP 1 :</h1>
<div class="doanvan">
<h2>Oneday, a lamb was eating sweet grass away from her flock of sheep. She did not notice a wolf walking nearer to her. When she saw the wolf, she started pleading, “Please, do not eat me. My stomach is full of grass.
    You can wait a while to make my meat taste much better. The grass in my stomach will be digested quickly if you let me dance.” The wolf agreed. 
    While the lamb was dancing,she had a new idea. She said, “I can dance faster if you take my bell and ring it so hard.” The wolf took the bell and started to ring so hard. The shepherd heard the sound and ran quickly to save the lamb’s life.</h2>
    <h2>QUESTION :</h2>
    <form method="post">
    <h2><label>1. What animals are the stories about?</label><br/>
        <input type="radio" name="1[]" value="Chicken">Chicken<br/>
        <input type="radio" name="1[]" value="Frog and bird">Frog and bird<br/>
        <input type="radio" name="1[]" value="Sheep and wolf">Sheep and wolf<br/></h2>

    <h2><label>2. What is the sheep eating?</label><br/>
        <input type="radio" name="2[]" value="Meat">Meat<br/>
        <input type="radio" name="2[]" value="Sweet grass">Sweet grass<br/>
        <input type="radio" name="2[]" value="She does not eat">She does not eat<br/></h2>

    <h2><label>3. What does the wolf want?</label><br/>
        <input type="radio" name="3[]" value="Eat the sheep">Eat the sheep<br/>
        <input type="radio" name="3[]" value="Drinking water">Drinking water<br/>
        <input type="radio" name="3[]" value="A & B are corrects">A & B are corrects<br/></h2>
    
    <h2><label>4. What animals are the stories about?</label><br/>
        <input type="radio" name="4[]" value="Chicken">Chicken<br/>
        <input type="radio" name="4[]" value="Frog and bird">Frog and bird<br/>
        <input type="radio" name="4[]" value="Sheep and wolf">Sheep and wolf<br/></h2>
    
        <h2><label>5. What is the sheep eating?</label><br/>
        <input type="radio" name="5[]" value="Meat">Meat<br/>
        <input type="radio" name="5[]" value="Sweet grass">Sweet grass<br/>
        <input type="radio" name="5[]" value="She does not eat">She does not eat<br/></h2>
</div>
<div class="bainghe">
     <h2>Listening</h2>
     <div>
      <audio class="nghe" controls src="audio/nghenep1.mp3"></audio>
      <h2><label>1. How old is Scott?</label><br/>
        <input type="radio" name="6[]" value="7 years old">7 years old<br/>
        <input type="radio" name="6[]" value="8 years old" >8 years old<br/>
        <input type="radio" name="6[]" value="6 years old">6 years old<br/></h2>
      <h2><label>2. How many pencils does he have?</label><br/>
        <input type="radio" name="7[]" value="Two">Two<br/>
        <input type="radio" name="7[]" value="Three">Three<br/>
        <input type="radio" name="7[]" value="Seven">Seven<br/></h2>
      <h2><label>3. Does he have two rulers?</label><br/>
        <input type="radio" name="8[]" value="Yes, he does"> Yes, he does<br/>
        <input type="radio" name="8[]" value="I do not know"> I do not know <br/>
        <input type="radio" name="8[]" value="No, he does not">No, he does not<br/></h2>
        <h2><label>4. Where is Scott?</label><br/>
          <input type="radio" name="9[]" value="In his classroom">In his classroom<br/>
          <input type="radio" name="9[]" value="In his bedroom">In his bedroom<br/>
          <input type="radio" name="9[]" value="In his living room">In his living room<br/></h2>
        <h2><label>5. Where is the book?</label><br/>
          <input type="radio" name="10[]" value="On his desk">On his desk<br/>
          <input type="radio" name="10[]" value="On his chair">On his chair<br/>
          <input type="radio" name="10[]" value="In his bag">In his bag<br/></h2>
     </div>
        <div class="button">
          <button class="btn">SUBMIT</button>
        </div>
    </div>
  </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Your score: $score / " . count($answers) . "</h2>";
}
?>
</body>
</html>