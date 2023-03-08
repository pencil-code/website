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
<input type="hidden" name="redirect" value="./thanks.php">
Full name: <input type="text" size=40 name="realname"><br>
eMail: <input type="text" size=40 name="email"><br>
Affiliation: <input type="text" size=40 name="affiliation"><br>
Participation: <input type="radio" name="type" value="in person"> <input type="radio" name="type" value="online"><br>
Arrival date: <input type="text" size=40 name="arrival"><br>
Leave data: <input type="text" size=40 name="leave"><br>
Experience level: <input type="radio" name="status" value="expert"> <input type="radio" name="status" value="regular"> <input type="radio" name="status" value="beginner"><br>
</form>
</p>

</div>
<?php
    include "inc/footer.inc";
 ?>
