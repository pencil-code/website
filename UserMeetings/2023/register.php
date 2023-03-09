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

<p><b><u>REGISTRATION FORM:</u></b><br>
<form action="https://www.PAB-Software.de/cgi/MyFormMailer.cgi" method="post" accept-charset="UTF-8">
<input type="hidden" name="recipient" value="@PC">
<input type="hidden" name="subject" value="Mitteilung von der Homepage">
<input type="hidden" name="required" value="affiliation,type,status">
<input type="hidden" name="redirect" value="http://pencil-code.nordita.org/UserMeetings/2023/thanks.php">
<pre>Full name:</pre>
<input type="text" size=40 name="realname"><br>
<pre>eMail:</pre>
<input type="text" size=40 name="email"><br>
<pre>Affiliation:</pre>
<input type="text" size=40 name="affiliation"><br>
<pre>Title of talk (optional):</pre>
<input type="text" size=40 name="title"><br>
<pre>Planned stay dates:</pre>
<select name="arrival">
<option value="1.9.">Fri, 1st Sep</option>
<option value="2.9.">Sat, 2nd Sep</option>
<option value="3.9.">Sun, 3rd Sep</option>
<option value="4.9." selected>Mon, 4th Sep</option>
<option value="5.9.">Tue, 5th Sep</option>
<option value="6.9.">Wed, 6th Sep</option>
<option value="7.9.">Thu, 7th Sep</option>
</select>
&nbsp;&nbsp;-&nbsp;&nbsp;
<select name="leave">
<option value="5.9.">Tue, 5th Sep</option>
<option value="6.9.">Wed, 6th Sep</option>
<option value="7.9.">Thu, 7th Sep</option>
<option value="8.9." selected>Fri, 8th Sep</option>
<option value="9.9.">Sat, 9th Sep</option>
<option value="10.9.">Sun, 10th Sep</option>
<option value="11.9.">Mon, 10th Sep</option>
</select>
<pre>desired number of T-Shirt and sizes (~20 &euro; each):</pre>
<input type="text" size=20 name="T-shirt">
</select>
<pre>Participation &amp; Experience level:</pre>
<select name="type">
<option value="in person" selected>in person</option>
<option value="online">online</option>
</select>
<select name="status">
<option value="average" selected>regular user</option>
<option value="beginner">beginner</option>
</select>
&nbsp;&nbsp;&nbsp;<font color="f00000"><b>=&gt;</b></font>&nbsp;&nbsp;&nbsp;<input type="submit" value="submit registration form">
</form>
</p>

</div>
<?php
    include "inc/footer.inc";
 ?>
