<?php
include 'include/connection.php';

//Student Counter
$query = "SELECT COUNT(studentID) FROM studentinfo";
$result =  $conn->query($query);
$studentCounter = 0;
while ($data = $result->fetch_row()) {
    $studentCounter += $data[0];
}

//No of Course
// $query = "SELECT DISTINCT selectCourse FROM studentinfo ORDER BY selectCourse";
// $result =  $conn->query($query);
// $courseCounter = 0;
// while ($data = $result->fetch_row()) {
//     $courseCounter += $data[0];
// }
// intval($courseCounter);

// //Card 3
// $query = "SELECT totalAmount FROM project WHERE status='pipeline'";
// $result = $conn->query($query);
// $pplnNum = $result->num_rows;
// $pplnTotal = 0;
// while ($data = $result->fetch_row()) {
//     $pplnTotal += $data[0];
// }

// //Card 4
// $query = "SELECT DISTINCT equipmentName FROM elist";
// $result = $conn->query($query);
// $tcnlgyNum = $result->num_rows;

// //Intensity Trend
// $query = "SELECT financialYear, billionsBdt FROM gdp ORDER BY financialYear";
// $ints = $conn->query($query);
// $trend;
// while ($data = $ints->fetch_assoc()) {
//     $year = $data['financialYear'];
//     $query = "SELECT valueKtoe FROM fuel WHERE financialYear='$year' AND sector!='transport'";
//     $result = $conn->query($query);
//     $ktoe = 0;
//     while ($dat = $result->fetch_row()) {
//         $ktoe += $dat['0'];
//     }
//     $ktoe = $ktoe / $data['billionsBdt'];
//     $trend[$year] = round($ktoe, 2);
// }


// $color = array("234, 22, 61", "244, 150, 25", "3, 141, 138", "21, 198, 188", "150, 30, 216", "63, 59, 43", "7, 232, 114");
// //Energy Supply
// $supply = array(array());
// foreach ($trend as $yr => $grbg) {
//     $query = "SELECT DISTINCT primaryEnergySource FROM fuel";
//     $result = $conn->query($query);
//     while ($fuel = $result->fetch_row()) {
//         $tKtoe = 0;
//         $query = "SELECT valueKtoe FROM fuel WHERE financialYear='$yr' AND primaryEnergySource='$fuel[0]'";
//         $ktoe = $conn->query($query);
//         while ($kVal = $ktoe->fetch_row()) {
//             $tKtoe += $kVal[0];
//         }
//         $supply[$fuel[0]][$yr] = round($tKtoe, 2);
//     }
// }


// //Energy Consumption
// $consumption = array(array());
// foreach ($trend as $yr => $grbg) {
//     $query = "SELECT DISTINCT sector FROM fuel";
//     $result = $conn->query($query);
//     while ($sctr = $result->fetch_row()) {
//         $tKtoe = 0;
//         $query = "SELECT valueKtoe FROM fuel WHERE financialYear='$yr' AND sector='$sctr[0]'";
//         $ktoe = $conn->query($query);
//         while ($kVal = $ktoe->fetch_row()) {
//             $tKtoe += $kVal[0];
//         }
//         $consumption[$sctr[0]][$yr] = round($tKtoe, 2);
//     }
// }

$conn->close();
