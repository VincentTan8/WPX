<section class="contact-us" style="background-color:#07CA91; text-align: left;" id="contact">

<div class="container" style="text-align: left;">
    <div class="row pb-0">
        <div class="col-md-6">
            <div class="contact">
                         <div style="text-align: left;  ">
                            <img src="../resources/img/apply<?php echo $lang ?>.png" alt="image">
                        </div>
                 
                    


               


                  <div style="text-align: left; height:150px; width:250px">
                            <img src="../resources/img/apply2.png" class="wow rotateInDownLeft" alt="image">
                        </div>
                 
            </div>
            </div>
        <div class="col-md-6 wow rotateInDownLeft" style="background-color: white; border-radius: 25px;">
            <div class="book-table" style="padding-top: 50px;">
                <h2 class="table-booking" style="text-align:center;font-size: 25px; font-weight:bold; font-family:Arial, Helvetica, sans-serif"  >Choose a  trial class </br> 选择试听课程</h2>
            </div>

            <form method="post" action="../includes/save.php" class="contact-form" id="contact-form-data">
                <div class="row" style="margin-top: 40px; margin-left:10px; margin-right:10px">
                    <div class="col-sm-12" id="result"></div>
                        <div class="col-md-6 mb-3">
                            <input required type="text" name="first_name" class=" form-control m-mb-20" placeholder="Given Name 名">
                        </div>

                        <div class="col-md-6 mb-3">
                            <input required type="text" name="last_name" class=" form-control m-mb-20" placeholder="Family Name 姓">
                        </div>
                    

                                <div class="col-md-6 mb-3">
                                    <input required type="email" name="email" class=" form-control m-mb-20" placeholder="Email 电子邮件地址">
                                </div>
                            
                                <div class="col-md-6 mb-3">
                                
                                                            <input required   type="text" name="contact" class=" form-control m-mb-20" placeholder="Contact Number 电话号码">

                                
                                </div>

                    <div class="col-md-12 mb-12">
                      
                            <select required title="" class=" js-example-basic-single" name="course">

 <option value="">Select a Course 选择课程
</option>

                                <option value="Exam-oriented Course (Kids)
">Exam-oriented Course (Kids) 面向考试的课程（儿童）
</option>
                                <option value="Exam-oriented Chinese Course (Adult)
">Exam-oriented Chinese Course (Adult) 面向考试的中文课程（成人）
</option>
                                <option value="Kids English Courses
">Kids English Courses 儿童英语课程
</option>
                                <option value="Adult English Courses
">Adult English Courses 成人英语课程
</option>
                                <option value="Chinese Idioms
">Chinese Idioms 中文成语
</option>
                                <option value="Filipino Program
">Filipino Program 菲律宾语课程
</option>
                                 
                            </select>
                    </div>

                   </br> </br>  </br> 
 
                            <div class="col-md-12 mb-6">
                      
                                                   <textarea type="text" name="message" class=" form-control m-mb-20" placeholder="Message 消息"></textarea>

                     
                            </div>

                           
                    <div class="col-md-12 text-center text-md-center">

                        <input type="submit" name="btnExit" style="width: 60%;" value="REGISTER 注册" class="btn btn-green btn-large btn-rounded ">
                     
                    </div>

                    </br> </br> </br> </br>
            

                   

            </form>
        </div>
        </div>
    </div>
</section>
