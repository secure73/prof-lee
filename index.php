<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>
<body>
  <!--navbar-->
  <section>
    <nav class="bg-gray-800 text-gray-100 p-4">
        <ul class="flex space-x-6 hover:[&>li]:underline">
          <li><a href="#">home</a></li>
          <li><a href="#">about</a></li>
          <li><a href="#">portfolio</a></li>
          <li><a href="#">contact</a></li>
        </ul>
    </nav>
  </section>

  <!-- section Hero-->
  <section>
    <div class="bg-gradient-to-tr from-gray-900 to-gray-700 text-gray-100 min-h-32 shadow-md  flex items-center p-4 space-x-4">
      <div>
        <div class="text-2xl">Welcome Prof. Lee website</div>
        <p class="text-xs"> Phd Microprocessor design</p>   
      </div>
      <div>
        <img class="h-32 w-32 rounded-full" src="http://127.0.0.1:5500/assets/img/sunset.webp">
      </div>
    </div>
  </section>

  <!--section content-->
  <section>
    <div class="p-8">
      <div class="grid grid-cols-3 gap-4">

          <div class="border border-gray-300 rounded-md shadow-md">
              <div class="bg-gray-700 text-gray-100 text-center text-lg font-semibold pt-2 pb-2 rounded-tl-md rounded-tr-md shadow-md">header</div>
              <div class="p-4 border-b " >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
              <div class="p-4">read more...</div>
          </div>

          <div class="border border-gray-300 rounded-md shadow-md">
              <div class="bg-gray-700 text-gray-100 text-center text-lg font-semibold pt-2 pb-2 rounded-tl-md rounded-tr-md shadow-md">header</div>
              <div class="p-4 border-b " >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
              <div class="p-4">read more...</div>
          </div>

          <div class="border border-gray-300 rounded-md shadow-md">
              <div class="bg-gray-700 text-gray-100 text-center text-lg font-semibold pt-2 pb-2 rounded-tl-md rounded-tr-md shadow-md">header</div>
              <div class="p-4 border-b " >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
              <div class="p-4">read more...</div>
          </div>

      </div>
    </div>
    
  </section>

  <!--section footer-->
  <section>
        <div class="p-8 bg-gray-700">
      <div class="text-gray-100 text-2xl mb-8">contact me</div>
      <form class="grid space-y-8" action="/index.html" method="post">
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
