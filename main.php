<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device width, initial scale=1.0">
    <title>PHP practice </title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

<div class="flex-container">

    <div class="header">
        <?php include 'logo.included.php' ?>
        <?php include 'menu.included.php' ?>
    </div>

    <div class="about_me">

        <h1> <?php echo $p ?> </h1>
            <div class="data">

                <div class="myImage">
                    <?php
                    echo '<img src="/images/me.jpg">';
                    ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname ?>
                    <br>
                    <?php echo 'город', ' ', $city; ?>
                    </p>

                    <p> Мне почти
                    <?php echo $age; ?>
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>

            </div>

            <div class="knowledge">

                <?php include 'knowledge.included.php'; ?>
                <?php echo $a, ' ', $b, ' ', $c;
                ?> 
                <br>

                <?php
                    $a = 20;
                    $b = 70;
                    $c = $a + $b;
                    echo $c;
                ?>
                <br>
                <?php
                    echo $d;
                ?>

            </div>

            <div class="article">
                <p class="text">
                    На самом деле я - новичок в IT. По образованию я - архитектор. На практике - достаточно неплохой ведущий архитектор, находящийся в стадии выгорания. Именно поэтому решила осваивать новую профессию. Надеюсь, что все получится.
                </p>
            </div>
    </div>

        <?php include 'footer.included.php' ?>

</div>

</body>
</html>


