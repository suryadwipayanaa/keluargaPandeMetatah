<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width , initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css">
<title>Keluarga Pande</title>
<link rel="icon" href="../image/logo.png">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

    <!-- floating welcome started -->
    <div class="welcome">
        <div class="image">
            <img src="../image/FrontSide.png">
        </div>
        <div class="image2">
            <img src="../image/FrontSide.png">
        </div>
        <div class="deskripsi">
          <div class="title">
            <h1>Keluarga Pande Tegalinggah</h1>
            <p>Kpd. Bpk/ibu/saudara/i <br>

            <div class="nama">
            <h5 style="font-size: 20px;">
            <?php 
                echo $_GET['name']
            ?> 
            </h5>   
            </div>
                
            <br>Tanpa mengurangi rasa hormat, kami mengundang anda untuk hadir pada acara mepandes(potong gigi)<br>putra - putri kami</p>
            <a  id="open" class="btn"><i class="fa-solid fa-envelope-open-text"></i> Buka Undangan</a>
          </div>
        </div>
        <a class="surya" href="">Made with <i class="fa-sharp fa-solid fa-heart"></i> by Sunthey Project</a>
    </div>
    <!-- floating welcome finished -->

    <!-- music icons started -->
     <div class="sound" id="pause">
        <i class="fa-solid fa-volume-high"></i>
    </div>

     <div class="sound2" id="restart">
        <i class="fa-solid fa-volume-xmark"></i>
    </div>

    <!-- navbar started -->
   <div class="navbar">
    <div class="row">
        <div class="col">
            <div class="nav-item"><a href="#home"><i class="fa-solid fa-house-user"></i></a></div>
        </div>
        <div class="col">
            <div class="nav-item"><a href="#user"><i class="fa-solid fa-user"></i></a></div>
        </div>
        <div class="col">
            <div class="nav-item"><a href="#lokasi"><i class="fa-solid fa-location-dot"></i></a></div>
        </div>
        <div class="col">
            <div class="nav-item"><a href="#komentar"><i class="fa-solid fa-pen"></i></a></div>
        </div>
        <div class="col">
            <div class="nav-item"><a ><i class="fa-solid fa-moon"></i></a></div>
        </div>
    </div>
   </div>
    <!-- navbar finsihed -->
    <!-- music icons finsihed -->
    <div class="container">
       <!-- benner started -->
       <div class="benner" id="home">
        <div class="leaf">
            <img src="../image/daun2.png">
        </div>
        <div class="borderTop">
            <img src="../image/borderTop.png">
        </div>
        <div class="borderBottom">
            <img src="../image/borderBottom.png">
        </div>
        <div class="show"></div>
           <div class="col">
             <h5>Undangan Mepandes</h5>
             <h4>Keluarga Pande Tegallinggah</h4>
             <h5>Tegallinggah | 6 Oktober 2022</h5>
             <i class="fa-solid fa-arrow-down"></i>
            </div>
      </div>
       <!-- benner finsihed -->
       <!-- content started -->
       <div class="content" id="user">
        <div class="kordenTop">
            <img src="../image/korden.png">
        </div>
        <div class="korden">
            <img src="../image/korden.png">
        </div>
        <div class="title">
            <h1>Om Swastyastu</h1>
            <div class="underline">
                <img src="../image/underline.png">
            </div>
        </div>
        <div class="deskripsi">
            <p class="widi">Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa kami bermaksud mengundang Bapak/Ibu/Saudara/i pada Upacara Manusa Yadnya Mepandes (Potong Gigi) putra-putri kami.</p>
            <div class="daun">
                <img src="../image/daun2.png">
            </div>
            <div class="peopleName">
                <ul>
                    <li><h5>Briptu Pande Putu Mega Yusa</h5></li>
                    <li><h5>Pande Kadek Selfia Ariana</h5></li>
                    <li><h5>Pande Putu Rika Wijayani</h5></li>
                    <li><h5>Pande Made Oka Sudibia, S. MIK</h5></li>
                    <li><h5>Pande Putu Nia Andari Putri, S.E</h5></li>
                    <li><h5>Pande Made Budi Astuti</h5></li>
                    <li><h5>Pande Made Rama Atmaja Putra, S.M</h5></li>
                    <li><h5>Pande Komang Renata Putri</h5></li>
                </ul>
            </div>
            <div class="timeToEvent title">
                <h1>Hari Bahagia</h1>
                <div class="underline">
                    <img src="../image/underline.png">
                </div>
                <div class="row time">
                    <div class="col">
                        <div id="hari">0</div>
                        <p>HARI</p>
                    </div>
                    <div class="col">
                        <div id="jam">0</div>
                        <p>JAM</p>
                    </div>
                    <div class="col">
                        <div id="menit">0</div>
                        <p>MENIT</p>
                    </div>
                    <div class="col">
                        <div id="detik">0</div>
                        <p>DETIK</p>
                    </div>
                </div>
            </div>
        </div>
       </div>
       <!-- content finished -->

       <!-- timeplace started -->
       <div class="timePlace" id="lokasi">
        <p>Merupakan suatu kehormatan dan kebahagiaan kami apabila Bapak/Ibu/Saudara/i berkenan hadir memberikan doa restu.</p>
        <div class="box">
            <div class="border">
                <img src="../image/borderTop.png">
            </div>
            <h1>Waktu & Tempat</h1>
            <div class="underline">
                <img src="../image/underline.png">
            </div>
            <ul>
                <li><i class="fa-solid fa-calendar"></i><span> Kamis, 06 Oktober 2022</span></li>
                
                <li><i class="fa-solid fa-clock"></i><span> 09.00 WITA - SELESAI</span></li>

                <li class="map"><i class="fa-sharp fa-solid fa-map-pin"></i><span> Jalan Raya Semabaung, Br. Tegallinggah, Bedulu , Blahbatuh</span></li>
                <a href="https://maps.app.goo.gl/ajknmoqA6oc1D8mJ9" class="btn"><i class="fa-solid fa-location-dot"></i> Map Lokasi Acara</a>
            </ul>
        </div>
       </div>
       <!-- timeplace started -->

       <!-- protokol started -->
       <div class="protokol">
        <div class="daun">
            <img src="../image/daun2.png">
          </div>
          <h1>Protokol Covid 19</h1>
          <div class="underline">
            <img src="../image/underline.png">
          </div>
          <p>Tanpa Mengurangi rasa hormat, dikarenakan situasi yang sedang terjadi ditengah Pandemi Covid-19 ini kami memohon maaf karena acara akan diselenggarakan sesuai peraturan dan himbauan pemerintah</p>
          <div class="row">
                <div class="col">
                    <div class="image">
                        <img src="../image/cuciTangan.png">
                        <span>Cuci Tangan</span>
                    </div>
                </div>
                <div class="col">
                    <div class="image">
                        <img src="../image/pakaiMasker.png">
                        <span>Pakai Masker</span>
                    </div>
                </div>
                <div class="col">
                    <div class="image">
                        <img class="jarak" src="../image/jagaJarak.png">
                        <span>Jaga Jarak</span>
                    </div>
            </div>
           </div>
           <strong>Mari Kita Lindungi Kesehatan Bersama</strong>
        
           <!-- quot started -->
           <div class="quot">
            <div class="quotLeaf">
                <img src="../image/daun2.png">
            </div>
            <div class="deskripsi">
                <p><i class="fa-solid fa-quote-left"></i> Om Hyang Widhi Wasa, semoga hamba mendapat perkenanMu, untuk melalui tahapan hidup ini dalam jalanMu dengan pertolongan hanya diriMu.</p>
                <p class="om">Om dimulyakanlah Engkau ya Tuhan</p>
                <span class="doa"><i class="fa-solid fa-book"></i> Do'a</span>
            </div>
           <!-- quot finished -->
            </div>

           <!-- tamu started -->
            <div class="tamu" id="komentar">
                <h1>Katakan Sesuatu</h1>
                <div class="underline">
                    <img src="../image/underline.png">
                </div>
                <p>Konfirmasi kehadiran anda dengan mengisi detail pada form dibawah ini</p>
                <div class="komentar">
                    <form method="POST" action="" id="myForm" class="formuser" autocomplete="off">
                    <label for="nama">Nama Tamu</label>
                    <input type="text" name="nama" placeholder="Nama Tamu Wajib Diisi" id="nama" required>
                    <label for="pilih">Konfirmasi Kehadiran</label>
                    <select id="pilih" name="pilih">
                        <option>Hadir</option>
                        <option>Tidak Hadir</option>
                        <option>Ragu</option>
                      </select>
                    <label for="jumlahTamu">Jumlah Tamu</label>
                    <select id="jumlahTamu" name="jumlahTamu">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                      <label for="deskripsi">Kirim Ucapan</label>
                      <input type="text" name="deskripsi" placeholder="Masukan Ucapan Anda" id="deskripsi" required>
                      <button type="submit" id="submit" name="submit" class="btn"><i class="fa-solid fa-envelope"></i> Send</button>
                    </form>
                </div>
            </div>
           <!-- tamu finished -->
       </div>
      
       <div class="result">
       
       </div>

       <div class="thanks">
        <p>Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan do'a restu kepada kami. Atas kehadiran dan do'a restu Bapak/Ibu/Saudara/i kami ucapkan terima kasih. Kami Yang Berbahagia</p>
        <h1>Keluarga Pande</h1>
        <div class="underline">
            <img src="../image/underline.png">
        </div>
       </div>

       <!-- footer started -->
        <footer>
            <strong>Made with <i class="fa-sharp fa-solid fa-heart"></i> by Sunthey Project</strong>
            <div class="folow">
                <p>Follow Us</p>
            </div>
            <div class="row">
                <div class="col">
                    <a href="https://api.whatsapp.com/send?phone=085158449402"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
                <div class="col">
                    <a href="https://instagram.com/suryadwipayanaa?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="col">
                    <a href="https://www.facebook.com/surya.dwipayana.758"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
            </div>
        </footer>
       <!-- footer finished -->

       <!-- protokol finished -->
    </div>
<script src="../js/main.js"></script>
<script>
    console.log('AAA KEPO YA BUKA CONSOLE CIEE!! JANGAN LUPA FOLLOW @SURYADWIPAYANAA')
    // komentar realtime show
    $('document').ready(function(){
        setInterval(function(){
            getUser()
        }, 300);
    })

    function getUser(){
        $.ajax({
            url : 'getUser.php',
            type: 'GET',
            success : function(response){
                $('.result').html(response)
            }
        })
    }
    
// komentar realtime show

// insert realtime started
    let form = document.getElementById('myForm');
    function handleForm(e){
        e.preventDefault()
    }
    form.addEventListener('submit', handleForm);

    $('#submit').click(function(){
        $.ajax({
                url : 'master.php',
                type : 'POST',
                data : {
                    nama: $('#nama').val(),
                    pilih: $("#pilih").val(),
                    jumlahTamu: $("#jumlahTamu").val(),
                    deskripsi: $("#deskripsi").val()
                },
                success : function(data){
                    swal("Good job!", "Komentar Ditambahkan", "success");
                }
    })
})
// insert realtime finsihed
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>
</html>