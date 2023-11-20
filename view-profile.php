<h1>My Profile</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>  
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($profile = $profiles->fetch_assoc()){
?>
  <tr>
   <td><?php echo $profile['user_id'];?></td> 
   <td><?php echo $profile['user_name'];?></td>
   <td><?php echo $profile['user_email'];?></td>
   <td><?php echo $profile['user_password'];?></td>

  </tr>
<?php
}  
?>
    </tbody>
  </table>
</div>
