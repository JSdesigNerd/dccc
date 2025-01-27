<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jonny's Fürst Web Paige</title>
<style>
	body {background-color: aqua; align-content: center;}
	
	main {align-content: center; text-align: center; width: 600px; background-color: aliceblue; border-radius: 25px; margin-left: auto; margin-right: auto; padding: 12px; font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif"}
	form  {padding-left: 70px; text-align: left;}
	#acctSetup {color: #f00;}
	ul {text-align: left; padding-left: 30px}
	#image img {width:140px;}/* need to see why this doesn't function */
	#projectList {padding-left: 50px;}
	</style>	
	
</head>

<body>
	<main>
	<header></header>
	<article>
		<h1>This is by far the most important thing on this web page, you betcha!</h1>
		<p>As of right now I will continue to develop the seond page linked below instead of co-developing two pages for the same purpose.</p>
		<div id="img-div">
	 <img style="text-align:center" src="Jamr8r-Icon-01.jpg" id="image" alt="This is the jamr8r logo/icon" title="Go Jamr8r!">	
		</div>
		<h2>But this list is pretty important too, isn't it?</h2>
		<div id="projectList">
		<ul>
			<li><a href="index_2.php">Link to file but separate CSS doc</a></li>
			<li><a href="javascript_jquery/book_apps/ch01/email_list/index.html">Project files from Murach publisher</a></li>
			<li>Project 3</li>
		</ul>
			</div>
		<h2>Although, TBH this set of information is just as important...</h2> <p>as the list above, contextually at least. Position on  page may still make the h2 above more relevant to search results (SEO baby!!)</p>
		<p>Do we really need to 'splain SEO? Y'all know what we're saying here. This page is about being FOUND. <span id="significant">I once was lost but now I'm OPTIMIZED!</span></p>
		<h3 id="acctSetup">Start your Jamr8r account here!</h3>
		<form>
			<div>
			<label for="screenName">Screen Name</label>
			<input type="text" id="screenName" name="screenName">
			<span id=screenNameError>*</span>
			</div>
			<div>
			<label for="email1">Preferred Email</label>
			<input type="text" id="email1" name="email1">
			<span id=email1Error>*</span>
			</div>
			<div>
			<label for="email2">Confirm Preferred Email</label>
			<input type="text" id="email2" name="email2">
			<span id=email2Error>*</span>
			</div>
			<div>
			<label for="password">Password</label>
			<input type="password" id="password" name="password">
			<span id=passwordError>*</span>
			</div>
			<label for="submit">R U ready to start Jammin?</label>
			<input type="submit" id="Jam On!" value="Jam On!">
			<input type="button" id="clearForm" value="Clear Form">		
			</div>
		</form>
		
	</article>
	<footer></footer>
	<!-- JScript elements will go here -->

		</main>
</body>
</html>