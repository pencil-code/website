<?php
    set_include_path ("../../");
    include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<!-- HEADER -->
<h2>19<sup>th</sup> Pencil Code User Meeting 2023</h2>

<!-- REGISTRATION -->
<p><b><u>REGISTRATION:</u></b><br>
The registration deadline is the 30<sup>th</sup> July 2023.
</p>

<p><b><u>REGISTRATION FORM <font color="#f00000">(NOT YET OPERATIONAL!)</font>:</u></b><br>
<form action="https://www.PAB-Software.de/cgi/MyFormMailer.cgi" method="post" accept-charset="UTF-8">
<input type="hidden" name="recipient" value="@PC">
<input type="hidden" name="subject" value="Mitteilung von der Homepage">
<input type="hidden" name="required" value="affiliation,type,status">
<input type="hidden" name="redirect" value="./thanks.php">
<pre>Full name:</pre>
<input type="text" size=40 name="realname"><br>
<pre>eMail:</pre>
<input type="text" size=40 name="email"><br>
<pre>Affiliation:</pre>
<input type="text" size=40 name="affiliation"><br>
<pre>Participation:</pre>
<select name="type">
<option value="in person" selected>in person</option>
<option value="online">online</option>
</select>
<pre>Arrival date:</pre>
<select name="arrival">
<option value="1">1st Sep</option>
<option value="2">2nd Sep</option>
<option value="3">3rd Sep</option>
<option value="4" selected>4th Sep</option>
<option value="5">5th Sep</option>
<option value="6">6th Sep</option>
</select>
<pre>Leave date:</pre>
<select name="leave">
<option value="6">6th Sep</option>
<option value="7">7th Sep</option>
<option value="8" selected>8th Sep</option>
<option value="9">9th Sep</option>
<option value="10">10th Sep</option>
</select>
<pre>Experience level:</pre>
<select name="status">
<option value="expert">expert</option>
<option value="regular">regular</option>
<option value="beginner" selected>beginner</option>
</select>
<input type="submit" value="submit registration form">
</form>
</p>

</div>
<?php
    include "inc/footer.inc";
 ?>
