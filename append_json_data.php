<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  {
      echo "pie";

           if(file_exists('employee.json'))  {  
               
                $current_data = file_get_contents('employee.json');  
                $array_data = json_decode($current_data, true); 
                $make_id = hexdec(uniqid()); 
                $extra = array(  
                    
                    'id'         =>       $make_id,
                     'date'          =>     $_POST["date"],
                     'employer'     =>     $_POST["employer"], 
                     'contact'     =>     $_POST["contact"], 
                     'workType'     =>     $_POST["workType"],
                     'activity'     =>     $_POST["activity"], 
                     'results'     =>     $_POST["results"] 
                );  

               
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                
                if(file_put_contents('employee.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Successfully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not here';  
           }  
    
     } 

 header('Location: index.php');
 ?>  