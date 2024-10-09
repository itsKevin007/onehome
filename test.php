<style>
    // This is just styling for this demo
body {
  padding: 5em;
  text-align: center;
}

h1 {
  margin-bottom: 1em;
}

// Define vars we'll be using
$brand-success: #5cb85c;
$loader-size: 8em;
$check-height: $loader-size/2;
$check-width: $check-height/2;
$check-left: ($loader-size/6 + $loader-size/12);
$check-thickness: 2px;
$check-color: $brand-success;

.spinner{
  text-align: center;
  height: 120px;
  position: relative;
}
.circle-loader {
  margin: 0 0 30px 10px;
  border: $check-thickness solid rgba(0, 0, 0, 0.2);
  border-left-color: $check-color;
  animation-name: loader-spin;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  position: relative;
  display: inline-block;
  vertical-align: top;
}

.circle-loader,
.circle-loader:after {
  border-radius: 50%;
  width: $loader-size;
  height: $loader-size;
}

.load-complete {
  -webkit-animation: none;
  animation: none;
  border-color: $check-color;
  transition: border 500ms ease-out;
}

.load-failed{
   -webkit-animation: none;
  animation: none;
  border-color: red;
  transition: border 500ms ease-out;
}

.checkmark {
  display: none;
  
  &.draw:after {
    animation-duration: 800ms;
    animation-timing-function: ease;
    animation-name: checkmark;
    transform: scaleX(-1) rotate(135deg);
  }
  
  &:after {
    opacity: 1;
    height: $check-height;
    width: $check-width;
    transform-origin: left top;
    border-right: $check-thickness solid $check-color;
    border-top: $check-thickness solid $check-color;
    content: '';
    left: $check-left;
    top: $check-height;
    position: absolute;
  }
}

@keyframes loader-spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: $check-width;
    opacity: 1;
  }
  40% {
    height: $check-height;
    width: $check-width;
    opacity: 1;
  }
  100% {
    height: $check-height;
    width: $check-width;
    opacity: 1;
  }
}

.failed-loader {
    /* margin: 0 0 30px 10px; */
    font-size: 2px;
    position: absolute;
    display: inline-block;
    /* text-indent: -9999em; */
    width: 9em;
    height: 2em;
    top: 21px;
    right: 51.2%;
  /* display: none;*/
  -webkit-animation: none;
  animation: none;
  border-color: red;
  transition: border 500ms ease-out;
}

.failed-loader:after {
    content: '';
    display: block;
    position: absolute;
    /* top: 36%; */
    left: 180%;
    margin: -5px 0 0 -6px;
    width: 1px;
    height: 1px;
    border: solid red;
    border-width: 0 0 .5em 0;
    -webkit-transform: rotate(-315deg);
    -moz-transform: rotate(-315deg);
    -ms-transform: rotate(-315deg);
    -o-transform: rotate(-315deg);
    transform: rotate(-315deg);

}

.failed-loader:before {
    content: '';
    position: absolute;
    /* top: 36%; */
    left: 0%;
    margin: -5px 0 0 -6px;
    height: 0px;
    width: 0px;
    opacity: 1;
    border: solid red;
    border-width: 0 0 .5em 0;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
   
}

.failed-loader{
   display: none;
  
  &.draw2:before{
      -webkit-animation: xmark-p1 1s;
      -moz-animation:    xmark-p1 1s; 
      -o-animation:      xmark-p1 1s; 
      animation:         xmark-p1 1s; 
      animation-fill-mode: forwards;
  }
  
   &.draw2:after {
    -webkit-animation: xmark-p2 1s;
    -moz-animation:    xmark-p2 1s; 
    -o-animation:      xmark-p2 1s; 
    animation:         xmark-p2 1s; 
    animation-fill-mode: forwards;
   
  }
}

@keyframes xmark-p1 {
     100% {
       
       height: 50px;
       width: 70px;
   
    }
}

@keyframes xmark-p2 {
     100% {
       height: 50px;
        width: 70px;
        
  
    }
}
</style>

<div class="spinner">
    <div class="circle-loader">
       <div class="checkmark draw"></div>
    </div>
    <div class="failed-loader draw2 draw3"></div>
</div>

<p><button id="toggle" type="button" class="btn btn-success">Toggle Completed</button></p>

<p><button id="toggle_failed" type="button" class="btn btn-error">Toggle Failed</button></p>

<script>
    $('#toggle').click(function() {
  $('.circle-loader').toggleClass('load-complete');
  $('.checkmark').toggle();
});

$('#toggle_failed').click(function() {
  $('.circle-loader').toggleClass('load-failed');
  $('.failed-loader').toggle();
});
</script>