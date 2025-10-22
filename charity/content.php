<?php
if(!isset($_SESSION)){
session_start();
ob_start();
}
?>  
  
  <?php
                                     $where= "AND UPPER(category)='".$category."'";
                                  if($category=='') {
                                        $where='';
                                  }
                                      
                                  
                                    $query = "SELECT * FROM recorded_courses WHERE UPPER(main_menu)='".$main_menu."'".$where;
                                                                      
                                    $query = mysqli_query($db_connection, $query);                                  
                                    while ($company = mysqli_fetch_array($query)){

                                        

                                        
                                        $currency='$';

                                       if($company['currency_set']=='USD' OR $company['currency_set']==''){
                                                $currency='$';
                                       }
                                        

                                        




                                    echo '<div class=" mr-0 mr-lg-10">
                                        <div class="d-flex justify-content-between pt-20">
                                            <div class="responsive-two-column-grid">
                                                <div>                                            
                                                    <img src="../linguistic/img/thumbnails/'.$company['thumbnails'].'" alt="blog1">
                                                </div>
                                                       
                                                <div class="price2 mr-2 mt-10" style="margin-top:-10px">
                                                    <p style="font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:25px">'.$company['details1'].'</p>

                                                    <p style="font-family:Arial, Helvetica, sans-serif;   font-size:15px; font-weight:100" class="text-capitalize menu-heading mb-10">'.$company['details2'].' </p>';

                                                    include "../includes/tags.php";

                                           
                                                    echo '<div style="margin-top: 30px; font-size: 20px;"">
                                                         <p class=" price2 mr-2 mt-10" style="color: red;"> 
                                                        <a href="https://example.com" class="round-button">MORE &nbsp; <i class="fas fa-external-link-alt"></i></a>
                                                        <span style="float: right; font-size:35px"><b style="font-size: 15px;">'.$currency.'</b>'.number_format((float)$company['price'],2).'</span>
                                                        
                                                        
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>';
                                    }
                                    ?>