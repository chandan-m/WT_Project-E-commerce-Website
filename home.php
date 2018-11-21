<?php include('server.php');
//if user is not logged in they cannot access this page
    if(empty($_SESSION['username']))
    {
        header('location: login.php');
    } 
    include('header.php');
    //include('footer.php');
?>
<!DOCTYPE html>  
<html>  
    <head>
        <link rel="stylesheet" type="text/css" href="home.css?ver=<?php echo rand(111,999)?>">  
        <title>Home</title>
    </head>  
    <body>
        <section>
            <img class="mySlides" src="slideshow/ad-3.png" style="width:100%">
            <img class="mySlides" src="slideshow/ad-6.jpg" style="width:100%">
            <img class="mySlides" src="slideshow/ad-10.jpg" style="width:100%">
        </section>

    <script>
    // Automatic Slideshow - change image every 3 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 3000);
    }
    </script>
    </body>
</html>