<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundraising Website</title>
    
</head>

<body>
    <nav>
    
    <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: block;
      width: 100%;
      overflow: hidden;
      background-color: #333;
    }
    
    li {
      float: left;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    li a:hover:not(.active) {
      background-color: #111;
    }
    
    .active {
      background-color: #04AA6D;
    }
    </style>
    
    
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="Registration.php">Register</a></li>
      <li><a href="event.php">Events</a></li>
      <li><a href="donation.php">Donate</a></li>
      
      <li><a href="#contact">Contact</a></li>
      <li style="float:right"><a class="active" href="login.php">Login</a></li>
    </ul>
    
</nav>
    
  
    

     

    <div class="card-container">
        <div class="card">
            <img src="holi.jpg" alt="Event Image 1">
            <div class="card-content">
                <h2>Event Name 1</h2>
                <p><strong>Address:</strong> Event Address 1</p>
                <p><strong>Date:</strong> Event Date 1</p>
                <p><strong>Time:</strong> Event Time 1</p>
                <p><strong>Organised By:</strong> Organizer Name 1</p>
                <a href="donation.php" class="donate-button">Donate</a>
            
            </div>
        </div>
    
        <div class="card">
            <img src="diwali.jpg" alt="Event Image 2">
            <div class="card-content">
                <h2>Event Name 2</h2>
                <p><strong>Address:</strong> Event Address 2</p>
                <p><strong>Date:</strong> Event Date 2</p>
                <p><strong>Time:</strong> Event Time 2</p>
                <p><strong>Organised By:</strong> Organizer Name 2</p>
                <a href="donation.php" class="donate-button">Donate</a>
            
            </div>
        </div>
    
        <div class="card">
            <img src="Ram navmi.jpg" alt="Event Image 3">
            <div class="card-content">
                <h2>Event Name 3</h2>
                <p><strong>Address:</strong> Event Address 3</p>
                <p><strong>Date:</strong> Event Date 3</p>
                <p><strong>Time:</strong> Event Time 3</p>
                <p><strong>Organised By:</strong> Organizer Name 3</p>
                <a href="donation.php" class="donate-button">Donate</a>
            
            </div>
        </div>
    </div>
   
</body>

</html>
