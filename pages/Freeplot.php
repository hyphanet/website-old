<h4><big style="font-weight: normal;"><big></big></big><big
 style="font-weight: bold;"><big>GnuPlot with FreeNet HOWTO</big></big></h4>
</div>
Plotting data with GnuPlot is both fun and easy! Using it for Freenet
development... well... the harder part is collecting all the numbers
you want to chart. Graphing with gnuplot is the easy part.<span
 style="font-style: italic;"><br>
<br>
<span style="font-weight: bold;">"a picture says a thousand words..."</span></span>
&nbsp; but sometimes, it may only indicate 993 words.<br>
<br>
<span style="font-style: italic; font-weight: bold;">"Hey, Freenet </span><span
 style="font-style: italic; font-weight: bold;"><span
 style="font-style: italic; font-weight: bold;">already </span></span><span
 style="font-style: italic; font-weight: bold;">has graphing
capabilities built in!"<br>
</span>Very true, and they should be used as much as possible. However,
when it is desirable to produce a chart containing two or more
variables, gnuplot may offer a preferable alternative. The other
solution is to stack multiple browser windows vertically, and chart one
variable per window. Also, by spooling the data (and only the data) you
want to examine into a separate datafile, freenet does not have to
retain large quantities of measurements. Specifically, it is convenient
to chart many hours of data that are captured at a one minute
resolution, in order to identify trends or spot relationships. Also of
interest - developers can aggregate measurements that are written to
Freenet's log file, using Perl or {grep,awk,sed} to cut and paste a
concise temporary datafile. It is extremely simple from there to graph
columnar data files with Gnuplot, with short typed commands or even
scripted
gnuplot operations. And Gnuplot has native support for a time dataype,
which is often a desired parameter for many purposes.<br>
<br>
<span style="font-style: italic; font-weight: bold;"></span>This HOWTO
applies to both Windows(tm) and UNIX/Linux platforms. MS Excel could be
used instead of Gnuplot for charting the data we will collect, but this
HOWTO specifically describes the use of Gnuplot. <br>
<br>
<h5 style="color: rgb(51, 153, 153); font-family: sans-serif;"><big><span
 style="font-weight: bold;">First
task</span></big></h5>
<ul>
  <li>Make sure Perl is installed. </li>
</ul>
<div style="margin-left: 40px;">Windows users, visit <a
 href="http://www.perl.com/download.csp">www.perl.com</a> , retrieve
and install the "ActiveState" perl binary. Test that you can run Perl
from the command line (add it to your system PATH).<br>
<br>
UNIX / Linux users, get a clue ! Use your distribution's perl
installation, or build Perl from source.<br>
</div>
<br>
<ul>
  <li>Also, <a href="http://lwp.linpro.no/lwp/">the LWP (libwww-Perl)
module</a> is required. </li>
</ul>
<div style="margin-left: 40px;">
Windows users: <br>
&nbsp; You luck out. ActiveState's binary distribution of Perl 5.8.3
includes the LWP module, already installed for you.<br>
<br>
UNIX / Linux users:<br>
</div>
<div style="margin-left: 40px;">&nbsp; As the root user, run&nbsp; <span
 style="font-style: italic;">perl -MCPAN -e shell</span>&nbsp; and then
just type in <span style="font-style: italic;">install LWP </span>.
This should perform the installation automatically for you. Of course,
it can be manually retrieved and installed from the link above ( if you
can figure out how to ).<br>
<br>
</div>
You now have HTTP / URL "screen-scraping" ability (without the screen).
Rejoice! To test it out, download and run <a href="avg-mri.pl">avg-mri.pl</a>.<br>
<br>
blackstar&gt; <span style="font-style: italic;">perl avg-mri.pl<br>
</span><br>
Average MRI from routes = 234387ms<br>
Instant outbound qph capacity = 1059<br>
<br>
<br>
next, download and run the <a href="dump-mri.pl">dump-mri.pl</a> Perl
script like so:&nbsp; <br>
<br>
blackstar&gt; <span style="font-style: italic;">perl dump-mri.pl<br>
</span><br>
This should produce a sorted list of the mRI values for the set of
connected Freenet routes. <br>
<br>
<h5 style="color: rgb(51, 153, 153); font-family: sans-serif;"><big>Second
task</big></h5>
<ul>
  <li>Obtain and install <a
 href="http://www.gnuplot.info/download.html">GnuPlot</a></li>
</ul>
<div style="margin-left: 40px;">UNIX / Linux users: <br>
Download gnuplot-4.0.0.tar.gz , configure, make, and install the
package. Or see if it is available for your distribution. You may wish
to specify --with-gd and --without-mouse to the configure script.<br>
<br>
Windows users: <br>
Download gp400win32.zip , unzip to C:\ . This should create
C:\gnuplot . You may wish to add C:\gnuplot\bin to your system PATH.<br>
</div>
<br>
<ul>
  <li>Test GnuPlot</li>
