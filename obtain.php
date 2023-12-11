<!-- $Id$ -->
<?php
	include "inc/header.inc";

	$revision = filter_var (ltrim ($_POST["revision"], 'r'), FILTER_SANITIZE_NUMBER_INT);
	$line = system ("grep -P \"^r32000\\t\" rev-table_GH-SVN.csv");
	$new = substr ($line, strpos ($line, "\t"));
 ?>
<div class="centcolumnpad">
<h2>Obtain an old revision</h2>

<h3>&bull; SVN checkout:</h3>
SVN read-only access:
<div class="codescroll"><code>svn checkout -r<?php echo $new; ?> https://pencil-code.org/svn/playground/trunk playground</code></div>
SVN read &amp; write access:
<div class="codescroll"><code>svn checkout -r<?php echo $new; ?> --username=GITHUB_LOGIN https://pencil-code.org/svn/playground/trunk playground</code></div>

<div class="centerdivider"></div>
<div class="centcolumnpad">
Available as open source at our project page: <a href="https://github.com/pencil-code/" target="_top">github.com/pencil-code</a>
</div>
<?php
	include "inc/footer.inc";
 ?>

