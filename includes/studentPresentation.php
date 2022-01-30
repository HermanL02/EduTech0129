<?php include_once "header.php";?>
<div class="presentation" style="border-radius: 10px; overflow: hidden;">
        <iframe
          src="https://slides.com/huaxinliao/test/embed?postMessageEvents=true"
          width="800px"
          height="405px"
          frameborder="0"
          title="Test"
          scrolling="no"
          frameborder="0"
          webkitallowfullscreen
          mozallowfullscreen
          allowfullscreen
        ></iframe>
        <button class="button hidden" role="button">End Class</button>
      </div>
      <div class="wrapper hidden">
        <div class="section">
          <ul class="emojis">
            <li class="slide-emoji"><img src="emoji-1.png" alt=""></li>
            <li><img src="emoji-2.png" alt=""></li>
            <li><img src="emoji-4.png" alt=""></li>
            <li><img src="emoji-4.png" alt=""></li>
            <li><img src="emoji-5.png" alt=""></li>
          </ul>
        </div>
        <div class="slider">
          <div class="thumb"><span></span></div>
          <div class="progress-bar"></div>
          <input id = "bt" class="myinput searchbox" type="range" min="0" value="0" max="100">
        </div>
        <button  class="button sendData" role="button" style="margin-top: 10%;">Submit</button>
      </div>
    <?php
    include_once "attendenceStudent.php";
    require_once "notetaking.php";

     include_once "footer.php";?>