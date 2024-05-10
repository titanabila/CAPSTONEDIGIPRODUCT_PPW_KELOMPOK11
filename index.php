<?php
session_start();
require "dbconnect.php";

// if (!isset($_SESSION['username'])) {
//     header('Location: login.php');
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
            margin-bottom: 10px; 
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
    </style>



<body>
<!-- <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1> -->
<h1>Selamat datang!</h1>
    <header>
        <h1>~ Web Belajar ~</h1>
        <nav>
            <ul>
                <!-- <li><a href="#">Dashboard</a></li> -->
                <!-- <li><a href="#pembelajaran">Materi Hari ini</a></li>
                <li><a href="#referensi">Referensi Bacaan</a></li> -->
                <li><a href="userlogin.php">User</a></li>
                <li><a href="login.php">Admin</a></li>
                <!-- <li><a href="logout.php">Logout</a></li> -->
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

    <!-- <section id="pembelajaran" class="pembelajaran">
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
    </footer>  -->

    <!-- <section class="referensi" id="referensi">
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
                </tbody>
            </table>
        </div>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Web Belajar</p>
    </footer> -->


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
        document.addEventListener('DOMContentLoaded', function() {
    const addForm = document.getElementById('add-form');
    const productList = document.getElementById('product-list');

    addForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const price = document.getElementById('price').value;

        fetch('add_product.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ name: name, price: price })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                getProductList();
            } else {
                alert('Gagal menambahkan produk.');
            }
        });
    });

    function getProductList() {
        fetch('get_products.php')
        .then(response => response.json())
        .then(data => {
            productList.innerHTML = '';

            data.forEach(product => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${product.id}</td>
                    <td>${product.name}</td>
                    <td>${product.price}</td>
                    <td>
                        <button onclick="updateProduct(${product.id})">Update</button>
                        <button onclick="deleteProduct(${product.id})">Delete</button>
                    </td>
                `;
                productList.appendChild(row);
            });
        });
    }

    getProductList();
});

function deleteProduct(id) {
    if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
        fetch('delete_product.php?id=' + id, {
            method: 'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                getProductList();
            } else {
                alert('Gagal menghapus produk.');
            }
        });
    }
}

function updateProduct(id) {
    const newName = prompt('Masukkan nama produk baru:');
    const newPrice = prompt('Masukkan harga produk baru:');

    if (newName && newPrice) {
        fetch('update_product.php?id=' + id, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ name: newName, price: newPrice })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                getProductList();
            } else {
                alert('Gagal memperbarui produk.');
            }
        });
    }
}

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>