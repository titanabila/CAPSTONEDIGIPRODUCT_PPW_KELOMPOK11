<?php
session_start();
require "database.php";
$select_ebooks = mysqli_query($conn, "SELECT * FROM ebooks");
// if (!isset($_SESSION['username'])) {
//     header('Location: userlogin.php');
//     exit;
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    

</head>   

        <style>

header {
    background-color: #007bff; /* Warna latar belakang */
    padding: 20px; /* Padding untuk memberi ruang di sekitar isi header */
    color: #ffffff; /* Warna teks */
    text-align: center; /* Posisi teks ke tengah */
}

h1 {
    background-color: #007bff; /* Warna latar belakang */
    padding: 10px; /* Padding untuk memberi ruang di sekitar teks */
    color: #ffffff; /* Warna teks */
    text-align: center; /* Posisi teks ke tengah */
}

        h1 {
            margin-top: 25px;
            font-family: "Arial", sans-serif; 
            font-size: 28px; 
            font-weight: bold; 
            color: #fff; 
        }

        /* header {
            background-color: #cceeff;
            padding: 20px; 
        } */

        #pembelajaran h2 {
            font-family: "Arial", sans-serif; 
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        #scrollToTopBtn {
        display: none; 
        position: fixed; 
        bottom: 20px;
        right: 20px;
        z-index: 99; 
        border: none; 
        outline: none; 
        background-color: #007bff;
        color: white; 
        cursor: pointer; 
        padding: 15px;
        border-radius: 50%;
        }

        #scrollToTopBtn:hover {
        background-color: #0056b3; 
        }

        .kategori-item {
            width: 100%; 
            margin: 0 auto;
            text-align: justify; 
            padding: 20px;
            border: 1px solid #ccc; 
            border-radius: 5px; 
            background-color: #f9f9f9; 
        }

        .kategori-item h3 {
            margin-bottom: 20px; 
            text-align: center;
        }

        .kategori-item p {
            margin-bottom: 5px; 
        }

        .thead th {
        text-align: center; 
        }

        .thead td {
        text-align: left; 
        }

        .ebook-display {
        margin-top: 20px;
        }

        .ebook-display{
        margin:2rem 0;
        }

        .ebook-display .ebook-display-table{
        width: 100%;
        text-align: center;
        }

        .ebook-display .ebook-display-table thead{
        background: var(--bg-color);
        }

        .ebook-display .ebook-display-table th{
        padding:1rem;
        font-size: 2rem;
        }

        .ebook-display .ebook-display-table td{
        padding:1rem;
        font-size: 2rem;
        border-bottom: var(--border);
        }

        .ebook-display .ebook-display-table .btn:first-child{
        margin-top: 0;
        }

        .ebook-display .ebook-display-table .btn:last-child{
        background: crimson;
        }

        .ebook-display .ebook-display-table .btn:last-child:hover{
        background: var(--black);
        }

        .ebook-display h2 {
            text-align: center; 
            font-family: Arial, sans-serif; 
            font-weight: bold; 
            font-size: 40px; 
            color: #333; 
            margin-bottom: 20px; 
            text-decoration: underline; 
        }



        </style>

<body>

<button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">Top</button>

