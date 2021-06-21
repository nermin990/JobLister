<?php include 'inc/header.php' ?>

      <div class="box-holder">
        <h1>Find a job</h1>
        <form method="GET" action="index.php">
          <select name="category" class="form-select" id="category_id">
            <option value="0">Choose category</option>
              <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
              <?php endforeach; ?>
          </select>
          <br>
          <input type="submit" class="btn btn-primary" value="FIND">
        </form>
      </div>

    <h3><?php echo $title; ?></h3>
    <?php foreach($jobs as $job): ?>
      <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $job->job_title; ?></h4>
          <p><?php echo $job->description; ?></p>
        </div>
        <div class="col-md-2">
          <a href="job.php?id=<?php echo $job->id; ?>" class="btn btn-secondary">View</a>
        </div>
      </div>
    <?php endforeach; ?>


<?php include 'inc/footer.php' ?>
