

<?php
// Multiple recipients
$to = 'service@spectraautodetail.com'; // note the comma

$copy = $_POST['email'];
$sendcc = $_POST['sendcopy'];

// Subject
$subject = "SpectraAutoDetail.com Comment by Visitor -- ".$_POST['name'];

// Message
$message = "<table>
       <tr>
	    <th colspan='2'>".$_POST['name']."&apos;s Comment/Inquiry</th>
			 </tr>
			 <tr>
		    <td style='font-weight:bold'>Name :</td>
				<td>".$_POST['name']."</td>
			 </tr>
		 <tr>
		  <td style='font-weight:bold'>E-mail : </td>
	  <td>".$_POST['email']."<br>Send copy? ".$_POST['sendcopy']."</td>
		</tr>
			<tr>
			  <td style='font-weight:bold'>Phone : </td>
				  <td>".$_POST['phone']."</td>
			</tr>			<tr>
			  <td style='font-weight:bold'>Preferred Method : </td>
				  <td>".$_POST['prefcontact']."</td>
			</tr>
				<tr>
		  <td style='font-weight:bold'>Message : </td>
			  <td>".$_POST['message']."</td>
					</tr>
                  <table>";
// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: <'.$to.'>';
$headers[] = 'From: <service@spectraautodetail.com>';
if ($_POST['sendcopy'] == "true") {
        $headers[] = 'Cc: <'.$copy.'>';
        }


// Mail it
//if ($name != '' && $email != '' && $phone != '' && $message != '') {
 
//session_start();
// 
//if(isset($_POST['submit'])) {
//     
//    if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['code'])) {
//     
//        if($_POST['code'] == $_SESSION['rand_code']) {
//         
//            // send email
//            $accept = "Thank you for contacting me.";
//         
//        } else {
//         
//            $error = "Please verify that you typed in the correct code.";
//         
//        }
//         
//    } else {
//     
//        $error = "Please fill out the entire form.";
//     
//    }
// 
//}

if(isset($_POST['submit'])) {
     
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
       
       if($_POST['code'] == $_SESSION['rand_code']) {
     
mail($to, $subject, $message, implode("\r\n", $headers));
   
   echo '<head>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="icon" type="image/png" href="../images/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="../styles/newstyles.css" rel="stylesheet" type="text/css"> 
</head>

<body class="bg-light" >
<nav class="navbar navbar-expand-sm navbar-light fixed-top border-bottom box-shadow" style="">
   <a class="navbar-brand" href="../"><img class="hovergrow" src="../images/www_spectraautodetail_com3.png" height="50" alt="Spectra Logo"/></a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../">Home</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="../about_us.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../packages.html">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact_us.html">Contact Us</a>
          </li>
        </ul>
         <!--
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
         -->
      </div>
    </nav>
    <main>
    <div class="container">
  <h2 class="display-4">E-mail Sent Successfully!</h2>
  
<p>Thank you for submitting. Your message has been emailed successfully to our service team, and a copy has been sent to the email address provided on the previous page. Someone will be in touch via your preferred contact method as soon as possible, usually within one business day.</p>
   </main> <footer class="container text-center">
       <div class="row">
          <div class="col-xl-3 col-md-4"><img src="../images/SpectraLogo.png" height="20" alt="Spectra Logo"/>Copyright &copy;&nbsp;<script>document.write(new Date().getFullYear());</script></div><div class="col-xl-4 col-md-8">Spectra Auto Detail&mdash;Loganville, Georgia</div><div class="col-xl-2 col-md-4">tel:&nbsp;<a href="tel:7708510794">(770)&nbsp;851-0794</a></div><div class="col-xl-3 col-md-8">email:&nbsp;<a href="mailto:service@spectraautodetail.com">service@spectraautodetail.com</a></div>
    </div></footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>';
}
}
else {
   echo '<head>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="icon" type="image/png" href="../images/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="../styles/newstyles.css" rel="stylesheet" type="text/css"> 
</head>

<body class="bg-light" >
<nav class="navbar navbar-expand-sm navbar-light fixed-top border-bottom box-shadow" style="">
   <a class="navbar-brand" href="../"><img class="hovergrow" src="../images/www_spectraautodetail_com3.png" height="50" alt="Spectra Logo"/></a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../">Home</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="../about_us.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../packages.html">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact_us.html">Contact Us</a>
          </li>
        </ul>
         <!--
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
         -->
      </div>
    </nav><main id="main-mail-fail">
  <h2 class="display-4">Submission Failed! All fields are required. Please complete all fields.</h2>
  
<p>We&apos;re very sorry, but something went wrong... Please go back to the <a href="../contact_us.html">contact page</a> and try again, ensuring to complete all fields before submitting.</p>
   </main><hr/><footer class="container text-center">
       <div class="row">
          <div class="col-xl-3 col-md-4"><img src="../images/SpectraLogo.png" height="20" alt="Spectra Logo"/>Copyright &copy;&nbsp;<script>document.write(new Date().getFullYear());</script></div><div class="col-xl-4 col-md-8">Spectra Auto Detail&mdash;Loganville, Georgia</div><div class="col-xl-2 col-md-4">tel:&nbsp;<a href="tel:7708510794">(770)&nbsp;851-0794</a></div><div class="col-xl-3 col-md-8">email:&nbsp;<a href="mailto:service@spectraautodetail.com">service@spectraautodetail.com</a></div>
    </div></footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>';
	    }
       }

	    else { 
	           echo '<head><link href="../styles/newstyles.css" rel="stylesheet" type="text/css">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="icon" type="image/png" href="../images/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="../styles/newstyles.css" rel="stylesheet" type="text/css"> 
</head>

<body class="bg-light" >
<nav class="navbar navbar-expand-sm navbar-light fixed-top border-bottom box-shadow" style="">
   <a class="navbar-brand" href="../"><img class="hovergrow" src="../images/www_spectraautodetail_com3.png" height="50" alt="Spectra Logo"/></a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../">Home</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="../about_us.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../packages.html">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact_us.html">Contact Us</a>
          </li>
        </ul>
         <!--
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
         -->
      </div>
    </nav><main id="main-mail-fail">
  <h2 class="h-title">Submission Failed! Please Try again</h2>
  
<p>We&apos;re very sorry, but something went wrong... Please go back to the <a href="../contact_us.html">contact page</a> and try again.</p>
   </main><hr/><footer class="container text-center">
       <div class="row">
          <div class="col-xl-3 col-md-4"><img src="../images/SpectraLogo.png" height="20" alt="Spectra Logo"/>Copyright &copy;&nbsp;<script>document.write(new Date().getFullYear());</script></div><div class="col-xl-4 col-md-8">Spectra Auto Detail&mdash;Loganville, Georgia</div><div class="col-xl-2 col-md-4">tel:&nbsp;<a href="tel:7708510794">(770)&nbsp;851-0794</a></div><div class="col-xl-3 col-md-8">email:&nbsp;<a href="mailto:service@spectraautodetail.com">service@spectraautodetail.com</a></div>
    </div></footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>';
	    }

//	} 
//      else if ($_POST['submit'] && $human != '4') {
//	    echo '<p>You answered the anti-spam question incorrectly!</p>';
//	}
//    } 
//    else {
//        echo '<p>You need to fill in all required fields!!</p>';
//    }
