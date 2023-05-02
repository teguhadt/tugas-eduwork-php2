<?php
/**
 * inisialisasi nilai i yaitu 0, kondisi i lebih kecil dari 9, iterasi i akan bertambah 1
 * loop dimulai dari nilai i yaitu mulai dari 0, setelah itu mengecek kondisi apakah nilai i < 9, jika benar akan menjalankan perintah loop yang berada didalamnya dan terjadi proses increment.
 */
for ($i=0; $i<9; $i++) {
  /**
 * inisialisasi nilai j yaitu 0, kondisi j lebih kecil sama dengan dari 9, iterasi i akan bertambah 1
 * loop dimulai dari nilai j yaitu mulai dari 0, setelah itu mengecek kondisi apakah nilai j lebih kecil sama dengan dari nilai i, jika benar akan mencetak nilai j dan terjadi proses increment dan looping kembali sampai memenuhi kondisi j <= i 
 */
  for ($j=0; $j<=$i; $j++) {
    //mencetak nilai j
    echo "$j";
  }
  //mencetak baris
  echo "<br>"; 
}
?>
