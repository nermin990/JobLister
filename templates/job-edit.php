<?php include 'inc/header.php' ?>

    <h2 class="page-header">Edit Job Lister</h2> <br>

    <form action="edit.php?id=<?php echo $job->id; ?>" method="POST">
        <div class="form-group">
            <label><b>Company</b></label>
            <input type="text" class="form-control" name="company" value="<?php echo $job->company ?>">
        </div> 
        <br>

        <div class="form-group">
            <label><b>Category</b></label>
            <select name="category" class="form-select">
                <option value="0">Choose category</option>
                    <?php foreach($categories as $category): ?>
                    <?php if($job->category_id == $category->id) : ?>
                        <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?> </option>
                    <?php else : ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?>" </option>
                    <?php endif; ?>  
                <?php endforeach; ?>
          </select>
        </div> 
        <br>

        <div class="form-group">
            <label><b>Job title</b></label>
            <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title ?>">
        </div> 
        <br>

        <div class="form-group">
            <label><b>Description</b></label>
            <textarea type="text" class="form-control" name="description"><?php echo $job->description ?></textarea>
        </div> 
        <br>

        <div class="form-group">
            <label><b>Location</b></label>
            <input type="text" class="form-control" name="location" value="<?php echo $job->location ?>">
        </div> 
        <br>

        <div class="form-group">
            <label><b>Salary</b></label>
            <input type="text" class="form-control" name="salary" value="<?php echo $job->salary ?>">
        </div> 
        <br>

        <div class="form-group">
            <label><b>Contact user</b></label>
            <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user ?>">
        </div> 
        <br>

        <div class="form-group">
            <label><b>Contact Email</b></label>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email ?>">
        </div> 
        <br>

        <input type="submit" class="btn btn-primary" value="SUBMIT" name="submit">
        <br><br>

    </form>

<?php include 'inc/footer.php' ?>