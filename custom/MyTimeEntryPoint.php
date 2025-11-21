<?php

echo "<h1>Dummy Data</h1>";

$module = array(
    array("name" => "Accounts", "Status" => "ok"),
    array("name" => "Campaign", "Status" => "Warning"),
    array("name" => "Leads", "Status" => "Success"),
    array("name" => "Contacts", "Status" => "ok"),
    array("name" => "Cases", "Status" => "Complete"),
);

echo "<h2 style='marging:20px;'>Module Health Check</h2>";
echo "<table style='border-collapse:collapse;' cellpadding='10px' border='1'>
<tr> 
<th>ID</th>
<th>Module Name</th>
<th>Status</th>
</tr>";

foreach ($module as $key => $a) {
 $key++;
    echo "<tr>
    <td>{$key}</td>
    <td>{$a['name']}</td>
    <td>{$a['Status']}</td>
    </tr>";
}

echo "</table>";


