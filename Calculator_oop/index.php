<?php
declare(strict_types=1);
include ('include/myloader.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Own Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>


</style>
</head>
<body>

<div style="align-content: center; margin-top:200px;">
<div class="clearfix"></div>
<div class="row" style="display:flex; ">
    <div class="col-6-sm border mx-auto" style="max-width:350px;border-radius: 20px;">
        <h1 class="heading text-center" style="margin-top:20px;">-:My Calculator:-</h1>
        <p class="text-primary text-center">This is a simple calculator based on PHP OOP</p>
        <br><br>
        <div style="text-align: -webkit-center;"><form method="post" class="form-inline bg-muted">
            <label>Your First Number:</label><br>
            <input type="number" name="num1" placeholder="Enter First Number!" class="text-center" ><br><br>
           <label>Select Your Method:</label><br> <select name="oper">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="multi">Multiply</option>
                <option value="divide">Divide</option>
            </select><br><br>
                <label>Your Second Number:</label><br>
                <input type="number" name="num2" placeholder="Enter Second Number!" class="text-center" ><br><br>
                <button type="submit" class="btn btn-primary" name="btn_sub" style="margin-bottom: 20px; "> Calculate </button>
        </form>

           <h3>Results : <?php
            include ('include/calculate.inc.php');
               ?></h3>
        </div>
    </div>
</div>
</div>

<!--Scripts-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>
</html>