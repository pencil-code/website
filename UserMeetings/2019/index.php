<?php
	set_include_path ("../../");
	include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<!-- HEADER -->
<h2>15<sup>th</sup> Pencil Code User Meeting 2019</h2>

<!-- DATE and VENUE -->
<p><b><u>DATE &amp; VENUE:</u></b>
<b>12<sup>th</sup> to 16<sup>th</sup> August 2019</b><br>
The meeting was held in <a href="https://www.espoo.fi/fi-FI">Espoo (Finland)</a>, and neighbouring <a href="https://www.hel.fi/helsinki/fi">Helsinki (Finland)</a> hosted by <a href="https://www.aalto.fi/department-of-computer-science">Department of Computer Science</a> of <a href="https://www.aalto.fi/">Aalto University</a>.
</p>

<!-- PROGRAM -->
<p><b><u>PROGRAM:</u></b><br>
The meeting involves technical and scientific presentations and workshops, open discussions about the Pencil Code, and sessions for coding and/or individual discussion.
Topics (subject to revision) will be listed in <a href="/UserMeetings/2019/agenda.txt">agenda.txt</a>;
the meeting schedule is below.
<p>
<table border="1" cellpadding="4" cellspacing="1">
<!-- <tr><td rowspan="9" bgcolor="#f0f0f0">Monday, 10</td> -->
<tr><td rowspan="9" bgcolor="#f0f0f0">Monday, 12</td>
    <td>am</td><td>Arrival (room available)</td></tr>
<tr><td>10:00</td><td>code workshop [Topic TBA] (Fred/Matthias) </td></tr>
<tr bgcolor="#6dc6ff"><td>14:00</td><td>Start/Welcome</td></tr>
<tr><td>14:05</td><td>Introduction, code updates &amp; statistics (Axel) </td></tr>
<tr><td>14:35</td><td>Steering Committee report, Terms of Reference, updating databases</td></tr>
<tr bgcolor="#6dc6ff"><td>15:00</td><td>Coffee</td></tr>
<tr><td>15:30</td><td>Status reports</td></tr>
<tr><td>16:00</td><td>Open discussion on agenda/schedule</td></tr>
<!-- <tr><td>17:00</td><td>Individual discussions/coding</td></tr> -->
<tr bgcolor="#6dc6ff"><td>18:00</td><td>Dinner</td></tr>

<!--<tr><td rowspan="15" bgcolor="#c0c0c0">Tuesday, 11</td>
    <td>09:00</td><td>Individual discussions/coding</td></tr> -->
<tr><td rowspan="12" bgcolor="#c0c0c0">Tuesday, 13</td>
    <td>09:30</td><td>Current placeholders cpoied from 2017 TBA</td></tr>
<tr><td>10:00</td><td>Pencil code with GPU/CUDA (Matthias) </td></tr>
<tr><td>10:30</td><td>Discussion on GPU/CUDA issues (Matthias) </td></tr>
<tr bgcolor="#6dc6ff"><td>11:00</td><td>Coffee</td></tr>
<tr><td>11:30</td><td>Discussion on particles modules (Nils) </td></tr>
<tr><td>12:30</td><td>Discussions on HDF5 (Fred, Philippe) </td></tr>
<tr bgcolor="#6dc6ff"><td>13:00</td><td>Lunch</td></tr>
<tr><td>14:00</td><td>python/pencilnew presentation (Simon) </td></tr>
<tr><td>14:45</td><td>Discussion on python issues (Simon) </td></tr>
<tr bgcolor="#6dc6ff"><td>15:00</td><td>Coffee </td></tr>
<tr><td>15:30</td><td>python/pencilnew workshop (Simon) </td></tr>
<!-- <tr><td>17:30</td><td>Individual discussions/coding</td></tr> -->
<tr bgcolor="#6dc6ff"><td>18:00</td><td>Dinner</td></tr>

<!-- <tr><td rowspan="6" bgcolor="#f0f0f0">Wednesday, 12</td>
    <td>09:00</td><td>Individual discussions/coding</td></tr> -->
<tr><td rowspan="5" bgcolor="#f0f0f0">Wednesday, 14</td>
    <td>09:30</td><td>Cosmic ray diffusion: particles &amp; continuum (Luiz, Andrew, Graeme)</td></tr>
<tr bgcolor="#6dc6ff"><td>10:15</td><td>Coffee</td></tr>
<tr><td>10:45</td><td>Overset grids in the Pencil code (J&oslash;rgen)</td></tr>
<tr><td>11:15</td><td>Code stability/timestep control/code units (Fred)</td></tr>
<tr bgcolor="#6dc6ff"><td>12:00</td><td>Outing to Hadrian's Wall</td></tr>

