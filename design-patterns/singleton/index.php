<?php

require_once './hostgator_influenciadores.php';
require_once './youtube_channel.php';

// Instâncias da classe YoutubeChannel
$cdfty = new YoutubeChannel ( 'Código Fonte TV','codigofontetv' );
$sattekitaDev = new YoutubeChannel ( 'AtekitaDev','UCetRsdZxDQDcgVDJd6erz6g' );
$diolinux = new YoutubeChannel ( 'Diolinux','diolinux' );
$pgdinamica = new YoutubeChannel ( 'Programação Dinâmica','UC7@mr11REaCqgKke7DPJOLg' );
$rodrigobranas = new YoutubeChannel ('Rodrigo Branas', 'rodrigobranas');
$tekzoom = new YoutubeChannel ( 'TekZoom', 'canaltekzoom');

//representa a classe HostGatorInfluenciadores - Criação do primeiro objeto
$hostGatorInfluenciadores = HostGatorInfluenciadores::getInstance();
$hostGatorInfluenciadores -> setMember([$cdfty, $diolinux]);

// Criação do segundo objeto
$hostGatorInfluenciadores2 = HostGatorInfluenciadores::getInstance();
$hostGatorInfluenciadores2 -> setMember([$tekzoom]);

echo("\n\nTime #1\n");
var_dump($hostGatorInfluenciadores);
echo("\n\nTime #2\n");
var_dump($hostGatorInfluenciadores2);

var_dump($hostGatorInfluenciadores2 === $hostGatorInfluenciadores);