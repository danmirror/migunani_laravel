<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- title -->
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="shortcut icon"  href="{{asset('image/logo1.png') }}" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"/>

    <!-- sosmed -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--icon  -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    
    
    <!-- slick -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <!-- login -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
    <script src='http://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MorphSVGPlugin.min.js?r=182'></script>
    
    <!-- icon -->
    <!-- <script src="https://kit.fontawesome.com/54c8a0a75f.js" crossorigin="anonymous"></script> -->
 


    <link rel="stylesheet" href="{{asset('css/style.css') }}" >


    

    

    <!-- new slick -->

    @yield('link')
    
</head>
<body>
  
@yield('nav')
    
    <!-- --jumbotro-- -->
    @yield('jumbotron')
    
    @yield('container')
    @yield('content')

    <!--footer -->
    <section class="footer py-3" id="footer" >
        <div class="col-md-12" >
            <div class="mb-3 text-center" >
                <a href="#" class="fab fa-facebook-f social"></a>
                <a href="#" class="fab fa-twitter fab fa-hashtag social"></a>
                <a href="https://www.instagram.com/migunaniarchitect/?hl=id" class="fab fa-instagram social"></a>
                <div class="fab fa-whatsapp social" id="myBtn" ></div>
            <div>
        </div>
        <div id="myModal" class="modal-foot">
            <!-- Modal content -->
            <div class="modal-content-foot">
                <span class="close-no">&times;</span>
                <p>085225832895</p>
            </div>
            </div>
        <p class="mb-0 text-center"> &copy;Copyright 2019 | built by. Migunani Architect</p>
          </section>
    <!-- endfooter -->

    <script>
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close-no")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
</script>

  
    @yield('script')
    @yield('force')
</body>
</html>