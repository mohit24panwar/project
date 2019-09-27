<?php require('header.php');  
$directory_path = "../backEND/Airline";
$sub_directories = array_map('basename',glob($directory_path . '/*', GLOB_ONLYDIR));
?>

<form action="Upload.php" method="POST" enctype="multipart/form-data"> 
<div class="fields">
<label>AirLine List</label>
  <select name="AirLine" id="AirLine" >
    <option value="">Select an AirLine</option>
<?php
foreach($sub_directories as $item){
?>
    <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
<?php } ?>  
  </select>

  </div>
        <h2>Upload Files</h2> 
          
        <p> 
            Select files to upload:  
              
            <!-- name of the input fields are going to 
                be used in our php script-->
            <input type="file" name="files[]" multiple> 
              
            <br><br> 
              
    
        <input type="submit" name="submit" value="Upload" > 
        </p> 
    </form> 
<?php  

// Check if form was submited 
if(isset($_POST['submit'])) { 
$Airline = $_POST['AirLine'];  
    // Configure upload directory and allowed file types 
    $upload_dir = "../backEND/Airline/$Airline".DIRECTORY_SEPARATOR; 
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif', 'pdf'); 
      
    // Define maxsize for files i.e 2MB 
    $maxsize = 10 * 1024 * 1024;  
  
    // Checks if user sent an empty form  
    if(!empty(array_filter($_FILES['files']['name']))) { 
  
        // Loop through each file in files[] array 
        foreach ($_FILES['files']['tmp_name'] as $key => $value) { 
              
            $file_tmpname = $_FILES['files']['tmp_name'][$key]; 
            $file_name = $_FILES['files']['name'][$key]; 
            $file_size = $_FILES['files']['size'][$key]; 
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 
  
            // Set upload file path 
            $filepath = $upload_dir.$file_name; 
  
            // Check file type is allowed or not 
            if(in_array(strtolower($file_ext), $allowed_types)) { 
  
                // Verify file size - 2MB max  
                if ($file_size > $maxsize)          
                    echo "Error: File size is larger than the allowed limit.";  
  
                // If file with name already exist then append time in 
                // front of name of the file to avoid overwriting of file 
                if(file_exists($filepath)) { 
                    $filepath = $upload_dir.time().$file_name; 
                      
                    if( move_uploaded_file($file_tmpname, $filepath)) { 
                        echo "{$file_name} successfully uploaded <br />"; 
                    }  
                    else {                      
                        echo "Error uploading {$file_name} <br />";  
                    } 
                } 
                else { 
                  
                    if( move_uploaded_file($file_tmpname, $filepath)) { 
                        echo "{$file_name} successfully uploaded <br />"; 
                    } 
                    else {                      
                        echo "Error uploading {$file_name} <br />";  
                    } 
                } 
            } 
            else { 
                  
                // If file extention not valid 
                echo "Error uploading {$file_name} ";  
                echo "({$file_ext} file type is not allowed)<br / >"; 
            }  
        } 
    }  
    else { 
          
        // If no files selected 
        echo "No files selected."; 
    } 
}  
  
?> 

<?php require('footer.php');  ?>
