<?php
	$revision = filter_var (ltrim ($_POST["revision"], 'r'), FILTER_SANITIZE_NUMBER_INT);
	if (empty ($revision) || ($revision == "")) { header ("Location: /download.php"); }

	include "inc/header.inc";

	$source = "GH";
	$description = "GitHub";
	if ($_POST["source"] == "GC") {
		$source = "GC";
		$description = "GoogleCode";
	}

	$line = `grep -P "^r$revision\t" "rev-table_$source-SVN.csv"`;
	$new = ltrim (substr ($line, strpos ($line, "\t") + 1), 'r');
 ?>
<div class="centcolumnpad">
<h2>Obtain an old revision</h2>

<?php
	if ($new) {
 ?>
<h3>&bull; SVN checkout:</h3>
SVN read-only access:
<div class="codescroll"><code>svn checkout -r <?php echo $new; ?> https://pencil-code.org/svn/trunk pencil-code</code></div>
SVN read &amp; write access:
<div class="codescroll"><code>svn checkout -r <?php echo $new; ?> --username=USERNAME https://pencil-code.org/svn/trunk pencil-code</code></div>
<?php
	} else {
 ?>
<p><font color="#e00000" style="color:red"><b>Revision <?php echo $revision; ?> not found in <?php echo $description; ?> repository.</b></font></p>
<?php
	}
 ?>
</div>

<div class="centerdivider"></div>
<div class="centcolumnpad">
Available as open source at our project page: <a href="https://pencil-code.org/download.php" target="_top">pencil-code.org/download.php</a>
</div>
<?php
	include "inc/footer.inc";
 ?>

