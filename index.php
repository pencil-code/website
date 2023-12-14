<!-- $Id$ -->
<?php
	$right_column = "home_right";
	include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<p>The <strong>Pencil Code</strong> is a high-order finite-difference code
for compressible hydrodynamic flows with magnetic fields.  It is
highly modular and can easily be adapted to different types of
problems.  The code runs efficiently under MPI on massively parallel
shared- or distributed-memory computers.</p>

<p>The Pencil Code or equivalent codes have been used for many
different applications in a (more or less) astrophysical context.
Examples are</p>

<table width="100%" border="0" cellpadding="0" cellspacing="0" summary="Some images for illustration" STYLE="padding-top:10px;">
<tr align="center">
	<td><img src="/pics/alpha.png" width="126" height="159" alt="[Alpha-effect in box]"></td>
	<td>
<!-- Please remove "comment sign" when the movie gets on the web
        <a href="http://pencil-code.nordita.org/movies/outflow/movie_1c.mpg">
-->
        <img src="/pics/outflc2.png" width="151" height="157" alt="[Outflow from accretion disc]">
<!-- Please remove "comment sign" when the movie gets on the web
        </a>
-->
       </td>
	<td><img src="/pics/Perm.png" width="123" height="157" alt="[Perm dynamo experiment]"></td>
</tr>
<tr align="center">
	<!-- IL: I think this three examples should link to three samples where are going to document -->
	<td><em class="larger">Turbulence<br>simulations</em></td>
	<td><em class="larger">Outflows from<br>accretion discs</em></td>
	<td><em class="larger">Dynamo<br>experiments</em></td>
</tr>
</table>
</div>

<div class="centerdivider"></div>
<div class="centcolumnpad">
Available as open source: <a href="https://pencil-code.org/download.php" target="_top">https://pencil-code.org/download.php</a>.
<br>
<br>
See also the <a href="https://github.com/pencil-code/pencil-code/#readme">README.md</a> for an entry to our GitHub papes.
</div>
<?php
	include "inc/footer.inc";
 ?>

