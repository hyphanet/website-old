<h1>Freenet herunterladen</h1>
<h3>Wichtiger Hinweis für Erstbenutzer</h3>
<p>
In einer idealen Welt würden sich Freenet-Benutzer nur mit Leuten verbinden
denen sie trauen (besuchen Sie Ihre Freunde-Seite wenn Ihr Knoten installiert
wurde). In der Praxis müssen Sie, wenn Sie niemanden kennen der schon im Freenet
ist, den unsicheren Modus einschalten, damit Ihr Knoten sich automatisch mit
anderen Knoten verbindet (dies bietet weniger Sicherheit). Es kann ein paar
Minuten dauern, bis Ihr Knoten genügend Verbindungen mit anderen Knoten hat um
Freenet benutzbar zu machen und die Geschwindigkeit wird sich wahrscheinlich
danach noch verbessern. Die beste Geschwindigkeit erreichen Sie, wenn Sie ihren
Knoten rund um die Uhr laufen lassen können.
</p>

<p><i>Wenn Sie eine Firewall oder ein NAT-Gerät (z.B. ein Router) haben, klicken
Sie <a href="/faq.html#firewall"><b>hier</b></a> um ein paar Informationen zu
bekommen.</i></p>

<div id="jws">
<h2>Installations-Anweisungen</h2>
Wenn Sie auf <big><big><a
href="/jnlp/freenet.jnlp"
>Freenet 0.7 installieren</a></big></big> klicken, sollte das
Installations-Programm starten. Wenn das aus irgend einem Grund nicht
funktioniert, können Sie es mit der plattformspezifischen Anleitung versuchen
(<a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');"
>Windows-Anleitung</a>, <a href="javascript:hideDiv('windows');showDiv('macos');
hideDiv('unix');">MacOSX-Anleitung</a>, <a href="javascript:hideDiv('windows');
hideDiv('macos');showDiv('unix');">Anleitung für Linux und Unix-ähnliche
Systeme</a>).
</div>

<div style="display: none;" id="nojws">
<h2>Installations-Anweisungen</h2>
Wenn Ihre Plattform nicht diejenige ist, die unten aufgeführt wird, dann wählen
Sie bitte Ihre spezifische Plattform aus: <a href="javascript:showDiv('windows');
hideDiv('macos');hideDiv('unix');">Windows-Anleitung</a>, <a
href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');"
>MacOSX-Anleitung</a>, <a href="javascript:hideDiv('windows');hideDiv('macos');
showDiv('unix');">Anleitung für Linux und Unix-ähnliche Systeme</a><br>
</div>

<div id="windows">
<h3>Windows</h3>
- Laden Sie das <big><a
href="FREENET_WINDOWS_INSTALLER_URL"
>Freenet-Webinstallationsprogramm</a> (3MB)</big> herunter und führen Sie es aus
<br><br>
Es wird automatisch Freenet und andere benötigte Komponenten für Sie
installieren. Wenn dies abgeschlossen ist, wird sich Ihr Standard-Browser öffnen
und Freenets webbasierte Oberfläche anzeigen.<br>
(Freenet enthält <u><b>weder Spionage- noch Werbe-Software</b></u>, es ist Freie
Software! Der Quellcode kann öffentlich eingesehen werden)<br>
<br>
Freenet funktioniert am besten mit 
<ul>
<li><b>Windows XP Professional</b> oder</li>
<li><b>Windows 2000 Professional</b></li> 
</ul>
Windows 95, 98 und ME (Millennium Edition) funktionieren nicht so gut; speziell
das Instalationsprogramm wird auf diesen Betriebssystemen nicht funktionieren.
Wir empfehlen Ihnen außerdem dringend, kein Betriebssystem zu benutzen, für
welches die Betreuung der Sicherheit beendet wurde.<br>
Wenn das Installationsprogramm nicht funktioniert (bei schweren Fehlern) lassen
Sie uns dies bitte wissen, installieren Sie Java und versuchen Sie es mit der
Anleitung für Linux.
</div>

<div id="macos">
<h3>Mac OSX</h3>
<a href="/jnlp/freenet.jnlp"
>Installieren Sie Freenet 0.7</a> indem Sie JavaWebStart benutzen.<br>
Wenn dies nicht funktioniert, versuchen Sie es mit der Anleitung für Linux.
</div>

