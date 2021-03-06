<!-- $Id$ -->
<?php
	 include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<h2>Download</h2>
You might get the code using <em>SVN</em> (recommended) or <em>GIT</em> (for git-experts).

<h3>&bull; SVN checkout:</h3>
The read-only version you can check out by:
<div class="codescroll"><code>svn checkout http://github.com/pencil-code/pencil-code/trunk/ pencil-code</code></div>

For a read-write access, you need to have a github user name ('MY_GITHUB_NAME') and become part of the <em>pencil-code</em> group.
<div class="codescroll"><code>svn checkout http://github.com/pencil-code/pencil-code/trunk/ pencil-code --username 'MY_GITHUB_NAME'</code></div>

<h3>&bull; GIT checkout:</h3>
If you just want to check out the latest version of the code use:
<div class="codescroll"><code>git clone http://github.com/pencil-code/pencil-code.git</code></div>

If you have a github username 'MY_GITHUB_NAME' and like to submit changes you can use:
<div class="codescroll"><code>git clone http://MY_GITHUB_NAME@github.com/pencil-code/pencil-code.git<br>
git config --global credential.helper 'cache --timeout=3600'<br>
git config --global branch.autosetuprebase always</code></div>
With the second line, you set the password cache to one hour, the third line should actually become a default.

<p>
Or, if you prefer to use a SSH keyfile so that you do not have to type your password on each 'push':
<div class="codescroll"><code>git clone git@github.com:pencil-code/pencil-code.git</code></div>
</p>

<h3>&bull; Stable releases:</h3>
The Pencil Code can also be obtained as a stable <a href="http://github.com/pencil-code/pencil-code/releases">release</a>.<br>
We also provide the stable release <a href="http://norlx51.albanova.se/~brandenb/downloads/pencil-code-r21570.tar.gz">r21570 as TAR.gz archive</a> for direct download.
</div>

<div class="centerdivider"></div>
<div class="centcolumnpad">
Available as open source at our project page: <a href="http://github.com/pencil-code/" target="_top">gitbub.com/pencil-code</a>
</div>
<?php
	include "inc/footer.inc";
 ?>

