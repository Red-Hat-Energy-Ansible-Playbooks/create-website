<!-- PHP code to establish connection with the localserver -->
<?php
/* 
// Username is root
$user = 'sa';
$password = '###' ; // add SQL db password for demo database
 
// Database name is pubs in this demo
$database = 'pubs';
 
// Server is localhost with
// port number 3306
$servername='dev.home.local, 1443';
$connectionInfo = array( "Database"=>"$database", "UID"=>"$user", "PWD"=>"$password");
$conn = sqlsrv_connect( $servername, $connectionInfo);

if( $conn ) {
     #echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
// SQL query to select data from database
$query = "SELECT [stor_id],[stor_name],[stor_address],[city],[state],[zip] FROM [pubs].[dbo].[stores];";
$result = sqlsrv_query($conn, $query);
*/
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <link>rel="stylsheet" href="css/main.css"</link>
    <link>rel="stylsheet" href="css/normalize.css"</link>
    <link>rel="stylsheet" href="css/red-hat-font.css"</link>
</head>
 
<body>
    <div>
        <h3>It's all about RHEL + Ansible + SQL!</h3>
    </div>
    </hr>
    <div class="section">
        This is a quick demo of what we can do with PHP and HTML built with Ansible on RHEL.  Thank you for working with us
        and giving us the opportunity to show you the basics.  For follow ups please see the group below and hit us up!
    </div>
    <section>
        <h1>Northwind Pubs</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Store Id</th>
                <th>Store Name</th>
                <th>Store Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['stor_id'];?></td>
                <td><?php echo $rows['stor_name'];?></td>
                <td><?php echo $rows['stor_address'];?></td>
                <td><?php echo $rows['city'];?></td>
                <td><?php echo $rows['state'];?></td>
                <td><?php echo $rows['zip'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>