<?php 
$dbuser="root";
$dbpass='';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
if( !$conn){
    die("could not connect to db");
}
print('Enter the number of records you want to enter.'. PHP_EOL);
fscanf(STDIN,"%d\n", $number);
echo "\n";
print('Enter the router details in following sequence:-"sapid" "hostname" "loopback" "MacAddress"'. PHP_EOL);
mysqli_select_db($conn,"test");
$i=0;
while(true){
    if($i== $number) {
        print("You have reached the limit of selected records.start the application again to start the same");
        exit;
    }
    fscanf(STDIN,"%s %s %s %s",$sapid,$hostname,$loopback,$macaddress);
    $sql_query= "INSERT INTO routers(`sapid`,`hostname`,`loopback`,`macaddress`) 
        VALUES ('".$sapid."','".$hostname."','".$loopback."','".$macaddress."',)
        ";
    $query_response=mysqli_query($conn,$sql_query);  
    if( !$query_response ) {
        die("Data Insertion failed" . mysqli_error($conn));
    }
    echo "Data entered successfully";
}

?>