<!--<tr><td rowspan="12" bgcolor="#c0c0c0">Thursday 13</td>
    <td>09:00</td><td>Individual discussions/coding</td></tr> -->
<tr><td rowspan="10" bgcolor="#c0c0c0">Thursday 15</td>
    <td>09:30</td><td>Lean premixed combustion at elevated pressure (Xujiang)</td></tr>
<tr><td>10:00</td><td>Immersed boundary method in Pencil (Tai)</td></tr>
<tr><td>10:30</td><td>Discussion of boundary conditions (Matthias)</td></tr>
<tr bgcolor="#6dc6ff"><td>11:00</td><td>Coffee</td></tr>
<tr><td>11:30</td><td>Discussions on decoupling samples from website, special modules, auto-test </td></tr>
<tr bgcolor="#6dc6ff"><td>13:00</td><td>Lunch </td></tr>
<tr><td>14:00</td><td>Coding/individual discussions</td></tr>
<tr bgcolor="#6dc6ff"><td>15:15</td><td>Coffee</td></tr>
<tr><td>15:45</td><td>Coding/individual discussions</td></tr>
<tr bgcolor="#6dc6ff"><td>18:00</td><td>Dinner</td></tr>

<!-- <tr><td rowspan="7" bgcolor="#f0f0f0">Friday 14</td>
    <td>09:00</td><td>Individual discussions/coding</td></tr> -->
<tr><td rowspan="6" bgcolor="#f0f0f0">Friday 16</td>
    <td>09:30</td><td>Summary and outlook</td></tr>
<tr><td>10:15</td><td>Coding/individual discussions</td></tr>
<tr bgcolor="#6dc6ff"><td>10:45</td><td>Coffee</td></tr>
<tr><td>11:15</td><td>Coding/individual discussions</td></tr>
<tr bgcolor="#6dc6ff"><td>12:00</td><td>Meeting ends</td></tr>
<tr><td>pm</td><td>Departure (room still available)</td></tr>

</table>
</p>

