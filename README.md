# plg_optoutmarker
Plugin für Joomla zur Markierung interner Besucher anhand der IP oder eines Headers zum Ausschluss in Google Analytics.

**Zweck**
Das Plugin dient dazu, anhand eines IP-Musters und / oder eines individuellen Headers der Anfrage einen Marker (z. B. per JavaScript-Variable oder dataLayer) in den `<head>` zu implementieren, der zum Ausschluss der internen Besucher aus der Webanalyse bzw. dem Betrieb eines Kontrollprofils für interne Besuche per Filter zu ermöglichen. 

**Hinweise zur Verwendung**
Unter [blog.gandke.de](http://blog.gandke.de) findet sich ein ausführlicher Beitrag über den Einsatz des Plugins zum Ausschluss von internem Traffic in Google Analytics. Hier wird auch die Einrichtung eines individuellen Headers beschrieben und es finden sich Hinweise auf ggf. bestehende technische Hürden. 

Das Plugin ist als "Rumpfplugin" gedacht und kann an die eigenen Bedürfnisse angepasst werden, um zu den Rahmenbedingungen der eigenen Site zu passen. 

**Installation**
Im Backend der Site kann das ZIP-Archiv aus dem Ordner `/extension/` unter "Erweiterungen - Installieren" hochgeladen werden. Über "Erweiterungen - Plugins" dann nach dem Marker suchen (Name: GA OptOut Marker) und per Klick zu den Einstellungen wechseln. Dort kann ein IP-Muster und / oder ein Name und ein Sollwert eines individuellen Headers angegeben werden. Es müssen nicht, können aber beide Wege parallel eingesetzt werden. Was nicht genutzt werden soll, darf leer bleiben.  

Nach Aktivierung wird bei passender IP bzw. passendem Header der angegebene Textblock in den Kopf der Seiten implementiert. Wie damit eine benutzerdefinierte Dimension zum Filtern der Besucher angelegt werden kann, wie ein individueller Header gesendet und konfiguriert wird etc. findet sich im o. a. Blogbeitrag. 



