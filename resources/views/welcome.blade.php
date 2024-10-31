<!DOCTYPE html>
<html>
<head>
<title>Your Name - Resume</title>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 20px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
}

.section {
  margin-bottom: 20px;
}

.section-title {
  font-size: 1.2em;
  font-weight: bold;
  margin-bottom: 10px;
}
</style>
</head>
<body>
<div class="container">

  <h1>Jesther Mel Gutierrez</h1>
  
  <div class="section">
    <h3 class="section-title">Contact Information</h3>
    <!-- <p>{{$data['name']}}</p> -->
    <p>{{$data['email']}}</p>
    <p>{{$data['contact']}}</p>
    <p>{{$data['address']}}</p>
      
  </div>

  <div class="section">
    <h3 class="section-title">Objective</h3>
    <p> {{$data['Objective']}}</p>
  </div>



</div>
</body>
</html>