<h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
    <header>
        <h1>~ Web Belajar ~</h1>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#pembelajaran">Materi Hari ini</a></li>
                <li><a href="#referensi">Referensi Bacaan</a></li>
                <li><a href="#ebook-display">ebook-display</a></li>
                <li><a href="userlogout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="banner">
        <img src="books.png" width="290px">
        <div class="banner-text">
            <h2>Web Belajar</h2>
            <p>Informasi pembelajaran terbaru dan ter-update.</p>
        </div>
    </section>

    <section class="featured-products">
        <h2>Don't Give Up !</h2>
        <div class="produk">
            <div class="produk-item">
                <img src="quote2.jpg" alt="Produk 2" width="350px">
                <p>tetap terorganisir dan termotivasi untuk mencapai tujuanmu.</p>
            </div>
            <div class="produk-item">
                <img src="quote1.jpeg" alt="Produk 1" width="350px">
                <p>Setiap orang memiliki kemampuan untuk memberikan kontribusi positif, meskipun hanya melalui tindakan-tindakan kecil.</p>
            </div>
            <div class="produk-item">
                <img src="quote4.jpg" alt="Produk 3" width="350px">
                <p>Percayalah pada diri sendiri dan jangan pernah menyerah pada impianmu.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Web Belajar</p>
    </footer>

    <section id="pembelajaran" class="pembelajaran">
        <h2>BIOLOGY</h2>
        
        <div class="kategori-item">
        <h3>Ekologi</h3>
        <p>Ekologi adalah ilmu yang mempelajari interaksi antara organisme dengan lingkungannya, termasuk struktur dan fungsi ekosistem.
        Ekologi adalah cabang ilmu yang mendalami hubungan antara organisme dan lingkungannya. Ini termasuk cara organisme berinteraksi satu sama lain, baik dari spesies yang sama maupun berbeda, 
        serta bagaimana mereka berinteraksi dengan unsur-unsur lingkungan, baik yang hidup maupun tidak. Misalnya, dalam komunitas hutan, ekologi mempelajari bagaimana pohon, hewan, dan mikroorganisme saling berinteraksi, serta bagaimana faktor-faktor
        seperti curah hujan, temperatur, dan komposisi tanah memengaruhi kehidupan di sana. Ekologi juga memeriksa bagaimana perubahan lingkungan, baik yang disebabkan oleh aktivitas manusia atau faktor alami, dapat mempengaruhi organisme
        dan ekosistem secara keseluruhan. Studi ekologi penting karena memberikan pemahaman yang mendalam tentang bagaimana kita dapat menjaga keseimbangan alam dan melindungi keanekaragaman hayati di planet ini.
        </p>
    </div>
    <div class="kategori-item">
        <h3>Ruang Lingkup Ekologi</h3>
        <p>Ruang lingkup ekologi sangat luas dan mencakup berbagai tingkatan organisasi, mulai dari individu hingga ekosistem. Ini juga melibatkan studi tentang berbagai
            ekosistem, termasuk hutan, padang rumput, sungai, danau, dan lingkungan urban. Ekologi juga terkait erat dengan berbagai disiplin ilmu lain,
            seperti genetika, geografi, kimia, dan sosiologi.
        </p>
    </div>
    <div class="kategori-item">
        <h3>Sejarah Perkembangan Ilmu Ekologi</h3>
        <p>Ilmu ekologi telah berkembang sejak abad ke-19, ketika para ilmuwan mulai memperhatikan pentingnya interaksi antara organisme dan lingkungannya.
            Salah satu tonggak penting dalam sejarah ekologi adalah penemuan teori evolusi oleh Charles Darwin pada abad ke-19, yang membawa pemahaman tentang
            bagaimana organisme beradaptasi dengan lingkungannya. Selanjutnya, ilmuwan seperti Ernst Haeckel dan Alfred Russel Wallace memperkenalkan konsep
            ekologi dan biogeografi. Pada abad ke-20, perkembangan teknologi dan penemuan seperti satelit dan alat pengukuran lingkungan modern membantu mendorong perkembangan ilmu ekologi.
        </p>
    </div>
    <div class="kategori-item">
        <h3>Tingkatan Organisasi Ekologi</h3>
        <p>Individu: adaptasi organisme terhadap lingkungan</p>
        <p>Populasi: dinamika populasi, faktor-faktor yang memengaruhinya</p>
        <p>Komunitas: interaksi antar populasi dalam suatu habitat</p>
        <p>Ekosistem: keterkaitan antara organisme dan lingkungan abiotiknya</p>
    </div>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Web Belajar</p>
    </footer>

    <section class="referensi" id="referensi">
        <div class="container">
            <h2>Referensi Bacaan</h2>
            <p>Di bawah ini adalah beberapa referensi belajar:</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Link Referensi</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><a href="https://www.gramedia.com/literasi/ilmu-ekologi/#google_vignette">Referensi Bacaan 1 from gramedia.com</a></td>
                        <td>Pengertian - Ruang Lingkup</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><a href="https://repository.penerbitwidina.com/publications/347321/ekologi-lingkungan-hidup-dan-pembangunan">Referensi Bacaan 2 from repository.penerbitwidina</a></td>
                        <td>Lingkungan hidup dan Pembangunan</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><a href="https://journal.untar.ac.id/index.php/jstupa/article/download/12479/9126">Referensi Bacaan 3 from journal.untar</a></td>
                        <td>Budaya dan Tradisi</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><a href="http://file.upi.edu/Direktori/FPMIPA/JUR._PEND._BIOLOGI/196805091994031-KUSNADI/BUKU_SAKU_BIOLOGI_SMA,KUSNADI_dkk/Kelas_X/EKOLOGI_DAN_KONSEP_EKOSISTEM.pdf">Referensi Bacaan 4 from upi.edu</a></td>
                        <td>Ekologi dan Konsep Ekosistem</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td><a href="https://repository.syekhnurjati.ac.id/3009/1/buku%20Ekologi%20full.pdf">Referensi Bacaan 5 from repo.syekhnurjati</a></td>
                        <td>Ekologi</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td><a href="https://lindungihutan.com/blog/pengertian-ekologi-dan-contohnya/">Referensi Bacaan 6 from lindungihutanblog</a></td>
                        <td>Pengertian, Contoh, Manfaat</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Web Belajar</p>
    </footer>

    <section class="ebook-display" id="ebook-display">
    <div class="container">
    <h2>Ebook Library</h2>
    <div class="ebook-display">
        <table class="ebook-display-table">
            <thead>
                <tr>
                    <th>Ebook Title</th>
                    <th>Download</th>
                </tr>
            </thead>
            <?php while($row = mysqli_fetch_assoc($select_ebooks)){ ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td><a href="ebook_files/<?php echo $row['pdf_file']; ?>" class="btn" download>Download</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    </section>

    <script>
        function showLogin() {
            document.getElementById('registration').style.display = 'none';
            document.getElementById('login').style.display = 'block';
        }

        function showRegistration() {
            document.getElementById('login').style.display = 'none';
            document.getElementById('registration').style.display = 'block';
        }

    </script>

    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollToTopBtn").style.display = "block";
        } else {
            document.getElementById("scrollToTopBtn").style.display = "none";
        }
        }
        function scrollToTop() {
        document.body.scrollTop = 0; 
        document.documentElement.scrollTop = 0; 
        }

    </script>
</body>