<?php 
include("includes/conn.php");
include_once("includes/header.php");

if(isset($_POST['input-title'])){
    $title=$_POST['input-title'];
}
if(isset($_POST['input-title'])){
    $post=$_POST['input-post'];
}
if(isset($_POST['input-title'])){
    $send=$_POST['input-send'];
}

if(isset($send)){
    $query="INSERT INTO posts(title,post) VALUES('$title','$post')";
    mysqli_query($conn,$query);
}

?>

     
      <!--- Add Post -->
      <div class="add-post">
          <div class="container">
              <h4>Add Post</h4>
              <form action="add-post.php" method="POST">
                  <label>Title</label>
                  <input type="text" placeholder="Add a Title" name="input-title">
                  <label>Post</label>
                  <input type="text" placeholder="Add Post"  name="input-post">
                  <a><button class="btn waves-effect waves-light indigo" type="submit"  name="input-send" >Post</button></a>
                  
              </form>
         
         
         </div>
      </div> 
   
    
    
<?php 
include_once("includes/footer.php");
?>