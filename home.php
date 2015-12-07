<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css"	rel="stylesheet">
</head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/easing.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/menu.css">

    <script src="js/menu.js"></script>


    <div class="header">
        <div class="logo"><img src="images/home_layout/logo.PNG"  style="max-height:100%;max-width:100%;" /> </div>
        <div class="banner"><img src="images/home_layout/Banner.PNG"  style="max-height:100%;max-width:100%;" /></div>

    </div>

    <div class="content">
        <div class="mainMenu">
            <div id='cssmenu'>
                <ul>
                    <li class='active'><a href='home.php?content=home.php'><span>Home</span></a></li>
                    <li class='has-sub'><a href='home.php?content=calendar.php'><span>Calendar</span></a>
                        <ul>
                            <li><a href='home.php?content=view.php'><span>View</span></a></li>
                            <li><a href='home.php?content=createAppointment.php'><span>Create New Appointment</span></a></li>
                            <li class='last'><a href='home.php?content=options.php'><span>Options</span></a></li>
                        </ul>
                    </li>
                    <li class='last'><a href='home.php?content=leaveList.php'><span>Leave List</span></a></li>
                    <li class='last'><a href='home.php?content=medicineReminder.php'><span>Medicine Reminder</span></a></li>
                </ul>
            </div>

        </div>
        <div class="frame">
            <?php
            /*
             * Dafür sorgen, dass unabhängig von den aktuellen PHP-Einstellungen
             * alle auftretenden Fehler angezeigt werden
             */
            error_reporting(E_ALL | E_STRICT);
            ini_set('display_errors', 'On');

            /*
             * Aus der URL auslesen, welcher Contentbereich angezeigt
             * werden soll. Den Namen in Kleinbuchstaben umwandeln, sodass
             * die Groß/Kleinschreibweise egal ist.
             */
            if (isset($_GET['content'])) {
                $content = $_GET['content'];
            } else {
                $content = '';
            }

            /*
             * Angängig vom ausgewählten Content nun den entsprechenden
             * Inhalt einfügen
             */

            switch ($content) {

                // Falls dynamic_content.php?content=main
                case 'view.php':
                    include 'Web_Content/view.php';
                    break;
                case 'Tutorial.php':
                    include 'Web_Content/Tutorial.php';
                    break;
                case 'options.php':
                    include 'Web_Content/options.php';
                    break;
                case 'medicineReminder.php':
                    include 'Web_Content/medicineReminder.php';
                    break;
                case 'bugReport.php':
                    include 'Web_Content/bugReport.php';
                    break;
                case 'calendar.php':
                    include 'Web_Content/calendar.php';
                    break;
                case 'createAppointment.php':
                    include 'Web_Content/createAppointment.php';
                    break;
                case 'generalInformation.php':
                    include 'Web_Content/generalInformation.php';
                    break;
                case 'leaveList.php':
                    include 'Web_Content/leaveList.php';
                    break;

                // Falls nichts oder ein undefinierter Wert angegeben ist
                default:
                    include 'Web_Content/view.php';

            }
            ?>

        </div>
    </div>

    <div class="footer">
        <p>
            <a href="home.php?content=bugReport.php">Bug report</a>   |
            <a href="home.php?content=generalInformation.php">General information</a>   |
            <a href="home.php?content=Tutorial.php">Tutorial</a>   |
        </p>
    </div>


    </body>
</html>
