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
  echo ("
    <table>
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
        <td>$row1AND</td>
        <td>$row1OR</td>
      </tr>
      <tr>
        <td>false</td>
        <td>true</td>
        <td>$row2AND</td>
        <td>$row2OR</td>
      </tr>
      <tr>
        <td>true</td>
        <td>false</td>
        <td>$row3AND</td>
        <td>$row3OR</td>
      </tr>
      <tr>
        <td>true</td>
        <td>true</td>
        <td>$row4AND</td>
        <td>$row4OR</td>
      </tr>
    </table>
  ");

  // Nomor 2
  $input1_1 = "Ayo";
  $input1_2 = "Bersama";
  $input2_1 = "Belajar";
  $input2_2 = "Niomic";

  echo "<h1>Operator String</h1>";
  echo ("
    <table>
      <tr>
        <thead>
          <th>Input 1</th>
          <th>Input 2</th>
          <th>Hasil</th>
        </thead>
      </tr>
      <tr>
        <td>$input1_1</td>
        <td>$input2_1</td>
        <td>$input1_1 "."$input2_1</td>
      </tr>
      <tr>
        <td>$input2_1</td>
        <td>$input2_2</td>
        <td>$input2_1 "."$input2_2</td>
      </tr>
    </table>
  ");
  echo "Gabungan : $input1_1 "."$input2_1 "."$input1_2 "."$input2_2<br>";
?>