</ul>
<div style="margin-left: 40px;">Run gnuplot from the command line. On
UNIX run <span style="font-style: italic;">gnuplot</span>, on Windows
run <span style="font-style: italic;">C:\gnuplot\bin\wgnuplot</span>
(or add wgnuplot to your path).<br>
GnuPlot will start in interactive mode. At the <span
 style="font-weight: bold;">gnuplot&gt;</span> prompt, type in <span
 style="font-style: italic;">f(x)=sin(x)</span> and hit enter. Then
type in <span style="font-style: italic;">plot f(x) </span>. If this
works, you are all set. For Freenet, we will only be plotting data from
a datafile. Enter the command <span style="font-style: italic;">quit</span>
to exit gnuplot. <br>
</div>
<br>
Now we will capture the data and graph the distribution of mRI values
like so:<span style="font-style: italic;"><br>
</span><br>
blackstar&gt; <span style="font-style: italic;">perl dump-mri.pl &gt;
mris.txt</span><br>
blackstar&gt; <span style="font-style: italic;">gnuplot</span>&nbsp;
(or <span style="font-style: italic;">wgnuplot </span>for windows)<br>
<br>
(then, in the interactive gnuplot window, enter...)<br>
gnuplot&gt; <span style="font-style: italic;">plot 'mris.txt' with
impulses</span><br>
<br>
This should produce a histogram of mRI values for the available freenet
routes ! Now you can <span style="text-decoration: underline;">see</span>
if one route is eating all your requests, or
if they are being distributed evenly.<br>
<span style="font-style: italic;"></span><br>
<div style="text-align: center;">
<h3>Bringing It All Together</h3>
</div>
Now that you have Perl and Gnuplot installed, you can begin collecting
data from Freenet. Download <a href="collect.pl">collect.pl</a> , the
Perl script that will log all the relevant
data to a file. Most people will access their freenet software at <span
 style="font-weight: bold;">http://localhost:8888</span>. If you have
altered the default settings, or wish to run collect from a different
host, call this file up in an editor, and correct the <span
 style="font-weight: bold;">$fproxy</span> variable. When running, once
per minute, this script will retrieve 5 small web
pages from freenet's fproxy process. A datafile is appended to each
time this script gathers the desired data. It is suggested that you
start this
script at about the same time as you launch the freenet process, in
order to gather all the data for a complete freenet session. If using
UNIX, you may wish to alter your start-freenet.sh script, adding one
line at the end to read <span style="font-weight: bold;">perl
collect.pl</span>. After you
have gathered a full session's worth of data, delete (or rename) the
data file, so as to avoid collecting excessive amounts of data on the
next run. The data can be plotted with GnuPlot at any time, while the
collection process is running. It may be helpful to integrate the
management of datafiles into the start-freenet.sh and stop-freenet.sh
scripts on UNIX platforms.<br>
<br>
The data fields produced by running this script include:<br>
<span style="font-family: monospace;"><br>
&lt;time&gt; </span><span style="font-family: monospace;">&lt;outbound
bandwidth&gt; </span><span style="font-family: monospace;">&lt;inbound
bandwidth&gt; </span><span style="font-family: monospace;">&lt;#routes&gt;
</span><span style="font-family: monospace;">&lt;#connections&gt; </span><span
 style="font-family: monospace;">&lt;#outbound transfers&gt; </span><span
 style="font-family: monospace;">&lt;#inbound
transfers&gt;</span><span style="font-family: monospace;"> &lt;queries
per minute&gt;</span><span style="font-family: monospace;"> </span><span
 style="font-family: monospace;"></span><span
 style="font-family: monospace;"> </span><span
 style="font-family: monospace;">&lt;#backed off routes&gt; &lt;average
mRI for all routes&gt;</span><br style="font-family: monospace;">
<br>
To see all the data, download <a href="p1.gp">p1.gp</a> and start
gnuplot as such:<br>
<br>
<span style="font-weight: bold;">UNIX&gt; </span><span
 style="font-style: italic;">gnuplot -geometry 1000x500 -persist p1.gp</span><br>
<span style="font-weight: bold;">C:\Windows&gt; <span
 style="font-style: italic;"><span style="font-weight: bold;"></span></span></span><span
 style="font-style: italic;">wgnuplot p1.gp<br>
</span>Note: if using Windows,
uncomment the line at the end of p1.gp that says <span
 style="font-weight: bold;">#pause -1</span> by removing the '#'<span
 style="font-style: italic;"><br>
</span><br>
Feel free to examine the p1.gp file - it is easy to comment out any
particular stat you don't want displayed - they appear at the bottom of
the file.<br>
<br>
To generate a PNG file, rather than a window, download <a href="p2.gp">p2.gp</a>
and run as:<br>
<span style="font-style: italic;">gnuplot p2.gp</span> (use <span
 style="font-style: italic;">wgnuplot</span> on windows)<br>
<br>
you will probably want to adjust the y range of the generated file, so
edit p2.gp and alter the first non-comment line, that reads <span
 style="font-style: italic;">set yrange [0:250]</span>.<br>
<br>
As you become more familiar with gnuplot, you are sure to find many new
uses for this wonderful tool.<br>
<big><span style="font-style: italic;"></span></big>
<hr style="width: 100%; height: 2px;"><big><span
 style="font-style: italic;"><br>
</span></big>
