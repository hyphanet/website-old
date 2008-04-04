<h2>Freenet 0.5 herunterladen</h2>

<p><big>
Beachten Sie, dass Freenet 0.5 nicht länger unterstützt wird, da die Entwicklung
zu Freenet 0.7 übergegangen ist, welches Sie <a href="/download.html">hier</a>
herunterladen können.
</big></p>

<h3>Wichtiger Hinweis für Erstbenutzer</h3>
<p>
Wenn Sie Freenet zum ersten Mal starten, wird der Knoten sehr wenig über das
Netzwerk wissen, was bedeutet, dass es <b>mehrere Minuten oder länger</b> dauern
kann um eine Web-Seite abzurufen. Bitte haben Sie Geduld, da Freenet mit der
Zeit lernen wird Informationen effizienter zu finden und seine Geschwindigkeit
wird duch die Benutzung steigen.
</p>

<i>Wenn Sie eine Firewall oder ein NAT-Gerät (z.B. Router) haben klicken Sie <a 
href="/faq.html#firewall"><b>hier</b></a> um ein paar Informationen zu
erhalten.</i>

<br>&nbsp;<br>
<h3>Windows</h3>
<ul>
<li>Laden Sie die <big><a
href="http://downloads.freenetproject.org/freenet-java-webinstall.exe"
>freenet-java-webinstall.exe</a></big> herunter, welche Java enthält, und
starten Sie sie <b>oder</b></li>
<li>wenn Sie bereits Java 5 Update 4 oder höher (aus Sicherheitsgründen
<b>dringend</b> empfohlen, obwohl Version 1.4.1 oder höher auch funktioniert)
haben, <big><a href="http://downloads.freenetproject.org/freenet-webinstall.exe"
>freenet-webinstall.exe</a></big></li>
</ul>
<p>Sie wird Freenet und andere benötigte Komponenten automatisch für Sie
installieren. Nach Abschluss der Installation klicken Sie auf das kleine blaue
Hasen-Symbol in ihrer Task-Leiste.</p>
<p>(Freenet enthält <u><b>weder Spionage- noch Werbe-Software</b></u>, es ist
Freie Software! Der Quellcode kann öffentlich eingesehen werden)</p>
<br>
<p>
Freenet funktioniert am besten mit <b>Windows 2000, XP Professional oder NT.</b>
Windows ME, 98 und 95 funktionieren weniger gut.
<!-- 2000 and Millenium Edition are different; all 2k's work good.  Millenium is also a bit borked.  The borked one is XP Home-->
</p>
<br>
<h3>Unix/Linux</h3>
<p>
Sie brauchen ein aktuelles Java Runtime Environment (JRE - Java
Ausführungs-Umgebung). Die besten Ergebnisse haben wir mit Suns Java Runtime
Environment erzielt, welches von <a href="http://java.com/de/"
>http://java.com/de/</a> heruntergeladen werden kann.
</p>
<p>
Java Version 1.4.2 und höher wird funktionieren. Seien Sie sich jedoch bewusst,
dass in den Versionen vor Java 1.5 Update 4 Sicherheitslücken im Applet sind.
Generell empfehlen wir mindestens Java 1.4.2 zu benutzen.
</p>
<p>
Freenet läuft zurzeit, aufgrund von Fehlern in Classpath, nicht auf Kaffe oder
GCJ. Wir arbeiten daran.
</p>
<p>Wenn Sie Java installiert haben laden Sie <a 
href="http://downloads.freenetproject.org/freenet-stable-latest.tgz"
>freenet-stable-latest.tgz</a> herunter. Starten Sie indem Sie Folgendes
eingeben:
<pre>
$ tar xzf freenet-stable-latest.tgz
$ cd freenet
$ sh start-freenet.sh
</pre>
<p>
Warten Sie ein paar Sekunden nachdem Sie Freenet gestartet haben um es
hochfahren zu lassen (auf einem langsamen Computer könnte es sein, dass Sie 30
Sekunden warten müssen) und besuchen Sie http://127.0.0.1:8888/ in ihrem
Web-Browser um auf Freenets Benutzer-Oberfläche zuzugreifen.
</p>
<br>

