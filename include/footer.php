  <!--section footer-->
  <section>
        <div class="p-8 bg-gray-700">
      <div class="text-gray-100 text-2xl mb-8">contact me</div>
      <form class="grid space-y-8" method="post" action="submit_message.php">
        <input  name="visitor_name" class="rounded p-2 text-lg w-72" type="text" placeholder="please write your name">
        <textarea name="visitor_message" class="rounded p-2 text-lg w-72" placeholder="please write your message"></textarea>
        <button type="submit" class="bg-blue-500 text-gray-100 w-32 rounded p-2 text-lg" >senden</button>
      </form>
    </div>
      <footer class="bg-gray-800 text-gray-100 p-4 h-32">   
         <?php  echo "copyright Prof Lee 2025" ?>
      </footer>
  </section>
</body>
</html>