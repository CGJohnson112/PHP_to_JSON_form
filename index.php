<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP UI Interact form</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<body>

<div class="container">
<body>  
           <br />  
           <div class="container">  
                <h3>Work Search Activity Details</h3><br /> 
                <h6>* Required information</h6>                
                <form action ="append_json_data.php" method="post">  
                 
            <div class="container_form">
            <p>Provide the following information about your job search during the week of <b>Sunday <span id="dateBegin"> Bill Csoby</span></b> through <b>Saturday <span id="dateEnd">Theooooo!</span></b></p>
               
                <label>Date Contact:</label>
                <div class="input-group date col-md-7" data-provide="datepicker">
                        <input type="text" class="form-control" data-date-format="mm/dd/yyyy" name="date"   />
                        <div className="input-group-addon">
                          
                        </div>
                    </div>
                                    
                    <label>Employer Contact:</label>
                    <div class="form-group col-md-7">
                        <input type="text" class="form-control" name="employer" />  
                    </div>
                    
                    <label>Person spoke:</label>
                    <div class="form-group col-md-7">
                        <input type="text"class="form-control" name="contact"/>  
                    </div>

                    <label>Type Of Work:</label>
                    <div class="form-group col-md-7">
                         <input type="text" class="form-control"  name="workType" />     
                    </div>

                    <label>Type of Activity:</label>
                    <div class="form-group col-md-7">
                            <select class="form-control" name="activity" >
                                <option value=''></option>
                                <option value='in person'>In Person</option>
                                <option value='email'>Email</option>
                                <option value='online'>Online</option>
                                <option value='phone'>Phone</option>
                            </select>
                     
                            </div>


                    <label>Results:</label>
                    <div class="form-group col-md-7">
                           <input type="text" class="form-control"  name="results"/>
                      
                    </div>
               
                    <input type="submit" name="submit" class="btn btn-whatever" ></input>
                </form>

           
            </div>


            
                </form>  
           </div>  
           <br />  
<?php
include('table.php');
?>



</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>