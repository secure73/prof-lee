<? if($IS_DEV): ?>
 <!-- ************************* IMPORTANT JUST DEV MODE **************** -->
  <!-- server area section -->
  <section>
    <div class="min-h-32 bg-red-100">
        <pre>
          <span class="text-red-500"><?php echo var_dump($_POST)?></span>
        </pre>
    </div>
  </section>

<!-- Working area section -->
    <section>
    <div class="min-h-32 bg-blue-100">
        <?=$_POST["visitor_name"]?>, your message received successfully!
    </div>
  </section>
  <!-- ************************* IMPORTANT JUST DEV MODE **************** -->
  <? endif ?>