<!-- $Id$ -->
<?php
	 include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<h2>Automatic tests</h2>

<p>To ensure reproducability, the
<a href="http://pencil-code.nordita.org/">Pencil Code</a>
is tested for a number of sample applications.
This is important for us in order to make sure certain
improvements in some parts of the code do not affect the functionality
of other parts. For other users who suspect that a new problem has emerged
it could be useful to first see whether this problem also shows up in
our own tests. The latest test results for a can be seen online:</p>

<table border="0" cellspacing="10" cellpadding="0">
<tr><td><b>level</b></td>
    <td><b>name</b></td><td><b>description</b></td>
    <td><b>time</b></td>
    <td><b>OK</b></td>
    <td><b>runs</b></td>
    <td><b>host</b></td>
    <td><b>compiler</b></td>
    <td><b>maintainer</b></td>
</tr>
<tr><td>0</td>
    <td>minimal</td><td>no- &amp; most-modules</td>
    <td>minutely</td>
    <td><img src="https://pencil-code.org/tests/minimal/result.svg" WIDTH="16" HEIGHT="16" ALT="&oslash;"></td>
    <td><a href="https://pencil-code.org/tests/minimal/">latest</a> (<a href="https://pencil-code.org/tests/minimal-previous/">previous</a>)</td>
    <td>pencil-code.org</td>
    <td>GNU 9.4</td>
    <td>Philippe</td>
</tr>
<tr><td>0+1</td>
    <td>basic</td><td>same as <a href="https://github.com/pencil-code/pencil-code/commits/master/">Travis</a></td>
    <td>minutely</td>
    <td><img src="https://norlx51.nordita.org/tests/basic/result.svg" WIDTH="16" HEIGHT="16" ALT="&oslash;"></td>
    <td><a href="https://norlx51.nordita.org/tests/basic/">latest</a> (<a href="https://norlx51.nordita.org/tests/basic-previous/">previous</a>)</td>
    <td>Norlx51</td>
    <td>GNU 13.3</td>
    <td>Axel/Philippe</td>
</tr>
<tr><td>2</td>
    <td>normal</td><td>without basic</td>
    <td>*/*:15</td>
    <td><img src="https://norlx51.nordita.org/tests/normal/result.svg" WIDTH="16" HEIGHT="16" ALT="&oslash;"></td>
    <td><a href="https://norlx51.nordita.org/tests/normal/">latest</a> (<a href="https://norlx51.nordita.org/tests/normal-previous/">previous</a>)</td>
    <td>Norlx51</td>
    <td>GNU 13.3</td>
    <td>Axel/Philippe</td>
</tr>
<tr><td>0-2</td>
    <td>default</td><td>basic + normal</td>
    <td>*/2:03</td>
    <td><img src="https://norlx65.nordita.org/tests/default/result.svg" WIDTH="16" HEIGHT="16" ALT="&oslash;"></td>
    <td><a href="https://norlx65.nordita.org/tests/default/">latest</a> (<a href="https://norlx65.nordita.org/tests/default-previous/">previous</a>)</td>
    <td>Norlx65</td>
    <td>GNU 13.3</td>
    <td>Philippe/Axel</td>
</tr>
<tr><td>3</td>
    <td>extended</td><td>without default</td>
    <td>*/*:55</td>
    <td><img src="https://norlx51.nordita.org/tests/extended/result.svg" WIDTH="16" HEIGHT="16" ALT="&oslash;"></td>
    <td><a href="https://norlx51.nordita.org/tests/extended/">latest</a> (<a href="https://norlx51.nordita.org/tests/extended-previous/">previous</a>)</td>
    <td>Norlx51</td>
    <td>GNU 13.3</td>
    <td>Axel/Philippe</td>
</tr>
<tr><td>0-3</td>
    <td>full test</td><td>default + extended</td>
    <td>*/6:31</td>
    <td><img src="https://pencil-code.org/tests/full/result.svg" WIDTH="16" HEIGHT="16" ALT="&oslash;"></td>
    <td><a href="https://pencil-code.org/tests/full/">latest</a> (<a href="https://pencil-code.org/tests/full-previous/">previous</a>)</td>
    <td>pencil-code.org</td>
    <td>GNU 9.4</td>
    <td>Philippe</td>
