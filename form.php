<?PHP

$SubjectErr = $semesterErr = "";
$Subjet = $semester = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
if (empty($_POST["Subject"])) {
    $nameErr = "Subject is required";
  } else {
    $name = test_input($_POST["Subject"]);
  }
  if (empty($_POST["semester"])) {
    $nameErr = "semester is required";
  } else {
    $name = test_input($_POST["semester"]);
  }