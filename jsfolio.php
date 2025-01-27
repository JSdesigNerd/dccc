<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jonny's Portfolio Paygie</title>
<link rel="stylesheet" href="i2CssStylz.css">
	
	<style>#acctSetup {display:none;}</style>

</head>

<body>
	<main>
		<div id="main">
	<header></header>
	<article>
		<h1>Jonny Shaw&rsquo;s Portfolio</h1>
		<div id="img-div">
	 <img style="text-align:center" src="Jamr8r-Icon-01.jpg" id="image" alt="This is the jamr8r logo/icon" title="Go Jamr8r!">	
		</div>
		<h2>DCCC CS214 Project List</h2>
		<div id="projectList">
		<ul>
			<li><a href="jsfolio.php">Lab 1</a> - HTML Review and Git Hosting (this page) | <a href="https://canvas.dccc.edu/courses/45551/assignments/1070689" target="_blank">asgmt</a></li>
			<a href="">Lab 2a</a> - Creating your Portfolio Web Page (also this page) | <a href="https://canvas.dccc.edu/courses/45551/assignments/1070689" target="_blank">asgmt</a> <p>Note this page passes the w3 CSS validator but when tested last the HTML validator had an issue "¿finding?" the page which I don't yet understand. I think it would pass.</p></li>
			<li><a href="">Lab 2?*</a> - Number Tricks</li>
			<li><a href="">Lab 3</a> - Number Tricks Enhanced</li>
			<li><a href="">Lab 4</a> - MadLibs</li>
			<li><a href="">Lab 5</a> - Debugging</li>
			<li><a href="">Lab 6</a> - Test Score App</li>
			<li><a href="">Lab 7</a> - Super Hero Cycling Banners</li>
			<li><a href="">Lab 8</a> - The Changing Caterpillar</li>
			<li><a href="">Lab 9</a> - Monster Mash</li>
			<li><a href="">Lab 10</a> - Account Creation Form Validation</li>
			<li><a href="">Lab 11</a> - Alien Sighting Form</li>
		</ul>
			<h4>If you have time, please review my work. I hope you enjoy!</h4>
			<h2>DCCC CS214 Resources</h2>
		<ul>
			<li><a href="https://validator.w3.org">W3 HTML Validator</a></li>
			<li><a href="https://jigsaw.w3.org/css-validator/">CSS HTML Validator</a></li>
			<li><a href="https://canvas.dccc.edu/courses/45551/pages/set-up-web-hosting-using-github-pages">GitHub Guide</a></li>
		</ul>
			</div>
		<h2>Current Note to Dr. Todd Price</h2>
		<p>I'm aware of the requirement / request for use of Githib though it appears both of the web pages specify they may be on our own server or github. If there are advantages I will put in the effort to migrate my contents to Github but considering my delayed start and focus on some most critical aspects of the course I knew I needed to develop an html document tree that gets me started on coding. I hope the lack of github specific integration at this time won't count against my grade.</p>
		<p> <span id="significant">Onward and upward.</span></p>
		<p> * Note also discrepencies between the list from THIS 
			<a href="https://canvas.dccc.edu/courses/45551/assignments/1070689">&ldquo;MORE SPECIFIC&rdquo; dccc assignment page</a> vs This current <a href="https://canvas.dccc.edu/courses/45551/assignments">"Assignments" overview as shown here</a>. I'll try to guide my project list  <a href="https://canvas.dccc.edu/courses/45551/assignments">to this list?</a></p>
		<h3>I might add a (currently hidden) signup form below...</h3>
		<form  id="acctSetup">
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
			<input type="submit" id="JamOn" value="JamOn">
			<input type="button" id="clearForm" value="Clear Form">	
			</div>
		</form>
	</article>
	<footer></footer>
	<!-- Will JScript elements will go here? -->
		</div>
		</main>
</body>
	<!-- Or will JScript elements will go here? -->
	<!-- script src="email_list.js"></script-->
	<!-- script src="email_list/jamList.js"</script-->
</html>