<?php
  // Nomor 1
  $row1AND = false and false;
  $row1OR = false or false;
  $row2AND = false and true;
  $row2OR = false or true;
  $row3AND = true and false;
  $row3OR = true or false;
  $row4AND = true and true;
  $row4OR = true or true;

  echo "Tabel Logika 1111<br>";
?>
<table border="1">
  <tr>
    <thead>
      <th>Input 1</th>
      <th>Input 2</th>
      <th>AND</th>
      <th>OR</th>
    </thead>
  </tr>
  <tr>
    <td>false</td>
    <td>false</td>
    <td><?php 
        if ($row1AND == false) {
          echo 0;
        } else {
          echo 1;
        }
      ?>
    </td>
    <td><?php 
        if ($row1OR == false) {
          echo 0;
        } else {
          echo 1;
        }
      ?>
    </td>
  </tr>
  <tr>
    <td>false</td>
    <td>true</td>
    <td><?php 
        if ($row2AND == false) {
          echo 0;
        } else {
          echo 1;
        }
      ?>
    </td>
    <td><?php 
        if ($row2OR == false) {
          echo 0;
        } else {
          echo 1;
        }
      ?>
    </td>
  </tr>
  <tr>
    <td>true</td>
    <td>false</td>
    <td><?php 
        if ($row3AND == false) {
          echo 0;
        } else {
          echo 1;
        }
      ?>
    </td>
    <td><?php 
        if ($row3OR == false) {
          echo 0;
        } else {
          echo 1;
        }
      ?>
    </td>
  </tr>
  <tr>
    <td>true</td>
    <td>true</td>
    <td><?php 
        if ($row4AND == false) {
          echo 0;
        } else {
          echo 1;
        }
      ?>
    </td>
    <td><?php 
        if ($row4OR == false) {
          echo 0;
        } else {
          echo 1;
        }
      ?>
    </td>
  </tr>
</table>

<?php
  // Nomor 2
  $input1_1 = "Ayo";
  $input1_2 = "Bersama";
  $input2_1 = "Belajar";
  $input2_2 = "Niomic";

  echo "<h1>Operator String</h1>";
?>
<table border="1">
  <tr>
    <thead>
      <th>Input 1</th>
      <th>Input 2</th>
      <th>Hasil</th>
    </thead>
  </tr>
  <tr>
    <td><?php echo $input1_1 ?></td>
    <td><?php echo $input2_1 ?></td>
    <td><?php echo "$input1_1 " . $input2_1 ?></td>
  </tr>
  <tr>
    <td><?php echo $input2_1 ?></td>
    <td><?php echo $input2_2 ?></td>
    <td><?php echo "$input2_1 " . $input2_2 ?></td>
  </tr>
</table>
<?php
  echo "Gabungan : $input1_1 "."$input2_1 "."$input1_2 "."$input2_2<br>";
?>