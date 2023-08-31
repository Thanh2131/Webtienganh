<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>HTML</title>
<style>	
.column {
	flex: 33.33%;
	height: 300px;
	padding: 10px;
	margin: 5px;
	background-color: #dfc7af;
	text-align: center;
  width: 50px;
  border-radius: 20px;
	}
.container {
	  display: flex;
}	
.header{
  background-color: #3b3890;
	color: #fffefd;
	padding: 10px 0;
	text-align: center;
  box-shadow: 0px 0px 5px 5px #9c9ca1;
}
.cuudoc {
  font-family: sans-serif;
  font-size: larger;
}
.soidoc{
  font-family: sans-serif;
  font-size: larger;
}
.codoc{
  font-family: sans-serif;
  font-size: larger;
}
.nhaydoc{
  font-family: sans-serif;
  font-size: larger;
}
gadoc{
  font-family: sans-serif;
  font-size: larger;
}
.echdoc{
  font-family: sans-serif;
  font-size: larger;
}
.container :hover img{
  transform: scale(1.1);
  transition: all 0.3s ease-in-out;
}
.home{
  text-decoration: none;
  color: #fdfdfd;
  font-size: 50px;
}
.vocab{
  font-size: 20px;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.right{
  text-decoration: none;
  color: #fdfdfd;
  font-size: 50px;
  margin-left: 15px;
}
</style>
</head> <div class="header">
    <div>
        <h1 class="title1">ENGLISH FOR CHILDREN</h1>
        <div class="icon">
          <a href="home.php"><i class="fa-solid fa-house home"></i></a>
          <a href="NEP2vocal.php"><i class="fa-solid fa-arrow-right right"  style="height: 50px; width: 50px;"></i></a>
      </div>
    </div>
</div>  
<body>
<div class="handsome">
    <div class="content">
      <div class="vocab">
        <h2> VOCABULARY </h2>
      </div>
        <div class="container">
           <div class="column">
             <img src="img/cừu.jpg" alt=""style height="250px" width="250px">
             <p class="cuudoc">SHEEP</p>
           </div>
           <div class="column">
             <img src="img/sói.jpg" alt=""style height="250px" width="250px">
             <p class="soidoc">WOLF</p>
           </div>
           <div class="column">
            <img src="img/grass.jpg" alt=""style height="250px" width="250px">
            <p class="codoc">GRASS</p>
           </div>
           
        </div>
    </div>
    <div class="content2">
        <div class="container">
           <div class="column">
             <img src="img/dance.jpg" alt=""style height="250px" width="250px">
             <p class="nhaydoc">DANCE</p>
           </div>
           <div class="column">
             <img src="img/chicken.jpg" alt=""style height="250px" width="250px">
             <p class="gadoc">CHICKEN</p>
           </div>
           <div class="column">
             <img src="img/frog.jpg" alt=""style height="250px" width="250px">
             <p class="echdoc">FROG</p>
           </div>
        </div>
    </div>
</div>

    <footer>
</footer>
</body>
</html>