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

<h2>Mit Freenet verbinden</h2>
<p>Es gibt zwei Möglichkeiten sich mit dem Freenet zu verbinden:</p>
<ul><li>Sie können den unsicheren Modus aktivieren (der Installations-Assistent
wird Sie danach fragen), dann wird Freenet automatisch nach Knoten suchen mit
denen es sich verbinden kann - Fremde.</li>
<li>Sie können sich mit Knoten verbinden, die von Leuten betrieben werden, die
Sie kennen - Freunde. Beachten Sie, dass dies Leute sein sollten, die Sie
wirklich, in einem gewissen Grad, kennen, um eine gute Netzwerk-Struktur
und maximale Sicherheit zu erhalten.</li></ul>
<p>
In der Praxis sollten Sie wahrscheinlich beide Möglichkeiten nutzen, wenn Sie
nicht wirklich paranoid sind, in welchem Fall Sie natürlich nur Verbindungen mit
Leuten denen Sie vertrauen herstellen sollten. Der unsichere Modus sollte
automatisch funktionieren, sobald er aktiviert wurde, deshalb handelt der Rest
dieser Seite von dem Herstellen einer Verbindung zu Freunden.
</p>
<p>
Um sich mit den Knoten Ihrer Freunde zu verbinden, müssen Sie Knoten-Referenzen
mit ihnen austauschen. Die Referenzen müssen auf
<span style="font-weight:bold;">beiden Seiten</span> hinzugefügt werden, um eine
Verbindung herzustellen. Sie müssen also ihre/seine und sie/er Ihre Referenz
hinzufügen.
</p>
<p>
<span style="font-style:italic;">Wenn Sie einen frisch aufgesetzten Knoten haben,
dann haben Sie keine Daten in Ihrem Datenspeicher zwischengespeichert und nur
sehr wenige Verbindungen, auch wenn Sie den unsicheren Modus aktiviert haben.
Anfragen werden in zufälliger Art und Weise gesendet.
<span style="font-weight:bold;">Dies führt dazu, dass einige (oder alle) Anfrage
ihre Lebensdauer überschreiten, bevor Sie etwas zurückliefern können.</span>
Ihr Freenet-Knoten benötigt ein paar Tage um mehr Geschwindigkeit zu bekommen,
verlieren Sie deshalb bitte nicht die Geduld.
</span>
</p>
<p>
Sie sollten zu jeder Zeit mit mindestens drei Knoten verbunden sein,
idealer Weise mindestens fünf bis sieben. Da manche von Zeit zu Zeit nicht
erreichbar sein können, müssen Sie sich mit ein paar mehr Knoten verbinden um
die gewünschte Anzahl zu erreichen. Die Knoten, die direkt mit Ihnen verbunden
sind, sind die einzigen Knoten die sehen könnten welche Art von Datenverkehr
Ihren Knoten passiert. Wenn aber der unsichere Modus aktiviert ist, kann jeder
Knoten Ihren Knoten finden; dies ist der große Vorteil davon, den unsicheren
Modus <b>nicht</b> einzuschalten: Sie sind, außer für Ihre Freunde, praktisch
unsichtbar. In der Praxis fangen die meisten Leute mit dem unsicheren Modus an
und fügen nach und nach Freunde hinzu und schalten hoffentlich den unsicheren
Modus ab, sobald sie mindestens 10 Freunde haben.
</p>
<img src="/image/Freenet-architecture-small.png">
<br/>
<span style="font-size:75%;font-style:italic;">Abbildung 1: Sichtbare
Freenet-Verbindungen</span>
<p>
In der Abbildung hat <span style="font-weight:bold;">Knoten A</span> auch eine
Anzahl verbundener Knoten, aber sie alle (außer Ihr eigener Knoten) sind für Sie
unsichtbar. Der Routing-Algorithmus kann deshalb den Datenverkehr nur an einen
der wenigen Knoten weiterleiten die Sie kennen und von dem er denkt, dass er am
besten in dazu in der Lage ist zu finden was Sie suchen.
</p>
<p>
Der Datenverkehr ist verschlüsselt, deshalb ist es für die Knoten mit denen Sie
sich verbunden haben ziemlich schwierig herauszufinden woraus Ihr
Freenet-Verkehr besteht, aber es ist nicht unmöglich. Es ist deshalb wichtig,
dass Sie sich nur mit Leuten verbinden, die Sie kennen. Wenn das nicht möglich
sein sollte, dann zumindest Leute mit denen Sie sich schon mal unterhalten
haben.
</p>
<p>
Es gibt mehrere Möglichkeiten um Knoten-Referenzen von Partnern hinzuzufügen.
</p>

