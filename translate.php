<?php
	$revision = filter_var (ltrim ($_POST["revision"], 'r'), FILTER_SANITIZE_NUMBER_INT);
	$hash = preg_replace ('/[^a-zA-Z0-9\$\/\.]/', '', trim ($_POST["hash"]));

	$output = filter_var (trim ($_POST["output"]), FILTER_SANITIZE_NUMBER_INT);
	if ($output == 1) {
		$output = "HTML";
	} else {
		$output = "TXT";
	}

	$dir = "/home/pencil/translate/";
	if ($revision != "") {
		# search GIT hash
		$update = `cd "$dir" && git pull 2>&1`;
		$result = `cd "$dir" && git log --grep="^r$revision trunk$" 2>&1 | head -1`;
		$result = substr ($result, strlen ("commit "));
	} elseif ($hash != "") {
		# search SVN revision number
		$update = `cd "$dir" && git pull 2>&1`;
		$result = `cd "$dir" && git log -n1 "$hash" 2>&1 | tail -1`;
		$result = lrtim ($result, " r");
		$result = substr ($result, 0, -strlen (" trunk"));
	} else {
		header ("Location: /download.php");
	}

	if ($output == "TXT") {
		print $result;
	} else {

		include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<h2>Obtain an old revision</h2>

<?php
		if ($new) {
 ?>
<h3>&bull; SVN checkout:</h3>
SVN read-only access:
<div class="codescroll"><code>svn checkout -r <?php echo $new; ?> https://pencil-code.org/svn/playground/trunk playground</code></div>
SVN read &amp; write access:
<div class="codescroll"><code>svn checkout -r <?php echo $new; ?> --username=GITHUB_LOGIN https://pencil-code.org/svn/playground/trunk playground</code></div>
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
Available as open source at our project page: <a href="https://github.com/pencil-code/" target="_top">github.com/pencil-code</a>
</div>
<?php
		include "inc/footer.inc";
	}
 ?>
