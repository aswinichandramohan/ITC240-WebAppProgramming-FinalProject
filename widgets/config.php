<?php
/*
config.php

put configuration information here

*/

define('DEBUG', TRUE); #we want to see all errors

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// PAGE ID
$nav1['index.php']= "HOME";
$nav1['customer.php']= "CUSTOMER";
$nav1['register.php']= "REGISTER";
$nav1['contact.php']= "CONTACT";
$nav1['daily.php']= "DAILY";

//defaults for header.php
$banner = 'WIDGETS';
$slogan = 'Our Widgets are better!';

switch(THIS_PAGE){
    case 'index.php':
        $title = 'Index page';
    break;
    case 'customer.php':
        $title = 'Customer page';
    break;
    case 'register.php':
        $title = 'Register for our newsletter';
    break;
    case 'contact.php':
        $title = 'Contact Us';
    break;
    case 'daily.php':
        $title = 'Daily page';
    break;
    default:
        $title = THIS_PAGE;
}

//other include files referenced here
include 'credentials.php';

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
      echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
      echo "Error Message: <b>" . $errorMsg . "</b><br />";
      die();
    } else {
		  echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		  die();
    }
}

function header_links($nav1)
{
    foreach($nav1 as $url => $text) {
      if($url == THIS_PAGE) {   //currentpage - add highlight
        echo '
          <li class="nav-item active">
            <a class="nav-link" href="' . $url . '">' . $text . '</a>
          </li>
        ';
      } else { //no highlight
        echo'
          <li class="nav-item">
            <a class="nav-link" href="' . $url . '">' . $text . '</a>
          </li>
        ' ;
      }
    }
       
} //end header_links()
