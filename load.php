<?php
$conn = new mysqli('localhost', 'root', '', 'test');

$output = "";
$sql = $conn->query("SELECT * FROM employee"
);

// Table header
$output .= '<table class="table">
<thead>
  <tr>
  <th scope="col">
  <input type="checkbox" class="select-all" onclick="selectall()">
  <button type="submit" class="deletess" id="deletess">Delete</button>
</th>
  <th scope="col">NAME</th>
    <th scope="col">mobile</th>
    <th scope="col">Email</th>
    <th scope="col">state</th>
    <th scope="col">city</th>
    <th scope="col">pincode</th>
    <th scope="col">Address</th>
    <th scope="col">img</th>
    
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>';

while ($row = $sql->fetch_assoc()) {
    $output .= "
    <tr>
    <td> <input type='checkbox'  class='selectAll' name='delete[]' id='{$row['ID']}' data-id='{$row['ID']}'></td>
        <td>{$row['NAME']}</td>
        <td>{$row['mobile']}</td>
        <td>{$row['Email']}</td>
        <td>{$row['state']}</td>
        <td>{$row['city']}</td>
        <td>{$row['pincode']}</td>
        <td>{$row['address']}</td>
        <td><img src='images/{$row['img']}' style='height:50px;width:50px;'></td>
        <td>
        
        <button type='submit' class='update' data-update='{$row['ID']}'>Update</button>
        </td>
    </tr>";
}

// Close table body and table
$output .= '</tbody></table>';

echo $output;
?>
