<div class="table-repsonsive">
<table class="table">

<thead>
<th>Date of Activity</th>
<th>Employer Contact</th>
<th>Person Spoke to </th>
<th>Type work </th>
<th>Type of activity</th>
<th>Results</th>
<th>Action </th>
</thead>
<tbody>
<?php
$data = file_get_contents("employee.json");
$data=json_decode($data, true);

foreach($data as $row) {
    echo '<tr>';
    echo '<td>' . $row['date'] . '</td>';
    echo '<td>' . $row['employer'] . '</td>';
    echo '<td>' . $row['contact'] . '</td>';
    echo '<td>' . $row['workType'] . '</td>';
    echo '<td>' . $row['activity'] . '</td>';
    echo '<td>' . $row['results'] . '</td>';
    echo '<td><button class="btn btn-warning">Deleteee</button></td>';
    echo '</tr>';
}



?>
<tbody>
</table>
</div>