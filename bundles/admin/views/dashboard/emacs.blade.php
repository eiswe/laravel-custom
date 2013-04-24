@layout('admin::layouts.navi')

@section('subnav')
	<?php 
		$url = URL::base(); //return http://laravel.dev
        print '<li>                 <a href="'.$url.'/admin/home">          Home      </a></li>';
        print '<li class="active">  <a href="'.$url.'/admin/emacs">         Emacs  </a></li>';
        print '<li>                 <a href="'.$url.'/admin/page/list">     Pages  </a></li>';
	?>
@endsection

@section('content')

  <div class="span9">


<h1 class="title">exem</h1>


<div id="table-of-contents">
<h2>Table of Contents</h2>
<div id="text-table-of-contents">
<ul>
<li><a href="#sec-1">1 Emacs </a></li>
<li><a href="#sec-2">2 Terminator </a></li>
<li><a href="#sec-3">3 LEXIKON </a>
<ul>
<li><a href="#sec-3.1">3.1 Technisch [6/10] [60%] </a>
<ul>
<li><a href="#sec-3.1.1">3.1.1 OSI </a></li>
<li><a href="#sec-3.1.2">3.1.2 HotspotRechte </a></li>
<li><a href="#sec-3.1.3">3.1.3 WLAN_Eng</sub> </a></li>
<li><a href="#sec-3.1.4">3.1.4 VoIP (RTP)_Eng</sub> </a></li>
<li><a href="#sec-3.1.5">3.1.5 STP </a></li>
<li><a href="#sec-3.1.6">3.1.6 NAT </a></li>
<li><a href="#sec-3.1.7">3.1.7 DHCP Funktionen </a></li>
<li><a href="#sec-3.1.8">3.1.8 IPsec </a></li>
<li><a href="#sec-3.1.9">3.1.9 VPN </a></li>
<li><a href="#sec-3.1.10">3.1.10 DoS / DDoS </a></li>
<li><a href="#sec-3.1.11">3.1.11 Firewall </a></li>
<li><a href="#sec-3.1.12">3.1.12 SQL </a></li>
<li><a href="#sec-3.1.13">3.1.13 Service-Desk-Arbeitsplatz   !!!! WTF is it for a fucking bullshit? </a></li>
</ul>
</li>
<li><a href="#sec-3.2">3.2 Wirtschaft </a>
<ul>
<li><a href="#sec-3.2.1">3.2.1 Liefer* </a></li>
<li><a href="#sec-3.2.2">3.2.2 Kosten* </a></li>
<li><a href="#sec-3.2.3">3.2.3 Kündig* </a></li>
<li><a href="#sec-3.2.4">3.2.4 Azubi </a></li>
<li><a href="#sec-3.2.5">3.2.5 Rentabilität </a></li>
<li><a href="#sec-3.2.6">3.2.6 Prüfungsfragen WI/SO [2/5] [40%] </a></li>
<li><a href="#sec-3.2.7">3.2.7 Projektorganisation </a></li>
<li><a href="#sec-3.2.8">3.2.8 Kick-Off Meeting </a></li>
<li><a href="#sec-3.2.9">3.2.9 Lastenheft </a></li>
</ul>
</li>
<li><a href="#sec-3.3">3.3 Hardware [3/4] [75%] </a>
<ul>
<li><a href="#sec-3.3.1">3.3.1 Speicher </a></li>
<li><a href="#sec-3.3.2">3.3.2 HDD </a></li>
<li><a href="#sec-3.3.3">3.3.3 USV </a></li>
<li><a href="#sec-3.3.4">3.3.4 Datensicherung </a></li>
<li><a href="#sec-3.3.5">3.3.5 Verschlüsselung </a></li>
</ul></li>
</ul>
</li>
<li><a href="#sec-4">4 Drupal 7 </a>
<ul>
<li><a href="#sec-4.1">4.1 Wichtige Module: </a></li>
<li><a href="#sec-4.2">4.2 Add Fotos and Videos </a></li>
<li><a href="#sec-4.3">4.3 Increase RAM usage of Drupal </a></li>
<li><a href="#sec-4.4">4.4 Increase Upload File Size </a>
<ul>
<li><a href="#sec-4.4.1">4.4.1 To 80 MB </a></li>
<li><a href="#sec-4.4.2">4.4.2 To 10MB </a></li>
<li><a href="#sec-4.4.3">4.4.3 From Default to 10M </a></li>
</ul></li>
</ul>
</li>
<li><a href="#sec-5">5 Sprachen </a>
<ul>
<li><a href="#sec-5.1">5.1 Italienisch </a>
<ul>
<li><a href="#sec-5.1.1">5.1.1 Vokabeln </a></li>
</ul>
</li>
<li><a href="#sec-5.2">5.2 -&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </a></li>
<li><a href="#sec-5.3">5.3 CSS </a></li>
<li><a href="#sec-5.4">5.4 PHP </a>
<ul>
<li><a href="#sec-5.4.1">5.4.1 Automatische Weiterleitung </a></li>
<li><a href="#sec-5.4.2">5.4.2 Alert in HTMLinPHP </a></li>
<li><a href="#sec-5.4.3">5.4.3 If else / switch case </a></li>
<li><a href="#sec-5.4.4">5.4.4 Check empty? </a></li>
<li><a href="#sec-5.4.5">5.4.5 input attribute readonly </a></li>
</ul>
</li>
<li><a href="#sec-5.5">5.5 Python [4/5] </a>
<ul>
<li><a href="#sec-5.5.1">5.5.1 Variables </a></li>
<li><a href="#sec-5.5.2">5.5.2 Iterating through Array </a></li>
<li><a href="#sec-5.5.3">5.5.3 Funktionen </a></li>
<li><a href="#sec-5.5.4">5.5.4 Datetime </a></li>
<li><a href="#sec-5.5.5">5.5.5 Boolean </a></li>
<li><a href="#sec-5.5.6">5.5.6 If / Elif / Else </a></li>
<li><a href="#sec-5.5.7">5.5.7 Threads </a></li>
<li><a href="#sec-5.5.8">5.5.8 PyOpenGL </a></li>
<li><a href="#sec-5.5.9">5.5.9 Sring Manipulation </a></li>
<li><a href="#sec-5.5.10">5.5.10 Regular Expressions </a></li>
<li><a href="#sec-5.5.11">5.5.11 HTTP API urllib2  // Parse XML, JSON [7/7] [100%] </a></li>
<li><a href="#sec-5.5.12">5.5.12 List and Functions [5/5] [100%] </a></li>
<li><a href="#sec-5.5.13">5.5.13 Loops [3/3] [100%] </a></li>
<li><a href="#sec-5.5.14">5.5.14 Advanced Topics in Python [4/5] [80%] </a></li>
<li><a href="#sec-5.5.15">5.5.15 Introduction to Classes [2/3] [66%] </a></li>
<li><a href="#sec-5.5.16">5.5.16 Python Lession Create if statement </a></li>
</ul>
</li>
<li><a href="#sec-5.6">5.6 JavaScript CodeCadamy </a>
<ul>
<li><a href="#sec-5.6.1">5.6.1 Variables </a></li>
<li><a href="#sec-5.6.2">5.6.2 If Else </a></li>
<li><a href="#sec-5.6.3">5.6.3 Schleifen </a></li>
<li><a href="#sec-5.6.4">5.6.4 Functions </a></li>
<li><a href="#sec-5.6.5">5.6.5 &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </a></li>
<li><a href="#sec-5.6.6">5.6.6 Codecadamy Projekte </a></li>
<li><a href="#sec-5.6.7">5.6.7 First game in JS </a></li>
</ul>
</li>
<li><a href="#sec-5.7">5.7 WebSite HTML PHP JS CodeCademy </a>
<ul>
<li><a href="#sec-5.7.1">5.7.1 CSS </a></li>
<li><a href="#sec-5.7.2">5.7.2 Web Forms Full - HTML - CSS </a></li>
<li><a href="#sec-5.7.3">5.7.3 Less Code More Magic - HTML - CSS - JS </a></li>
<li><a href="#sec-5.7.4">5.7.4 &ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </a></li>
<li><a href="#sec-5.7.5">5.7.5 Multimedia WebProject </a></li>
</ul>
</li>
<li><a href="#sec-5.8">5.8 -&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </a></li>
<li><a href="#sec-5.9">5.9 LISP </a>
<ul>
<li><a href="#sec-5.9.1">5.9.1 Open LISP Console </a></li>
<li><a href="#sec-5.9.2">5.9.2 Variables </a></li>
</ul>
</li>
<li><a href="#sec-5.10">5.10 Django not really s.th.. </a></li>
<li><a href="#sec-5.11">5.11 Groovy mixture Python-Java </a></li>
</ul>
</li>
<li><a href="#sec-6">6 ArchLinux </a>
<ul>
<li><a href="#sec-6.1">6.1 Gnome3 installation </a>
<ul>
<li><a href="#sec-6.1.1">6.1.1 NEED TO INSTALL &hellip; Irgdenwelche von denen! </a></li>
<li><a href="#sec-6.1.2">6.1.2 PASTE ARCH WIKI </a></li>
<li><a href="#sec-6.1.3">6.1.3 Initscript anpassen </a></li>
</ul>
</li>
<li><a href="#sec-6.2">6.2 Packete verwalten / User anlegen [100%] </a>
<ul>
<li><a href="#sec-6.2.1">6.2.1 pacman </a></li>
<li><a href="#sec-6.2.2">6.2.2 yaourt </a></li>
<li><a href="#sec-6.2.3">6.2.3 User anlegen für anmeldung unter Gnome3 + SUDO </a></li>
</ul></li>
</ul>
</li>
<li><a href="#sec-7">7 Sabayon / Gentoo </a>
<ul>
<li><a href="#sec-7.1">7.1 XAMPP installation </a></li>
</ul>
</li>
<li><a href="#sec-8">8 Linux Allgemein </a>
<ul>
<li><a href="#sec-8.1">8.1 Befehle ohne Attribute </a>
<ul>
<li><a href="#sec-8.1.1">8.1.1 |&ndash;&mdash;&mdash;&mdash;+-&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;| </a></li>
<li><a href="#sec-8.1.2">8.1.2 | bash      | Shell, Befehlsinterpreter                                                              | </a></li>
<li><a href="#sec-8.1.3">8.1.3 | echo      | Ausgabe                                                                                | </a></li>
<li><a href="#sec-8.1.4">8.1.4 | env       | Umgebungsvariablen, Wie SET unter WINDOWS (t=beispiel, echo $t)                        | </a></li>
<li><a href="#sec-8.1.5">8.1.5 | exec      | Execute File, weiß nicht wie´s verwendet wird&hellip;   ?!?!?!!??!!?!?!?!?!!?!?!?!?!?!?!?   | </a></li>
<li><a href="#sec-8.1.6">8.1.6 | export    | Rechte der Umgebungsvariablen           ?!?!?!?!?!                                     | </a></li>
<li><a href="#sec-8.1.7">8.1.7 | grep      | filtert die ausgabe oder strings                                                       | </a></li>
<li><a href="#sec-8.1.8">8.1.8 | pwd       | Print Working Directory, Aktuelles Verz.                                               | </a></li>
<li><a href="#sec-8.1.9">8.1.9 | set       | sollte umgebungsvariablen setzen  &ndash; dauerhaft?, bitte testen!                         | </a></li>
<li><a href="#sec-8.1.10">8.1.10 | unset     | löscht umgebungsvariablen                                                              | </a></li>
<li><a href="#sec-8.1.11">8.1.11 | man       | ManPages, Anleitung zu Befehllen                                                       | </a></li>
<li><a href="#sec-8.1.12">8.1.12 | uname     | Details zu OS und Rechner                                                              | </a></li>
<li><a href="#sec-8.1.13">8.1.13 | history   | Die zuletzt eingegebenen Befehle                                                       | </a></li>
<li><a href="#sec-8.1.14">8.1.14 | cat       | Dann Daten anzeigen, zusammenfügen, trennen, bearbeiten                                | </a></li>
<li><a href="#sec-8.1.15">8.1.15 | cut       | !!!BESTE!!! Zieht einen bestimmten Abschnitt aus einer Datei !!!                       | </a></li>
<li><a href="#sec-8.1.16">8.1.16 | expand    | Sollte Leerzeichen gegen Tabs tauschen                                                 | </a></li>
<li><a href="#sec-8.1.17">8.1.17 | fmt       | Formatiert Text - fmt -w (weigth) 50 /datei - begrenzt den text auf eine breite von 50 | </a></li>
<li><a href="#sec-8.1.18">8.1.18 | head      | Zeigt die ersten Zeilen einer datei an                                                 | </a></li>
<li><a href="#sec-8.1.19">8.1.19 | od        | OctalDump - od /datei                                                                  | </a></li>
<li><a href="#sec-8.1.20">8.1.20 | join      | Zeigt übereinstimmende Zeilen an                                                       | </a></li>
<li><a href="#sec-8.1.21">8.1.21 | nl        | Nummeriert die Zeilen einer Datei                                                      | </a></li>
<li><a href="#sec-8.1.22">8.1.22 | pr        | sieht beim Drucken besser aus (formatierung)                                           | </a></li>
<li><a href="#sec-8.1.23">8.1.23 | sed       |                                                                                        | </a></li>
<li><a href="#sec-8.1.24">8.1.24 | sort      | sortiert die ausgabe                                                                   | </a></li>
<li><a href="#sec-8.1.25">8.1.25 | split     | teilt dateien                                                                          | </a></li>
<li><a href="#sec-8.1.26">8.1.26 | tail      | zeigt das ende einer datei -f aktuallisiert es bei veränderung (oder nach Zeit)        | </a></li>
<li><a href="#sec-8.1.27">8.1.27 | dmesg     | Zeigt Kernel- und Systemstart- Fehler "Ringpuffer des Kernel"                          | </a></li>
<li><a href="#sec-8.1.28">8.1.28 | ps        | zeigt die laufenden Prozesse an                                                        | </a></li>
<li><a href="#sec-8.1.29">8.1.29 | fdisk     | Partitioniert SpeicherMedien                                                           | </a></li>
<li><a href="#sec-8.1.30">8.1.30 | mkfs.ext2 | erstellt ein DateiSystem in einem Device                                               | </a></li>
<li><a href="#sec-8.1.31">8.1.31 | mke2fs    | das gleiche wie mkfs.ext2                                                              | </a></li>
<li><a href="#sec-8.1.32">8.1.32 | iostat    | -m 5 /dev/device m=Geschwindigkeit                                                     | </a></li>
<li><a href="#sec-8.1.33">8.1.33 | df        | Partitionsgrößen erfahren                                                              | </a></li>
<li><a href="#sec-8.1.34">8.1.34 | dosfsck   | -a (Autorepair) -w (write) -V (verificate) DosFileSystemCheck                          | </a></li>
<li><a href="#sec-8.1.35">8.1.35 | blkid     | Zeigt die UUID der Aktuellen Festplatte an!                                            | </a></li>
<li><a href="#sec-8.1.36">8.1.36 | read      | !!! Ruft zu einer Eingabe auf!                                                         | </a></li>
<li><a href="#sec-8.1.37">8.1.37 |&ndash;&mdash;&mdash;&mdash;+-&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;| </a></li>
</ul>
</li>
<li><a href="#sec-8.2">8.2 awk, sed </a>
<ul>
<li><a href="#sec-8.2.1">8.2.1 awk </a></li>
<li><a href="#sec-8.2.2">8.2.2 sed </a></li>
</ul>
</li>
<li><a href="#sec-8.3">8.3 Rechte </a></li>
<li><a href="#sec-8.4">8.4 Chroot Linux </a></li>
<li><a href="#sec-8.5">8.5 c++ unter linux </a></li>
<li><a href="#sec-8.6">8.6 Android SDK unter Linux </a></li>
<li><a href="#sec-8.7">8.7 Programme [16/18] [88%] </a>
<ul>
<li><a href="#sec-8.7.1">8.7.1 Github [5/6] [83%] </a></li>
<li><a href="#sec-8.7.2">8.7.2 Slurm </a></li>
<li><a href="#sec-8.7.3">8.7.3 ttyrec </a></li>
<li><a href="#sec-8.7.4">8.7.4 VLC </a></li>
<li><a href="#sec-8.7.5">8.7.5 Wine </a></li>
<li><a href="#sec-8.7.6">8.7.6 LVM2 </a></li>
<li><a href="#sec-8.7.7">8.7.7 NMAP </a></li>
<li><a href="#sec-8.7.8">8.7.8 Screen </a></li>
<li><a href="#sec-8.7.9">8.7.9 mPlayer </a></li>
<li><a href="#sec-8.7.10">8.7.10 Drucker </a></li>
<li><a href="#sec-8.7.11">8.7.11 RDesktop </a></li>
<li><a href="#sec-8.7.12">8.7.12 Teamviewer </a></li>
<li><a href="#sec-8.7.13">8.7.13 VirtualBox </a></li>
<li><a href="#sec-8.7.14">8.7.14 ImageMagick </a></li>
<li><a href="#sec-8.7.15">8.7.15 FlashPlugin x32 ArchLinux </a></li>
<li><a href="#sec-8.7.16">8.7.16 Nagios </a></li>
<li><a href="#sec-8.7.17">8.7.17 OpenSSH </a></li>
<li><a href="#sec-8.7.18">8.7.18 strace </a></li>
</ul>
</li>
<li><a href="#sec-8.8">8.8 Linux Einstellungen </a>
<ul>
<li><a href="#sec-8.8.1">8.8.1 Proxy Einrichten </a></li>
</ul></li>
</ul>
</li>
<li><a href="#sec-9">9 WEB! </a>
<ul>
<li><a href="#sec-9.1">9.1 .htaccess </a></li>
<li><a href="#sec-9.2">9.2 vhost - Laravel </a>
<ul>
<li><a href="#sec-9.2.1">9.2.1 Add Virtual Host </a></li>
<li><a href="#sec-9.2.2">9.2.2 Another way to add VHost </a></li>
<li><a href="#sec-9.2.3">9.2.3 Laravel in subdirectory .htaccess </a></li>
</ul></li>
</ul>
</li>
<li><a href="#sec-10">10 &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </a></li>
<li><a href="#sec-11">11 Projekte </a></li>
<li><a href="#sec-12">12 </a></li>
<li><a href="#sec-13">13 RIP    24/7  Server LimeBlack.de -&gt; PoisonNet !! AriOS  !! ( 192.168.0.105 ) [13/16] [81%] </a>
<ul>
<li><a href="#sec-13.1">13.1 Alias </a></li>
<li><a href="#sec-13.2">13.2 Backup [2/2] [100%] </a>
<ul>
<li><a href="#sec-13.2.1">13.2.1 Crontab </a></li>
<li><a href="#sec-13.2.2">13.2.2 Backupscript </a></li>
</ul>
</li>
<li><a href="#sec-13.3">13.3 Systemstart [2/2] [100%] </a>
<ul>
<li><a href="#sec-13.3.1">13.3.1 Init.d </a></li>
<li><a href="#sec-13.3.2">13.3.2 StartServices </a></li>
</ul>
</li>
<li><a href="#sec-13.4">13.4 Bukkit [3/7] </a>
<ul>
<li><a href="#sec-13.4.1">13.4.1 WRStone </a></li>
<li><a href="#sec-13.4.2">13.4.2 [#No Solution found!] MobileAdmin - doesnt works </a></li>
<li><a href="#sec-13.4.3">13.4.3 Dynmap </a></li>
<li><a href="#sec-13.4.4">13.4.4 VoxelSniper </a></li>
<li><a href="#sec-13.4.5">13.4.5 Basics V1 </a></li>
<li><a href="#sec-13.4.6">13.4.6 MobAmbush </a></li>
<li><a href="#sec-13.4.7">13.4.7 CityGuard </a></li>
</ul>
</li>
<li><a href="#sec-13.5">13.5 AppInventor &ndash;Edit plz! xD&hellip;im high! </a></li>
<li><a href="#sec-13.6">13.6 VNC </a></li>
<li><a href="#sec-13.7">13.7 SSH </a></li>
<li><a href="#sec-13.8">13.8 NodeJS </a></li>
<li><a href="#sec-13.9">13.9 Webmin </a></li>
<li><a href="#sec-13.10">13.10 Redmine </a></li>
<li><a href="#sec-13.11">13.11 Maqetta </a></li>
<li><a href="#sec-13.12">13.12 Etherpad [2/2] </a>
<ul>
<li><a href="#sec-13.12.1">13.12.1 Install Log </a></li>
<li><a href="#sec-13.12.2">13.12.2 Froxlor &ndash; Edit!! </a></li>
</ul>
</li>
<li><a href="#sec-13.13">13.13 MySQL, PHP5, PHPMyAdmin, Apache - install [4/4] </a>
<ul>
<li><a href="#sec-13.13.1">13.13.1 Apache </a></li>
<li><a href="#sec-13.13.2">13.13.2 Projekte </a></li>
<li><a href="#sec-13.13.3">13.13.3 Added Clean URL </a></li>
<li><a href="#sec-13.13.4">13.13.4 Solved ERROR 28.12.11 : </a></li>
<li><a href="#sec-13.13.5">13.13.5 PHP </a></li>
<li><a href="#sec-13.13.6">13.13.6 MySQL </a></li>
<li><a href="#sec-13.13.7">13.13.7 PHPMyAdmin </a></li>
</ul>
</li>
<li><a href="#sec-13.14">13.14 TeamSpeak </a></li>
<li><a href="#sec-13.15">13.15 Google Music </a></li>
<li><a href="#sec-13.16">13.16 Changelog OUTDATED </a></li>
</ul>
</li>
<li><a href="#sec-14">14 ONLINE s.t.  Server Sparky       -&gt; PoisonNet !! CrunchBang !! ( 192.168.0.103 ) </a>
<ul>
<li><a href="#sec-14.1">14.1 System </a>
<ul>
<li><a href="#sec-14.1.1">14.1.1 HDD Verschlüsselt </a></li>
</ul>
</li>
<li><a href="#sec-14.2">14.2 SSH </a></li>
<li><a href="#sec-14.3">14.3 MySQL, PHP5, PHPMyAdmin, Apache - install </a>
<ul>
<li><a href="#sec-14.3.1">14.3.1 Apache, PHP, PHPMyAdmin und MySQL </a></li>
</ul>
</li>
<li><a href="#sec-14.4">14.4 MineCraft </a></li>
<li><a href="#sec-14.5">14.5 VirtualBox </a>
<ul>
<li><a href="#sec-14.5.1">14.5.1 XP Server </a></li>
</ul>
</li>
<li><a href="#sec-14.6">14.6 OpenVPN </a>
<ul>
<li><a href="#sec-14.6.1">14.6.1 Config Server </a></li>
<li><a href="#sec-14.6.2">14.6.2 Config CLient </a></li>
<li><a href="#sec-14.6.3">14.6.3 Routing </a></li>
<li><a href="#sec-14.6.4">14.6.4 Probleme </a></li>
</ul></li>
</ul>
</li>
<li><a href="#sec-15">15 </a></li>
<li><a href="#sec-16">16 RaspBerry - TinkerForge  soll Ultimativer QuadroCopter werden </a>
<ul>
<li><a href="#sec-16.1">16.1 Preisliste </a></li>
<li><a href="#sec-16.2">16.2 Vorhandene Brick's </a>
<ul>
<li><a href="#sec-16.2.1">16.2.1 Master Brick </a></li>
<li><a href="#sec-16.2.2">16.2.2 Stepper Brick </a></li>
<li><a href="#sec-16.2.3">16.2.3 Ambientlight Bricklet </a></li>
<li><a href="#sec-16.2.4">16.2.4 Rotary Poti Bricklet </a></li>
<li><a href="#sec-16.2.5">16.2.5 Distance IR Bricklet </a></li>
<li><a href="#sec-16.2.6">16.2.6 4x20 LCD Display </a></li>
</ul>
</li>
<li><a href="#sec-16.3">16.3 Linkliste Einkauf: </a></li>
<li><a href="#sec-16.4">16.4 </a></li>
<li><a href="#sec-16.5">16.5 Brickd Version anzeigen: brickd &ndash;version </a></li>
<li><a href="#sec-16.6">16.6 </a></li>
<li><a href="#sec-16.7">16.7 Installation von Tinkerforge auf System Debian </a></li>
<li><a href="#sec-16.8">16.8 </a></li>
<li><a href="#sec-16.9">16.9 Starten des Brickd Daemons aus Source! </a></li>
<li><a href="#sec-16.10">16.10 Ort der Project Dateien </a></li>
<li><a href="#sec-16.11">16.11 Technik des Steuerungsscripts </a></li>
<li><a href="#sec-16.12">16.12 </a></li>
<li><a href="#sec-16.13">16.13 Raspberry mit WLan ausstatten (Debian) </a></li>
<li><a href="#sec-16.14">16.14 </a></li>
<li><a href="#sec-16.15">16.15 Installation auf neuem CrunchBang Debian System [4/4] [100%] - Hoffnung auf mehr Performance durch OpenBox oberfläche </a>
<ul>
<li><a href="#sec-16.15.1">16.15.1 Einstellungen am PI Debian </a></li>
<li><a href="#sec-16.15.2">16.15.2 Ersten Befehle! </a></li>
<li><a href="#sec-16.15.3">16.15.3 Installed wpasupplicant and config </a></li>
<li><a href="#sec-16.15.4">16.15.4 Run Script for test Performance </a></li>
<li><a href="#sec-16.15.5">16.15.5 OpenSSH neuinstallieren zum reset der config =) </a></li>
</ul></li>
</ul>
</li>
<li><a href="#sec-17">17 </a></li>
<li><a href="#sec-18">18 Kaspersky [8/8] [100%] </a>
<ul>
<li><a href="#sec-18.1">18.1 setup.ini - did i need it? </a></li>
<li><a href="#sec-18.2">18.2 real setup.ini </a></li>
<li><a href="#sec-18.3">18.3 Einstellungen </a>
<ul>
<li><a href="#sec-18.3.1">18.3.1 Benachrichtigungen (Client zum User) </a></li>
<li><a href="#sec-18.3.2">18.3.2 Client "rechte!" (Programm benutzbarkeit) </a></li>
</ul>
</li>
<li><a href="#sec-18.4">18.4 Installations-Versuch#1 </a>
<ul>
<li><a href="#sec-18.4.1">18.4.1 ERSTMAL IN DIE DOMÄNE </a></li>
</ul>
</li>
<li><a href="#sec-18.5">18.5 Installations-Versuch#2 </a>
<ul>
<li><a href="#sec-18.5.1">18.5.1 MySQL </a></li>
<li><a href="#sec-18.5.2">18.5.2 XAMPP!! </a></li>
</ul>
</li>
<li><a href="#sec-18.6">18.6 Installations-Versuch#3 </a></li>
<li><a href="#sec-18.7">18.7 Man halte kurz fest das Kaspersky jetzt läuft und auf erste CLients wartet. </a></li>
<li><a href="#sec-18.8">18.8 XPANTI  XP Client Installation </a></li>
<li><a href="#sec-18.9">18.9 WinAnti Win7 Client Installation </a></li>
<li><a href="#sec-18.10">18.10 EigAnti Win8 Client Installation [EXPERIMENTAL] </a></li>
<li><a href="#sec-18.11">18.11 Richtlinien verlieren ihre Einstellungen!!! </a></li>
<li><a href="#sec-18.12">18.12 InstallationsPacket erstellen </a>
<ul>
<li><a href="#sec-18.12.1">18.12.1 Anpassen der Setup.ini </a></li>
</ul></li>
</ul>
</li>
<li><a href="#sec-19">19 </a></li>
<li><a href="#sec-20">20 &ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </a></li>
<li><a href="#sec-21">21 </a></li>
<li><a href="#sec-22">22 Work - DVS Digital Video Systems a Rohde &amp; Schwarz Company </a>
<ul>
<li><a href="#sec-22.1">22.1 RR1Bob </a></li>
<li><a href="#sec-22.2">22.2 HW-Test </a></li>
<li><a href="#sec-22.3">22.3 Rohde und Schwarz PROXY </a></li>
</ul>
</li>
<li><a href="#sec-23">23 </a></li>
<li><a href="#sec-24">24 &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </a></li>
<li><a href="#sec-25">25 </a></li>
<li><a href="#sec-26">26 Emacs Reference </a></li>
</ul>
</div>
</div>

<div id="outline-container-1" class="outline-2">
<h2 id="sec-1"><span class="section-number-2">1</span> Emacs </h2>
<div class="outline-text-2" id="text-1">


<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Befehl</th><th scope="col">Funktion</th></tr>
</thead>
<tbody>
<tr><td>C_v</sub></td><td>Bild vor</td></tr>
<tr><td>M_v</sub></td><td>Bild zurueck</td></tr>
<tr><td>C_c</sub></td><td>Text in die Mitte</td></tr>
<tr><td>C_p</sub></td><td>Zeile hoch</td></tr>
<tr><td>C_f</sub></td><td>Coursor rechts</td></tr>
<tr><td>C_b</sub></td><td>Coursor links</td></tr>
<tr><td>C_n</sub></td><td>Zeile runter</td></tr>
<tr><td>C_k</sub></td><td>Zeile loeschen</td></tr>
</tbody>
<tbody>
<tr><td>M_w</sub></td><td>Kopieren</td></tr>
<tr><td>C_y</sub></td><td>Einfuegen</td></tr>
<tr><td>C_w</sub></td><td>Ausschneiden</td></tr>
<tr><td>C_c</sub> + .</td><td>Datum einfuegen</td></tr>
<tr><td>[/]</td><td>Fortschritt ToDos</td></tr>
<tr><td>[%]</td><td>Fortschritt in %</td></tr>
<tr><td>C_c</sub> C_c</sub></td><td>Coursor neu laden</td></tr>
<tr><td>C_c</sub> C_s</sub></td><td>Calender Datum einfuegen</td></tr>
</tbody>
<tbody>
<tr><td>C_c</sub> C_e</sub></td><td>Exportieren</td></tr>
<tr><td>M_x</sub> Shell</td><td>Oeffnet eine Shell</td></tr>
<tr><td>C_x</sub> k yes</td><td>Schliesst die Shell</td></tr>
<tr><td>M_x</sub> org-mode</td><td>ORG MODUS aktivieren! ! ! ! ! !</td></tr>
<tr><td>C-x C-f</td><td>lade Datei</td></tr>
<tr><td>C-x C-s</td><td>sichere Datei</td></tr>
<tr><td>C-x s</td><td>sichere einige Puffer</td></tr>
<tr><td>C-x C-b</td><td>zeige Pufferliste an</td></tr>
<tr><td>C-x b</td><td>wechsle zu Puffer</td></tr>
<tr><td>C-x C-c</td><td>beende Emacs</td></tr>
<tr><td>C-x 1</td><td>loesche alle Fenster ausser einem</td></tr>
<tr><td>C-x u</td><td>widerrufen</td></tr>
<tr><td>C-x u</td><td>widerrufen</td></tr>
<tr><td>Strg + Enter</td><td>neuer Unterpunkt</td></tr>
<tr><td>Shift + Enter</td><td>Tabelle: von oben runterKopieren</td></tr>
<tr><td>Strg + O</td><td>neue Zeile einfügen</td></tr>
</tbody>
<tbody>
<tr><td>C-x 0</td><td>Schließt das aktuelle Fenster</td></tr>
<tr><td>C-x 1</td><td>Ŝchließt alle außer das aktuelle Fenster</td></tr>
<tr><td>C-x 2</td><td>Teilt das Fenster: Horizontal</td></tr>
<tr><td>C-x 3</td><td>Teilt das Fenster: Vertikal</td></tr>
</tbody>
<tbody>
<tr><td>C-x 5 b</td><td>Öffnet ein neues Frame (like a screen)</td></tr>
<tr><td>C-x 5 0</td><td>Schließt ein Frame</td></tr>
<tr><td>C-x 5 f</td><td>Öffnet eine Datei in einem neuen Frame</td></tr>
<tr><td>C-x 5 o</td><td>Wechselt zwischen Frames</td></tr>
</tbody>
<tbody>
<tr><td>[[URL][LINK] ]</td><td>Einen Link erzeugen</td></tr>
<tr><td>C_c</sub> C_o</sub></td><td>Einen Link öffnen</td></tr>
<tr><td>C_c</sub> C_l</sub></td><td>Link mit Manager erstellen</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-2" class="outline-2">
<h2 id="sec-2"><span class="section-number-2">2</span> Terminator </h2>
<div class="outline-text-2" id="text-2">


<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Befehl</th><th scope="col">Funktion</th></tr>
</thead>
<tbody>
<tr><td>Umsch + Strg + W</td><td>close Terminal</td></tr>
<tr><td>Umsch + Strg + Q</td><td>close Window</td></tr>
<tr><td>F11</td><td>Vollbild</td></tr>
<tr><td>Umsch + Strg + C</td><td>Copy</td></tr>
<tr><td>Umsch + Strg + V</td><td>Paste</td></tr>
<tr><td>Strg + Tab</td><td>Cycle: Next</td></tr>
<tr><td>Umsch + Strg + Tab</td><td>Cycle: Preview</td></tr>
<tr><td>Alt + Arrow</td><td>Cycle: Arrow</td></tr>
<tr><td>Super + I</td><td>new Terminator</td></tr>
<tr><td>Strg + Bild_up</sub></td><td>Tab: Next</td></tr>
<tr><td>Strg + Bild_down</sub></td><td>Tab: Preview</td></tr>
<tr><td>Umsch + Strg + R</td><td>Reset</td></tr>
<tr><td>Umsch + Strg + Arrow</td><td>Resize: Arrow</td></tr>
<tr><td>Umsch + Strg + Z</td><td>Zoom: This.Term</td></tr>
<tr><td>Strg + +</td><td>Zoom: In</td></tr>
<tr><td>Strg + -</td><td>Zoom: Out</td></tr>
<tr><td>Umsch + Strg + F</td><td>Search</td></tr>
<tr><td>Umsch + Strg + O</td><td>Split: Horiz.</td></tr>
<tr><td>Umsch + Strg + E</td><td>Split: Verti.</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-3" class="outline-2">
<h2 id="sec-3"><span class="section-number-2">3</span> LEXIKON </h2>
<div class="outline-text-2" id="text-3">


</div>

<div id="outline-container-3.1" class="outline-3">
<h3 id="sec-3.1"><span class="section-number-3">3.1</span> Technisch [6/10] [60%] </h3>
<div class="outline-text-3" id="text-3.1">


</div>

<div id="outline-container-3.1.1" class="outline-4">
<h4 id="sec-3.1.1"><span class="section-number-4">3.1.1</span> OSI </h4>
<div class="outline-text-4" id="text-3.1.1">


<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">OSI Schicht</th><th scope="col">Protokoll</th><th scope="col">Geräte</th></tr>
</thead>
<tbody>
<tr><td>7 - 5 Application</td><td>SNMP, DHCP, DNS</td><td></td></tr>
<tr><td>4 Transport</td><td>TCP, UDP</td><td></td></tr>
<tr><td>3 Network</td><td>IP, IPsec., RIP</td><td>Router</td></tr>
<tr><td>2 Data Link</td><td>L2TP, ARP, RARP</td><td>Switch</td></tr>
<tr><td>1 Bits</td><td>Bits</td><td></td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-3.1.2" class="outline-4">
<h4 id="sec-3.1.2"><span class="section-number-4">3.1.2</span> HotspotRechte </h4>
<div class="outline-text-4" id="text-3.1.2">

<ul>
<li id="sec-3.1.2.1">Pflichten bei gewerbl. HotSpot´s <br/>

<p>
Auf unerlaubte Internetinhalte darf nicht zugegriffen werden.
Datenschutzbestimmungen müssen eingehalten werden
</p>
<p>
Als Betreiber eines HotSpot´s gilt man als Provider eines "Access-Providing".
Das bedeutet das man alle Pflichten eines Providers übernehmen muss.
Bezieht sich im Besonderen auf Inhalte und datenschutzrechtliche Aspekte.
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-3.1.3" class="outline-4">
<h4 id="sec-3.1.3"><span class="section-number-4">3.1.3</span> <span class="todo TODO"> TODO</span> WLAN_Eng</sub> </h4>
<div class="outline-text-4" id="text-3.1.3">

<ul>
<li id="sec-3.1.3.1">So schützen sie sich - English translation <br/>

<p>
WLAN wird abgesichert durch Verschlüsselung der zu Übertragenden Daten.
WEP ist eine möglichkeit die sehr verbreitet ist, aber nicht besonders sicher.
Am Gerät sollte immer das bestmögliche eingestellt werden.
WPA/2 (z.B. 128bit) sind moderner und deutlich sicherer als WEP.
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-3.1.4" class="outline-4">
<h4 id="sec-3.1.4"><span class="section-number-4">3.1.4</span> <span class="todo TODO"> TODO</span> VoIP (RTP)_Eng</sub> </h4>
<div class="outline-text-4" id="text-3.1.4">

<ul>
<li id="sec-3.1.4.1">AbhoeRen VoIP - English translation <br/>

<p>
VoIP abhören ist extrem schwer, da die Daten nicht über eine Leitung fließen,
sondern verschiedene Wege zu ihrem Ziel gehen.
Um ein Gespäch abzuhören ist es von daher notwendig alle Pakete 
zu verfolgen und diese zu "sammeln".
Da Pakete im Internet immer den schnellsten Weg nehmen ändern sich die Wege
einer Verbindung ständig. Ein zusätzliches Problem ist, das die Daten in Echtzeit
durch das Netz sausen. (RTP-Protokoll)
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-3.1.5" class="outline-4">
<h4 id="sec-3.1.5"><span class="section-number-4">3.1.5</span> <span class="done DONE"> DONE</span> STP </h4>
<div class="outline-text-4" id="text-3.1.5">


<p>
Spanning Tree Protocol (Spannbaum-Protokoll)
</p>
<p>
ein Protokoll zur vermeidung redundanter Netzwerkpfade (Schleifen / Loops).
Es sorgt dafür das Netze auf der Sicherheitsschicht immer nur 1 Ziel haben.
Um zu vermeiden das Datenpakete (Frames) dupliziert werden und mehrfach beim Ziel erscheinen.
</p>
<p>
Switche kommunizieren über das sogennante Bridge-Protokoll. (Pakete bei Bridge = Bridge Protocol Data Unit = BPDU)
Die BPDU ist im Daten-Bereich eines Ethernet-Datenpakets (Ethernet Frame) und wird per Broadcast an benachbarte Switches gesendet.
</p>
<p>
Zuerst muss eine "Root Bridge" gewählt werden, der "Chef" des Netzes.
Die passiert indem alle Bridges (Switche mit Bridge Protokoll) ihre ID an eine bestimmt Multicast-Gruppe senden.
Die Bridge-ID besteht aus 8Byte (2Byte sind Bridge Priority und 6Byte die Mac-Adresse).
Die Bridge (Switch) mit der niedrigsten Priorität wird die "Root Bridge". Bei identischer Priority wird die kleinste MAC-Adresse genommen.
</p>
<p>
Die Root Bridge berechnet jetzt die möglichen Pfade, falls es redundante (doppelte) Wege gibt werden die nicht benötigten deaktiviert.
Welcher dieser Pfade benutzt werden darf bestimmen die Pfadkosten. (Die kleineren Pfadkosten gewinnen :P)
</p>
<p>
Die Pfadkosten sind abhängig vom Abstand zur Root Bridge und dem verfügbaren Upload Bandbreite zum Ziel. (Also 10-Mbit ist teurer als 100-MBit)
</p>
<p>
Die Bridges (Switche) leiten den Verkehr durch einen sogenannten "Root Port".
Der Port an dem der Verkehr beim nächsten Switch ankommt wird "Designated Port genannt"
Die Bridges senden alle 2sek. ein "Ich lebe" an den nächsten, damit sofort bemerkt wird, 
wann welcher Switch nicht mehr da ist und sich das Netz sich neu organisieren muss.
</p>
<p>
Beim RSTP (Rapid STP) führen defekte Switche nichtmehr zum Stop des Netzes sondern es geht normal weiter,
bis für die Lücke eine passende Route berechnet wurde. Diese wird dann sehr schnell übernommen.
</p>
<p>
MSTP (Multiple STP) ist eine Erweiterung des RSTPs, mit ihm ist es möglich STP für VLANs zu benutzen. (Getrennte STP-Instanzen)
</p>
<p>
Wiki  STP: <a href="http://de.wikipedia.org/wiki/Spanning_Tree_Protocol">http://de.wikipedia.org/wiki/Spanning_Tree_Protocol</a>
Wiki RSTP: <a href="http://de.wikipedia.org/wiki/Rapid_Spanning_Tree_Protocol">http://de.wikipedia.org/wiki/Rapid_Spanning_Tree_Protocol</a>
</p>
</div>

</div>

<div id="outline-container-3.1.6" class="outline-4">
<h4 id="sec-3.1.6"><span class="section-number-4">3.1.6</span> <span class="done DONE"> DONE</span> NAT </h4>
<div class="outline-text-4" id="text-3.1.6">


<p>
NAT ist ein Verfahren für Router / Firewalls um die Adresse von Datenpaketen zu ändern.
</p>
<p>
Hierbei wird zwischen 2 vers. Arten unterschieden.
Source-NAT und Destination-NAT.
</p>
<p>
Beim Source NAT wird die IP-Adresse des Quell-IP eines Datenpakets geändert.
(Das Paket kommt von "uns")
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>Quelle</td><td>Ziel</td><td>-&gt;</td><td>Quelle</td><td>Ziel</td></tr>
<tr><td>192.168.0.117:8123</td><td>10.0.0.5:8123</td><td></td><td>10.0.0.6:8123</td><td>10.0.0.5:8123</td></tr>
</tbody>
</table>


<p>
Beim Destination NAT wird dann die Ziel-IP geändert.
(Das Paket geht versteckte Wege)
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>Quelle</td><td>Ziel</td><td>-&gt;</td><td>Quelle</td><td>Ziel</td></tr>
<tr><td>192.168.0.117:8123</td><td>10.0.0.5:8123</td><td></td><td>192.168.0.117:8123</td><td>10.0.1.5:8123</td></tr>
</tbody>
</table>


<p>
NAT-T(raversal) / NAT-Durchdringung, hier ist es möglich Verbindungen aufzubauen.
Bei NAT wird keine Verbindung aufgebaut.
</p>
<p>
Wiki: <a href="http://de.wikipedia.org/wiki/Network_Address_Translation">http://de.wikipedia.org/wiki/Network_Address_Translation</a>
</p>
</div>

</div>

<div id="outline-container-3.1.7" class="outline-4">
<h4 id="sec-3.1.7"><span class="section-number-4">3.1.7</span> <span class="todo TODO"> TODO</span> DHCP Funktionen </h4>
<div class="outline-text-4" id="text-3.1.7">


<p>
DHCP-Server können IP-Adressen und damit in zusammenhang stehende Informationen zentral Verwalten
Mit Ihm erfolgt eine dynamische Zuordnung der IP-Adressen zum Client.
</p>
</div>

</div>

<div id="outline-container-3.1.8" class="outline-4">
<h4 id="sec-3.1.8"><span class="section-number-4">3.1.8</span> <span class="done DONE"> DONE</span> IPsec </h4>
<div class="outline-text-4" id="text-3.1.8">


<p>
transport mode = stellt punkt-zu-punkt verbindung her.
tunnel mode = verbindet zwei subnetze über zwei router
</p>
<p>
Wenn IP-Paket rausgeht, werden 2 Datenbanken verwendet:
</p>
<p>
SPD (security policy database)   und    SAD (security association database)
</p>
<p>
In SPD steht: Wie die Verbindung zwischen zwei Router (z.B.: 80.16.36.1 und 89.1.26.17 - öffentl. IP) gesichert wird.
Eingesetzt werden dann AH, ESP oder beides, fürs Sichern der Verbindung.
Zum erstellen der Schlüssel wird meist IKE verwendet.
SPD ist Zustandslos!!!
</p>
<p>
In SAD steht: Sie Verwaltet SA (Security Assoiations), welche einen Zustand (eng.: stateful) haben kann. 
</p>
<p>
Authentication Header (AH)
</p>
<p>
Er soll dir Authentizität und Integrität der übertragenden Pakete sicherstellen und den Sender authentisieren.
Zusätzlich schützt er gegen Replay-Angriffe.
</p>


<p>
Zusammengefasst: 
</p>
<p>
AH garantiert das der Sender wirklich er selbst ist, und das der Inhalt des Paketes auf dem Weg zum Ziel nicht verändert wurde.
AH garantiert Autentizität, und Integrität.
</p>
<p>
Das bedeutet allerdings das die Daten auf dem Weg von Sender zu Empfänger abgefangen und analysiert werden können.
Daten sind von dritten Auslesbar, aber nicht veränderbar.
</p>

<p>
Bei ESP wird auch die möglichkeit genommen die Daten auf ihrem Weg vom Sender zu Empfänger abzufangen und zu lesen.
ESP verschlüsselt einfach auch die Daten des Paketes, sodass sie erst im Internet Netz des Empfängers wieder ausgepackt werden.
</p>
<p>
Meist werden bei Varianten kombiniert um weder Daten noch das Ziel der Daten zu verraten.
</p>
<p>
Wiki IPsec: <a href="http://de.wikipedia.org/wiki/IPsec">http://de.wikipedia.org/wiki/IPsec</a>
</p>
</div>

</div>

<div id="outline-container-3.1.9" class="outline-4">
<h4 id="sec-3.1.9"><span class="section-number-4">3.1.9</span> <span class="todo TODO"> TODO</span> VPN </h4>
<div class="outline-text-4" id="text-3.1.9">

<ul>
<li id="sec-3.1.9.1">Qualität der Verbindung <br/>

<p>
Bandbreite
VPN-Gateway
Verfügbarkeit
Verzögerungszeit
Fehlerrate
</p>
</li>
<li id="sec-3.1.9.2">VPN-Verbindungsarten <br/>
<ul>
<li id="sec-3.1.9.2.1">End-to-End <br/>
.-.
Normaler Rechner über ISP verbindet sich mit einem Rechner

</li>
<li id="sec-3.1.9.2.2">Site-to-Site <br/>
:-:
Ein FirmenNetz (mit Domain) ist verbunden mit einem FirmenNetz (mit Domain)

</li>
<li id="sec-3.1.9.2.3">Site-to-End <br/>
:-.
Ein Außendienstmitarbeiter verbindet sich mit dem FirmenNetz (mit Domain)

</li>
</ul>
</li>
<li id="sec-3.1.9.3">Authentisierungsmöglichkeiten <br/>

<p>
Password, Benutzername
Zertifikat
SecureID
OTP (One Time Password)
VPN-Client Software
</p>
</li>
<li id="sec-3.1.9.4">Planung! -Auf folgendes ist zu achten <br/>

<p>
Anzahl der mobilen Anschlüsse (per UTMS u.a.)
Anzahl der Anschlüsse
Art der VPN-Komponenten
Art des VPN-Gateway
Sicherheitsniveau der Übertragung
VPN-Protokoll
Art der Software für RemotePC
Art der Authentification am Zentralen VPN-Gateway
Endpoint Security
&hellip;
</p></li>
</ul>
</div>

</div>

<div id="outline-container-3.1.10" class="outline-4">
<h4 id="sec-3.1.10"><span class="section-number-4">3.1.10</span> <span class="done DONE"> DONE</span> DoS / DDoS </h4>
<div class="outline-text-4" id="text-3.1.10">


<p>
DoS (Denial of Service) ist ein Angriff auf einem Server, mit dem Ziel bestimmte 
Services (Dienste) zu blockieren. (Überlastung durch zu viele Anfragen)
</p>
<p>
DDoS ist genau wie DoS nur diesmal ist der Angreifer eine Gruppe gut Organisierter 
"Menschen oder Bot´s" die alle gleichzeitig Anfragen o.änhl. losschiecken.
</p>
<p>
Verhindere DoS / DDoS
</p>
<p>
Router benutzt zur Erkennung von DoS angriffen: IDS - Ist eine Hard-/Software zur erkennung.
SPI-Firewall (Stateful Packet Instection)  -  siehe Firewall /Î\
</p>
</div>

</div>

<div id="outline-container-3.1.11" class="outline-4">
<h4 id="sec-3.1.11"><span class="section-number-4">3.1.11</span> <span class="done DONE"> DONE</span> Firewall </h4>
<div class="outline-text-4" id="text-3.1.11">


<p>
Paketfilter Firewall
</p>
<p>
Kann bestimmte Adressen und Ports filtern, verwerfen.
Ist eine sehr einfache Firewall-Software die meist in Routern verwendet wird.
</p>

<p>
SPI (Stateful Packet Inspection)
</p>
<p>
Die SPI ist eine Zustandsorientierte Firewall, bei der Datenpakete (eher Segmente) aktiven Sessions zugeordnet werden.
Die Datenpakete werden analysiert und zusätzlich wird der Verbindungsstatus berücksichtigt.
</p>
<p>
Die Segmente werden auf der 4. Transportschicht (OSI) analysiert und in dynamischen Zustandstabellen gespeichert.
Auf Basis des Zustandes der Datenverbindung, wird eine Entscheidung für die Weiterleitung getroffen.
Wenn kein Zustand vorhanden ist, oder fehlerhaft, dann werden sie verworfen (mögl. DoS-Attacke).
</p>
</div>

</div>

<div id="outline-container-3.1.12" class="outline-4">
<h4 id="sec-3.1.12"><span class="section-number-4">3.1.12</span> <span class="done DONE"> DONE</span> SQL </h4>
<div class="outline-text-4" id="text-3.1.12">


<ol>
<li>
Ausgabe von gName, gVorname, gStraße, gPLZ, gOrt aller Stammgäste.
-&gt; SELECT  gName, gVorname, gStr, gPLZ, gOrt FROM gast WHERE gStamm = 1;

</li>
<li>
Ausgabe von gName, gVorname, gStraße, gPLZ, gOrt aller Gäste, 
die im Postleitzahlbereich 3 wohnen, nach Namen aufsteigend sortiert.
-&gt; SELECT  gName, gVorname, gStr, gPLZ, gOrt FROM gast WHERE gPLZ LIKE "3%" ORDER BY gName ASC;

</li>
<li>
Ausgabe von zimmerID, katPreisEZ, katPreisDZ aller Luxussuiten
-&gt; SELECT zimmer.zimmerID, kategorie.katPreisEZ, kategorie.katPreisDZ FROM zimmer, kategorie WHERE zimmer.katID = "4" AND kategorie.katID = "4";

</li>
<li>
Ausgabe von gName, gVorname sowie "Aufenthaltdauer in Tagen" des Gastes mit gastID = 4713
-&gt; SELECT gast.gName, gast.gVorname, rechnung.rAbreise - rechnung.rAnkunft AS "Aufenthaltsdauert in Tagen" FROM gast, rechnung WHERE gast.gastID = "4713" AND rechnung.gastID = "4713";

</li>
<li>
Ausgabe von Alles aus 2 Tabellen bei dennen 1 Wert gleich ist
-&gt; SELECT * FROM cards, info WHERE cards.cardID = '33' AND info.cardID = '33'

</li>
</ol>
<ul>
<li id="sec-3.1.12.1">SQL - TestDatenbank - Grandhotel GmbH <br/>

<p>
&ndash; phpMyAdmin SQL Dump
&ndash; version 3.4.5deb1
&ndash; <a href="http://www.phpmyadmin.net">http://www.phpmyadmin.net</a>
--
&ndash; Host: localhost
&ndash; Erstellungszeit: 17. Nov 2011 um 10:52
&ndash; Server Version: 5.1.58
&ndash; PHP-Version: 5.3.6-13ubuntu3.2
</p>
<p>
SET SQL_MODE</sub>="NO_AUTO</sub>_VALUE</sub>_ON</sub>_ZERO</sub>";
SET time_zone</sub> = "+00:00";
</p>

<p>
<i>*!40101 SET @OLD_CHARACTER</sub>_SET</sub>_CLIENT</sub>=@@CHARACTER_SET</sub>_CLIENT</sub> *</i>;
<i>*!40101 SET @OLD_CHARACTER</sub>_SET</sub>_RESULTS</sub>=@@CHARACTER_SET</sub>_RESULTS</sub> *</i>;
<i>*!40101 SET @OLD_COLLATION</sub>_CONNECTION</sub>=@@COLLATION_CONNECTION</sub> *</i>;
<i>*!40101 SET NAMES utf8 *</i>;
</p>
<p>
--
&ndash; Datenbank: `test`
--
</p>
<p>
&ndash; --------------------------------------------------------
</p>
<p>
--
&ndash; Tabellenstruktur für Tabelle `gast`
--
</p>
<p>
CREATE TABLE IF NOT EXISTS `gast` (
`gastID` int(11) NOT NULL AUTO_INCREMENT</sub>,
`gName` varchar(50) NOT NULL,
`gVorname` varchar(50) NOT NULL,
`gStr` varchar(50) NOT NULL,
`gPLZ` int(11) NOT NULL,
`gOrt` varchar(20) NOT NULL,
`gStamm` tinyint(1) NOT NULL,
PRIMARY KEY (`gastID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT</sub>=4715 ;
</p>
<p>
--
&ndash; Daten für Tabelle `gast`
--
</p>
<p>
INSERT INTO `gast` (`gastID`, `gName`, `gVorname`, `gStr`, `gPLZ`, `gOrt`, `gStamm`) VALUES
(4711, 'Meier', 'Hans', 'Hauptstr. 1', 11111, 'Adorf', 1),
(4712, 'Schulze', 'Fritz', 'Mainweg 23', 22222, 'Bhausen', 0),
(4713, 'Müller', 'Willi', 'Fuldaweg 5', 33333, 'Ostadt', 0),
(4714, 'Krause', 'Moritz', 'Langelaube 15', 30826, 'Hannover', 1);
</p>
<p>
&ndash; --------------------------------------------------------
</p>
<p>
--
&ndash; Tabellenstruktur für Tabelle `kategorie`
--
</p>
<p>
CREATE TABLE IF NOT EXISTS `kategorie` (
`katID` int(11) NOT NULL AUTO_INCREMENT</sub>,
`katBezeichnung` varchar(50) NOT NULL,
`katPreisEZ` varchar(50) NOT NULL,
`katPreisDZ` varchar(50) NOT NULL,
PRIMARY KEY (`katID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT</sub>=5 ;
</p>
<p>
--
&ndash; Daten für Tabelle `kategorie`
--
</p>
<p>
INSERT INTO `kategorie` (`katID`, `katBezeichnung`, `katPreisEZ`, `katPreisDZ`) VALUES
(1, 'Standard', '70', '100'),
(2, 'Juniorsuite', '80', '120'),
(3, 'Suite', '120', '200'),
(4, 'Luxussuite', '180', '280');
</p>
<p>
&ndash; --------------------------------------------------------
</p>
<p>
--
&ndash; Tabellenstruktur für Tabelle `rechnung`
--
</p>
<p>
CREATE TABLE IF NOT EXISTS `rechnung` (
`rechnungID` int(11) NOT NULL AUTO_INCREMENT</sub>,
`gastID` int(11) NOT NULL,
`zimmerID` int(11) NOT NULL,
`rBelegung` varchar(5) NOT NULL,
`rAnkunft` date NOT NULL,
`rAbreise` date NOT NULL,
PRIMARY KEY (`rechnungID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT</sub>=5 ;
</p>
<p>
--
&ndash; Daten für Tabelle `rechnung`
--
</p>
<p>
INSERT INTO `rechnung` (`rechnungID`, `gastID`, `zimmerID`, `rBelegung`, `rAnkunft`, `rAbreise`) VALUES
(1, 4711, 102, 'EZ', '2011-11-10', '2011-11-12'),
(2, 4712, 102, 'DZ', '2011-11-13', '2011-11-14'),
(3, 4713, 104, 'DZ', '2011-11-10', '2011-11-20'),
(4, 4714, 103, 'EZ', '2011-11-01', '2011-11-11');
</p>
<p>
&ndash; --------------------------------------------------------
</p>
<p>
--
&ndash; Tabellenstruktur für Tabelle `zimmer`
--
</p>
<p>
CREATE TABLE IF NOT EXISTS `zimmer` (
`zimmerID` int(11) NOT NULL AUTO_INCREMENT</sub>,
`katID` int(11) NOT NULL,
PRIMARY KEY (`zimmerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT</sub>=107 ;
</p>
<p>
--
&ndash; Daten für Tabelle `zimmer`
--
</p>
<p>
INSERT INTO `zimmer` (`zimmerID`, `katID`) VALUES
(101, 1),
(102, 1),
(103, 1),
(104, 2),
(105, 4),
(106, 3);
</p>
<p>
<i>*!40101 SET CHARACTER_SET</sub>_CLIENT</sub>=@OLD_CHARACTER</sub>_SET</sub>_CLIENT</sub> *</i>;
<i>*!40101 SET CHARACTER_SET</sub>_RESULTS</sub>=@OLD_CHARACTER</sub>_SET</sub>_RESULTS</sub> *</i>;
<i>*!40101 SET COLLATION_CONNECTION</sub>=@OLD_COLLATION</sub>_CONNECTION</sub> *</i>;
</p>
</li>
<li id="sec-3.1.12.2">Redundant <br/>

<p>
Redundant bedeutet Daten mehrfach zu speichern, das sollte bei Datenbanken vermieden werden.
</p>
</li>
<li id="sec-3.1.12.3">referentielle Integrität <br/>

<p>
Es dürfen keine Datensätze gelöscht werden, die aus einer anderen Tabelle aufgerufen werden können. 
Es darf nicht aufgerufen werden, wenn es nicht (bzw. noch nicht) existiert.    
</p></li>
</ul>
</div>

</div>

<div id="outline-container-3.1.13" class="outline-4">
<h4 id="sec-3.1.13"><span class="section-number-4">3.1.13</span> Service-Desk-Arbeitsplatz   !!!! WTF is it for a fucking bullshit? </h4>
<div class="outline-text-4" id="text-3.1.13">

<ul>
<li id="sec-3.1.13.1">Funktion <br/>

<p>
OTRS für ANDERE!!
</p>
<p>
Ansprechpartner für Kunden
Weiterleiten/Erfassen von Anfragen
Erstellt Tickets
Informiert über Workarounds und anderes.
</p>
</li>
<li id="sec-3.1.13.2">Vorteile <br/>

<p>
Ist der einzige Kontakt für den Kunden.
Arbeit kann weitergereicht werden.
</p>
<p>
Zentrale Sammlung von Anfragen gewährleistet schnelle Weiterverarbeitung
</p></li>
<li id="sec-3.1.13.3">Vorgehensweise TroubleTicket <br/>

<ol>
<li>
Service-Anfrage an den Kunden
</li>
<li>
Ticket erstellen
</li>
<li>
Protokollierung vom Fortschritt im Ticket
</li>
<li>
Problem beseitigen
</li>
<li>
Ticket schließen
</li>
</ol>
</li>
</ul>
</div>
</div>

</div>

<div id="outline-container-3.2" class="outline-3">
<h3 id="sec-3.2"><span class="section-number-3">3.2</span> Wirtschaft </h3>
<div class="outline-text-3" id="text-3.2">


</div>

<div id="outline-container-3.2.1" class="outline-4">
<h4 id="sec-3.2.1"><span class="section-number-4">3.2.1</span> Liefer* </h4>
<div class="outline-text-4" id="text-3.2.1">

<ul>
<li id="sec-3.2.1.1">Falsche Artikel geliefert <br/>

<p>
Es muss sofort Reklamiert werden!
Nach absprache mit dem Lieferer, rücksendung der Lieferung,
oder Ordnungsgemäße Aufbewahrung der Ware.
</p>
</li>
<li id="sec-3.2.1.2">Eingang der Ware innerhalb der Frist <br/>

<p>
Ware muss angenommen werden.
</p>
</li>
<li id="sec-3.2.1.3">Kostenträger einer falsch Lieferung <br/>

<p>
Die Kosten muss die Lieferfirma (bzw. der Verkäufer) bezahlen,
da die Falschlieferung auf deren Fehler zurückzuführen ist.
</p>
</li>
<li id="sec-3.2.1.4">Nachbesserungen des Lieferes <br/>

<p>
Die Lieferfirma das max. 2. mal nachbessern.
Danach kann vom Kaufvertrag zurück getretten werden.
</p>
</li>
<li id="sec-3.2.1.5">Anmahnung und Fristsetzung <br/>

<p>
Betreff: Unser Auftrag und Ihre Auftragsbestätigung vom 15.04.11
</p>
<p>
Sehr geehrte Damen &amp; Herren,
</p>
<p>
die von uns bestellten zehn Stück Internet Handys IH3001 sind bis heute nicht geliefert worden.
Wir erwarten die Lieferung bis zum 08.05.11, danach werden wir die Ware nicht mehr annehmen.
Schadensersatzforderung behalten wir uns vor.
</p>
<p>
MfG PWD :P
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-3.2.2" class="outline-4">
<h4 id="sec-3.2.2"><span class="section-number-4">3.2.2</span> Kosten* </h4>
<div class="outline-text-4" id="text-3.2.2">

<ul>
<li id="sec-3.2.2.1">Angebotsvergleich <br/>
<ul>
<li id="sec-3.2.2.1.1">Fixe Kosten <br/>

<p>
Kosten die man vorhersehen kann.
</p>
<p>
z.B.: - Grundgebühr beim Handyvertrag
</p><ul>
<li>
Einmalige Bereitstellungsgebühr

</li>
</ul>
</li>
<li id="sec-3.2.2.1.2">Variable Kosten <br/>

<p>
Kosten die man nicht im vorraus Berechnen kann.
</p>
<p>
z.B.: - Telefonkosten pro Gesprächseinheit
</p><ul>
<li>
Kosten bei GPRS Nutzung

</li>
</ul>
</li>
</ul>
</li>
</ul>
</div>

</div>

<div id="outline-container-3.2.3" class="outline-4">
<h4 id="sec-3.2.3"><span class="section-number-4">3.2.3</span> Kündig* </h4>
<div class="outline-text-4" id="text-3.2.3">


<p>
Bei folgenden Personen besteht gesetzlicher Kündigungsschutz:
</p>
<ul>
<li>
Auszubildende 
</li>
<li>
Schwangere
</li>
<li>
Schwerbehinderte
</li>
<li>
Betriebsratsmitglieder

</li>
</ul>

<p>Standartmäßig wird das Arbeitsverhältnis eines Angestellten mit einer 
Frist von 4Wochen zum 15. oder Ende eines Monats gekündigt.
</p>
<p>
Es werden aber folgende Außnahmen gebildet:
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="right" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Arbeits Jahre</th><th scope="col">Kündigungsfrist</th></tr>
</thead>
<tbody>
<tr><td>5</td><td>2. Monate zum En</td></tr>
<tr><td>8</td><td>3. Monate zum En</td></tr>
<tr><td>10</td><td>4. Monate zum En</td></tr>
<tr><td>12</td><td>5. Monate zum En</td></tr>
<tr><td>15</td><td>6. Monate zum En</td></tr>
<tr><td>20</td><td>7. Monate zum En</td></tr>
</tbody>
</table>


<p>
Probezeit: max. 6 Wochen - mit einer Frist von 2 Wochen
</p>
<p>
Befristete Stelle:
</p>
<ul>
<li>
muss nicht gekündigt werden, da nach 1. Jahr ungültig
</li>
<li>
kann befristet verlängert werden, bei Ablauf

</li>
</ul>

<p>Wettbewerbsverbot: Darf keine Arbeit im gleichen Themen-Bereich ausführen
</p>
</div>

</div>

<div id="outline-container-3.2.4" class="outline-4">
<h4 id="sec-3.2.4"><span class="section-number-4">3.2.4</span> Azubi </h4>
<div class="outline-text-4" id="text-3.2.4">

<ul>
<li id="sec-3.2.4.1">Unfall auf dem Weg zur Arbeit <br/>

<p>
Die Azubine kann eine Arbeitsunfähigkeitsbescheinigung vorlegen.
</p>
<p>
Das Unternehmen muss den Unfall der Berufsgenossenschaft melden.
</p>
</li>
<li id="sec-3.2.4.2">Sozialversicherungspflichtig <br/>

<p>
Der Arbeitgeber muss:
</p><ul>
<li>
den gesamten Sozialversicherungsbeitrag an die Krankenversicherung abführen.
</li>
<li>
den Beitrag zur berufsgenossenschaftlichen Unfallversicherung allein tragen.

</li>
</ul>
</li>
</ul>
</div>

</div>

<div id="outline-container-3.2.5" class="outline-4">
<h4 id="sec-3.2.5"><span class="section-number-4">3.2.5</span> Rentabilität </h4>
<div class="outline-text-4" id="text-3.2.5">


<p>
Formel: Gewinn / Kapital *100 = Rentabilität
</p>
<p>
Info  : Lohnt sich das Unternehmen? 
Prozentualer Satz!
Bezieht sich auf das Eigenkapital.
</p>
</div>

</div>

<div id="outline-container-3.2.6" class="outline-4">
<h4 id="sec-3.2.6"><span class="section-number-4">3.2.6</span> Prüfungsfragen WI/SO [2/5] [40%] </h4>
<div class="outline-text-4" id="text-3.2.6">

<ul>
<li id="sec-3.2.6.1"><span class="done DONE"> DONE</span> Pflichten des Azubis <br/>

<ul>
<li>
Ausbildungsnachweise (Berichtsheft)
</li>
<li>
Nebenjob, nur mit genehmigung!
</li>
<li>
an Zwischenprüfung teilnehmen
</li>
<li>
nach 3 krankheitsTagen muss eine ärztliche Arbeitsunfähigkeits bescheinigung vorliegen

</li>
</ul>

<p>Abzüge der Lohnabrechnung:
</p>
<ul>
<li>
Der Arbeitnehmer Anteil zur Sozialversicherung - wird vom     Bruttolohn abgezogen!
</li>
<li>
Die Rückzahlung eines Lohnvorschusses          - wird von     Nettolohn  abgezogen!
</li>
<li>
Die Kirchensteuer                              - wird von der Lohnsteuer abgezogen!
</li>
<li>
Den Solidaritätszuschlag                       - wird von der Lohnsteuer abgezogen!
</li>
<li>
Den Unfallversicherung                         - wird vom     Arbeitgeber komplett bezahlt.

</li>
</ul>

<p>Arbeitnehmerbeitrag zur Sozialversicherung:
</p>
<p>
Lohn:                                   100   % - Vom Lohn wird Angehängtes abgezogen:
</p>
<p>
Krankenversicherung:                     14.6 % - Wird 50% vom Arbeitgeber bezahlt
Krankenversicherung Sonderbeitragssatz:   0.9 % - Muss vom Azubi gezahlt werden
Pflegeversicherung:                       1.95% - Wird 50% vom Arbeitgeber bezahlt
Rentenversicherung:                      19.9 % - Wird 50% vom Arbeitgeber bezahlt
Arbeitslosenversicherung:                 2.8 % - Wird 50% vom Arbeitgeber bezahlt
</p>
<p>
Diese Beiträge werden an den Sozialversicherungsträger überwiesen:
</p>
<p>
Krankenkasse!
</p>

<p>
!! Szenario !!
</p>
<p>
Es wird muendlich ein Anfangsbruttogehalt von 1,900 Euro vereinbart.
Aber vor der ersten Auszahlung wird gesagt das ich nur 1,700 Euro kriege, wegen gezeigter Leistungen.
</p>
<p>
! Ich kann trozdem 1,900 Euro fordern, weil diese Vereinbart worden sind. !
</p>
</li>
<li id="sec-3.2.6.2"><span class="todo TODO"> TODO</span> Kollective Arbeitsrecht <br/>

<p>
Das deutsche Arbeitsrecht regelt die Rechtsbeziehungen zwischen den einzelnen Arbeitnehmer und Arbeitgeber,
sowie zwischen den Koalitionen (Gruppen auf der Arbeit) der Arbeitnehmer und Arbeitgebern,
und zwischen Vertretungsorganen der Arbeitnehmer und dem Arbeitsgeber.
</p>
<p>
Aufgrund des Arbeitsvertragen ist der Arbeitnehmer verpflichtet, die vertragsgemaeáe Arbeitsleistung zu erbringen;
genau wie der Arbeitgeber dazu verpflichtet ist als Gegenleistung eine Verguetung zu gewaehren.
</p>
<p>
Pflichten die durch die vertragliche Bindung entstehen:
</p>
<ul>
<li>
Fuersorgepflicht
</li>
<li>
Beschaeftigungspflicht
</li>
<li>
Pflicht zur Urlaubsgewaerung
</li>
<li>
Gleichbehandlungspflicht
</li>
<li>
Entgeldfortzahlung bei Krankheit

</li>
</ul>
</li>
<li id="sec-3.2.6.3"><span class="todo TODO"> TODO</span> KEINE Pflichten des Arbeitgebers <br/>

<ul>
<li>
verkuerzung der Probezeit
</li>
<li>
Erstattung der Fahrtkosten

</li>
</ul>
</li>
<li id="sec-3.2.6.4">Pflichten des Arbeitgebers: <br/>

<ul>
<li>
muss einen Ausbildungsplan bei der IHK genehmigen lassen.
</li>
<li>
als Mitglied des Arbeitgeberverbands muss der aktuelle Tarifvertrag berücksichtigt werden.

</li>
<li>
Die Betriebsvereinbarung beinhaltet über den Tarifvertrag hinausgehende Vereinbarungen, und gilt für alle Mitarbeiter

</li>
<li>
Muss Betriebsunfaelle der Berufsgenossenschaft melden!

</li>
</ul>
</li>
<li id="sec-3.2.6.5"><span class="done DONE"> DONE</span> Wirtschafts Sektoren <br/>

<p>
Primärer Sektor (Urerzeugung)
</p>
<p>
z.B.: - Rheinische Braunkohle AG
</p><ul>
<li>
Schweinezucht Willhelm Schäfer e.K.

</li>
</ul>

<p>Sekundärer Sektor (Weiterverarbeitung)
</p>
<p>
z.B.: - Maschienenfabrik Hans Wolf KG
</p>
<p>
Tertiärer Sektor (Handel/Dienstleistung)
</p>
<p>
z.B.: - ComStore, Computergroßhandlung
</p><ul>
<li>
Rhein Ruhr Bank AG

</li>
</ul>

<p>Marktsituationen:
</p>
<p>
Käufermarkt: 
</p>
<ul>
<li>
Verkäufer bietet kostenlose Zusatzleistungen an, um neue Kunden zu gewinnen.
Besser Billig loswerden, als garnicht.

</li>
</ul>

<p>Verkaeufermarkt:
</p>
<ul>
<li>
Verkaeufer machen die Waren teuerer, da sie trozdem gekauft werden. 


</li>
</ul>

<p>Horizontale Unternehmenskooperation
</p>
<ul>
<li>
Die Produktpalette wird aufgeraeumt.
</li>
<li>
Verweist Kunden an Partner Produzenten.
</li>
<li>
Mehrere Unternehmen bilden ein Produktionsverbund, hoehere Stueckzahlen / geringere Kosten

</li>
</ul>

<p>Minimalprinzip
</p>
<ul>
<li>
Ziel mit moeglichst wenig Mitteln erreichen
</li>
<li>
erreichbar mittels Oeffentlicher Ausschreibung

</li>
</ul>

<p>Maximalprinzip
</p>
<ul>
<li>
aus einem Budget moeglichst viel Gewinnen

</li>
</ul>
</li>
<li id="sec-3.2.6.6"><span class="todo TODO"> TODO</span> Unternehmensformen [1/4] [25%] <br/>
<ul>
<li id="sec-3.2.6.6.1"><span class="done DONE"> DONE</span> KG <br/>

<p>
Gesellschaftsform:          Personen Gesellschaft
Gruenderanzahl:             min. 2 Personen.
Grundsatzentscheidungen:    Gesellschafterversammlung
</p>
<p>
Einlageregelung:            frei Vereinbar
keine Gesetzlichen Vorschriften
Bar-/Sacheinlage
</p>
<p>
Gewinn-/Verlustanteil:      Gewinn      : 4% auf Kapital, rest wird angemessen Verteilt
Verlust     : im angemessenen Verhaeltnis, praezise Regelung im Gesellsch. Vertrag
Kommanditist: Verluste nur bis Kapitaleinsatz, ausstehende Einlage nicht NULL. Gewinne erhoehen Kapitalanteil nur bis Einlagebetrag
</p>
</li>
<li id="sec-3.2.6.6.2"><span class="todo TODO"> TODO</span> GmbH <br/>

<p>
Firma kann eine Tocherterfirma mit 10 Mitarbeitern erstellen.
Stammkapital : 50000 
</p>
</li>
<li id="sec-3.2.6.6.3"><span class="todo TODO"> TODO</span> AG <br/>
</li>
<li id="sec-3.2.6.6.4"><span class="todo TODO"> TODO</span> OHG <br/>
</li>
</ul>
</li>
</ul>
</div>

</div>

<div id="outline-container-3.2.7" class="outline-4">
<h4 id="sec-3.2.7"><span class="section-number-4">3.2.7</span> Projektorganisation </h4>
<div class="outline-text-4" id="text-3.2.7">

<ul>
<li id="sec-3.2.7.1">Reine ProjektOrganisation <br/>

<p>
Alle Mitarbeiter arbeiten zu 100% an einem Projekt.
Sie sind nur dem Projektleiter untergestellt.
</p>
</li>
<li id="sec-3.2.7.2">Matrixorganisation <br/>

<p>
Die Mitarbeiter arbeiten für einen Projektleiter und ihren Abteilungsleiter
</p>
</li>
<li id="sec-3.2.7.3">Staborganisation <br/>

<p>
Mitarbeiter bleiben in ihren Abteilungen, arbeiten bei bedarf in einem Projekt.
Projektleiter ist nur Organisator, ohne Weisungsrecht
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-3.2.8" class="outline-4">
<h4 id="sec-3.2.8"><span class="section-number-4">3.2.8</span> Kick-Off Meeting </h4>
<div class="outline-text-4" id="text-3.2.8">

<ul>
<li id="sec-3.2.8.1">Zielsetzung <br/>

<p>
Vorstellung der Projektziele
Sammlung von Lösungsideen (Brainstorming)
Vorstellen von Best Practice-Beispielen
</p>
<p>
Kennenlernen der Projektmitglieder
</p>
<p>
Start der Entwicklungsphase
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-3.2.9" class="outline-4">
<h4 id="sec-3.2.9"><span class="section-number-4">3.2.9</span> Lastenheft </h4>
<div class="outline-text-4" id="text-3.2.9">

<ul>
<li id="sec-3.2.9.1">Inhalt <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>Was:</td><td>Beschreibung der erwarteten Leistungen</td><td>(Intranet Site)</td></tr>
<tr><td>Wofür:</td><td>Beschreibung des Zwecks der erwarteten Leistungen</td><td>(Zugriff von Außenstehenden aufs Intranet)</td></tr>
</tbody>
</table>


<p>
Im Lastenheft stehen die Anforderungen an ein Projekt
</p>
<p>
Das Lastenheft beschreibt ein Projekt.
Es steht genau drin wie was getan werden soll.
Die Leistungen die zu Erfüllen sind und deren Zweck
</p>
</li>
</ul>
</div>
</div>

</div>

<div id="outline-container-3.3" class="outline-3">
<h3 id="sec-3.3"><span class="section-number-3">3.3</span> Hardware [3/4] [75%] </h3>
<div class="outline-text-3" id="text-3.3">


</div>

<div id="outline-container-3.3.1" class="outline-4">
<h4 id="sec-3.3.1"><span class="section-number-4">3.3.1</span> Speicher </h4>
<div class="outline-text-4" id="text-3.3.1">


<p>
Berechnung der PCx-yyyy Bezeichnung.
</p>
<p>
Formel: Bezeichnung = (4x Speichertakt(MHz) x Busbreite )/ 8
</p>
<p>
Beispiel:  PC2-6400 = (4x 200MHz x 64bit )/ 8
PC2 wegen DDR2
</p></div>

</div>

<div id="outline-container-3.3.2" class="outline-4">
<h4 id="sec-3.3.2"><span class="section-number-4">3.3.2</span> <span class="done DONE"> DONE</span> HDD </h4>
<div class="outline-text-4" id="text-3.3.2">

<ul>
<li id="sec-3.3.2.1">S.M.A.R.T. Self-Monitoring, Analysis and Reporting Technology <br/>

<p>
Ausfallrelevante Informationen:
</p>
<p>
Seek Error Rate
Raw Read Error Rate
Hardware ECC Recovered
Scan Error Rate
Throughput Performance
Spin Up Time
Reallocated Sector Count
Drive Temperature
</p>
<p>
Informierende Daten:
</p>
<p>
Start / Stop Count
Power On Hours Count
Load / Unload Cycle Count
Ultra DMA CRC Error Count
</p>
<p>
Wiki SMART: <a href="http://de.wikipedia.org/wiki/Self-Monitoring,_Analysis_and_Reporting_Technology">http://de.wikipedia.org/wiki/Self-Monitoring,_Analysis_and_Reporting_Technology</a>
Wiki HDD  : <a href="http://de.wikipedia.org/wiki/Festplatte">http://de.wikipedia.org/wiki/Festplatte</a>
</p>
</li>
<li id="sec-3.3.2.2">RAID <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">HDD´s</th><th scope="col">RAID Level</th><th scope="col">Speicherart</th><th scope="col">Sicherheit</th><th scope="col">Speed (r/w)</th></tr>
</thead>
<tbody>
<tr><td>ab 2</td><td>RAID 0</td><td>Schreibt auf alle Platten nacheinander</td><td>0</td><td>1x</td></tr>
<tr><td>ab 2</td><td>RAID 1</td><td>Spiegelt die Daten auf jede Disk</td><td>Anzahl HDD</td><td>(1x/1-n x)</td></tr>
<tr><td>10</td><td>RAID 2</td><td>Benutzt 8 HDD´s wie R0, wird 2x gespiegelt</td><td>2 HDD´s</td><td>8x</td></tr>
<tr><td>ab 3</td><td>RAID 5</td><td>1x Parity, rest wird verteilt (R0)</td><td>1HDD</td><td>n-1x</td></tr>
<tr><td>ab 4</td><td>RAID 6</td><td>wie R5, mit 2 Parity Platten</td><td>2HDD</td><td>n-2x</td></tr>
<tr><td>ab 1</td><td>RAID 7</td><td>wie R5, mit "mini Linux"</td><td>0</td><td>1x</td></tr>
<tr><td>ab 2</td><td>Matrix RAID</td><td>Kombiniert vers. RAID-Level</td><td>0</td><td>1,5x (R1+R0)</td></tr>
<tr><td>ab 1</td><td>JBOD</td><td>Jede Platte wird nacheinander gefüllt</td><td>0</td><td>1x</td></tr>
</tbody>
</table>


<p>
Rx = RAID Level x
n  = anzahl der HDD´s
</p>
<p>
RAID 5 Parity Disk
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="right" /><col align="right" /><col align="right" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">HDD1</th><th scope="col">HDD2</th><th scope="col">Parity Disk</th><th scope="col">Info zur Berechnung</th></tr>
</thead>
<tbody>
<tr><td>0</td><td>1</td><td>1</td><td>&lt;- Hier wird mittels XOR verknüpft!</td></tr>
<tr><td>0</td><td>0</td><td>0</td><td>Es muss ungerade sein um</td></tr>
<tr><td>1</td><td>1</td><td>0</td><td>eine 1 zu erzeugen!</td></tr>
<tr><td>1</td><td>0</td><td>1</td><td></td></tr>
</tbody>
</table>



<p>
Wiki: <a href="http://de.wikipedia.org/wiki/RAID">http://de.wikipedia.org/wiki/RAID</a>
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-3.3.3" class="outline-4">
<h4 id="sec-3.3.3"><span class="section-number-4">3.3.3</span> <span class="done DONE"> DONE</span> USV </h4>
<div class="outline-text-4" id="text-3.3.3">


<p>
Beispielbezeichnung: USV IEC62040-3 (UPS - UnitPowerSupply)
</p>
<p>
Bezeichnungsbedeutung:
</p><table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>-</td><td>1</td><td>2</td><td>-</td><td>3</td><td>4</td><td>5</td></tr>
</tbody>
</table>

Typ  - Quali-Quanti

<p>
Typ:
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Typ</th><th scope="col"></th><th scope="col"></th></tr>
</thead>
<tbody>
<tr><td>VFD</td><td>Spannungs Abhängig</td><td>Offline</td></tr>
<tr><td>VI</td><td>Spannunngs Unabhängig*</td><td>Line-Interactive</td></tr>
<tr><td>VFI</td><td>Wie VI, aktive Qualtitätsverbesserung</td><td>Online</td></tr>
</tbody>
</table>


<ul>
<li>
 Filtert Störungen, wenn aktiv.
</li>
</ul>

<p>*1 Läd sich immer auf, speist Computer immer per Akku
</p>
<p>
Qualität:
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="right" /><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>1</td><td>2</td><td>1= Batteriebetrieb 2= Normalbetrieb  </td></tr>
</tbody>
</table>


<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Typ</th><th scope="col">Quali</th><th scope="col">Signal</th><th scope="col">Sig. Quali</th></tr>
</thead>
<tbody>
<tr><td>VFD</td><td>Y</td><td>1 oder 0</td><td>Schlecht</td></tr>
<tr><td>VI</td><td>X</td><td>immernoch ekig</td><td>OK</td></tr>
<tr><td>VFI</td><td>S</td><td>rund, (wie sinus)</td><td>Gut</td></tr>
</tbody>
</table>


<p>
Quantität:
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="right" /><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>3</td><td>4</td><td>5</td><td>3=Umschalten 4=Lastwechsel Sinus 5=Lastwechsel, nicht Linear</td></tr>
</tbody>
</table>


<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="right" /><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Wert</th><th scope="col">Geschw.</th><th scope="col">Unterbrechungsdauer</th></tr>
</thead>
<tbody>
<tr><td>1</td><td>schnell</td><td>Unterbrechungsfrei</td></tr>
<tr><td>2</td><td>mittel</td><td>&lt; 1 ms</td></tr>
<tr><td>3</td><td>langsam</td><td>&lt; 10ms</td></tr>
<tr><td>4</td><td>DatenBlatt!</td><td>FAIL!!!!</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-3.3.4" class="outline-4">
<h4 id="sec-3.3.4"><span class="section-number-4">3.3.4</span> <span class="done DONE"> DONE</span> Datensicherung </h4>
<div class="outline-text-4" id="text-3.3.4">


<p>
Datensicherung:  Verfügbarkeit der Daten, BackUp´s
Datensicherheit: Daten Schützen, Verschlüsselung
Datenschutz:     Personen Schutz, BDSG /Rechte
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Vertraulichkeit</th><th scope="col">Nur Sender und Empfänger können auf Inhalt der Daten zugreifen</th></tr>
<tr><th scope="col"></th><th scope="col">!!! VERHINDERUNG VON ABHÖRVERSUCHEN !!!</th></tr>
<tr><th scope="col">&mdash;&mdash;&mdash;&mdash;&mdash;</th><th scope="col">&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</th></tr>
<tr><th scope="col">Verfügbarkeit</th><th scope="col">Funktionsfähigkeit kann nicht durch Unbefugte manipuliert werden</th></tr>
<tr><th scope="col">Verlässlichkeit</th><th scope="col">Sender, Empfänger und Datenübertragung funktionieren betriebssicher</th></tr>
</thead>
<tbody>
<tr><td>Integrität</td><td>Daten können nicht durch unbefugte verändert / zerstört werden</td></tr>
<tr><td></td><td>!!! VERHINDERUNG UNBERECHTIGTER VERÄNDERUNG !!!</td></tr>
<tr><td>&mdash;&mdash;&mdash;&mdash;&mdash;</td><td>&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</td></tr>
<tr><td>Verbindlichkeit</td><td>Daten stammen von angegebenen Sender. Der Empfang kann nicht abgestritten werden</td></tr>
<tr><td>Authentizität</td><td>Der beim Empfänger erkennbare Absender ist wirklich der Absender der Daten</td></tr>
</tbody>
</table>


<ul>
<li id="sec-3.3.4.1">Backup <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Sicherheit</th><th scope="col">Backup Variante</th><th scope="col"></th><th scope="col">Folge</th><th scope="col">der</th><th scope="col">Sicherungen</th><th scope="col"></th><th scope="col">Beschreibung</th><th scope="col">Wiederherstellung</th><th scope="col">Preis/Leistung</th></tr>
</thead>
<tbody>
<tr><td>+++</td><td>Voll Backup</td><td></td><td>1. VS</td><td>2. VS</td><td>3. VS</td><td></td><td>Immer Alles!</td><td>1. VS</td><td>&ndash;</td></tr>
<tr><td>+</td><td>Inkrementelles Backup</td><td></td><td>1. VS</td><td>1. IS</td><td>2. IS</td><td></td><td>Nur die änderungen</td><td>Alles Nacheinandee</td><td>++</td></tr>
<tr><td>++</td><td>Diferenzielles Backup</td><td></td><td>1. VS</td><td>1. DS</td><td>2. DS</td><td></td><td>Alles seit VollBackup</td><td>1. VS + 1,2,3&hellip;DS</td><td>+</td></tr>
</tbody>
</table>


<p>
VS = Vollsicherung
IS = Inkrementelle Sicherung
DS = Diferenzielle Sicherung
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Backup Variante</th><th scope="col">Zeitabschnitt</th><th scope="col">Aufbewahrungsdauer</th></tr>
</thead>
<tbody>
<tr><td>Voll Sicherung</td><td>Monatlich (jan,feb,&hellip;)</td><td>1 Jahr, ist üblich</td></tr>
<tr><td>Diferenziel.</td><td>Wöchentlich (jeden Son.)</td><td>ca. 5 Wochen</td></tr>
<tr><td>Inkrementel.</td><td>Täglich (Mo, Di, Mi,&hellip;)</td><td>1 Woche</td></tr>
</tbody>
</table>


</li>
</ul>
</div>

</div>

<div id="outline-container-3.3.5" class="outline-4">
<h4 id="sec-3.3.5"><span class="section-number-4">3.3.5</span> <span class="todo TODO"> TODO</span> Verschlüsselung </h4>
<div class="outline-text-4" id="text-3.3.5">

<ul>
<li id="sec-3.3.5.1">Synchrone  Verschlüsselung <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Sender</th><th scope="col">schickt etwas weg zum &hellip;</th><th scope="col">Empfänger</th></tr>
</thead>
<tbody>
<tr><td>Erzeugt einen Private Key</td><td>Private Key wird äbgehört von Hacker</td><td>Empfängt den P. Key</td></tr>
<tr><td></td><td></td><td>Erzeugt aus dem P. Key einen Ö. Key</td></tr>
<tr><td></td><td>Ö. Key wird auch vom Hacker abgehört</td><td></td></tr>
<tr><td>Ö. Key wird empfangen</td><td></td><td></td></tr>
<tr><td>Sendet mit P. Key verschlüsselte Daten</td><td>Hacker liest/verändert Daten</td><td>Bekommt eventl. veränderte Daten</td></tr>
<tr><td></td><td></td><td>Sendet Antwort</td></tr>
<tr><td></td><td>Liest/verändert Antwort</td><td></td></tr>
<tr><td>Bekommt eventl. veränderte Antwort</td><td></td><td></td></tr>
</tbody>
</table>


</li>
<li id="sec-3.3.5.2">ASynchrone Verschlüsselung <br/>

<p>
Der Öffentl. Key kann Nachrichten verschlüsseln, die nur mit dem Privaten Key geöffnet werden können.
Der Private Key kann einen öffentlichen Key erstellen, der für ihn verschlüsseln kann.
Nur er selbst kann dann den Inhalt noch lesen
</p>

<p>
Sender gibt Empfänger ein Fahrradschloß (ö. Key von Sender).
Der Empfänger kann jetzt abschließen aber nicht mehr öffnen.
Der Sender kann sich das Fahrrad jetzt wieder abholen (P. Key von Sender)
</p>
<p>
Also der Öffentliche Key ist eine Box, dort kann man eine Nachricht reinlegen,
die nur vom Empfänger gelesen werden kann. (Also nur mit dem P.Key des Empfängers zu öffnen)
</p></li>
</ul>
</div>
</div>
</div>

</div>

<div id="outline-container-4" class="outline-2">
<h2 id="sec-4"><span class="section-number-2">4</span> Drupal 7 </h2>
<div class="outline-text-2" id="text-4">


</div>

<div id="outline-container-4.1" class="outline-3">
<h3 id="sec-4.1"><span class="section-number-3">4.1</span> Wichtige Module: </h3>
<div class="outline-text-3" id="text-4.1">


<p>
Wichtig!
Folgende Module Aktivieren:
</p>
<ul>
<li>
Menu     -&gt; Menu
</li>
<li>
List     -&gt; Feldtypen
</li>
<li>
Image    -&gt; FotoUpload
</li>
<li>
Field-UI -&gt; FormularFelder
</li>
<li>
Field    -&gt; DateiUpload
</li>
<li>
File     -&gt; DateiUpload
</li>
<li>
Path     -&gt; CleanURL

</li>
</ul>

<p>Folgende Module sind für Foto Galerien geeignet!
</p>
<ul>
<li>
ThickBox
</li>
<li>
Lightbox2
</li>
<li>
Fast Gallery
</li>
<li>
Galerie
</li>
<li>
Media
</li>
<li>
Media Gallery
</li>
<li>
Colorbox
</li>
<li>
himuesgallery
</li>
<li>
Chaos Tool Suite ( ctools )

</li>
</ul>

<p>Bei mir haben folgende gereicht:
</p>
<ul>
<li>
Media
</li>
<li>
Media Gallery

</li>
</ul>
</div>

</div>

<div id="outline-container-4.2" class="outline-3">
<h3 id="sec-4.2"><span class="section-number-3">4.2</span> Add Fotos and Videos </h3>
<div class="outline-text-3" id="text-4.2">


<p>
Perfektes Tutorial hier:
</p><ul>
<li>
<a href="http://www.waldbeek.com/blog/videos-drupal-7-html5-iphone-android-und-flash-fallback">http://www.waldbeek.com/blog/videos-drupal-7-html5-iphone-android-und-flash-fallback</a>

</li>
</ul>

<p>Download der folgenden Module:
</p><ul>
<li>
<a href="http://drupal.org/project/libraries">http://drupal.org/project/libraries</a>
</li>
<li>
<a href="https://drupal.org/project/mediaelement">https://drupal.org/project/mediaelement</a> 

</li>
</ul>

<p>Nun die MediaElemente.js herunterladen:
</p><ul>
<li>
<a href="http://mediaelementjs.com/">http://mediaelementjs.com/</a>

</li>
</ul>

<p>Und nach sites/all/libraries entpacken und nach mediaelement umbennen!
</p>
<p>
Beide nach sites/all/modules entpacken
und unter Drupal &gt; Administration &gt; Module Aktivieren
</p>
<p>
Um diese zu benutzen muss man z.B. bei einem Video:
</p>
<ol>
<li>
Inhaltstyp mit Feldtype Datei erzeugen -&gt; Name: Video
</li>
<li>
Als DateiEndung mp4 einstellen
</li>
<li>
Bei der Anzeige das Feld Video mit MediaElement Video Formatieren
</li>
<li>
Jetzt kann man sich einfach ein "Video Artikel" erstellen

</li>
</ol>
</div>

</div>

<div id="outline-container-4.3" class="outline-3">
<h3 id="sec-4.3"><span class="section-number-3">4.3</span> Increase RAM usage of Drupal </h3>
<div class="outline-text-3" id="text-4.3">

</div>

</div>

<div id="outline-container-4.4" class="outline-3">
<h3 id="sec-4.4"><span class="section-number-3">4.4</span> Increase Upload File Size </h3>
<div class="outline-text-3" id="text-4.4">


</div>

<div id="outline-container-4.4.1" class="outline-4">
<h4 id="sec-4.4.1"><span class="section-number-4">4.4.1</span> To 80 MB </h4>
<div class="outline-text-4" id="text-4.4.1">


<p>
To be able for me to fix that PDO error I added this into my empty php.ini
</p>
<p>
extension=pdo.so
extension=pdo_sqlite</sub>.so
extension=sqlite.so
extension=pdo_mysql</sub>.so
</p>
<p>
After fixing the PDO problem I added the actual configuration code for the file upload which is :
</p>
<p>
post_max</sub>_size</sub> = 160M
upload_max</sub>_filesize</sub> = 80M
magic_quotes</sub>_gpc</sub> = off
</p>
</div>

</div>

<div id="outline-container-4.4.2" class="outline-4">
<h4 id="sec-4.4.2"><span class="section-number-4">4.4.2</span> To 10MB </h4>
<div class="outline-text-4" id="text-4.4.2">


<p>
For example, to increase the limit on uploaded files to 10 MB:
</p>
<p>
Add the below to the relevant php.ini file (recommended, if you have access). Note that for some hosts this is a system-wide setting. However, for hosts running PHP as a CGI script with suexec (for example) you may be able to put these directives in a php.ini file in your Drupal root directory.
upload_max</sub>_filesize</sub> = 10M
post_max</sub>_size</sub> = 10M
Add the below to your .htaccess file in your Drupal root directory.
php_value</sub> upload_max</sub>_filesize</sub> 10M
php_value</sub> post_max</sub>_size</sub> 10M
</p>
</div>

</div>

<div id="outline-container-4.4.3" class="outline-4">
<h4 id="sec-4.4.3"><span class="section-number-4">4.4.3</span> From Default to 10M </h4>
<div class="outline-text-4" id="text-4.4.3">


<p>
The limit for PHP is by default set to 2 MB for file uploads.
</p>
<p>
To increase this to 10 MB, add the following to the .htaccess file in your Drupal directory or to the Apache site definition:
</p>
<p>
php_value</sub> upload_max</sub>_filesize</sub> 10M
php_value</sub> post_max</sub>_size</sub> 20M
</p>
</div>
</div>
</div>

</div>

<div id="outline-container-5" class="outline-2">
<h2 id="sec-5"><span class="section-number-2">5</span> Sprachen </h2>
<div class="outline-text-2" id="text-5">


</div>

<div id="outline-container-5.1" class="outline-3">
<h3 id="sec-5.1"><span class="section-number-3">5.1</span> Italienisch </h3>
<div class="outline-text-3" id="text-5.1">


</div>

<div id="outline-container-5.1.1" class="outline-4">
<h4 id="sec-5.1.1"><span class="section-number-4">5.1.1</span> Vokabeln </h4>
<div class="outline-text-4" id="text-5.1.1">

<ul>
<li id="sec-5.1.1.1">Verben <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Deutsch</th><th scope="col">Italienisch einz.</th><th scope="col">Italienisch plur.</th></tr>
</thead>
<tbody>
<tr><td>haben</td><td>ha (w.), ho (m.)</td><td>abbiamo</td></tr>
<tr><td>sein</td><td>e</td><td></td></tr>
<tr><td>sind</td><td>sono</td><td>siamo</td></tr>
<tr><td>gehen</td><td>cammina</td><td></td></tr>
<tr><td>schwimmen</td><td>nuota</td><td>nuotano</td></tr>
<tr><td>rennen</td><td>corre</td><td>corrono</td></tr>
<tr><td>essen</td><td>mangiare</td><td>magiano</td></tr>
<tr><td>lesen</td><td>legge</td><td>legono</td></tr>
<tr><td>schlafen</td><td>dormi</td><td>dormono</td></tr>
<tr><td>trinken</td><td>beve</td><td>bevono</td></tr>
<tr><td>kochen</td><td>cucina</td><td>cucinano</td></tr>
<tr><td>tragen</td><td>porta</td><td>portano</td></tr>
<tr><td>lenken</td><td>guida</td><td>guidano</td></tr>
<tr><td>kaufen</td><td>compra</td><td>comprano</td></tr>
<tr><td>suchen</td><td>cercare</td><td>cercano</td></tr>
<tr><td>aufladen</td><td>carica</td><td></td></tr>
</tbody>
</table>


</li>
<li id="sec-5.1.1.2">Fragen <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Deutsch</th><th scope="col">Italienisch</th></tr>
</thead>
<tbody>
<tr><td>Wer?</td><td>Chi?</td></tr>
<tr><td>Was?</td><td>Che?</td></tr>
<tr><td>Was ist das?</td><td>Che cos'e?</td></tr>
</tbody>
</table>


</li>
<li id="sec-5.1.1.3">Personen <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Deutsch</th><th scope="col">Italienisch</th></tr>
</thead>
<tbody>
<tr><td>Mediziner</td><td>Medico</td></tr>
<tr><td>Lehrer</td><td>Insegnante</td></tr>
<tr><td>Schüler</td><td>Aluno</td></tr>
<tr><td>Polizei</td><td>Poliziotto</td></tr>
<tr><td>Erwachsene</td><td>Adulti</td></tr>
<tr><td>Kinder</td><td>Bambini</td></tr>
<tr><td>Pferd</td><td>Cavallo</td></tr>
<tr><td>Katze</td><td>Gatto</td></tr>
<tr><td>Hund</td><td>Cane</td></tr>
</tbody>
</table>


</li>
<li id="sec-5.1.1.4">Adjective <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Deutsch</th><th scope="col">Italienisch</th></tr>
</thead>
<tbody>
<tr><td>und</td><td>e</td></tr>
<tr><td>bis</td><td>a</td></tr>
<tr><td>mehr, plus</td><td>piu</td></tr>
</tbody>
</table>


<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>groß</td><td>grande</td></tr>
<tr><td>klein</td><td>piccolo</td></tr>
<tr><td>feucht</td><td>humidita</td></tr>
</tbody>
</table>


<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>weiß</td><td>bianco</td></tr>
<tr><td>schwarz</td><td>nero</td></tr>
<tr><td>rot</td><td>rosso</td></tr>
<tr><td>hell-blau</td><td>azuro</td></tr>
<tr><td>frün</td><td>verde</td></tr>
<tr><td>geld</td><td>giallo</td></tr>
</tbody>
</table>


</li>
<li id="sec-5.1.1.5">Objekte <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Deutsch</th><th scope="col">Italienisch</th></tr>
</thead>
<tbody>
<tr><td>Apfel</td><td>Mela</td></tr>
<tr><td>Ei</td><td>Uovo</td></tr>
<tr><td>Reis</td><td>Riso</td></tr>
<tr><td>Wasser</td><td>Acqua</td></tr>
<tr><td>Milch</td><td>Latte</td></tr>
<tr><td>Baum</td><td>Albero</td></tr>
<tr><td>Brot</td><td>Pane</td></tr>
<tr><td>Brötchen</td><td>Panino</td></tr>
<tr><td>Mond</td><td>Luna</td></tr>
<tr><td>Himmel</td><td>Cielo</td></tr>
<tr><td>Haar</td><td>Capello</td></tr>
<tr><td>Hut</td><td>Cappello</td></tr>
<tr><td>Hemd</td><td>Camicia</td></tr>
<tr><td>Mantel</td><td>Capotto</td></tr>
<tr><td>Kleid</td><td>Vestito</td></tr>
<tr><td>Grass</td><td>Erba</td></tr>
<tr><td>Schuhe</td><td>Scarpe</td></tr>
<tr><td>Hose</td><td>Pantalone</td></tr>
<tr><td>Blume</td><td>Fiore</td></tr>
<tr><td>Auto</td><td>Macchina</td></tr>
<tr><td>Ball</td><td>Palla</td></tr>
<tr><td>Bett</td><td>Letto</td></tr>
<tr><td>Fahrrad</td><td>Bicicletta</td></tr>
<tr><td>Handy</td><td>Telefonino</td></tr>
<tr><td>Schale</td><td>Ciotole</td></tr>
<tr><td>Schlüssel</td><td>Chiave</td></tr>
<tr><td>Stift</td><td>Penne</td></tr>
<tr><td>Stuhl</td><td>Sedio</td></tr>
<tr><td>Tasse</td><td>Tazza</td></tr>
<tr><td>Teller</td><td>Piato</td></tr>
<tr><td>Telefon</td><td>telefoni</td></tr>
<tr><td>Tisch</td><td>Tavolo</td></tr>
<tr><td>T-Shirt</td><td>Magliette</td></tr>
<tr><td>Zeitung</td><td>Giornale</td></tr>
<tr><td>Schildkröte</td><td>tartuga</td></tr>
<tr><td>Heidelbeere</td><td>Mirtillo</td></tr>
<tr><td>Schw. Johannisbeere</td><td>Sambuca</td></tr>
<tr><td>Aubergine</td><td>Melanzane</td></tr>
</tbody>
</table>


</li>
<li id="sec-5.1.1.6">Zeitformen <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Deutsch</th><th scope="col">Italienisch</th></tr>
</thead>
<tbody>
<tr><td>Jetzt</td><td>ora</td></tr>
<tr><td>Morgends</td><td>Martina</td></tr>
<tr><td>Abends</td><td>Sera</td></tr>
<tr><td>Morgen</td><td>Domani</td></tr>
<tr><td>Gestern</td><td>Jeri</td></tr>
</tbody>
</table>


</li>
<li id="sec-5.1.1.7">Babbel Handy <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Deutsch</th><th scope="col">Italienisch</th></tr>
</thead>
<tbody>
<tr><td>erlaubnis</td><td>permesso</td></tr>
<tr><td>dürfen</td><td>potere</td></tr>
<tr><td>verbot</td><td>divieto</td></tr>
<tr><td>bitte</td><td>per favore</td></tr>
<tr><td>aufhalten</td><td>fermare</td></tr>
<tr><td>streng</td><td>severo</td></tr>
<tr><td>lassen</td><td>lasciare</td></tr>
<tr><td>vergnügen</td><td>piacere</td></tr>
<tr><td>hunger</td><td>fame</td></tr>
<tr><td>durst</td><td>sete</td></tr>
<tr><td>empfindung</td><td>sensazione</td></tr>
<tr><td>nervös</td><td>nervoso</td></tr>
<tr><td>schmerz</td><td>il dolore</td></tr>
<tr><td>überraschung</td><td>sorpresa</td></tr>
<tr><td>langweilen</td><td>annoiarsi</td></tr>
<tr><td>angst</td><td>la paura</td></tr>
<tr><td>müde</td><td>stanco</td></tr>
<tr><td>zählen</td><td>contare</td></tr>
<tr><td>wetter</td><td>il tempo</td></tr>
<tr><td>antwort</td><td>riposta</td></tr>
<tr><td>frage</td><td>domanda</td></tr>
<tr><td>kompliment</td><td>complimento</td></tr>
<tr><td>thema</td><td>argomento</td></tr>
<tr><td>glück</td><td>in boca di lupo</td></tr>
<tr><td>sagen</td><td>dire</td></tr>
<tr><td>fragen</td><td>chiedere</td></tr>
<tr><td>kopfsalat</td><td>lattuga</td></tr>
<tr><td>himbeere</td><td>lampone</td></tr>
<tr><td>paprika</td><td>peperone</td></tr>
<tr><td>spinat</td><td>spinaci</td></tr>
<tr><td>radieschen</td><td>ravanello</td></tr>
<tr><td>kürbis</td><td>zucca</td></tr>
<tr><td>nahrhaft</td><td>nutriente</td></tr>
<tr><td>steckrübe</td><td>rapa</td></tr>
<tr><td>kauen</td><td>masticare</td></tr>
<tr><td>lamm</td><td>agnello</td></tr>
<tr><td>flügel</td><td>ala</td></tr>
<tr><td>filet</td><td>filetto</td></tr>
<tr><td>hack</td><td>carne macinata</td></tr>
<tr><td>salami</td><td>salame</td></tr>
<tr><td>meeresfrüchte</td><td>frutti di mare</td></tr>
<tr><td>schwanz</td><td>coda</td></tr>
<tr><td>zart</td><td>tenero</td></tr>
<tr><td>ausnehmen</td><td>sventrare</td></tr>
<tr><td>erwidern</td><td>replicare</td></tr>
<tr><td>neulich</td><td>recente</td></tr>
<tr><td>kommentar</td><td>commento</td></tr>
<tr><td>gespräch</td><td>conversatione</td></tr>
<tr><td>plaudern</td><td>chiacchierare</td></tr>
<tr><td>in letzter Zeit</td><td>ultimamente</td></tr>
<tr><td>entschuldigen</td><td>scusare</td></tr>
<tr><td>vorstellen</td><td>presentare</td></tr>
<tr><td>langweilig</td><td>noioso</td></tr>
<tr><td>beschweren</td><td>lamentarsi</td></tr>
<tr><td>für</td><td>favore</td></tr>
<tr><td>gegen</td><td>contraio</td></tr>
<tr><td>punkt</td><td>punto</td></tr>
<tr><td>unterbrechen</td><td>interrompere</td></tr>
<tr><td>perspektive</td><td>prospetiva</td></tr>
<tr><td>unmöglich</td><td>impossibile</td></tr>
<tr><td>sprechen</td><td>parlare</td></tr>
<tr><td>erklären</td><td>spiegare</td></tr>
<tr><td>aufgeben</td><td>darsi per vinto</td></tr>
<tr><td>standpunkt</td><td>il parere</td></tr>
<tr><td>zweifel</td><td>dubbio</td></tr>
<tr><td>argumentieren</td><td>discutere</td></tr>
<tr><td>sich einigen</td><td>convenire</td></tr>
<tr><td>anderer Meinung sein</td><td>non essere d'accordo</td></tr>
<tr><td>kritik</td><td>critica</td></tr>
<tr><td>beweisen</td><td>provare</td></tr>
<tr><td>unterstützen</td><td>appoggrare</td></tr>
<tr><td>leugnen</td><td>negare</td></tr>
<tr><td>fleisch</td><td>carne</td></tr>
<tr><td>schwein</td><td>maiale</td></tr>
<tr><td>rind</td><td>manzo</td></tr>
<tr><td>gelügel</td><td>pollame</td></tr>
<tr><td>steak</td><td>bistecca</td></tr>
<tr><td>wurst</td><td>salsicca</td></tr>
<tr><td>fisch</td><td>pesce</td></tr>
<tr><td>mager</td><td>magro</td></tr>
<tr><td>fett</td><td>grasso</td></tr>
<tr><td>grillen</td><td>grigliare</td></tr>
<tr><td>spirituosen</td><td>superalcolico</td></tr>
<tr><td>leitungswasser</td><td>aqua del rubineto</td></tr>
<tr><td>erfrischungsgetränk</td><td>la bevanda rinfrescante</td></tr>
<tr><td>sekt</td><td>spumate</td></tr>
<tr><td>trocken</td><td>secco</td></tr>
<tr><td>schnaps</td><td>aquavite</td></tr>
<tr><td>alkoholfrei</td><td>analcolico</td></tr>
<tr><td>eis</td><td>gelato</td></tr>
<tr><td>süßigkeiten</td><td>dilciumi</td></tr>
<tr><td>nachspeise</td><td>dessert</td></tr>
<tr><td>kuchen</td><td>torta</td></tr>
<tr><td>sahne</td><td>panna</td></tr>
<tr><td>kische</td><td>ciliegia</td></tr>
<tr><td>käse</td><td>formaggio</td></tr>
<tr><td>süß</td><td>dolce</td></tr>
<tr><td>waffel</td><td>cialda</td></tr>
<tr><td>gebäck</td><td>paste</td></tr>
<tr><td>keks</td><td>biscotto</td></tr>
<tr><td>zuckerwatte</td><td>zucchero filato</td></tr>
<tr><td>lakritze</td><td>liquirizia</td></tr>
<tr><td>obstsalat</td><td>macedonia</td></tr>
<tr><td>mächtig</td><td>ricco</td></tr>
<tr><td>widerstehen</td><td>resistere</td></tr>
<tr><td>überessen</td><td>fare indigestione</td></tr>
<tr><td>geschirr</td><td>stolviglie</td></tr>
<tr><td>gabel</td><td>forchetta</td></tr>
<tr><td>messer</td><td>cortello</td></tr>
<tr><td>teller</td><td>piatto</td></tr>
<tr><td>schüssel</td><td>scodella</td></tr>
<tr><td>glas</td><td>bicchiere</td></tr>
<tr><td>löffel</td><td>cucchiaio</td></tr>
<tr><td>teelöffel</td><td>chcchiaino</td></tr>
<tr><td>flasche</td><td>bottiglia</td></tr>
<tr><td>tasse</td><td>tazza</td></tr>
<tr><td>essstäbchen</td><td>bacchette</td></tr>
<tr><td>besteck</td><td>posate</td></tr>
<tr><td>tablet</td><td>vassoio</td></tr>
<tr><td>tischtuch</td><td>tovaglia</td></tr>
<tr><td>untertasse</td><td>paittino</td></tr>
<tr><td>gedeck</td><td>coperto</td></tr>
<tr><td>pollieren</td><td>lucidare</td></tr>
<tr><td>tischdecken</td><td>apparecchiare la tavola</td></tr>
<tr><td>porzelan</td><td>prcellana</td></tr>
<tr><td>weizen</td><td>frumento</td></tr>
<tr><td>reis</td><td>riso</td></tr>
<tr><td>getreide</td><td>cereale</td></tr>
<tr><td>kochen</td><td>cuocere</td></tr>
<tr><td>nudeln</td><td>pasta</td></tr>
<tr><td>mehl</td><td>farina</td></tr>
<tr><td>hefe</td><td>lievito</td></tr>
<tr><td>laib</td><td>pagnotta</td></tr>
<tr><td>scheibe</td><td>fetta</td></tr>
<tr><td>verbrannt</td><td>bruciato</td></tr>
<tr><td>buttern</td><td>imburrare</td></tr>
<tr><td>müsli</td><td>muesli</td></tr>
<tr><td>herzhaft</td><td>saporito</td></tr>
<tr><td>knusprig</td><td>croccante</td></tr>
<tr><td>untersagt</td><td>proibito</td></tr>
<tr><td>ablehnen</td><td>rifiutare</td></tr>
<tr><td>bewilligen</td><td>approvare</td></tr>
<tr><td>verweigern</td><td>negato</td></tr>
<tr><td>gehorchen</td><td>ubbidire</td></tr>
<tr><td>verbieten</td><td>vietare</td></tr>
<tr><td>ungehorsam</td><td>disubbidente</td></tr>
<tr><td>pflicht</td><td>obbligo</td></tr>
<tr><td>verhindern</td><td>impedire</td></tr>
<tr><td>nachsichtig</td><td>indulgente</td></tr>
</tbody>
</table>




</li>
</ul>
</div>
</div>

</div>

<div id="outline-container-5.2" class="outline-3">
<h3 id="sec-5.2"><span class="section-number-3">5.2</span> -&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </h3>
<div class="outline-text-3" id="text-5.2">

</div>

</div>

<div id="outline-container-5.3" class="outline-3">
<h3 id="sec-5.3"><span class="section-number-3">5.3</span> CSS </h3>
<div class="outline-text-3" id="text-5.3">


<p>
CSS Definitionen:
</p>
<p>
-&gt; als Beispiel wird folgender HTML Code verwendet:
&lt;p class="textClass" id="textID"&gt;Blah&lt;br&gt;&lt;a href="<a href="http://www.google.de/"">http://www.google.de/"</a>&gt;Link zu einer Seite&lt;/a&gt;&lt;/p&gt;
</p>
<p>
Per ElementNamen
</p>
<p>
-&gt;       elementName {Eigentschaft: Wert;}
</p>
<p>
-&gt; z.B.: p {color: lime;}
</p>

<p>
Per Klasse
</p>
<p>
-&gt;       elementName.Class {Eigenschaft: Wert;}
-&gt; z.B.: p.textClass {color: blue;}
</p>

<p>
Per ID
</p>
<p>
-&gt;       elementName#ID {Eigenschaft: Wert;}
-&gt; z.B.: p#textID {color: orange;}
</p>

<p>
Per Funktion (Pseudo)
</p>
<p>
-&gt;       elementName:Pseudo {Eigenschaft: Wert;}
-&gt; z.B.: a:link {color: black;}
</p>
<p>
Mögliche Pseudos:
</p>
<ul>
<li>
Visited
</li>
<li>
Hover
</li>
<li>
Focus
</li>
<li>
Active
</li>
<li>
wahrscheinlich mehr!

</li>
</ul>
</div>

</div>

<div id="outline-container-5.4" class="outline-3">
<h3 id="sec-5.4"><span class="section-number-3">5.4</span> PHP </h3>
<div class="outline-text-3" id="text-5.4">


</div>

<div id="outline-container-5.4.1" class="outline-4">
<h4 id="sec-5.4.1"><span class="section-number-4">5.4.1</span> Automatische Weiterleitung </h4>
<div class="outline-text-4" id="text-5.4.1">


<p>
Sollte in den HTML Head oder? Hat PHP auch einen Header??
oder meinen die header(&lt;meta http-equiv="refresh" content="5; URL=&hellip;"&gt;)
Link: <a href="http://de.selfhtml.org/html/kopfdaten/meta.htm#weiterleitung">http://de.selfhtml.org/html/kopfdaten/meta.htm#weiterleitung</a>
</p>
<p>
&lt;meta http-equiv="refresh" content="5; URL=&hellip;"&gt;
Muss in den Head damit nach einiger Zeit weitergeleitet wird!
</p>

<p>
Gezielte Weiterleitung mit JavaScript:
&lt;script type="text/javascript"&gt;location.replace ('neueseite.html');&lt;/script&gt;
</p>
<p>
Weiterleitung mit PHP
header("HTTP/1.1 301 Moved Permanently");
header("refresh:5;url=<a href="http://meinewebseite.de"">http://meinewebseite.de"</a>)
</p>
</div>

</div>

<div id="outline-container-5.4.2" class="outline-4">
<h4 id="sec-5.4.2"><span class="section-number-4">5.4.2</span> Alert in HTMLinPHP </h4>
<div class="outline-text-4" id="text-5.4.2">


<p>
echo "&lt;script language=\"javascript\"&gt;
alert('Sie wissen Ihr Passwort wohl nicht!');
document.location.href='dahin.php';
&lt;/script&gt;";
</p>
</div>

</div>

<div id="outline-container-5.4.3" class="outline-4">
<h4 id="sec-5.4.3"><span class="section-number-4">5.4.3</span> If else / switch case </h4>
<div class="outline-text-4" id="text-5.4.3">

<ul>
<li id="sec-5.4.3.1">If else <br/>

<p>
&lt;?php
if ($a &gt; $b) {
echo "a is größer als b";
} elseif ($a == $b) {
echo "a ist gleich groß wie b";
} else {
echo "a ist kleiner als b";
}
?&gt;
</p>
</li>
<li id="sec-5.4.3.2">Switch case <br/>

<p>
&lt;?php
switch ($i):
case 0:
echo "i=0";
case 1:
echo "i=1";
break;
default:
echo "Keine Auswahl getroffen";
endswitch;
?&gt;
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.4.4" class="outline-4">
<h4 id="sec-5.4.4"><span class="section-number-4">5.4.4</span> Check empty? </h4>
<div class="outline-text-4" id="text-5.4.4">


<p>
if (empty($var)) {
echo "do s.th., cause var is empty";
}
</p>
<p>
if (isset($var)) {
echo "avr wurde gesetzt ist aber noch kein sinnvoller wert drin!";
}
</p></div>

</div>

<div id="outline-container-5.4.5" class="outline-4">
<h4 id="sec-5.4.5"><span class="section-number-4">5.4.5</span> input attribute readonly </h4>
<div class="outline-text-4" id="text-5.4.5">


<p>
&lt;form action="demo_form</sub>.asp"&gt;
Country: &lt;input type="text" name="country" value="Norway" readonly="readonly"&gt;&lt;br&gt;
&lt;input type="submit" value="Submit"&gt;
&lt;/form&gt; 
</p></div>
</div>

</div>

<div id="outline-container-5.5" class="outline-3">
<h3 id="sec-5.5"><span class="section-number-3">5.5</span> <span class="todo PROBLEM"> PROBLEM</span> Python [4/5] </h3>
<div class="outline-text-3" id="text-5.5">


</div>

<div id="outline-container-5.5.1" class="outline-4">
<h4 id="sec-5.5.1"><span class="section-number-4">5.5.1</span> Variables </h4>
<div class="outline-text-4" id="text-5.5.1">


<p>
# Erstes Kommentar
"""
zweiter Kommentar!!
"""
</p>
<p>
var = "string"
name = raw_input</sub>("Wie ist dein Name?")
color = "LimeBlack"
preis = 3.50
summe = preis * 0.15
</p>
<p>
print "%s hat einen %s ausgegeben\
, außerdem ist seine Farbe %s" % (name, var, color)
</p>
<p>
Hinweis:
</p>
<p>
%s ist für strings
%d wird für integer benutzt
%.2f zeigt eine decimalzahl mit 2 kommastellen
</p>
<p>
print color<sup><a class="footref" name="fnr.1" href="#fn.1">1</a></sup> #Sollte B ausgeben
</p>
<p>
print "%.2f" % (preis)
</p>
<p>
print "Juden" + "Stern"
</p>
<p>
""" Tobi ist soo hässlich xD
sollte mal lieber die Pizza holen xD
Außerdem muss er jetzt was zu trinken holen!"""
</p>
<p>
""" Mit Variablen kann man folgendes machen:
</p><table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>+</td><td>addieren</td></tr>
<tr><td>-</td><td>subtrahieren</td></tr>
<tr><td>*</td><td>multiplizieren</td></tr>
<tr><td>**</td><td>quadrieren</td></tr>
<tr><td>%</td><td>modulieren</td></tr>
<tr><td>len()</td><td>länge ermitteln</td></tr>
<tr><td>lower()</td><td>alles kleingeschrieben</td></tr>
<tr><td>upper()</td><td>alles großgeschrieben</td></tr>
<tr><td>capitalize()</td><td>first letter uppercase</td></tr>
<tr><td>title()</td><td>every first letter uppercase</td></tr>
<tr><td>swapcase()</td><td>uppercase = lowercase and oppo.</td></tr>
<tr><td>=</td><td>equal</td></tr>
<tr><td>!=</td><td>not equal</td></tr>
<tr><td>&lt;</td><td>less than</td></tr>
<tr><td>&lt;=</td><td>less equal</td></tr>
<tr><td>&gt;</td><td>greater</td></tr>
<tr><td>&gt;=</td><td>greater equal</td></tr>
</tbody>
</table>

"""

</div>

</div>

<div id="outline-container-5.5.2" class="outline-4">
<h4 id="sec-5.5.2"><span class="section-number-4">5.5.2</span> Iterating through Array </h4>
<div class="outline-text-4" id="text-5.5.2">


<p>
Beispiel Array:
arr = ("ele1", "ele2", "ele3", "ele4")
</p>
<p>
for x in arr:
print x
</p>
<p>
Output:
$ ele1
$ ele2
$ ele3
$ ele4
</p>
</div>

</div>

<div id="outline-container-5.5.3" class="outline-4">
<h4 id="sec-5.5.3"><span class="section-number-4">5.5.3</span> Funktionen </h4>
<div class="outline-text-4" id="text-5.5.3">


<p>
Einfache Funktion:
</p>
<p>
def funktionsname(wert1,wert2,wertx):
Antwort = (wert1 * wert2 * wert3 )
return Antwort
</p>
<p>
print funktionsname(wert1,wert2,wert3)
</p>
<ul>
<li id="sec-5.5.3.1">Build-in Functions <br/>

<p>
def biggest(*args):
return max(args)
</p>
<p>
def smallest(*args):
return min(args)
</p>
<p>
def distance_from</sub>_zero</sub>(*args):
return abs(args)
</p>
<p>
biggest(-10,10,5,3,21) 
-&gt; gibt 21 zurück!
</p>
<p>
smallest(-10,10,5,3,21)
-&gt; gibt -10 zurück!
</p>
<p>
distanze_from</sub>_zero</sub>(-213)
-&gt; gibt 213 zurück!
</p>

<p>
print type(42)                      &ndash;&gt;  &lt;type 'int'&gt;
print type(2,3)                     &ndash;&gt;  tuple
print type(2.3)                     &ndash;&gt;  float
print type('spam')                  &ndash;&gt;  str
print type({"Name":"David Crimi"})  &ndash;&gt;  dict
</p>
</li>
<li id="sec-5.5.3.2">Funktionen importieren: <br/>

<p>
from math import sqrt
-&gt; um die funktion sqrt() benutzen zu können!
</p>
<p>
import math
-&gt; um alle math funktionen zu benutzen : math.sqrt()
</p>
<p>
from math import *
-&gt; importiert auch alle funktionen: sqrt()
</p>
<p>
Anzeigen von allen Funktionen eines Imports:
</p>
<p>
import math
every_function</sub> = dir(math)
print every_function</sub>
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.5.4" class="outline-4">
<h4 id="sec-5.5.4"><span class="section-number-4">5.5.4</span> Datetime </h4>
<div class="outline-text-4" id="text-5.5.4">


<p>
from datetime import datetime
</p>
<p>
now = datetime.now()       =&gt; 2012-08-24 09:04:37.12092112
</p>
<p>
current_yeah</sub> = now.yeah
current_month</sub> = now.month
current_day</sub> = now.day
current_hour</sub> = now.hour
current_minute</sub> = now.minute
current_second</sub> = now.second
</p>
<p>
datum = str(current_day</sub>) + "." + str(current_month</sub>) + "." + str(current_yeah</sub>) + " " + str(current_hour</sub>) + ":" + str(current_minute</sub>) + ":" + str(current_second</sub>) 
</p>
<p>
print datum               =&gt; 24.8.2012 13:34:23
</p>
</div>

</div>

<div id="outline-container-5.5.5" class="outline-4">
<h4 id="sec-5.5.5"><span class="section-number-4">5.5.5</span> Boolean </h4>
<div class="outline-text-4" id="text-5.5.5">


<p>
bool = True = 20 &gt; 19
bool = True = (10 + 17) ** 2 = 3 ** 6
bool = True = 1 &lt; 2 and 2 &lt; 3
bool = True = True and False
bool = True = not 3 ** 4 &lt; 4 ** 3
bool = False = not not False
bool = False = not True
</p>
</div>

</div>

<div id="outline-container-5.5.6" class="outline-4">
<h4 id="sec-5.5.6"><span class="section-number-4">5.5.6</span> If / Elif / Else </h4>
<div class="outline-text-4" id="text-5.5.6">


<p>
def Abfrage():
answer = "Blah"
print "First Word?"
</p>
<p>
if answer == "Blah" or answer == "blah":
print "Right"
elif answer == "First" or "LimeBlack":
print "You found the cheat!"
else:
print "Zu breite Finger?, nochmal?"
Abfrage()
Abfrage()
</p>
</div>

</div>

<div id="outline-container-5.5.7" class="outline-4">
<h4 id="sec-5.5.7"><span class="section-number-4">5.5.7</span> Threads </h4>
<div class="outline-text-4" id="text-5.5.7">


<p>
Unten ist ein Beispiel,
ein weiteres ist unter Dropbox/Projects/Tinkerforge/threads.py
</p>
<p>
Dieses Beispiel zeigt wie man 2 threads parallel startet!
</p>
<p>
import thread
</p>
<p>
def thread1():
thread.start_new</sub>_thread</sub>(funktionen(, ())
</p>
<p>
def funktionen():
some code to run
</p>
<p>
def thread2():
some other code 
</p>
<p>
thread1()
thread2()
</p>
</div>

</div>

<div id="outline-container-5.5.8" class="outline-4">
<h4 id="sec-5.5.8"><span class="section-number-4">5.5.8</span> PyOpenGL </h4>
<div class="outline-text-4" id="text-5.5.8">


<ul>
<li>
Kommt wenn ichs verstanden hab xD

</li>
</ul>
</div>

</div>

<div id="outline-container-5.5.9" class="outline-4">
<h4 id="sec-5.5.9"><span class="section-number-4">5.5.9</span> Sring Manipulation </h4>
<div class="outline-text-4" id="text-5.5.9">


<p>
test = 'This is a string.'
</p>
<p>
len( test )
-&gt; 29
</p>
<p>
print test.replace( 'string', 'ReplacedString!' )
-&gt; 'This is a ReplacedString'
</p>
<p>
test.count( 'i' )
-&gt; 3
</p>
<p>
test.find( 'i' )
-&gt; 2
</p>
<p>
test[ 3 ]
-&gt; 's'
</p>
<p>
test[ -1 ]
-&gt; '.'
</p>
<p>
test[ 10:15 ]
-&gt; 'string'
</p>
<p>
test.split()
-&gt; ['This', 'is', 'a', 'string.']
</p>
<p>
test.split( 'a' )
-&gt; ['This is ', ' string.']
</p>
<p>
'your'.join( test.split( 'a' ) )
-&gt; 'This is your string.'
</p>
<p>
test.isupper()
-&gt; False
</p>
<p>
test.islower()
-&gt; False
</p>
<p>
test.isalnum() # all number or letter? cause .
-&gt; False
</p>
<p>
test.isalpha() # all letters?
-&gt; False
</p>
<p>
test.isdigit() # all numbers?
-&gt; False
</p>
<p>
test.isspace() # ALL space?
-&gt; False
</p>
<p>
test.ljust( 30 )
-&gt; 'This is..                    '
</p>
<p>
test.rjust( 30 )
-&gt; '                    This is..'
</p>
<p>
test.center( 30)
-&gt; '          This is.           '
</p>
</div>

</div>

<div id="outline-container-5.5.10" class="outline-4">
<h4 id="sec-5.5.10"><span class="section-number-4">5.5.10</span> Regular Expressions </h4>
<div class="outline-text-4" id="text-5.5.10">


<p>
import re
</p>
<p>
test = 'This is for testing regular expressions in Python.'
</p>
<p>
sry but copy and paste&hellip;
</p>


<p>
&gt;&gt;&gt; result = re.search ( 'This', test )
&gt;&gt;&gt; result.group ( 0 )
'This'
</p>
<p>
You're probably wondering about the group method right now and why we pass zero to it.
It's simple, and I'll explain. You see, patterns can be organized into groups, like this:
</p>
<p>
&gt;&gt;&gt; result = re.search ( '(Th)(is)', test )
</p>
<p>
There are two groups surrounded by parenthesis. We can extract them using the group method:
</p>
<p>
&gt;&gt;&gt; result.group ( 1 )
'Th'
&gt;&gt;&gt; result.group ( 2 )
'is'
</p>
<p>
Passing zero to the method returns both of the groups:
</p>
<p>
&gt;&gt;&gt; result.group ( 0 )
'This'
</p>
<p>
The benefit of groups will become more clear once we work our way into actual patterns.
First, though, let's take a look at the match function.
It works similarly, but there is a crucial difference:
</p>
<p>
&gt;&gt;&gt; result =  re.match ( 'This', test )
&gt;&gt;&gt; print result
&lt;_sre</sub>.SRE_Match</sub> object at 0x00994250&gt;
&gt;&gt;&gt; print result.group ( 0 )
'This'
&gt;&gt;&gt; result = re.match ( 'regular', test )
&gt;&gt;&gt; print result
None
</p>
<p>
Notice that None was returned, even though “regular” is in the string.
If you haven't figured it out, the match method matches patterns at the beginning of the string, 
and the search function examines the whole string.
You might be wondering if it's possible, then, to make the match method match “regular,” 
since it's not at the beginning of the string.
The answer is yes. It's possible to match it, and that brings us into patterns.
</p>
<p>
The character “.” will match any character.
We can get the match method to match “regular” by putting a period for every letter before it.
Let's split this up into two groups as well. One will contain the periods, and one will contain “regular”:
</p>
<p>
&gt;&gt;&gt; result = re.match ( '(&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..)(regular)', test )
&gt;&gt;&gt; result.group ( 0 )
'This is for testing regular'
&gt;&gt;&gt; result.group ( 1 )
'This is for testing '
&gt;&gt;&gt; result.group ( 2 )
'regular'
</p>
<p>
Aha! We matched it! However, it's ridiculous to have to type in all those periods.
The good news is that we don't have to do that.
Take a look at this and remember that there are twenty characters before “regular”:
</p>
<p>
&gt;&gt;&gt; result = re.match ( '(.{20})(regular)', test )
&gt;&gt;&gt; result.group ( 0 )
'This is for testing regular'
&gt;&gt;&gt; result.group ( 1 )
'This is for testing '
&gt;&gt;&gt; result.group ( 2 )
'regular'
</p>
<p>
That's a lot easier.
Now let's look at a few more patterns.
Here's how you can use brackets in a more advanced way:
</p>
<p>
&gt;&gt;&gt; result = re.match ( '(.{10,20})(regular)', test )
&gt;&gt;&gt; result.group ( 0 )
'This is for testing regular'
&gt;&gt;&gt; result = re.match ( '(.{10,20})(testing)', test )
'This is for testing'
</p>
<p>
By entering two arguments, so to speak, you can match any number of characters in a range.
In this case, that range is 10-20. Sometimes, however, this can cause undesired behavior.
Take a look at this string:
</p>
<p>
&gt;&gt;&gt; anotherTest = 'a cat, a dog, a goat, a person'
</p>
<p>
Let's match a range of characters:
</p>
<p>
&gt;&gt;&gt; result = re.match ( '(.{5,20})(,)', anotherTest )
&gt;&gt;&gt; result.group ( 1 )
'a cat, a dog, a goat'
</p>
<p>
What if we only want “a cat” though? This can be done with appending “?” to the end of the brackets:
</p>
<p>
&gt;&gt;&gt; result = re.match ( '(.{5,20}?)(,)', anotherTest )
&gt;&gt;&gt; result.group ( 1 )
'a cat'
</p>
<p>
Appending a question mark to something makes it match as few characters as possible.
A question mark that does that, though, is not to be confused with this pattern:
</p>
<p>
&gt;&gt;&gt; anotherTest = '012345'
&gt;&gt;&gt; result = re.match ( '01?', anotherTest )
&gt;&gt;&gt; result.group ( 0 )
'01'
&gt;&gt;&gt; result = re.match ( '0123456?', anotherTest )
&gt;&gt;&gt; result.group ( 0 )
'012345'
</p>
<p>
As you can see with the example, the character before a question mark is optional.
Next is the “*” pattern. It matches one or more of the characters it follows, like this:
</p>
<p>
&gt;&gt;&gt; anotherTest = 'Just a silly string.'
&gt;&gt;&gt; result = re.match ( '(.*)(a)(.*)(string)', anotherTest )
&gt;&gt;&gt; result.group ( 0 )
'Just a silly string'
</p>
<p>
However, take a look at this:
</p>
<p>
&gt;&gt;&gt; anotherTest = 'Just a silly string. A very silly string.'
&gt;&gt;&gt; result = re.match ( '(.*)(a)(.*)(string)', anotherTest )
&gt;&gt;&gt; result.group ( 0 )
'Just a silly string. A very silly string'
</p>
<p>
What if, however, we want to only match the first sentence?
If you've been following along closely, you'll know that “?” will, again, do the trick:
</p>
<p>
&gt;&gt;&gt; result = re.match ( '(.*?)(a)(.*?)(string)', anotherTest )
&gt;&gt;&gt; result.group ( 0 )
'Just a silly string'
</p>
<p>
As I mentioned earlier, though, “*” doesn't have to match anything:
</p>
<p>
&gt;&gt;&gt; result = re.match ( '(.*?)(01)', anotherTest )
&gt;&gt;&gt; result.group ( 0 )
'01'
</p>
<p>
What if we want to skip past the first two characters? This is possible by using “+”,
which is similar to “*”, except that it matches at least one character:
</p>
<p>
&gt;&gt;&gt; result = re.match ( '(.+?)(01)', anotherTest )
&gt;&gt;&gt; result.group ( 0 )
'0101'
</p>
<p>
We can also match a range of characters.
For example, we can match only the first four letters of the alphabet:
</p>
<p>
&gt;&gt;&gt; anotherTest = 'a101'
&gt;&gt;&gt; result = re.match ( '[a-d]', anotherTest )
&gt;&gt;&gt; print result
&lt;_sre</sub>.SRE_Match</sub> object at 0x00B47B10&gt;
&gt;&gt;&gt; anotherTest = 'q101'
&gt;&gt;&gt; result = re.match ( '[a-d]', anotherTest )
&gt;&gt;&gt; print result
None
</p>
<p>
We can also match one of a few patterns using “|”::
</p>
<p>
&gt;&gt;&gt; testA = 'a'
&gt;&gt;&gt; testB = 'b'
&gt;&gt;&gt; result = re.match ( '(a|b)', testA )
&gt;&gt;&gt; print result
&lt;_sre</sub>.SRE_Match</sub> object at 0x00B46D60&gt;
&gt;&gt;&gt; result = re.match ( '(a|b)', testB )
&gt;&gt;&gt; print result
&lt;_sre</sub>.SRE_Match</sub> object at 0x00B46E60&gt;
</p>
<p>
Finally, there are a number of special sequences.
“\A” matches at the start of a string.
“\Z” matches at the end of a string.
“\d” matches a digit.
“\D” matches anything but a digit.
“\s” matches whitespace.
“\S” matches anything but whitespace.
</p>
<p>
We can name our groups:
</p>
<p>
&gt;&gt;&gt; nameTest = 'hot sauce'
&gt;&gt;&gt; result = re.match ( '(?P&lt;one&gt;hot)', nameTest )
&gt;&gt;&gt; result.group ( 'one' )
'hot'
</p>
<p>
We can compile patterns to use them multiple times with the re module, too:
</p>
<p>
&gt;&gt;&gt; ourPattern = re.compile ( '(.*?)(the)' )
&gt;&gt;&gt; testString = 'This is the dog and the cat.'
&gt;&gt;&gt; result = ourPattern.match ( testString )
&gt;&gt;&gt; result.group ( 0 )
'This is the'
</p>
<p>
Of course, you can do more than match and extract substrings. You can replace things, too:
</p>
<p>
&gt;&gt;&gt; someString = 'I have a dream.'
&gt;&gt;&gt; re.sub ( 'dream', 'dog', someString )
'I have a dog.'
</p>
<p>
On a final note, you should not use regular expressions to match or replace simple strings.
Read more at <a href="http://www.devshed.com/c/a/Python/String-Manipulation/3/#4jVqhqkLJGK0hPAR.99">http://www.devshed.com/c/a/Python/String-Manipulation/3/#4jVqhqkLJGK0hPAR.99</a>
</p>
</div>

</div>

<div id="outline-container-5.5.11" class="outline-4">
<h4 id="sec-5.5.11"><span class="section-number-4">5.5.11</span> <span class="done DONE"> DONE</span> HTTP API urllib2  // Parse XML, JSON [7/7] [100%] </h4>
<div class="outline-text-4" id="text-5.5.11">


<p>
from urllib2 import Request, urlopen, URLError
</p>
<p>
request = Request('http://placekitten.com/')
</p>
<p>
try:
response = urlopen(request)
kittens = response.read()
print kittens[559:1000]
except URLError, e:
print 'No kittenz. Got an error code:', e
</p>
<ul>
<li id="sec-5.5.11.1"><span class="done DONE"> DONE</span> The four verbs - GET, POST, PUT, DELETE <br/>

<p>
GET    - receives information from the specified source
POST   - sends new information to the specified source
PUT    - updates existing information of the specified source
DELETE - removes existing information from the specified source
</p>
</li>
<li id="sec-5.5.11.2"><span class="done DONE"> DONE</span> Print Web Body <br/>

<p>
from urllib2 import urlopen
</p>
<p>
kittens = urlopen('http://placekitten.com/')
response = kittens.read()
body = response[559:1000]                                                                                                                                                                   
</p>
<p>
print body
</p>
</li>
<li id="sec-5.5.11.3"><span class="done DONE"> DONE</span> Call method getcode() on kittens and print value <br/>

<p>
from urllib2 import urlopen                                                                                                                                                                  
</p>
<p>
kittens = urlopen('http://placekitten.com/')                                                                                                                                                 
</p>
<p>
print kittens.getcode()
-&gt; 200 - OK
</p>
</li>
<li id="sec-5.5.11.4"><span class="done DONE"> DONE</span> sending POST request <br/>

<p>
import requests
</p>
<p>
body = {'Name': 'David', 'Age': '22'}
response = requests.post('http://codecademy.com/lern-http/', data=body)
</p>
</li>
<li id="sec-5.5.11.5"><span class="done DONE"> DONE</span> Parsing XML File <br/>

<p>
from xml.dom import minidom
</p>
<p>
f.open('pets.txt', 'r')
pets = minidom.parseString(f.read())
f.close()
</p>
<p>
names = pets.getElementsByTagName('name')
for name in names:
print name.firstChild.nodeValue
</p>
<ul>
<li id="sec-5.5.11.5.1">pets.txt <br/>

<p>
&lt;pet&gt;
&lt;name&gt;Jeffrey&lt;/name&gt;
&lt;species&gt;Giraffe&lt;/species&gt;
&lt;/pet&gt;
&lt;pet&gt;
&lt;name&gt;Gregory&lt;/name&gt;
&lt;species&gt;Monkey&lt;/species&gt;
&lt;/pet&gt;
&lt;pet&gt;
&lt;/pet&gt;
</p>
</li>
</ul>
</li>
<li id="sec-5.5.11.6"><span class="done DONE"> DONE</span> Parsing JSON <br/>

<p>
import json
from pprint import pprint
</p>
<p>
f = open('pets.txt', 'r')
pets = json.loads(f.read())
f.close()
</p>
<p>
pprint(pets)
</p>
<ul>
<li id="sec-5.5.11.6.1">pets.txt <br/>

<p>
{
"pets": [
{
"name": "Jeffrey",
"species": "Giraffe"
},
{
"name": "Gustav",
"species": "Dog"
}
]
}
</p>
</li>
</ul>
</li>
<li id="sec-5.5.11.7"><span class="done DONE"> DONE</span> CUSTOM SIZE PLACEKITTENS <br/>

<p>
from urllib2 import urlopen
</p>
<p>
width = raw_input</sub>('width?')
height = raw_input</sub>('height?')
</p>
<p>
url = 'http://placekitten.com/' + width + '/' + height
kitten = urlopen(url).read()
</p>
<p>
kitten_file</sub> = open('kittens.jpg', 'w')
kitten_file</sub>.write(kitten)
kitten_file</sub>.close()
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.5.12" class="outline-4">
<h4 id="sec-5.5.12"><span class="section-number-4">5.5.12</span> <span class="done DONE"> DONE</span> List and Functions [5/5] [100%] </h4>
<div class="outline-text-4" id="text-5.5.12">

<ul>
<li id="sec-5.5.12.1"><span class="done DONE"> DONE</span> List Recap <br/>

<p>
n = [1,2,3,4,5,6,7,8,9]
print n<sup><a class="footref" name="fnr.2" href="#fn.2">2</a></sup>
-&gt; 2
</p>
<p>
n<sup><a class="footref" name="fnr.2.2" href="#fn.2">2</a></sup> = n<sup><a class="footref" name="fnr.2.3" href="#fn.2">2</a></sup>+5
print n
-&gt; 1,10,3,4,5,6,7,8,9
</p>
<p>
n.append(10)
print n
-&gt; 1,10,3,4,5,6,7,8,9,10
</p>
<p>
n.pop(0)
print n
-&gt; 10,3,4,5,6,7,8,9,10
</p>
</li>
<li id="sec-5.5.12.2"><span class="done DONE"> DONE</span> Function Recap <br/>

<p>
n = 3
m = 15
</p>
<p>
def myFun(x,y):
return x + y
print (myFun(n,m))
-&gt; 18
</p>
<p>
def myFun(*args):
return sum(args)
print (myFun(n,m))
-&gt; 18
</p>
</li>
<li id="sec-5.5.12.3"><span class="done DONE"> DONE</span> Functions with Lists <br/>

<p>
n = [3,5,7]
</p>
<p>
def myFun(x):
return x
print (myFun(n))
-&gt; 3,5,7
</p>
<p>
def myFun(x):
return x<sup><a class="footref" name="fnr.2.4" href="#fn.2">2</a></sup>
print (myFun(n))
-&gt; 3
</p>
<p>
def myFun(x):
x<sup><a class="footref" name="fnr.2.5" href="#fn.2">2</a></sup> = x<sup><a class="footref" name="fnr.2.6" href="#fn.2">2</a></sup> + 3
return x
print (myFun(n))
-&gt; 3,8,7
</p>
<p>
def myFun(x):
x.append(9)
return x
print (myFun(n))
-&gt; 3,5,7,9
</p>
</li>
<li id="sec-5.5.12.4"><span class="done DONE"> DONE</span> Using entrire List in a Function <br/>

<p>
n = [3,5,7]
</p>
<p>
def myFun(x):
for i in range(0,3):
print x[i]
print(myFun(n))
-&gt; 3
-&gt; 5
-&gt; 7
</p>
<p>
def myFun(x):
for i in range(0,len(x)):
x[i] = x[i] * 2
return x
print(myFun(n))
-&gt; [6, 10, 14]
</p>
<p>
print myFun(range(0,3))
-&gt; [0, 2, 4]
</p>
<p>
def myFun(x):
count = 0
for i in range(0, len(x)):
count = count + x[i]
return count
print(myFun(n))
-&gt; 15
</p>
<p>
n = ["Michael", "Liebermann", "ist", "ein", "schwuler", "Hund"]
def myFun(n):
satz = ""
for i in range(0,len(x)):
satz = satz + x[i] + " "
return satz
print(myFun(n))
</p>
</li>
<li id="sec-5.5.12.5"><span class="done DONE"> DONE</span> Using Lists of Lists in Functions <br/>

<p>
m = [1,2,3]
n = [4,5,6]
o = [7,8,9]
</p>
<p>
def myFun(x,y):
v = x.append(y)
return v
print myFun(m,n)
-&gt; [1, 2, 3, [4, 5, 6]]
</p>
<p>
def myFun(*args):
full = []
for i in range(0,len(args)):
full = full.append(args[i])
return full
print myFun(m,n,o)
-&gt; [1, 2, 3, [4, 5, 6], [7, 8, 9]]
</p>
<p>
n = [[1,2,3], [4,5,6,7,8,9]]
def myFun(x):
full = ""
for i in range(0,len(x)):
for l in range(0,x[i]):
full = full + x[i][j]
return full
print myFun(n)
-&gt; "123456789"
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.5.13" class="outline-4">
<h4 id="sec-5.5.13"><span class="section-number-4">5.5.13</span> <span class="done DONE"> DONE</span> Loops [3/3] [100%] </h4>
<div class="outline-text-4" id="text-5.5.13">

<ul>
<li id="sec-5.5.13.1"><span class="done DONE"> DONE</span> While Loops [8/8] <br/>
<ul>
<li id="sec-5.5.13.1.1"><span class="done DONE"> DONE</span> simple <br/>

<p>
count = 0
</p>
<p>
if count &lt; 5
print "Hello&hellip;number:", count
</p>
<p>
while count &lt; 10:
print "Hello &hellip; Number:", count
count += 1
</p>
</li>
<li id="sec-5.5.13.1.2"><span class="done DONE"> DONE</span> condition <br/>

<p>
loop_condition</sub> = True
</p>
<p>
while loop_condition</sub>:
print "I am a loop"
loop_condition</sub> = False
</p>
</li>
<li id="sec-5.5.13.1.3"><span class="done DONE"> DONE</span> 1 to 10 squared <br/>

<p>
num = 1
</p>
<p>
while num &lt;= 11:
print num**2
num += 1
</p>
</li>
<li id="sec-5.5.13.1.4"><span class="done DONE"> DONE</span> simple errors <br/>

<p>
choice = raw_input</sub>('Entering choice? (y/n)')
</p>
<p>
while choice != 'y' and choice != 'n':
choice = raw_input</sub>('Sorry didnt catch that. Enter again: ')
</p>
</li>
<li id="sec-5.5.13.1.5"><span class="done DONE"> DONE</span> infinite loops <br/>

<p>
count = 0 
</p>
<p>
while count &lt; 10:
print count
count += 1
</p>
</li>
<li id="sec-5.5.13.1.6"><span class="done DONE"> DONE</span> break <br/>

<p>
count = 0
while True:
print count
count += 1
if count &gt;= 10:
break
</p>
</li>
<li id="sec-5.5.13.1.7"><span class="done DONE"> DONE</span> While / else random <br/>

<p>
import random
</p>
<p>
print 'Lucky Numbers! 3 Numbers will be generated.'
print 'If one of them is a 5, you lose!'
</p>
<p>
count = 0
while count &lt; 3:
num = random.randint(1,6)
print num
count += 1
if num == 5:
print 'Sorry, you lose!'
break
else:
print 'You win!'
</p>
</li>
<li id="sec-5.5.13.1.8"><span class="done DONE"> DONE</span> own while / else - guess the number - erraten einer RandInit <br/>

<p>
from random import randrange
</p>
<p>
print 'Guess the random number (in range of 1 to 9)!'
print 'You have 3 tries!'
</p>
<p>
random_number</sub> = randrange(1,10)
</p>
<p>
count = 0
while count &lt;= 3:
guess = int(raw_input</sub>('Enter a guess:'))
if guess == random_number</sub>:
print 'You win!'
break
count += 1
else: 
print 'You lose!'
</p>
</li>
</ul>
</li>
<li id="sec-5.5.13.2"><span class="done DONE"> DONE</span> For Loops [5/5] <br/>
<ul>
<li id="sec-5.5.13.2.1"><span class="done DONE"> DONE</span> For your health <br/>

<p>
print 'Counting'
</p>
<p>
for i in range(20):
print i
</p>
</li>
<li id="sec-5.5.13.2.2"><span class="done DONE"> DONE</span> For your hobbies <br/>

<p>
hobbies = []
for i in range(3):
hobby = raw_input</sub>('hobby?')
hobbies.append(hobby)
print hobbies
</p>
</li>
<li id="sec-5.5.13.2.3"><span class="done DONE"> DONE</span> For your strings <br/>

<p>
some umimportant shit&hellip;
</p>
</li>
<li id="sec-5.5.13.2.4"><span class="done DONE"> DONE</span> For your A <br/>

<p>
s = 'A bird in the hand&hellip;'
</p>
<p>
for x in s:
if x == 'A' or x == 'a':
print 'X'
else:
print x
</p>
</li>
<li id="sec-5.5.13.2.5"><span class="done DONE"> DONE</span> For your lists <br/>

<p>
numbers = [7, 9, 12, 54, 99]
</p>
<p>
print 'This list contains:'
for num in number:
print num,num**2
</p>
</li>
</ul>
</li>
<li id="sec-5.5.13.3"><span class="done DONE"> DONE</span> Step up your 'FORs' [4/4] <br/>
<ul>
<li id="sec-5.5.13.3.1"><span class="done DONE"> DONE</span> Looping over dictionary <br/>

<p>
d = {'x': 9, 'y': 10, 'z': 20}
</p>
<p>
for key in d:
print key, ' ', d[key]
</p>
</li>
<li id="sec-5.5.13.3.2"><span class="done DONE"> DONE</span> Counting as you go - enumerate function <br/>

<p>
choices = ['Pizza', 'Pasta', 'Salad', 'Nachos']
</p>
<p>
print 'You choices:'
for index, item in enumerate(choices):
print index+1, item
</p>
</li>
<li id="sec-5.5.13.3.3"><span class="done DONE"> DONE</span> Multiple lists - zip function <br/>

<p>
list_a</sub> = [3, 9, 17, 15, 19]
list_b</sub> = [2, 4, 8, 10, 30, 40, 50, 60, 70, 80, 90]
</p>
<p>
for a, b in zip(list_a</sub>, list_b</sub>):
if a &lt;= b:
print b
else:
print a
</p>
</li>
<li id="sec-5.5.13.3.4"><span class="done DONE"> DONE</span> for / else <br/>

<p>
fruits = ['banana', 'apple', 'orange', 'tomato', 'pear', 'grape']
</p>
<p>
print 'You have&hellip;'
for f in fruits:
if f == 'tomato':
print 'A tomato is not a fruit!'
break
print 'a', f
else:
print 'A fine selection of fruits!'
</p>
</li>
</ul>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.5.14" class="outline-4">
<h4 id="sec-5.5.14"><span class="section-number-4">5.5.14</span> <span class="done DONE"> DONE</span> Advanced Topics in Python [4/5] [80%] </h4>
<div class="outline-text-4" id="text-5.5.14">

<ul>
<li id="sec-5.5.14.1"><span class="done DONE"> DONE</span> Iteration Nation [3/3] <br/>

<p>
my_dict</sub> = {
'Name': 'David',
'Age': 22,
'BDFL': True
}
</p>
<ul>
<li id="sec-5.5.14.1.1"><span class="done DONE"> DONE</span> Iterators for Dictionaries - items() <br/>

<p>
print my_dict</sub>.items()
-&gt; ['Name': 'David', 'Age': 22, 'BDFL': True]
</p>
</li>
<li id="sec-5.5.14.1.2"><span class="done DONE"> DONE</span> keys() and value() <br/>

<p>
print my_dict</sub>.keys()
print my_dict</sub>.values()
</p>
<p>
-&gt; ['Name', 'Age', 'BDFL']
-&gt; ['David', 22, True]
</p>
</li>
<li id="sec-5.5.14.1.3"><span class="done DONE"> DONE</span> the in Operator <br/>

<p>
for d in my_dict</sub>:
print d, my_dict[d]</sub>
</p>
</li>
</ul>
</li>
<li id="sec-5.5.14.2"><span class="todo PROBLEM"> PROBLEM</span> List Slicing [4/5] <br/>
<ul>
<li id="sec-5.5.14.2.1"><span class="done DONE"> DONE</span> List Slicing Syntax <br/>

<p>
l = [i**2 for i in range(1,21)]
</p>
<p>
print l[2:11:2]
</p>
<p>
-&gt; 3**2, 5**2, 7**2, 9**2, 11**2
-&gt; 9, 25, 49, 81, 121
</p>
<p>
ab 2 bis 11 jeder 2 te!
from 2 to 11 every 2nd
</p>
</li>
<li id="sec-5.5.14.2.2"><span class="done DONE"> DONE</span> !!!Omitting Indicies <br/>

<p>
my_list</sub> = range(1,11)
</p>
<p>
print my_list[</sub>::2]
</p>
</li>
<li id="sec-5.5.14.2.3"><span class="done DONE"> DONE</span> Reversing a List <br/>

<p>
my_list</sub> = range(1,11)
</p>
<p>
backwards = my_list[</sub>::-1]
</p>
<p>
print backwards
</p>
<p>
-&gt; [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
</p>
</li>
<li id="sec-5.5.14.2.4"><span class="done DONE"> DONE</span> stride length <br/>

<p>
to_one</sub>_hundred</sub> = range(101)
</p>
<p>
backward_by</sub>_ten</sub> = to_one</sub>_hundred[</sub>::-10]
</p>
<p>
-&gt; [100, 90, 80, 70, 60, 50, 40, 30, 20, 10, 0]
</p>
</li>
<li id="sec-5.5.14.2.5"><span class="todo PROBLEM"> PROBLEM</span> !!!Practice makes Perfekt <br/>

<p>
to_21</sub> = range(1,22)
odds = to_21[1</sub>::2]
middle_third</sub> = to_21[]</sub>  - the middle third of the list should be the values 8 through 14, inclusive
</p>
</li>
</ul>
</li>
<li id="sec-5.5.14.3"><span class="done DONE"> DONE</span> List Comprehensions [3/3] <br/>
<ul>
<li id="sec-5.5.14.3.1"><span class="done DONE"> DONE</span> Building Lists <br/>

<p>
events_to</sub>_50</sub> = [i for i in range(51) if i % 2 == 0]
print events_to</sub>_50</sub>
</p>
<p>
-&gt; [0, 2, 4, 6, 8, 10, 12, 14, 16, 18, &hellip;, 48, 50]
</p>
</li>
<li id="sec-5.5.14.3.2"><span class="done DONE"> DONE</span> Lists Comprehension Syntax <br/>

<p>
even_squares</sub> = [i**2 for i in range(1,11) if i % 2 == 0]
print even_squares</sub>
</p>
<p>
-&gt; [4, 16, 36, 64, 100]
</p>
</li>
<li id="sec-5.5.14.3.3"><span class="done DONE"> DONE</span> !!! Now your try: <br/>

<p>
cubes_by</sub>_four</sub> = [i**3 for i in range(1,11) if i**3 % 4 == 0]
print cubes_by</sub>_four</sub>
</p>
</li>
</ul>
</li>
<li id="sec-5.5.14.4"><span class="done DONE"> DONE</span> Lambdas [3/3] <br/>
<ul>
<li id="sec-5.5.14.4.1"><span class="done DONE"> DONE</span> Anonymous Functions <br/>

<p>
my_list</sub> = range(16)
</p>
<p>
print filter(lambda x: x % 3 == 0, my_list</sub>)
</p>
<p>
-&gt; [0, 3, 6, 9, 12, 15]
</p>
</li>
<li id="sec-5.5.14.4.2"><span class="done DONE"> DONE</span> Lambda Syntax <br/>

<p>
languages = ["HTML", "JavaScript", "Python", "Ruby"]
</p>
<p>
print filter(lambda x: x == 'Python', languages)
</p>
<p>
-&gt; ['Python']
</p>
</li>
<li id="sec-5.5.14.4.3"><span class="done DONE"> DONE</span> Try it out <br/>

<p>
squares = [i**2 for i in range(1,11)]
</p>
<p>
print filter(lambda x: x &gt;= 30 and x &lt;= 70, squares)
</p>
<p>
-&gt; [36, 49, 64]
</p>
</li>
</ul>
</li>
<li id="sec-5.5.14.5"><span class="done DONE"> DONE</span> Review [4/4] <br/>
<ul>
<li id="sec-5.5.14.5.1"><span class="done DONE"> DONE</span> Iterating Over Dictionaries <br/>

<p>
movies = {
'Monty Python and the Holy Grale': 'Great',
'Monty Python Life of Brian': 'Good',
'Monty Python Meaning of Life!': 'Okay'
}
</p>
<p>
print movies.items()
</p>
</li>
<li id="sec-5.5.14.5.2"><span class="done DONE"> DONE</span> Comprehending Comprehensions <br/>

<p>
threes_and</sub>_fives</sub> = [i for i in range(1,16) if i % 3 == 0 or i % 5 == 0]
</p>
<p>
print threes_and</sub>_fives</sub>
</p>
<p>
-&gt; [3, 5, 6, 9, 10, 12, 15]
</p>
</li>
<li id="sec-5.5.14.5.3"><span class="done DONE"> DONE</span> List Slicing <br/>

<p>
garbled = '!XeXgXaXsXsXeXmX XtXeXrXcXeXsX XeXhXtX XmXaX XI'
</p>
<p>
message = garbled[::-2]
</p>
<p>
print message
</p>
<p>
-&gt; I am the secret message!
</p>
</li>
<li id="sec-5.5.14.5.4"><span class="done DONE"> DONE</span> Lambda Expressions <br/>

<p>
garbled = 'XIXXX XaXXmXXXX XXXtXXXhXeX XkiXnXgXXX!!!'
</p>
<p>
message = filter(lambda x: x != 'X', garbled)
</p>
<p>
print message
</p>
<p>
-&gt; I am the king!!!
</p>
</li>
</ul>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.5.15" class="outline-4">
<h4 id="sec-5.5.15"><span class="section-number-4">5.5.15</span> <span class="todo PROBLEM"> PROBLEM</span> Introduction to Classes [2/3] [66%] </h4>
<div class="outline-text-4" id="text-5.5.15">

<ul>
<li id="sec-5.5.15.1"><span class="done DONE"> DONE</span> Class Basics [5/5] <br/>
<ul>
<li id="sec-5.5.15.1.1"><span class="done DONE"> DONE</span> Why use Classes? <br/>

<p>
class Fruit(object):
""" A class that makes various tasty fruits. """
def __init</sub>__(self, name, color, flavor, poisonous)</sub>:
self.name = name
self.color = color
self.flavor = flavor
self.poisonous = poisonous
</p>
<p>
def description(self):
print 'I am a %s %s an I taste %s.' % (self.color, self.flavor, self.poisonous)
</p>
<p>
def is_edible</sub>(self):
if not self.poisonous:
print 'Yep! I am edible!'
else:
print 'Dont eat me, you will fucking DIE!'
</p>
<p>
lemon = Fruit('lemon', 'yellow', 'sour', False)
</p>
<p>
lemon.description()
lemon.is_edible</sub>()
</p>
</li>
<li id="sec-5.5.15.1.2"><span class="done DONE"> DONE</span> Class Syntax <br/>

<p>
class Animal(object):
pass
</p>
</li>
<li id="sec-5.5.15.1.3"><span class="done DONE"> DONE</span> Classier Classes <br/>

<p>
class Animal(object):
def __init</sub>__(self)</sub>:
pass
</p>
</li>
<li id="sec-5.5.15.1.4"><span class="done DONE"> DONE</span> Lets not get too selfish <br/>

<p>
class Animal(object):
def __init</sub>__(self, name)</sub>
self.name = name
</p>
</li>
<li id="sec-5.5.15.1.5"><span class="done DONE"> DONE</span> Instantiating your first Project <br/>

<p>
class Animal(object):
def __init</sub>__(self, name, typ, age)</sub>
self.name = name
self.typ = age
self.age = typ
</p>
<p>
zebra = Animal("Jeffrey", "zebra", 22)
</p>
<p>
print zebra.name
print zebra.typ
print zebra.age
</p>
<p>
-&gt; "Jeffrey"
-&gt; "zebra"
-&gt; 22
</p>
</li>
</ul>
</li>
<li id="sec-5.5.15.2"><span class="done DONE"> DONE</span> Member Variables and Functions [3/4] <br/>
<ul>
<li id="sec-5.5.15.2.1"><span class="done DONE"> DONE</span> More on __init</sub>__()</sub> and self <br/>

<p>
# Class definition
class Animal(object):
# for initialize our instance objects
def __init</sub>__(self, name, age, is_hungry</sub>)</sub>
self.name = name
self.age = age
self.is_hungry</sub> = is_hungry</sub>
</p>
<p>
zebra = Animal("Jeffrey", 2, True)
giraffe = Animal("Bruce", 1, False)
panda = Animal("Chad", 7, True)
</p>
<p>
print zebra.name, zebra.age, zebra.is_hungry</sub>
print giraffe.name, giraffe.age, giraffe.is_hungry</sub>
print panda.name, panda.age, panda.is_hungry</sub>
</p>
</li>
<li id="sec-5.5.15.2.2"><span class="done DONE"> DONE</span> Class Scope <br/>

<p>
class Animal(object):
is_alive</sub> = True
def __init</sub>__(self, name, age)</sub>:
self.name = name
self.age = age
</p>
<p>
zebra = Animal("Jeffrey, 2")
giraffe = Animal("Bruce", 1)
panda = Animal("Chad", 7)
</p>
<p>
print zebra.name, zebra.is_alive</sub>
print giraffe.name, giraffe.is_alive</sub>
print panda.name, panda.is_alive</sub>
</p>
</li>
<li id="sec-5.5.15.2.3"><span class="todo PROBLEM"> PROBLEM</span> A Methodical Approach <br/>

<p>
class Animal(object):
is_alive</sub> = True
def __init</sub>__(self, name, age)</sub>:
self.name = name
self.age = age
</p>
<p>
def description(self):
return self.name, self.age
</p>
<p>
hippo = Animal("Jeffrey", 2)
</p>
<p>
print hippo.description
</p>
<p>
-&gt; ?!?!?
</p>
</li>
<li id="sec-5.5.15.2.4"><span class="done DONE"> DONE</span> Shopping Cart - Its not all Animals and Fruits <br/>

<p>
class ShoppingCart(object):
</p>
<p>
items_in</sub>_cart</sub> = {}
</p>
<p>
def __init</sub>__(self, customer_name</sub>)</sub>:
self.customer_name</sub> = customer_name</sub>
</p>
<p>
def add_item</sub>(self, product, price):
"""Add product to the cart."""
</p>
<p>
if not product in self.items_in</sub>_cart</sub>:
self.items_in</sub>_cart[product]</sub> = price
print product + " added."
else:
print product + " is already in the cart."
</p>
<p>
def remove_item</sub>(self, product):
"""Remove product from the cart."""
</p>
<p>
if product in self.items_in</sub>_cart</sub>:
del self.items_in</sub>_cart[product]</sub>
print product + " removed."
else:
print product + " is not in the cart."
</p>
<p>
my_cart</sub> = ShoppingCart("PoisonNet")
</p>
<p>
my_cart</sub>.add_item</sub>("Blei", 1.50)
my_cart</sub>.add_item</sub>("Plutonium", 150)
my_cart</sub>.add_item</sub>("Blei", 1.50)
</p>
</li>
</ul>
</li>
<li id="sec-5.5.15.3"><span class="todo PROBLEM"> PROBLEM</span> Inheritance [3/4] <br/>
<ul>
<li>
State "DONE"       from "STARTED" <span class="timestamp-wrapper"> <span class="timestamp">2013-01-14 Mon 22:24</span></span>
</li>
<li id="sec-5.5.15.3.1"><span class="done DONE"> DONE</span> Warning: Here be Dragons <br/>

<p>
class Customer(object):
"""Produces objects that represent customers."""
def __init</sub>__(self, customer_id</sub>)</sub>:
self.customer_id</sub> = customer_id</sub>
def display_cart</sub>(self):
print "I'm a string that stands in for the contents of your shopping cart!"
</p>
<p>
class ReturningCustomer(Customer):
"""For customers of the repeat variety."""
def __init</sub>__(self, customer_id</sub>)</sub>:
self.customer_id</sub> = customer_id</sub>
</p>
<p>
def display_order</sub>_history</sub>(self):
print "I'm a string that stands in for your order history!"
</p>
<p>
monty_python</sub> = ReturningCustomer("ID: 12345")
monty_python</sub>.display_cart</sub>()
monty_python</sub>.display_order</sub>_history</sub>()
</p>
</li>
<li id="sec-5.5.15.3.2"><span class="done DONE"> DONE</span> Inheritance Syntax <br/>

<p>
class Shape(object):
def __init</sub>__(self, number_of</sub>_sides</sub>)</sub>:
self.number_of</sub>_sides</sub> = number_of</sub>_sides</sub>
</p>
<p>
class Triangle(Shape):
def __init</sub>__(self, side1, side2, side3)</sub>:
self.side1 = side1
self.side2 = side2
self.side3 = side3
</p>
</li>
<li id="sec-5.5.15.3.3"><span class="done DONE"> DONE</span> Override <br/>

<p>
class Employee(object):
"""Models real-life employees!"""
</p>
<p>
def __init</sub>__(self, employee_name</sub>)</sub>:
self.employee_name</sub> = employee_name</sub>
</p>
<p>
def calculate_wage</sub>(self, hours):
self.hours = hours
return hours * 20.00
</p>
<p>
class PartTimeEmployee(Employee):
</p>
<p>
def calculate_wage</sub>(self, hours):
self.hours = hours
return hours * 12.00
</p>
</li>
<li id="sec-5.5.15.3.4"><span class="todo PROBLEM"> PROBLEM</span> This looks like a Job for&hellip; <br/>
<ul>
<li>
State "PROBLEM"    from "DONE" <span class="timestamp-wrapper"> <span class="timestamp">2013-01-14 Mon 22:41</span></span>

</li>
</ul>

<p>class Employee(object):
"""Models real-life employees!"""
</p>
<p>
def __init</sub>__(self, employee_name</sub>)</sub>:
self.employee_name</sub> = employee_name</sub>
</p>
<p>
def calculate_wage</sub>(self, hours):
self.hours = hours
return hours * 20.00
</p>
<p>
# Add your code below!
class PartTimeEmployee(Employee):
</p>
<p>
def __init</sub>__(self, employee_name</sub>)</sub>:
self.employee_name</sub> = employee_name</sub>
</p>
<p>
def calculate_wage</sub>(self, hours):
self.hours = hours
return hours * 12.00
</p>
<p>
def full_time</sub>_wage</sub>(self):
super(Employee, self).calculate_wage</sub>(hours)
</p>
<p>
milton = PartTimeEmployee('milton')
print milton.full_time</sub>_wage</sub>(10)
</p>
</li>
</ul>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.5.16" class="outline-4">
<h4 id="sec-5.5.16"><span class="section-number-4">5.5.16</span> Python Lession Create if statement </h4>
<div class="outline-text-4" id="text-5.5.16">

<p>Name = raw_input</sub>("Dein Name?")
backname = raw_input</sub>("Dein Nachname?")
passwort = raw_input</sub>("Dein Passwort?")
</p>
<p>
def the_flying</sub>_circus</sub>():
#Start coding here!
</p>
<p>
if name == "David" and backname == "Crimi" and passwort == "1234":
print "Dein Name und Login waren Richtig!"
return True
elif name == "David" and backname == "Crimi":
print "Dein Name war Richtig!"
return False
else:
print "Alles Falsch"
return False
</p>
<p>
the_flying</sub>_circus</sub>()
</p></div>
</div>

</div>

<div id="outline-container-5.6" class="outline-3">
<h3 id="sec-5.6"><span class="section-number-3">5.6</span> JavaScript CodeCadamy </h3>
<div class="outline-text-3" id="text-5.6">


<p>
=    Gleich, Zuweisung
===  Gleich, Bedingung
</p>

</div>

<div id="outline-container-5.6.1" class="outline-4">
<h4 id="sec-5.6.1"><span class="section-number-4">5.6.1</span> Variables </h4>
<div class="outline-text-4" id="text-5.6.1">


<p>
Variable deklarieren
var myName;
var array[];
var i;
</p>
<p>
Variable füllen
i = 25;
myName = "David";
array = [1, 4, 6];                 // erzeugt eine Tabelle, 0=1, 1=4, 2=6
day<sup><a class="footref" name="fnr.3" href="#fn.3">3</a></sup> = "Monday";
day<sup><a class="footref" name="fnr.2.7" href="#fn.2">2</a></sup> = "Tuesday";
</p>
<p>
Variable eingabe anfordern
var i = prompt("Dein Geburtsalter:");
var myName = prompt("Gib dein Namen ein:");
</p>
<p>
Variable bearbeiten
i++;
i&ndash;;
1 * 5;
3 / 1;
15 % 2;                            // Zeigt den Rest an
myName.replace("Wort", "Ersatz");  // Tauscht Wort gegen Ersatz aus
myName.toLowerCase                 // Variable in kleinbuchstaben umwandeln
myName.toUpperCase                 // Variable in GROSSBUCHSTABEN umwandeln
</p>
<p>
Variablen Eigenschaften auslesen
myName.length
myName.substring(0,2)         // bedeutet, teilstring von var von 0 bis 2 ausgeben 
</p>
<p>
Variable ausgeben
confirm("Accept");
alert("Achtung!");
</p>
</div>

</div>

<div id="outline-container-5.6.2" class="outline-4">
<h4 id="sec-5.6.2"><span class="section-number-4">5.6.2</span> If Else </h4>
<div class="outline-text-4" id="text-5.6.2">


<p>
if (bedinung = true) {
run some code
} else if (bedinung2 = true ) {
run some code
} else { run some other code };
</p>
</div>

</div>

<div id="outline-container-5.6.3" class="outline-4">
<h4 id="sec-5.6.3"><span class="section-number-4">5.6.3</span> Schleifen </h4>
<div class="outline-text-4" id="text-5.6.3">

<ul>
<li id="sec-5.6.3.1">For Schleife <br/>

<p>
for ( initialization; condition; increment ) {
// code to run each iteration
}
</p>
<p>
Beispiel:
</p>
<p>
for (i = 0; i &lt; 10; i++) {
alert("i is now equal to" + i);
}
</p>
</li>
<li id="sec-5.6.3.2">While Schleife <br/>

<p>
var i = 0;              // initialize i
while ( i &lt; 5 ) {       // SOLANGE Bedingung auf "true" bleibt, 
i++;                  // wird dieser Code ausgeführt.   | hier wird i erhöht;
}
</p>
</li>
<li id="sec-5.6.3.3">Do schleife <br/>

<p>
var i = 0;
do {
// run some code
i++;
} while ( i &lt; 4 );
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.6.4" class="outline-4">
<h4 id="sec-5.6.4"><span class="section-number-4">5.6.4</span> Functions </h4>
<div class="outline-text-4" id="text-5.6.4">


<p>
Beispiel:
</p>
<p>
var NameDerFunction = function (übergabewert) {
return Danke;                                      // (Hier kann eine Zahl Array oder sonstwas stehen, true / false / 1 / 35 / pissdich / huhu )
};
</p>
<p>
var Name = function (x) {
execute some code here
return true;
};
</p>
<p>
Ausführen der Funktion:
</p>
<p>
NameDerFunction(übergabewert);
Name(x);
</p>

<ul>
<li id="sec-5.6.4.1">Beispiel: Lost <br/>

<p>
Aufgabe:
</p>
<p>
Now we need to combine two concepts we've learned - arrays and loops.
</p>
<p>
Line 1 defines an array lost which contains lost numbers. 
Line 2 declares a variable count. 
It is assigned the value that is equal to the length of the lost array. 
That length is 6.
</p>
<p>
We will use the function isLost to check if a number is a member of the lost numbers.
</p>
<p>
We loop through the array lost using a for loop. 
For more on the for loop please refer to the following exercise.
</p>
<p>
The difficult part of the for loop is knowing what to put in the parentheses ( ) after the word for.
</p>
<p>
Code:
</p>
<p>
var lost = [4, 8, 15, 16, 23, 42];
var count = lost.length;
</p>
<p>
var isLost = function (n) {
for ( i = 0; i &lt;= lost.length; i++) {
if ( n === lost[i]) {
return true; //false;
}
}
return false;
};
</p>
<p>
if ( isLost(12) ) {
console.log('12 is a lost number');
}
</p>
<p>
if ( isLost(16) ) {
console.log('16 is a lost number');
}
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.6.5" class="outline-4">
<h4 id="sec-5.6.5"><span class="section-number-4">5.6.5</span> &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </h4>
<div class="outline-text-4" id="text-5.6.5">

</div>

</div>

<div id="outline-container-5.6.6" class="outline-4">
<h4 id="sec-5.6.6"><span class="section-number-4">5.6.6</span> Codecadamy Projekte </h4>
<div class="outline-text-4" id="text-5.6.6">

<ul>
<li id="sec-5.6.6.1">FizzBuzz <br/>

<p>
Das Spiel bei dem man bis 100 hochzählt und 
bei jeder durch 3 oder 5 Teilbaren Zahl ein Begriff rufen muss.
</p>
<p>
// Add an else statement in case the number is divisible by 5. 
</p>
<p>
// for the numbers 1 through 20,
for (i=1; i&lt;=100; i++) { 
</p>

<p>
// if number is divisible by 3 and 5, write "FizzBuzz"
if ( i % 3 === 0 &amp;&amp; i % 5 === 0 ) {
console.log("FizzBuzz");
}
</p>
<p>
// if the number is divisible by 3, write "Fizz"
else if ( i % 3 === 0 ) { 
console.log("Fizz");
}
</p>
<p>
// if the number is divisible by 5, write "Buzz"
else if ( i % 5 === 0 ) {
console.log("Buzz");
}
</p>
<p>
// otherwise, write just the number
else {
console.log(i);
}
}
</p></li>
<li id="sec-5.6.6.2">IsEven Function <br/>

<p>
var isOdd = function (y) {
if (!isEven(y)) {
return false;  
} else {
return true;
}
};
</p>
<p>
var isEven = function (x) {
if (x % 2 === 0) {
return true;  
} else {
return false;
}
};
</p>
<p>
isOdd(26);
</p>
</li>
<li id="sec-5.6.6.3">Functionen - FixName <br/>

<p>
var fullName = "";
var name;
var firstLetter;
/*
fixName function definition should go here.
*/
var fixName = function () {
<i>***** Begin repeated code block *****</i>
firstLetter = name.substring(0, 1);
name = firstLetter.toUpperCase() + name.substring(1);
fullName = fullName + " " + name;
<i>***** End repeated code block *****</i>
};
</p>
<p>
name = prompt("Enter your first name (all in lower case):");
fixName();
name = prompt("Enter your second name (all in lower case):");
fixName();
console.log("And your full name is:" + fullName);
</p></li>
</ul>
</div>

</div>

<div id="outline-container-5.6.7" class="outline-4">
<h4 id="sec-5.6.7"><span class="section-number-4">5.6.7</span> First game in JS </h4>
<div class="outline-text-4" id="text-5.6.7">


<p>
//Check if the user is ready to play!
</p>
<p>
string = "Snow White and Batman were hanging out at the bus stop, waiting to go to the shops. There was a sale on and both needed some new threads. You've never really liked Batman. You walk up to him.";
</p>
<p>
console.log(string);
console.log('Batman glares at you.');
</p>
<p>
userAnswer = prompt('Are you feeling lucky, punk?');
</p>
<p>
if ( userAnswer == "yes" ) {
console.log("Batman hits you very hard. It's Batman and you're you! Of course Batman wins!");
} else {
console.log("You did not say yes to feeling lucky. Good choice! You are a winner in the game of not getting beaten up by Batman.");
}
</p>
<p>
feedback = prompt('Feedback? From 1 - 10!');
</p>
<p>
if ( feedback &gt;= 8 ) {
console.log("This is just the beginning of my game empire. Stay tuned for more!");
} else {
console.log("I slaved away at this game and you gave me that score?! The nerve! Just you wait!");
}
</p>
</div>
</div>

</div>

<div id="outline-container-5.7" class="outline-3">
<h3 id="sec-5.7"><span class="section-number-3">5.7</span> WebSite HTML PHP JS CodeCademy </h3>
<div class="outline-text-3" id="text-5.7">


</div>

<div id="outline-container-5.7.1" class="outline-4">
<h4 id="sec-5.7.1"><span class="section-number-4">5.7.1</span> CSS </h4>
<div class="outline-text-4" id="text-5.7.1">

<ul>
<li id="sec-5.7.1.1">Static by Default <br/>
<ul>
<li id="sec-5.7.1.1.1">index.html <br/>
</li>
<li id="sec-5.7.1.1.2">stylesheet.css <br/>

<p>
div {
border-radius: 5px;
border: 2px solid black;
}
</p>
<p>
height: 75px;
width: 75px;
background-color: #547980;
<i>*Add your CSS here!*</i>
</p>
<p>
}
</p>
<p>
height: 500px;
width: 150px;
background-color: #45ADA8;
position: absolute;
margin-left: 100px;
}
</p>
</li>
</ul>
</li>
<li id="sec-5.7.1.2">Absolute positioning <br/>
<ul>
<li id="sec-5.7.1.2.1">stylesheet.css <br/>

<p>
div {
border-radius: 5px;
border: 2px solid black;
}
</p>
<p>
height: 75px;
width: 75px;
background-color: #547980;
<i>*Add your CSS here!*</i>
position: absolute; 
margin-left: 20px;
}
</p>
<p>
height: 500px;
width: 150px;
background-color: #45ADA8;
position: absolute;
margin-left: 100px;
}
</p>
</li>
</ul>
</li>
<li id="sec-5.7.1.3">Relative positioning <br/>
<ul>
<li id="sec-5.7.1.3.1">stylesheet.css <br/>

<p>
div {
border-radius: 5px;
border: 2px solid black;
}
</p>
<p>
height: 75px;
width: 75px;
background-color: #547980;
<i>*Add your CSS here!*</i>
position:relative;
margin-left:200px;
}
</p>
<p>
height: 500px;
width: 150px;
background-color: #45ADA8;
position: absolute;
margin-left: 100px;
}
</p>
</li>
</ul>
</li>
<li id="sec-5.7.1.4">Fixed positioning <br/>
<ul>
<li id="sec-5.7.1.4.1">stylesheet.css <br/>

<p>
div {
border-radius: 5px;
border: 2px solid black;
}
</p>
<p>
height: 75px;
width: 75px;
background-color: #547980;
<i>*Add your CSS here!*</i>
position:relative;
margin-left:200px;
}
</p>
<p>
height: 500px;
width: 150px;
background-color: #45ADA8;
position: absolute;
margin-left: 100px;
}
</p>
</li>
</ul>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.7.2" class="outline-4">
<h4 id="sec-5.7.2"><span class="section-number-4">5.7.2</span> Web Forms Full - HTML - CSS </h4>
<div class="outline-text-4" id="text-5.7.2">

<ul>
<li id="sec-5.7.2.1">index.html <br/>

<p>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Web Form&lt;/title&gt;
&lt;link rel='stylesheet' type='text/css' href='stylesheet.css'/&gt;
&lt;link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id="header"&gt;&lt;h1&gt;Contact Us!&lt;/h1&gt;&lt;/div&gt;
&lt;div id="wrapper"&gt;
&lt;div id="inputs"&gt;
&lt;form name="input" action="#" method="post"&gt;
First name: &lt;input type="text" name="firstname" value="first name"&gt;&lt;br/&gt;
Last name: &lt;input type="text" name="lastname" value="last name"&gt;&lt;br/&gt;
E-mail: &lt;input type="email" name="email" value="e-mail address"&gt;&lt;br/&gt;&lt;br/&gt;
&lt;/form&gt;
&lt;/div&gt;
&lt;div&gt;
&lt;form id="options"&gt;
Message: &lt;br/&gt;&lt;textarea name="msg"&gt;&lt;/textarea&gt;&lt;br/&gt;
&lt;p&gt;Sex:&lt;/p&gt;
&lt;input type="radio" name="sex" value="male"&gt;Male
&lt;input type="radio" name="sex" value="female"&gt;Female&lt;br/&gt;&lt;br/&gt;
&lt;input type="checkbox" name="notify" value="updates" checked&gt;I'd like to receive notices when this website updates.&lt;br/&gt;
&lt;input type="checkbox" name="notify" value="services"&gt;I'd like to receive notices pertaining to related websites and their services.&lt;br/&gt;&lt;br/&gt; 
&lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</p>
</li>
<li id="sec-5.7.2.2">stylesheet.css <br/>

<p>
position: relative;
top: -10px;
background-color: #00A0B0;
border-top-left-radius: 15px;
border-top-right-radius: 15px;
height: 40px;
}
</p>
<p>
h1 {
font-family: Lobster;
color: #FFFFFF;
text-align: center;
}
</p>
<p>
form {
font-family: Verdana, Arial, sans-serif;
}
</p>
<p>
p {
font-family: Verdana, Arial, sans-serif;
display: inline-block;
}
</p>
<p>
input {
font-family: Verdana, Arial, sans-serif;
color: #777;
}
</p>
<p>
textarea {
vertical-align: top;
width: 550px;
color: #777;
}
</p>
<p>
border-left: 1px solid #888;
border-right: 1px solid #888;
border-bottom: 1px solid #888;
position: relative;
top: -10px;
padding-top: 10px;
padding-left: 20px;
padding-bottom: 20px;
box-shadow: 3px 3px 3px #444;
font-family: Verdana, Arial, sans-serif;
font-size: 0.8em;
}
</p>
<p>
width: 200px;
clear: both;
}
</p>
<p>
width: 100%;
clear: both;
}
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.7.3" class="outline-4">
<h4 id="sec-5.7.3"><span class="section-number-4">5.7.3</span> Less Code More Magic - HTML - CSS - JS </h4>
<div class="outline-text-4" id="text-5.7.3">

<ul>
<li id="sec-5.7.3.1">index.html <br/>

<p>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Pick a Date&lt;/title&gt;
&lt;link rel='stylesheet' type='text/css' href='stylesheet.css'/&gt;
&lt;link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/&gt;
&lt;script type='text/javascript' src='script.js'&gt;&lt;/script&gt;
&lt;script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id="header"&gt;
&lt;h2&gt;&lt;br/&gt;Select a Destination&lt;/h2&gt;
&lt;/div&gt;
&lt;div class="left"&gt;
&lt;p&gt;Departing: &lt;input type="text" id="departing"&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;div class="right"&gt;
&lt;p&gt;Returning: &lt;input type="text" id="returning"&gt;&lt;/p&gt;
&lt;/div&gt;&lt;br/&gt;
&lt;div id="main"&gt;
&lt;p&gt;Destination: &lt;select id="dropdown"&gt;
&lt;option value="newyork"&gt;New York&lt;/option&gt;
&lt;option value="london"&gt;London&lt;/option&gt;
&lt;option value="beijing"&gt;Beijing&lt;/option&gt;
&lt;option value="moscow"&gt;Moscow&lt;/option&gt;
&lt;/select&gt;&lt;/p&gt;
&lt;button&gt;Submit&lt;/button&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</p>
</li>
<li id="sec-5.7.3.2">stylesheet.css <br/>

<p>
h2 {
font-family: Verdana, Arial, sans-serif;
text-align: center;
color: #FFFFFF;
}
</p>
<p>
width: 100%;
height: 70px;
position: relative;
top: -40px;
background-color: #7FC7AF;
border-bottom-left-radius: 5px;
border-bottom-right-radius: 5px;
}
</p>
<p>
p {
font-family: Verdana, Arial, sans-serif;
font-size: 1em;
}
</p>
<p>
.left {
position: relative;
top: -40px;
float: left;
}
</p>
<p>
.right {
position: relative;
top: -40px;
float: right;
}
</p>
<p>
position: relative;
top: 170px;
float: left;
}
</p>
</li>
<li id="sec-5.7.3.3">script.js <br/>

<p>
$(document).ready(function() {
$("#departing").datepicker();
$("#returning").datepicker();
$("button").click(function() {
var selected = $("#dropdown option:selected").text();
var departing = $("#departing").val();
var returning = $("#returning").val();
if (departing === "" || returning === "") {
alert("Please select departing and returning dates.");
} else {
confirm("Would you like to go to " + selected + " on " + departing + " and return on " + returning + "?");
}
});
});
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-5.7.4" class="outline-4">
<h4 id="sec-5.7.4"><span class="section-number-4">5.7.4</span> &ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </h4>
<div class="outline-text-4" id="text-5.7.4">

</div>

</div>

<div id="outline-container-5.7.5" class="outline-4">
<h4 id="sec-5.7.5"><span class="section-number-4">5.7.5</span> Multimedia WebProject </h4>
<div class="outline-text-4" id="text-5.7.5">

<ul>
<li id="sec-5.7.5.1">Simple Web Page <br/>

<p>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;LimeBlack is back!&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;LimeBlack&lt;/h1&gt; 
&lt;h2&gt;Technik die begeistert!&lt;/h2&gt;
&lt;p&gt;Herzlich Willkommen auf meiner &lt;strong&gt;Homepage!&lt;/strong&gt;&lt;/p&gt;
&lt;br/&gt;
&lt;img src='http://bit.ly/RhrMEn' alt='Ein Sandwitch!'&gt;
&lt;h2&gt;Wichtig!&lt;/h2&gt;
&lt;p&gt;Der Blender Kurs fällt aus!&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</p>
</li>
<li id="sec-5.7.5.2">Designing a professional WebSite <br/>
<ul>
<li id="sec-5.7.5.2.1">What we're building <br/>

<p>
Link: <a href="http://j.mp/10HdByh">http://j.mp/10HdByh</a>
</p>
<ul>
<li id="sec-5.7.5.2.1.1">index.html <br/>

<p>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;link type="text/css" rel="stylesheet" href="stylesheet.css"/&gt;
&lt;title&gt;Result&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id="header"&gt;
&lt;div id="navbar"&gt;
&lt;ul&gt;
&lt;li&gt;Home&lt;/li&gt;
&lt;li&gt;About Me&lt;/li&gt;
&lt;li&gt;Links&lt;/li&gt;
&lt;li&gt;Contact&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;h2&gt;About Me&lt;/h2&gt;
&lt;/div&gt;
&lt;div id="left"&gt;
&lt;img src="<a href="http://bit.ly/NM8PWH"/">http://bit.ly/NM8PWH"/</a>&gt;
&lt;p&gt;I love designing websites.&lt;/p&gt;
&lt;/div&gt;
&lt;div id="right"&gt;
&lt;table&gt;
&lt;th colspan="3"&gt;Portfolio&lt;/th&gt;
&lt;tr&gt;
&lt;td&gt;&lt;img src="<a href="http://bit.ly/PK1euu"/">http://bit.ly/PK1euu"/</a>&gt;&lt;/td&gt;
&lt;td&gt;&lt;img src="<a href="http://bit.ly/PK1euu"/">http://bit.ly/PK1euu"/</a>&gt;&lt;/td&gt;
&lt;td&gt;&lt;img src="<a href="http://bit.ly/PK1euu"/">http://bit.ly/PK1euu"/</a>&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;img src="<a href="http://bit.ly/PK1euu"/">http://bit.ly/PK1euu"/</a>&gt;&lt;/td&gt;
&lt;td&gt;&lt;img src="<a href="http://bit.ly/PK1euu"/">http://bit.ly/PK1euu"/</a>&gt;&lt;/td&gt;
&lt;td&gt;&lt;img src="<a href="http://bit.ly/PK1euu"/">http://bit.ly/PK1euu"/</a>&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;&lt;img id="bottom_left</sub>" src="<a href="http://bit.ly/PK1euu"/">http://bit.ly/PK1euu"/</a>&gt;&lt;/td&gt;
&lt;td&gt;&lt;img src="<a href="http://bit.ly/PK1euu"">http://bit.ly/PK1euu"</a>&gt;&lt;/td&gt;
&lt;td&gt;&lt;img id="bottom_right</sub>" src="<a href="http://bit.ly/PK1euu"/">http://bit.ly/PK1euu"/</a>&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div id="footer"&gt;
&lt;div id="button"&gt;
&lt;p&gt;Send me an &lt;span class="bold"&gt;e-mail&lt;/span&gt;!&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</p>
</li>
<li id="sec-5.7.5.2.1.2">stylesheet.css <br/>

<p>
body {
background-color: #ffffff
}
</p>
<p>
h2 {
font-family: Verdana, sans-serif;
font-weight: bold;
text-align: center;
padding-top: 25px;
padding-bottom: 25px;
color: #ffffff;
}
</p>
<p>
img {
height: 170px;
width: 170px;
box-shadow: rgba(0,0,0,0.2) 10px 10px;
</p>
<p>
}
</p>
<p>
position: fixed;
top:10px;
left:50%;
margin-left:-154px;
}
</p>
<p>
position: relative;
top: -10px;
background-color: #A7DBD8;
border-top-left-radius: 15px;
border-top-right-radius: 15px;
}
</p>
<p>
ul {
list-style-type: none;
position: fixed;
margin: -10px;
}
</p>
<p>
li {
display: inline;
font-family: Futura, Tahoma, sans-serif;
color: #ffffff;
padding: 5px;
border-radius: 5px 5px;
background-color: #00B4CC;
}
</p>
<p>
width: 45%;
float: left;
}
</p>
<p>
p {
font-family: Tahoma, serif;
font-size: 1em;
}
</p>
<p>
width: 45%;
float: right;
}
</p>
<p>
table {
background-color: #A7DBD8;
color: #ffffff;
float: right;
border-bottom-right-radius: 15px;
border-bottom-left-radius: 15px;
}
</p>
<p>
td {
height: 75px;
width: 75px;
}
</p>
<p>
td img {
height: 75px;
width: 75px;
box-shadow: none;
}
</p>
<p>
th {
font-family: Verdana, sans-serif;
font-size: 1em;
font-weight: normal;
}
</p>
<p>
border-bottom-left-radius: 15px;
}
</p>
<p>
border-bottom-right-radius: 15px;
}
</p>
<p>
clear: both;
position: relative;
bottom: -20px;
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;
height: 75px;
background-color: #A7DBD8;
}
</p>
<p>
border: 2px solid #000000;
float:left;
position: relative;
left: 210px;
bottom: -20px;
border-radius: 5px;
background-color: #00B4CC;
height: 30px;
width: 150px;
</p>
<p>
}
</p>
<p>
position: relative;
bottom: 10px;
font-size: 0.8em;
text-align: center;
}
</p>
<p>
.bold {
font-family: tahoma;
font-weight: bold;
font-size: 1.2em;
font-variant: small-caps;
color: #ffffff;
}
</p>


</li>
</ul>
</li>
</ul>
</li>
</ul>
</div>
</div>

</div>

<div id="outline-container-5.8" class="outline-3">
<h3 id="sec-5.8"><span class="section-number-3">5.8</span> -&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </h3>
<div class="outline-text-3" id="text-5.8">

</div>

</div>

<div id="outline-container-5.9" class="outline-3">
<h3 id="sec-5.9"><span class="section-number-3">5.9</span> LISP </h3>
<div class="outline-text-3" id="text-5.9">


</div>

<div id="outline-container-5.9.1" class="outline-4">
<h4 id="sec-5.9.1"><span class="section-number-4">5.9.1</span> Open LISP Console </h4>
<div class="outline-text-4" id="text-5.9.1">


<p>
Start via BASH with command:
@Lappi# clisp
</p>
<p>
Start via Shortcut in Windows, after installation
</p>
</div>

</div>

<div id="outline-container-5.9.2" class="outline-4">
<h4 id="sec-5.9.2"><span class="section-number-4">5.9.2</span> Variables </h4>
<div class="outline-text-4" id="text-5.9.2">

<ul>
<li id="sec-5.9.2.1">Rechnen mit Variablen <br/>

<p>
&gt; ( + 3 5 7 90 33)
# 138
</p>
<p>
&gt; ( + -1 -45 -23)
# -69
</p>
<p>
&gt; ( * 4 2.3 )
# 9.2
</p>
</li>
<li id="sec-5.9.2.2">Manipulation von Strings <br/>

<p>
&gt; (subseq "Hello World!" 2 9)
# "llo Wor" 2      9
</p>
<p>
&gt; (subseq "Hello World!" 9)
# "ld!"
</p>
<p>
&gt; (string-upcase "Huhu")
# "HUHU"
</p>
<p>
&gt; (reverse "Four Jews")
# "sweJ ruoF"
</p>
<p>
&gt; (lenght "Vier")
# 4
</p>
</li>
<li id="sec-5.9.2.3">LIKE Boolean <br/>

<p>
&gt; (= 4 3) # Ist 4 gleich 3?
# NIL
</p>
<p>
&gt; (&lt; 3 9) # Ist 3 kleiner 9?
# T
</p>
<p>
&gt; (numberp "Hello") # Hello ist keine Nummer
# NIL
</p>
<p>
&gt; (oddp 9) # Nummer gleich ungerade? True
# T
</p></li>
</ul>
</div>
</div>

</div>

<div id="outline-container-5.10" class="outline-3">
<h3 id="sec-5.10"><span class="section-number-3">5.10</span> Django not really s.th.. </h3>
<div class="outline-text-3" id="text-5.10">


<p>
Projektdaten:
</p>
<p>
/home/poison/src
/home poison/django
</p>
<p>
Django DB Admin (poison/django)
User: poison
email: deathpoison.dc@gmail.com
pw: stdPW
</p>
</div>

</div>

<div id="outline-container-5.11" class="outline-3">
<h3 id="sec-5.11"><span class="section-number-3">5.11</span> Groovy mixture Python-Java </h3>
<div class="outline-text-3" id="text-5.11">


<p>
Wird nun gelernt wegen Epic`syntax!
</p>
<p>
groovy.codehause.org
</p>
</div>
</div>

</div>

<div id="outline-container-6" class="outline-2">
<h2 id="sec-6"><span class="section-number-2">6</span> ArchLinux </h2>
<div class="outline-text-2" id="text-6">


</div>

<div id="outline-container-6.1" class="outline-3">
<h3 id="sec-6.1"><span class="section-number-3">6.1</span> Gnome3 installation </h3>
<div class="outline-text-3" id="text-6.1">


</div>

<div id="outline-container-6.1.1" class="outline-4">
<h4 id="sec-6.1.1"><span class="section-number-4">6.1.1</span> NEED TO INSTALL &hellip; Irgdenwelche von denen! </h4>
<div class="outline-text-4" id="text-6.1.1">

<ul>
<li id="sec-6.1.1.1">Errinerung&hellip; o.O <br/>

<p>
xorg
gdm
x11 ( vllt -server? )
mutter
dbus
fuse
gnome-panel ( ist das ein Packet? )
nm-applet ( falls das geht | erst nach Gnome3 )
</p>
<p>
NVIDIA!!!
</p>
</li>
<li id="sec-6.1.1.2">Von einer InetSite&hellip; Naja! <br/>

<p>
git
gnome
pkgconfig
autogen
gnome-common
automake
gtk-doc
flex
bison
intltool
clutter
gperf
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-6.1.2" class="outline-4">
<h4 id="sec-6.1.2"><span class="section-number-4">6.1.2</span> PASTE ARCH WIKI </h4>
<div class="outline-text-4" id="text-6.1.2">


<p>
Nötige Packages installieren:
</p>
<p>
# pacman -Syu testing/gnome
# pacman -Syu testing/gnome-extra
</p>
<p>
Add these daemons to the DAEMONS array in /etc/rc.conf so they will start on boot up, e.g.:
DAEMONS=(syslog-ng dbus network crond)
</p>
<p>
Add the module to the MODULES array in /etc/rc.conf so they will load at boot up, e.g.:
</p>
<p>
# visudoMODULES=(fuse usblp)
</p>
</div>

</div>

<div id="outline-container-6.1.3" class="outline-4">
<h4 id="sec-6.1.3"><span class="section-number-4">6.1.3</span> Initscript anpassen </h4>
<div class="outline-text-4" id="text-6.1.3">

<ul>
<li id="sec-6.1.3.1">/etc/inittab <br/>




<p>
id:5:initdefault:    # &lt;-&mdash; HIER ÄNDERN
</p>
<p>
rc::sysinit:/etc/rc.sysinit
rs:S1:wait:/etc/rc.single
rm:2345:wait:/etc/rc.multi
rh:06:wait:/etc/rc.shutdown
su:S:wait:/sbin/sulogin -p
</p>
<p>
c1:2345:respawn:/sbin/agetty -8 38400 tty1 linux
c2:2345:respawn:/sbin/agetty -8 38400 tty2 linux
c3:2345:respawn:/sbin/agetty -8 38400 tty3 linux
c4:2345:respawn:/sbin/agetty -8 38400 tty4 linux
c5:2345:respawn:/sbin/agetty -8 38400 tty5 linux
c6:2345:respawn:/sbin/agetty -8 38400 tty6 linux
</p>


<p>
ca::ctrlaltdel:/sbin/shutdown -t3 -r now
</p>
<p>
x:5:respawn:/usr/sbin/gdm -nodaemon  # &lt;&ndash; Und hier!
</p>

</li>
</ul>
</div>
</div>

</div>

<div id="outline-container-6.2" class="outline-3">
<h3 id="sec-6.2"><span class="section-number-3">6.2</span> Packete verwalten / User anlegen [100%] </h3>
<div class="outline-text-3" id="text-6.2">


</div>

<div id="outline-container-6.2.1" class="outline-4">
<h4 id="sec-6.2.1"><span class="section-number-4">6.2.1</span> <span class="done DONE"> DONE</span> pacman </h4>
<div class="outline-text-4" id="text-6.2.1">



</div>

</div>

<div id="outline-container-6.2.2" class="outline-4">
<h4 id="sec-6.2.2"><span class="section-number-4">6.2.2</span> <span class="done DONE"> DONE</span> yaourt </h4>
<div class="outline-text-4" id="text-6.2.2">


<p>
Der Pacman KonfigurationsDatei (/etc/pacman.conf) folgendes anfügen:
(Repos für Yaourt)
</p>

<p>
Und jetzt installieren:
</p>

<p>
Zu Benutzen wie pacman!
</p>
</div>

</div>

<div id="outline-container-6.2.3" class="outline-4">
<h4 id="sec-6.2.3"><span class="section-number-4">6.2.3</span> <span class="done DONE"> DONE</span> User anlegen für anmeldung unter Gnome3 + SUDO </h4>
<div class="outline-text-4" id="text-6.2.3">



<p>
# useradd -m -g users -G audio,lp,optical,storage,video,wheel,games,power,scanner -s /bin/bash poisonweed
</p>
<p>
Den grad angelegten User zu "SUDO" hinzufügen,
und die Gruppe "wheel" der Sudo-Konfiguration hinzufügen:
# visudo
</p>
<p>
Öffnet die Konfiguration und folgendes muss hinzugefügt werden:
# %wheel ALL=(ALL) ALL
oder so ähnlich, kann man sich vom Benutzer root abgucken.
% steht dafür das es sich um eine Gruppe handelt.
</p></div>
</div>
</div>

</div>

<div id="outline-container-7" class="outline-2">
<h2 id="sec-7"><span class="section-number-2">7</span> Sabayon / Gentoo </h2>
<div class="outline-text-2" id="text-7">


</div>

<div id="outline-container-7.1" class="outline-3">
<h3 id="sec-7.1"><span class="section-number-3">7.1</span> XAMPP installation </h3>
<div class="outline-text-3" id="text-7.1">


<p>
After downloading simply type in the following commands: 
Go to a Linux shell and login as the system administrator root: su
</p>
<p>
Extract the downloaded archive file to /opt: 
tar xvfz xampp-linux-1.7.4.tar.gz -C /opt
</p>
<p>
XAMPP is now installed below the /opt/lampp directory.
To start XAMPP simply call this command: 
/opt/lampp/lampp start
</p>
<p>
You should now see something like this on your screen:
Starting XAMPP 1.7.4&hellip; LAMPP: Starting Apache&hellip; LAMPP: Starting MySQL&hellip; LAMPP started.
</p>
<p>
Ready. Apache and MySQL are running.
Now for the Sabayon / Gentoo specific instructions:
at terminal, do: su
ln -s /opt/lampp/lampp /usr/bin/lampp
nano /etc/conf.d/local
then add lines in there to control the startup and shutdown;
</p>

<p>
local_start</sub>() {
# This is a good place to load any misc programs
# on startup (use &amp;&gt;/dev/null to hide output)
/opt/lampp/lampp start
# We should always return 0
return 0
}
</p>
<p>
local_stop</sub>() {
# This is a good place to unload any misc.
# programs you started above.
/opt/lampp/lampp stop
# We should always return 0
return 0
}
</p>
<p>
Here a list of missing security in XAMPP:
The MySQL administrator (root) has no password.
The MySQL daemon is accessible via network.
ProFTPD uses the password "lampp" for user "nobody".
PhpMyAdmin is accessible via network.
Examples are accessible via network.
MySQL and Apache running under the same user (nobody).
</p>
<p>
So call the lampp security:
lampp security
and enter passwords for your system.
Now you can set up an FTP client like FireFTP in Firefox, or FileZilla. Add a connection and point it to localhost, with user nobody, and whatever password you gave in the security mode.
When you connect via FTP to this it is going into /opt/lampp/htdocs. So all your web pages will be started from there.
</p>
</div>
</div>

</div>

<div id="outline-container-8" class="outline-2">
<h2 id="sec-8"><span class="section-number-2">8</span> Linux Allgemein </h2>
<div class="outline-text-2" id="text-8">


</div>

<div id="outline-container-8.1" class="outline-3">
<h3 id="sec-8.1"><span class="section-number-3">8.1</span> Befehle ohne Attribute </h3>
<div class="outline-text-3" id="text-8.1">



</div>

<div id="outline-container-8.1.1" class="outline-4">
<h4 id="sec-8.1.1"><span class="section-number-4">8.1.1</span> |&ndash;&mdash;&mdash;&mdash;+-&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;| </h4>
<div class="outline-text-4" id="text-8.1.1">

</div>

</div>

<div id="outline-container-8.1.2" class="outline-4">
<h4 id="sec-8.1.2"><span class="section-number-4">8.1.2</span> | bash      | Shell, Befehlsinterpreter                                                              | </h4>
<div class="outline-text-4" id="text-8.1.2">

</div>

</div>

<div id="outline-container-8.1.3" class="outline-4">
<h4 id="sec-8.1.3"><span class="section-number-4">8.1.3</span> | echo      | Ausgabe                                                                                | </h4>
<div class="outline-text-4" id="text-8.1.3">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>echo &gt;&gt; x</td><td>schreibt das Ergebnis in folgende Datei</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.4" class="outline-4">
<h4 id="sec-8.1.4"><span class="section-number-4">8.1.4</span> | env       | Umgebungsvariablen, Wie SET unter WINDOWS (t=beispiel, echo $t)                        | </h4>
<div class="outline-text-4" id="text-8.1.4">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>Bespiel :</td><td>MyDir=abc</td></tr>
<tr><td></td><td>echo $MyDir</td></tr>
<tr><td>Ausgabe :</td><td>abc</td></tr>
<tr><td>Info    :</td><td>Sind wahrscheinlich nach einem Neustart weg!</td></tr>
<tr><td></td><td>Müsste also in einem Script immer neu gesetzt werden</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.5" class="outline-4">
<h4 id="sec-8.1.5"><span class="section-number-4">8.1.5</span> | exec      | Execute File, weiß nicht wie´s verwendet wird&hellip;   ?!?!?!!??!!?!?!?!?!!?!?!?!?!?!?!?   | </h4>
<div class="outline-text-4" id="text-8.1.5">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>exec    :</td><td>es ist mir ein rätsel, was es machen soll&hellip;</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.6" class="outline-4">
<h4 id="sec-8.1.6"><span class="section-number-4">8.1.6</span> | export    | Rechte der Umgebungsvariablen           ?!?!?!?!?!                                     | </h4>
<div class="outline-text-4" id="text-8.1.6">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>export  :</td><td>Macht irgendetwas!!!!!</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.7" class="outline-4">
<h4 id="sec-8.1.7"><span class="section-number-4">8.1.7</span> | grep      | filtert die ausgabe oder strings                                                       | </h4>
<div class="outline-text-4" id="text-8.1.7">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>grep    :</td><td>Filtert die ausgabe, -v für ausnahmen und -e für regExp!</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.8" class="outline-4">
<h4 id="sec-8.1.8"><span class="section-number-4">8.1.8</span> | pwd       | Print Working Directory, Aktuelles Verz.                                               | </h4>
<div class="outline-text-4" id="text-8.1.8">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>Ausgabe :</td><td>Gibt das aktuelle Verz. an, in dem man sich befindet</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.9" class="outline-4">
<h4 id="sec-8.1.9"><span class="section-number-4">8.1.9</span> | set       | sollte umgebungsvariablen setzen  &ndash; dauerhaft?, bitte testen!                         | </h4>
<div class="outline-text-4" id="text-8.1.9">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>set     :</td><td>Setzt Umgebungsvariablen dauerhaft!!!</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.10" class="outline-4">
<h4 id="sec-8.1.10"><span class="section-number-4">8.1.10</span> | unset     | löscht umgebungsvariablen                                                              | </h4>
<div class="outline-text-4" id="text-8.1.10">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>unset   :</td><td>Löscht dauerhafte Umgebungsvariablen</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.11" class="outline-4">
<h4 id="sec-8.1.11"><span class="section-number-4">8.1.11</span> | man       | ManPages, Anleitung zu Befehllen                                                       | </h4>
<div class="outline-text-4" id="text-8.1.11">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>man     :</td><td>Es gibt mehrere Man-Pages, weiß grad nicht wie man diese Anspricht.!</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.12" class="outline-4">
<h4 id="sec-8.1.12"><span class="section-number-4">8.1.12</span> | uname     | Details zu OS und Rechner                                                              | </h4>
<div class="outline-text-4" id="text-8.1.12">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>uname -a:</td><td>Zeigt in 1ner Zeile Infoś zum Betriebssystem an: Name, Version, Benutzer, Hardware</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.13" class="outline-4">
<h4 id="sec-8.1.13"><span class="section-number-4">8.1.13</span> | history   | Die zuletzt eingegebenen Befehle                                                       | </h4>
<div class="outline-text-4" id="text-8.1.13">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>history :</td><td>Zeigt die letzten einträge vom benutzen User an</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.14" class="outline-4">
<h4 id="sec-8.1.14"><span class="section-number-4">8.1.14</span> | cat       | Dann Daten anzeigen, zusammenfügen, trennen, bearbeiten                                | </h4>
<div class="outline-text-4" id="text-8.1.14">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>cat     :</td><td>Kann einiges s.o. aber kenne die Benutzung nicht so gut!</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.15" class="outline-4">
<h4 id="sec-8.1.15"><span class="section-number-4">8.1.15</span> | cut       | !!!BESTE!!! Zieht einen bestimmten Abschnitt aus einer Datei !!!                       | </h4>
<div class="outline-text-4" id="text-8.1.15">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>cut     :</td><td>Zieht einen bestimmten Abschnitt aus einer Datei ( von - bis )!!</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.16" class="outline-4">
<h4 id="sec-8.1.16"><span class="section-number-4">8.1.16</span> | expand    | Sollte Leerzeichen gegen Tabs tauschen                                                 | </h4>
<div class="outline-text-4" id="text-8.1.16">


</div>

</div>

<div id="outline-container-8.1.17" class="outline-4">
<h4 id="sec-8.1.17"><span class="section-number-4">8.1.17</span> | fmt       | Formatiert Text - fmt -w (weigth) 50 /datei - begrenzt den text auf eine breite von 50 | </h4>
<div class="outline-text-4" id="text-8.1.17">


</div>

</div>

<div id="outline-container-8.1.18" class="outline-4">
<h4 id="sec-8.1.18"><span class="section-number-4">8.1.18</span> | head      | Zeigt die ersten Zeilen einer datei an                                                 | </h4>
<div class="outline-text-4" id="text-8.1.18">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>head    :</td><td>Head gibt die ersten 10 ( -n 10 ) Zeilen einer Datei aus!</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.19" class="outline-4">
<h4 id="sec-8.1.19"><span class="section-number-4">8.1.19</span> | od        | OctalDump - od /datei                                                                  | </h4>
<div class="outline-text-4" id="text-8.1.19">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>od  -head</td><td>wird oft benutzt, da man nur einen teil braucht,</td></tr>
<tr><td></td><td>und alles weitere eh keiner lesen kann!</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.20" class="outline-4">
<h4 id="sec-8.1.20"><span class="section-number-4">8.1.20</span> | join      | Zeigt übereinstimmende Zeilen an                                                       | </h4>
<div class="outline-text-4" id="text-8.1.20">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>join x x1</td><td>Join vergleicht 2 Dateien und zeigt nur übereinstimmende an!</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.21" class="outline-4">
<h4 id="sec-8.1.21"><span class="section-number-4">8.1.21</span> | nl        | Nummeriert die Zeilen einer Datei                                                      | </h4>
<div class="outline-text-4" id="text-8.1.21">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>nl File2:</td><td>Nummeriert alle benutzen Zeilen</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.22" class="outline-4">
<h4 id="sec-8.1.22"><span class="section-number-4">8.1.22</span> | pr        | sieht beim Drucken besser aus (formatierung)                                           | </h4>
<div class="outline-text-4" id="text-8.1.22">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>pr File1:</td><td>Formatiert Textdateien Übersichtlicher</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.23" class="outline-4">
<h4 id="sec-8.1.23"><span class="section-number-4">8.1.23</span> | sed       |                                                                                        | </h4>
<div class="outline-text-4" id="text-8.1.23">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>sed     :</td><td>Wendet regular Expressions auf einen Datenstream an.</td></tr>
<tr><td></td><td>&mdash;nicht so sicher&hellip;</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.24" class="outline-4">
<h4 id="sec-8.1.24"><span class="section-number-4">8.1.24</span> | sort      | sortiert die ausgabe                                                                   | </h4>
<div class="outline-text-4" id="text-8.1.24">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>sort    :</td><td>Sortiert Alphabetisch, nach groß/klein Buchstaben, wie beim Desire »  ES File Explorer</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.25" class="outline-4">
<h4 id="sec-8.1.25"><span class="section-number-4">8.1.25</span> | split     | teilt dateien                                                                          | </h4>
<div class="outline-text-4" id="text-8.1.25">


</div>

</div>

<div id="outline-container-8.1.26" class="outline-4">
<h4 id="sec-8.1.26"><span class="section-number-4">8.1.26</span> | tail      | zeigt das ende einer datei -f aktuallisiert es bei veränderung (oder nach Zeit)        | </h4>
<div class="outline-text-4" id="text-8.1.26">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>tail -m 9</td><td>Zeigt das Ende einer Datei -n bestimmt die Zeilenanzahl</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.27" class="outline-4">
<h4 id="sec-8.1.27"><span class="section-number-4">8.1.27</span> | dmesg     | Zeigt Kernel- und Systemstart- Fehler "Ringpuffer des Kernel"                          | </h4>
<div class="outline-text-4" id="text-8.1.27">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>dmesg   :</td><td>So wie die Ereignisanzeige von Microsoft Windows</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.28" class="outline-4">
<h4 id="sec-8.1.28"><span class="section-number-4">8.1.28</span> | ps        | zeigt die laufenden Prozesse an                                                        | </h4>
<div class="outline-text-4" id="text-8.1.28">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>ps aux  :</td><td>Zeigt laufende Prozesse an, wird meist mit grep benutzt</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.29" class="outline-4">
<h4 id="sec-8.1.29"><span class="section-number-4">8.1.29</span> | fdisk     | Partitioniert SpeicherMedien                                                           | </h4>
<div class="outline-text-4" id="text-8.1.29">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>fdisk   :</td><td>mit -l kriegt man eine Liste der Devices und deren Partitionen</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.30" class="outline-4">
<h4 id="sec-8.1.30"><span class="section-number-4">8.1.30</span> | mkfs.ext2 | erstellt ein DateiSystem in einem Device                                               | </h4>
<div class="outline-text-4" id="text-8.1.30">


</div>

</div>

<div id="outline-container-8.1.31" class="outline-4">
<h4 id="sec-8.1.31"><span class="section-number-4">8.1.31</span> | mke2fs    | das gleiche wie mkfs.ext2                                                              | </h4>
<div class="outline-text-4" id="text-8.1.31">


</div>

</div>

<div id="outline-container-8.1.32" class="outline-4">
<h4 id="sec-8.1.32"><span class="section-number-4">8.1.32</span> | iostat    | -m 5 /dev/device m=Geschwindigkeit                                                     | </h4>
<div class="outline-text-4" id="text-8.1.32">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>iostat  :</td><td>Zeigt die Datenraten für ein Device an ( aktualisiert nach Zeit ).</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.33" class="outline-4">
<h4 id="sec-8.1.33"><span class="section-number-4">8.1.33</span> | df        | Partitionsgrößen erfahren                                                              | </h4>
<div class="outline-text-4" id="text-8.1.33">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>df -h   :</td><td>Zeigt wieviel Platz auf den Platten noch frei sind ( -h = Human, lesbar in GB )</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.34" class="outline-4">
<h4 id="sec-8.1.34"><span class="section-number-4">8.1.34</span> | dosfsck   | -a (Autorepair) -w (write) -V (verificate) DosFileSystemCheck                          | </h4>
<div class="outline-text-4" id="text-8.1.34">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>dosfsck :</td><td>wie CheckDisk von Windows - Überprüft das Dateisystem auf fehler</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.1.35" class="outline-4">
<h4 id="sec-8.1.35"><span class="section-number-4">8.1.35</span> | blkid     | Zeigt die UUID der Aktuellen Festplatte an!                                            | </h4>
<div class="outline-text-4" id="text-8.1.35">

</div>

</div>

<div id="outline-container-8.1.36" class="outline-4">
<h4 id="sec-8.1.36"><span class="section-number-4">8.1.36</span> | read      | !!! Ruft zu einer Eingabe auf!                                                         | </h4>
<div class="outline-text-4" id="text-8.1.36">

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>read abd:</td><td>fordert zur Eingabe auf</td></tr>
<tr><td>echo abd</td><td>gibt diese wieder aus</td></tr>
</tbody>
</table>

</div>

</div>

<div id="outline-container-8.1.37" class="outline-4">
<h4 id="sec-8.1.37"><span class="section-number-4">8.1.37</span> |&ndash;&mdash;&mdash;&mdash;+-&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;| </h4>
<div class="outline-text-4" id="text-8.1.37">


</div>
</div>

</div>

<div id="outline-container-8.2" class="outline-3">
<h3 id="sec-8.2"><span class="section-number-3">8.2</span> awk, sed </h3>
<div class="outline-text-3" id="text-8.2">


</div>

<div id="outline-container-8.2.1" class="outline-4">
<h4 id="sec-8.2.1"><span class="section-number-4">8.2.1</span> awk </h4>
<div class="outline-text-4" id="text-8.2.1">


<p>
beispiel:
</p>
<p>
while read img; do echo "$img" | awk -F '{print $NF}';done &lt; url.log
</p>
<p>
in der url.log stehen die links zu bildern, es werden die endungen angezeigt
z.b. <img src="http://www.blah.de/jude.jpg"  alt="http://www.blah.de/jude.jpg" />
</p>
</div>

</div>

<div id="outline-container-8.2.2" class="outline-4">
<h4 id="sec-8.2.2"><span class="section-number-4">8.2.2</span> sed </h4>
<div class="outline-text-4" id="text-8.2.2">


<p>
sed -n '<i>string1</i>,/string2/p' myfile.txt
</p>
<p>
in der myfile.txt steht irgein scheiß und es werden die zeillen ab string1 bis string2 angezeigt
</p>
<p>
beispiel:
</p>
<p>
fewfhewfwehfoifw
weofheofw
string1
fwefoiuhwefweof
wef0ewhfwefwoufhqvv euofghwru eufhzrwofuhw
rewuoihgwo evurvhuvreu u riue vjroi oi
string2
fauoe
fefijew
</p>
<p>
ergebnis ist dann:
</p>
<p>
string1
fwe&hellip;
&hellip;
string2
</p>
</div>
</div>

</div>

<div id="outline-container-8.3" class="outline-3">
<h3 id="sec-8.3"><span class="section-number-3">8.3</span> Rechte </h3>
<div class="outline-text-3" id="text-8.3">


<p>
1000 = &mdash; &mdash; &ndash;T
2000 = &mdash; &ndash;S ---
3000 = &mdash; &ndash;S &ndash;T
4000 = &ndash;S &mdash; ---
5000 = &ndash;S &mdash; &ndash;T
6000 = &ndash;S &ndash;S ---
7555 = r-S r-S r-T
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="right" />
</colgroup>
<thead>
<tr><th scope="col">lesen</th><th scope="col">4</th></tr>
<tr><th scope="col">write</th><th scope="col">2</th></tr>
<tr><th scope="col">exec</th><th scope="col">1</th></tr>
</thead>
<tbody>
</tbody>
<tbody>
<tr><td>rwx</td><td>7</td></tr>
<tr><td>rw-</td><td>6</td></tr>
<tr><td>r-x</td><td>5</td></tr>
</tbody>
<tbody>
<tr><td>r&ndash;</td><td>4</td></tr>
<tr><td>-wx</td><td>3</td></tr>
<tr><td>-w-</td><td>2</td></tr>
</tbody>
</table>


<p>
Das Sticky-Bit: beisp. rwxr-xr-t
</p>
<p>
Nur der User, welcher eine Datei erstellt hat (creator), kann Datei wieder löschen.

</p>
<hr/>


<p>
Das SUID-Bit: (Set User ID)  beisp. rwSr-xr-x
</p>
<p>
Die Datei wird ausgeführt mit den Rechten des Besitzers

</p>
<hr/>


<p>
Das SGID-Bit: (Set Group ID) beisp. r-xrwSr-x
</p>
<p>
Die Datei gehört der ausführenden Gruppe

</p>
<hr/>

</div>

</div>

<div id="outline-container-8.4" class="outline-3">
<h3 id="sec-8.4"><span class="section-number-3">8.4</span> Chroot Linux </h3>
<div class="outline-text-3" id="text-8.4">


<p>
$mirror = de.mirror.org
$target = &gt;4GB Space on any Linux
to extract all these little files on SD-Cards we need more space for inodes.
-&gt; mkfs.ext3 $target -i 2048 -b 2048
</p>
<p>
Thinks you need:
</p>
<p>
over 2GB for an Chroot-Enviroment (in my case: Gentoo)
</p>
<p>
over 4GB partition for chroot to running
</p>
<p>
(opt) latest Stage3 tarball -&gt; 
</p>
<p>
latest portage tarball -&gt;
</p>
<p>
extract stage3 to $usbdir
extract portage to $usbdir/usr/
cd $usbdir
</p>
<p>
Now we need to mount theses directories:
</p>
<p>
!!! Nochmal wenn nüchtern xD
</p>

<p>
cd $usbdir
mkdir -p $chroot-dir
mount -t ext3 $target $chroot-dir
mount -t proc none /data/gentoo/proc
mount -o bind /dev /data/gentoo/dev
</p>
</div>

</div>

<div id="outline-container-8.5" class="outline-3">
<h3 id="sec-8.5"><span class="section-number-3">8.5</span> c++ unter linux </h3>
<div class="outline-text-3" id="text-8.5">


<p>
need: gcc + editor
</p>
<p>
to compile a text to a c++ programm
</p>
<p>
ergebnis ist ausführbar&hellip;sh "outputfile"
</p></div>

</div>

<div id="outline-container-8.6" class="outline-3">
<h3 id="sec-8.6"><span class="section-number-3">8.6</span> Android SDK unter Linux </h3>
<div class="outline-text-3" id="text-8.6">


<p>
Installation via DL from <a href="http://developer.android.com/sdk/index.html">http://developer.android.com/sdk/index.html</a>
Entpacken nach /home/xy
</p>
<p>
Folgendes Paket installieren unter GnomeUbuntu und CrunchBang
sudo apt-get install ia32-libs 
</p>
<p>
Folgendes in der ~/.bashrc hinzufuegen:
</p>
<p>
# Android tools
export PATH=${PATH}:~/android-sdk-linux/tools
export PATH=${PATH}:~/android-sdk-linux/platform-tools   
</p>
</div>

</div>

<div id="outline-container-8.7" class="outline-3">
<h3 id="sec-8.7"><span class="section-number-3">8.7</span> Programme [16/18] [88%] </h3>
<div class="outline-text-3" id="text-8.7">


</div>

<div id="outline-container-8.7.1" class="outline-4">
<h4 id="sec-8.7.1"><span class="section-number-4">8.7.1</span> <span class="done DONE"> DONE</span> Github [5/6] [83%] </h4>
<div class="outline-text-4" id="text-8.7.1">

<ul>
<li id="sec-8.7.1.1"><span class="done DONE"> DONE</span> Initialize GitHub on new PC <br/>

<p>
LoginDaten in Variablen schreiben!
</p>
<p>
-&gt; git config &ndash;global user.name "LimeBlack"
-&gt; git config &ndash;global user.email "deathpoison.dc@gmail.com"
</p>
</li>
<li id="sec-8.7.1.2"><span class="done DONE"> DONE</span> Start new Project <br/>

<p>
Um ein neues Project zu erstellen muss ein Ordner mit den ProjectDaten bestehen.
Um dieses Projekt nun zu Git hinzuzufügen gebe ich folgende Befehle ein.
</p>
<p>
-&gt; mkdir Project
-&gt; cd Project
</p>
<p>
Hier wird das Project bei Git initialisiert
-&gt; git init
</p>
<p>
Und alle Dateien aus dem Verzeichnis dem Git-Project hinzugefügt
-&gt; git add .
</p>
<p>
Das Project übergeben (hochladen, neue Version erzeugen)
-&gt; git commit
&lt;- Hier erfolgt die Eingabe der veränderten Sachen (Changelog)
</p>
</li>
<li id="sec-8.7.1.3"><span class="done DONE"> DONE</span> Create new Branch, merge it with Master <br/>

<p>
Create new Branch 
-&gt; git branch feature_x</sub>
</p>
<p>
View current branches:
-&gt; git branch
</p>
<p>
Output: Der branch mit * ist gerade aktiv
&lt;-   feature_x</sub>
&lt;- * master
</p>
<p>
Change to new branch
-&gt; git checkout feature_x</sub>
</p>
<p>
Merge new branch to master
-&gt; git checkout master
-&gt; git merge feature_x</sub>
</p>
<p>
Delete old branch
-&gt; git branch -d feature_x</sub>
</p>
</li>
<li id="sec-8.7.1.4"><span class="done DONE"> DONE</span> Status abfrage <br/>

<p>
Mit folgendem Befehl sehen wir den Status des Projects
-&gt; git status
</p>
<p>
Und folgender zeigt uns die Aenderungen
-&gt; git diff
</p>
<p>
Anzeigen der Log's
-&gt; git log
</p>
<p>
Anzeigen einer kompletten Übersicht
-&gt; git log &ndash;stat &ndash;summary
</p>
</li>
<li id="sec-8.7.1.5"><span class="done DONE"> DONE</span> Änderungen Verwerfen, Dateien Ignorieren <br/>

<p>
Änderungen die nach einem Commit geschehen sind, kann man ganz einfach verwerfen.
-&gt; git reset &ndash;hard
</p>
<p>
Zum Ignorieren bestimmter Dateien wird die Datei ".gitignore" dem ProjectOrdner hinzugefügt.
Inhalt der Datei sind DateiNamen von allem was Ignoriert werden soll.
</p>
<p>
-&gt; blah.txt
-&gt; *~ 
</p>
</li>
<li id="sec-8.7.1.6"><span class="todo STARTED"> STARTED</span> LAPPI mit Filias <br/>

<p>
Sabayon
</p>
<p>
First installing git via: equo install git
Now configure Login:
</p>
<ul>
<li>
git config &ndash;global user.name "David Crimi"
</li>
<li>
git config &ndash;global user.email "deathpoison.dc@gmail.com"

</li>
</ul>

<p>Now adding SSH Key to Github-Webpage:
</p>
<ul>
<li>
ssh-keygen -t rsa

</li>
</ul>

<p>Copy content of ~/.ssh/id_rsa</sub>.pub to GitHub -&gt; Settings -&gt; SSH Keys
</p>
<p>
Create the project directory: mkdir git
Change to project dir: cd git
</p>
<p>
Now download Repository to project directory
-&gt; Copy Adress from GitHub site, with *.git extension
-&gt; z.B.: git@github.com:DeathPoison/DiabloCounter.git
git remote add git@github.com:DeathPoison/DiabloCounter.git
</p>
<p>
Make your changes!!!
</p>
<p>
Check status: git status &lt;- show changes of the Repo
</p>
<p>
Add missing files to Repo: git add file
Commit the changes: git commit &lt;- open nano to describe the changes
</p>
<p>
Upload changed Files to Github Server: git push origin master
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-8.7.2" class="outline-4">
<h4 id="sec-8.7.2"><span class="section-number-4">8.7.2</span> <span class="done DONE"> DONE</span> Slurm </h4>
<div class="outline-text-4" id="text-8.7.2">


<p>
equo install slurm
</p>
<p>
usage:
</p>
<p>
slurm -i networkinterface
</p>
<p>
z.b. slurm -i wlan0
</p>
</div>

</div>

<div id="outline-container-8.7.3" class="outline-4">
<h4 id="sec-8.7.3"><span class="section-number-4">8.7.3</span> <span class="done DONE"> DONE</span> ttyrec </h4>
<div class="outline-text-4" id="text-8.7.3">


<p>
equo install ttyrec
</p>
<p>
usage:
</p>
<p>
ttyrec   - zum aufnehmen (wechsel in die konsole, ersteelung der datei ttyrec)
ttyplay  - zum abspielen einer ttyrec datei (mit -p kann ein livestream erzeugt werden)
</p>
</div>

</div>

<div id="outline-container-8.7.4" class="outline-4">
<h4 id="sec-8.7.4"><span class="section-number-4">8.7.4</span> <span class="done DONE"> DONE</span> VLC </h4>
<div class="outline-text-4" id="text-8.7.4">


<p>
# pacman -S vlc   FAIL wegen Rechten&hellip; don´t install as root!
</p>
<ul>
<li id="sec-8.7.4.1"><span class="done STOPPED"> STOPPED</span> Problem:, &lt;Startet nicht als Admin&gt; <br/>

<p>
Brauche wahrscheinlich einen User der sich unter Gnome3 anmelden kann.
Es wird bei der installation KEIN .vlc ("<i>root</i>.config/vlc") angelegt
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-8.7.5" class="outline-4">
<h4 id="sec-8.7.5"><span class="section-number-4">8.7.5</span> <span class="done DONE"> DONE</span> Wine </h4>
<div class="outline-text-4" id="text-8.7.5">

<ul>
<li>
State "DONE"       from "PROBLEM" <span class="timestamp-wrapper"> <span class="timestamp">2011-05-08 So 22:17</span></span>
</li>
<li>
State "PROBLEM"    from "WAITING" <span class="timestamp-wrapper"> <span class="timestamp">2011-05-08 So 22:17</span></span>
</li>
<li>
State "WAITING"    from "STARTED" <span class="timestamp-wrapper"> <span class="timestamp">2011-05-08 So 22:17</span></span>
</li>
<li>
State "STARTED"    from "TODO" <span class="timestamp-wrapper"> <span class="timestamp">2011-05-08 So 22:17</span></span>

<p>
# Pacman -S wine
Nicht ganz kompatibel
</p>
<p>
Usage #wine "/pfad/zur/Exe"
</p>
</li>
</ul>

<p>Mitlerweile 300000&hellip; Packete zusätzlich installiert wie soll man da durchblicken?
-MineCraft geht
-Android need Flash!!!! - Install via Wine
-ADB auch!
</p></div>

</div>

<div id="outline-container-8.7.6" class="outline-4">
<h4 id="sec-8.7.6"><span class="section-number-4">8.7.6</span> <span class="done DONE"> DONE</span> LVM2 </h4>
<div class="outline-text-4" id="text-8.7.6">


<p>
Um ein LVM Laufwerk zu mounten, benötigen wir das LVM2 Programm!
</p>
<p>
-&gt; apt-get install lvm2
-&gt; pvs
</p>
<p>
Hier siehst du alle LVM Laufwerke wichtig ist hier die VolumeGroup!
</p>
<p>
-&gt; lvdisplay /dev/VolumeGroup
</p>
<p>
Jetzt wird das Laufwerk an sein Ziel gemounted.
</p>
<p>
-&gt; mount /dev/VolumeGroup/lg_aplharev</sub>_home</sub> /mnt/home
</p>
</div>

</div>

<div id="outline-container-8.7.7" class="outline-4">
<h4 id="sec-8.7.7"><span class="section-number-4">8.7.7</span> <span class="done DONE"> DONE</span> NMAP </h4>
<div class="outline-text-4" id="text-8.7.7">


<p>
Scan IP-Range:
</p><ul>
<li>
sudo nmap -sP 192.168.0.0/24
</li>
<li>
sudo nmap -sP 192.168.0.0-254

</li>
</ul>

<p>Scan Port:
</p><ul>
<li>
nmap 192.168.0.3 -p100-139

</li>
</ul>

<p>Scan Operation System:
</p><ul>
<li>
sudo nmap -O 192.168.0.3 

</li>
</ul>
</div>

</div>

<div id="outline-container-8.7.8" class="outline-4">
<h4 id="sec-8.7.8"><span class="section-number-4">8.7.8</span> <span class="done DONE"> DONE</span> Screen </h4>
<div class="outline-text-4" id="text-8.7.8">


<p>
Um eine Konsole zu verstecken oder für später zugänglich zu machen,
benutzen wir Screen!
</p>
<p>
Mein Beispiel für die Minecraft Console:
</p>
<p>
# screen -m -S bukkit -t bukkit -d sh bukkit.sh
# screen -m 
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">-m</th><th scope="col">ignore $STY Variable // creation of a new Session forced</th></tr>
<tr><th scope="col">-S</th><th scope="col">Session Name, important for #screen -r "Session Name"</th></tr>
<tr><th scope="col">-t</th><th scope="col">Name / Titel</th></tr>
<tr><th scope="col">-d</th><th scope="col">Open the Shell in background</th></tr>
</thead>
<tbody>
<tr><td><sup>A</sup> + <sup>D</sup></td><td>leaf Screen, Shell running in background</td></tr>
<tr><td><sup>A</sup> + <sup>K</sup></td><td>Kill Session</td></tr>
<tr><td><sup>A</sup> + <sup>N</sup></td><td>next Session</td></tr>
<tr><td><sup>A</sup> + <sup>P</sup></td><td>previews Session</td></tr>
<tr><td><sup>A</sup> + <sup>C</sup></td><td>Open new Session in Screen</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-8.7.9" class="outline-4">
<h4 id="sec-8.7.9"><span class="section-number-4">8.7.9</span> <span class="done DONE"> DONE</span> mPlayer </h4>
<div class="outline-text-4" id="text-8.7.9">


<p>
# pacman -S mplayer (nicht mplayer2 - keine GUI) - RechteFAIL User
</p></div>

</div>

<div id="outline-container-8.7.10" class="outline-4">
<h4 id="sec-8.7.10"><span class="section-number-4">8.7.10</span> <span class="done DONE"> DONE</span> Drucker </h4>
<div class="outline-text-4" id="text-8.7.10">


<p>
install cups
gutenprint
</p>
<p>
install foomatic
foomatic-db
foomatic-db-engine
foomatic-db-nonfree
foomatic-filters 
</p>
<p>
add printer via: Webinterface <a href="http://localhost:316/">http://localhost:316/</a>
</p>
<p>
Folge den Anweisungen!
Bei der Druckerauswahl (Netzwerk auflistung verfügbarer Drucker),
stehen die IPś der Drucker im SeitenQuellText.
</p></div>

</div>

<div id="outline-container-8.7.11" class="outline-4">
<h4 id="sec-8.7.11"><span class="section-number-4">8.7.11</span> <span class="done DONE"> DONE</span> RDesktop </h4>
<div class="outline-text-4" id="text-8.7.11">


<p>
Usage #rdesktop -P -z -x l -r sound:off -g 80% -u 'user'  'IP'
</p>
<p>
das "-g 80%" steht für die größe in prozent
das "-x l" steht für eine LAN Verbindung
das "-P" - persistent bitmap caching
das "-z" - compression aktivieren (RDP Datenstrom)
das "-r sound:off" - ton aus =)
</p>
</div>

</div>

<div id="outline-container-8.7.12" class="outline-4">
<h4 id="sec-8.7.12"><span class="section-number-4">8.7.12</span> <span class="done DONE"> DONE</span> Teamviewer </h4>
<div class="outline-text-4" id="text-8.7.12">


<p>
Install!!!
But how&hellip;SourceCode?
&hellip;WineHQ?
</p>
<p>
das Zauberwort: Yaourt
</p>

</div>

</div>

<div id="outline-container-8.7.13" class="outline-4">
<h4 id="sec-8.7.13"><span class="section-number-4">8.7.13</span> <span class="done DONE"> DONE</span> VirtualBox </h4>
<div class="outline-text-4" id="text-8.7.13">


<p>
muss mit modprobe daemons laden (vbox- netflt, und -daemon)
oder in der rc.conf oder .local hinzufügen (autostart)
</p></div>

</div>

<div id="outline-container-8.7.14" class="outline-4">
<h4 id="sec-8.7.14"><span class="section-number-4">8.7.14</span> <span class="done DONE"> DONE</span> ImageMagick </h4>
<div class="outline-text-4" id="text-8.7.14">

<ul>
<li id="sec-8.7.14.1">Copyright (cmd: "convert") <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>Datei</td><td>die Datei die bearbeitet wird!</td><td></td></tr>
<tr><td>-pointsize</td><td>30</td><td>schriftgroeße</td></tr>
<tr><td>-fill</td><td>black</td><td>farbe der schrift</td></tr>
<tr><td>-gravity</td><td>center</td><td>Position ungefähr</td></tr>
<tr><td>-annotate</td><td>+0+0</td><td>Position genau!</td></tr>
<tr><td>"Text"</td><td>Der Text der auf dem Bild erscheinen soll</td><td></td></tr>
<tr><td>"Ziel"</td><td>Ziel Datei</td><td>Dateiname der Fertigen Datei</td></tr>
</tbody>
</table>



<p>
Beispielbefehl:
</p>
<p>
"convert $1 -pointsize 30 -fill black -gravity center -annotate +0+0 $Text $Ziel"
</p>
</li>
<li id="sec-8.7.14.2">Wasserzeichen (cmd: "composite") <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>-dissolve</td><td>25%</td><td>transparenz</td></tr>
<tr><td>-graviry</td><td>southeast</td><td>ziel des wasserzeichens</td></tr>
<tr><td>wasserzeichen.png</td><td></td><td>bild mit dem Zeichen das zu sehen sein soll</td></tr>
<tr><td>ZielBild</td><td></td><td>Das bild welches verändert werden soll</td></tr>
<tr><td>ergebnis.jpg</td><td></td><td>Das ergebnis ist ein bild mit wasserzeichen</td></tr>
</tbody>
</table>



<p>
Beispielbefehl:
</p>
<p>
"composite -dissolve 25% -gravity southeast wasserzeichen.png ZielBild.png ergebnis.jpg"
</p></li>
<li id="sec-8.7.14.3">Convertieren (cmd: "convert") <br/>

<p>
convert x.gif x.png
</p>
</li>
<li id="sec-8.7.14.4">Negieren (cmd: "convert") <br/>

<p>
convert -negate x.png
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-8.7.15" class="outline-4">
<h4 id="sec-8.7.15"><span class="section-number-4">8.7.15</span> <span class="done DONE"> DONE</span> FlashPlugin x32 ArchLinux </h4>
<div class="outline-text-4" id="text-8.7.15">


<p>
Installing the Package
Add the multilib repo to your /etc/pacman.conf
# [multilib]
# Include = /etc/pacman.d/mirrorlist
</p>
<p>
Synchronize repositories
# pacman -Syu
</p>
<p>
and then install flashplugin using
# pacman -S flashplugin
</p>
<p>
In firefox, type about:plugins and check whether flashplugin has been loaded. 
# dom.ipc.plugins.enabled.libflashplayer.so=true
</p></div>

</div>

<div id="outline-container-8.7.16" class="outline-4">
<h4 id="sec-8.7.16"><span class="section-number-4">8.7.16</span> <span class="todo WAITING"> WAITING</span> Nagios </h4>
<div class="outline-text-4" id="text-8.7.16">


<p>
Nagios überwacht andere Systeme im Netzwerk!
</p>
<p>
Benötigt einen User zum installieren ( nagios:nagios ):
</p>
<p>
Wird installiert mit:
</p>
<p>
Beispiel Konfigurationen enden mit .sample
Die Hauptkonfiguration ist in nagios.cfg
</p>

<p>
NO TIME
</p></div>

</div>

<div id="outline-container-8.7.17" class="outline-4">
<h4 id="sec-8.7.17"><span class="section-number-4">8.7.17</span> <span class="todo WAITING"> WAITING</span> OpenSSH </h4>
<div class="outline-text-4" id="text-8.7.17">



<p>
&hellip;psst! Deutsche Anleitung unter: <a href="http://www.linupedia.org/opensuse/Einrichten_von_public_keys_mit_ssh">http://www.linupedia.org/opensuse/Einrichten_von_public_keys_mit_ssh</a> ^^
</p>
<p>
ConfigDatei -&gt; /etc/ssh/sshd_config</sub>
</p><ul>
<li id="sec-8.7.17.1">sshd_config</sub> <br/>





<p>
Port    50505 
ListenAddress 0.0.0.0
ListenAddress ::
</p>
<p>
Protocol 2
</p>




<p>
LoginGraceTime 2m
PermitRootLogin yes
</p>
<p>
RSAAuthentication yes
PubkeyAuthentication yes
AuthorizedKeysFile      .ssh/authorized_keys</sub>
</p>

<p>
PasswordAuthentication yes
</p>






<p>
Subsystem       sftp    /usr/lib/ssh/sftp-server
</p>
<p>
AllowUsers      poisonweed
</p>

</li>
<li id="sec-8.7.17.2">Using SSH Shell <br/>

<p>
ssh &hellip;.
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>-2</td><td>Benutzt nur Protocol_Ver</sub>.:2</td></tr>
<tr><td>-4</td><td>Nur IPv4</td></tr>
<tr><td>-6</td><td>Nur IPv6</td></tr>
<tr><td>-l</td><td>LoginName</td></tr>
<tr><td>-p</td><td>Port</td></tr>
<tr><td>-q</td><td>QuietMode</td></tr>
<tr><td>-V</td><td>Display Version</td></tr>
<tr><td>-v</td><td>Verbose</td></tr>
<tr><td>-X</td><td>Enables X11 forwarding</td></tr>
<tr><td>-x</td><td>Disable X11 forwarding</td></tr>
<tr><td>-Y</td><td>Trusted X11 forwarding</td></tr>
</tbody>
</table>


<ul>
<li id="sec-8.7.17.2.1">Text: How SSH works <br/>

<ul>
<li id="sec-8.7.17.2.1.1">Authentification <br/>

<p>
Unterstüzt SSH protocols 1 und 2 (2 ist Standart, und wird in der ssh_config</sub> eingestellt)
Both protocols support similar authentication methods, but protocol 2 is the default since it provides additional mechanisms for confidentiality (the traffic
is  encrypted  using  AES, 3DES, Blowfish, CAST128, or Arcfour) and integrity (hmac-md5, hmac-sha1, umac-64, hmac-ripemd160).
Protocol 1 lacks a strong mechanism for ensuring the integrity of the connection.
</p>
<p>
The methods available for authentication are: 
</p>
</li>
<li id="sec-8.7.17.2.1.2">GSSAPI-based authentication, <br/>

<ul>
</ul>
</li>
<li id="sec-8.7.17.2.1.3">host-based authentication, <br/>

<p>
Host-based  authentication  works as follows: If the machine the user logs in from is listed in <i>etc/hosts.equiv or /etc/ssh/shosts.equiv on the remote machine, and the user names        are the same on both sides, or if the files ~</i>.rhosts or ~/.shosts exist in the user's home directory on the remote machine and contain a line containing the name  of  the  client
machine  and the name of the user on that machine, the user is considered for login.  Additionally, the server must be able to verify the client's host key (see the description of
<i>etc/ssh/ssh_known</sub>_hosts</sub> and ~</i>.ssh/known_hosts</sub>, below) for login to be permitted.  This authentication method closes security holes due to IP spoofing, DNS spoofing, and  routing
spoofing.  [Note to the administrator: <i>etc/hosts.equiv, ~</i>.rhosts, and the rlogin/rsh protocol in general, are inherently insecure and should be disabled if security is desired.]
</p>
</li>
<li id="sec-8.7.17.2.1.4">public key authentication, <br/>


<p>
Public  key  authentication works as follows: The scheme is based on public-key cryptography, using cryptosystems where encryption and decryption are done using separate keys, and
it is unfeasible to derive the decryption key from the encryption key.  The idea is that each user creates a public/private key pair for authentication purposes.  The server knows
the public key, and only the user knows the private key.  ssh implements public key authentication protocol automatically, using one of the DSA, ECDSA or RSA algorithms.  Protocol
1 is restricted to using only RSA keys, but protocol 2 may use any.  The HISTORY section of ssl(8) contains a brief discussion of the DSA and RSA algorithms.
</p>
<p>
The file ~/.ssh/authorized_keys</sub> lists the public keys that are permitted for logging in.  When the user logs in, the ssh program tells the server which key pair it would  like  to
use for authentication.  The client proves that it has access to the private key and the server checks that the corresponding public key is authorized to accept the account.
</p>
<p>
The user creates his/her key pair by running ssh-keygen(1).  This stores the private key in ~/.ssh/identity (protocol 1), ~/.ssh/id_dsa</sub> (protocol 2 DSA), ~/.ssh/id_ecdsa</sub> (protocol
2 ECDSA), or ~/.ssh/id_rsa</sub> (protocol 2 RSA) and stores the public key in ~/.ssh/identity.pub (protocol 1), ~/.ssh/id_dsa</sub>.pub (protocol  2  DSA),  ~/.ssh/id_ecdsa</sub>.pub  (protocol  2
ECDSA),  or  ~/.ssh/id_rsa</sub>.pub  (protocol 2 RSA) in the user's home directory.  The user should then copy the public key to ~/.ssh/authorized_keys</sub> in his/her home directory on the
remote machine.  The authorized_keys</sub> file corresponds to the conventional ~/.rhosts file, and has one key per line, though the lines can be very long.  After this,  the  user  can
log in without giving the password.
</p>
<p>
A  variation  on public key authentication is available in the form of certificate authentication: instead of a set of public/private keys, signed certificates are used.  This has
the advantage that a single trusted certification authority can be used in place of many public/private keys.  See the CERTIFICATES section of ssh-keygen(1) for more information.
</p>
<p>
The most convenient way to use public key or certificate authentication may be with an authentication agent.  See ssh-agent(1) for more information.
</p>


</li>
<li id="sec-8.7.17.2.1.5">challenge-response authentication, <br/>

<p>
Challenge-response authentication works as follows: The server sends an arbitrary Qq challenge text, and prompts for  a  response.   Protocol  2  allows  multiple  challenges  and
responses;  protocol  1  is  restricted to just one challenge/response.  Examples of challenge-response authentication include BSD Authentication (see login.conf(5)) and PAM (some
non-OpenBSD systems).
</p>
</li>
<li id="sec-8.7.17.2.1.6">password authentication. <br/>

<p>
Finally, if other authentication methods fail, ssh prompts the user for a password.  The password is sent to the remote host for checking; however, since  all  communications  are
encrypted, the password cannot be seen by someone listening on the network.
</p>
</li>
<li id="sec-8.7.17.2.1.7">Allgemein <br/>

<p>
Authentication methods are tried in the order specified above, though protocol 2 has a configuration option to change the default order: PreferredAuthentications.
</p>
<p>
ssh  automatically  maintains  and  checks a database containing identification for all hosts it has ever been used with.  Host keys are stored in ~/.ssh/known_hosts</sub> in the user's
home directory.  Additionally, the file /etc/ssh/ssh_known</sub>_hosts</sub> is automatically checked for known hosts.  Any new hosts are automatically added to the user's file.  If a  host's
identification  ever  changes,  ssh warns about this and disables password authentication to prevent server spoofing or man-in-the-middle attacks, which could otherwise be used to
circumvent the encryption.  The StrictHostKeyChecking option can be used to control logins to machines whose host key is not known or has changed.
</p>
<p>
When the user's identity has been accepted by the server, the server either executes the given command, or logs into the machine and gives the user a normal shell  on  the  remote
machine.  All communication with the remote command or shell will be automatically encrypted.
</p>
<p>
If a pseudo-terminal has been allocated (normal login session), the user may use the escape characters noted below.
</p>
<p>
If  no  pseudo-tty has been allocated, the session is transparent and can be used to reliably transfer binary data.  On most systems, setting the escape character to ``none'' will
also make the session transparent even if a tty is used.
</p>
<p>
The session terminates when the command or shell on the remote machine exits and all X11 and TCP connections have been closed.
</p>

<p>
No Time, nicht notwendig&hellip;
</p></li>
</ul>
</li>
</ul>
</li>
</ul>
</div>

</div>

<div id="outline-container-8.7.18" class="outline-4">
<h4 id="sec-8.7.18"><span class="section-number-4">8.7.18</span> <span class="done DONE"> DONE</span> strace </h4>
<div class="outline-text-4" id="text-8.7.18">


<p>
strace -o logfile ssh or any other command
</p>
</div>
</div>

</div>

<div id="outline-container-8.8" class="outline-3">
<h3 id="sec-8.8"><span class="section-number-3">8.8</span> Linux Einstellungen </h3>
<div class="outline-text-3" id="text-8.8">


</div>

<div id="outline-container-8.8.1" class="outline-4">
<h4 id="sec-8.8.1"><span class="section-number-4">8.8.1</span> Proxy Einrichten </h4>
<div class="outline-text-4" id="text-8.8.1">


<p>
Es kann der Netzwerkmanager von Gnome benutzt werden.
Oder einfach eine Umgebungsvariable gesetzt werden:
</p>
<p>
export http_proxy</sub>='http://user:passwort@proxy-server.org:port'
export ftp_proxy</sub>='ftp://user:passwort@proxy-server.org:port'
export no_proxy</sub>='http://user:passwort@proxy-server.org:port'
</p>
<p>
oder bei anderen Distributionen:
</p>
<p>
setenv http_proxy</sub> 'http://user:passwort@proxy-server.org:port'
</p>
<p>
oder: 
</p>
<p>
EXPORT HTTP_PROXY</sub> 'http://user:passwort@proxy-server.org:port'
</p>

<p>
DAUERHAFT
</p>
<p>
Füge die Zeilen der /etc/profile.d hinzu dann geht es für alle user und shells!
</p>
</div>
</div>
</div>

</div>

<div id="outline-container-9" class="outline-2">
<h2 id="sec-9"><span class="section-number-2">9</span> WEB! </h2>
<div class="outline-text-2" id="text-9">


</div>

<div id="outline-container-9.1" class="outline-3">
<h3 id="sec-9.1"><span class="section-number-3">9.1</span> .htaccess </h3>
<div class="outline-text-3" id="text-9.1">


<p>
DVS Sample Configuration for simple User Auth
</p>
<p>
.htaccess:
</p>
<p>
AuthType       Basic
AuthName       "Reparatur Statistic Online"
AuthUserFile   <i>var/www/crimi</i>.htusers
Require        users
</p>
<p>
.htusers
</p>
<p>
admin::7Z7Tv3JEXwKBk
</p>
<p>
To add new users you need the .htaccess command for it!
It will add Require Users you enter.
</p>
</div>

</div>

<div id="outline-container-9.2" class="outline-3">
<h3 id="sec-9.2"><span class="section-number-3">9.2</span> vhost - Laravel </h3>
<div class="outline-text-3" id="text-9.2">


</div>

<div id="outline-container-9.2.1" class="outline-4">
<h4 id="sec-9.2.1"><span class="section-number-4">9.2.1</span> Add Virtual Host </h4>
<div class="outline-text-4" id="text-9.2.1">


<p>
First, if you are using Laravel 3 make sure that you have updated /application/config/application.php and made the "application index" var to a null value, like "". <a href="https://github.com/laravel/laravel/blob/master/application/config/application.php#L42">https://github.com/laravel/laravel/blob/master/application/config/application.php#L42</a>
</p>
<p>
If you've already done that, try setting up a vhost. It sounds like you are using Apache 2.
</p>
<p>
First create an additional vhosts file, for example /etc/apache2/sites-available/laravel
</p>
<p>
&lt;VirtualHost *:80&gt;
ServerAdmin webmaster@localhost
ServerName laravel.dev
ServerAlias *.laravel.dev
DocumentRoot /home/kriss/projects/laravel/public
&lt;/VirtualHost&gt;
</p>
<p>
Then update your /etc/hosts file and add
</p>
<p>
127.0.0.1 laravel.dev
</p>
<p>
Then (and this may be the step you missed before)
</p>
<p>
sudo a2ensite laravel
</p>
<p>
This will make a sim link in /etc/apache2/sites-enabled to your vhost config file. Finally restart your server:
</p>
<p>
sudo service apache2 restart
</p>
<p>
You should be able to connect with the url <a href="http://laravel.dev">http://laravel.dev</a>, and your rewrites should be working.
</p>
</div>

</div>

<div id="outline-container-9.2.2" class="outline-4">
<h4 id="sec-9.2.2"><span class="section-number-4">9.2.2</span> Another way to add VHost </h4>
<div class="outline-text-4" id="text-9.2.2">


<p>
Here is what I usually do when creating a project in Ubuntu.
</p>
<ol>
<li>
Create directory
sudo mkdir /var/www/site1.com

</li>
<li>
Change ownership (mainly for Samba file sharing purposes)
sudo chown -R username:username /var/www/site1.com

</li>
<li>
Create VirtualHosts
cd /etc/apache2/sites-available

<p>
sudo vi site1.com
&lt;VirtualHost *:80&gt;
ServerAdmin username@gmail.com
DocumentRoot /var/www/site1.com/public
ServerName www.site1.com
ServerAlias site1.com
&lt;/VirtualHost&gt;
</p>
</li>
<li>
Enable site1.com
sudo a2ensite site1.com

</li>
<li>
Restart Apache
sudo service apache2 restart

<p>
Drop the Laravel files into the /var/www/site1.com folder. 
You will need to do the following for Laravel to work properly with Ubuntu 12.04&hellip;
</p>
</li>
<li>
Install prerequisites (Mcrypt is required for Laravel and Rewrite is for getting your VirtualHost file to work properly)
sudo apt-get install php5-mcrypt
sudo a2enmod rewrite 

</li>
<li>
Change permissions of the storage folder
sudo chmod R -777 /var/www/site1.com/storage

</li>
<li>
Restart Apache
sudo service apache2 restart

<p>
That should be it! You should now see the Laravel page!
</p>
</li>
</ol>
</div>

</div>

<div id="outline-container-9.2.3" class="outline-4">
<h4 id="sec-9.2.3"><span class="section-number-4">9.2.3</span> Laravel in subdirectory .htaccess </h4>
<div class="outline-text-4" id="text-9.2.3">


<p>
I add only the Option -MultiViews to existent .htaccess file in public folder!
</p>
<p>
&lt;IfModule mod_rewrite</sub>.c&gt;
Options -MultiViews
RewriteEngine On
RewriteBase /l4
RewriteCond %{REQUEST_FILENAME</sub>} !-f
RewriteRule ^ index.php [L]
&lt;/IfModule&gt;
</p>
</div>
</div>
</div>

</div>

<div id="outline-container-10" class="outline-2">
<h2 id="sec-10"><span class="section-number-2">10</span> &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </h2>
<div class="outline-text-2" id="text-10">

</div>

</div>

<div id="outline-container-11" class="outline-2">
<h2 id="sec-11"><span class="section-number-2">11</span> Projekte </h2>
<div class="outline-text-2" id="text-11">

</div>

</div>

<div id="outline-container-12" class="outline-2">
<h2 id="sec-12"><span class="section-number-2">12</span> </h2>
<div class="outline-text-2" id="text-12">

</div>

</div>

<div id="outline-container-13" class="outline-2">
<h2 id="sec-13"><span class="section-number-2">13</span> RIP    24/7  Server LimeBlack.de -&gt; PoisonNet !! AriOS  !! ( 192.168.0.105 ) [13/16] [81%] </h2>
<div class="outline-text-2" id="text-13">


</div>

<div id="outline-container-13.1" class="outline-3">
<h3 id="sec-13.1"><span class="section-number-3">13.1</span> <span class="done DONE"> DONE</span> Alias </h3>
<div class="outline-text-3" id="text-13.1">


<p>
alias as='aptitude search'
alias ag='apt-get'
alias cem='emacs -bg black -fg cyan -cr red'
</p>
<p>
tanis router .. root // 123456
</p>
</div>

</div>

<div id="outline-container-13.2" class="outline-3">
<h3 id="sec-13.2"><span class="section-number-3">13.2</span> <span class="done DONE"> DONE</span> Backup [2/2] [100%] </h3>
<div class="outline-text-3" id="text-13.2">


</div>

<div id="outline-container-13.2.1" class="outline-4">
<h4 id="sec-13.2.1"><span class="section-number-4">13.2.1</span> <span class="done DONE"> DONE</span> Crontab </h4>
<div class="outline-text-4" id="text-13.2.1">


<p>
Die einzelnen Einträge werden weiter unten dargestellt!
</p>
<p>
Backup ist gültig für:
</p>
<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Dienst</th><th scope="col">Zeitraum</th></tr>
</thead>
<tbody>
<tr><td>MySQL</td><td>jeden Tag, 2:30</td></tr>
<tr><td>BackupScript</td><td>Jede Woche, 0:06</td></tr>
</tbody>
</table>


<p>
30 2 * * * /usr/bin/mysqldump -uroot -p!!!!SERCRET!!!! &ndash;opt &ndash;all-databases &gt; /opt/backup/sql/sql_`date</sub> +"%d"-"%m"-"%y"`
</p>
<p>
6 0 * * 2 /opt/backup/backup.sh
</p>
</div>

</div>

<div id="outline-container-13.2.2" class="outline-4">
<h4 id="sec-13.2.2"><span class="section-number-4">13.2.2</span> <span class="done DONE"> DONE</span> Backupscript </h4>
<div class="outline-text-4" id="text-13.2.2">


<p>
Zu finden unter /opt/backup/backup.sh
</p>
</div>
</div>

</div>

<div id="outline-container-13.3" class="outline-3">
<h3 id="sec-13.3"><span class="section-number-3">13.3</span> <span class="done DONE"> DONE</span> Systemstart [2/2] [100%] </h3>
<div class="outline-text-3" id="text-13.3">


</div>

<div id="outline-container-13.3.1" class="outline-4">
<h4 id="sec-13.3.1"><span class="section-number-4">13.3.1</span> <span class="done DONE"> DONE</span> Init.d </h4>
<div class="outline-text-4" id="text-13.3.1">


<p>
Apache:    /etc/init.d/apache
MySQL:     /etc/init.d/mysql
TeamSpeak: /etc/init.d/teamspeak
Etherpad:  /etc/init.d/etherpad-lite
StartServices: /etc/init.d/local
</p></div>

</div>

<div id="outline-container-13.3.2" class="outline-4">
<h4 id="sec-13.3.2"><span class="section-number-4">13.3.2</span> <span class="done DONE"> DONE</span> StartServices </h4>
<div class="outline-text-4" id="text-13.3.2">


<p>
Script unter: <i>root/autorun</i>
</p>
<p>
sleep 5
screen -m -S bukkit -t bukkit -d sh /root/autorun/bukkit.sh
</p>

</div>
</div>

</div>

<div id="outline-container-13.4" class="outline-3">
<h3 id="sec-13.4"><span class="section-number-3">13.4</span> <span class="done STOPPED"> STOPPED</span> Bukkit [3/7] </h3>
<div class="outline-text-3" id="text-13.4">


<p>
InitScript befindet sich in /root/autorun/StartScript.sh
</p>
<p>
Aktuelle Version: 1.2.5
World: Reichi Island // Wird bald eine Custom-Map
</p>
<p>
Port: 25565 / Standart
Link: avicra.dyndns.org
</p>
<p>
BukkitConsole: root@local# screen -r bukkit
</p>
<p>
Plugins:   <i>opt/craftbukkit/plugins</i>
</p>
<p>
Files: <i>opt/craftbukkit</i>
Backup: <i>opt/backup/bukkit</i> 
BackupScript: /opt/backup/backup.sh 
</p>

</div>

<div id="outline-container-13.4.1" class="outline-4">
<h4 id="sec-13.4.1"><span class="section-number-4">13.4.1</span> <span class="done DONE"> DONE</span> WRStone </h4>
<div class="outline-text-4" id="text-13.4.1">


<p>
!! Zurzeit nicht installiert, wird dringend benötigt!!
</p>
<ul>
<li>
WRedStone     / Wlan Redstone per Schild!
</li>
<li>
Link          <a href="http://dev.bukkit.org/server-mods/wstone/">http://dev.bukkit.org/server-mods/wstone/</a>

</li>
</ul>

<p>Config: ./V10lator/
</p>
<p>
Commands:   write on sign!
</p>
<p>
1st Line:  [WStone]
2nd Line:  t // r       // nur transmitt oder receive!! nicht beides!
3rd Line:  name         // Muss mit PlayerNamen beginnen z.B. dc_dor1</sub>
</p>
</div>

</div>

<div id="outline-container-13.4.2" class="outline-4">
<h4 id="sec-13.4.2"><span class="section-number-4">13.4.2</span> <span class="todo TODO"> TODO</span> [#No Solution found!] MobileAdmin - doesnt works </h4>
<div class="outline-text-4" id="text-13.4.2">


<ul>
<li>
MobileAdmin
Config:       ./MobileAdmin/
User_Admin</sub>:   root // LimeBlack        &lt;- username // password
User:         user // password         &lt;- FOR REAL!
Port:         5839

</li>
</ul>
</div>

</div>

<div id="outline-container-13.4.3" class="outline-4">
<h4 id="sec-13.4.3"><span class="section-number-4">13.4.3</span> <span class="done DONE"> DONE</span> Dynmap </h4>
<div class="outline-text-4" id="text-13.4.3">


<ul>
<li>
DynMap        / HTTP Map Viewer of Bukkit's MultiPlayer World 
Link:         <a href="http://avicra.dyndns.org:8123/">http://avicra.dyndns.org:8123/</a>
Config:       ./dynmap/
Render cmd:   root@bukkit# dynmap fullrender world  &lt;- in minecraft console!
Port:         8123
Edit_config</sub>:  added -&gt; "webserver-bindadress 192.168.0.105" to ./dynmap/configuration.txt

</li>
</ul>

<p>!! Error: Port 8123 wird schon verwendet o.O
</p>
<p>
Entweder auf anderen ausweichen oder Lösung finden!
</p>
</div>

</div>

<div id="outline-container-13.4.4" class="outline-4">
<h4 id="sec-13.4.4"><span class="section-number-4">13.4.4</span> <span class="done DONE"> DONE</span> VoxelSniper </h4>
<div class="outline-text-4" id="text-13.4.4">


<ul>
<li>
VoxelSniper   / World Editor!
config:       ./VoxelSniper/
user:         LimeBlack
stockbrot

</li>
</ul>
</div>

</div>

<div id="outline-container-13.4.5" class="outline-4">
<h4 id="sec-13.4.5"><span class="section-number-4">13.4.5</span> <span class="todo TODO"> TODO</span> Basics V1 </h4>
<div class="outline-text-4" id="text-13.4.5">


<ul>
<li>
Basics V1     / Commands for Minecraft
Source:       <a href="http://forums.bukkit.org/threads/admn-basics-v1-basic-admin-commands-803.12275/">http://forums.bukkit.org/threads/admn-basics-v1-basic-admin-commands-803.12275/</a>

<p>
All commands are op only(when more are added ones in red are op only)
</p>
<p>
/time   [day/night]         - changes the time between day and night
/tphere [playername]        - teleports a player to you
/tp     [player1] [player2] - tps player2 to player1
/i      [id] [amount]       - gives items to the player
/item   [id] [amount]       - gives items to the player
/god                        - toggles god mode
/kill   [playername]        - kills the player named DOES NOT DROP ITEMS
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-13.4.6" class="outline-4">
<h4 id="sec-13.4.6"><span class="section-number-4">13.4.6</span> <span class="todo TODO"> TODO</span> MobAmbush </h4>
<div class="outline-text-4" id="text-13.4.6">


<ul>
<li>
MobAmbush     / Spawn Mobs behind Players
</li>
<li>
Plugin-Link:  <a href="http://dev.bukkit.org/server-mods/mobambush/">http://dev.bukkit.org/server-mods/mobambush/</a>

</li>
</ul>

<p>Commands:
</p>
<p>
/ambush (mob) (player) (amount) - Spawns the given mob(s) behind the player
/ambush (mob) all (amount)      - Spawns the mob(s) behind ever player.
/ambush reload                  - Reloads the config.
</p>
</div>

</div>

<div id="outline-container-13.4.7" class="outline-4">
<h4 id="sec-13.4.7"><span class="section-number-4">13.4.7</span> <span class="todo TODO"> TODO</span> CityGuard </h4>
<div class="outline-text-4" id="text-13.4.7">


<ul>
<li>
CityGuard     / A Body Guard against Creeper!
Link:         <a href="http://dev.bukkit.org/server-mods/cityguard/">http://dev.bukkit.org/server-mods/cityguard/</a>

</li>
</ul>

<p>Commands:
</p>
<p>
/guard create (CreatureType) Create a new guard.
/guard sethorizontal 
/guard setvertical (size)Set the watch size.
/guard setdamage (damage)Set the damage multiplier.
/guard setinvincible (true/false)Set if the guard is invincible.
/guard settime (day/night/all)Set the time the guard is active.
/guard setname (name)Name your guard.
/guard moveMove the guard to the position you are looking at.
/guard deleteDelete the guard.
/guard adminhelpShow admin commands.
</p>
<p>
Admin commands:
</p>
<p>
/guard debugToggle debug mode.
/guard saveconfigSave the config to the file.
/guard reloadconfigReload the config from the file.
</p>
</div>
</div>

</div>

<div id="outline-container-13.5" class="outline-3">
<h3 id="sec-13.5"><span class="section-number-3">13.5</span> <span class="done DONE"> DONE</span> AppInventor &ndash;Edit plz! xD&hellip;im high! </h3>
<div class="outline-text-3" id="text-13.5">


<p>
GoogleEngine Java -&gt; /opt/appengine-java-sdk-1.6.1.1
Start: - Go to AppInventor Dir!
</p><ul>
<li>
run GoogleEngine
</li>
</ul>

<p>AdministratorLink: <a href="http://localhost:8888/_ah/admin">http://localhost:8888/_ah/admin</a>
AppInventor -&gt; /opt/app-inventor-releases
Start: - # ant RunLocalBuildServer
Get Access to Appinventor: localhost:8888
Added to Init.d Script /etc/init.d/local
Added screen access: "engine", "inventor"
need to build an APP !!!
</p></div>

</div>

<div id="outline-container-13.6" class="outline-3">
<h3 id="sec-13.6"><span class="section-number-3">13.6</span> <span class="done DONE"> DONE</span> VNC </h3>
<div class="outline-text-3" id="text-13.6">


<p>
root // stdVncPW
</p>
<p>
view-only  //  EasyPW
</p>
<p>
New 'X' desktop is PoisonNet:1
</p>
<p>
Creating default startup script <i>root</i>.vnc/xstartup
Starting applications specified in <i>root</i>.vnc/xstartup
Log file is <i>root</i>.vnc/PoisonNet:1.log
</p>

<p>
Accessable via PortForwaring via SSH!!!
</p>
</div>

</div>

<div id="outline-container-13.7" class="outline-3">
<h3 id="sec-13.7"><span class="section-number-3">13.7</span> <span class="todo TODO"> TODO</span> SSH </h3>
<div class="outline-text-3" id="text-13.7">


<p>
Initscript: /etc/init.d/ssh
</p>
<p>
Link:  avicra.dyndns.org
Port:  50505
Confg: /etc/ssh/sshd_config</sub>
</p>
<p>
!!  No RSA Key enabled
PermitRootLogin: No
</p>
<p>
Users:
</p>
<ul>
<li>
root // stdRoot
</li>
<li>
poisonweed // std
</li>
<li>
schorsch // stockbrot

</li>
</ul>
</div>

</div>

<div id="outline-container-13.8" class="outline-3">
<h3 id="sec-13.8"><span class="section-number-3">13.8</span> <span class="done DONE"> DONE</span> NodeJS </h3>
<div class="outline-text-3" id="text-13.8">


<p>
Install with following comands:
</p>
<ul>
<li>
git clone git://github.com/ry/node.git
</li>
<li>
cd node
</li>
<li>
./configure
</li>
<li>
make
</li>
<li>
make install

</li>
</ul>

<p>HowTo @ <a href="http://howtonode.org/how-to-install-nodejs">http://howtonode.org/how-to-install-nodejs</a>
</p>
</div>

</div>

<div id="outline-container-13.9" class="outline-3">
<h3 id="sec-13.9"><span class="section-number-3">13.9</span> <span class="done DONE"> DONE</span> Webmin </h3>
<div class="outline-text-3" id="text-13.9">


<p>
Installiert mit folgenden Befehlen:
</p>
<ul>
<li>
wget <a href="http://downloads.sourceforge.net/project/webadmin/webmin/1.570/webmin_1.570_all.deb?use_mirror=voxel">http://downloads.sourceforge.net/project/webadmin/webmin/1.570/webmin_1.570_all.deb?use_mirror=voxel</a>
</li>
<li>
mv webmin_1</sub>.570_all</sub>.deb\?use_mirror</sub>=voxel webmin_1</sub>.570_all</sub>.deb &amp;&amp; dpkg -i webmin_1</sub>.570_all</sub>.deb

</li>
</ul>

<p>Geupdated auf Version: 1.580!
</p>
<p>
Erreichbar unter:
</p>
<ul>
<li>
<a href="http://localhost:10000/">http://localhost:10000/</a>

<p>
Aus der ferne nur mittels SSH Port-Forwarding zu erreichen!!
</p>
</li>
</ul>

<p>Benutzer:
</p>
<ul>
<li>
System-Benutzer

</li>
</ul>
</div>

</div>

<div id="outline-container-13.10" class="outline-3">
<h3 id="sec-13.10"><span class="section-number-3">13.10</span> <span class="done DONE"> DONE</span> Redmine </h3>
<div class="outline-text-3" id="text-13.10">


<p>
Installiert mit folgenden Befehlen:
</p>
<ul>
<li>
apt-get install redmine redmine-mysql

</li>
</ul>

<p>Und folgendermaßen konfiguriert:
</p>
<p>
ln -s /usr/share/redmine/public /var/www/redmine
chown -R www-data:www-data /var/www/redmine
echo "RailsBaseURI /redmine" &gt; /etc/apache2/sites-available/redmine
a2ensite redmine
/etc/init.d/apache2 reload
/etc/init.d/apache2 restart
</p>
<p>
Redmine ist nun erreichbar unter:
</p>
<ul>
<li>
<a href="http://avicra.dyndns.org/redmine">http://avicra.dyndns.org/redmine</a>

</li>
</ul>

<p>User ist:
</p>
<ul>
<li>
admin // Stdr3dPW

</li>
</ul>

<p>Anleitung unter: 
</p>
<ul>
<li>
<a href="http://www.redmine.org/projects/redmine/wiki/HowTo_Install_Redmine_using_Debian_package">http://www.redmine.org/projects/redmine/wiki/HowTo_Install_Redmine_using_Debian_package</a>

</li>
</ul>
</div>

</div>

<div id="outline-container-13.11" class="outline-3">
<h3 id="sec-13.11"><span class="section-number-3">13.11</span> <span class="done DONE"> DONE</span> Maqetta </h3>
<div class="outline-text-3" id="text-13.11">


<p>
InitScript:  /opt/maqetta/maqetta.server.unix.sh &lt;- /root/autorun/StartScript.sh &lt;- /etc/init.d/local
! Zurzeit deaktiviert in StartScript.sh
</p>
<p>
Port: 50000
</p>
<p>
Files: /opt/maqetta
Link: <a href="http://avicra.dyndns.org:50000/maqetta">http://avicra.dyndns.org:50000/maqetta</a>
User: LimeBlack // EasyPW
</p>
</div>

</div>

<div id="outline-container-13.12" class="outline-3">
<h3 id="sec-13.12"><span class="section-number-3">13.12</span> <span class="done DONE"> DONE</span> Etherpad [2/2] </h3>
<div class="outline-text-3" id="text-13.12">


<p>
Initscript: /etc/init.d/etherpad
Version Etherpad_Lite</sub>
</p>
<p>
Files: /opt/etherpad
User: etherpad-lite
Port: 9001
Link: <a href="http://avicra.dyndns.org:9001/">http://avicra.dyndns.org:9001/</a>
</p>

</div>

<div id="outline-container-13.12.1" class="outline-4">
<h4 id="sec-13.12.1"><span class="section-number-4">13.12.1</span> <span class="done DONE"> DONE</span> Install Log </h4>
<div class="outline-text-4" id="text-13.12.1">


<p>
logs unter /opt/etherpad/log/etherpad.log
neuer User:  useradd &ndash;system -g etherpad-lite -s /bin/bash etherpad-lite
neues Init.d Script: /etc/init.d/etherpad-lite
Nach folgender Anleitung:
<a href="https://github.com/Pita/etherpad-lite">https://github.com/Pita/etherpad-lite</a>
und Teile hierraus benutzt:
<a href="http://sis.bthstudent.se/2011/525/how-to-install-etherpad-on-debian-lenny/">http://sis.bthstudent.se/2011/525/how-to-install-etherpad-on-debian-lenny/</a>
Automatischer Start hizugefuegt: update-rc.d etherpad-lite defaults
Nach folgender Anleitung:
<a href="https://github.com/Pita/etherpad-lite/wiki/How-to-deploy-Etherpad-Lite-as-a-service">https://github.com/Pita/etherpad-lite/wiki/How-to-deploy-Etherpad-Lite-as-a-service</a>
Config bedeutung von Etherpad:
<a href="http://mclear.co.uk/2011/02/01/getting-to-know-etherpad-local-properties/">http://mclear.co.uk/2011/02/01/getting-to-know-etherpad-local-properties/</a>
Etherpad Lite benutzt den Port 9001 -&gt; freigegeben im Router!
</p>
<p>
node.js von <a href="http://nodejs.org/#download">http://nodejs.org/#download</a> runtergeladen 
und mit ./configure &amp;&amp; make &amp;&amp; make install     kompiliert!
Installieren fehlender Packete: apt-get install gzip git-core curl python libssl-dev build-essential
Runterladen und entpacken von Etherpad Lite via GIT: git clone 'git://github.com/Pita/etherpad-lite.git'
InstallDeps.sh ausf\FChren
und mit bin/run.sh den etherpad Server ausf\FChren.
</p>
</div>

</div>

<div id="outline-container-13.12.2" class="outline-4">
<h4 id="sec-13.12.2"><span class="section-number-4">13.12.2</span> <span class="done DONE"> DONE</span> Froxlor &ndash; Edit!! </h4>
<div class="outline-text-4" id="text-13.12.2">


<p>
-&gt; User created 'frox' with PW 'lorfrox';
</p>
<p>
Change config (opt/craftbukkit/plugins/dynmap/configuration.txt)
added -&gt; webserver-bindadress 192.168.0.105
</p>
<p>
Nach folgender Anleitung:
<a href="http://redmine.froxlor.org/projects/froxlor/wiki/Installation_via_APT_">http://redmine.froxlor.org/projects/froxlor/wiki/Installation_via_APT_</a>(Debian)
Erreichbar unter <a href="http://localhost/froxlor">http://localhost/froxlor</a>
! Bei einrichtung kommt ein MySQL-Suhosin Error
Loesung: <a href="http://192.168.0.105/phpmyadmin/Documentation.html#faq1_38">http://192.168.0.105/phpmyadmin/Documentation.html#faq1_38</a>
Aber wo stellt man sowas ein? - PHP.ini? -&gt; /etc/php ?       &lt;&ndash; noch nicht probiert!
Siehe ganz oben: <a href="http://www.hardened-php.net/suhosin/configuration.html#suhosin.request.max_vars">http://www.hardened-php.net/suhosin/configuration.html#suhosin.request.max_vars</a>
</p></div>
</div>

</div>

<div id="outline-container-13.13" class="outline-3">
<h3 id="sec-13.13"><span class="section-number-3">13.13</span> <span class="done DONE"> DONE</span> MySQL, PHP5, PHPMyAdmin, Apache - install [4/4] </h3>
<div class="outline-text-3" id="text-13.13">


</div>

<div id="outline-container-13.13.1" class="outline-4">
<h4 id="sec-13.13.1"><span class="section-number-4">13.13.1</span> <span class="done DONE"> DONE</span> Apache </h4>
<div class="outline-text-4" id="text-13.13.1">


<p>
Installiert wurden Apache2, PhP5 und MySQL nach folgender Anleitungam 28.12.11:
<a href="http://www.howtoforge.com/ubuntu_lamp_for_newbies">http://www.howtoforge.com/ubuntu_lamp_for_newbies</a>
</p>
<p>
HT-Docs: <i>var/www</i>
Apache per Init.d steuerbar
</p>
</div>

</div>

<div id="outline-container-13.13.2" class="outline-4">
<h4 id="sec-13.13.2"><span class="section-number-4">13.13.2</span> Projekte </h4>
<div class="outline-text-4" id="text-13.13.2">

<ul>
<li id="sec-13.13.2.1">/var/www/cards <br/>

<p>
DVS Reparaturstatistic!
</p>
<p>
Link: <a href="http://avicra.dyndns.org/cards">http://avicra.dyndns.org/cards</a>
</p>
<p>
Login_Site</sub>: crimi // qwert
</p>
<p>
MySQL DB:  card
MySQL DB2: test
</p>
</li>
<li id="sec-13.13.2.2">/var/www/drupal6 <br/>

<p>
Drupal6
</p>
<p>
Enabled Theme: <a href="http://drupal.org/project/colourise">http://drupal.org/project/colourise</a>
</p>
<ul>
<li id="sec-13.13.2.2.1">Plugins <br/>
<ul>
<li id="sec-13.13.2.2.1.1">Pathauto -gen Clean URLs <br/>

<p>
Infos: <a href="http://drupal.org/project/pathauto">http://drupal.org/project/pathauto</a>
</p>
<p>
Desription:
</p>
<p>
The Pathauto module automatically generates URL/path aliases for various kinds of content (nodes, taxonomy terms, users) 
without requiring the user to manually specify the path alias. This allows you to have URL aliases like /category/my-node-title 
instead of /node/123. The aliases are based upon a "pattern" system that uses tokens which the administrator can change.
</p>
</li>
<li id="sec-13.13.2.2.1.2">Token -req by PathAuto <br/>

<p>
Infos: <a href="http://drupal.org/project/token">http://drupal.org/project/token</a>
</p>
<p>
Description:
</p>
<p>
Tokens are small bits of text that can be placed into larger documents via simple placeholders, 
like %site-name or [user]. The Token module provides a central API for modules to use these tokens, and expose their own token values.
Note that Token module doesn't provide any visible functions to the user on its own, it just provides token handling services for other modules.
For Drupal 6, the Token module provides a "Token Actions" module which can be enabled separately. 
This provides several "actions" for the Drupal core Actions/Trigger modules to use that take advantage of the Token replacement functionality.
Modules that use the Token module and provide tokens via the API include Organic Groups, Pathauto, Comment Notify, and Commerce. 
Also check out the full list of modules that use or provide tokens or the list of open issues tagged with 'token'.
Report any problems you find so that we can release a stable version.
Token is co-maintained by eaton and davereid. It was previously co-maintained by greggles.
</p>
<p>
#D7CX: The basic token API is now a part of Drupal 7! Unfortunately, other things like the a browsable token UI, 
and field &amp; profile tokens did not make it into core and will be supported here for Drupal 7.
</p>
<p>
#D7AX - I pledge to make this module as accessible as it can be. If you find any flaws, please submit an issue and tag it D7AX. Help me fix them if you can.
</p>
</li>
<li id="sec-13.13.2.2.1.3">CKEditor -WYSIWYG Editor for Add.NewContent <br/>

<p>
Infos: <a href="http://drupal.org/project/ckeditor">http://drupal.org/project/ckeditor</a>
</p>
<p>
Description: 
</p>
<p>
This module will allow Drupal to replace textarea fields with the CKEditor - a visual HTML editor, sometimes called WYSIWYG editor. 
This HTML text editor brings many of the powerful WYSIWYG editing functions of known desktop editors like Word to the web. 
It's very fast and doesn't require any kind of installation on the client computer.
</p>
</li>
</ul>
</li>
<li id="sec-13.13.2.2.2">Config <br/>

<ul>
<li>
Added CleanURL

</li>
</ul>

<p>.htaccess
</p>
<p>
added "RewriteBase /drupal6"
</p>
<p>
settings.php
</p>
<p>
added "$base_url</sub> = 'http://localhost/drupal6';"
</p></li>
</ul>
</li>
</ul>
</div>

</div>

<div id="outline-container-13.13.3" class="outline-4">
<h4 id="sec-13.13.3"><span class="section-number-4">13.13.3</span> Added Clean URL </h4>
<div class="outline-text-4" id="text-13.13.3">


<p>
Infos: <a href="http://www.lavluda.com/2007/07/15/how-to-enable-mod_rewrite-in-apache22-debian/">http://www.lavluda.com/2007/07/15/how-to-enable-mod_rewrite-in-apache22-debian/</a> 
</p>
<p>
Ensure that mod_rewrite</sub> is enabled for Apache 2:
</p>
<p>
root@srv# a2enmod rewrite
</p>
<p>
Edit Apache 2 configuration to allow Drupal's .htaccess file to be used. In file <i>etc/apache2/sites-enabled/000-default, inside the tag Directory /var/www</i>, replace the line
</p>
<p>
AllowOverride none
</p>
<p>
with
</p>
<p>
AllowOverride All
</p>
<p>
Restart Apache 2:
</p>
<p>
root@srv# /etc/init.d/apache2 restart
</p>
</div>

</div>

<div id="outline-container-13.13.4" class="outline-4">
<h4 id="sec-13.13.4"><span class="section-number-4">13.13.4</span> Solved ERROR 28.12.11 : </h4>
<div class="outline-text-4" id="text-13.13.4">

<ul>
<li id="sec-13.13.4.1">Could not determine FQDN!! - Apache2 <br/>
Fix: Added following line to /etc/apache2/httpd.conf :
ServerName      LimeLack.de

</li>
</ul>
</div>

</div>

<div id="outline-container-13.13.5" class="outline-4">
<h4 id="sec-13.13.5"><span class="section-number-4">13.13.5</span> <span class="done DONE"> DONE</span> PHP </h4>
<div class="outline-text-4" id="text-13.13.5">


<p>
PHP5 wurde mit Apache installiert.
PHP5 test mit PHP-Info() hat geklappt! 
</p>
</div>

</div>

<div id="outline-container-13.13.6" class="outline-4">
<h4 id="sec-13.13.6"><span class="section-number-4">13.13.6</span> <span class="done DONE"> DONE</span> MySQL </h4>
<div class="outline-text-4" id="text-13.13.6">


<p>
MySQL auf IP 192.168.0.105 gebinded! Gelinkt!
MySQL User: root // StdSQL
</p>
</div>

</div>

<div id="outline-container-13.13.7" class="outline-4">
<h4 id="sec-13.13.7"><span class="section-number-4">13.13.7</span> <span class="done DONE"> DONE</span> PHPMyAdmin </h4>
<div class="outline-text-4" id="text-13.13.7">


<p>
PHPMyAdmin wurde installiert!
</p>
<p>
PHPMyAdmin User: root // StdSQL
Link_Local</sub>:  <a href="http://localhost/PHPMyAdmin">http://localhost/PHPMyAdmin</a>
Link_Global</sub>: <a href="http:avicra.dyndns.org/PHPMyAdmin">http:avicra.dyndns.org/PHPMyAdmin</a>
</p>
</div>
</div>

</div>

<div id="outline-container-13.14" class="outline-3">
<h3 id="sec-13.14"><span class="section-number-3">13.14</span> <span class="todo TODO"> TODO</span> TeamSpeak </h3>
<div class="outline-text-3" id="text-13.14">


<p>
!! Server starts, but cannot connect!
</p>
<p>
InitScript befindet sich in /etc/init.d/teamspeak
</p>
<p>
Aktuelle Version: 3
</p>
<p>
Port:  tcp_30033</sub> // tcp_10011</sub> // udp_9987</sub> 
Link:  avicra.dyndns.org
Files: <i>opt/ts3</i>
user:  teamspeak // no_passwd</sub>
</p>
<p>
not backup, cause no data!
</p>
</div>

</div>

<div id="outline-container-13.15" class="outline-3">
<h3 id="sec-13.15"><span class="section-number-3">13.15</span> <span class="todo TODO"> TODO</span> Google Music </h3>
<div class="outline-text-3" id="text-13.15">


<p>
Wurde installiert und soll zum hochladen von MusicTiteln dienen, 
die dann am Handy oder über den Browser gehört werden können.
</p>
</div>

</div>

<div id="outline-container-13.16" class="outline-3">
<h3 id="sec-13.16"><span class="section-number-3">13.16</span> <span class="done DONE"> DONE</span> Changelog OUTDATED </h3>
<div class="outline-text-3" id="text-13.16">




<p>
1x every Day SQL Dump to /opt/backup/sql
1x weekly execution of Backup Script located under /opt/backup/backup.sh
</p>
<p>
Need to copy the Maps from Tanis (stored on Dropbox folder: APK)!
</p>
<p>
GoogleEngine Java -&gt; /opt/appengine-java-sdk-1.6.1.1
Start: - Go to AppInventor Dir!
</p><ul>
<li>
run GoogleEngine
</li>
</ul>

<p>AdministratorLink: <a href="http://localhost:8888/_ah/admin">http://localhost:8888/_ah/admin</a>
AppInventor -&gt; /opt/app-inventor-releases
Start: - # ant RunLocalBuildServer
Get Access to Appinventor: localhost:8888
Added to Init.d Script /etc/init.d/local
Added screen access: "engine", "inventor"
</p>
<p>
Change config (opt/craftbukkit/plugins/dynmap/configuration.txt)
added -&gt; webserver-bindadress 192.168.0.105
</p>
<p>
Nach folgender Anleitung:
<a href="http://redmine.froxlor.org/projects/froxlor/wiki/Installation_via_APT_">http://redmine.froxlor.org/projects/froxlor/wiki/Installation_via_APT_</a>(Debian)
Erreichbar unter <a href="http://localhost/froxlor">http://localhost/froxlor</a>
! Bei einrichtung kommt ein MySQL-Suhosin Error
Lösung: <a href="http://192.168.0.105/phpmyadmin/Documentation.html#faq1_38">http://192.168.0.105/phpmyadmin/Documentation.html#faq1_38</a>
Aber wo stellt man sowas ein? - PHP.ini? -&gt; /etc/php ?       &lt;&ndash; noch nicht probiert!
Siehe ganz oben: <a href="http://www.hardened-php.net/suhosin/configuration.html#suhosin.request.max_vars">http://www.hardened-php.net/suhosin/configuration.html#suhosin.request.max_vars</a>
</p>
<p>
-&gt; User created 'checker12' with PW 'check234';
-&gt; User created 'frox' with PW 'lorfrox';
</p>
<p>
Bukkit Minecraft Addons sind noch nicht funktionstüchtig!
</p>
<p>
Added dynmap, wstone and mobileAdmin to <i>craftbukkit/plugins</i>
MobileAdmin listen port 5839 // noch nicht freigegeben
Dynmap listen port 8123
WRedStone funktioniert!
</p>
<p>
StartMaqettaBukkit.sh content:
</p>
<p>
#!/bin/bash
sleep 5
screen -m -S bukkit -t bukkit -d sh /root/bukkit.sh
screen -m -S maqetta -t maqetta -d sh /root/maqetta.sh
</p>
<p>
Referenze for rc.local bootscripts:
<a href="http://plope.com/Members/chrism/debian_rc_local_equiv">http://plope.com/Members/chrism/debian_rc_local_equiv</a>
Or add an Init.d Script look at Etherpad installation!
An alle Benutzer verteilte Nachricht von root@PoisonNet
</p>
<p>
<a href="https://help.ubuntu.com/community/RcLocalHowto">https://help.ubuntu.com/community/RcLocalHowto</a>
</p>
<p>
Scipt: /etc/rc.local
added following line: sh /root/StartMaqettaBukkit.sh
</p>

<p>
logs unter /opt/etherpad/log/etherpad.log
neuer User:  useradd &ndash;system -g etherpad-lite -s /bin/bash etherpad-lite
neues Init.d Script: /etc/init.d/etherpad-lite
Nach folgender Anleitung:
<a href="https://github.com/Pita/etherpad-lite">https://github.com/Pita/etherpad-lite</a>
und Teile hierraus benutzt:
<a href="http://sis.bthstudent.se/2011/525/how-to-install-etherpad-on-debian-lenny/">http://sis.bthstudent.se/2011/525/how-to-install-etherpad-on-debian-lenny/</a>
Automatischer Start hizugefuegt: update-rc.d etherpad-lite defaults
Nach folgender Anleitung:
<a href="https://github.com/Pita/etherpad-lite/wiki/How-to-deploy-Etherpad-Lite-as-a-service">https://github.com/Pita/etherpad-lite/wiki/How-to-deploy-Etherpad-Lite-as-a-service</a>
Config bedeutung von Etherpad:
<a href="http://mclear.co.uk/2011/02/01/getting-to-know-etherpad-local-properties/">http://mclear.co.uk/2011/02/01/getting-to-know-etherpad-local-properties/</a>
Etherpad Lite benutzt den Port 9001 -&gt; freigegeben im Router!
</p>
<p>
node.js von <a href="http://nodejs.org/#download">http://nodejs.org/#download</a> runtergeladen 
und mit ./configure &amp;&amp; make &amp;&amp; make install     kompiliert!
Installieren fehlender Packete: apt-get install gzip git-core curl python libssl-dev build-essential
Runterladen und entpacken von Etherpad Lite via GIT: git clone 'git://github.com/Pita/etherpad-lite.git'
InstallDeps.sh ausf\FChren
und mit bin/run.sh den etherpad Server ausf\FChren.
</p>


<ul>
<li>
Scripte anpassen
</li>
<li>
Compilieren
</li>
<li>
InitScript verweißt auf /usr/local statt /usr/share
</li>
<li>
MySQL Datenbank hinzufügen
</li>
<li>
Apache2 darauf verlinken


</li>
</ul>

<p>Binary /opt/etherpad wieder geloescht!
Application Etherpad wieder deinstalliert!
System bekommt nach den Etherpad Installations-Versuchen
eine komplette Reinigung!
</p>
<p>
Etherpad Binarys nach /opt/etherpad kopiert.
Muss noch Compiliert werden, aber HowToSeite ist gerade Offline:
<a href="http://doc.etherpad.org/ep/tag/?query=installation">http://doc.etherpad.org/ep/tag/?query=installation</a>
</p>
<p>
Maqetta installiert am 28.12.11 bzw.
Binarys nach /opt/maqetta entpackt
Script zum starten von /opt/maqetta/maqetta.server.unix.sh angelegt fÃ¼r root
Script fÃ¼r Bukkit im root angelegt
Maqetta Zugang: 192.168.0.105:50000/maqetta
Maqetta User LimeBlack hinzugefÃ¼gt! EasyPW
</p>
<p>
Solved ERROR 28.12.11 :
Could not determine FQDN!! - Apache2
Fix: Added following line to /etc/apache2/httpd.conf :
ServerName      LimeLack.de
</p>

<p>
IP auf Manuell umgestellt: eth3 192.168.0.105/24
</p>
<p>
Installiert wurden Apache2, PhP5 und MySQL nach folgender Anleitungam 28.12.11:
<a href="http://www.howtoforge.com/ubuntu_lamp_for_newbies">http://www.howtoforge.com/ubuntu_lamp_for_newbies</a>
HT-Docs verzeichnis unter <i>var/www</i>
PHP5 test mit PHP-Info() hat geklappt! 
Apache per Init.d steuerbar
MySQL auf IP 192.168.0.105 gebinded! Gelinkt!
MySQL StdSQLPW vergeben!
PHPMyAdmin wurde installiert!
PHPMyAdmin gekam auch StdSQLPW
</p>
<p>
SSH Port auf 50505 geÃ¤ndert.
Port 22 /-22  +50505 -&gt; /etc/ssh/sshd_conf</sub>
</p>
<p>
Installiert wurden Emacs, HTop und Guake am 28.12.11 aufgrund bequemlichkeit.
</p>
<p>
Installiert wurde am 28.12.11 ein SSH Server ohne Anleitung in Betrieb genommen.
Port fÃ¼r SSH ist 22
Neuer Benutzer wurde angelegt: Tanis \\ Username= schorsch // StdPW= stockbrot
Folgene Scripte fÃ¼r Nutzer Tanis: 
</p>
<ul>
<li>
bukkit.sh             -&gt;      Starten des Bukkit Servers
</li>
<li>
getBukkitID.sh        -&gt;      ProzessID des Bukkit Servers anzeigen
</li>
<li>
run.sh                -&gt;      Zeigt ProzessInfos


</li>
</ul>

<p>Installiert wurde am 28.12.11 ein Bukkit Server nach folgender Anleitung:
<a href="http://forums.bukkit.org/threads/how-to-setup-a-ubuntu-craftbukkit-server-x64-running-java-x64.598/">http://forums.bukkit.org/threads/how-to-setup-a-ubuntu-craftbukkit-server-x64-running-java-x64.598/</a>
Es wurde erst bei Punkt 3 begonnen.
Crontab wurde nciht hizugefÃ¼gt!
Port fÃ¼r Minecraft ist 25565
ServerDateien Liegen unter: /opt/craftbukkit
StartScript fÃ¼r PoisonWeed angelegt: /home/poisonweed/bukkit.sh
</p>
<p>
Installiert wurde am 28.12.11 ein TeamSpeak3 Server nach folgender Anleitung:
<a href="http://robert.penz.name/296/howto-install-teamspeak-3-server-on-ubuntu-10-04-lucid/">http://robert.penz.name/296/howto-install-teamspeak-3-server-on-ubuntu-10-04-lucid/</a>
Neuer User angelegt: teamspeak -noAuth
Port fÃ¼r TS3 ist !TCP.10011,30033 und UDP.9987
ServerDateien liegen unter: /opt/ts3
</p></div>
</div>

</div>

<div id="outline-container-14" class="outline-2">
<h2 id="sec-14"><span class="section-number-2">14</span> ONLINE s.t.  Server Sparky       -&gt; PoisonNet !! CrunchBang !! ( 192.168.0.103 ) </h2>
<div class="outline-text-2" id="text-14">


</div>

<div id="outline-container-14.1" class="outline-3">
<h3 id="sec-14.1"><span class="section-number-3">14.1</span> <span class="done DONE"> DONE</span> System </h3>
<div class="outline-text-3" id="text-14.1">


</div>

<div id="outline-container-14.1.1" class="outline-4">
<h4 id="sec-14.1.1"><span class="section-number-4">14.1.1</span> HDD Verschlüsselt </h4>
<div class="outline-text-4" id="text-14.1.1">


<p>
Update! Kein Passwort mehr erforderlich -&gt; Blockiert Remote Neustart des Systems
</p>
<p>
Eingabe des folgenden PW's ist dringend erforderlich!
PW: Std#!PW
</p>
</div>
</div>

</div>

<div id="outline-container-14.2" class="outline-3">
<h3 id="sec-14.2"><span class="section-number-3">14.2</span> SSH </h3>
<div class="outline-text-3" id="text-14.2">


<p>
auf Port 50505 umgestellt
X11 ist aktiviert!
</p>
</div>

</div>

<div id="outline-container-14.3" class="outline-3">
<h3 id="sec-14.3"><span class="section-number-3">14.3</span> <span class="done DONE"> DONE</span> MySQL, PHP5, PHPMyAdmin, Apache - install </h3>
<div class="outline-text-3" id="text-14.3">


</div>

<div id="outline-container-14.3.1" class="outline-4">
<h4 id="sec-14.3.1"><span class="section-number-4">14.3.1</span> Apache, PHP, PHPMyAdmin und MySQL </h4>
<div class="outline-text-4" id="text-14.3.1">


<p>
Wurden mittels CrunchBang System installiert!
</p>
<p>
MySQL PW  : StdsqlPW
PHPMyAdmin: StdsqlPW
</p>
</div>
</div>

</div>

<div id="outline-container-14.4" class="outline-3">
<h3 id="sec-14.4"><span class="section-number-3">14.4</span> MineCraft </h3>
<div class="outline-text-3" id="text-14.4">


<p>
Bis jetzt nur einmal zum Test heruntergeladen und gestartet, zum testen.
sun-jdk 6 ist installiert!
</p>
</div>

</div>

<div id="outline-container-14.5" class="outline-3">
<h3 id="sec-14.5"><span class="section-number-3">14.5</span> <span class="todo STARTED"> STARTED</span> VirtualBox </h3>
<div class="outline-text-3" id="text-14.5">


</div>

<div id="outline-container-14.5.1" class="outline-4">
<h4 id="sec-14.5.1"><span class="section-number-4">14.5.1</span> XP Server </h4>
<div class="outline-text-4" id="text-14.5.1">

<ul>
<li id="sec-14.5.1.1">OpenVPN <br/>
<ul>
<li id="sec-14.5.1.1.1">Config <br/>

<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" />
</colgroup>
<tbody>
<tr><td>local 192.168.0.114</td><td>listen IP</td></tr>
<tr><td>port 1194</td><td>Listen Port</td></tr>
<tr><td>proto udp</td><td>UDP/TCP Server</td></tr>
<tr><td>dev tun # / tap</td><td>TUN=RoutedIPTunnel, TAP=EthernetTunnel</td></tr>
<tr><td>client-to-client</td><td>erreichbarkeit der clients</td></tr>
</tbody>
</table>



</li>
</ul>
</li>
<li id="sec-14.5.1.2">TeamSpeak <br/>

<p>
Serverdaten von <a href="http://www.teamspeak.com">http://www.teamspeak.com</a> heruntergeladen.
Entpackt und gestartet.
</p>
<p>
Zugangsdaten folgen..
</p></li>
</ul>
</div>
</div>

</div>

<div id="outline-container-14.6" class="outline-3">
<h3 id="sec-14.6"><span class="section-number-3">14.6</span> OpenVPN </h3>
<div class="outline-text-3" id="text-14.6">


</div>

<div id="outline-container-14.6.1" class="outline-4">
<h4 id="sec-14.6.1"><span class="section-number-4">14.6.1</span> Config Server </h4>
<div class="outline-text-4" id="text-14.6.1">


<p>
root@sparky:~# cat /etc/openvpn/myvpn.conf
dev tun
proto udp
ifconfig 10.8.0.1 10.8.0.2
secret /etc/openvpn/static.key
comp-lzo
keepalive 10 60
verb 3
daemon
</p>
</div>

</div>

<div id="outline-container-14.6.2" class="outline-4">
<h4 id="sec-14.6.2"><span class="section-number-4">14.6.2</span> Config CLient </h4>
<div class="outline-text-4" id="text-14.6.2">


<p>
remote avicra.dyndns.org
dev tun
ifconfig 10.8.0.2 10.8.0.1
secret static.key
comp-lzo
keepalive 10 60 
</p>
</div>

</div>

<div id="outline-container-14.6.3" class="outline-4">
<h4 id="sec-14.6.3"><span class="section-number-4">14.6.3</span> Routing </h4>
<div class="outline-text-4" id="text-14.6.3">

<p>Linux Server:
</p>
<p>
iptables -t nat -A POSTROUTING -s 10.8.0.0/24 -o eth1 -j MASQUERADE
iptables -A FORWARD -i tun0 -s 10.8.0.0/24 -o eth1 -j ACCEPT
iptables -A FORWARD -i eth1 -o tun0 -m state &ndash;state ESTABLISHED,RELATED -j ACCEPT
echo 1 &gt; /proc/sys/net/ipv4/ip_forward</sub>
</p>
<p>
Windows CLient:
</p>
<p>
route DELETE 0.0.0.0
route ADD XX.XXX.124.95 MASK 255.255.255.255 192.168.1.1             &lt;&ndash; das XX.XXX.124.95 ist die IP von avicra.dyndns.org
</p>
<p>
route ADD 0.0.0.0 MASK 0.0.0.0 10.8.0.1
</p>

<p>
<a href="http://www.adamsinfo.com/quick-linux-and-windows-openvpn-howto-and-tutorial-including-vpn-routing/">http://www.adamsinfo.com/quick-linux-and-windows-openvpn-howto-and-tutorial-including-vpn-routing/</a>
</p>
</div>

</div>

<div id="outline-container-14.6.4" class="outline-4">
<h4 id="sec-14.6.4"><span class="section-number-4">14.6.4</span> Probleme </h4>
<div class="outline-text-4" id="text-14.6.4">


<p>
!!! An Osman !!!
</p>
<p>
Also die Verbindung kommt bei mir sofort zustande,
</p>
<p>
Problem1= Kann die 10.8.0.1 nicht erreichen
Problem2= Nur ein Client bis jetzt, in der ServerConf auf XP steht wie es für mehrere Clients geht!
Problem3= Windows Routen wollen eine IP Adresse verbauen, diese ändert sich aber täglich!
</p>
<p>
Problem4= Sabayon schafft es nicht das interface zu erstellen, &ndash;&gt;  Ubuntu Live Gnome Remix schafft es!
</p>
<p>
Funktioniert:
</p>
<ul>
<li>
Trotz VPN noch mit dem Internet Verbunden
</li>
<li>
Static Key

</li>
</ul>
</div>
</div>
</div>

</div>

<div id="outline-container-15" class="outline-2">
<h2 id="sec-15"><span class="section-number-2">15</span> </h2>
<div class="outline-text-2" id="text-15">

</div>

</div>

<div id="outline-container-16" class="outline-2">
<h2 id="sec-16"><span class="section-number-2">16</span> RaspBerry - TinkerForge  soll Ultimativer QuadroCopter werden </h2>
<div class="outline-text-2" id="text-16">


</div>

<div id="outline-container-16.1" class="outline-3">
<h3 id="sec-16.1"><span class="section-number-3">16.1</span> Preisliste </h3>
<div class="outline-text-3" id="text-16.1">


<table border="2" cellspacing="0" cellpadding="6" rules="groups" frame="hsides">
<caption></caption>
<colgroup><col align="left" /><col align="left" /><col align="left" />
</colgroup>
<thead>
<tr><th scope="col">Brick(let)</th><th scope="col">Beschreibung</th><th scope="col">Preis</th></tr>
</thead>
<tbody>
<tr><td>Master   Brick</td><td>MASTER</td><td>30€</td></tr>
<tr><td>DC       Brick</td><td>Steuerung für DC Motoren (2pol.)</td><td>50€</td></tr>
<tr><td>IMU      Brick</td><td>lage Sensor</td><td>100€</td></tr>
<tr><td>Servo    Brick</td><td>Steuerung für Servo Motoren (3pol.)</td><td>50€</td></tr>
<tr><td>Stepper  Brick</td><td>Steuerung für Stepper Motoren (4pol.)</td><td>50€</td></tr>
<tr><td>Temp IR  Bricklet</td><td>Sensor für Temperatur</td><td>23€</td></tr>
<tr><td>Humidity Bricklet</td><td>Sensor für Feuchtigkeit</td><td>17€</td></tr>
<tr><td>Step-Down Power Supply</td><td>Stromversorgung für ganze Stacks</td><td>20€</td></tr>
</tbody>
</table>


</div>

</div>

<div id="outline-container-16.2" class="outline-3">
<h3 id="sec-16.2"><span class="section-number-3">16.2</span> Vorhandene Brick's </h3>
<div class="outline-text-3" id="text-16.2">



</div>

<div id="outline-container-16.2.1" class="outline-4">
<h4 id="sec-16.2.1"><span class="section-number-4">16.2.1</span> Master Brick </h4>
<div class="outline-text-4" id="text-16.2.1">

</div>

</div>

<div id="outline-container-16.2.2" class="outline-4">
<h4 id="sec-16.2.2"><span class="section-number-4">16.2.2</span> Stepper Brick </h4>
<div class="outline-text-4" id="text-16.2.2">

</div>

</div>

<div id="outline-container-16.2.3" class="outline-4">
<h4 id="sec-16.2.3"><span class="section-number-4">16.2.3</span> Ambientlight Bricklet </h4>
<div class="outline-text-4" id="text-16.2.3">

</div>

</div>

<div id="outline-container-16.2.4" class="outline-4">
<h4 id="sec-16.2.4"><span class="section-number-4">16.2.4</span> Rotary Poti Bricklet </h4>
<div class="outline-text-4" id="text-16.2.4">

</div>

</div>

<div id="outline-container-16.2.5" class="outline-4">
<h4 id="sec-16.2.5"><span class="section-number-4">16.2.5</span> Distance IR Bricklet </h4>
<div class="outline-text-4" id="text-16.2.5">

</div>

</div>

<div id="outline-container-16.2.6" class="outline-4">
<h4 id="sec-16.2.6"><span class="section-number-4">16.2.6</span> 4x20 LCD Display </h4>
<div class="outline-text-4" id="text-16.2.6">


</div>
</div>

</div>

<div id="outline-container-16.3" class="outline-3">
<h3 id="sec-16.3"><span class="section-number-3">16.3</span> Linkliste Einkauf: </h3>
<div class="outline-text-3" id="text-16.3">


<p>
OnlineShops
</p>
<ul>
<li>
<a href="http://www.natterer-modellbau.de/shop/">http://www.natterer-modellbau.de/shop/</a>
</li>
<li>
<a href="http://flyduino.net/Kunststoff-Quadrokopter-Rahmen-Set">http://flyduino.net/Kunststoff-Quadrokopter-Rahmen-Set</a> 
</li>
<li>
<a href="http://www.x3d-shop.de/shop/category_7/X-3D-BL-UFO-Komplettkits.html?sessid=dQNsYA3QuEoqyOcgNmDZIqUZwjUA7zoHhafeNvjuVMpxIuaxd31Poi8JeOXSU8oQ&amp;shop_param=cid=%26">http://www.x3d-shop.de/shop/category_7/X-3D-BL-UFO-Komplettkits.html?sessid=dQNsYA3QuEoqyOcgNmDZIqUZwjUA7zoHhafeNvjuVMpxIuaxd31Poi8JeOXSU8oQ&amp;shop_param=cid%3D%26</a>
</li>
<li>
<a href="http://www.conrad.de/ce/de/product/206901/QUADROCOPTER-ROTORSET-2X-LINKSRECHTS">http://www.conrad.de/ce/de/product/206901/QUADROCOPTER-ROTORSET-2X-LINKSRECHTS</a>
</li>
<li>
<a href="http://www.rc-discount.de/store/index.php/cPath/162/category/quadrocopter/quadcopter.html">http://www.rc-discount.de/store/index.php/cPath/162/category/quadrocopter/quadcopter.html</a>

</li>
<li>
<a href="https://trendtraders.de/Blade-mQX-Quad-Copter_cat_560_SESS-d652bff1ce070ff44dcf9f5f81a608d0.html">https://trendtraders.de/Blade-mQX-Quad-Copter_cat_560_SESS-d652bff1ce070ff44dcf9f5f81a608d0.html</a>
</li>
<li>
<a href="https://trendtraders.de/Ufo-5_cat_269.html">https://trendtraders.de/Ufo-5_cat_269.html</a>

</li>
</ul>

<p>Komplette Anleitung QuadroCopter
</p>
<ul>
<li>
<a href="http://plischka.at/Modellbau.html">http://plischka.at/Modellbau.html</a>
</li>
<li>
<a href="http://thomaspfeifer.net/quadrocopter_selbstbau_avr.htm">http://thomaspfeifer.net/quadrocopter_selbstbau_avr.htm</a>
</li>
<li>
<a href="http://www.uni-trier.de/index.php?id=44100">http://www.uni-trier.de/index.php?id=44100</a>
</li>
<li>
<a href="http://www.rc-network.de/forum/showthread.php/120259-Quadrocopter-Geh%C3%A4use-%28viele-Bilder%29">http://www.rc-network.de/forum/showthread.php/120259-Quadrocopter-Geh%C3%A4use-%28viele-Bilder%29</a>
</li>
<li>
<a href="http://rcm-club.de/quadrocopter-bau/">http://rcm-club.de/quadrocopter-bau/</a>


</li>
</ul>

<p>Interessante Techniken
</p>
<ul>
<li>
<a href="http://www.seeedstudio.com/depot/makeblock-4leg-crawler-robot-kit-gold-p-1201.html">http://www.seeedstudio.com/depot/makeblock-4leg-crawler-robot-kit-gold-p-1201.html</a>
</li>
<li>
<img src="http://i26.tinypic.com/2py3m6t.jpg"  alt="http://i26.tinypic.com/2py3m6t.jpg" />
</li>
<li>
<a href="http://www.elektroflug.ch/product_info.php?info=p567_RCLANDER-IMPELLER-90MM-MIT--6S-MOTOR--Lander-Technology-.html&amp;XTCsid=8939e0c67d8f162ce2cc94b4383d8e61">http://www.elektroflug.ch/product_info.php?info=p567_RCLANDER-IMPELLER-90MM-MIT&ndash;6S-MOTOR&ndash;Lander-Technology-.html&amp;XTCsid=8939e0c67d8f162ce2cc94b4383d8e61</a>
</li>
<li>
AR.Drohne <a href="http://ardrone2.parrot.com/ardrone-2/spezifikationen/">http://ardrone2.parrot.com/ardrone-2/spezifikationen/</a>

</li>
</ul>

<p>Forum
</p>
<ul>
<li>
<a href="http://www.multiwii.com/forum/">http://www.multiwii.com/forum/</a>
</li>
<li>
<a href="http://forum.mikrokopter.de/">http://forum.mikrokopter.de/</a>
</li>
<li>
<a href="http://www.rcgroups.com/multirotor-talk-659/">http://www.rcgroups.com/multirotor-talk-659/</a>
</li>
<li>
<a href="http://ardrone-forum.com/support/threads/883-Mein-erster-selbstgebauter-Quadrocopter">http://ardrone-forum.com/support/threads/883-Mein-erster-selbstgebauter-Quadrocopter</a>

</li>
</ul>
</div>

</div>

<div id="outline-container-16.4" class="outline-3">
<h3 id="sec-16.4"><span class="section-number-3">16.4</span> </h3>
<div class="outline-text-3" id="text-16.4">

</div>

</div>

<div id="outline-container-16.5" class="outline-3">
<h3 id="sec-16.5"><span class="section-number-3">16.5</span> Brickd Version anzeigen: brickd &ndash;version </h3>
<div class="outline-text-3" id="text-16.5">

</div>

</div>

<div id="outline-container-16.6" class="outline-3">
<h3 id="sec-16.6"><span class="section-number-3">16.6</span> </h3>
<div class="outline-text-3" id="text-16.6">

</div>

</div>

<div id="outline-container-16.7" class="outline-3">
<h3 id="sec-16.7"><span class="section-number-3">16.7</span> Installation von Tinkerforge auf System Debian </h3>
<div class="outline-text-3" id="text-16.7">


<ul>
<li>
Daten und Scripte auf dem neuen Rechner kopieren
</li>
<li>
Brickd und Brickv nach Anleitung der HomePage installieren

<p>
-&gt; sudo apt-get install python python-qt4 python-qt4-gl python-qwt5-qt4 python-opengl python-serial
-&gt; sudo dpkg -i brickv_linux</sub>_latest</sub>.deb
</p>
<p>
-&gt; sudo apt-get install python-twisted python-gudev libusb-1.0-0
-&gt; sudo dpkg -i brickd_linux</sub>_latest</sub>.deb
</p>

</li>
<li>
Bindings für Python nach Anleitung der HamePage installieren

<p>
-&gt; easy_install</sub> tinkerforge.pip
</p><ul>
<li>
 easy_install</sub> ist in python-setuptools enthalten

</li>
</ul>
</li>
</ul>
</div>

</div>

<div id="outline-container-16.8" class="outline-3">
<h3 id="sec-16.8"><span class="section-number-3">16.8</span> </h3>
<div class="outline-text-3" id="text-16.8">

</div>

</div>

<div id="outline-container-16.9" class="outline-3">
<h3 id="sec-16.9"><span class="section-number-3">16.9</span> Starten des Brickd Daemons aus Source! </h3>
<div class="outline-text-3" id="text-16.9">


<p>
Zum Ordner gehen:
</p>
<p>
-&gt; cd brickd/src/brickd/
-&gt; sudo python brickd_linux</sub>.py
</p>
<p>
Error Log unter
</p>
<p>
-&gt; /var/log/brickd.log
</p>
<p>
Kann sein das die Bindings trozdem noch benötigt werden!!
</p>
</div>

</div>

<div id="outline-container-16.10" class="outline-3">
<h3 id="sec-16.10"><span class="section-number-3">16.10</span> Ort der Project Dateien </h3>
<div class="outline-text-3" id="text-16.10">


<p>
Liegt dank meines neuen Tinkerforge Project TestRechner
gut sortiert unter Dropbox/Projects/Tinkerforge/*
</p>
<p>
Für weitere Informationen dort nachsehen,
außerdem soll bald eine Project Webseite angelegt werden!
</p>
<p>
Wahrscheinlich unter <a href="http://avicra.dyndns.org/tinkerforge">http://avicra.dyndns.org/tinkerforge</a>
</p>
</div>

</div>

<div id="outline-container-16.11" class="outline-3">
<h3 id="sec-16.11"><span class="section-number-3">16.11</span> Technik des Steuerungsscripts </h3>
<div class="outline-text-3" id="text-16.11">


<p>
Ich benutze für Keyboard Events, pygame in python!!
</p>
<p>
Dazu muss folgendes packet installiert werden
-&gt; apt-get install python-pygame
</p>
<p>
Das original SteuerungsScript liegt im Dropbox/Projects/Tinkerforge/ Ordner.
</p>
</div>

</div>

<div id="outline-container-16.12" class="outline-3">
<h3 id="sec-16.12"><span class="section-number-3">16.12</span> </h3>
<div class="outline-text-3" id="text-16.12">

</div>

</div>

<div id="outline-container-16.13" class="outline-3">
<h3 id="sec-16.13"><span class="section-number-3">16.13</span> Raspberry mit WLan ausstatten (Debian) </h3>
<div class="outline-text-3" id="text-16.13">


<p>
Super Anleitung: <a href="http://omer.me/2012/04/setting-up-wireless-networks-under-debian-on-raspberry-pi/">http://omer.me/2012/04/setting-up-wireless-networks-under-debian-on-raspberry-pi/</a>
</p>
<p>
In der /etc/network/interfaces folgendes hinzufuegen:
</p>
<ul>
<li>
auto wlan0
</li>
<li>
iface wlan0 inet dhcp
</li>
<li>
wpa-conf /etc/wpa.conf

</li>
</ul>

<p>Zusaetzlich folgendes Paket installieren:
</p>
<ul>
<li>
apt-get install wpasupplicant

</li>
</ul>

<p>Dann wird folgende Config unter /etc/wpa.conf angelegt:
</p>
<p>
network={
ssid="YOUR-SSID"
proto=RSN
key_mgmt</sub>=WPA-PSK
pairwise=CCMP TKIP
group=CCMP TKIP
psk="WPA-PASSWORD"
}
</p>
</div>

</div>

<div id="outline-container-16.14" class="outline-3">
<h3 id="sec-16.14"><span class="section-number-3">16.14</span> </h3>
<div class="outline-text-3" id="text-16.14">

</div>

</div>

<div id="outline-container-16.15" class="outline-3">
<h3 id="sec-16.15"><span class="section-number-3">16.15</span> Installation auf neuem CrunchBang Debian System [4/4] [100%] - Hoffnung auf mehr Performance durch OpenBox oberfläche </h3>
<div class="outline-text-3" id="text-16.15">



</div>

<div id="outline-container-16.15.1" class="outline-4">
<h4 id="sec-16.15.1"><span class="section-number-4">16.15.1</span> <span class="done DONE"> DONE</span> Einstellungen am PI Debian </h4>
<div class="outline-text-4" id="text-16.15.1">


<p>
Expand on Full SD Card
TimeZone
Locale
Keyboard
Overclocking Modest 700-800MHz - SystemInfo shows 700-800Ghz!! o.O Giga vs. Mega!
64MB RAM Video Core - für Consolen ausführung runter stellen!!
User: PoisonWeed
Pass: StdPW!
</p>
<p>
NOTE! öüä gehen nicht in Terminator Console
</p>
</div>

</div>

<div id="outline-container-16.15.2" class="outline-4">
<h4 id="sec-16.15.2"><span class="section-number-4">16.15.2</span> <span class="done DONE"> DONE</span> Ersten Befehle! </h4>
<div class="outline-text-4" id="text-16.15.2">


<p>
passwd root
apt-get update
apt-get upgrade
dpkg &ndash;configure -a
</p>
<p>
Lade Parallel dazu brickd.deb und brickv.deb runter
Zusätzlich die Python API Bindings 1.0.24
</p>
<p>
cb-welcome
</p><ul>
<li>
apt-get update
</li>
<li>
apt-get upgrade
</li>
<li>
apt-get install openssh-server
</li>
</ul>

<p>apt-get install python-twisted libusb python-gudev
dpkg -i brickd
apt-get install python python-qt4 python-qt4-gl python-qwt5-qt4 python-opengl python-serial
dpkg -i brickv
</p>
<p>
NOTE! Bleibt beim Starten nach dem Anzeigen der IP stehen!
NOTE! Dann ist nurnoch der wechsel auf tty2 möglich..
</p>
<p>
apt-get install python-setuptools
easy_install</sub> tinkerforge.egg
</p>
<p>
NOTE! Brick läuft! Tinkerforge ist Installiert und Funktioniert!
</p>
</div>

</div>

<div id="outline-container-16.15.3" class="outline-4">
<h4 id="sec-16.15.3"><span class="section-number-4">16.15.3</span> <span class="done DONE"> DONE</span> Installed wpasupplicant and config </h4>
<div class="outline-text-4" id="text-16.15.3">


<p>
Super Anleitung: <a href="http://omer.me/2012/04/setting-up-wireless-networks-under-debian-on-raspberry-pi/">http://omer.me/2012/04/setting-up-wireless-networks-under-debian-on-raspberry-pi/</a>                                                                   
</p>
<p>
In der /etc/network/interfaces folgendes hinzufuegen:                                                                                                                
</p>
<ul>
<li>
auto wlan0                                                                                                                                                         
</li>
<li>
iface wlan0 inet dhcp                                                                                                                                              
</li>
<li>
wpa-conf /etc/wpa.conf                                                                                                                                             

</li>
</ul>

<p>Zusaetzlich folgendes Paket installieren:                                                                                                                            
</p>
<ul>
<li>
apt-get install wpasupplicant                                                                                                                                      

</li>
</ul>

<p>Dann wird folgende Config unter /etc/wpa.conf angelegt:                                                                                                              
</p>
<p>
network={                                                                                                                                                            
ssid="YOUR-SSID"                                                                                                                                                     
proto=RSN                                                                                                                                                            
key_mgmt</sub>=WPA-PSK                                                                                                                                                     
pairwise=CCMP TKIP                                                                                                                                                   
group=CCMP TKIP                                                                                                                                                      
psk="WPA-PASSWORD"                                                                                                                                                   
}  
</p>
</div>

</div>

<div id="outline-container-16.15.4" class="outline-4">
<h4 id="sec-16.15.4"><span class="section-number-4">16.15.4</span> <span class="done DONE"> DONE</span> Run Script for test Performance </h4>
<div class="outline-text-4" id="text-16.15.4">


<p>
mkdir /home/poisonweed/tinkerforge
cp control.py .
</p>
<p>
Erster start ohne neustart!
</p>
<p>
WLAN funzt: 192.168.1.102
SSH auf Port 50505
</p>
</div>

</div>

<div id="outline-container-16.15.5" class="outline-4">
<h4 id="sec-16.15.5"><span class="section-number-4">16.15.5</span> OpenSSH neuinstallieren zum reset der config =) </h4>
<div class="outline-text-4" id="text-16.15.5">


<p>
Erfordert leider die deinstallation von SSH
Löschen der Konfigurationsdateien&hellip; sehr gut
</p>
<p>
aptitude purge ssh openssh-server
apt-get install ssh openssh-server
</p>
<p>
NOTE! Vergessen zu gucken ob config weg ist,&hellip;sehen wir gleich am Port
</p>
</div>
</div>
</div>

</div>

<div id="outline-container-17" class="outline-2">
<h2 id="sec-17"><span class="section-number-2">17</span> </h2>
<div class="outline-text-2" id="text-17">

</div>

</div>

<div id="outline-container-18" class="outline-2">
<h2 id="sec-18"><span class="section-number-2">18</span> Kaspersky [8/8] [100%] </h2>
<div class="outline-text-2" id="text-18">


</div>

<div id="outline-container-18.1" class="outline-3">
<h3 id="sec-18.1"><span class="section-number-3">18.1</span> setup.ini - did i need it? </h3>
<div class="outline-text-3" id="text-18.1">


<p>
[Setup] – sets general parameters of the application setup
</p>
<p>
InstallDir="c:\kav\"&lt;path to the program setup folder.
Reboot="yes" yes|no – whether the computer should restart after the program is installed (does not restart by default).
SelfProtection="yes" yes|no – whether self-defense of Kaspersky Anti-Virus installation process should be enabled (enabled by default). Do not mix it with the application self-defense.
ActivationCode=XXXXX-XXXXX-XXXXX-XXXXX – the activation code to use (Kaspersky Anti-Virus version 6.0 MP4 only).
</p>
<p>
[Components] – selects the components to install. If this group contains no items, all will be installed. If no component is selected, then the application is installed with the full set of components.
</p>
<p>
FileMonitor="yes" yes|no - installs File Anti-Virus.
MailMonitor="yes" yes|no - installs Mail Anti-Virus (only for Kaspersky Anti-Virus 6.0 for Windows Workstations).
WebMonitor="yes" yes|no - installs Web Anti-Virus (only for Kaspersky Anti-Virus 6.0 for Windows Workstations).
ProactiveDefence="no" yes|no - installs Proactive Defense (only for Kaspersky Anti-Virus 6.0 for Windows Workstations).
AntiSpy="no" yes|no - installs Anti-Spy (only for Kaspersky Anti-Virus 6.0 for Windows Workstations).
AntiHacker="no" yes|no - installs Anti-Hacker (only for Kaspersky Anti-Virus 6.0 for Windows Workstations).
AntiSpam="no" yes|no – installs Anti-Spam (only for Kaspersky Anti-Virus 6.0 for Windows Workstations).
LockControl="no" yes|no – install the component Access control (Kaspersky Anti-Virus version 6.0 MP4 only).
</p>
<p>
[Tasks] – enables Kaspersky Anti-Virus tasks. If no tasks are specified, all tasks will run after installation. If any tasks are specified, all tasks that are not listed will be disabled.
</p>
<p>
ScanMyComputer="yes" yes|no – task for complete scan of computer.
ScanStartup="yes" yes|no – task for scanning startup objects.
ScanCritical="yes" yes|no – task for scanning critical areas.
Updater="yes" yes|no -ask for updating threat signatures and program modules. 
</p>
</div>

</div>

<div id="outline-container-18.2" class="outline-3">
<h3 id="sec-18.2"><span class="section-number-3">18.2</span> real setup.ini </h3>
<div class="outline-text-3" id="text-18.2">


<p>
[Setup] – sets general parameters of the application setup
</p>
<p>
InstallDir="c:\kav\"
Reboot="yes"
SelfProtection="yes" 
ActivationCode=XXXXX-XXXXX-XXXXX-XXXXX 
</p>
<p>
[Components] 
</p>
<p>
FileMonitor="yes" 
MailMonitor="yes"
WebMonitor="yes" 
ProactiveDefence="no"
AntiSpy="no" 
AntiHacker="no"
AntiSpam="no" 
LockControl="no" 
</p>
<p>
[Tasks]
</p>
<p>
ScanMyComputer="yes"
ScanStartup="yes"
ScanCritical="yes"
Updater="yes" 
</p>
</div>

</div>

<div id="outline-container-18.3" class="outline-3">
<h3 id="sec-18.3"><span class="section-number-3">18.3</span> Einstellungen </h3>
<div class="outline-text-3" id="text-18.3">


</div>

<div id="outline-container-18.3.1" class="outline-4">
<h4 id="sec-18.3.1"><span class="section-number-4">18.3.1</span> Benachrichtigungen (Client zum User) </h4>
<div class="outline-text-4" id="text-18.3.1">


<p>
Neue Richtlinie
Richtlinie bearbeiten
</p>
<p>
Kaspersky Status: (Achtung Anti-Hacker nicht aktiviert)
nocht nicht gefunden
</p>
<p>
Database: outdated after 7  days
obsolete after 30 days
</p>
</div>

</div>

<div id="outline-container-18.3.2" class="outline-4">
<h4 id="sec-18.3.2"><span class="section-number-4">18.3.2</span> Client "rechte!" (Programm benutzbarkeit) </h4>
<div class="outline-text-4" id="text-18.3.2">


<p>
Hierzu muss eine neue Richtlinie erstellt werden.
(bevor KAV-Client installiert wird!)
</p>
<p>
Schalte alles aus.
</p>
</div>
</div>

</div>

<div id="outline-container-18.4" class="outline-3">
<h3 id="sec-18.4"><span class="section-number-3">18.4</span> <span class="done CANCELED"> CANCELED</span> Installations-Versuch#1 </h3>
<div class="outline-text-3" id="text-18.4">


<p>
exec: kasp8.0.2134_adminkitde</sub>.exe
Ort der Installation C:\KAV\AdministrationKit\german
AdminKit: C:\Programme\Kaspersky Lab\Kaspersky Administration Kit\
</p>
<p>
kp warum 2mal&hellip; der erste hat nur entpackt!!! - FAIL!!!!
</p>
<p>
Installation AdministrationsServer - Agent
Administratorkonsole
Lizenz von 100 bis 1000 Computer
</p>
<p>
Benutzer für den AdministrationsServer
</p>

</div>

<div id="outline-container-18.4.1" class="outline-4">
<h4 id="sec-18.4.1"><span class="section-number-4">18.4.1</span> <span class="done CANCELED"> CANCELED</span> ERSTMAL IN DIE DOMÄNE </h4>
<div class="outline-text-4" id="text-18.4.1">


<p>
WILL ER NICHT!!!
</p>
<p>
Versuche in hineinzu bekommen durch:
</p>
<ul>
<li id="sec-18.4.1.1">Alle möglichen updates bis auf Optionale (ca. 3stk, eindeutig unwichtig!) <br/>
</li>
<li id="sec-18.4.1.2">Aktivierung des IIS und ASP.NET <br/>

<p>
Start -&gt; Systemsteuerung -&gt; Software
Windowskomponenten hinzufügen/entfernen
Häckchen bei AnwendungsServer -&gt; Details
Hier folgende aktivieren:
</p>
<ul>
<li>
ASP.NET
</li>
<li>
IIS
</li>
<li>
COM+ Netzwerkzugriff



</li>
</ul>

<p>!!! Es ist technisch zurzeit nicht möglich dieses System in ein Domäne
einzubinden.
!!! Von daher werde ich mit einem Lokalen Admin weitermachen.
</p></li>
</ul>
</div>
</div>

</div>

<div id="outline-container-18.5" class="outline-3">
<h3 id="sec-18.5"><span class="section-number-3">18.5</span> <span class="done CANCELED"> CANCELED</span> Installations-Versuch#2 </h3>
<div class="outline-text-3" id="text-18.5">


<p>
Benutzerdefinierte Installation
ZielOrdner: C:\Programme\Kaspersky Lab\Kaspersky Administration Kit\
AdministrationsServer -&gt; AdministrationsAgent und AdminKonsole werden installiert
100 - 1000 Computer im Netzwerk
SystemBenutzerKonto!!!!!!!!!!!!
</p>



</div>

<div id="outline-container-18.5.1" class="outline-4">
<h4 id="sec-18.5.1"><span class="section-number-4">18.5.1</span> MySQL </h4>
<div class="outline-text-4" id="text-18.5.1">


<p>
Rücksprache mit Knut wegen des verwendeten MS-SQL ( SQL Express )
oder MySQL
</p>
<p>
Wir nehmen MySQL weil es weinger resourcen benötigt.
-&gt; mysql-5.5.10-win32.msi  // <a href="http://www.mysql.com">http://www.mysql.com</a>
Install to C://Programme/MYSQL
With Standart settings
</p>
<p>
Es gibt 3 SQL Modi zur auswahl:
</p>
<ul>
<li>
Developer Machine 

<p>
Hier laufen alle möglichen Programme gleichzeitig.
</p>
</li>
<li>
Dedicated Server

<p>
Hier läuft NUR MySQL und vllt ein WebServer
</p>
</li>
<li>
Server Machine

<p>
Habe ich gewählt da Kaspersky aufwendiger als ein WebServer sein
müsste und MySQL hier natürlich nicht alleine läuft.
</p>
</li>
</ul>

<p>Jetzt hab ich die wahl zwischen 3 Database Usage möglichkeiten
(Anwendungsmöglichkeiten):
</p>
<ul>
<li>
Multifunctional - I use this!

<p>
optimized for fast transactional InnoDB storage engine and high
speed MyISAM storage engine.
</p>
</li>
<li>
Transactional database only

<p>
optimized for web application. innoDB as main storage engine but
MyISAM engine can still be used
</p>
</li>
<li>
Non-Transactional Database Only

<p>
simple web applications monitorring or logging applications as
well as analsis programs. Onl MyISAM storage engine will be
activate
</p>
</li>
</ul>

<p>Erlaubte Connections is 20
</p>
<p>
Port: 3306
</p>
<p>
Enable Strict Mode
..behave more like a traditional database server (recomended)
</p>
<p>
Standart Character Set (language: latin1/WestEuropean)
</p>
<p>
Install as Service and Include Bin Directory in Windows PATH
</p>
<p>
MySQL Password: kavdandii !!!!!!!!!!!!!!!!!!!!
-Enable Root access from remote machines!
</p>
<p>
!!!!!!!!!!!!!ERROR: authentication_string</sub> doesn´t have a default
value
mit Hinweis auf Firewall&hellip;die ist aus!
und von einer vorherigen Install. und PW &hellip;ist aber der erste
Versuch und das PW kann ich davor noch nicht verwendet haben
-meine Vermutung: wir haben die Sicherheitsoptionen auf:
Netzwerksicherheit: LAN Manager-Authentifizierungsebene "LM- und
NTLM-Antworten senden" gestellt -&gt; wie war der StandartWert doch
gleich? -. -"
</p>
<p>
SKIP -&gt; Apply security settings 
The security settings could not be applied.
Error Number 1364.
Field 'authentication_string'</sub> doesn't have a default value.
</p>
<p>
&hellip;
</p></div>

</div>

<div id="outline-container-18.5.2" class="outline-4">
<h4 id="sec-18.5.2"><span class="section-number-4">18.5.2</span> XAMPP!! </h4>
<div class="outline-text-4" id="text-18.5.2">


<p>
Dann probieren wir es eben mal mit XAMPP aus&hellip;!!!
</p>
</div>
</div>

</div>

<div id="outline-container-18.6" class="outline-3">
<h3 id="sec-18.6"><span class="section-number-3">18.6</span> <span class="done DONE"> DONE</span> Installations-Versuch#3 </h3>
<div class="outline-text-3" id="text-18.6">


<p>
Installed with MS-SQL Express (von Kaspersky mitgeliefert)
And works like charm =)
</p>


</div>

</div>

<div id="outline-container-18.7" class="outline-3">
<h3 id="sec-18.7"><span class="section-number-3">18.7</span> Man halte kurz fest das Kaspersky jetzt läuft und auf erste CLients wartet. </h3>
<div class="outline-text-3" id="text-18.7">

<p>Finden tut er Sie schon (Clients)
</p>

</div>

</div>

<div id="outline-container-18.8" class="outline-3">
<h3 id="sec-18.8"><span class="section-number-3">18.8</span> <span class="done DONE"> DONE</span> XPANTI  XP Client Installation </h3>
<div class="outline-text-3" id="text-18.8">

<ul>
<li>
State "DONE"       from "PROBLEM" <span class="timestamp-wrapper"> <span class="timestamp">2011-05-30 Mon 08:41</span></span>
</li>
<li>
State "PROBLEM"    from "WAITING" <span class="timestamp-wrapper"> <span class="timestamp">2011-05-30 Mon 08:41</span></span>
</li>
<li>
State "WAITING"    from "STARTED" <span class="timestamp-wrapper"> <span class="timestamp">2011-04-20 Wed 17:32</span></span>
</li>
<li>
State "STARTED"    from "TODO" <span class="timestamp-wrapper"> <span class="timestamp">2011-04-20 Wed 17:32</span></span>
</li>
<li>
State "TODO"       from "" <span class="timestamp-wrapper"> <span class="timestamp">2011-04-20 Wed 17:32</span></span>

<p>
Nach Netzteil und Speicher tausch bootet es endlich =)
Und XP wird installiert &hellip; DONE!!!
Treiberinstallation &hellip; DONE!!!
</p>
<p>
TeamViewer und ab nach Hause!!
Läuft =)
Theoretisch könnte Knut jetzt die Maus wiederhaben^^
</p>
<p>
Ok Kaspersky lässt sich installieren. (NetAgent)
Funktioniert auch 1a
</p>
<p>
Richtlinien lassen sich nachträglich nicht ändern.
</p>
</li>
</ul>
</div>

</div>

<div id="outline-container-18.9" class="outline-3">
<h3 id="sec-18.9"><span class="section-number-3">18.9</span> <span class="done DONE"> DONE</span> WinAnti Win7 Client Installation </h3>
<div class="outline-text-3" id="text-18.9">

<ul>
<li>
State "DONE"       from "PROBLEM" <span class="timestamp-wrapper"> <span class="timestamp">2011-05-30 Mon 08:42</span></span>
</li>
<li>
State "PROBLEM"    from "WAITING" <span class="timestamp-wrapper"> <span class="timestamp">2011-05-30 Mon 08:42</span></span>

</li>
</ul>

<p>Installiert und Läuft
Kaspersky lässt sich installieren (NetAgent)
</p>
<p>
Auch hier können die Richtlinien nicht nachträglich geändert werden
</p>

</div>

</div>

<div id="outline-container-18.10" class="outline-3">
<h3 id="sec-18.10"><span class="section-number-3">18.10</span> <span class="done CANCELED"> CANCELED</span> EigAnti Win8 Client Installation [EXPERIMENTAL] </h3>
<div class="outline-text-3" id="text-18.10">


<p>
Experimentelle Installation von Windows 8 beta auf der 2ten HDD vom Kaspersky Server
It work's!!
</p>
<p>
!!Look's like Win7 Ultimate
______________________________________________________
Installing NetAgent - without problems
</p>
<p>
Connection to AVSrv1?
</p><ul>
<li>
Wird gefunden!
</li>
<li>
Kopiert Daten
</li>
<li>
Installation gestartet
</li>
<li>
Fehler: Der Benutzer hat die installation abgelehnt!
</li>
</ul>

<p>______________________________________________________
= Nicht Windows 8 kompatibel!!!

</p>
<hr/>

</div>

</div>

<div id="outline-container-18.11" class="outline-3">
<h3 id="sec-18.11"><span class="section-number-3">18.11</span> <span class="done DONE"> DONE</span> Richtlinien verlieren ihre Einstellungen!!! </h3>
<div class="outline-text-3" id="text-18.11">


<p>
Stelle bei den Richtlinien bestimmte Schutz-Einstellungen ein,
aber dieser gehen bei einer Aktivirung der Richtlinie verloren.
(Muss deaktiviert werden zum ändern!!)
</p>
<p>
Häcken rausnehmen -&gt; Von vorheriger Ebene überschreiben!!!
</p>



</div>

</div>

<div id="outline-container-18.12" class="outline-3">
<h3 id="sec-18.12"><span class="section-number-3">18.12</span> <span class="done DONE"> DONE</span> InstallationsPacket erstellen </h3>
<div class="outline-text-3" id="text-18.12">

<ul>
<li>
State "DONE"       from "PROBLEM" <span class="timestamp-wrapper"> <span class="timestamp">2011-05-30 Mon 08:41</span></span>
</li>
<li>
State "PROBLEM"    from "WAITING" <span class="timestamp-wrapper"> <span class="timestamp">2011-05-30 Mon 08:41</span></span>
</li>
<li>
State "WAITING"    from "STARTED" <span class="timestamp-wrapper"> <span class="timestamp">2011-05-01 So 11:50</span></span>
</li>
</ul>

</div>

<div id="outline-container-18.12.1" class="outline-4">
<h4 id="sec-18.12.1"><span class="section-number-4">18.12.1</span> Anpassen der Setup.ini </h4>
<div class="outline-text-4" id="text-18.12.1">


<p>
FileMonitor=0 funzt nicht!
Warte auf Mail vom Kaspersky Support: Herr Gruber
</p>
</div>
</div>
</div>

</div>

<div id="outline-container-19" class="outline-2">
<h2 id="sec-19"><span class="section-number-2">19</span> </h2>
<div class="outline-text-2" id="text-19">

</div>

</div>

<div id="outline-container-20" class="outline-2">
<h2 id="sec-20"><span class="section-number-2">20</span> &ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </h2>
<div class="outline-text-2" id="text-20">

</div>

</div>

<div id="outline-container-21" class="outline-2">
<h2 id="sec-21"><span class="section-number-2">21</span> </h2>
<div class="outline-text-2" id="text-21">

</div>

</div>

<div id="outline-container-22" class="outline-2">
<h2 id="sec-22"><span class="section-number-2">22</span> Work - DVS Digital Video Systems a Rohde &amp; Schwarz Company </h2>
<div class="outline-text-2" id="text-22">


</div>

<div id="outline-container-22.1" class="outline-3">
<h3 id="sec-22.1"><span class="section-number-3">22.1</span> RR1Bob </h3>
<div class="outline-text-3" id="text-22.1">


<p>
Xilinx = DIL 0, 1 auf ON
</p><ul>
<li>
Version &gt;= EPLD72

</li>
</ul>

<p>BOB Kaltstart (5V raus, rein)
</p>
<p>
Lattice = DIL 7 auf ON
</p><ul>
<li>
Version &gt;= 1.1.3.0

</li>
</ul>

<p>Computer Neustarten
</p>
<p>
1.1.3.0 Firmware mit Exe flashen
</p>
<p>
BOB Kaltstart
</p>
<p>
HW-Test und weitere Inbetriebnahme
</p>
</div>

</div>

<div id="outline-container-22.2" class="outline-3">
<h3 id="sec-22.2"><span class="section-number-3">22.2</span> HW-Test </h3>
<div class="outline-text-3" id="text-22.2">


<p>
SpeicherOrt für den SpeicherOrt der Logfiles:
</p>
<p>
Registry: \\Computer\HKEY_CURRENT</sub>_USER\Software\DVS</sub> GmbH\hwtest\test\logfolder
Data:     Y://internal/abOktober/Ziel
Type:     REG_SZ</sub>
</p>
</div>

</div>

<div id="outline-container-22.3" class="outline-3">
<h3 id="sec-22.3"><span class="section-number-3">22.3</span> Rohde und Schwarz PROXY </h3>
<div class="outline-text-3" id="text-22.3">


<p>
Proxy KonfigurationsDatei für Windows:
<a href="http://cfg.rsint.net/proxy.pac">http://cfg.rsint.net/proxy.pac</a>
</p>
<p>
Unter Linux muss unter env folgendes zu finden sein:
http_proxy</sub>=<a href="http://crimi:!HTTPPasswort123@proxy-emea.rsint.net:8080">http://crimi:!HTTPPasswort123@proxy-emea.rsint.net:8080</a>
</p>
</div>
</div>

</div>

<div id="outline-container-23" class="outline-2">
<h2 id="sec-23"><span class="section-number-2">23</span> </h2>
<div class="outline-text-2" id="text-23">

</div>

</div>

<div id="outline-container-24" class="outline-2">
<h2 id="sec-24"><span class="section-number-2">24</span> &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash; </h2>
<div class="outline-text-2" id="text-24">

</div>

</div>

<div id="outline-container-25" class="outline-2">
<h2 id="sec-25"><span class="section-number-2">25</span> </h2>
<div class="outline-text-2" id="text-25">

</div>

</div>

<div id="outline-container-26" class="outline-2">
<h2 id="sec-26"><span class="section-number-2">26</span> Emacs Reference </h2>
<div class="outline-text-2" id="text-26">


<p>
===============================================================================
Org-Mode Reference Card (for version 7.8.11)
================================================================================
</p>


<p>
================================================================================
Getting Started
================================================================================
To read the on-line documentation try             M-x org-info
</p>
<p>
================================================================================
Visibility Cycling
================================================================================
</p>
<p>
rotate current subtree between states             TAB
rotate entire buffer between states               S-TAB
restore property-dependent startup visibility     C-u C-u TAB
show the whole file, including drawers            C-u C-u C-u TAB
reveal context around point                       C-c C-r
</p>
<p>
================================================================================
Motion
================================================================================
</p>
<p>
next/previous heading                             C-c C-n/p
next/previous heading, same level                 C-c C-f/b
backward to higher level heading                  C-c C-u
jump to another place in document                 C-c C-j
previous/next plain list item                     S-UP/DOWN\notetwo
</p>
<p>
================================================================================
Structure Editing
================================================================================
</p>
<p>
insert new heading/item at current level          M-RET
insert new heading after subtree                  C-RET
insert new TODO entry/checkbox item               M-S-RET
insert TODO entry/ckbx after subtree              C-S-RET
turn (head)line into item, cycle item type        C-c -
turn item/line into headline                      C-c *
promote/demote heading                            M-LEFT/RIGHT
promote/demote current subtree                    M-S-LEFT/RIGHT
move subtree/list item up/down                    M-S-UP/DOWN
sort subtree/region/plain-list                    C-c ^
clone a subtree                                   C-c C-x c
copy visible text                                 C-c C-x v
kill/copy subtree                                 C-c C-x C-w/M-w
yank subtree                                      C-c C-x C-y or C-y
narrow buffer to subtree / widen                  C-x n s/w
</p>
<p>
================================================================================
Capture - Refile - Archiving
================================================================================
capture a new item (C-u C-u = goto last)          C-c c \noteone
refile subtree (C-u C-u = goto last)              C-c C-w
archive subtree using the default command         C-c C-x C-a
move subtree to archive file                      C-c C-x C-s
toggle ARCHIVE tag / to ARCHIVE sibling           C-c C-x a/A
force cycling of an ARCHIVEd tree                 C-TAB
</p>
<p>
================================================================================
Filtering and Sparse Trees
================================================================================
</p>
<p>
construct a sparse tree by various criteria       C-c /
view TODO's in sparse tree                        C-c / t/T
global TODO list in agenda mode                   C-c a t \noteone
time sorted view of current org file              C-c a L
</p>
<p>
================================================================================
Tables
================================================================================
</p>

<hr/>
<p>
Creating a table

</p>
<hr/>

<p>
just start typing, e.g.                           |Name|Phone|Age RET |- TAB
convert region to table                           C-c |
&hellip; separator at least 3 spaces                   C-3 C-c |
</p>

<hr/>
<p>
Commands available inside tables

</p>
<hr/>

<p>
The following commands work when the cursor is inside a table.
Outside of tables, the same keys may have other functionality.
</p>

<hr/>
<p>
Re-aligning and field motion

</p>
<hr/>

<p>
re-align the table without moving the cursor      C-c C-c
re-align the table, move to next field            TAB
move to previous field                            S-TAB
re-align the table, move to next row              RET
move to beginning/end of field                    M-a/e
</p>

<hr/>
<p>
Row and column editing

</p>
<hr/>

<p>
move the current column left                      M-LEFT/RIGHT
kill the current column                           M-S-LEFT
insert new column to left of cursor position      M-S-RIGHT
</p>
<p>
move the current row up/down                      M-UP/DOWN
kill the current row or horizontal line           M-S-UP
insert new row above the current row              M-S-DOWN
insert hline below (C-u : above) current row      C-c -
insert hline and move to line below it            C-c RET
sort lines in region                              C-c ^
</p>

<hr/>
<p>
Regions

</p>
<hr/>

<p>
cut/copy/paste rectangular region                 C-c C-x C-w/M-w/C-y
fill paragraph across selected cells              C-c C-q
</p>

<hr/>
<p>
Miscellaneous

</p>
<hr/>

<p>
to limit column width to N characters, use        &hellip;| &lt;N&gt; |&hellip;
edit the current field in a separate window       C-c `
make current field fully visible                  C-u TAB
export as tab-separated file                      M-x org-table-export
import tab-separated file                         M-x org-table-import
sum numbers in current column/rectangle           C-c +
</p>

<hr/>
<p>
Tables created with the table.el package

</p>
<hr/>

<p>
insert a new table.el table                       C-c ~
recognize existing table.el table                 C-c C-c
convert table (Org-mode &lt;-&gt; table.el)             C-c ~
</p>

<hr/>
<p>
Spreadsheet

</p>
<hr/>

<p>
Formulas typed in field are executed by TAB,
RET and C-c C-c.  = introduces a column
formula, := a field formula.
</p>
<p>
Example: Add Col1 and Col2                        |=$1+$2      |
&hellip; with printf format specification              |=$1+$2;%.2f|
&hellip; with constants from constants.el              |=$1/$c/$cm |
sum from 2nd to 3rd hline                         |:=vsum(@II..@III)|
apply current column formula                      | = |
</p>
<p>
set and eval column formula                       C-c =
set and eval field formula                        C-u C-c =
re-apply all stored equations to current line     C-c *
re-apply all stored equations to entire table     C-u C-c *
iterate table to stability                        C-u C-u C-c *
rotate calculation mark through # * ! ^ _ $       C-#
show line, column, formula reference              C-c ?
toggle grid / debugger                            C-c }/{
</p>

<hr/>
<p>
Formula Editor

</p>
<hr/>

<p>
edit formulas in separate buffer                  C-c '
exit and install new formulas                     C-c C-c
exit, install, and apply new formulas             C-u C-c C-c
abort                                             C-c C-q
toggle reference style                            C-c C-r
pretty-print Lisp formula                         TAB
complete Lisp symbol                              M-TAB
shift reference point                             S-cursor
shift test line for column references             M-up/down
scroll the window showing the table               M-S-up/down
toggle table coordinate grid                      C-c }
</p>
<p>
================================================================================
Links
================================================================================
</p>
<p>
globally store link to the current location       C-c l \noteone
insert a link (TAB completes stored links)        C-c C-l
insert file link with file name completion        C-u C-c C-l
edit (also hidden part of) link at point          C-c C-l
</p>
<p>
open file links in emacs                          C-c C-o
&hellip;force open in emacs/other window               C-u C-c C-o
open link at point                                mouse-1/2
&hellip;force open in emacs/other window               mouse-3
record a position in mark ring                    C-c %
jump back to last followed link(s)                C-c &amp;
find next link                                    C-c C-x C-n
find previous link                                C-c C-x C-p
edit code snippet of file at point                C-c '
toggle inline display of linked images            C-c C-x C-v
</p>
<p>
================================================================================
Working with Code (Babel)
================================================================================
</p>
<p>
execute code block at point                       C-c C-c
open results of code block at point               C-c C-o
check code block at point for errors              C-c C-v c
insert a header argument with completion          C-c C-v j
view expanded body of code block at point         C-c C-v v
view information about code block at point        C-c C-v I
go to named code block                            C-c C-v g
go to named result                                C-c C-v r
go to the head of the current code block          C-c C-v u
go to the next code block                         C-c C-v n
go to the previous code block                     C-c C-v p
demarcate a code block                            C-c C-v d
execute the next key sequence in the code edit bu C-c C-v x
execute all code blocks in current buffer         C-c C-v b
execute all code blocks in current subtree        C-c C-v s
tangle code blocks in current file                C-c C-v t
tangle code blocks in supplied file               C-c C-v f
ingest all code blocks in supplied file into the  C-c C-v i
switch to the session of the current code block   C-c C-v z
load the current code block into a session        C-c C-v l
view sha1 hash of the current code block          C-c C-v a
</p>
<p>
================================================================================
Completion
================================================================================
</p>
<p>
In-buffer completion completes TODO keywords at headline start, TeX
macros after `\', option keywords after `#-', TAGS
after  `:', and dictionary words elsewhere.
</p>
<p>
complete word at point                            M-TAB
</p>



<p>
================================================================================
TODO Items and Checkboxes
================================================================================
</p>
<p>
rotate the state of the current item              C-c C-t
select next/previous state                        S-LEFT/RIGHT
select next/previous set                          C-S-LEFT/RIGHT
toggle ORDERED property                           C-c C-x o
view TODO items in a sparse tree                  C-c C-v
view 3rd TODO keyword's sparse tree               C-3 C-c C-v
</p>
<p>
set the priority of the current item              C-c , [ABC]
remove priority cookie from current item          C-c , SPC
raise/lower priority of current item              S-UP/DOWN\notetwo
</p>
<p>
insert new checkbox item in plain list            M-S-RET
toggle checkbox(es) in region/entry/at point      C-c C-x C-b
toggle checkbox at point                          C-c C-c
update checkbox statistics (C-u : whole file)     C-c #
</p>
<p>
================================================================================
Tags
================================================================================
</p>
<p>
set tags for current heading                      C-c C-q
realign tags in all headings                      C-u C-c C-q
create sparse tree with matching tags             C-c <br/>
globally (agenda) match tags at cursor            C-c C-o
</p>
<p>
================================================================================
Properties and Column View
================================================================================
</p>
<p>
set property/effort                               C-c C-x p/e
special commands in property lines                C-c C-c
next/previous allowed value                       S-left/right
turn on column view                               C-c C-x C-c
capture columns view in dynamic block             C-c C-x i
</p>
<p>
quit column view                                  q
show full value                                   v
edit value                                        e
next/previous allowed value                       n/p or S-left/right
edit allowed values list                          a
make column wider/narrower                        &gt; / &lt;
move column left/right                            M-left/right
add new column                                    M-S-right
Delete current column                             M-S-left
</p>

<p>
================================================================================
Timestamps
================================================================================
</p>
<p>
prompt for date and insert timestamp              C-c .
like C-c . but insert date and time format        C-u C-c .
like C-c . but make stamp inactive                C-c !
insert DEADLINE timestamp                         C-c C-d
insert SCHEDULED timestamp                        C-c C-s
create sparse tree with all deadlines due         C-c / d
the time between 2 dates in a time range          C-c C-y
change timestamp at cursor ±1 day                S-RIGHT/LEFT\notetwo
change year/month/day at cursor by ±1            S-UP/DOWN\notetwo
access the calendar for the current date          C-c &gt;
insert timestamp matching date in calendar        C-c &lt;
access agenda for current date                    C-c C-o
select date while prompted                        mouse-1/RET
toggle custom format display for dates/times      C-c C-x C-t
</p>


<hr/>
<p>
Clocking time

</p>
<hr/>

<p>
start clock on current item                       C-c C-x C-i
stop/cancel clock on current item                 C-c C-x C-o/x
display total subtree times                       C-c C-x C-d
remove displayed times                            C-c C-c
insert/update table with clock report             C-c C-x C-r
</p>
<p>
================================================================================
Agenda Views
================================================================================
</p>
<p>
add/move current file to front of agenda          C-c [
remove current file from your agenda              C-c ]
cycle through agenda file list                    C-'
set/remove restriction lock                       C-c C-x &lt;/&gt;
</p>
<p>
compile agenda for the current week               C-c a a \noteone
compile global TODO list                          C-c a t \noteone
compile TODO list for specific keyword            C-c a T \noteone
match tags, TODO kwds, properties                 C-c a m \noteone
match only in TODO entries                        C-c a M \noteone
find stuck projects                               C-c a # \noteone
show timeline of current org file                 C-c a L \noteone
configure custom commands                         C-c a C \noteone
agenda for date at cursor                         C-c C-o
</p>

<hr/>
<p>
Commands available in an agenda buffer

</p>
<hr/>


<hr/>
<p>
View Org file

</p>
<hr/>

<p>
show original location of item                    SPC/mouse-3
show and recenter window                          L
goto original location in other window            TAB/mouse-2
goto original location, delete other windows      RET
show subtree in indirect buffer, ded.\ frame      C-c C-x b
toggle follow-mode                                F
</p>

<hr/>
<p>
Change display

</p>
<hr/>

<p>
delete other windows                              o
view mode dispatcher                              v
switch to day/week/month/year/def view            d w vm vy vSP
toggle diary entries / time grid / habits         D / G / K
toggle entry text / clock report                  E / R
toggle display of logbook entries                 l / v l/L/c
toggle inclusion of archived trees/files          v a/A
refresh agenda buffer with any changes            r / g
filter with respect to a tag                      /
save all org-mode buffers                         s
display next/previous day,week,&hellip;                f / b
goto today / some date (prompt)                   . / j
</p>

<hr/>
<p>
Remote editing

</p>
<hr/>

<p>
digit argument                                    0-9
change state of current TODO item                 t
kill item and source                              C-k
archive default                                   $ / a
refile the subtree                                C-c C-w
set/show tags of current headline                 : / T
set effort property (prefix=nth)                  e
set / compute priority of current item            , / P
raise/lower priority of current item              S-UP/DOWN\notetwo
run an attachment command                         C-c C-a
schedule/set deadline for this item               C-c C-s/d
change timestamp one day earlier/later            S-LEFT/RIGHT\notetwo
change timestamp to today                         &gt;
insert new entry into diary                       i
start/stop/cancel the clock on current item       I / O / X
jump to running clock entry                       J
mark / unmark / execute bulk action               m / u / B
</p>

<hr/>
<p>
Misc

</p>
<hr/>

<p>
follow one or offer all links in current entry    C-c C-o
</p>

<hr/>
<p>
Calendar commands

</p>
<hr/>

<p>
find agenda cursor date in calendar               c
compute agenda for calendar cursor date           c
show phases of the moon                           M
show sunrise/sunset times                         S
show holidays                                     H
convert date to other calendars                   C
</p>

<hr/>
<p>
Quit and Exit

</p>
<hr/>

<p>
quit agenda, remove agenda buffer                 q
exit agenda, remove all agenda buffers            x
</p>
<p>
================================================================================
LaTeX and cdlatex-mode
================================================================================
</p>
<p>
preview LaTeX fragment                            C-c C-x C-l
expand abbreviation (cdlatex-mode)                TAB
insert/modify math symbol (cdlatex-mode)          ` / '
insert citation using RefTeX                      C-c C-x [
</p>
<p>
================================================================================
Exporting and Publishing
================================================================================
</p>
<p>
Exporting creates files with extensions .txt and .html
in the current directory.  Publishing puts the resulting file into
some other place.
</p>
<p>
export/publish dispatcher                         C-c C-e
</p>
<p>
export visible part only                          C-c C-e v
insert template of export options                 C-c C-e t
toggle fixed width for entry or region            C-c :
toggle pretty display of scripts, entities        C-c C-x {\tt\char`\}
</p>

<hr/>
<p>
Comments: Text not being exported

</p>
<hr/>

<p>
Lines starting with # and subtrees starting with COMMENT are
never exported.
</p>
<p>
toggle COMMENT keyword on entry                   C-c ;
</p>
<p>
================================================================================
Dynamic Blocks
================================================================================
</p>
<p>
update dynamic block at point                     C-c C-x C-u
update all dynamic blocks                         C-u C-c C-x C-u
</p>
<p>
================================================================================
END
================================================================================
</p>





</div>
</div>
<div id="footnotes">
<h2 class="footnotes">Footnotes: </h2>
<div id="text-footnotes">
<p class="footnote"><sup><a class="footnum" name="fn.1" href="#fnr.1">1</a></sup> FOOTNOTE DEFINITION NOT FOUND: 4
</p>
<p class="footnote"><sup><a class="footnum" name="fn.2" href="#fnr.2">2</a></sup> FOOTNOTE DEFINITION NOT FOUND: 1
</p>
<p class="footnote"><sup><a class="footnum" name="fn.3" href="#fnr.3">3</a></sup> FOOTNOTE DEFINITION NOT FOUND: 0
</p>
</div>
</div>
<div id="postamble">
<p class="author"> Author: LimeBlack
<a href="mailto:poisonweed@Limebuntu">&lt;poisonweed@Limebuntu&gt;</a>
</p>
<p class="date"> Date: 2013-03-24 12:05:54 CET</p>
<p class="creator">HTML generated by org-mode 6.33x in emacs 23</p>
</div>


@endsection

@section('script')
{{ Asset::container('footer')->scripts() }}
<script type="text/javascript">
<!--/*--><![CDATA[/*><!--*/
 function CodeHighlightOn(elem, id)
 {
   var target = document.getElementById(id);
   if(null != target) {
     elem.cacheClassElem = elem.className;
     elem.cacheClassTarget = target.className;
     target.className = "code-highlighted";
     elem.className   = "code-highlighted";
   }
 }
 function CodeHighlightOff(elem, id)
 {
   var target = document.getElementById(id);
   if(elem.cacheClassElem)
     elem.className = elem.cacheClassElem;
   if(elem.cacheClassTarget)
     target.className = elem.cacheClassTarget;
 }
/*]]>*///-->
</script>

@endsection