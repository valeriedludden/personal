<!DOCTYPE html>
<html>
<head>
    <title>Valerie</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="week2personal/styles.css">
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 cpic" src="week2personal/beach1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 cpic" src="week2personal/beach5.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 cpic" src="week2personal/beach10.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
    </li>
    <li class="nav-item">
        <?php $project_link = "Week 3 Shopping Cart"; ?>
        <a class="nav-link links" href="week3ShoppingCart/browse.php"><?php echo $project_link ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Other Stuff</a>
    </li>
</ul>
<br>


<div class="profileContainer">
    <img src="week2personal/profilePic.JPG" class="pic" alt="...">
</div>

<div class="media intro">

    <div class="media-body">
        Hi. My name is Valerie and I love the beach. I grew up in Southern California very close to Laguna Beach. The
        beach is so peaceful and scerene. I love to go ther any time of day, with friends or alone. Laguna Beach is one
        of the few beaches that has everything I am looking for when I go to the beach. I can find a quite little cove
        or be with the crowds at main beach and watch a game of beach volley ball. Here are a few activities you can
        enjoy at Laguna.
    </div>

</div>

<ul class="list-unstyled">
    <li class="media info-div">
        <img src="week2personal/beach5.jpg" class="mr-3 spic" alt="...">
        <div class="media-body">
            <h5 class="mt-0 mb-1"><a
                    href="https://www.yelp.com/search?find_desc=watch+sunset&find_loc=Laguna+Beach%2C+CA+92651">Take A
                    Walk At Sunset</a></h5>
            Sunset is the perfect time to visit Laguna Beach. You can have a picnic at Heisler Park and then stroll the
            pathway past the lawn bowling, Las Brisas and end up on Main Beach. If you don't mind a line, you can even
            get some gelato at Paradiso on Pacfic Coast Highway.
        </div>
    </li>
    <li class="media my-4 info-div">
        <img src="week2personal/beach7.jpg" class="mr-3 spic" alt="...">
        <div class="media-body">
            <h5 class="mt-0 mb-1"><a href="https://www.visitlagunabeach.com/things-to-do/beaches/tide-pools/">Tide
                    Pools</a></h5>
            Laguna Beach is full of active and lush tide pools. You will find the usual mussels, crabs and sea urchins
            but occasionally you will see a small octopus. Shaws Cove is a great place to snorkel if you want to see the
            sea life that lives in the kelp bed. Sea Lion Rock is a great place to see the seal lions soaking up the
            sun.

        </div>
    </li>
    <li class="media info-div">
        <img src="week2personal/beach9.jpg" class="mr-3 spic" alt="...">
        <div class="media-body">
            <h5 class="mt-0 mb-1"><a
                    href="https://www.visitlagunabeach.com/blog/lagunas-hidden-history-the-victoria-beach-pirate-tower/">Victoria
                    Beach</a></h5>
            Spend a day on the hidden beach at Treasure Island, accessible only by climbing over rocks or swimming
            around a craggy headland, and you might find yourself glancing over your shoulder, longing for a one-legged
            buccaneer with a parrot to wade up on shore. There, battered by the unending cycle of tides, stands a lonely
            stone turret—affectionately called the “Pirate Tower” by locals. The tower is sixty feet tall and seems to
            have been birthed directly from the sandstone cliffs that surround it. 
        </div>
    </li>
</ul>
<div class="footer">
    <h1 class="header"> <?php date_default_timezone_set("America/Boise");
        echo "Thank you for visiting my site today " .
            "<br>" . date("l") . ",  " .
            "<br>" . date("Y/m/d") .
            "<br>" . " at " . date("h:ia") ?>
    </h1>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>