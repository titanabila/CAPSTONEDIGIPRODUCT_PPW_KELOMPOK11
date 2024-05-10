<?php
require "database.php";
$select_ebooks = mysqli_query($conn, "SELECT * FROM ebooks");
?>

<?php
if(isset($_POST['add_ebook'])){
   $ebook_title = $_POST['ebook_title'];
   $ebook_pdf = $_FILES['ebook_pdf']['name'];
   $ebook_pdf_tmp_name = $_FILES['ebook_pdf']['tmp_name'];

   if(empty($ebook_title) || empty($ebook_pdf)){
      $message[] = 'Please fill out all fields';
   }else{
      $ebook_pdf_folder = 'ebook_files/'.$ebook_pdf;
      $insert = "INSERT INTO ebooks(title, pdf_file) VALUES('$ebook_title', '$ebook_pdf')";
      $upload = mysqli_query($conn, $insert);
      if($upload){
         move_uploaded_file($ebook_pdf_tmp_name, $ebook_pdf_folder);
         $message[] = 'New ebook uploaded successfully';
      }else{
         $message[] = 'Could not upload the ebook';
      }
   }
}

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM ebooks WHERE id = $id");
   header('location:admincreate.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}
?>

<!-- <div class="container">
   <div class="admin-ebook-form-container">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Upload New Ebook</h3>
         <input type="text" placeholder="Enter ebook title" name="ebook_title" class="box">
         <input type="file" name="ebook_pdf" accept="application/pdf" class="box">
         <input type="submit" class="btn" name="add_ebook" value="Upload Ebook">
      </form>
   </div>

   <?php
   $select = mysqli_query($conn, "SELECT * FROM ebooks");
   ?>
   <div class="ebook-display">
      <table class="ebook-display-table">
         <thead>
            <tr>
               <th>Ebook Title</th>
               <th>Actions</th>
            </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
            <tr>
               <td><?php echo $row['title']; ?></td>
               <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                  <a href="admincreate.php?delete=<?php echo $row['id']; ?>" class="btn">Delete</a>
               </td>
            </tr>
         <?php } ?>
      </table>
   </div> -->

</div>

</body>
</html>

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
            margin-bottom: 25px;
            font-family: "Arial", sans-serif; 
            font-size: 28px; 
            font-weight: bold; 
            color: #fff; 
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

        :root{
        --green:#27ae60;
        --black:#333;
        --white:#fff;
        --bg-color:#eee;
        --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
        --border:.1rem solid var(--black);
        }

        *{
        font-family: 'Poppins', sans-serif;
        margin:0; padding:0;
        box-sizing: border-box;
        outline: none; border:none;
        text-decoration: none;
        text-transform: capitalize;
        }

        .admin-ebook-form-container {
    background-color: #f9f9f9; 
    padding: 40px;
    margin-bottom: 5px; 
    border-radius: 10px;
    }

.ebook-display {
    background-color: #ffffff; /* Warna latar belakang untuk kontainer tabel */
    padding: 40px;
    border-radius: 8px; /* Sudut bulat untuk kontainer tabel */
}

        .admin-ebook-form-container.centered{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        
        }

        .admin-ebook-form-container form{
        max-width: 40rem;
        margin:0 auto;
        padding:2rem;
        border-radius: .5rem;
        background: var(--bg-color);
        }

        .admin-ebook-form-container form h3{
        text-transform: uppercase;
        color:var(--black);
        margin-bottom: 1rem;
        text-align: center;
        font-size: 2.5rem;
        }

        .admin-ebook-form-container form .box{
        width: 100%;
        border-radius: .5rem;
        padding:1.2rem 1.5rem;
        font-size: 1.7rem;
        margin:1rem 0;
        background: var(--white);
        text-transform: none;
        }

        .ebook-display-table {
        margin-top: 10px;
        margin-bottom: 40px;
        width: 100%;
        border-collapse: collapse;
        }

.ebook-display-table th, .ebook-display-table td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: center;
}

.ebook-display-table th {
    background-color: #f2f2f2;
}

.ebook-display-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.ebook-display-table tr:hover {
    background-color: #f2f2f2;
}

.btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 5px 10px;
    font-size: 14px;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 5px;
}

.btn:hover {
    background-color: #0056b3;
}

.btn:active {
    background-color: #004080;
}

.fas.fa-edit {
    margin-right: 5px;
}

.btn-delete {
    font-size: 14px;
    background-color: #dc3545;
}

.btn-delete:hover {
    background-color: #c82333;
}

.btn-delete:active {
    background-color: #bd2130;
}



        .btn-logout {
            background-color: #dc3545; 
            color: #fff;
            padding: 8px 15px; 
            text-decoration: none; 
            border: none; 
            border-radius: 4px;
            cursor: pointer; 
        }

        .btn-logout:hover {
            background-color: #c82333; 
        }

        .btn-logout:active {
            background-color: #bd2130;
        }

        .logout-btn {
            text-align: right; /* Atur tata letak teks ke kanan */
            margin-bottom: 20px; /* Ruang di bawah tombol logout */
        }

</style>

<body>

<button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">Top</button>

<h1>Selamat datang, Admin</h1>
    <header>
        <h1>~ Web Belajar ~</h1>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <!-- <li><a href="#pembelajaran">Materi Hari ini</a></li>
                <li><a href="#referensi">Referensi Bacaan</a></li> -->
                <li><a href="#ebook-display">Ebook Management</a></li>
                <li><a href="logout.php">Logout</a></li>
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
<!-- 
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Web Belajar</p>
    </footer> -->

    <section class="ebook-display" id="ebook-display">
    <div class="container">
   <div class="admin-ebook-form-container">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Upload New E-book</h3>
         <input type="text" placeholder="Enter ebook title" name="ebook_title" class="box">
         <input type="file" name="ebook_pdf" accept="application/pdf" class="box">
         <input type="submit" class="btn" name="add_ebook" value="Upload Ebook">
      </form>
   </div>

   <?php
   $select = mysqli_query($conn, "SELECT * FROM ebooks");
   ?>
   <div class="ebook-display">
      <table class="ebook-display-table">
         <thead>
            <tr>
               <th>E-book Title</th>
               <th>Actions</th>
            </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
            <tr>
               <td><?php echo $row['title']; ?></td>
               <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                  <a href="admincreate.php?delete=<?php echo $row['id']; ?>" class="btn">Delete</a>
               </td>
            </tr>
         <?php } ?>
      </table>
   </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Web Belajar</p>
    </footer>

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