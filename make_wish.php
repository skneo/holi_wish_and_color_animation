<?php

?>
<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Make wish</title>
</head>

<body>
<style>

    body {
        background-color: black;
    }   
    </style>
    <div class="container my-5">

        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['wisher_name'])) {
            $wisher_name = $_GET['wisher_name'];
            // echo  $wisher_name;
            $wisher_name1 = str_replace(' ', '_', $wisher_name);
            echo "<p class='text-light'> Hello $wisher_name, share your Holi wish on Whatsapp </p> 
            <a href='whatsapp://send?text=http://satishkushwah.in/holi/index.php?wisher_name=$wisher_name1' class='btn btn-success' data-action='share/whatsapp/share'  
        target='_blank'> Share on WhatsApp </a> ";
     
        } else {
            echo " <form method='GET' action=''>
            <div class='mb-3'>
                <label for='wisher_name' class='form-label float-start text-light'>Enter Your Name</label>
                <input type='text' class='form-control' id='wisher_name' name='wisher_name' required>
            </div>
            <button type='submit' class='btn btn-primary mb-3'>Make Wish Message</button>
        </form> ";
        }

        ?>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
</body>

</html>
