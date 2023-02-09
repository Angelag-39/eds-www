<html>
<head>
<title>Teste PHP</title>

</head>
<body>
<?php

/*date_default_timezone_set('America/Sao_Paulo');

$hora_inicial = '08:52:00';
$hora_final = '09:02:00';
 

$i = 1;
$tempo_total;
 

$tempos = array($hora_final, $hora_inicial);
 

foreach($tempos as $tempo) {
 $segundos = 0;
 

 list($h, $m, $s) = explode(':', $tempo);
 $segundos += $h * 3600;
 $segundos += $m * 60;
 $segundos += $s;
 

 $tempo_total[$i] = $segundos;
 

 $i++;
}
$segundos = $tempo_total[1] - $tempo_total[2];
 

$horas = floor($segundos / 3600);
$segundos -= $horas * 3600;
$minutos = str_pad((floor($segundos / 60)), 2, '0', STR_PAD_LEFT);
$segundos -= $minutos * 60;
$segundos = str_pad($segundos, 2, '0', STR_PAD_LEFT);
 

echo "$horas:$minutos:$segundos"."<br>";


$data = new DateTime();
echo $data->format('d-m-Y H:i:s');*/


// microtime(true) returns the unix timestamp plus milliseconds as a float
//$time_elapsed = timeAgo($time_ago); //The argument $time_ago is in timestamp (Y-m-d H:i:s)format.

//Function definition

function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}
echo get_time_ago( time()-5 ).'<br>';
echo get_time_ago( time()-60 ).'<br>';
echo get_time_ago( time()-3600 ).'<br>';
echo get_time_ago( time()-86400 ).'<br>';
echo get_time_ago( time()-2592000 ).'<br>';
echo get_time_ago( time()-31104000 ).'<br>';
echo "---".'<br>';
echo get_time_ago( strtotime("2013-12-01") );

?>
</head>
<body>
<?php 


