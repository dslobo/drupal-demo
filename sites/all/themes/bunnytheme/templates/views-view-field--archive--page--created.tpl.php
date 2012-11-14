on <?php 
$data = $row->{$field->field_alias};
print(format_date($data, 'custom', 'F d, Y'));
?>