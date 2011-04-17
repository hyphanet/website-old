      <h1>Documentation</h1>
      <div id="navigation">
	<p> Go to :
	  <a href="install.html">Install</a>
	  <a href="connect.html">Connect</a>
	  <a href="content.html">Content</a>
	  <a href="understand.html">Understand</a>
	  <a href="freemail.html">Freemail</a>
	  <a href="frost.html">Frost</a>
	  <a href="jsite.html">jSite</a>
	  <a href="thaw.html">Thaw</a>
	  <a href="http://wiki.freenetproject.org">Wiki</a>
	</p>
      </div>

      <h2>jSite</h2>
      <p>
	jSite is a graphical application that you can 
	use to create, insert and manage your own 
	Freenet sites. It was written in Java by Bombe. 
      </p>
      <p>
	You can <a href="http://downloads.freenetproject.org/alpha/jSite/jSite.jar">download jSite here</a>
      </p>
      <h3>Starting jSite</h3>
      <p>
	To start jSite, type the following in a terminal:
      </p>
      <pre>
	java -jar jSite.jar</pre>
      <p>
	The first window you see is this:
      </p>
      <img src="/image/jsite/select-project.png" width="100%"/>
      <p>
	In the pane to the left, already created projects can
	be selected for updating, deleting or cloning. Since
	this is the first start, no such projects exist.
      </p>
      <h3>Creating a Freesite</h3>
      <p>
	To create a new Freesite, you click the 
	<span style="font-weight: bold;">Add project</span>-button. 
	You then need to fill in the details of the 
	project. Under the Project information-section:
      </p>
      <ul>
	<li><span style="font-weight: bold;">Name</span> 
	  - this is just a name for you to know the 
	  project, so anything will do. It may contain spaces.</li>
	<li><span style="font-weight: bold;">Description</span> 
	  - again, just a slightly longer 
	  description of the project for you own convenience.</li>
	<li><span style="font-weight: bold;">Local Path</span> 
	  - This is a directory where you will 
	  store all the pages of the freesite you are creating. 
	  Put in the full path. You can click the Browse button 
	  to select a directory graphically or just type it in.</li>
      </ul>
      <p>
	Under the Address-section, there are some automatically 
	generated entries, and the human readable name for the 
	site, as seen in the address-field of the browser:
      </p>
      <ul>
	<li><span style="font-weight: bold;">Request URI</span> 
	  - this is filled in automatically and 
	  should be a long string of seemingly random characters</li>
	<li><span style="font-weight: bold;">Insert URI</span> 
	  - this is also filled in automatically 
	  and will look similar to the Request URI.. </li>
	<li><span style="font-weight: bold;">Path</span> 
	  - You need to enter a single word here without 
	  spaces. This will appear at the end of the address of 
	  your site. You can't leave this blank.</li>
      </ul>
      <p>
	Below is an example of how it might look:
      </p>
      <img src="/image/jsite/project-details.png" width="100%"/>
      <p>When everything is filled in correctly, you may
	press <span style="font-weight: bold;">Next</span>.
      </p>
      <p>
	The next step is to add files to your Freenet site 
	(or Freesite). This is done in the dialog called
	<span style="font-weight: bold;">Project Files</span>. 
	Since we have no files in the current directory, yet,
	the dialog is pretty much empty.</p>
      <img src="/image/jsite/project-files.png" />
      <p>
	To add files, we put some files in the local directory
	we specified earlier, <span style="font-weight: bold;">
	  /home/test</span>, and press <span style="font-weight: bold;">
	  Re-scan</span>. Then, presto, the files appear.
      </p>
      <img src="/image/jsite/default-file.png" />
      <p>
	We then highlight one of these files that will be 
	the default page (e.g. index.html might be a good 
	choice) and check the <span style="font-weight: bold;">
	  Default file</span> checkbox. It should recognise the 
	MIME type as text/html, so leave everything else as 
	they are and click the <span style="font-weight: bold;">
	  
	  Insert now</span> button.
      </p>
      <p>
	If all goes well, a window like the one below should
	appear. It may take quite a while to insert the Freesite,
	several minutes in fact.
      </p>
      <img src="/image/jsite/project-insert.png" width="100%"/>
      <p>
	When all is finished, you will get a message pop-up that
	tells you that the site has been inserted successfully.
	You can copy the URI to the clip-board by clicking the
	<span style="font-weight: bold;">Copy URI to Clipboard</span>
	-button.
      </p>
      <p>
	Then you can use FProxy to surf to your newly created
	Freesite. Just paste the URI after the
      </p>

      <p>
	<a href="http://localhost:8888/">http://localhost:8888/</a>
      </p>
      <p>
	in the browser address bar, like this (cut for screen
	purposes):
      </p>
      <pre>
	http://localhost:8888/freenet:USK@cJNO6G0[..]joM,AQACAAE/watergate2/1/</pre>
      <p>
	If it works, congratulations, you have just created your first Freesite!
      </p>
