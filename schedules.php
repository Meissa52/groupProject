<?php
	
	include('views/header.php');
	include('views/sidebar.php');

?>
	<div class="right" id="scheduleScroll">
		<div class="row hide-on-med-and-down">
			<div class="col s 12 m12 l12">
				<h6 class="blue-text lighten-1"><strong>Schedules</strong></h6>
			</div>
			<div class="col s12 m12 l12">
				<a class="black-text" href="#TutoringSchedule">Tutoring</a>
			</div>
			<div class="col s12 m12 l12">
				<a class="black-text" href="#440Schedule">Room 440</a>
			</div>
			<div class="col s12 m12 l12">
				<a class="black-text" href="#446Schedule">Room 446</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<h1 class="center">Schedules</h1>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 l12">
				<h3 class="center blue-text lighten-1" id="TutoringSchedule"><strong>Tutoring</strong></h3>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 l12">
				<h5 class="center">CISY/Programming courses - Monday & Thursday : 6:00-7:30 - (SET 446)</h5>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 l12">
				<h3 id="440Schedule" class="center blue-text lighten-1" id="TutoringSchedule"><strong>Room 440</strong></h3>
			</div>	
		</div>
		<div class="row center">
			<div class="col s12 m12 l12">
				<table id="roomTables" class="hide-on-med-and-down">
					<tr>
						<th></th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
					</tr>
					<tr>
						<td>8:00 AM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>9:00 AM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="tableData green" rowspan="2">Intro to Web Page Development <br /> Section 70</td>
					</tr>
					<tr>
						<td>10:00 AM</td>
						<td rowspan="2" class="tableData red">Networking 1 Section 2</td>
						<td></td>
						<td rowspan="2" class="tableData red">Networking 1 Lab Section 71</td>
						<td></td>
					</tr>
					<tr>
						<td>11:00 AM</td>
						<td></td>
						<td></td>
						<td class="tableData green" rowspan="2">Intro to Web Page Development <br /> Section 71</td>
					</tr>
					<tr>
						<td>12:00 PM</td>
						<td></td>
						<td></td>
						<td></td>
						<td class="tableData green" rowspan="2">Intro to Web Page Development <br />Section 72</td>
					</tr>
					<tr>
						<td>1:00 PM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>2:00 PM</td>
						<td class="tableData red" rowspan="2">Networking 1 Section 1</td>
						<td rowspan="2" class="tableData blue">Web Programming 1</td>
						<td class="tableData red" rowspan="2">Networking 1 Lab Section 70</td>
						<td rowspan="2" class="tableData blue">Web Programming 1</td>
						<td></td>
					</tr>
					<tr>
						<td>3:00 PM</td>
						<td></td>
					</tr>
					<tr>
						<td>4:00 PM</td>
						<td class="tableData red" rowspan="2">Networking 1 Section 4</td>
						<td></td>
						<td class="tableData red" rowspan="2">Networking 1 Lab Section 73</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>5:00 PM</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>6:00 PM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
				<ul class="hide-on-large-only">
					<li><h6>Monday</h6></li>
					<li>10:00 AM - 12:00 PM : Networking 1 Section 2</li>
					<li>2:00 PM - 4:00 PM : Networking 1 Section 1</li>
					<li>4:00 PM - 6:00 PM : Networking 1 Section 4</li>
					<li><h6>Tuesday</h6></li>
					<li>2:00 PM - 4:00 PM : Web Programming 1</li>
					<li><h6>Wednesday</h6></li>
					<li>10:00 AM - 12:00 PM : Networking 1 Lab Section 71</li>
					<li>2:00 PM - 4:00 PM : Networking 1 Lab Section 70</li>
					<li>4:00 PM - 6:00 PM : Networking 1 Lab Section 73</li>
					<li><h6>Thursday</h6></li>
					<li>12:00 PM - 2:00 PM : Intro to Web Page Development Section 72</li>
					<li>2:00 PM - 4:00 PM : Web Programming 1</li>
					<li><h6>Friday</h6></li>
					<li>9:00 AM - 11:00 AM : Intro to Web Page Development Section 70</li>
					<li>11:00 AM - 1:00 AM : Intro to Web Page Development Section 71</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 l12">
				<h3 class="center blue-text lighten-1" id="446Schedule"><strong>Room 446</strong></h3>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 l12 hide-on-med-and-down">
				<table>
					<tr>
						<th></th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
					</tr>
					<tr>
						<td>8:00 AM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>9:00 AM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>10:00 AM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>11:00 AM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>12:00 PM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>1:00 PM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>2:00 PM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>3:00 PM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>4:00 PM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>5:00 PM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>6:00 PM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>		
	</div>
<?php
	include("views/footer.php");
?>