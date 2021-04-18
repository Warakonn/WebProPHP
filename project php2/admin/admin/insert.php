 <h1 class="app-page-title">เพิ่มข้อมูลผู้ดูเเลระบบ</h1>
                    <hr class="mb-4" />
                    <div class="row g-4 settings-section">
                        <div class="col-12 col-md-12">
                            <div class="app-card app-card-settings shadow-sm p-4">
                                <div class="app-card-body">


                                    <?php
                                        
                                        if (isset($_POST) && !empty($_POST)){
                                             # code...print_r($_POST);
                                             #echo '<pre>';
                                             #print_r($_FILES);
                                             #echo '</pre>';
                                             #exit();
                                            $user = $_POST['user'];
                                            $Password = $_POST['Password'];
                                            $name = $_POST['name'];
                                            $lastname = $_POST['lastname'];
                                            $email = $_POST['email'];
                                            $Phone= $_POST['Phone'];
                                            if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
                                                $extension = array("jpeg","jpg","png");
                                                $target = 'upload/admin/';
                                                $filename = $_FILES['image']['name'];
                                                $filetmp = $_FILES['image']['tmp_name'];
                                                $ext = pathinfo($filename,PATHINFO_EXTENSION);
                                                if(in_array($ext,$extension)){
                                                    if (!file_exists($target.$filename)) {
                                                        if (move_uploaded_file($filetmp,$target.$filename)) {
                                                            $filename = $filename;
                                                    }else{
                                                        echo 'เพิ่มไฟล์เข้า folder ไม่สำเร็จ';
                                                    }
                                            }else{
                                                $newfilename = time().$filename;
                                                if (move_uploaded_file($filetmp,$target.$newfilename)) {
                                                            $filename = $newfilename;
                                                    }else{
                                                        echo 'เพิ่มไฟล์เข้า folder ไม่สำเร็จ';
                                                    }
                                            }
                                        }else{
                                            echo 'ประเภทไฟล์ไม่ถูกต้อง';
                                        }
                                    }else{
                                        $filename = 'ไม่ได้เลือกรูปภาพ';
                                    }
                                    // echo $filename;
                                    // exit();

                                            $sql = "INSERT INTO tb_admin
                                                      (firstname, lastname, email,phone,user, pass,image)
                                            VALUES ('$name','$lastname','$email',' $Phone','$user','$Password','$filename')";
                                             if (mysqli_query($connect,$sql)) {
                                              echo "success";
                                            } else {
                                              echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                                            }
                                            mysqli_close($connect);

                                        }

                                    ?>

                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label">image</label>
                                            <div>
                                            <img id="preview" width="150" height="200">
                                        </div>
                                            <input type="file" class="form-control"  name = "image" id="image" />
                                        </div>
                                         <div class="mb-3">
                                            <label class="form-label">UserName</label>
                                            <input type="text" class="form-control"  name = "user" placeholder="username : admin" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="setting-input-2" class="form-label">Password</label>
                                            <input type="Password" class="form-control" name = "Password" placeholder="Password : 12345678" required />
                                        </div>
                                        <hr class="mt-4">
                                        
                                        <div class="mb-3">
                                            <label for="setting-input-2" class="form-label">name</label>
                                            <input type="text" class="form-control" name = "name" placeholder="name" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="setting-input-2" class="form-label">lastname</label>
                                            <input type="text" class="form-control" name = "lastname" placeholder="lastname" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="setting-input-2" class="form-label">Email</label>
                                            <input type="text" class="form-control" name = "email" placeholder="email" required />
                                        </div>
                                         <div class="mb-3">
                                            <label for="setting-input-2" class="form-label">Phone</label>
                                            <input type="text" class="form-control" name = "Phone" placeholder="Phone" required />
                                        </div>
                                        <button type="submit" class="btn app-btn-primary">Save</button>
                                    </form>
                                </div>
                                <!--//app-card-body-->
                            </div>
                            <!--//app-card-->
                        </div>
                    </div>
                    <!--//row-->
                     <script type="text/javascript">
             function readURL(input) {
              if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                  $('#preview').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]); // convert to base64 string
              }
            }

            $("#image").change(function() {
              readURL(this);
            });
         </script>
                   