<h3>Hardware-Anforderungen</h3>
<p><b>Minimum:</b> 400MHz Pentium 2, mit mindestens 192MB RAM.<br>
<b>Empfohlen:</b> 1GHz-Prozessor oder schneller mit 256MB
<!-- decreasing agaisnt my will :(-->RAM oder mehr (besonders wenn Sie Windows
XP benutzen). 
</p>
<br>
<h3>Aktualisierungen</h3>
<p>
Nachdem Sie Freenet installiert haben können Windows-Benutzer auf die neuste
tägliche &bdquo;Schnappschuss&ldquo;-Version von Freenet aktualisieren, indem
auf &bdquo;Update Snapshot&ldquo; in dem Freenet-Ordner in ihrem Startmenü
klicken.
</p>
<p>
Linux-Benutzer können auf ähnliche Art und Weise aktualisieren, indem sie das
Shell-Skript update.sh im Freenet-Ordner ausführen.
</p>
<p>
Um die neuesten Änderungen der stabilen Versionen zu sehen, gehen Sie zur <b><a
href="/whatsnew.html">Changelog</a></b>.
</p>
<br>

<h3>Quellcode</h3>
Unsere 0.5-Änderungsliste kann <a href="/whatsnew.html">hier</a> gefunden werden.
Den neusten Quellcode können Sie aus dem SVN <a
href="http://freenet.googlecode.com/svn/branches/legacy/stable/"
>http://freenet.googlecode.com/svn/branches/legacy/stable/</a> beziehen oder Sie
können einen täglichen Schnappschuss herunterladen:
<ul>
<li><a href="http://downloads.freenetproject.org/freenet-stable-latest.src.tbz"
>Stable</a> - aktueller Quellcode der stabilen Version</li>
<li><a
href="http://downloads.freenetproject.org/freenet-unstable-latest.src.tbz"
>Unstable</a> - aktueller Quellcode der instabilen Version</li>
<li><a
href="http://downloads.freenetproject.org/freenet-contrib-latest.src.tar.bz2"
>Contrib</a> - separates Modul, das gebraucht wird um die freenet-ext.jar zu
kompilieren; entpacken Sie dies und eines der oberen in ein gemeinsames
Überverzeichnis und führen Sie dann &bdquo;ant distclean dist&ldquo; aus um
alles zu kompilieren.</li>
</ul>
<br>
<!--end of empty space-->
<h3>Dokumentation</h3>

<p>Diese Seite enthält Links zu Dokumentationen, die vor allem für Entwickler
von Freenet und Freenet-Anwendungen interessant sein dürften. Leute mit
Interesse daran wie Freenet auf einer höheren Abstraktionsebene funktioniert,
sollten <a href="/papers.html">hier</a> suchen.
</p>

<h3><a href="/fcp.html">FCP (Freenet Client 
  Protocol)</a></h3>
<p>
FCP soll Entwickler von Freenet-Clients vor den Details und den sich im
ständigen Wandel befindlichen Interna des Freenet-Knotens schützen.
</p>

<h3><a href="/fec.html">FEC (Forward Error-Correction) Protocol</a></h3>
<p>FEC kümmert sich speziell um das Einfügen und Empfangen von redundanten
Splitfiles.</p>

<h3><a href="/metadata.html">Freenet Metadaten Spezifikation</a></h3>
<p>
Diese Spezifikation ist für Client-Metadaten. Sie dienen dazu Funktionalität für
das Erstellen von Web-Seiten innerhalb des Freenets zu bieten und stellen eine
allgemeine Beschreibung der Daten die in das Freenet eingefügt wurden dar.
</p>