<div id="unix">
<h3>Linux und andere Unix-ähnliche Systeme</h3>
Sie brauchen ein aktuelles <b>Java Runtime Environment</b> (JRE - Java
Ausführungs-Umgebung). Die besten Ergebnisse haben wir mit Suns Java Runtime
Environment erzielt, welches Sie mit Ihrer <a
href="http://de.wikipedia.org/wiki/Paketverwaltung">Paketverwaltung</a>
installieren oder von <a rel="nofollow" href="http://java.com/de/" >http://java.com/de/</a>
herunterladen können.<br>
Java Version 1.5.0 und höher wird funktionieren. Seien Sie sich jedoch bewusst,
dass in den Versionen vor Java 1.5 Update 4 Sicherheitslücken im Applet sind.
Generell empfehlen wir die neuste Version zu benutzen.

<p>Öffnen Sie eine Kommandozeile (Terminal) und geben Sie folgendes ein:</p>
<pre>
wget <a href="FREENET_INSTALLER_URL">FREENET_INSTALLER_URL</a> -O new_installer.jar
java -jar new_installer.jar
</pre>

<p>Alternativ können Sie auf manchen Systemen auch <a
href="FREENET_INSTALLER_URL"
>das Installationsprogramm</a> herunterladen und es anklicken, wenn jedoch
Probleme auftreten, empfehlen wir die obigen Kommandos.</p>

</div>

<script type="text/javascript"><!--
	// Try to detect if Sun Java 1.5.0 or higher is installed
	var Java = PluginDetect.isMinVersion('Java', '1,5,0');

	// Os detection
	var OSName="";
	if (navigator.appVersion.indexOf("Win")!=-1)
		OSName="windows";
	else if (navigator.appVersion.indexOf("Mac")!=-1)
		OSName="macos";
	else if (navigator.appVersion.indexOf("X11")!=-1)
		OSName="unix";
	else if (navigator.appVersion.indexOf("Linux")!=-1)
		OSName="unix";

	hideDiv("jws");
	hideDiv("nojws");
	hideDiv("windows");
	hideDiv("macos");
	hideDiv("unix");
	if(OSName == "windows") {
		// Disable JWS on Windows
		// Windows vista/7 have UAC enabled by default. We need to propose the .exe as JWS won't work :|
		// But the wininstaller is better than the JWS installer anyway, so use it for all Windows.
		showDiv("nojws");
		showDiv("windows");
	} else if(Java >= 1 && navigator.javaEnabled()) {
		showDiv("jws");
	} else if (OSName != "") {
		showDiv("nojws");
		showDiv(OSName);
	}
//--></script>

<h3>Nach der Installation</h3>

<p>Warten Sie ein paar Sekunden nachdem Sie Freenet gestartet haben um es
hochfahren zu lassen (auf einem langsamen Computer könnte es sein, dass Sie 30
Sekunden warten müssen) und besuchen Sie</p>
<pre>http://127.0.0.1:8888/wizard/</pre>
<p>in Ihrem Web-Browser um auf Freenets Benutzeroberfläche zuzugreifen. Freenet
wird Ihnen ein paar Fragen stellen und dann zur Startseite des Knotens,</p>
<pre>http://127.0.0.1:8888/</pre>
<p>gehen, von wo aus Sie Freesites aufrufen, Freunde hinzufügen usw. können.
Hoffentlich öffnet das Installationsprogramm die Seite für Sie, sodass Sie dies
hier gar nicht lesen.</p>

<h3>Es funktioniert, was mache ich jetzt?</h3>