<p><b><u>PARTICIPANTS:</u></b><br>
<p>
<?php
$row = 1;
if (($handle = fopen("https://docs.google.com/spreadsheets/d/1B-SXclNzuoq5IsP9GBmUdpx37b0Rb5QxlzNoCq6sCUA/edit?usp=sharing", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
?>
<!--
<table cellspacing="0px" cellpadding="2.5%">
<tr>
<td> Axel Brandenburg (Nordita)
<tr>
<td> Can Evirgen (Newcastle University)
<tr>
<td> Frederick Gent (Aalto University)
<tr>
<td> Nils Haugen (NTNU Trondheim)
<tr>
<td> Johannes Pekkil&auml; (Aalto University)
<tr>
<td> Matthias Rheinhardt (Aalto University)
</table>
</p>
<p>

Remote participants:
<p>
<table cellspacing="0px" cellpadding="2.5%">
<tr>
<td> TBA
<tr>
<td> Wladimir Lyra (Cal State Northridge)
<tr>
<td> Dhrubaditya Mitra (Nordita)
<tr>
<td> Andreas Schreiber (MPIA Heidelberg)
<tr>
-->
<!--
<td> J&ouml;rn Warnecke (MPS G&ouml;ttingen)
<tr>
<td> Chao-Chin Yang (Lund University)
-->
</table>
</p>

<p><b><u>NEXT MEETING:</u></b><br>

The next meeting should be in TBA, in 2020&hellip;

<!--
<p><b><u>REGISTRATION:</u></b><br>
If you would still like to register to participate,
please email <a href="mailto:g.r.sarson@ncl.ac.uk">g.r.sarson@ncl.ac.uk</a>.
There is no registration fee.
</p>
<p>
-->

<!--
<p><b><u>TRAVEL:</u></b><br>
The meeting will take place in the 
<a href="http://www.ncl.ac.uk/tour/academic/herschel-building/">Herschel Building</a>,
the home of the <a href="http://www.ncl.ac.uk/maths/">School of Mathematics &amp; Statistics</a> 
of 
<a href="http://www.ncl.ac.uk/">Newcastle University</a>.
The Herschel Building is opposite the Haymarket 
<a href="https://www.nexus.org.uk/metro">Metro</a> station,
in Newcastle City Centre.
The Metro system connects directly to the Airport (Newcastle International: NCL), 
and to the Central (Train) Station.
</p>

<p>
Details about getting to Newcastle and reaching the University can be found 
on the 
<a href="http://www.ncl.ac.uk/maths/about/finding_us.htm">School</a>
and 
<a href="http://www.ncl.ac.uk/about/visit/travel/">University</a>
travel pages.
A variety of 
<a href="http://www.ncl.ac.uk/about/visit/maps.htm">University maps</a>
are also available.
(Perhaps most useful is the
<a href="http://www.ncl.ac.uk/media/wwwnclacuk/abouttheuniversity/files/campus-map.pdf">Campus map</a>;
the Herschel Building is Building 17 on page 2 of this map.)
</p>

<p>
Other useful resources are available on the pages of the
<a href="http://www.newcastlegateshead.com/">Newcastle Gateshead Initiative</a>.
These include additional
<a href="http://www.newcastlegateshead.com/plan-your-visit/travel">Travel</a>
and
<a href="http://www.newcastlegateshead.com/plan-your-visit/maps">Map</a>
pages; and their
<a href="http://www.newcastlegateshead.com/plan-your-visit/travel/getting-around">Getting around</a>
page is a good introduction to the city's public transport options.
</p>
-->

<!--
<p><b><u>ACCOMMODATION:</u></b><br>

A large variety of accommodation is available in Newcastle.
Most of the options listed below have been used by University visitors before.
For some of these options,
standard University rates are available.
(The University rates listed are for a single room, but other rooms are available.
To ensure the use of these rates, it's simplest to go via our Office Staff;
so please email any booking requests to 
<a href="mailto:g.r.sarson@ncl.ac.uk">g.r.sarson@ncl.ac.uk</a>, 
and we'll arrange the booking.)
For the other options,
rates have not been agreed with these hotels;
the prices listed below are simply rough indications of the typical rates.

<p><b>City Centre</b><br>
Newcastle City Centre is 15-20 minutes walk from the University.

<p>
<table cellspacing="0px" cellpadding="2.5%">
<tr>
<td><a href="http://www.countyhotel.co.uk/">County Hotel</a>
<td>Victorian hotel, next to train station: University rate &pound;78 per night, incl. breakfast
<tr>
<td><a href="http://www.expressnewcastle.co.uk/">Holiday Inn Express Newcastle</a>
<td>central branch of chain: University rate &pound;57 per night, incl. breakfast
<tr>
<td><a href="https://www.motel-one.com/en/hotels/newcastle/hotel-newcastle/">Motel One</a>
<td>new, modern hotel: University rate &pound;82.20 per night, incl. breakfast
<tr>
<td><a href="http://www.premierinn.com/en/hotel/NEWNEW/newcastle-central">Premier Inn Newcastle Central</a>
<td>central branch of budget chain, ca. &pound;40-50 per night
<tr>
<td><a href="http://www.premierinn.com/en/checkHotel/NEWPTI/newcastle-quayside">Premier Inn Newcastle Quayside</a>
<td>Quayside branch of budget chain, ca. &pound;40-50 per night
<tr>
<td><a href="http://sleeperz.com/#newcastle">Sleeperz Newcastle</a>
<td>new, modern hotel, near train station, ca. &pound;60-70 per night
</table>
</p>

<p><b>Jesmond</b><br>
The suburb of Jesmond is 20-25 minutes walk from the University.

<p>
<table cellspacing="0px" cellpadding="2.5%">
<tr>
<td><a href="http://www.peelhotels.co.uk/hotels/caledonian-hotel-newcastle-upon-tyne-tyne-and-wear-england/">Caledonian Hotel</a>
<td>larger, midmarket hotel: University rate &pound;75 per night, incl. breakfast
<tr>
<td><a href="http://www.theosbornehotel.co.uk/">Osborne Hotel</a>
<td>basic, reliable hotel: University rate &pound;45 per night, incl. breakfast
</table>
</p>

<p><b>Whitley Bay</b><br>
The coastal town of Whitley Bay is a 25 minute Metro ride from the University. (And continues to boast a thriving MHD community, even if former residents Axel Brandenburg and Wolfgang Dobler are no longer local!)

<p>
<table cellspacing="0px" cellpadding="2.5%">
<tr>
<td><a href="http://www.themetropolitan.co/">Metropolitan</a>
<td>modernised bed and breakfast, ca. &pound;45 per night
<tr>
<td><a href="http://www.royalhotelwhitleybay.co.uk/">Royal Hotel</a>
<td>sea-front hotel, ca. &pound;45 per night
<tr>
<td><a href="http://www.yorkhousehotel.com/">York House Hotel</a>
<td>upmarket, family-run hotel, ca. &pound;100 per night
</table>
</p>

<p><b>Other options</b><br>
For a more comprehensive list (with booking links), please see the
<a href="http://www.newcastlegateshead.com/accommodation">Accommodation</a>
page of the Newcastle Gateshead Initiative.
</p>
<p>
-->

</div>

<?php
	include "inc/footer.inc";
 ?>
