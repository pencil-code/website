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
<input type="radio" name="type" value="in person"> in person, <input type="radio" name="type" value="online"> online<br>
<pre>Arrival date:</pre>
<input type="text" size=16 name="arrival"><br>
<pre>Leave date:</pre>
<input type="text" size=16 name="leave"><br>
<pre>Experience level:</pre>
<input type="radio" name="status" value="expert"> expert, <input type="radio" name="status" value="regular"> regular, <input type="radio" name="status" value="beginner"> beginner<br>
</form>
</p>

</div>
<?php
    include "inc/footer.inc";
 ?>
