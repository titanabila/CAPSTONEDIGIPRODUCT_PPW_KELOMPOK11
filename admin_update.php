<?php
@include 'database.php';

$id = $_GET['edit'];

if(isset($_POST['update_ebook'])){

   $ebook_title = $_POST['ebook_title'];
   $ebook_pdf = $_FILES['ebook_pdf']['name'];
   $ebook_pdf_tmp_name = $_FILES['ebook_pdf']['tmp_name'];
   $ebook_pdf_folder = 'ebook_files/'.$ebook_pdf;

   if(empty($ebook_title) || empty($ebook_pdf)){
      $message[] = 'Please fill out all fields';    
   }else{

      $update_data = "UPDATE ebooks SET title='$ebook_title', pdf_file='$ebook_pdf' WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($ebook_pdf_tmp_name, $ebook_pdf_folder);
         header('location:admincreate.php');
      }else{
         $message[] = 'Could not update the ebook'; 
      }

   }
};

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

<div class="container">
   <div class="admin-ebook-form-container centered">

      <?php
         $select = mysqli_query($conn, "SELECT * FROM ebooks WHERE id = '$id'");
         while($row = mysqli_fetch_assoc($select)){
      ?>
      
      <form action="" method="post" enctype="multipart/form-data">
         <h3 class="title">Update Ebook</h3>
         <input type="text" class="box" name="ebook_title" value="<?php echo $row['title']; ?>" placeholder="Enter ebook title">
         <input type="file" class="box" name="ebook_pdf" accept="application/pdf">
         <input type="submit" value="Update Ebook" name="update_ebook" class="btn">
         <a href="admincreate.php" class="btn">Go back!</a>
      </form>

      <?php }; ?>

   </div>
</div>

</body>
</html>
