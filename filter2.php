<html>
<head>
  <title></title>
</head>
<body>
  <table border="0px">
    <form method='POST' action="filter2.php">
      <tr>
        <td><br>
          From
          <input type="date" id="from" name="from">

        </td>
        <td><br> 
          To
          <input type="date" id="to" name="to">
          <input type="submit" value="Filter">
        </td>
      </tr>     
    </form>
    <form method='POST' action="chart.php">
      <tr>
        <input type="submit" value="chart">
      </tr>
    </form>
    <tbody>
<?php
               require('koneksi.php');
                $from = (isset($_POST['from']) ? $_POST['from'] : '');
                $to = (isset($_POST['to']) ? $_POST['to'] : '');

                  if(!$from == null && !$to == null){
                    $result = $konek->query("SELECT * FROM pemesenan where checkin between '".$_POST['from']."' AND  '".$_POST['to']."' ORDER by Nomor_KTP ASC");
                    while ($mem = mysqli_fetch_assoc($result)):

                    echo '<tr>';
                    echo '<td>'.$mem['Nomor_KTP'].'</td>';
                    echo '<td>'.$mem['nama_pelanggan'].'</td>';
                    echo '<td>'.$mem['checkin'].'</td>';
                    echo '<td>'.$mem['checkout'].'</td>';
                    echo '<td>'.$mem['jeniskamar'].'</td>';
                    echo '<td>'.$mem['nomorhp'].'</td>';
                    echo '<td>'.$mem['gender'].'</td>';
                    
                    echo '<td>'.$mem['status_kamar'].'</td>';
                    echo '<td>'.$mem['Jumlah_biaya'].'</td>';
                    echo '<td>'.$mem['sisa_sewa'].'</td>';
                    echo '</tr>';

                  endwhile;
                }else{
                  $result = $konek->query("SELECT * FROM reservasi");
                  echo "<h1>Informasi Pemesanan";
                  echo "<table border='1'>";
                  echo "<tr>
                        <td>checkin</td>
                        <td>checkout</td>
                        <td>Status_Kamar</td>
                        <td>Jumlah_biaya</td>
                        <td>sisa_sewa</td>
                        </tr>";
                  while ($mem = mysqli_fetch_assoc($result)):

                  echo '<tr>';

/*                  echo '<td>'.$mem['namacus'].'</td>';
                  echo '<td>'.$mem['emailcus'].'</td>';
                  echo '<td>'.$mem['nocus'].'</td>';
                  echo '<td>'.$mem['negaracus'].'</td>';
*/                  echo '<td>'.$mem['checkin'].'</td>';
                  echo '<td>'.$mem['checkout'].'</td>';
                  echo '<td>'.$mem['status_kamar'].'</td>'; 
                  echo '<td>'.$mem['Jumlah_biaya'].'</td>';
                  echo '<td>'.$mem['sisa_sewa'].'</td>';
                   echo '</tr>';

                endwhile;
                }
                /* free result set */
                $result->close();
                ?>
    </tbody>
  </table>

</body>
</html>                