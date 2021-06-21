<?php include 'inc/header.php' ?>

    <h2 class="page-header">Create Job Lister</h2> <br>

    <form action="create.php" method="POST">
        <div class="form-group">
            <label><b>Company</b></label>
            <input type="text" class="form-control" name="company">
        </div> 
        <br>

        <div class="form-group">
            <label><b>Category</b></label>
            <select name="category" class="form-select">
                <option value="0">Choose category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
          </select>
        </div> 
        <br>

        <div class="form-group">
            <label><b>Job title</b></label>
            <input type="text" class="form-control" name="job_title">
        </div> 
        <br>

        <div class="form-group">
            <label><b>Description</b></label>
            <textarea type="text" class="form-control" name="description"> </textarea>
        </div> 
        <br>

        <div class="form-group">
            <label><b>Location</b></label>
            <input type="text" class="form-control" name="location">
        </div> 
        <br>

        <div class="form-group">
            <label><b>Salary</b></label>
            <input type="text" class="form-control" name="salary">
        </div> 
        <br>

        <div class="form-group">
            <label><b>Contact user</b></label>
            <input type="text" class="form-control" name="contact_user">
        </div> 
        <br>

        <div class="form-group">
            <label><b>Contact Email</b></label>
            <input type="text" class="form-control" name="contact_email">
        </div> 
        <br>

        <input type="submit" class="btn btn-primary" value="SUBMIT" name="submit">
        <br><br>

    </form>

<?php include 'inc/footer.php' ?>