Note: It is highly likely that this list is out of date. In general,

<br/>the most current stable version of the Sun JVM should play nicely with Freenet.
<br/>See the <a href='tiki-index.php?page=UnixHowto' class='wiki'>UnixHowto</a> page for info on using the Sun 
<br/>JVM. 
<br/>
<br/>Not all JVMs are created equal.  Because of numerous reports of fred (the
<br/>freenet daemon) not working with some JVMs, this page attempts to catalogue
<br/>setups that are known to work and not to work.
<br/>
<br/>JVMs that work:
<br/>
<br/><table border="1" cellspacing="0" cellpadding="1"> <tr><th bgcolor="#99CCCC"><strong>JVM</strong> </th><th bgcolor="#99CCCC"> <strong>Platform</strong>

<br/></th><th bgcolor="#99CCCC"> <strong>Compatibility</strong> </th>
<br/><th bgcolor="#99CCCC"> <strong>Verified by</strong> </th><th bgcolor="#99CCCC">
<br/><strong>Notes</strong> </th></tr>
<br/><tr><td>  Sun 1.4.1-b21  </td><td>  Linux  </td><td>  100 percent  </td><td>  Luke

<br/>Reeves  </td><td>  0.5pre1  </td></tr>
<br/><tr><td>  Sun 1.4.0_01-b03  </td><td>  Linux  </td><td>  100 percent  </td><td>  Luke
<br/>Reeves  </td><td>  build 495  </td></tr>
<br/><tr><td>  Sun 1.4.0-rc-b91  </td><td>  Linux  </td><td>  Works 100 percent  </td><td> <br/>Eric Norige  </td><td>  none  </td></tr>

<br/><tr><td>  Sun 1.3.0_02  </td><td>  Linux  </td><td>  Works 100 percent  </td><td>  MDA
<br/><font face="courier" size="2"></td><td>&nbsp;&nbsp;none&nbsp;&nbsp;</td></tr>
</font><br/><tr><td>  Blackdown 1.3.1  </td><td>  Linux  </td><td>  100 percent  </td><td> <br/>Michael Terry  </td><td>  none  </td></tr>

<br/><tr><td>  IBM 1.3  </td><td>  Linux  </td><td>  Works 100 percent  </td><td>  Luke
<br/>Reeves  </td><td>  none  </td></tr>
<br/><tr><td>  IBM 1.3.1  </td><td>  Linux  </td><td>  0 percent  </td><td>  Luke Reeves 

<br/></td><td>  Java core dump on startup  </td></tr>
<br/><tr><td>  Sun 1.4.1_01-b01  </td><td>  Windows 2000  </td><td>  Works 100 percent 
<br/></td><td>  Pascal  </td><td>  none  </td></tr>
<br/><tr><td>  Sun 1.4.0  </td><td>  Windows 2000  </td><td>  Works 100 percent  </td><td> <br/>Ian Clarke  </td><td>  none  </td></tr>

<br/><tr><td>  Sun 1.3.1_02-b02  </td><td>  Windows 2000  </td><td>  Works 100 percent 
<br/></td><td>  Pascal  </td><td>  none  </td></tr>
<br/><tr><td>  Sun 1.4.0-b92  </td><td>  Windows 98  </td><td>  100 percent  </td><td>  <br/>GuardianJ   </td><td>  none 

<br/></td></tr>
<br/><tr><td>  Sun 1.1.8  </td><td>  Windows 98  </td><td>  99 percent  </td><td>  Andrew
<br/>Rodland  </td><td>  DS Problems?  </td></tr>
<br/><tr><td>  Sun 1.3.1  </td><td>  Mac OS X 10.1.4  </td><td>  Works 100 percent 

<br/></td><td>  MDA  </td><td>  none  </td></tr>
<br/><tr><td>  Novell 1.3.1_01  </td><td>  Netware v5.1  </td><td>  Works 100 percent 
<br/></td><td>  Pascal  </td><td>  none  </td></tr>
<br/><tr><td> Kaffe 1.0.7 </td><td> OpenBSD </td><td> Works 90 percent 

<br/></td><td> greycat </td><td> Crashes periodically, fine otherwise. </td></tr>
<br/><tr><td> Kaffe CVS </td><td> OpenBSD </td><td> Works 98 percent
<br/></td><td> greycat </td><td> Crashes far less than 1.0.7. </td></tr>
<br/><tr><td> Sun 1.3.1_07 </td><td> OpenBSD (Linux x86 binary) </td><td>  Works 100 percent,

<br/><font face="courier" size="2">if&nbsp;you&nbsp;start&nbsp;it&nbsp;with&nbsp;&quot;-classic&quot;&nbsp;and&nbsp;not&nbsp;&quot;-server&quot;&nbsp;</td>
</font><br/><font face="courier" size="2"><td>mirabile</td><td>&nbsp;Overall&nbsp;more&nbsp;stable&nbsp;than&nbsp;Kaffe.<br&nbsp;/>From&nbsp;time&nbsp;to&nbsp;time,

</font><br/><font face="courier" size="2">java&nbsp;eats&nbsp;up&nbsp;all&nbsp;CPU.&nbsp;If&nbsp;it&nbsp;does&nbsp;for&nbsp;more&nbsp;than&nbsp;five&nbsp;minutes,&nbsp;kill&nbsp;-9&nbsp;the
</font><br/><font face="courier" size="2">process,&nbsp;remove&nbsp;store/index&nbsp;and&nbsp;all&nbsp;routing&nbsp;files,&nbsp;and&nbsp;restart.&nbsp;</td></tr>

</font><br/></table>
<br/>JVMs that don't work
<br/><ul>
<br/><li> Jikes 1.15 does not compile freenet properly (however the version of Jikes in CVS does, as does Jikes 1.14)
<br/></li>
<br/><li> IBM's JVMs are reported to be problematic
<br/></li>
<br/><li> Kaffe 1.0.6 doesn't work, but Kaffe 1.0.7 and CVS do, at least for some <b style="color:black;background-color:#ffff66">people</b>.  (Other <b style="color:black;background-color:#ffff66">people</b> have had serious problems.)
<br/></li>

<br/><li> Heisenbug reported for Sun's? 1.3.1-rc2-b23
<br/></li>
<br/><li> Novell 1.3.1 appears to run however keys all come through corrupted
<br/></li>
<br/></ul>
<br/>-- Eric Norige - 20 Apr 2002<br/>

