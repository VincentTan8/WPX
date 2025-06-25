   
   <?php
         
         if(!isset($lang)) {
            if(!isset($_SESSION['lang'])) {
             $lang='';
            }
            else
            {
                $lang=$_SESSION['lang'];
            }
         }
                                        $class_tags_field="class_tags".$lang;  
                                            $tag_field="tags".$lang;
                                         $tags= ','.$company[$tag_field];
                                        $tags = getWords($tags);

                                        $class_tags= ','.$company[$class_tags_field];
                                        $class_tags = getWords($class_tags);

                                        $string = ','.$company[$tag_field];
                                        $parts = explode(",", $string);

                                        $string = ','.$company[$class_tags_field];
                                        $parts_class = explode(",", $string);


                                                        for ($i = 1; $i < count($parts); $i++) {
                                                                $substring_after_comma = trim($parts[$i]);
                                                            
                                                                echo '<div class="rounded-corner-text" style="margin-top:10px; " >
                                                                        <p style="margin-top:-5px; "> '. $substring_after_comma.' </p>   
                                                                    </div>&nbsp;&nbsp';
                                                         
                                                        }
 
                                                  if($company[$class_tags_field]!='') {

                                                      echo '<h1></h1>';
                                                    
                                                         for ($i = 1; $i < count($parts_class); $i++) {
                                                                $substring_after_comma = trim($parts_class[$i]);
                                                                echo '<div class="rounded-corner-text" style="margin-top:10px;
                                                                background-color:#FCEECC; 
                                                                border: 1px solid #F7DEA1; ">
                                                                        <p style="margin-top:-8px; color:#F29100 "> '. $substring_after_comma.' </p>   
                                                                    </div>&nbsp;&nbsp';
                                                        }
                                                  }
                                                      

                                         

