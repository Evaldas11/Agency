<!DOCTYPE html> 
<html> 
  <?php include 'head.php' ;?>
  <body>
    <header>
      <div class="container">
        <div class="top">
          <a href="index.php">AKAD.</a>
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="middle">
          <span>WE`RE</span>
          <h2>CREATIVE AGENCY</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="bottom">
          <div class="image">
            <img src="images/bottom.jpg">
          </div>
          <div class="text">
            <h2><span></span>HISTORY OF AGENCY</h2>
            <p>Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi modi tempora incidunt ut labore.</p>
            <p class="hidden">Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi modi tempora incidunt ut labore.</p>
          </div>
          <button> READ MORE</button>
        </div>
      </div>
    </header>
    <nav>
      <a href="index.php">HOME</a>
      <a href="#">ABOUT US</a>
      <a href="service.php">SERVICES</a>
      <a href="#">PORTFOLIO</a>
      <a href="#">BLOG</a>
      <a href="#">CONTACT US</a>
    </nav>
    <div class="overlay"></div>
    <div class="choose container">
      <div class="title">
        <h2>WHY CHOOSE US</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       </div> 
      <div class="inside">
        <div class="cards">
          <div class="card">
            <img src="images/card1.png">
            <h2>UNLIMITED OPTIONS</h2>
            <p>BRANDING</p>
            <p>DESIGN & COPYWRITING</p>
            <p>CONCEPT DEVELOPMENT</p>
            <p>USER EXPERIENCE</p>
          </div>
          <div class="card">
            <img src="images/card2.png">
            <h2>DESIGN & DEVELOPMENT</h2>
            <p>INFORMATION ARCHITECTURE</p>
            <p>INTERFACE DESIGN</p>
            <p>PRODUCT DESIGN</p>
            <p>INTERGRATED AD COMPANIES</p>
          </div>
          <div class="card">
            <img src="images/card3.png">
            <h2>E-COMMERCE</h2>
            <p>PROTOTYPING</p>
            <p>TECHNICAL CONSULTING</p>
            <p>WEB APPLICATIONS</p>
            <p>QUALITY TESTING</p>
          </div>
          <div class="card">
            <img src="images/card4.png">
            <h2>CUSTOMIZABLE DESIGN</h2>
            <p>INFORMATION ARCHITECTURE</p>
            <p>INTERFACE DESIGN</p>
            <p>PRODUCT DESIGN</p>
            <p>INTEGRATED COMPANIES</p>
          </div>
        </div>
        <div class="image">
         <img src="images/chair.jpg">
        </div>
      </div>
    </div>
    <div class="portfolio container">
      <div class="title">
        <h2>OUR PORTFOLIO</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
     </div>
      <div class="grid">
        <div class="leftgrid">
          <h2>CHOOSE <span>CATEGORY</span></h2>
          <div class="filter">
            <ul>
              <li><a href="#" class="active" id="all">ALL</a></li>
              <li><a href="#" id="webdesign">WEBDESIGN</a></li>
              <li><a href="#" id="graphic">GRAPHIC DESIGN</a></li>
              <li><a href="#" id="fashion">FASHION</a></li>
              <li><a href="#" id="logo">LOGO DESIGN</a></li>
              <li><a href="#" id="advertising">ADVERTISING</a></li>
            </ul>
          </div>
        </div>
        <div class="rightgrid">
          <div class="first">
            <img src="images/grid1.png" class="work_item fashion">
            <img src="images/grid4.png" class="work_item webdesign">
            <img src="images/grid7.png" class="work_item graphic">
          </div>
          <div class="first">
            <img src="images/grid2.png" class="work_item logo">
            <img src="images/grid5.png" class="work_item fashion">
            <img src="images/grid8.png" class="work_item logo">
          </div>
          <div class="first">
            <img src="images/grid3.png" class="work_item fashion">
            <img src="images/grid6.png" class="work_item webdesign">
            <img src="images/grid9.png" class="work_item advertising">
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php' ;?>
  </body>
</html>