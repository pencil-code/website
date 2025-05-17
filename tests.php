<!-- $Id$ -->
<?php
	 include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<h2>Automatic tests</h2>

<p>To ensure reproducability, the
<a href="http://pencil-code.nordita.org/">Pencil Code</a>
is tested for a number of sample applications. Tests run in different
time intervals and will start only of there are new updates to the code.
This is important for us in order to make sure certain
improvements in some parts of the code do not affect the functionality
of other parts. For other users who suspect that a new problem has emerged
it could be useful to first see whether this problem also shows up in
our own tests. The latest test results for a can be seen online:</p>

<ul STYLE="font-size:13px;">
<li><a href="https://github.com/pencil-code/pencil-code/commits/master/">Travis</a>, basic, minutely (<a href="https://app.travis-ci.com/github/pencil-code/pencil-code">latest checkin job log</a>)
<!-- Minutely test -->
<li><a href="https://norlx51.nordita.org/tests/basic/">Nordita: GNU gfortran 13.3.0 (norlx51, by Philippe/Axel)</a>, basic, minutely (<a href="https://norlx51.nordita.org/tests/basic-previous/">previous run</a>)
<!-- Hourly test -->
<li><a href="https://norlx51.nordita.org/tests/normal/">Nordita: GNU gfortran 13.3.0 (norlx51, by Philippe/Axel)</a>, normal, **:15 (<a href="https://norlx51.nordita.org/tests/normal-previous/">previous run</a>)
<!-- Daily test -->
<li><a href="https://norlx51.nordita.org/tests/extended/">Nordita: GNU gfortran 13.3.0 (norlx51, by Philippe/Axel)</a>, extended, **:55 (<a href="https://norlx51.nordita.org/tests/extended-previous/">previous run</a>)
<!-- Philippe Bourdin -->
<li><a href="https://www.PAB-Software.de/Pencil/minimal/">GNU gfortran 9.4.0, (Ubuntu, by Philippe Bourdin)</a>, minimal, minutely (<a href="https://www.PAB-Software.de/Pencil/minimal-previous/">previous run</A>)
<li><a href="https://www.PAB-Software.de/Pencil/daily/">GNU gfortran 9.4.0, (Ubuntu, by Philippe Bourdin)</a>, all tests, every 6 hours (<a href="https://www.PAB-Software.de/Pencil/daily-previous/">previous run</A>)
<!-- Hourly test -->
<li><a href="http://norlx29.nordita.org/~brandenb/pencil-code/tests/hourly/">Nordita: GNU gfortran 6.4.0 with OpenMPI (old server, by Wolfgang/Axel)</a>, hourly (<a href="http://norlx29.nordita.org/~brandenb/pencil-code/tests/hourly-previous/">previous run</a>)
<!-- Daily test -->
<li><a href="http://norlx29.nordita.org/~brandenb/pencil-code/tests/daily/">Nordita: GNU gfortran 6.4.0 with OpenMPI (old server, by Wolfgang/Axel)</a>, daily (<a href="http://norlx29.nordita.org/~brandenb/pencil-code/tests/daily-previous/">previous run</a>)
<!-- Boris Dintrans (March 2021: 404 not found) -->
<!--li><a href="http://userpages.irap.omp.eu/~bdintrans/tmp/test_runs.html">Toulouse: Intel ifort v12.1.3.293 (Ubuntu 13.10, by Boris Dintrans)</a>, daily standard level 2 test -->
<!-- Boris Dintrans additional (March 2021: 404 not found) -->
<!-- li><a href="http://userpages.irap.omp.eu/~bdintrans/tmp/our_tests.html">Toulouse: Intel ifort v12.1.3.293 (Ubuntu 13.10, by Boris Dintrans)</a>, daily additional tests -->
<!-- Sven Bingert -->
<!-- li><a href="http://www.svenbingert.de/auto-test.html">Intel ifort v11.1 with MPICH2 (Ubuntu 13.04, by Sven Bingert)</a>, standard and personal tests -->
<!-- Nordita PowerMac
<li><a href="http://norlx51.nordita.org/~brandenb/pencil-code/tests/nor52.html">Nordita PowerMac: g95 with OpenMPI (MacOS X, by Axel)</a> [<a href="http://norlx51.nordita.org/~brandenb/pencil-code/tests/nor52_previous.html">previous</a>]
-->
<!-- Anders Johansen
<li><a href="http://www.astro.ku.dk/~ajohan/pencil-test.html">GNU gfortran with OpenMPI (by Anders Johansen)</a>
-->
<!--
<li><a href="http://www.nordita.org/~brandenb/pencil-code/normac.html">Nordita Mac Mini: g95 with lammpi (MacOS X, by Axel)</a>
[<a href="http://www.nordita.org/~brandenb/pencil-code/normac_previous.html">previous</a>]
<li><a href="http://www.nordita.org/~brandenb/pencil-code/nor52.html">Nordita PowerMac: g95 with OpenMPI (MacOS X, by Axel)</a>
[<a href="http://www.nordita.org/~brandenb/pencil-code/nor52_previous.html">previous</a>]
-->
<!--
<li><a href="http://www.nordita.org/~brandenb/pencil-code/qmul.html">Queen Mary Cluster (London, by Axel)</a>
[<a href="http://www.nordita.org/~brandenb/pencil-code/qmul_previous.html">previous</a>]
<li><a href="http://www.nordita.org/~brandenb/pencil-code/fend.html">DCSC cluster in Copenhagen (pgf90 -fastsse -tp k8-64e, by Axel)</a>
[<a href="http://www.nordita.org/~brandenb/pencil-code/fend_previous.html">previous</a>]
<li><a href="http://www.capca.ucalgary.ca/~theine/pencil-code/dcsc.html">Horseshoe (Linux cluster, ifc 6.0 compiler, by Tobi)</a>
<li><a href="http://www.astro.ku.dk/~ajohan/pencil-code/dcsc.html">Horseshoe (Linux cluster, ifort compiler, by Anders)</a>
<li><a href="http://www.astro.ku.dk/~ajohan/pencil-code/aida25.html">aida25 (Linux cluster, ifort compiler with MPICH, by Anders)</a>
<li><a href="http://bohr.phys.ntnu.no/~nilshau/pencil-code/gridur.html">Gridur (SGI machine in Trondheim, by Nils)</a>
<li><a href="http://www.tac.dk/~brandenb/pencil-code/tac.html">tacsg2 (SGI machine, always some problems...)</a>
-->
</ul>

