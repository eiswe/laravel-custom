
<h1>Fotos von meinen ersten Erfahrungen mit Tinkerforge!</h1>
<p>Hier habe ich die ersten kleinen Schaltungen zusammengesteckt!<br/>
Sofort wollte ich einen QuadroCopter bauen!<br/>
Musste mich aber zuerst mit diesem 2Wheel Vehicle zufriedenstellen...<br/>
<br/>
...hab aber schon die Einkaufsliste für meinen Quadro =]</p>

<?php
	
	$pictureDir = 'application/views/galery/images';

    $allepictures = scandir($pictureDir);  //$pictureDir); //Ordner "files" auslesen
    foreach ( $allepictures as $pictures ) { // Ausgabeschleife
        if ( $pictures != "." and $pictures != ".." ) {
            /** Hier wird für jeden Content Odner ein Menu Button erstellt! */
            //print '<img src="'.'/img/'.$pictures.'" width="150px" />';
            print '1';
        }
    };
?>