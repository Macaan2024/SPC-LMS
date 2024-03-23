<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log Book</title>
  <link rel="stylesheet" href="css/desktop/logbook.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
</head>
<body>
  <nav>
    <img src="images/logbook/spclogo.png" alt="spclogo">
  </nav>
  <hr>
  <div class="container">
      <h1 class="account">QR Code Logbook Scanner</h1>
  </div>
  <hr>
  <div class="flex-container">
      <div class="box1">
        <div class="b-box1"><span>Visitor</span></div>
      </div>
      <div class="box2">
        <div class="b-box2"><span>Student</span></div>
      </div>
      <div class="box3">
        <div class="b-box3"><span>Faculty</span></div>
      </div>
  </div>
  <hr>
  <div class="buttons">
    <button>Student</button>
    <button>Faculty</button>
    <button>Libririan Staff</button>
  </div>
  <div class="searched">
    <select name="names" id="names">
      <option>Select</option>
      <option value="id">ID</option>
      <option value="name">Name</option>
    </select>
    <input class="search" type="search" placeholder="Search Unique ID" name="search">
  </div>
  <table>
    <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Name</th>
      <th>Unique Code</th>
      <th>Date</th>
      <th>Time in</th>
    </tr>
  </table>
   <input class="name" type="search" placeholder="Enter Name:" name="search">
   <button class="submit">Submit</button>
  <div class="registrations">
    <button class="register">Registration Form</button>
  </div>
  <div class="container">
     <!-- <center><h1><b>QR Code Scanner</b></h1> -->
      <video id="qr-video" width="500" height="400" autoplay></video>
       <div id="qr-result">
        <button type="s ubmit" class="submit" >Scan Me</button></div>   
   <script>
     const video = document.getElementById('qr-video');
     const resultContainer = document.getElementById('qr-result');
     // Access the camera and start streaming
     navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
     .then(stream => {
     video.srcObject = stream;
     video.play();
     })
     .catch(err => console.error('Error accessing the camera:', err));
   </script>
</body> 
</html>