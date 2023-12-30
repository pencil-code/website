<!-- $Id$ -->
<?php
	 include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<h2>Transition to pencil-code.org</h2>
<b>Important:</b> from the <b>2nd to the 7th of January 2024</b> we perform the transfer of our repository to the new domain &quot;pencil-code.org&quot;.
To submit your changes after the 2nd of January, 13:00 CET, please:

<h3>Step 1)</h3>
If your have already committed changes to the Pencil Code, pick up your prepared account at <a href="https://account.pencil-code.org/">account.pencil-code.org</a> with your known GitHub username and the email address to which we have sent the notification email with the verification hash. If you are a new users, please <a href="https://account.pencil-code.org/register-user.html">register a new account</a>, ideally with the same username as on GitHub.

<h3>Step 2)</h3>
<h4>=&gt; for <em>GIT</em> users</h4>
After <b>2nd of January, 13:00 CET</b> please change the repository URL:
<div class="codescroll"><code>git remote set-url origin https://USERNAME@pencil-code.org/git/</code></div>

<h4>=&gt; for <em>SVN</em> users</h4>
Either submit all you changes before <b>2nd of January, 13:00 CET</b> to GitHub, or transfer the changes between two working copies: one up-to-date checkout from GitHub and one from pencil-code.org.
Let us say you have your old GitHub working copy in &quot;pencil-code-old&quot;. Now checkout a fresh working copy from pencil-code.org in &quot;pencil-code-new&quot;:
<div class="codescroll"><code>svn checkout --username=USERNAME https://pencil-code.org/svn/trunk pencil-code-new</code></div>
Now you can use our transfer script &quot;pc_svn_transfer_changes&quot; to copy your changes over to the new working copy:
<div class="codescroll"><code>cd pencil-code-old<br>
svn up<br>
cd ../pencil-code-new<br>
svn up<br>
cd ..<br>
pencil-code-old/bin/pc_svn_transfer_changes pencil-code-old pencil-code-new</code></div>

<h3>Step 3)</h3>
From now on, submit your changes only to pencil-code.org at and provide your new login credentials (username and password).

</div>
<?php
	include "inc/footer.inc";
 ?>

