<style type="text/css">
*{
    margin: 0;
    padding: 0;
    border: 0;
}



header{
    position: fixed;
    width: 100%;
    top: 0;
    background: #efa3a3;
    padding: 20px;
}

header a{
    color: white;
    text-decoration: none;
}

header li, nav{
    display: inline-block;
    margin: 0 10px;
    font-family: 'Noto Sans', sans-serif;
}
header nav{
    margin-left: 40px;
}

.container{
    max-width: 800px;
    margin: 0 auto;
    padding-top: 220px;
}
body {
    background-color: #d9d4d6;
    color: darkslategray;}
h1 {
    font-family: 'Noto Sans', sans-serif;
    margin: 20px, 0;}

h2 {
    font-family: 'Noto Sans', sans-serif;
    margin-bottom: 10px;}

p {
    font-family: 'Assistant', sans-serif;}

footer {
    position: fixed;
    width: 100%;
    bottom: 0;
    background: #efa3a3;
    padding: 5px;
    color: white;
}
</style>

<header> 
      <nav>
      <a href="index.html"><img src="images/gb-logo.png" alt="Logo" width="150"></a>
        <ul>
          <li><a href="about.html">About</a></li>
          <li><a href="recipes.html">Recipes</a></li>
          <li><a href="wine.html">Wine</a></li>
          <li><a href="contact.html">Subscribe</a></li>
        </ul>
      </nav>
 </header>

<div class="container">
<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
    <p>This page designed by Emily Person</p>
  </footer>