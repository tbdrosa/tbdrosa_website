<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Test Contact Form</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="formStyles.css">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Montserrat&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <!-- ################################################
use this to change fonts in the future 
font-family: 'Asap', sans-serif;
font-family: 'Open Sans', sans-serif;
font-family: 'Roboto', sans-serif;
font-family: 'Libre Baskerville', serif;         
   
    ###################################-->
    <!-- #### social media icon link section #### -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- #### CSS stylesheet #### -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!--########## this is the navigation bar ########## -->
    <nav>
        <ul class="topNavigation">
            <!--use to be topNavigation-->
            <li class="topNavigation-left"> <a href="index.html">tbdrosa</a> </li>
            <li class="socialMedia_icon-right"> <a href="https://twitter.com/tbdrosa" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li class="socialMedia_icon-right"> <a href="https://www.instagram.com/tbdrosa/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li class="topNavigation-right"> <a href="/about.html">about</a></li>
            <li class="topNavigation-right"> <a href="#blog">blog</a></li>
            <li class="topNavigation-right"> <a href="#videos">videos</a></li>
            <li class="topNavigation-right"> <a href="/index.html">portfolio</a></li>
        </ul>
    </nav>
    <!-- partial:index.partial.html -->

    <div class="contact-form">
        <h1>Contact</h1>

        <form method="post" role="form">
            <div class="controls">
                <div class="form-group">
                    <p>Full Name</p>
                    <input type="text" name="name" class="form-input-text form-control" required="required">
                </div>

                <div class="form-group">
                    <p>Email</p>
                    <input type="email" name="email" class="form-input-text form-control" required="required">
                </div>

                <div class="form-group">
                    <p>Company</p>
                    <input type="text" name="name" class="form-input-text form-control" required="required">
                </div>

                <div class="form-group">
                    <p>Country</p>
                    <input type="text" name="name" class="form-input-text form-control" required="required">
                </div>

                <div class="form-group">
                    <p>Message</p>
                    <textarea name="message" class="form-input-text form-control" rows="4" required="required"></textarea>
                </div>
                <div class="send-button bottom-margin">
                    <button type="submit" class="btn btn-send send-msg">SEND MESSAGE</button>
                </div>
            </div>
        </form>
    </div>
    <!-- partial -->

</body>



</html>
