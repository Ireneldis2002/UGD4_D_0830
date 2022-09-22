<?php include '../component/sidebar.php'?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
0.19);">

<div id="content"> 
    <div class="container_fluid">
        <form method="post" action="profilePage.php" enctype="multipart/form-data">
            <h4>PROFILE</h4>
            <hr>
            <br>
            <i class="fa fa-pencil-square-o fa-2x" style="color: red"></i>
            <div class="form-group">
                <label>Username</label> 
                <input type="text" name="user" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phonenum" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label>Membership</label>
                <input type="text" name="member" class="form-control">
            </div>
        </form>
    </div>
</div>