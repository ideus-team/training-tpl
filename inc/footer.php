    <!-- Footer -->
    <!--<footer></footer>-->

  </div>


  <!-- JavaScript -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.2.3.min.js"><\/script>')</script>

  <script src="js/main.js"></script>

  <?php foreach($js as $value): ?>
    <script src="<?php echo $value; ?>"></script>
  <?php endforeach; ?>

</body>
</html>