<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
        <link type="text/css" rel="stylesheet" href="assets/css/modified.css" />
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>

    </head>

    <body>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="login.html" style="color:#dd2c00">Sign out</a></li>
        </ul>

        <div>
            <nav id="student_nav">
                <div class="nav-wrapper">
                    <a id="nav_heading">Ashesi Lab Inventory</a>
                    <ul class="right hide-on-med-and-down">
                        <a style="color:#dd2c00" class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">toc</i></a>
                        <!--</li>-->
                    </ul>
                </div>
            </nav>

        </div>

        <div id="search">
            <nav>
                <div class="nav-wrapper">
                    <form>
                        <div class="input-field" style="background:#ff3d00 ">
                            <input id="search" type="search" required>
                            <label for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </div>

        <div id="modals" class="modal modal-fixed-footer my_modal">

<!--            <div class = "modal-footer">
                <a id="but" href="#!" class="modal-action modal-close waves-effect waves-orange btn-flat ">Request</a>
            </div>-->
        </div>

    </body>

</html>

<?php
include_once('mProduct.php');

$object = new Product();
$object->student_view_product(); //dwdw


