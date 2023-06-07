<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="row">
    <div class="top-nav">
      <a href="#"><i class="bi bi-person-circle"></i></a>
    <a href="#"><i class="bi bi-sliders"></i></a>
    </div>  
  </div>
  <header class="header">
    <div class="row">
      <div class="user-name">
        <h1>Steven Berg</h1>
      </div>
    </div>
    <div class="container">
      <div class="grid">
        <a class="player" href="#">Heatmap</a>
        <a class="player" href="#">Grid</a>
        <a class="player" href="#">Woodworks</a>
        <a class="player" href="#">Classic</a>
      </div>
      <div class="match-container">
        <div class="Header">
          <div class="Header_TeamLeft">
            <div class="Team_Name">Psv</div>
          </div>
          <div class="Header_Scores">
            <div class="Scores">
              <div class="Scores_Score">
                <div class="Score">2</div>
              </div>
              <div class="Scores_Score">
                <div class="Score">1</div>
              </div>
            </div>
          </div>
          <div class="Header_TeamRight">
            <div class="Team_Name">FC Emmen</div>
          </div>
        </div>
    </div>
    <div class="match-container">
      <div class="Header">
        <div class="Header_TeamLeft">
          <div class="Team_Name">Ajax</div>
        </div>
        <div class="Header_Scores">
          <div class="Scores">
            <div class="Scores_Score">
              <div class="Score">1</div>
            </div>
            <div class="Scores_Score">
              <div class="Score">0</div>
            </div>
          </div>
        </div>
        <div class="Header_TeamRight">
          <div class="Team_Name">Roda JC</div>
        </div>
      </div>
  </div>
  <div class="match-container">
    <div class="Header">
      <div class="Header_TeamLeft">
        <div class="Team_Name">FC Utrecht</div>
      </div>
      <div class="Header_Scores">
        <div class="Scores">
          <div class="Scores_Score">
            <div class="Score">0</div>
          </div>
          <div class="Scores_Score">
            <div class="Score">2</div>
          </div>
        </div>
      </div>
      <div class="Header_TeamRight">
        <div class="Team_Name">AZ</div>
      </div>
    </div>
</div>
<div class="match-container">
  <div class="Header">
    <div class="Header_TeamLeft">
      <div class="Team_Name">Top Oss</div>
    </div>
    <div class="Header_Scores">
      <div class="Scores">
        <div class="Scores_Score">
          <div class="Score">1</div>
        </div>
        <div class="Scores_Score">
          <div class="Score">0</div>
        </div>
      </div>
    </div>
    <div class="Header_TeamRight">
      <div class="Team_Name">Almere City</div>
    </div>
  </div>
</div>
<div class="match-container">
  <div class="Header">
    <div class="Header_TeamLeft">
      <div class="Team_Name">FC Volendam</div>
    </div>
    <div class="Header_Scores">
      <div class="Scores">
        <div class="Scores_Score">
          <div class="Score">0</div>
        </div>
        <div class="Scores_Score">
          <div class="Score">0</div>
        </div>
      </div>
    </div>
    <div class="Header_TeamRight">
      <div class="Team_Name">Excelsior</div>
    </div>
  </div>
</div>
    </div>


      </div>
      <nav class="bottom-nav">
        <div class="bottom-nav-item">
           <a href="info.php">
            <div class="bottom-nav-link">
              <i class="bi bi-bar-chart-line"></i>
          </div>
        </a> 
        </div>
        <div class="bottom-nav-item">
          <a href="bets.php">
            <div class="bottom-nav-link">        
              <i class="bi bi-star"></i>
          </div>
          </a>
        </div>
        <div class="bottom-nav-item active">
          <a href="index.php">
            <div class="bottom-nav-link">
              <i class="bi bi-house-door"></i>
            </div>
          </a>
        </div>
        <div class="bottom-nav-item">
          <a href="balance.php">
            <div class="bottom-nav-link">
              <i class="bi bi-cash"></i>
            </div>
          </a>
        </div>
        <div class="bottom-nav-item">
          <a href="leaderboard.php">
            <div class="bottom-nav-link">
              <i class="bi bi-trophy"></i>
            </div>
          </a>
        </div>
      </nav>
    </div>
  </header>
</body>

<script src="assets/js/nav.js"></script>

</html>