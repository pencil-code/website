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

<h4>=&gt; SVN</h4>
Read-only access if available without registration:
<div class="codescroll"><code>svn checkout https://pencil-code.org/svn/trunk pencil-code</code></div>

<h4>=&gt; GIT</h4>
Read-only access if available without registration:
<div class="codescroll"><code>git clone https://pencil-code.org/git/ pencil-code</code></div>

<h3>&bull; Write access</h3>
If you want to submit your changes, please register at <a href="https://account.pencil-code.org/">account.pencil-code.org</a> and apply for write access to the &quot;main&quot; repository. Ideally, you would register with the same login as your GitHub username.

<h4>=&gt; SVN</h4>
<div class="codescroll"><code>svn checkout --username=USERNAME https://pencil-code.org/svn/trunk pencil-code</code></div>
where USERNAME is your login name at <a href="https://account.pencil-code.org/">account.pencil-code.org</a>.

<h4>=&gt; GIT</h4>
<div class="codescroll"><code>git clone https://USERNAME@pencil-code.org/git/ pencil-code</code></div>
where USERNAME is your login name at <a href="https://account.pencil-code.org/">account.pencil-code.org</a>.

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
and its revision number: <input name="revision" type="text" size="8" maxlength="8">&nbsp;<input type="submit" value=" - search - ">
</form>

<h2>Stable releases:</h2>
The Pencil Code can also be obtained as a stable <a href="http://github.com/pencil-code/pencil-code/releases">release</a>.<br>
We also provide the stable release <a href="http://norlx51.albanova.se/~brandenb/downloads/pencil-code-r21570.tar.gz">r21570 as TAR.gz archive</a> for direct download.
</div>

<div class="centerdivider"></div>
<div class="centcolumnpad">
Available as open source at our project page: <a href="https://github.com/pencil-code/" target="_top">github.com/pencil-code</a>
</div>
<?php
	include "inc/footer.inc";
 ?>

