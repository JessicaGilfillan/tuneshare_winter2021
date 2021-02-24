<?php require('header.php'); ?>
    <main>
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="fname"> First Name </label>
                <input type="text" name="fname" id="fname" class="form-control">
            </div> 
            <div class="form-group">
                <label for="lname"> Last Name </label>
             <input type="text" name="lname" id="lname" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="genre"> Favourite Genre </label>
                <input type="text" name="genre" id="genre" class="form-control">
            </div>
            <div class="form-group">
                <label for="location"> Your Location </label>
                <input type="text" name="location" id="location" class="form-control">
            </div> 
            <div class="form-group">
             <label for="email"> Your Email </label>
             <input type="email" name="email" id="email" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="age"> Your Age </label>
                <input type="number" name="age" id="age"class="form-control">
            </div> 
            <div class="form-group">
                <label for="favsong"> What Are You Listening To Right Now?  </label>
                <input type="text" name="favsong" id="favsong" class="form-control"> 
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary">
        </form>
    </main>
    <?php require('footer.php'); ?>