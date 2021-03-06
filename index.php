<?php
	session_start();
	include_once("db.php");
?>

<html>
<head>
	<title>Smart Scheduler</title>
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<nav>
		<ul>
			<li><span onclick="openNav1()"><b>Select Your Course</b></span></li>
			<li><span onclick="instructions()">Instructions</span></li>
		<ul>
	</nav>
	<br/>
	<br/>
	<!--Instructions carousel-->
	<div id="instruction" class="overlay">

		<div id="instructionsCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
			<!--Carousel indicators-->
			<ol class="carousel-indicators">
			  <li data-target="#instructionsCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#instructionsCarousel" data-slide-to="1"></li>
			  <li data-target="#instructionsCarousel" data-slide-to="2"></li>
			  <li data-target="#instructionsCarousel" data-slide-to="3"></li>
			  <li data-target="#instructionsCarousel" data-slide-to="4"></li>
			  <li data-target="#instructionsCarousel" data-slide-to="5"></li>
			  <li data-target="#instructionsCarousel" data-slide-to="6"></li>
			  <li data-target="#instructionsCarousel" data-slide-to="7"></li>
			</ol>

			<!--Slides-->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
				<img src="images/background.png" style="width:50%;height:60%;opacity:0">
				<div class="carousel-caption">
					<img src="images/1.png">
					<h3>Begin by selecting your course</h3>
					<p>
					After selecting your course through the button shown above, your course's modules will be loaded in the right table.
					</p>
				</div>
			  </div>

			  <div class="item">
			  	<img src="images/background.png" style="width:50%;height:60%;opacity:0">
				<div class="carousel-caption">
					<img src="images/2.png">
					<h3>Select any category on the right table to view your modules</h3>
					<p>
					Modules in green will be draggable and are allowed to be scheduled in the left table.
					<br/>
					We assume that you have cleared the relevant `A` level qualifications and number of MCs required to take the module.
					<br/>
					Please edit your planner accordingly if you have not met these assumptions.
					</p>
				 </div>
			  </div>

			  <div class="item">
				<img src="images/background.png" style="width:50%;height:60%;opacity:0">
				<div class="carousel-caption">
					<img src="images/3.png">
					<h3>Modules in red are not allowed to be scheduled</h3>
					<p>
					Modules will be red if their pre-requisites have not been met.
					<br/>
					Thus, they will not be allowed to be scheduled in the left table.
					</p>
				 </div>
			  </div>

			  <div class="item">
				<img src="images/background.png" style="width:50%;height:60%;opacity:0">
				<div class="carousel-caption">
					<img src="images/4.png">
					<h3>Modules in red will turn green once their pre-requisites have been met</h3>
					<p>
					After scheduling their pre-requisites in the left table, modules with their pre-requisites met will turn green and be allowed to be scheduled in the left table.
					</p>
				 </div>
			  </div>

			  	<div class="item">
				<img src="images/background.png" style="width:50%;height:60%;opacity:0">
				<div class="carousel-caption">
					<img src="images/5.png">
					<h3>Modules will turn blue if any of their preclusions have been scheduled</h3>
					<p>
					These modules will then not be allowed to be scheduled in the left table.
					</p>
				 </div>
			  </div>

			  <div class="item">
				<img src="images/background.png" style="width:50%;height:60%;opacity:0">
				<div class="carousel-caption">
					<img src="images/6.png">
					<h3>A reminder alert will show when you schedule a module with co-requisite(s)</h3>
					<p>
					You will need to take the co-requisite(s) in the same semester as the module you have just scheduled.
					</p>
				 </div>
			  </div>
			  
			  <div class="item">
				<img src="images/background.png" style="width:50%;height:60%;opacity:0">
				<div class="carousel-caption">
					<img src="images/7.png">
					<h3>There will be an MCs counter on the top bar which automatically updates whenever you schedule a module</h3>
					<p>
					This counts the number of MCs you have scheduled and the number will turn green once you have scheduled 160 MCs.
					</p>
				 </div>
			  </div>
			  
			  <div class="item">
				<img src="images/background.png" style="width:50%;height:60%;opacity:0">
				<div class="carousel-caption">
					<img src="images/8.png">
					<h3>You may reset or save your timetable through the buttons that will be available on the top bar</h3>
					<p>
					If you wish to redo your timetable or save your schedule for future reference, you may do so through these buttons.
					</p>
				 </div>
			  </div>

			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#instructionsCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#instructionsCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		  </div>
		  <a href="javascript:void(0)" class="closebtn" onclick="closeInstruction()">x</a>
	</div>

	<div id="faculties" class="overlay">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">x</a>
	  <section class="selectCourse1">
		<span onclick="openNav2()">Arts & Social Sciences</span>
		<div id="fass" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">x</a>
		  <section class="overlay-content">
			<a href="#">Chinese Language</a>
			<a href="#">Chinese Studies</a>
			<a href="#">Japanese Studies</a>
			<a href="#">Malay Studies</a>
			<a href="#">South Asian Studies</a>
			<a href="#">Southeast Asian Studies</a>
			<a href="#">English Language</a>
			<a href="#">English Literature</a>
			<a href="#">History</a>
			<a href="#">Philosophy</a>
			<a href="#">Theatre Studies</a>
			<a href="#">Communications & New Media</a>
			<a href="#">Economics</a>
			<a href="#">Geography</a>
			<a href="#">Political Science</a>
			<a href="#">Psychology</a>
			<a href="#">Social Work</a>
			<a href="#">Sociology</a>
			<a href="#">Environmental Studies in Geography</a>
		  </section>
		</div>
		<br />
		<span onclick="openNav3()">Business & Accountancy</span>
		<div id="ba" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">x</a>
		  <section class="overlay-content">
			<a href="#">Business Administration (Accountancy)</a>
			<a href="#">Business Administration</a>
		  </section>
		</div>
		<br />
		<span onclick="openNav4()">Computing</span>
		<div id="soc" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">x</a>
		  <section class="overlay-content">
				<?php
					$sql_all_soc = "SELECT * FROM courses WHERE faculty='soc' ORDER BY id ASC";
					$res = mysqli_query($db, $sql_all_soc) or die(mysql_error());

					$courses = "";

					if(mysqli_num_rows($res) > 0) {
						while($row = mysqli_fetch_assoc($res)) {
							$id = $row['id'];
							$name = $row['name'];
							$courses .= "<div><a href='view_mods.php?pid=$id'>$name</a></div>";
						}
						echo $courses;
					}
				?>
		  </section>
		</div>
		<br />
		<span onclick="openNav5()">Dentistry</span>
		<div id="dentistry" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav5()">x</a>
		  <section class="overlay-content">
			<a href="#">Dentistry</a>
		  </section>
		</div>
		<br />
		<span onclick="openNav6()">Design & Environment</span>
		<div id="sde" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav6()">x</a>
		  <section class="overlay-content">
			<a href="#">Architecture</a>
			<a href="#">Industrial Design</a>
			<a href="#">Project & Facilities Management</a>
			<a href="#">Real Estate</a>
		  </section>
		</div>
		<br />
		<span onclick="openNav7()">Engineering</span>
		<div id="engineering" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav7()">x</a>
		  <section class="overlay-content">
			<a href="#">Engineering</a>
			<a href="#">Biomedical Engineering</a>
			<a href="#">Chemical Engineering</a>
			<a href="#">Civil Engineering</a>
			<a href="#">Engineering Science</a>
			<a href="#">Environmental Engineering</a>
			<a href="#">Electrical Engineering</a>
			<a href="#">Industrial and System Engineering</a>
			<a href="#">Material Science & Engineering</a>
			<a href="#">Mechanical Engineering</a>
			<a href="#">Computer Engineering</a>
		  </section>
		</div>
		<br />
		<span onclick="openNav8()">Law</span>
		<div id="law" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav8()">x</a>
		  <section class="overlay-content">
			<a href="#">Undergraduate Law Programme</a>
			<a href="#">Graduate LL.B. Programme</a>
		  </section>
		</div>
		<br />
		<span onclick="openNav9()">Medicine</span>
		<div id="med" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav9()">x</a>
		  <section class="overlay-content">
			<a href="#">Medicine</a>
		  </section>
		</div>
		<br />
		<span onclick="openNav10()">Nursing</span>
		<div id="nursing" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav10()">x</a>
		  <section class="overlay-content">
			<a href="#">Nursing</a>
		  </section>
		</div>
		<br />
		<span onclick="openNav11()">Music</span>
		<div id="music" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav11()">x</a>
		  <section class="overlay-content">
			<a href="#">Music</a>
		  </section>
		</div>
		<br />
		<span onclick="openNav12()">Science</span>
		<div id="science" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav12()">x</a>
		  <section class="overlay-content">
			<a href="#">Applied Mathematics</a>
			<a href="#">Applied Mathematics with specialisation in Mathematical Modelling and Data Analytics</a>
			<a href="#">Applied Mathematics with specialisation in Operations Research and Financial Mathematics</a>
			<a href="#">Chemistry</a>
			<a href="#">Chemistry (with specialisation in Materials Chemistry)</a>
			<a href="#">Chemistry (with specialistaion in Medicinal Chemistry)</a>
			<a href="#">Chemistry (with specialisation in Environment and Energy)</a>
			<a href="#">Computational Biology</a>
			<a href="#">Data Science and Analytics</a>
			<a href="#">Food Science and Technology</a>
			<a href="#">Life Sciences</a>
			<a href="#">Life Sciences (with specialisation in Biomedical Science)</a>
			<a href="#">Life Sciences (with specialisation in Environmental Biology)</a>
			<a href="#">Life Sciences (with specialisation in Molecular & Cell Biology)</a>
			<a href="#">Mathematics</a>
			<a href="#">Physics</a>
			<a href="#">Physics (with specialisation in Astrophysics)</a>
			<a href="#">Physics (with specialisation in Physics in Technology)</a>
			<a href="#">Quantitative Finance</a>
			<a href="#">Statistics</a>
			<a href="#">Statistics (with specialisation in Biostatistics)</a>
			<a href="#">Statistics (with specialisation in Finance and Business Statistics)</a>
			<a href="#">Pharmacy</a>
			<a href="#">Environmental Studies in Biology</a>
		  </section>
		</div>
		<br />
		<span onclick="openNav13()">Pharmacy</span>
		<div id="pharmacy" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav13()">x</a>
		  <section class="overlay-content">
			<a href="#">Pharmacy</a>
		  </section>
		</div>
	  </section>
	</div>

	<div class="col-sm-9">
		<table border=3 height="900px" width="100%" >
			<tr class="mainTimetable1">
				<th colspan="2">&nbsp;</th>
				<th style="text-align:center">1</th>
				<th style="text-align:center">2</th>
				<th style="text-align:center">3</th>
				<th style="text-align:center">4</th>
				<th style="text-align:center">5</th>
				<th style="text-align:center">6</th>
			</tr>
			<tr class="mainTimetable2">
				<th rowspan="2" style="text-align:center;background-color: white">Year 1</th>
				<th style="text-align:center">Semester 1</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr class="mainTimetable1">
				<th style="text-align:center">Semester 2</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr class="mainTimetable2">
				<th rowspan="2" style="text-align:center;background-color: white">Year 2</th>
				<th style="text-align:center">Semester 1</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr class="mainTimetable1">
				<th style="text-align:center">Semester 2</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr class="mainTimetable2">
				<th rowspan="2" style="text-align:center;background-color: white">Year 3</th>
				<th style="text-align:center">Semester 1</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr class="mainTimetable1">
				<th style="text-align:center">Semester 2</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr class="mainTimetable2">
				<th rowspan="2" style="text-align:center;background-color: white">Year 4</th>
				<th style="text-align:center">Semester 1</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr class="mainTimetable1">
				<th style="text-align:center">Semester 2</th>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
	</div>

	<div class="col-sm-3">
		<table border=3  width="100%">
			<tr class="modsTableHeader">
				<td>
				<h1 style="text-align: center">Modules to Clear</h1>
				</td>
			</tr>
			<tr class="modulesToClear">
				<td>
				<h1 style="text-align: center">Cores</h1>
				<div class="mods">Please select a course.</div>
				</td>
			</tr >
			<tr class="modulesToClear">
				<td id="electives">
				<h1 style="text-align: center">Electives</h1>
				<div class="mods">Please select a course.</div>
				</td>
			</tr>
			<tr id="unrestricted" class="modulesToClear">
				<td>
				<h1 style="text-align: center">Unrestricted Electives</h1>
				<div class="mods">Please select a course.</div>
				</td>
			</tr>
			<tr id="GEMs" class="modulesToClear">
				<td>
				<h1 style="text-align: center">GEMs</h1>
				<div class="mods">Please select a course.</div>
				</td>
			</tr>
		</table>
	</div>

	<footer>Smart Scheduler 2016&copy</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="javaScript.js"></script>
</body>
</html>
