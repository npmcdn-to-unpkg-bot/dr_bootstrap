<div id="accordion">
  <?php foreach ($content as $row) : ?>
    <h3><?php echo $row['title']; ?></h3>
    <div>
      <p><?php echo $row['content']; ?></p>
    </div>
  <?php endforeach; ?>
</div>

<script>
  jQuery(document).ready(function ($) {
    $("#accordion").accordion();
  });
</script>