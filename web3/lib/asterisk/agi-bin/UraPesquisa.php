#!/usr/bin/php -q
<?php
/**
 *
 * =======================================
 * ###################################
 * VS2IP
 *
 * @package Pesquisa de Satisfação - 
 * @author 
 * @copyright Copyright (C) 2015 - 2020  All rights reserved.
 * ###################################
 *
 * =======================================
 * 
 */

		date_default_timezone_set("America/Sao_Paulo");
        set_time_limit(30);
        require('phpagi.php');
        error_reporting(E_ALL);


        $db = 'pesquisa';
        $dbuser = 'root';
        $dbpass = 'v43c2syst2m22120462';
        $dbhost = 'localhost';


        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
        if ($conn->connect_error) {
                die("Erro ao conectar ao banco: " . $conn->connect_error);
                $agi->exec("NoOp","Erro ao conectar ao banco: " . $conn->connect_error);
                $agi->hangup();
        }


        $agi = new AGI();
        $agi->answer();

		
        $cid = $agi->request["agi_callerid"];
		$cidname =  $agi->request["agi_calleridname"];
		

        $r = $agi->get_variable("CDR(src)");
		if ($r["result"] == 1) {
			$cdrsrc = $r["data"];
			$agi->verbose(">>>> cdrsrc = $cdrsrc");
		}

        $r = $agi->get_variable("CDR(dst)");
		if ($r["result"] == 1) {
			$cdrdst = $r["data"];
			$agi->verbose(">>>> cdrdst = $cdrdst");
		}
	
        $r = $agi->get_variable("FROMEXTEN");
		if ($r["result"] == 1) {
			$fromexten = $r["data"];
			$agi->verbose(">>>> fromexten = $fromexten");
		}
	
		$r = $agi->get_variable("DB(LASTDIALED/$fromexten)");
                if ($r["result"] == 1) {
                        $lastdialed = $r["data"];
                        $agi->verbose(">>>> lastdialed = $lastdialed");
                }
		
		$r = $agi->get_variable("DIALEDPEERNUMBER");
			if ($r["result"] == 1) {
					$dialedpeernumber = $r["data"];
					$agi->verbose(">>>> dialedpeernumber = $dialedpeernumber");
			}

		$r = $agi->get_variable("DIRECTION");
			if ($r["result"] == 1) {
					$direction = $r["data"];
					$agi->verbose(">>>> direction = $direction");
			}

		
		$r = $agi->get_variable("BLINDTRANSFER");
		if ($r["result"] == 1) {
				$blindtransfer = $r["data"];
				$agi->verbose(">>>> blindtransfer = $blindtransfer");
		}


		$r = $agi->get_variable("BRIDGEPEER");
		if ($r["result"] == 1) {
				$bridgepeer = $r["data"];
				$agi->verbose(">>>> bridgepeer = $bridgepeer");
		}


        //$agi->stream_file("silence/2");
		$agi->exec("Dumpchan","");
	
        $ext = $agi->request["agi_extension"];
        //$accountcode = $agi->request["agi_accountcode"];
	
	
		

        if (strlen($fromexten) >= 6) {
			$avaliador = $cid;
			//$avaliado = $cdrsrc;

			if (substr($blindtransfer,0,3) == "SIP") {
			//		$avaliado = $cdrsrc;
					$r1 = explode("-",$blindtransfer);
					$r2 = $r1[0];
					$r3 = explode("/",$r2);
					$ramal = $r3[1];
					$avaliado = $ramal;
			} else {
					//$avaliado = $blindtransfer;
					$avaliado = $bridgepeer;
			}
			$tipo = "ENTRANTE";
        } else {
			$avaliador = $cid;
			$avaliado = $fromexten;
			$tipo = "SAINTE";
        }



		/*
		FREEPBX
		if ($direction == "INBOUND") {
			$avaliador = $cid;
			$avaliado = $dialedpeernumber;
			$tipo = "ENTRANTE";
        } else {
			//$avaliador = $dialedpeernumber;
			$avaliador = $lastdialed;
			$avaliado = $fromexten;
			$tipo = "SAINTE";

        }
		*/
	
		
        $abertura = date("Y-m-d H:i:s");
 

		
		$agi->stream_file("pesquisa/inicio");
		
		// Insert antes da pesquisa
		if ($conn->query("INSERT INTO pesquisa (data,avaliado,avaliador,p1,p2,tipo) VALUES ('$abertura','$avaliado','$avaliador','','','DESISTIU')")) {
			$agi->verbose(">>>> Query OK!");
		} else {
			$agi->verbose(">>>> " . $conn->error);
		}

		

		// INICIO AVALIACAO
		// P1
		$loop=0;
        do
        {
                $result = $agi->get_data('pesquisa/p1', 5000, 1);
                $keys = $result['result'];

                if ($keys >= '1' && $keys <= '5') {
                        $agi->verbose("DIGITOS >>>> $keys");
                        $p1=$keys;
												
						break;
                } else {
						$agi->verbose("DIGITOS >>>> $keys");
                        $agi->stream_file("pesquisa/opcao_invalida");
                        $loop++;
						
						if ($loop == 3) {
							$agi->verbose("Encerrando por inatividade");
							$agi->hangup();
							die();
						}
                }

        } while($loop < 3);


 		
		// P2
		$loop=0;
        do
        {
                $result = $agi->get_data('pesquisa/p2', 5000, 1);
                $keys = $result['result'];

                if ($keys >= '1' && $keys <= '5') {
                        $agi->verbose("DIGITOS >>>> $keys");
                        $p2=$keys;
						

						if ($conn->query("UPDATE pesquisa SET p1 = '$p1', p2 = '$p2', tipo = '$tipo' WHERE data = '$abertura' AND avaliado = '$avaliado'")) {
								$agi->verbose(">>>> Query OK!");
								$agi->stream_file("pesquisa/agradecimento");
                                

                        } else {
                                $agi->verbose(">>>> Erro: " . $conn->error);
                        }
						break;
                } else {
						$agi->verbose("DIGITOS >>>> $keys");
                        $agi->stream_file("pesquisa/opcao_invalida");
                        $loop++;
						
						if ($loop == 3) {
							$agi->verbose("Encerrando por inatividade");
							$agi->hangup();
							die();
						}
                }

        } while($loop < 3);

	
        // FIM AVALIACAO
			
        if ($loop == 3) {
			$agi->verbose(">>>> Encerrando por inatividade");
			$agi->hangup();
        }



        $conn->close();
        $agi->hangup();
?>