<h3>FProxy</h3>
<p>
Partner-Knoten mit FProxy zu verbinden kann auf verschiedene Weise geschehen.
Ihnen ist allen gemeinsam, dass sie im Menüpunkt
<span style="font-weight:bold;">Freunde</span> oder unter dem Link
<a href="http://127.0.0.1:8888/friends/" rel="nofollow">http://127.0.0.1:8888/friends/</a> zu
finden sind. Dies ist die Sache, die das alles geschehen lässt:
</p>
<img src="/image/add_peers.png">
<p>Wie Sie sehen können gibt es drei Wege eine Knoten-Referenz von jemandem
anderen zu bekommen:</p>
<ul>
<li>Sie &bdquo;so wie sie ist&ldquo; in das obere Feld einfügen,</li>
<li>eine URL die auf die Referenz verweist, wie zum Beispiel
<a href="http://dark-code.bulix.org/">http://dark-code.bulix.org/</a> oder</li>
<li>eine Datei, welche die Referenz enthält.</li>
</ul>
<p>
bulix.org ist eine sogenannte <span style="font-weight:bold;">Paste-Bin</span>
wo Sie Ihre Knoten-Referenz hinzufügen können. Stellen Sie sicher, dass das
<span style="font-weight:bold;">Private</span>-Kästchen aktiviert ist und
klicken Sie auf <span style="font-weight:bold;">Paste</span>.
</p>
<p>
Die Paste-Bin gibt daraufhin eine URL zurück (z.B.
http://dark-code.bulix.org/yuf01h-34676?raw), welche mit anderen ausgetauscht
werden kann. Achten Sie darauf, dass Sie
<span style="font-weight:bold;">?raw</span> an den Link anhängen. Dies bewirkt,
dass der Link auf die eigentlichen Daten, ohne zusätzliche Design-Elemente,
verweist.
</p>
<p>
Ihre eigene Knoten-Referenz finden Sie auf der
<a href="http://127.0.0.1:8888/friends/" rel="nofollow">Freunde-Seite</a>, unter der Überschrift
<span style="font-weight:bold;">Meine Knoten-Referenz</span>. Sie sieht etwa
so aus (aus Platzgründen gekürzt):
</p>

<pre>
lastGoodVersion=Fred,0.7,1.0,1010
sig=7c7edc8c5250e42ac4cb161b216b70de7019221f1b331f0f92bd67439[...]609660f0d4
identity=5tBtS3R59nfOTvc1be~V0sSfkWir8EW38YeocP0gsYM
myName=FreenetTestInstall
location=0.02970997399122577
testnet=false
version=Fred,0.7,1.0,1016
physical.udp=83.255.75.223:13762
ark.pubURI=SSK@M1wjFha2tujYo50QQF~5Fqz5anVEiIzI9VrA8IrhAsQ,5M[...],AQACAAE/ark
ark.number=0
dsaPubKey.y=JhlWYVx8rA0y0x1Fb3y9TfqXDYiIsnkEka8PLsePerpCELTIn[...]laHe2bkl0O7Dg
dsaGroup.p=AIYIrE9VNhM38qPjirGGT-PJjWZBHY0q-JxSYyDFQfZQeOhrx4[...]ofeLdX7xhehuk
dsaGroup.g=UaRatnDByf0QvTlaaAXTMzn1Z15LDTXe-J~gOqXCv0zpz83CVn[...]Fuqt8yZe1PDVg
dsaGroup.q=ALFDNoq81R9Y1kQNVBc5kzmk0VvvCWosXY5t9E9S1tN5
End
</pre>
<p>
Denken Sie daran, dass beide, Sie und der Knoten mit dem Sie sich verbinden
wollen, Knoten-Referenzen hinzufügen müssen damit die Verbindung funktioniert.
Dies bedeutet, dass wenn Sie die Knoten-Referenz einer Person auf Ihrer Seite
hinzufügen, aber diese Person Ihre Knoten-Referenz nicht auf ihrer Seite
hinzufügt die Verbindung <span style="font-weight:bold;">nicht
funktioniert</span>.
</p>

<h3>Freunde</h3>
<p>
Wenn Sie einige Verbindungen haben, können Sie die Freunde-Seite besuchen.
Sie sollte etwa so aussehen:
</p>
<img src="/image/Freenet-darknet_peers.png">
<p>Dort werden evtl. einige Status-Nachrichten angezeigt:</p>
<ul>
<li>VERBUNDEN - der Knoten ist bereit Ihre Anfrage entgegenzunehmen</li>
<li>BESCHÄFTIGT - der Knoten ist überlastet und nicht in der Lage zu antworten</li>
<li>NICHT VERBUNDEN - der Knoten ist nicht mit Ihrem Knoten verbunden und
wahrscheinlich ausgeschaltet</li>
<li>NIEMALS VERBUNDEN - die Verbindung zwischen den Knoten wurde noch nicht
hergestellt. Gründe dafür könnten sein: Probleme/Beschränkungen einer Firewall,
dass eine Seite die Knoten-Referenz der anderen Seite nicht hinzugefügt hat oder
dass die Knoten noch nicht zum selben Zeitpunkt online waren um die Verbindung
zu bestätigen. Wenn das Problem über einen längeren Zeitraum besteht und beide
Seiten sich gegenseitig hinzugefügt haben, versuchen Sie den
Verbindungs-Prozess zu wiederholen.</li>
</ul>
<p>In der &bdquo;Verbunden/Untätig&ldquo;-Spalte können Sie sehen, wieviel Zeit
seit der letzten Status-Nachricht vergangen ist.</p>
