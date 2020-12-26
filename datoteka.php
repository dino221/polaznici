<?php

$studentsJson = file_get_contents(__DIR__ . '/polaznici.json');
$students = json_decode($studentsJson, true);

?>

<!-- ISPISIVANEJ PODATAKA U TABLICU -->

<table border = "1" cellpadding="10">
<tr>
    <th>Ime</th>
    <th>Prezime</th>
    <th>Godine</th>
    <th>Email</th>
    <th>Telefon</th>
</tr>

<?php   
    foreach ($students as $student) {
        echo '<tr>';
            echo '<td>' . $student['name'] . '</td>';
            echo '<td>' . $student['surname'] . '</td>';
            echo '<td>' . $student['age'] . '</td>';
            echo '<td>' . $student['email'] . '</td>';
            echo '<td>' . $student['phone'] . '</td>';
        echo '</tr>';
    }

    ?>
</tabele>

<!-- DODAVANJE NOVOG POLAZNIKA -->
<?php
$students[] = [
    "name" => "Iva",
    "surname" => "Vukorepa",
    "age" => 48,
    "email" => "iva.vukorepa@gmail.com",
    "phone" => 3859765777

];

$studentsJson = json_encode($students);

file_put_contents(__DIR__ . '/polaznici.json', $studentsJson);
$studentsJson = file_get_contents(__DIR__ . '/polaznici.json');
$students = json_decode($studentsJson, true);


?>

<!-- ISPIS PODATAKA U TABLICU -->__DIR__


<table border = "1" cellpadding = "10">
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Godine</th>
        <th>Email</th>
        <th>Telefon</th>
    </tr>

<?php
    foreach ($students as $student) {
        echo '<tr>';
            echo '<td>' . $student['name'] . '</td>';
            echo '<td>' . $student['surname'] . '</td>';
            echo '<td>' . $student['age'] . '</td>';
            echo '<td>' . $student['email'] . '</td>';
            echo '<td>' . $student['phone'] . '</td>';
        
    }

?>

</table>
