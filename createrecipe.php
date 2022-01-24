<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Recipe Creator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    
</head>
<body style="background-color:powderblue;">
<body>

<div class="container">

<div class="row">
<div class="col-md-12">
<h3>Create new recipe</h3>
<hr />
</div>
</div>


<form name="insertrecord" action="recipe.php"method="post">
<div class="row">
<div class="col-md-3"><b>Title</b>
<input type="text" name="title" class="form-control" required>
</div>
<div class="row">
<div class="col-md-3"><b>Instructions</b>
           <textarea rows = "15" cols = "50" class="form-control" name = "instructions" required>
         </textarea>
     </div>
 </div>

  <div class="row">
    <div class="col-md-3"><b>Time:</b>
      <input type="time" name="created_at" class="form-control" required />
  </div>

<div class="row" style="margin-top:1%">
<div class="col-md-3">
<input type="submit" name="submit" value="Submit">
</div>
</div> 
     
         

</form>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- textaddneww -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-8906663933481361"
     data-ad-slot="3318815534"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>            
</div>
</div>
</body>
</html>