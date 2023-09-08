<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dynamic add/remove input fields in PHP Jquery AJAX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/item.css">
  <link rel="shortcut icon" type="image/png" href="image/logo.png"/>
</head>
<body>

<div class="card text-center" style="margin-bottom:50px;">
  <h1>ADD YOUR FOOD ITEMS</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="form-group">
          <form name="add_name" id="add_name">
            <table class="table table-bordered table-hover" id="dynamic_field">
              <tr>
                <td><input type="text" name="name[]" placeholder="Enter Item Name" class="form-control name_list" /></td>
                <td><input type="number" name="price[]" placeholder="Enter Item Price" class="form-control name_email"/></td>
                <td><input type="text" name="category[]" placeholder="Enter Item Category" class="form-control name_email"/></td>
                <td><input type="number" name="rid[]" placeholder="restrudent id" class="form-control name_email"/></td>
                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>  
              </tr>
            </table>
            <input type="submit" class="btn btn-success" name="submit" id="submit" value="Save">
          </form>
        </div>
      </div>
    <div class="col-md-1"></div>
  </div>
</div>
<div class="dashboard">
	<a href="login.php">GO TO YOUR DASHBOARD</a>
</div>
<div class="dashboard">
	<a href="admin.php">GO TO HOME</a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){

    var i = 1;

    $("#add").click(function(){
      i++;
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list"/></td><td><input type="number" name="price[]" placeholder="Enter Item Price" class="form-control name_email"/></td><td><input type="text" name="category[]" placeholder="Enter your category" class="form-control name_email"/></td><td><input type="number" name="rid[]" placeholder="restrudent id" class="form-control name_email"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
    });

    $(document).on('click', '.btn_remove', function(){  
      var button_id = $(this).attr("id");   
      $('#row'+button_id+'').remove();  
    });

    $("#submit").on('click',function(){
      var formdata = $("#add_name").serialize();
      $.ajax({
        url   :"itemdata.php",
        type  :"POST",
        data  :formdata,
        cache :false,
        success:function(result){
          alert(result);
          $("#add_name")[0].reset();
        }
      });
    });
  });
</script>