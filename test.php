<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G5cy");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    echo "Raw Data:<br />";
    echo $data;

    $data_tab = str_split($data,33);
    echo "Tabular Data:<br />";
    for($i=0, $size=count($data_tab); $i<$size; $i++){
        echo "Trame $i: $data_tab[$i]<br />";
    }

    end($data_tab);
    $lastValue = prev($data_tab);
    $trame = $lastValue;
?>
