 <?php   
    $sql = "SELECT * FROM tb_admin";
    $query = mysqli_query($connect,$sql);
 ?>

 <h1 class="app-page-title">table data admin</h1>
                    <hr class="mb-4" />
                    
                    <div class="row g-4 settings-section">
                        <div class="col-12 col-md-12">
                            <div class="app-card app-card-settings shadow-sm p-4">
                                <div class="app-card-body">
                                    <table class="table table-striped" id="Tableall">
                                          <thead>
                                            <tr>
                                              
                                              <th scope="col">user</th>
                                              <th scope="col">name-lastname</th>
                                              <th scope="col">email</th>
                                              <th scope="col">phone</th>
                                              <th scope="col">image</th>
                                              <th scope="col">status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php   foreach ($query as $data) :  ?>
                                                <tr>
                                                <td><?=$data['user']?></td>
                                                <td><?=$data['firstname']?>-<?=$data['firstname']?></td>
                                                <td><?=$data['email']?></td>
                                                <td><?=$data['phone']?></td>
                                              <td><img src="upload/admin/<?=$data['image']?>" width = "75"></td>
                                              <td><?=($data['status'] == 0 ? 'online' : 'offline')?></td>
                                              <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                  <button type="button" class="btn  btn-secondary"><a href="" >modify</a></button>
                                                  <button type="button" class="btn btn-warning"><a href="">delete</a></button>
                                                
                                              </div>
                                          </td>
                                              
                                             
                                            </tr>
                                            <?php   endforeach; ?>
                                            
                                          </tbody>
                                    </table>
                                </div>
                                <!--//app-card-body-->
                            </div>
                            <!--//app-card-->
                        </div>
                    </div>
                    <!--//row-->
<script type="text/javascript">
$(document).ready( function ()  {
    $('#Tableall').DataTable();
});
</script>

<?php   mysqli_close($connect); ?>
                    
             