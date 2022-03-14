<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style3.css" />
    <title>dashboard</title>
  </head>
  <body>
    <div class="container">
      <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <img src="ju_cafe.png" width="80%" alt="" />
            </a>
          </li>
          <!-- <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="reorder-three-outline"></ion-icon
              ></span>
              <span class="title">Dashboard</span>
            </a>
          </li> -->
          <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="fast-food-outline"></ion-icon
              ></span>
              <span class="title">Food Menu</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="beer-outline"></ion-icon
              ></span>
              <span class="title">Food Category</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="people-outline"></ion-icon
              ></span>
              <span class="title">Parcel Clients</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="images-outline"></ion-icon
              ></span>
              <span class="title">Gallery</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="chatbox-outline"></ion-icon
              ></span>
              <span class="title">Reviews</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"
                ><ion-icon name="log-out-outline"></ion-icon
              ></span>
              <span class="title">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script>
      let list = document.querySelectorAll(".navigation li");
      function activeLink(item) {
        item.classList(remove("hovered"));
        this.classList.add("hovered");
      }
      list.forEach((item) => item.addEventListener("mouseover", activeLink));
    </script>
  </body>
</html>
