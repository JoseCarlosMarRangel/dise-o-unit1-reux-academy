<?php require '../login/abrir_session.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css">
<title>Roux Conference: Register</title>
</head>
<body id="page_register">

<?php include '../comun/header_register.php' ?>

<div class="wrapper">

  <div id="rotator"> <img src="../images/art01.jpg" alt="Artwork from show"> </div>
  <!-- Rotator -->
  <section id="main">
  
    <article>
      <h2>Register</h2>
      <p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below. </p>
    </article>
    <!-- About the event -->
    
    <article id="registrationform">
      <form method="POST" enctype="text/plain">
        <fieldset>
          <legend>Personal Info</legend>
          <ol>
            <li>
              <label for="myname">Name *</label>
              <input type="text" name="myname" id="myname" autofocus placeholder="Last, First" required>
            </li>
            <li>
              <label for="companyname">Company Name</label>
              <input type="text" name="companyname" id="companyname">
            </li>
            <li>
              <label for="myemail">Email *</label>
              <input type="email" name="myemail" id="myemail" required autocomplete="off">
            </li>
            <li>
              <div class="grouphead">Request Type</div>
              <ol>
                <li>
                  <input type="radio" name="requesttype" value="question" id="question">
                  <label for="question">Question</label>
                </li>
                <li>
                  <input type="radio" name="requesttype" value="comment" id="comment">
                  <label for="comment">Comment</label>
                </li>
              </ol>
            </li>
            <li>
              <label for="mycomments">Comment</label>
              <textarea name="mycomments" id="mycomments"></textarea>
            </li>
            <li class="singleline">
              <input type="checkbox" id="subscribe" name="subscribe" checked="" value="yes">
              <label for="subscribe">Subscribe to our mailing list?</label>
            </li>
            <li>
              <label for="reference">How did you hear about us?</label>
              <select name="reference" id="reference">
                <option>Choose...</option>
                <option value="friend">A friend</option>
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option>
              </select>
            </li>
          </ol>
          <input type="submit" value="Send">
        </fieldset>
      </form>
    </article>
  </section>
  <!-- maincontent -->
  
  <aside id="sidebar">
    
  

    <!-- Featured Artists -->
    <?php include '../comun/feature_artis_schedule.php'; ?>
    
    <!-- Coming to event --> 
  </aside>
  <!-- Sidebar -->
  
  <!--- Footer -->
  <?php include '../comun/footer_schedule.php'; ?>

</div>
</body>
</html>