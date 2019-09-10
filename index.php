<?php 
include("includes/conn.php");
include_once("includes/header.php");
$query = "SELECT * FROM posts";
$result= mysqli_query($conn,$query);
if(isset($result)){
    while($row=mysqli_fetch_assoc($result)){ ?>
    
    
<div class="article">
    <div class= "container">
            <h5><a href="post.php?id=<?php echo $row['id']?>"><?php echo $row['title'];?></a></h5>
            <p><?php echo $row['post'];?></p>
            <a href="post.php?id=<?php echo $row['id']?>"><button>Read More</button></a>

    </div>
</div>    
<?php
    }
}
    
    
?>
            <!---- Side Nav ---->
    <ul id="slide-out" class="sidenav">
       <li><a href="index.php">Home</a></li>
       <li><a href="add-post.php">Add post</a></li>
       <li><a href="about.php">About</a></li>
        
    </ul>    
   
    
<?php 
include_once("includes/footer.php");
?>