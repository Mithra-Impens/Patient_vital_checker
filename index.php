<?php

include "vitals.php";
include "validate.php";
include "rules.php";
include "scanner.php";


foreach($patients as $patient)
{

    if($patient["vital_type"] == "Temperature")
    {
        $result = validateVital($patient, "checkTemperature");
    }

    elseif($patient["vital_type"] == "Pulse")
    {
        $result = validateVital($patient, "checkPulse");
    }

    elseif($patient["vital_type"] == "BP")
    {
        $result = validateVital($patient, "checkBloodPressure");
    }
    else{
        continue;
    }


    echo "Patient: " . $result["patient_name"] . "<br>";
    
    echo "Vital: " . $result["vital_type"] . "<br>";

    echo "Value: " . $result["value"] . "<br>";
   
    echo "Status: " . $result["status"] . "<br>";
    
    echo "Message: " . $result["message"] . "<br>";
    
    echo "----------------------" . "<br><br>";
    

}


echo "Project Files:" . "<br>";

scanFolder(__DIR__); 

?>