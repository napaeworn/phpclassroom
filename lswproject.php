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
        background-image:url("p.jpg");
        background-size: 20%;
      }
      #sidebar{
        height: 450px;
        background-color: green;
      }
      #content{
        height: 450px;
        background-color: gray;
      }
      #footer{
        height: 200px;
        background-color: pink;
      }
    </style>
    
  </head>
  <body> 
    <div class="container"> 
      <div class="row">
        <div class="col-12" id="header">
          <h1>จังหวัดเชียงใหม่</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-3" id="sidebar"> 
          <h1>Sidebar</h1>
        </div>
        <div class="col-9" id="content"> 
          <h1>Content</h1>
        </div>
      </div>
       <div class="row">
        <div class="col-12" id="footer"> 
          <h1>Footer</h1>
        </div>
      </div>
    </div>  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
