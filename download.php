<!-- $Id$ -->
<?php
	 include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<h2>Transition to pencil-code.org</h2>
<b>Important:</b> from the <b>2nd to the 7th of January 2024</b> we perform the transfer of our repository to the new domain &quot;pencil-code.org&quot;.
Please follow these <a href="/transition.php">instructions to submit your changes after the 2nd of January</a>, 13:00 CET.

<h2>Download</h2>
You might get the code using <em>SVN</em> (recommended) or <em>GIT</em> (for git-experts).

<h3>&bull; Read-only access</h3>
<div class="codescroll"><code>svn checkout https://pencil-code.org/svn/trunk pencil-code</code></div>
<div class="codescroll"><code>git clone https://pencil-code.org/git/ pencil-code</code></div>
No registration is required for read-only access.

<h3>&bull; Write access</h3>
If you want to submit your changes, please register at <a href="https://account.pencil-code.org/">account.pencil-code.org</a> and apply for write access to the &quot;main&quot; repository. Ideally, you would register with the same &quot;USERNAME&quot; as your GitHub account.

<h4>=&gt; SVN:</h4>
<div class="codescroll"><code>svn checkout --username=USERNAME https://pencil-code.org/svn/trunk pencil-code</code></div>

<h4>=&gt; GIT:</h4>
<div class="codescroll"><code>git clone https://USERNAME@pencil-code.org/git/ pencil-code</code></div>

<p>To cache your password for #### seconds, you can configure:
<div class="codescroll"><code>git config --global credential.helper 'cache --timeout=####'</code></div></p>

Our <em>GIT</em> server can show <em>SVN</em> revisions as notes:
<div class="codescroll"><code>git config --add remote.origin.fetch '+refs/svn/map:refs/notes/commits'<br>
git config remote.origin.tagOpt '--tags'<br>
git pull<br>
git log</code></div>

<h2>Getting an old SVN revision:</h2>
<form action="./obtain.php" method="post">
Select the original source:<br>
<select name="source">
	<option value="GH">github.com/pencil-code/pencil-code</option>
	<option value="GC">code.google.com/p/pencil-code</option>
</select><br>
and its revision number: <input name="revision" type="text" size="8" maxlength="16">&nbsp;<input type="submit" value=" - search - ">
</form>

<h2>SVN&gt;&lt;GIT translation:</h2>
<form action="https://pencil-code.org/translate.php" method="get">
<input type="hidden" name="output" value="1">
Search for SVN revision: <input name="revision" type="text" size="8" maxlength="16"> or GIT hash: <input name="hash" type="text" size="12" maxlength="40">&nbsp;<input type="submit" value=" - translate - ">
</form>

<h2>Stable releases:</h2>
The Pencil Code can also be obtained as a stable <a href="http://github.com/pencil-code/pencil-code/releases">release</a>.<br>
We also provide the stable release <a href="http://norlx51.albanova.se/~brandenb/downloads/pencil-code-r21570.tar.gz">r21570 as TAR.gz archive</a> for direct download.
</div>
<?php
	include "inc/footer.inc";
 ?>

