


 <ul class="links">
<li><a href="index.php">Home</a></li>
<li><a href="our_team.php">Our Team</a></li>
<li><a href="article_final.php">Articles</a></li>
<li><a href="#">Podcasts</a></li>
<li><a href="videos_page.php">Videos</a></li>
<li><a href="contactus_form.php">Contact Us</a></li>


<?php



if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
echo' <li ><a href="posts.php"> POST SOMETHING </a></li>';
// echo' <li><a href="#"> '.$_SESSION['username'] .'</a></li>';
echo'<li><a href="partials/_logout.php">Log Out</a></li> ';
}
else{
echo '<li><a href="login.php">Login</a></li>';
}
?>






</ul>


