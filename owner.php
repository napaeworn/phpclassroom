<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>chiangmai province website</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Sarabun"
    />
    <style>
      body {
        font-family : "sarabun";
        background-color : #CCFFFF ;
      }
      #header{
        height: 160px;
        padding: 50px;
        background-image: url("p.jpg");
        background-size:100%;
      }
      #sidebar{
        background-color: #f1f1f1;
        padding: 0px;
      }
      #content{
       
        padding: 10px;
        background-color: gray;
      }
      #footer{
        padding: 30px;
        height: 200px;
        background-color: pink;
      }
      
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 100%;
        background-color: #f1f1f1;
      }
      li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
      }
      /* Change the link color on hover */
      li a:hover {
        background-color: #555;
        color: white;
      }
      p{
        margin-top: 10px;
      }
    </style>
    
  </head>
  <body> 
    <div class="container"> 
      <div class="row">
        <div class="col-12" id="header">
          <center><b><h1>จังหวัดเชียงใหม่</h1></b></center>
        </div>
      </div>
      <div class="row">
        <div class="col-3" id="sidebar"> 
          <ul>
            <li><a href="lswproject.php">หน้าแรก</a></li>
            <li><a href="location.php">แหล่งท่องเที่ยว</a></li>
            <li><a href="custom.php">ประเพณีและวัฒนธรรม</a></li>
            <li><a href="food.php">อาหารประจำท้องถิ่น</a></li>
            <li><a href="owner.php">ข้อมูลผู้จัดทำ</a></li>
          </ul>
        </div>
        <div class="col-9" id="content"> 
          <b><h4>ข้อมูลของผู้จัดทำ</h4></b><br>
          <center>
            <img src="poon.jpg" width = "350px" class="img-fluid rounded"><br><br>
            <b>ชื่อ:</b> นายกิตตินันท์ วัฒนะจิตพงศ์<br><br>
            <b>เลขที่ :</b> 1 <br><br>
            <b>ชั้นมัธยมศึกษาปีที่:</b> 5/13<br><br>
            <img src="peem.jpg" width = "350px" class="img-fluid rounded"><br><br>
            <b>ชื่อ:</b> นายณปวร แก้วโชติ<br><br>
            <b>เลขที่ :</b> 2 <br><br>
            <b>ชั้นมัธยมศึกษาปีที่:</b> 5/13<br><br>
            <img src="nan.jpg" width = "350px" class="img-fluid rounded"><br><br>
            <b>ชื่อ:</b> นายรฐนนท์ พาอุ่นใจ<br><br>
            <b>เลขที่ :</b> 3 <br><br>
            <b>ชั้นมัธยมศึกษาปีที่:</b> 5/13<br><br>
            <img src="ey.jpg" width = "350px" class="img-fluid rounded"><br><br>
            <b>ชื่อ:</b> นายธีร์ธวัช ศรีบุญ<br><br>
            <b>เลขที่ :</b> 5 <br><br>
            <b>ชั้นมัธยมศึกษาปีที่:</b> 5/13<br><br>
            <img src="mint.jpg" width = "350px" class="img-fluid rounded"><br><br>
            <b>ชื่อ:</b> นางสาวกนกกช ดอกหอม<br><br>
            <b>เลขที่ :</b> 13 <br><br>
            <b>ชั้นมัธยมศึกษาปีที่:</b> 5/13<br><br>
            <img src="nid.jpg" width = "350px" class="img-fluid rounded"><br><br>
            <b>ชื่อ:</b> นางสาวเนตรทราย พักใส<br><br>
            <b>เลขที่ :</b> 15 <br><br>
            <b>ชั้นมัธยมศึกษาปีที่:</b> 5/13<br><br>
          </center>
        </div>
      </div>
       <div class="row">
        <div class="col-12" id="footer"> 
         <center>
            <h3>ผลงานนักเรียน</h3>
            <hr />
            <p>รายวิชา WebApplication</p>
            <p>โรงเรียนหล่มสักวิทยาคม</p>
          </center>
        </div>
      </div>
    </div>  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