</tr>
<tr><td>0-3</td>
    <td>GPU test</td><td>selected tests</td>
    <td>*/*:45</td>
    <td><img src="https://norlx65.nordita.org/tests/GPU/result.svg" WIDTH="16" HEIGHT="16" ALT="&oslash;"></td>
    <td><a href="https://norlx65.nordita.org/tests/GPU/">latest</a> (<a href="https://norlx65.nordita.org/tests/GPU-previous/">previous</a>)</td>
    <td>Norlx65</td>
    <td>GNU 13.3</td>
    <td>Philippe</td>
</tr>
<tr><td>4</td>
    <td>fixme</td><td>succeeded before</td>
    <td>*/6:45</td>
    <td><img src="https://norlx51.nordita.org/tests/fixme/result.svg" WIDTH="16" HEIGHT="16" ALT="&oslash;"></td>
    <td><a href="https://norlx51.nordita.org/tests/fixme/">latest</a> (<a href="https://norlx51.nordita.org/tests/fixme-previous/">previous</a>)</td>
    <td>Norlx51</td>
    <td>GNU 13.3</td>
    <td>Axel/Philippe</td>
</tr>
<tr><td>5</td>
    <td>overlong</td><td>runs less often</td>
    <td>15:31</td>
    <td><img src="https://norlx65.nordita.org/tests/overlong/result.svg" WIDTH="16" HEIGHT="16" ALT="&oslash;"></td>
    <td><a href="https://norlx65.nordita.org/tests/overlong/">latest</a> (<a href="https://norlx65.nordita.org/tests/overlong-previous/">previous</a>)</td>
    <td>Norlx65</td>
    <td>GNU 13.3</td>
    <td>Philippe/Axel</td>
</tr>
<tr><td>6-9</td>
    <td>defective</td><td>known to fail</td>
    <td>03:31</td>
    <td><img src="https://norlx65.nordita.org/tests/defective/result.svg" WIDTH="16" HEIGHT="16" ALT="&oslash;"></td>
    <td><a href="https://norlx65.nordita.org/tests/defective/">latest</a> (<a href="https://norlx65.nordita.org/tests/defective-previous/">previous</a>)</td>
    <td>Norlx65</td>
    <td>GNU 13.3</td>
    <td>Philippe/Axel</td>
</tr>
</table>
<p>Legend: */* means every hour, */6:31 means 31 minutes after full hours divisible by 6.<br>
Status of auto-tests: &oslash; offline; <img src="pics/icon_wait.svg" width="16" height="16" alt="scheduled"> scheduled; <img src="pics/icon_hourglass.svg" width="16" height="16" alt="running"> running; <img src="pics/icon_failure.svg" width="16" height="16" alt="failure"> failed; <img src="pics/icon_success.svg" width="16" height="16" alt="success"> succeeded.<br>
Tests are triggered only if there are new updates to the code.</p>

<h2>Other tests</h2>

<ul STYLE="font-size:13px;">
<li>basic test (levels 0+1) <a href="https://github.com/pencil-code/pencil-code/commits/master/">Travis</a> minutely (<a href="https://app.travis-ci.com/github/pencil-code/pencil-code">latest checkin job log</a>)
<!-- Daily full test -->
<!-- Currently deactivated li>full test (levels 0-3) at 18:09 <a href="http://norlx29.nordita.org/~brandenb/pencil-code/tests/daily/">latest</a> (<a href="http://norlx29.nordita.org/~brandenb/pencil-code/tests/daily-previous/">previous</a>) on Norlx29 with GNU 6.4 by Axel/Wolfgang/Philippe -->
</ul>

<h2>Test your changes</h2>

<p>Note: before checking in your own changes, you should at least do
the very minimal auto-tests:</p>

<div class="codescroll"><code>pc_auto-test --level=0 -C</code></div>

<p>You may alternatively choose the desired test levels, e.g. '--level=0+1' to run the "basic" auto-test set or '--max-level=3' for the "full" test.</p>

</div>

<?php
	include "inc/footer.inc";
 ?>

