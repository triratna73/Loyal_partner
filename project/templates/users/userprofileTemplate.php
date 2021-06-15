<body onload="disable();">
  <article class="profile">
    <section class="form_container">
      <h2><?php if($data){echo "Update Profile Details";}?><br></h2>
      <div onclick="enable();" class="editbtn"><h5>Edit <i class="fas fa-pen"></i></h5></div>
      <p><?php echo $status; ?></p>
      <form method="post" action="index.php?page=userprofile">
        <div class="cont">
        <input type="hidden" name="user_id" value=<?php echo $uid;?>>
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" value="<?php if($data){echo $data['firstname'];}?>" required placeholder="Client's updated first name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lastname" name="lastname" value="<?php if($data){echo $data['lastname'];}?>" required placeholder="Client's updated last name..">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php if($data){echo $data['email'];}?>" required placeholder="Updated Email Address">

        <input type="submit" id="update" name="Update" value="Update Profile">
        </div>
      </form>
    </section>
  </article>
</body>