<?php 
include 'koneksi.php';
$users = mysqli_query($db,"SELECT * FROM user ORDER BY id desc");
?>

<?php foreach($users as $user): ?>
    <ul style="margin-top:20px">
         <li class="kiri"><img src="../image/user.jpg"></li>
         <li>
            <strong><?php echo $user['nama'] ?></strong><span><i class="fa-solid fa-check"></i> <?php echo $user['pilih'] ?></span>
            <p><?php echo $user['jumlahTamu'] ?> Tamu</p>
        </li>
        <p style="margin-top: 10px;"><?php echo $user['deskripsi'] ?></p>
       </ul>
       <hr>
 <?php endforeach; ?>