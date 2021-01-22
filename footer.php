  </div>
</main>
<footer>
  <div class="wrapper">

  </div>
</footer>



<?php wp_footer(); ?>

  <!-- MODAL -->
  <div class="modal" tabindex="0">
    <button class="closeModal"><i class="far fa-times-circle"></i></button>
    <!-- The modal content -->
    <div class="modalContent">
      <h2 class="modalHeader"><?php the_field('modal_header'); ?></h2>
      <p class="modalDescription"><?php the_field('modal_description'); ?></p>
      <!-- Contact form 7 -->
      <?php echo do_shortcode( '[contact-form-7 id="46" title="Contact form 1"]' ); ?>
    </div>
  </div>
  <div class="modalOverlay"></div>

</body>
</html>