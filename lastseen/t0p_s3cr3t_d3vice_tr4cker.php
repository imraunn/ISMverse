<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Location</title>
    <style>
        /* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  background: rgb(0 0 0 / 82%);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
  margin-left: -10px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 250px;
  font-size: 18px;
  padding: 10px;
  border: 1px solid #fff;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

        .neon{
            color: #fff;
            animation: glow 1s ease-in-out infinite alternate;
        }
/* typewriter */

@import url('https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&display=swap');
.css-typing p {
  border-right: .15em solid orange;
  font-family: "Courier";
  font-size: 25px;
  white-space: nowrap;
  overflow: hidden;
  font-family: Lato, sans-serif;
}
.css-typing p:nth-child(1) {
  width: 10.5em;
  -webkit-animation: type 3s steps(60, end);
  animation: type 3s steps(60, end);
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}

.css-typing p:nth-child(2) {
  width: 9em;
  opacity: 0;
  -webkit-animation: type2 4s steps(80, end);
  animation: type2 4s steps(80, end);
  -webkit-animation-delay: 2s;
  animation-delay: 3s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}

.css-typing p:nth-child(3) {
  width: 7.3em;
  opacity: 0;
  -webkit-animation: type3 5s steps(180, end), blink .5s step-end infinite alternate;
  animation: type3 5s steps(180, end), blink .5s step-end infinite alternate;
  -webkit-animation-delay: 3s;
  animation-delay: 7s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}


#image-holder {
  width: 500px;
  height: auto;
  position: absolute;
  left: 300px;
  top: 200px; /* Or perhaps different coordinates */
  display: none;
}

.map {
    height: 400px;
    width: 50%;
    padding: 2rem 5rem 10rem 6rem;
    margin-left: 80px;
    margin-top: -18px;
}

@keyframes type {
  0% {
    width: 0;
  }
  99.9% {
    border-right: .15em solid orange;
  }
  100% {
    border: none;
  }
}

@-webkit-keyframes type {
  0% {
    width: 0;
  }
  99.9% {
    border-right: .15em solid orange;
  }
  100% {
    border: none;
  }
}

@keyframes type2 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  99.9% {
    border-right: .15em solid orange;
  }
  100% {
    opacity: 1;
    border: none;
  }
}

@-webkit-keyframes type2 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  99.9% {
    border-right: .15em solid orange;
  }
  100% {
    opacity: 1;
    border: none;
  }
}

@keyframes type3 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes type3 {
  0% {
    width: 0;
  }
  1% {
    opacity: 1;
  }
  100% {
    opacity: 1;
  }
}

@keyframes blink {
  50% {
    border-color: transparent;
  }
}
@-webkit-keyframes blink {
  50% {
    border-color: tranparent;
  }
}









    </style>
</head>
<body>
    <!-- The video -->
<video autoplay muted loop id="myVideo">
    <source src="bc.mp4" type="video/mp4">
    <img id="image-holder" alt="">
  </video>
  
  <!-- Optional: some overlay text to describe the video -->
  <div class="content typewriter">
    <!-- <h1 class="neon">Last Live Location!</h1>
    <h5 class="neon">Catch me if you can ...</h5> -->
    <!-- Use a button to pause/play the video with JavaScript -->
   
    <button id="myBtn" onClick="showImage()">Last Live Location >>></button>
<div id="first" style="height:400px; width:100%; display:none; margin-left: 5%;margin-right: auto;">
    <img class="map" src="map.png"/>
</div>
    <div class="css-typing">
        <p>
            Oh!! You made it here?!
        </p>
        <p>
          Catch me if you can
        </p>
        <p>
          TRY ME OUT !!
        </p>
      </div>
      
  </div>




  <script>
    // Get the video
    var video = document.getElementById("myVideo");
    
    // Get the button
    var btn = document.getElementById("myBtn");
    
    // Pause and play the video, and change the button text
    // function myFunction() {
    //   if (video.paused) {
    //     video.play();
    //     btn.innerHTML = "Pause";
    //   } else {
    //     video.pause();
    //     btn.innerHTML = "Play";
    //   }
    // }
    function showMyImage() {
  var img = document.getElementById('image-holder');
  img.src = "map.png";
  img.style.display = 'block';
}
const showImage = () => {
        document.getElementById("first").style.display ='block';
    }
    </script>
</body>
</html>