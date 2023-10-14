<?php 
include 'koneksi.php';
$users = mysqli_query($db,"SELECT * FROM user ORDER BY id desc");
?>





<?php foreach($users as $user): ?>
    <div class="wrapper" style="margin:20px;">
    <ul >
        <div class="img-user">
        <li class="kiri"><img src="../image/user.jpg"></li>
        </div>
        <div class="text-user">
         <li>
            <div class="nama" style="align-items: center; display:flex;" >
                <div class="nama-user">
            <strong style="font-size: 24px; margin-right:10px ;" class="nama"><?php echo $user['nama'] ?></strong>
            </div>
            <div class="icon-user">
             <span><i id="check-icon" class="fa-solid fa-check"></i> <?php echo $user['pilih'] ?></span>
             </div>
            </div>
            <p ><?php echo $user['jumlahTamu'] ?> Tamu</p>
            <p style=""><?php echo $user['deskripsi'] ?></p>
        </li>
        </div>
    </ul>
    </div>
    <hr/>
 

 <?php endforeach; ?>