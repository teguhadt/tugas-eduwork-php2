<?php
/**
 * inisialisasi nilai i yaitu 9, kondisi i lebih besar sama dengan 1, iterasi i akan berkurang 1
 * loop dimulai dari nilai i yaitu mulai dari 9, setelah itu mengecek kondisi apakah nilai i >= 1, jika benar akan menjalankan perintah loop yang berada didalamnya dan terjadi proses decrement
 */
for ($i=9; $i>=1; $i--) {
/**
 * inisialisasi nilai j yaitu 1, kondisi j lebih kecil sama dengan i, iterasi j akan bertambah 1
 * loop dimulai dari nilai j yaitu mulai dari 1, setelah itu mengecek kondisi apakah nilai j lebih kecil dari nilai i, jika benar akan mencetak nilai j dan terjadi proses increment dan looping kembali sampai memenuhi kondisi j <= i 
 */
  for ($j=1; $j<=$i; $j++) {
    //mencetak bintang
    echo "*"; 
  }
  //mencetak baris
  echo "<br>";
}
?>