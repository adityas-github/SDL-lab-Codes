<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
ASSIGNMENT 4
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Employee search</title>
</head>
<body>
    <h2>Employee Search</h2>
<?php
    $employee_names =
array("Arif","Chinmay","Manoj","Saie","Shreya","Anushka","Omkar","Vinay
","Rameshwar",
"Atharva","Sarvesh","Pranav","Prajwal","Vallabh","Aditya","Shrihari","S
anika","Shivraj","Mrudula","Esha");
function find($name, $array){
    foreach($array as $employee){
        if($employee == $name) return true;
    }
    return false;
}
if(isset($_POST['search_name'])){
    $search_name = $_POST['search_name'];
    $result = find($search_name, $employee_names);
    if($result){
        echo "<p>$search_name is an employee</p>";
    }
    else{
        echo "<p>$search_name is not an employee</p>";
} }
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="search_name">Enter Name to search: </label>
<input type="text" id="search_name" name="search_name">
<button  type="submit">Search</button>
</form>
</body>
</html>
