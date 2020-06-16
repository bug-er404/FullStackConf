<div class="container pt-4">
<!-- schedule -->
<h1 id="schedule" class="display-4 text-center my-5 text-muted">Schedule</h1>

   <?php /* Step 1: Connect to database */
    include 'dbconnect.php';
    /* Step 2: Create a query */
    $query = $db->query("select title, time, speacker from schedule");
    /* Step 3: Execute the query that returns the results in an ARRAY*/
    $scheduleArray = $query->fetchAll(PDO::FETCH_ASSOC); ?>

<ul class="list-group">
  <?php  /* Loop through the Array to display the data */
    foreach ($scheduleArray as $row) { ?>

    <li class="list-group-item">
        <div class="d-flex justify-content-between">
            <h5 class="mb-1"><?php echo $row['title']; ?></h5>
            <span class="badge badge-pill badge-info p-2"><?php echo $row['time']; ?></span>
        </div>
        <p class="mb-1"><?php echo $row['speacker']; ?></p>
    </li>
  <?php
    } ?>

</ul><!-- /schedule -->

</div>