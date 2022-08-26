
<!DOCTYPE html>
<html  lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="assets/css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>



<input type="submit" class="button" name="insert" value="insert" />
<p class="p"></p>
<?php

    
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
    $('.button').click(function(e){
        $.ajax({
            type:"POST",
            url:"dataInsert_product_module.php",
            data:{action:$(".button").val()},
            success:function(result,status,xhr){
                $("p").html(result);
            }   
        });
    });
});


</script>
</body></html>