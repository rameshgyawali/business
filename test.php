<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<style>
.camera-container {
  max-width: 100%;
  border: 1px solid black;
}
.verification-image {
  width: 300px;
  height: auto;
  max-width: 100%;
}
.btn {
  margin-top: 10px;
}
#captureCanvas, #uploadCanvas {
  display: none;
}
input[name="image-upload"] {
  display: none;
}
#errorAlert, #warningAlert {
  display: none;
}
</style>
<i class="fa fa-building"></i>

<i class="fa fa-credit-card-alt"></i>
<div class="row justify-content-md-center">
  <div class="col-lg-4 text-center">
    <p><strong>Verification Photo</strong></p>
      <!-- Canvas For Uploaded Image -->
      <canvas id="uploadCanvas" width="300"  height="300"></canvas>
      <!-- Default Canvas Image -->
      <img src="defaultupload.png" id="uploadedPhoto" alt="upload"/>
      <!-- Upload Image Input & Upload Photo Button -->
      <input type="file" name="image-upload" accept="image/png, image/jpeg">
      <button id="upload" type="button" class="btn btn-outline-primary btn-lg">Upload Photo</button>
  </div>
  <div class="col-lg-4 text-center">
    <p><strong>Video</strong></p>
    <!-- Camera -->
    <div class="camera-container">
      <video id="video" width="100%" height="300" autoplay="true">
      </video>
    </div>
    <!-- Take Photo Button -->
    <button id="capture" type="button" class="btn btn-outline-primary btn-lg">Take Photo</button>
  </div>
  <div class="col-lg-4 text-center">
    <p><strong>Photo Taken</strong></p>
  
    <!-- Canvas For Capture Taken -->
    <canvas id="captureCanvas" width="300"  height="300"></canvas>
    <!-- Default Canvas Image -->
    <img src="defaultphoto.png" id="capturedPhoto" alt="capture" />
    <!-- Verify Photos Button -->
    <button id="verify" type="button" class="btn btn-outline-success btn-lg">Verify Photo</button>
  </div>
</div>
<!-- INSERT NEXT CODE HERE -->
<div class="row">
  <div class="col-lg-12 text-center">
    <!-- API Match Result & API Percentage Score -->
    <h2 id="match" class="mt-5"></h2>
    <p id="score" class="lead"></p>
  </div>
  <div class="col-lg-12 text-center">
    <!-- Error & Warning Alerts -->
    <div class="alert alert-danger" id="errorAlert"></div>
    <div class="alert alert-warning" id="warningAlert"></div>
  </div>
</div>
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {

var video = document.getElementById('video'), 
captureCanvas = document.getElementById('captureCanvas'), 
uploadCanvas = document.getElementById('uploadCanvas'), 
captureContext = captureCanvas.getContext('2d'),
uploadContext = uploadCanvas.getContext('2d'),
uploadedPhoto = document.getElementById('uploadedPhoto'),
capturedPhoto = document.getElementById('capturedPhoto'),
imageUploadInput = document.querySelector('[name="image-upload"]'),
apiKey = 'yo4d8o74n6-iuzr45ey7kb',
errorAlert = document.getElementById('errorAlert'), AlertwarningAlert = document.getElementById('warningAlert'),
matchText = document.getElementById('match'),
scoreText = document.getElementById('score');
///////////////////
// Stream Camera To Video Element
if(navigator.mediaDevices.getUserMedia){
  navigator.mediaDevices.getUserMedia({ video: true })
  .then(function(stream) {
    video.srcObject = stream;
  }).catch(function(error) {
    console.log(error)
  })
}
////////////
// Set Photo To Canvas Function
//var width=image.width
//var  height=image.height
function setImageToCanvas(image, id, canvas, context,width=image.width,height=image.height) {
  var ratio = width / height;
  var newWidth = canvas.width;
  var newHeight = newWidth / ratio;
  if (newHeight > canvas.height) {
    newHeight = canvas.height;
    newWidth = newHeight * ratio;
  }
  context.clearRect(0, 0, canvas.width, canvas.height);
  context.drawImage(image, 0, 0, newWidth, newHeight);
  id.setAttribute('src', canvas.toDataURL('image/png'));
}
///////
// Facesoft Face Match API Function
function verifyImages(image1, image2, callback){
  var params = {
    image1: image1,
    image2: image2,
  }
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "https://api.facesoft.io/v1/face/match");
  xhr.setRequestHeader("apikey", apiKey);
  xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
  xhr.onload = function(){
    callback(xhr.response);
  }
  xhr.send(JSON.stringify(params));
}
// On Upload Photo Button Click
document.getElementById('upload').addEventListener('click', function(){
  imageUploadInput.click();
})
// On Uploaded Photo Change
imageUploadInput.addEventListener('change', function(){
  // Get File Extension
  var ext = imageUploadInput.files[0]['name'].substring(imageUploadInput.files[0]['name'].lastIndexOf('.') + 1).toLowerCase();
  // If File Exists & Image
  if (imageUploadInput.files && imageUploadInput.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg")) {
    // Set Photo To Canvas
    var reader = new FileReader();
    reader.onload = function (e) {
      var img = new Image();
      img.src = e.target.result;
      img.onload = function() {
      setImageToCanvas(img, uploadedPhoto, uploadCanvas, uploadContext);
      }
    }
    reader.readAsDataURL(imageUploadInput.files[0]);
  }
})
// On Verify Photo Button Click
document.getElementById('verify').addEventListener('click', function(){
  // Remove Results & Alerts
  errorAlert.style.display = "none";
  warningAlert.style.display = "none";
  matchText.innerHTML = "";
  scoreText.innerHTML = "";
  // Get Base64
  var image1 = captureCanvas.toDataURL().split(',')[1];
  var image2 = uploadCanvas.toDataURL().split(',')[1]; 
  // Verify if images are of the same person
  verifyImages(image1, image2, function(response){
    if(response){
      var obj = JSON.parse(response);
      
      // If Warning Message
     
      if(obj.message){
        errorAlert.style.display = "none";
        warningAlert.style.display = "block";
        warningAlert.innerHTML = obj.message;
        matchText.innerHTML = "";
        scoreText.innerHTML = "";
      }
      // If Error
      else if(obj.error){
        errorAlert.style.display = "block";
        errorAlert.innerHTML = obj.error;
        warningAlert.style.display = "none";
        matchText.innerHTML = "";
        scoreText.innerHTML = "";
      }
      // If Valid
      else{
        errorAlert.style.display = "none";
        warningAlert.style.display = "none";
        matchText.innerHTML = obj.match;
        scoreText.innerHTML = (obj.score*100).toFixed(2)+"% Score";
      }
    }
  })
})
// Set Default Images For Uploaded & Captured Photo
setImageToCanvas(uploadedPhoto, uploadedPhoto, uploadCanvas, uploadContext);
setImageToCanvas(capturedPhoto, capturedPhoto, captureCanvas, captureContext);
});
</script>
</html>