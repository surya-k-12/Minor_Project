<!-- Apply Button -->
<form class="apply-form" action="sapp.html" method="get">
    <input type="hidden" name="jobId" value="<?php echo $row['job_id']; ?>">
    <input type="hidden" name="jobTitle" value="<?php echo urlencode($row['jobTitle']); ?>">
    <button type="submit" name="apply">Apply</button>
</form>
