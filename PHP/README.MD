# PHP-CS-Fixer

## Info
Der PHP CS Fixer kontrolliert den Codestyle und kann diesen Korrigieren oder die Fehler anzeigen. <br />
https://cs.symfony.com/doc/installation.html

## Installation
Zum Installieren, führe folgende Kommandos aus:
Entweder 
``composer global require friendsofphp/php-cs-fixer``
oder
``brew install php-cs-fixer``

Nun kann das Tool mit dem Kommando ``php-cs-fixer fix .`` gestartet werden.

Alternativ kann das Tool im Projekt installiert werden, mit ``composer require --dev friendsofphp/php-cs-fixer``.
Gestartet wird dieses dann mit ``./vendor/bin/php-cs-fixer fix .``

Sollte die automatische Korrektur der gefundenen Fehler nicht gewünscht sein, kann stattdessen folgendes Kommando genutzt werden: ``php-cs-fixer list-files`` 

## Konfiguration
Der Fixer verwendet ein Standard-Regelwerk. Um dies Anzupassen, wird die Konfig-Datei .php_cs im Projekt-Root erstellt. Diese wird dadruch vom Tool automatisch verwendet.
Es wird im Projekt eine Datei mit Namen .php_cs.cache erstellt. Diese kann ins gitignore eingetragen werden.
