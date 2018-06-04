<?php
                require('koneksi.php');
                $from = (isset($_POST['from']) ? $_POST['from'] : '');
                $to = (isset($_POST['to']) ? $_POST['to'] : '');

                  if(!$from == null && !$to == null){
                    $result = $konek->query("SELECT * FROM reservasi where checkin between '".$_POST['from']."' AND  '".$_POST['to']."' ORDER by ID_Reservasi ASC");
                    while ($mem = mysqli_fetch_assoc($result)):

                    echo '<tr>';
                    echo '<td>'.$mem['ID_Reservasi'].'</td>';
                    echo '<td>'.$mem['nama'].'</td>';
                    echo '<td>'.$mem['checkin'].'</td>';
                    echo '<td>'.$mem['checkout'].'</td>';
                    echo '<td>'.$mem['room_type'].'</td>';
                    echo '<td>'.$mem['guest'].'</td>';
                    echo '<td>'.$mem['room'].'</td>';
                    echo '</tr>';

                  endwhile;
                }else{
                  $result = $konek->query("SELECT * FROM reservasi");

                  while ($mem = mysqli_fetch_assoc($result)):

                  echo '<tr>';
                  echo '<td>'.$mem['ID_Reservasi'].'</td>';
                  echo '<td>'.$mem['nama'].'</td>';
                  echo '<td>'.$mem['checkin'].'</td>';
                  echo '<td>'.$mem['checkout'].'</td>';
                  echo '<td>'.$mem['room_type'].'</td>';
                  echo '<td>'.$mem['guest'].'</td>';
                  echo '<td>'.$mem['room'].'</td>';
                  echo '</tr>';

                endwhile;
                }
                /* free result set */
                $result->close();
                ?>