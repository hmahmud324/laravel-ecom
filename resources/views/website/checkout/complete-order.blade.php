@extends('website.master')


@section('body')

<div class="funds-success-message-container">
  <div class="funds-checkmark-text-container">
    <div class="funds-checkmark-container">
      <svg class="funds-checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="funds-checkmark-circle" cx="26" cy="26" r="25" fill="none"/><path class="funds-checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg> 
      
     <div class="funds-display-on-ie">
       <svg class="funds-ie-checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="funds-ie-checkmark-circle" cx="26" cy="26" r="25" fill="none"/><path class="funds-ie-checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg> 
      </div>
    </div>
    
    <h1 class="funds-success-done-text">Done!</h1>
  </div>
  
  <div class="funds-success-message">
    <h2 class="text-center">Order Placed Successfully.</h2>
    <p class="text-center">Please wait, we will reach you soon.</p>
    <a href="{{route('home')}}" class="font-semibold  continue-button mb-3">Continue</a>
  </div>
  
</div>
    
@endsection

@push('styles')
    <style>



 .continue-button {
  background-color:#00A0B0;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  text-decoration: none;
  font-size: 16px;
  font-weight: 600;
  transition: all 0.2s ease-in-out;
}

.continue-button:hover {
  background-color: black;
}

.funds-success-message-container {
  font-family: Roboto, "Segoe UI", "Helvetica Neue", sans-serif !important;
  color: #00A0B0;
  margin-top: 60px;
  max-width: 1000px;
  margin: 0 auto;
  background-color:cream;
}

.funds-checkmark-text-container {
  display: block;
  width: auto !important;
  max-width: 500px;
  margin: 0 auto;
  text-align: center;
}

.funds-checkmark-container {
  height: 40px;
  padding: 0 4px 0 0px;
  display: inline-block;
  width: 70px;
  margin: 0 auto;
}

.funds-checkmark-container:after {
  clear: both;
}

.funds-success-done-text {
  vertical-align: middle;
  margin: 0;
  padding: 15px 0 0 0;
  display: inline;
}

.funds-success-message {
  text-align: center;
  margin-top: 2em;
}

.funds-success-message h2 {
  margin-top: 0px;
}

h1,
h2 {
  font-weight: 700;
  margin-top: 0px;
}

h1 {
  font-size: 28pt;
  margin-top: 45px;
}

h2 {
  font-size: 18pt;
  margin-top: 25px;
}

p {
  font-size: 12pt;
  padding-bottom: 1em;
  line-height: 27.2px;
}

/* CHECKMARK */
.funds-checkmark-circle {
  stroke-dasharray: 166;
  stroke-dashoffset: 166;
  stroke-width: 5;
  stroke-miterlimit: 10;
  stroke: #33bb11;
  fill: none;
  -webkit-animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
  animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
}

.funds-checkmark {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  display: block;
  stroke-width: 5;
  stroke: #ffffff;
  stroke-miterlimit: 10;
  margin: 10% auto;
  -webkit-box-shadow: inset 0px 0px 0px #33bb11;
  box-shadow: inset 0px 0px 0px #33bb11;
  -webkit-animation: fill 0.4s ease-in-out 0.4s forwards,
    scale 0.3s ease-in-out 0.9s both;
  animation: fill 0.4s ease-in-out 0.4s forwards,
    scale 0.3s ease-in-out 0.9s both;
}

.funds-checkmark-check {
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  stroke-dasharray: 48;
  stroke-dashoffset: 48;
  -webkit-animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
  animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

.funds-display-on-ie {
  display: none;
}

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .funds-display-on-ie {
    display: block;
  }

  .funds-checkmark {
    display: none;
  }

  .funds-ie-checkmark-circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 5;
    stroke-miterlimit: 10;
    stroke: #33bb11;
    fill: none;
    -webkit-animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
  }

  .funds-ie-checkmark {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: block;
    stroke-width: 5;
    stroke: #ffffff;
    stroke-miterlimit: 10;
    margin: 10% auto;
    -webkit-box-shadow: inset 0px 0px 0px #33bb11;
    box-shadow: inset 0px 0px 0px #33bb11;
    -webkit-animation: fill 0.4s ease-in-out 0.4s forwards,
      scale 0.3s ease-in-out 0.9s both;
    animation: fill 0.4s ease-in-out 0.4s forwards,
      scale 0.3s ease-in-out 0.9s both;
  }

  .funds-ie-checkmark-check {
    -webkit-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    -webkit-animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
  }
}

@-webkit-keyframes stroke {
  100% {
    stroke-dashoffset: 0;
  }
}

@keyframes stroke {
  100% {
    stroke-dashoffset: 0;
  }
}

@-webkit-keyframes scale {
  0%,
  100% {
    -webkit-transform: none;
    transform: none;
  }
  50% {
    -webkit-transform: scale3d(1.1, 1.1, 1);
    transform: scale3d(1.1, 1.1, 1);
  }
}

@keyframes scale {
  0%,
  100% {
    -webkit-transform: none;
    transform: none;
  }
  50% {
    -webkit-transform: scale3d(1.1, 1.1, 1);
    transform: scale3d(1.1, 1.1, 1);
  }
}

@-webkit-keyframes fill {
  100% {
    -webkit-box-shadow: inset 0px 0px 0px 30px #33bb11;
    box-shadow: inset 0px 0px 0px 30px #33bb11;
  }
}

@keyframes fill {
  100% {
    -webkit-box-shadow: inset 0px 0px 0px 30px #33bb11;
    box-shadow: inset 0px 0px 0px 30px #33bb11;
  }
}

@media only screen and (max-width: 768px) {
  .funds-checkmark-text-container {
    display: block;
  }
  .funds-checkmark-container {
    height: auto;
    padding: 0;
    display: block;
    width: 100%;
    margin-top:15px;
  }
}

    </style>
@endpush