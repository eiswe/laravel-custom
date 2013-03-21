	<?php

	   	foreach ( $cards as $key => $value ) {
	   		
	   		// print_r( $key ); shows entry id - not card id but equal!
	   		
	   		foreach ($user as $key) {             // check foreach user id for change to name
	   			//print $key[0];	              // print user id
	   			//print $key[1];                  // print user name
	   			if ( $value->userid == $key[0] ) { 
	   				$value->userid = $key[1];
	   			}
	   		}

            foreach ($type as $key) {           // check foreach card id for change to name
                if ( $value->cardtype == $key[0] ) { 
                    $value->cardtype = $key[1];
                }
            }

            foreach ($errr as $key) {           // check foreach error id for change to name
                if ( $value->errortype == $key[0] ) { 
                    $value->errortype = $key[1];
                }
            }

            foreach ($stat as $key) {           // check foreach failure id for change to name
                if ( $value->status == $key[0] ) { 
                    $value->status = $key[1];
                }
            }

            foreach ($fail as $key) {           // check foreach failure id for change to name
                if ( $value->failure == $key[0] ) { 
                    $value->failure = $key[1];
                }
            }
		}

		$table = $display = "";	
		$fn = "DVS_ReparaturStatistic_KW".date("W"."_"."d"."-"."m"."-"."y"."_"."Gis");
					
			$table .= '<table><tr>';
			$table .= '<td><strong>	SerialNumber	</strong></td>';
			$table .= '<td><strong>	UserID 			</strong></td>';
			$table .= '<td><strong>	Cardtype 	 	</strong></td>';
			$table .= '<td><strong>	Errortype		</strong></td>';
			$table .= '<td><strong>	Status			</strong></td>';
			$table .= '<td><strong>	Failure			</strong></td>';
			$table .= '<td><strong>	Ausfall Ort		</strong></td>';
			$table .= '<td><strong>	TestDatum		</strong></td>';
			$table .= '<td><strong>	TestDauer 		</strong></td>';
			$table .= '<td><strong>	Revision		</strong></td>';
			$table .= '<td><strong>	Fehlerbesch. 		</strong></td>';
			$table .= '<td><strong>	Ext. Fehlerbesch.	</strong></td>';
			$table .= '<td><strong>	Datum Wareneingang 	</strong></td>';
			$table .= '<td><strong>	OTRS				</strong></td>';
			$table .= '<td><strong>	Auftrag				</strong></td>';
			$table .= '<td><strong>	Lieferant 		</strong></td>';
			$table .= '<td><strong>	RLA 			</strong></td>';
			$table .= '<td><strong>	CPLD 			</strong></td>';
			$table .= '<td><strong>	Firmware		</strong></td>';
			$table .= '<td><strong>	SDK				</strong></td>';
			$table .= '<td><strong>	HW-Test			</strong></td>';
			$table .= '</tr>';

			// need to fetch all title from cards array
			//foreach ( $cards as $value ) { -> return 2 rows ( while each contains a card) )
			foreach ( $cards as $value ) {
				$table .= '<tr>';
					$table .= '<td>'.$value->serialnumber 		.'</td>';
					$table .= '<td>'.$value->userid 			.'</td>'; // $user[$value->userid][1]
					$table .= '<td>'.$value->cardtype 			.'</td>';
					$table .= '<td>'.$value->errortype	 		.'</td>';
					$table .= '<td>'.$value->status		 		.'</td>';
					$table .= '<td>'.$value->failure	 		.'</td>';
					$table .= '<td>'.$value->ausort				.'</td>';
					$table .= '<td>'.$value->testdate	 		.'</td>';
					$table .= '<td>'.$value->time 	 	 		.'</td>';
					$table .= '<td>'.$value->revision	 		.'</td>';
					$table .= '<td>'.$value->comment 	 		.'</td>';
					$table .= '<td>'.$value->excomment 		 	.'</td>';
					$table .= '<td>'.$value->datawe 			.'</td>';
					$table .= '<td>'.$value->otrs			 	.'</td>';
					$table .= '<td>'.$value->pa 				.'</td>';
					$table .= '<td>'.$value->distributor 		.'</td>';
					$table .= '<td>'.$value->rla 		 		.'</td>';
					$table .= '<td>'.$value->cpld 		 		.'</td>';
					$table .= '<td>'.$value->firmware	 		.'</td>';
					$table .= '<td>'.$value->sdk				.'</td>';
					$table .= '<td>'.$value->hwtest				.'</td>';	
				$table .= '</tr>';			
			}			

			$table .= '<tr>';
			$table .= $display;
			$table .= '</td></tr></table>';
	


		header("Content-type: application/x-msdownload"); 
		# replace excelfile.xls with whatever you want the filename to default to
		header("Content-Disposition: attachment; filename=$fn.xls");
		header("Pragma: no-cache");
		header("Expires: 0");
		echo $table;
	?>



<?php
/** !Pink

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<title>BAND Function</title>
	</head>
	<style type="text/css">
		body {
			font-family:Verdana, Arial, Helvetica, sans-serif;
			font-size:12px;
			margin:0px;
			padding:0px;
		}
		#atd td{
			padding:3px;
			font-weight:bold;
		}
		#avg_col{
			background-color:#CCFFCC;
		}
		#ctbl, #ctbl td{
			padding:5px;
			border: 1px solid black;
			border-collapse:collapse;
		}
	</style>
	<body>



	</body>
</html>
*/

/*			$table .= '<tr id="atd">';
			$table .= '<td>OFFERED</td>';
			$table .= '<td>BAND</td>';
			$table .= '<td>RUN TIME</td>';
			$table .= '<td>Abandoned</td>';
			$table .= '<td>OFFERED</td>';
			$table .= '<td style="background-color:#FFCC99">BAND</td>';
			$table .= '<td style="background-color:#FFCC99">RUN TIME</td>';
			$table .= '<td style="background-color:#FFCC99">Abandoned</td>';
			$table .= '</tr>'; */

?>