<h2>Test your changes</h2>

<p>Note: before checking in your own changes, you should at least do
the very minimal auto-tests:</p>

<div class="codescroll"><code>pc_auto-test --level=0 -C</code></div>

<p>You may alternatively choose the desired test levels, e.g. '--level=0+1' to run the basic auto-test set or '--max-level=3' for all auto-tests.</p>

<h2>Test levels</h2>

<table border="0" cellspacing="10" cellpadding="0">
<tr><td><b>level</b></td>
    <td><b>name</b></td><td><b>description</b></td>
    <td><b>time</b></td>
    <td><b>runs</b></td>
    <td><b>host</b></td>
    <td><b>compiler</b></td>
</tr>
<tr><td>0</td>
    <td>minimal</td><td>no- + most-modules</td>
    <td>minutely</td>
    <td><a href="https://www.PAB-Software.de/Pencil/minimal/">latest</a> (<a href="https://www.PAB-Software.de/Pencil/minimal-previous/">previous</a>)</td>
    <td>pencil-code.org</td>
    <td>GNU 9.4</td>
</tr>
<tr><td>0+1</td>
    <td>basic</td><td>same as Travis test</td>
    <td>minutely</td>
    <td><a href="https://norlx51.nordita.org/tests/basic/">latest</a> (<a href="https://norlx51.nordita.org/tests/basic-previous/">previous</a>)</td>
    <td>Norlx51</td>
    <td>GNU 13.3</td>
</tr>
<tr><td>2</td>
    <td>normal</td><td>without basic</td>
    <td>*/*:15</td>
    <td><a href="https://norlx51.nordita.org/tests/normal/">latest</a> (<a href="https://norlx51.nordita.org/tests/normal-previous/">previous</a>)</td>
    <td>Norlx51</td>
    <td>GNU 13.3</td>
</tr>
<tr><td>0-2</td>
    <td>default</td><td>basic + normal</td>
    <td>*/2:03</td>
    <td><a href="http://norlx29.nordita.org/~brandenb/pencil-code/tests/hourly/">latest</a> (<a href="http://norlx29.nordita.org/~brandenb/pencil-code/tests/hourly-previous/">previous</a>)</td>
    <td>Norlx29</td>
    <td>GNU 6.4</td>
</tr>
<tr><td>3</td>
    <td>extended</td><td>without default</td>
    <td>*/*:55</td>
    <td><a href="https://norlx51.nordita.org/tests/extended/">latest</a> (<a href="https://norlx51.nordita.org/tests/extended-previous/">previous</a>)</td>
    <td>Norlx51</td>
    <td>GNU 13.3</td>
</tr>
<tr><td>0-3</td>
    <td>all tests</td><td>default + extended</td>
    <td>*/6:31</td>
    <td><a href="https://www.PAB-Software.de/Pencil/daily/">latest</a> (<a href="https://www.PAB-Software.de/Pencil/daily-previous/">previous</a>)</td>
    <td>pencil-code.org</td>
    <td>GNU 9.4</td>
</tr>
<tr><td>4</td>
    <td></td><td>overlong runtime</td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr><td>5-...</td>
    <td></td><td>deactivated</td>
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>
<p>(Legend: */* means every hour, */6:31 means 31 minutes after full hours divisible by 6.)</p>

</div>

<?php
	include "inc/footer.inc";
 ?>

