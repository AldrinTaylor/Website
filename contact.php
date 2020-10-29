<!DOCTYPE html>
<?php include 'email.php'?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <?php include 'components/header.php'?>
        <section>
            <div class="card center" id="contact">
                <h1 class="heading">Contact Me</h1>
                <form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <label>Name:</br>
                            <input type="text" name="name" id=""></br>
                        </label>
                        <label>Email:</br>
                            <input type="text" name="email" id=""></br>
                        </label>
                        <label>Message:</br>
                            <textarea name="message" id="" cols="50" rows="10"></textarea></br>
                        </label>
                        <input name="submit" type="submit"></input>
                </form>
            </div>
        </section>
        <?php include 'components/footer.php'?>
    </body>
</html>
