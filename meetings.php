<!-- $Id$ -->
<?php
	include "inc/header.inc";

	// Make the code cleaner
	foreach (array ('title','date','link','notes','agenda','videos','city','venue','country') as $item) define ($item, $item);

	$meetings = array (
		array ( title => "15th meeting", date => "12-16 Aug, 2019", link => "https://agenda.albanova.se/conferenceDisplay.py?confId=6785", agenda => "/UserMeetings/2019/agenda.txt", city => "Espoo", venue => "Aalto University", country => "Finland" ),
		array ( title => "14th meeting", date => "11-15 Jun, 2018", link => "http://agenda.albanova.se/conferenceDisplay.py?confId=6539", agenda => "/UserMeetings/2018/agenda.txt", city => "Boulder", venue => "University of Colorado", country => "USA" ),
		array ( title => "13th meeting", date => "10-14 Jul, 2017", link => "/UserMeetings/2017/", agenda => "/UserMeetings/2017/agenda.txt", city => "Newcastle", venue => "Newcastle University", country => "UK" ),
		array ( title => "12th meeting", date => "08-12 Aug, 2016", link => "/UserMeetings/2016/", agenda => "/UserMeetings/2016/agenda.txt", city => "Graz", venue => "Space Research Institute, Academy of Sciences", country => "Austria" ),
		array ( title => "11th meeting", date => "11-15 May, 2015", link => "http://agenda.albanova.se/conferenceDisplay.py?confId=4701", agenda => "/UserMeetings/2015/agenda.txt", city => "Trondheim", venue => "Norwegian University of Science and Technology", country => "Norway" ),
		array ( title => "10th meeting", date => "07-11 Jul, 2014", link => "http://agenda.albanova.se/conferenceDisplay.py?confId=4213", agenda => "/UserMeetings/2014/agenda.txt", city => "Göttingen", venue => "Max Planck Institute for Solar System Research", country => "Germany" ),
		array ( title =>  "9th meeting", date => "17-20 Jun, 2013", link => "http://www.astro.lu.se/~michiel/PC2013/", agenda => "/UserMeetings/2013/agenda.txt", city => "Lund", venue => "Lund Observatory", country => "Sweden" ),
		array ( title =>  "8th meeting", date => "18-21 Jun, 2012", link => "http://agenda.albanova.se/conferenceDisplay.py?confId=3128", agenda => "/UserMeetings/2012/agenda.txt", city => "Helsinki", venue => "Physics Department", country => "Finland" ),
		array ( title =>  "7th meeting", date => "24-28 Oct, 2011", link => "http://norlx51.albanova.se/~dintrans/Meeting2011/", agenda => "/UserMeetings/2011/agenda.txt", city => "Toulouse", venue => "Observatoire Midi-Pyr&eacute;n&eacute;es", country => "France" ),
		array ( title =>  "6th meeting", date => "26-30 Jul, 2010", link => "http://www.research.amnh.org/astrophysics/pencil/pencil.html", notes => "/UserMeetings/2010/", city => "New York", venue => "American Museum of National History", country => "USA" ),
		array ( title =>  "5th meeting", date => "24-28 Aug, 2009", link => "http://agenda.albanova.se/conferenceDisplay.py?confId=1190", agenda => "/UserMeetings/2009/agenda.txt", city => "Heidelberg", venue => "Max Planck Institute for Astronomy", country => "Germany" ),
		array ( title =>  "4th meeting", date => "19-22 Aug, 2008", link => "http://www.strw.leidenuniv.nl/~ajohan/pencil2008/", agenda => "/UserMeetings/2008/agenda.txt", city => "Leiden", venue => "Leiden Observatory", country => "Netherlands" ),
		array ( title =>  "3rd meeting", date => "14-17 Aug, 2007", link => "http://agenda.albanova.se/conferenceDisplay.py?confId=185", notes => "/UserMeetings/2007/", city => "Stockholm", venue => "Nordita", country => "Sweden" ),
		array ( title =>  "2nd meeting", date => "13-15 Jul, 2006", link => "http://www.nordita.dk/conference/PencilCode06/", videos => "http://videos.albanova.se/conference/PencilCode06/", city => "Copenhagen", venue => "Nordita", country => "Denmark" ),
		array ( title =>  "1st meeting", date => "26-28 Jun, 2005", link => "http://www.nordita.org/~brandenb/get-together/meetings/pencil-workshop05a.html", notes => "", city => "Copenhagen", venue => "Nordita", country => "Denmark" ),
	);
 ?>
<div class="centcolumnpad">
<h2>Meetings</h2>

<p align="center">
<img src="/pics/2006b.jpg" width="240" height="180" border="0" alt="2006"><img src="/pics/2011a.jpg" width="240" height="180" border="0" alt="2011"><img src="/pics/2011b.jpg" width="240" height="180" border="0" alt="2011">
</p>

<table border="0" cellspacing="10" cellpadding="0">
<?php
	foreach ($meetings as $meeting) {
 ?>
<tr>
<td align="right" STYLE="white-space:nowrap;"><?php ifecho ("", @$meeting['date'], ":"); ?></td>
<td STYLE="white-space:nowrap;"><?php echolink (@$meeting['link'], @$meeting['title']); ?></td>
<td STYLE="white-space:nowrap;"><?php
	iflink (@$meeting['notes'], "[notes]");
	iflink (@$meeting['agenda'], "[agenda]");
	iflink (@$meeting['videos'], "[videos]"); ?></td>
<td STYLE="font-size:12px;"><?php
	ifecho ("in ", @$meeting['city'], "");
	ifecho (", ", @$meeting['venue'], "");
	ifecho (" (", @$meeting['country'], ")"); ?>.</td>
</tr>
<?php
	}
 ?>
</table>

<p align="center">
<img src="/pics/2005a.jpg" width="240" height="180" border="0" alt="2006"><img src="/pics/2005b.jpg" width="240" height="180" border="0" alt="2006"><img src="/pics/2006a.jpg" width="240" height="180" border="0" alt="2006">
</p>
</div>
<?php
	include "inc/footer.inc";
 ?>

