<?php
			$connection=mysqli_connect("localhost","root","","Books");
			mysqli_select_db($connection,"feedback");

		/*	if (isset($_REQUEST["fid"])) {
				$id = $_REQUEST["fid"];
			}*/

			$str = "select * from feedback";
			$res = mysqli_query( $connection,$str );
			//data type of result is object 
		
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="css/hostels.css">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	
	<title></title>
</head>
<body>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i>9428764568</li>
        <li><i class="fa fa-envelope-o"></i>KnowledgeShare@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">e-Share</a></h1>
    </div>
    <div style="text-align:right">
    <ul class="nospace inline pushright">
      <?php
        if ( isset( $_SESSION['usr_name']) );
           else
         echo '<li><a class="btn" href="register3.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
        if( isset( $_SESSION['login_status']) ){
       
          echo '<li><a class="btn" href="self_profile.php?'.$_SESSION['usr_name'].'"><span class="glyphicon glyphicon-user"></span>'.$_SESSION['usr_name'].'</a></li>';
        
          echo '<li><a class="btn inverse" href="add_book.php"><span class="glyphicon glyphicon-plus"></span> Add Books</a></li>';
         echo '<li><a class="btn inverse" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
       }
        else
         echo '<li><a class="btn inverse" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
         ?>
    </ul>
</div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="index.php">Home</a></li>
      <li><a class="drop" href="#">Departments</a>
        <ul>
          <li><a href="cp.php">Computer Engineering</a></li>
          <li><a href="it.php">Information Technology</a></li>
          <li><a href="me.php">Mechanical Engineering</a></li>
          <li><a href="mc.php">Mechantronics</a></li>
          <li><a href="cl.php">Civil Engineering</a></li>
          <li><a href="ec.php">Electronics and communication</a></li>

        </ul>
      </li>
      <li><a class="drop" href="#">Category</a>
        <ul>
            <li><a class="drop" href="#">Books</a>
            <ul>
              <li><a href="technical.php">Technical books</a></li>
              <li><a href="journals.php">Journals</a></li>
              <li><a href="novels.php">Novels</a></li>
              <li><a href="biography.php">Biographies</a></li>
            </ul>
          </li>
          <li><a href="lecture.php">Lecture notes</a></li>
        </ul>
      </li>
      <li><a href="about.php">About us</a></li>
      <li><a href="Feedback1.php">Feedback</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="faq.php">FAQs</a></li>
    </ul>

    <!-- ################################################################################################ -->
  </nav>
</div>
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/stack-of-books.jpg');">

  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
    <article class="introtxt">
      <h2 class="heading">Feedback</h2>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="Feedback2.php"><i class="glyphicon glyphicon-pencil"><br>Give<br>Feedback</i></a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<br><br>
<article>
	<div class="feed">
	<table id="table1" style="text-align: center; font-size: 20px;">
  <hr>
			<tr>
				<td><b>UserName</b></td>
				<td><b>Feedback</b></td>
				
			</tr>

			<?php
		  		while($row = mysqli_fetch_array($res))
		  		{
			
                    ?>
			
               <tr>

           <td><?php echo $row["fname"] ?></td>
    

  <td><?php echo $row["fdata"] ?></td>
 </tr>
		
			<?php
			   }  		
			?>
		</table>
		</div>
</article>
		<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">Contact us</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          G H Patel College of Engineering and Technology &amp; Anand, 388120
          </address>
        </li>
        <li><i class="fa fa-phone"></i>9428764568<br></li>
        <li><i class="fa fa-envelope-o"></i>KnowledgeShare@gmail.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Departments</h6>
      <ul class="nospace linklist">
        <li><a href="cp.php">Computer Engineering</a></li>
        <li><a href="it.php">Information Technology</a></li>
        <li><a href="me.php">Mechanical Engineering</a></li>
        <li><a href="mc.php">Mechantronics Engineering</a></li>
        <li><a href="cl.php">Civil Engineering</a></li>
				<li><a href="ec.php">Electronics and communication</a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Stay Updated</h6>
      <p class="btmspace-30">Get mails of newly posted Books and Stationaries.</p>
      <form method="post" action="#">
        <fieldset>
          <legend style="color:#82B440" >Newsletter</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Knowledge Share</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>