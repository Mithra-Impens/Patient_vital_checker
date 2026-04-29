<?php

function checkTemperature($vitalData)
{
    if($vitalData["value"] > 100)
    {
        $vitalData["status"] = "HIGH";
        $vitalData["message"] = "Fever detected";
    }
    elseif($vitalData["value"] < 97)
    {
        $vitalData["status"] = "LOW";
        $vitalData["message"] = "Hypothermia detected";
    }
    else
    {
        $vitalData["status"] = "NORMAL";
        $vitalData["message"] = "Temperature is normal";
    }

    return $vitalData;
}



function checkPulse($vitalData)
{
    if($vitalData["value"] > 100)
    {
        $vitalData["status"] = "HIGH";
        $vitalData["message"] = "Pulse rate is high";
    }
    elseif($vitalData["value"] < 60)
    {
        $vitalData["status"] = "LOW";
        $vitalData["message"] = "Pulse rate is low";
    }
    else
    {
        $vitalData["status"] = "NORMAL";
        $vitalData["message"] = "Pulse is normal";
    }

    return $vitalData;
}



function checkBloodPressure($vitalData)
{
    $bp = explode("/", $vitalData["value"]);

    $systolic = $bp[0];
    $diastolic = $bp[1];

    if($systolic > 130 || $diastolic > 90)
    {
        $vitalData["status"] = "HIGH";
        $vitalData["message"] = "Blood pressure is high";
    }
    elseif($systolic < 90 || $diastolic < 60)
    {
        $vitalData["status"] = "LOW";
        $vitalData["message"] = "Blood pressure is low";
    }
    else
    {
        $vitalData["status"] = "NORMAL";
        $vitalData["message"] = "Blood pressure is normal";
    }

    return $vitalData;
}

?>