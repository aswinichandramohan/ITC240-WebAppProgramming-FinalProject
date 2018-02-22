<?php include 'config.php';?>
<?php include 'includes/header.php';?>

<h2><?=$title?></h2>

<?php

if(isset($_POST['Register'])) {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    
    $to = $_POST['Email'];
    
    $subject = "My WebSite Feedback" . date("m/d/y, G:i:s");
    
    $text = '';//initialize variable
    $text .= 'Hi ' . $_POST['FirstName'] . ',' . PHP_EOL . PHP_EOL;
    $text .= 'Thanks for signing up to our newsletter. Please be patient as we work to ready our newsletter.' . PHP_EOL . PHP_EOL;
    $text .= 'Below are the details you submitted:' . PHP_EOL;
    $text .= 'First Name: ' . $_POST['FirstName'] . PHP_EOL . PHP_EOL;
    $text .= 'Age: ' . $_POST['Age'] . PHP_EOL . PHP_EOL;
    $text .= 'Email: ' . $_POST['Email'] . PHP_EOL . PHP_EOL;
    $text .= 'Gender: ' . $_POST['Gender'] . PHP_EOL . PHP_EOL;
    $text .= 'Intrests: ' . $_POST['Interest'] . PHP_EOL . PHP_EOL;
    $text .= 'Comments: ' . $_POST['Comments'] . PHP_EOL . PHP_EOL;

    $headers = 'From: noreply@aswinichandramohan.com' . "\r\n" .
    'Reply-To: noreply@aswinichandramohan.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $text, $headers);
    
    echo '
    <p>Your email has been sent.</p>
    <p>
        Please click 
        <a href="http://aswinichandramohan.com/itc240/sandbox/coffee/template1/register.php">here</a>
        to register another user.  
    </p>
    ';

} else {
    //show form!
    echo '
    <form action="" method="post">
        <div class="row">
            <div class="form-group col-lg-6">
                <label class="text-heading" for="FirstName">First Name</label>
                <input class="form-control" type="text" name="FirstName" id="FirstName" autofocus required />
            </div>
        </div>
        <div class="row">    
           <div class="form-group col-lg-6">
                <label class="text-heading" for="Age">Age</label>
                <input class="form-control" type="number" size="6" name="Age" id="Age" min="18" max="99" />
            </div>
        </div>
        <div class="row">    
            <div class="form-group col-lg-6">
                <label class="text-heading" for="Email">Email</label>
                <input class="form-control" type="email" name="Email" id="Email" required />
            </div>
        </div>
        <div class="row">
           <div class="form-group col-lg-12">
                <label class="text-heading" for="Gender">Gender</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="Gender" value="Male">
                        Male
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="Gender" value="Female">
                        Female
                    </label>
                </div> 
                <div class="radio">
                    <label>
                        <input type="radio" name="Gender" value="Other">
                        Other
                    </label>
                </div>    
            </div>   
        </div>

        <div class="row">
            <div class="form-group col-lg-12">
                <label class="text-heading" for="Interest">Interest</label>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="Interest" value="technology">
                    Technology
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="Interest" value="arts">
                    Arts
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="Interest" value="politics">
                    Politics
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="Interest" value="sports">
                    Sports
                  </label>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-lg-12">
                <label class="text-heading" for="Comments">Comments</label>
                <textarea class="form-control" name="Comments" id="Comments"></textarea>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-lg-12">
                <button type="submit" class="btn btn-secondary" name="Register">Register</button>
            </div>
        </div>
    </form>
    ';

}
?>

<?php include 'includes/footer.php';?>