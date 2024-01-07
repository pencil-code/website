<?php
	$revision = filter_var (ltrim ($_GET["revision"], 'r'), FILTER_SANITIZE_NUMBER_INT);
	$hash = preg_replace ('/[^a-zA-Z0-9\$\/\.]/', '', trim ($_GET["hash"]));
	$output = trim ($_GET["output"]);

	$dir = "/home/pencil/translate/";
	if ($revision != "") {
		# search GIT hash
		$update = `cd "$dir" && git pull 2>&1`;
		$result = `cd "$dir" && git log --grep="^r$revision trunk$" 2>&1 | head -1`;
		$result = substr ($result, strlen ("commit "));
		$hash = $result;
	} elseif ($hash != "") {
		# search SVN revision number
		$update = `cd "$dir" && git pull 2>&1`;
		$result = `cd "$dir" && git log -n1 "$hash" 2>&1 | tail -1`;
		$result = ltrim ($result, " r");
		$result = substr ($result, 0, -strlen (" trunk"));
		$revision = $result;
	} else {
		header ("Location: /download.php");
	}

	if (empty ($revision) || ($revision == "")) { $revision = "SVN revision not found!"; }
	if (empty ($hash) || ($hash == "")) { $hash = "GIT hash not found!"; }

	if ($output == "plain") {
		print $result."\n";
	} else {

		include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<h2>Translation between SVN and GIT</h2>

<h3>&bull; SVN revision number:</h3>
<div class="codescroll"><code><?php echo $revision; ?></code></div>

<h3>&bull; GIT hash:</h3>
<div class="codescroll"><code><?php echo $hash; ?></code></div>
<p>=&gt; <a href="https://github.com/pencil-code/pencil-code/commit/<?php echo $hash; ?>">Commit details</a></p>
</div>
<?php
		include "inc/download.inc";
		include "inc/footer.inc";
	}
 ?>
