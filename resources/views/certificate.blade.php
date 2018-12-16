<html>
<head>
</head>

<body>
<style>
.crt_container{
  overflow:hidden;
  font-family:arial;
  width:700px;
  height:850px;
  border:15px solid #0072c6;
    border-right:15px solid #0894fb;
      border-left:15px solid #0894fb;
  display:table;
  margin-left:10px;
  padding-left:15px;
  padding-right:15px;
  padding-top:15px;
  padding-bottom:15px;
  position:fixed;
}

.crt_logo{
    margin:0px;
  display:inline-block;
  width:100%;
  padding:10px;
  text-align:center;
}
.crt_logo img{
  width:250px;
  height:200px;
  margin-top:-580px;

}
.crt_user{
  display:inline-block;
  width:80%;
  padding:5px 25px;
  margin-bottom:0px;
  padding-bottom:0px;
  font-family: 'Satisfy', cursive;
    font-size:40px;
    border-bottom:1px dashed #cecece;
}
.crt_title{
  margin-top:40px;
font-family: 'Satisfy', cursive;
 font-size:40px;
  letter-spacing:1px;
}
.crt_content{
    text-align:center;
    margin-top:300px;
}
.crt_content h1{
color:#0072c6;
}
h1.colorGreen{
  color:#27ae60;
}
.crt_content h3 .colorGrey{
  color:grey;
}
.crt_content h2{
  color:#383737;
}
.crt_content h3{
  font-weight:100;
}
h3.afterName{
  font-weight:100;
  color:#383737;


}
.signLeft{
  float:left;
    margin-top:15px;
}
.signLeft,.signRight{
  width:48%;
  margin-top:40px;
}
.signLeft img,.signRight img{
  width:150px;
  margin-bottom:10px;
}
.signRight{
  float:right;
}
.signLeft h3,.signRight h3{
  margin-top:0px;
  margin-bottom:5px;
  font-size:16px;
  
}

.printCrt{
  position:fixed;
  right:10px;
top:10px;
z-index:999;
  border:0px solid red;
  background-color:#0072c6;
  color:white;
  width:100PX;
  height:50px;
  border-radius:100px;
  transition:all 0.3s ease;
    font-size:18px;
  letter-spacing:1px;
}
.printCrt:hover{
  cursor:pointer;
  background-color:#135688;
  box-shadow:2px 2px 10px 1px rgba(0, 0, 0, 0.25);
}

</style>    
<link href="" rel="stylesheet">

<div class="crt_container">
  <div class="crt_logo">
    <img src="https://edusite.co.uk/static/img/logo.png">
  </div>
  <div class="crt_content">
    <h1 class="crt_title">Certificate Of Completion</h1>
    <h2>This Certificate is awarded to</h2>
    <h1 class="colorGreen crt_user">{{$name}}</h1>
    <h3 class="afterName" style="margin-left:15px; margin-right:15px;">For his/her completion of  Beginner and Advanced Class <br> Android Programming Course in Edusite</h3>
    <h3><span class="colorGrey">Awarded on</span> @php echo date('l jS \of F Y');     @endphp</h3>
    <div class="signLeft">
      <img src="https://camo.githubusercontent.com/805e05b94844e39d7edd518f492c8599c71835b3/687474703a2f2f692e696d6775722e636f6d2f646e5873344e442e706e67" alt="">
      <h3>Fajar Shadiq</h3>
      <h3>CEO Edusite</h3>
    </div>
    <div class="signRight">
      <img src="https://camo.githubusercontent.com/805e05b94844e39d7edd518f492c8599c71835b3/687474703a2f2f692e696d6775722e636f6d2f646e5873344e442e706e67" alt="">
      <h3>Rifki Rizkullah</h3>
      <h3>Team Teaching Edusite</h3>
    </div>
  </div>
  
</div>

</body>
</html>