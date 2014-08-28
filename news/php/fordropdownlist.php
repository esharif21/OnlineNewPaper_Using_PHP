<?php $hostname = "";
$username = "";
$password = "";
$database = "";

mysql_connect($hostname,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

//getFN();
function getFN()
{
    $query = "SELECT first FROM contacts";
    $FNresult = mysql_query($query); 


    $dropdown = "<select name='contacts'>";

    while( $row = mysql_fetch_assoc($FNresult) )
    {
        $dropdown .= "\r\n<option value='{$row['first']}'>{$row['first']}</option>";
        echo getLN();
        //$last .="\r\n<option value='{$row['last']}'>{$row['last']}</option>";
        //echo $last;
    }

    $dropdown .= "\r\n</select>";

    echo $dropdown;
}

// Get last name
function getLN()
{
    $query = "SELECT last FROM contacts";
    $LNresult=mysql_query($query);

    $last;
    while($row = mysql_fetch_assoc($LNresult))
    {
        $last = "{$row['last']}";
    }
    echo $last;
} //end getLN


mysql_close();
?>

<select name="fdsfd" onchange="document.getElementById('first').value = this.value">
    <!-- <option value="<?//php echo $first; ?>"></option>-->
</select>

<form action="insert.php" method="post">
    First Name: <input type="text" id="first" value=""><br>
    Last Name: <input type="text" id="last"><br>
    Phone: <input type="text" id="phone"><br>
    Mobile: <input type="text" id="mobile"><br>
    Fax: <input type="text" id="fax"><br>
    E-mail: <input type="text" id="email"><br>
    Web: <input type="text" id="web"><br>
    <input type="Submit">
</form>