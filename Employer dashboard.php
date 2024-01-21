<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <title>Employer Dashboard</title>
  <style>
    body {
      font-family: "Arial", sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
      color: #333;
      display: grid;
       grid-template-columns: auto 1fr; 
      height: 60vh; 
    }

    header {
      background-color: #1a1a1a;
      color: #ffcc00;
      padding: 5px;
      text-align: center;
      grid-column: span 2; 
    }
    .heading3 {
            margin: auto;
            grid-column: 3;
            float: right;
        }

        .heading3 h2 {
            color: #ffcc00; 
        }

    nav {
      background-color: #1a1a1a;
      color: #fff;
      display: flex;
      justify-content: space-around;
      position: sticky;
      z-index: 100;
      grid-column: span 2; 
    }

    nav a {
        background-color: #1a1a1a;
        color: #ffcc00;
        text-decoration: none;
        font-size: 1.2em;
        transition: color 0.3s;
        padding: 10px;
        border-radius: 5px;
      }

      nav a:hover {
        background-color: rgba(255, 255, 255, 0.1);
      }

    .col1 {
    grid-column: 1;
      width: 25%;
      padding: 5px; 
      border-right: 5px solid white;
    }

    .home button {
      padding: 10px;
      margin:4px;
      width: 200px;
      background-color: #1a1a1a;
      color: #ffcc00;
      text-align: left;
      border: none;
      border-radius: 5px;
      font-style: bold;
      font-size: 16px;
      cursor: pointer;
      display: flex;
      align-items: center;
    }

    .home button:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    .home button i {
      margin-right: 10px;
    }


    .heading3{
        margin: auto;
        grid-column: 3;
        float: right;
    }
    .col2{
        padding: 10px;
        grid-column: 5;
        width: auto;
        height: auto;
    }
    main{
        display: grid;
        padding-top: 0;
        padding-left: 100px;
        padding-right: 100px;
    }
    .profile-section {
        margin-top: 20px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile-section h3 {
        color: #1a1a1a;
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .profile-info {
        display: flex;
        align-items: center;
    }

    .profile-info img {
        border-radius: 50%;
        margin-right: 20px;
    }

    .user-details p {
        margin: 0;
        font-size: 1.2em;
    }
    .contentcontainer {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }

        p {
            margin: 10px 0;
        }

        .label {
            font-weight: bold;
        }
        .job-table-container {
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
  border: 1px solid #ddd;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tbody tr:hover {
    background-color: #f5f5f5;
}
.search-container {
    margin-bottom: 20px;
}

.search-container input[type=text] {
    padding: 10px;
    margin-right: 8px;
    width: 80%;
    border-radius: 5px;
    border: 1px solid #ddd;
}

.search-container button {
    padding: 10px;
    border: none;
    background-color: #1a1a1a;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
}

.search-container button:hover {
    background-color: rgba(255, 255, 255, 0.1);
}
.user-settings-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.user-settings-table td, .user-settings-table th {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

.user-settings-table th {
    background-color: #f2f2f2;
}
.user-info-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.user-info-table th, .user-info-table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

.user-info-table th {
    background-color: #f2f2f2;
    color: #333;
}
<style>
  .user-list table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  th, td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 12px;
  }

  th {
    background-color: #f2f2f2;
  }

  .odd {
    background-color: #f5f5f5;
  }

  .even {
    background-color: #e0e0e0;
  }

  tbody tr:hover {
    background-color: #d4d4d4;
  }


        .user-list {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            max-width: 100%;
        }

        h2 {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            margin: 0;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
        }

        .odd {
            background-color: #f9f9f9;
        }

        .even {
            background-color: #e6e6e6;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background-color: #45a049;
        }

  </style>
</head>
<body>
  <header>
    <h1  > Dashboard</h1>
    <div class="heading3">
      <h2>Employer:<?php echo $_GET['usernames']; ?>&nbsp;&nbsp; </h2>
    </div>
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="#" onclick="loadContent('Employer job application.php')">Manage Applications</a>
    <a href="Employer post jobs.php">Post jobs</a>
    <a href="Support&Contact.php">Support&Contact</a>
  </nav>

  <main>
    <div class="col1">
    <div class="home"><button onclick="loadContent('Employer profile.php')"><i class="fa-solid fa-user"></i>Profile</button></div>
      <div class="home"><button onclick="loadContent('Settings.php')"><i class="fa-solid fa-cogs"></i>Settings</button></div>
      <a href="Logout.php"> <div class="home"><button onclick="logout()"><i class="fa-solid fa-sign-out"></i>Logout  </button></div> </a>   
    </div>
    <div class="col2" id="contentContainer">
    <div class="heading">
      <h2>WELCOME <?php echo $_GET['usernames']; ?>&nbsp;&nbsp;!</h2>
    </div>
    </div>

  </main>
  <script>
    function loadContent(page) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contentContainer").innerHTML = this.responseText;
            }
        };

        
        if (page === 'Users.php') {
            xhttp.open("GET", page, true);
            xhttp.send();
        } else {
           
            var defaultPage = 'default.php';  
            xhttp.open("GET", defaultPage, true);
            xhttp.send();
        }
    }
</script>
  <script>
    function loadContent(page) {
      
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("contentContainer").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", page, true);
      xhttp.send();
    }

    function logout() {
      const confirmLogout = confirm("Are you sure you want to logout?");
      if (confirmLogout) {
        alert("Logout successful!");
      }
    }
  </script>
    <script>
    function loadContent(page) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
          if (this.status == 200) {
            document.getElementById("contentContainer").innerHTML = this.responseText;
          } else {
            console.error("Failed to load content:", this.status);
          }
        }
      };

      
      if (page.includes('Insert Users')) {
        xhttp.open("GET", "Insert users.php", true);
      } else {
        xhttp.open("GET", page, true);
      }

      xhttp.send();
    }

    function logout() {
      const confirmLogout = confirm("Are you sure you want to logout?");
      if (confirmLogout) {
        alert("Logout successful!");
      }
    }
  </script>
    <script>
    function loadContent(page) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contentContainer").innerHTML = this.responseText;
            }
        };

        
        if (page.includes('PostJob')) {
            xhttp.open("GET", "Job listings.php", true);
        } else {
            xhttp.open("GET", page, true);
        }

        xhttp.send();
    }
  <script>
    function loadContent(page) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contentContainer").innerHTML = this.responseText;
            }
        };

        
        if (page.includes('PostJob')) {
            xhttp.open("GET", "Post job.php", true);
        } else {
            xhttp.open("GET", page, true);
        }

        xhttp.send();
    }
</script>
  <script>
    function loadContent(page) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contentContainer").innerHTML = this.responseText;
            }
        };

        
        if (page.includes('BrowseJobs')) {
            xhttp.open("GET", "Users.php", true);
        } else {
            xhttp.open("GET", page, true);
        }

        xhttp.send();
    }
</script>
<script>
    function loadContent(page) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contentContainer").innerHTML = this.responseText;
            }
        };

        
        if (page.includes('BrowseJobs')) {
            xhttp.open("GET", "Job application.php", true);
        } else {
            xhttp.open("GET", page, true);
        }

        xhttp.send();
    }
</script>
  <script>
    function logout() {
      const confirmLogout = confirm("Are you sure you want to logout?");
      if (confirmLogout) {
        alert("Logout successful!");
      }
    }
  </script>
</body>

</html>
