<!DOCTYPE HTML>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/styles.min.css">
        <link rel="stylesheet" type="text/css" href="css/all.min.css">
        <link rel="icon" href="img/favicon.png"/>
        <title>Beson | UNIKATE UND EINZIGARTIG AUS WEIMAR</title>
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-sm position-absolute w-100">
            <button class="navbar-toggler" 
                data-toggle="collapse" 
                data-target="#main-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav ml-auto h3">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com" 
                            class="nav-link"
                            rel="noopener noreferrer nofollow"
                            target="_blank">
                            <span class="fab fa-facebook-square"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.twitter.com" 
                            class="nav-link"
                            rel="noopener noreferrer nofollow"
                            target="_blank">
                            <span class="fab fa-twitter-square"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="container-fluid index-s1 bg-dark text-white d-flex">
            <div class="row my-auto mx-auto d-flex w-100">
                <div class="mx-auto text-center text-shadow-black font-logo opacity-8">
                    <h1 class="display-3">BESON</h1>
                    <h2 class="h4 text-muted">
                        <span class="text-white">UNIKATE</span> AUS WEIMAR
                    </h2>
                </div>
            </div>
        </section>
        <section class="container error-s2 d-flex py-5" id="message">
            <div class="row my-auto">
                <div class="col-10 col-md-8 offset-1 offset-md-2 text-left">                    
                    <h3 class="text-center mb-3 text-shadow-gray font-weight-bold font-header">
                        ERROR!
                    </h3>
                    <p class="initialism text-center">
                        Entschuldigung, aber Ihre Nachricht wurde aufgrund technischer 
                        Probleme nicht gesendet. Bitte versuchen Sie es erneut oder 
                        kontaktieren Sie uns direkt.
                    </p>
                </div>
                <div class="col-12 text-center">
                    <a href="index.html" class="btn btn-outline-secondary">
                        <span class="fa fa-home"></span> 
                        Back
                    </a>
                </div>
            </div>
        </section>        
        <footer class="container-fluid bg-black text-white p-3">
            <div class="row text-center">
                <div class="col-12">
                    <a href="index.html" class="mx-auto">
                        <img src="img/logo.png" class="img-fluid" alt="beson">
                    </a>
		        </div>
                <div class="col-12">
                    <small class="text-white-50">
                        Copyright &copy; 2020-2021 Tomasz Pankowski |
                        <a href="privacy.html#terms" class="text-white-50">
                            Privacy policy
                        </a>
                    </small>
                </div>
            </div>
        </footer>
        <div class="modal" id="privacyModal">
            <div class="modal-dialog">
                <div class="modal-content p-20">
                    <div class="modal-header text-center">
                        <h4 class="font-header text-primary">GPDR Declaration</h4>
                    </div>
                    <div class="modal-body">
                        <p class="initialism">
                            This website is a <span class="text-danger"> demo version </span> of real website,  It doesn't collect and process,
                            in long term meaning (longer than needed for website operation during visitor's
                            presence), any user (visitor) data. All information collected during visitor's 
                            presence on this website is used only for technical purposes, required for 
                            correct operation of website or demonstration purposes related to technical 
                            mechanisms and presentation of its operation... 
                            <a href="privacy.html#terms" class="label label-primary">More about privacy</a>
                        </p>                        
                        <p class="initialism">
                            If you accept privacy policy please click button "accept". If you 
                            refuse it, leave page by closing it in your web browser, please.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button class="btn btn-success"
                                onclick="acceptPrivacyPolicy()">
                                Accept
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        <script src="js/main.min.js"></script>
    </body>
</html>