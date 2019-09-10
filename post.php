<?php 
include("includes/conn.php");
include_once("includes/header.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$query ="SELECT * FROM posts WHERE id = " . $id;
$result= mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
    
?>
           
<div class="article">
    <div class= "container">
        <h5><?php echo $row['title'];?></a></h5>
        <p><?php echo $row['post'];?></p>
    </div>
</div>  
            <!---- Side Nav ---->
    <ul id="slide-out" class="sidenav">
       <li><a href="index.php">Home</a></li>
       <li><a href="add-post.php">Add post</a></li>
       <li><a href="about.php">About</a></li>
        
    </ul>    
   
    
<?php 
include_once("includes/footer.php");
?>