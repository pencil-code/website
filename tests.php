<!-- $Id$ -->
<?php
	 include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<h2>Automatic tests</h2>

<p>To ensure reproducability, the
<a href="http://pencil-code.nordita.org/">Pencil Code</a>
is tested daily for a number of
sample applications. This is important for us in order to make sure certain
improvements in some parts of the code do not affect the functionality
of other parts. For other users who suspect that a new problem has emerged
it could be useful to first see whether this problem also shows up in
our own tests. The latest test results for a can be seen online:</p>

<ul STYLE="font-size:13px;">
<li><a href="https://github.com/pencil-code/pencil-code/commits/master/">Travis</a>, after each checkin (<a href="https://app.travis-ci.com/github/pencil-code/pencil-code">latest checkin job log</a>)
<!-- Hourly test -->
<li><a href="http://norlx51.nordita.org/~brandenb/pencil-code/tests/hourly/">Nordita: GNU gfortran 6.4.0 with OpenMPI (norlx51, by Wolfgang/Axel)</a>, hourly (<a href="http://norlx51.nordita.org/~brandenb/pencil-code/tests/hourly-previous/">previous run</a>)
<!-- Daily test -->
<li><a href="http://norlx51.nordita.org/~brandenb/pencil-code/tests/daily/">Nordita: GNU gfortran 6.4.0 with OpenMPI (norlx51, by Wolfgang/Axel)</a>, daily (<a href="http://norlx51.nordita.org/~brandenb/pencil-code/tests/daily-previous/">previous run</a>)
<!-- Minutely test -->
<li><a href="https://norlx29.nordita.org/tests/minutely/">Nordita: GNU gfortran 13.3.0 with OpenMPI (norlx29, by Philippe/Axel)</a>, minutely (<a href="https://norlx29.nordita.org/tests/minutely-previous/">previous run</a>)
<!-- Hourly test -->
<li><a href="https://norlx29.nordita.org/tests/hourly/">Nordita: GNU gfortran 13.3.0 with OpenMPI (norlx29, by Philippe/Axel)</a>, hourly (<a href="https://norlx29.nordita.org/tests/hourly-previous/">previous run</a>)
<!-- Daily test -->
<li><a href="https://norlx29.nordita.org/tests/daily/">Nordita: GNU gfortran 13.3.0 with OpenMPI (norlx29, by Philippe/Axel)</a>, daily (<a href="https://norlx29.nordita.org/tests/daily-previous/">previous run</a>)
<!-- Philippe Bourdin -->
<li><a href="http://www.PAB-Software.de/Pencil/daily/">GNU gfortran 9.4.0, (Ubuntu, by Philippe Bourdin), large daily</a>, (<a href="http://www.PAB-Software.de/Pencil/daily-previous/">previous run</A>)
<li><a href="http://www.PAB-Software.de/Pencil/minimal/">GNU gfortran 9.4.0, (Ubuntu, by Philippe Bourdin), minimal minutely</a>, (<a href="http://www.PAB-Software.de/Pencil/minimal-previous/">previous run</A>)
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

<div class="codescroll"><code>pc_auto-test --max-level=0 --no-pencil-check -C</code></div>

You may alternatively give a larger integer number, e.g. '--max-level=2', in order to run more auto-tests with your changes.

</div>

<?php
	include "inc/footer.inc";
 ?>

