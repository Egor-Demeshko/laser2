<footer>
      <div>
        <p>
            <?php
                $company_name = ls_get_custom_fields('company_name');
                $unp = ls_get_custom_fields('unp');
                $address = ls_get_custom_fields('address'); // address
                $bank = ls_get_custom_fields('bank');
                $bink = ls_get_custom_fields('bink');
            ?>
            <?php echo $company_name; ?>
          <br>
          УНП: <?php echo $unp; ?><br>
          АДРЕС: <?php echo $address; ?><br>
          БАНКОВСКИЕ РЕКВИЗИТЫ: <?php echo $bank; ?><br>
          БИК: <?php echo $bink; ?>
        </p>

        <a href="https://t.me/egor_demeshko" aria-label="Связаться с разработчиком через Telegram" rel="author" target="_blank">
          <div class="developer" aria-hidden="true">
            <span>Сайт разработан</span>
            <span>ED</span>
          </div>
        </a>
      </div>
    </footer>

</body>
<?php
    wp_footer();     

?>
</html>