<p>
Sie müssen sich verbinden. Der Assistent wird Sie fragen ob Sie den unsicheren
Modus einschalten möchten. Wenn Sie das tun, sollte Ihr Freenet-Knoten sich
automatisch im Netzwerk bekannt machen und innerhalb von ein paar Minuten
funktionieren. Wenn nicht, wird Freenet erst dann funktionieren wenn Sie ein
paar Freunde auf der Freunde-Seite hinzufügen.
</p>
<p>
Wenn Sie Leute kennen, die Freenet benutzen, auch wenn Sie den unsicheren
Modus eingeschaltet haben, können Sie Ihre Sicherheit verbessern und dabei
helfen das Netzwerk auszubauen, indem Sie sich mit ihren Knoten verbinden.
Fragen Sie sie nach ihren Referenzen und geben Sie ihnen Ihre. Wenn Sie die
Adresse
</p>
<pre>http://127.0.0.1:8888/friends/</pre>
<p>
in Ihrem Browser besuchen, können Sie unten Ihre Referenz sehen und Sie können
die Referenz von Anderen hinzufügen, entweder durch Kopieren und Einfügen der
Referenz selbst oder indem Sie Freenet eine URL oder Datei angeben, welche die
Referenz enthält.
</p>
<p><b>Hinweis: Sie müssen deren Referenz hinzufügen und die müssen Ihre hinzufügen
bevor Ihre Knoten miteinander kommunizieren können.</b></p>
<p>
Wenn Sie niemanden kennen der Freenet benutzt, schalten Sie den unsicheren
Modus ein (auch Opennet genannt; der Start-Assistent wird Sie danach fragen) und
warten Sie ein paar Minuten damit der Knoten sich bekannt machen kann und
Freenet wird von selbst funktionieren.
</p>

<h3>Ich bin verbunden, was mache ich jetzt?</h3>

<p>Links zu ein paar Seiten können Sie auf der FProxy-Startseite finden welche
sich hier befindet:</p>
<pre>http://127.0.0.1:8888/</pre>
<p>Es gibt Links zu ein paar
Programmen
von Drittanbietern für Freenet.</p>

<h3>Es funktioniert nicht, was nun?</h3>
<p>
Wenn Sie Probleme dabei haben Freenet zu installieren oder zu benutzen,
kontaktieren Sie uns bitte auf der <a href="mailto:support@freenetproject.org"
>Support-Mailing-Liste (Englisch)</a> (<a href="/lists.html">hier
abonnieren</a>) oder kommen Sie in unseren
<a rel="nofollow" href="http://de.wikipedia.org/wiki/IRC" title="Internet Relay Chat ist ein
nicht-anonymes Chat-System welches von vielen Entwicklern und Benutzern von
Freenet benutzt wird">IRC</a>-Kanal <a href="irc://irc.freenode.net/freenet"
>#freenet</a> (Englisch) auf irc.freenode.net. Deutschsprachige Unterstützung
finden Sie im deutschen Kanal <a rel="nofollow" href="irc://irc.freenode.net/freenet-de"
>#freenet-de</a> auf dem selben Netzwerk.
</p>
	
<h3>Hardware-Anforderungen</h3>
<p>
<b>Minimum:</b> 400MHz Pentium 2, mit mindestens 192MB RAM.<br>
<b>Empfohlen:</b> 1GHz-Prozessor oder schneller mit 256MB
<!-- decreasing agaisnt my will :(-->
RAM oder mehr (besonders dann wenn Sie Windows XP benutzen).
</p>
<h3>Aktualisierungen</h3>
<p>
Freenet bietet einen über Freenet arbeitenden Aktualisierungs-Mechanismus; wir
empfehlen diesen statt der Aktualisierungs-Skripte zu benutzen. Sie können Ihren
Knoten jedoch auch manuell Aktualisieren:
</p>
<ul>
<li>Windows-Benutzer können auf die neuste stabile Freenet-Version
aktualisieren indem sie auf die &bdquo;update.cmd&ldquo; im Freenet-Ordner
klicken.</li>
<li>Linux-Benutzer können auf ähnliche Weise Aktualisieren indem Sie das
Shell-Skript update.sh im &bdquo;freenet/bin/&ldquo;-Verzeichnis ausführen.</li>
</ul>
<p>
<small><b>Hinweis:</b> <a href="/download-old.html">Hier</a> können Sie
immernoch die Download-Seite für Freenet 0.5 finden, 0.5 wird jedoch nicht mehr
offiziell unterstützt oder weiterentwickelt und 0.7 bietet viele drastische
Verbesserungen, nicht zuletzt, dass es deutlich schneller ist.</small>
</p>
