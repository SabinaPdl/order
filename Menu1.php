<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodly</title>
  <link rel="stylesheet" href="Menu1.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style type="text/css">
      * {
          margin: 0;
          padding: 0;
          font-family: 'Poppins';
        }
  
.quantity-input {
  width: 50px;
  text-align: center;
  padding: 5px;
  border: 1px solid #ddd;
  border-radius: 3px;
}

.add-btn {
  background: #FC8A06;
  color: white;
  border: none;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  transition: background 0.3s ease;
}

.add-btn:hover {
  background: #e17903;
}

.buttons {
  display: flex;
  gap: 10px;
  align-items: center;
  flex-wrap: wrap;
  justify-content: space-between; 
}

.order-btn {
  margin-left: auto; 

  background: #4CAF50;
  color: white;
  border: none;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  transition: background 0.3s ease;
}



@media (max-width: 768px) {
  .order-btn {
    margin-left: 0; 
    width: 100%;
  }
}
.order-btn:hover {
  background: #45a049;
}
  </style>

</head>
<body>
  <a id="top"></a>
  <header>
    <nav class="navbar">
        <!-- Logo Section -->
        <div class="logo">
            <img src="Images/Logo.png" alt="Foodly Logo" title="www.Foodly.com.np">
        </div>

        
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>

<ul class="navlinks">
    <li><a href="Home.html">Home</a></li>
    <li><a href="Menu1.html">Browse Menu</a></li>
    <li><a href="List_Of_Restaurants.html">Restaurants</a></li>
    <li><a href="#AboutUs">About Us</a></li>
</ul>

<div class="login-signup">
    <a href="Login.php" class="btn" id="loginSignupButton">Login/Signup</a>
    <div class="dropdown-menu" id="accountDropdown">
        <a href="profile.php">Profile</a>
        <a href="cart.php">Cart Details</a>
        <a href="orders.php">My Orders</a>
        <a href="logout.php" id="logoutLink">Logout</a>
    </div>
</div>

<script src = "update_login.js">
    
</script>

</nav>
</header>

<script>
    function toggleMenu() {
        document.querySelector(".navlinks").classList.toggle("active");
    }
</script>

<section class="section1">
  <div class="content">
      <h2>Inside <br> Openhouse Restro</h2>

      <div class="search-bar">
          <input type="text" placeholder="Search Food">
          <button>Search</button>
      </div>
  </div>

  <div class="image1">
      <img src="Images/eating food.jpg" alt="Food Image">
  </div>
</section>


  <!-- Breakfast-->
  <div class="menu-section">
    <h2>Breakfast</h2>
    <div class="card-container">
      <div class="card">
          <img src="Images/breakfast1.jpg" alt="Selroti and Achar">
          <div class="card-content">
              <h3>Selroti and Achar</h3>
              <p>2 selrotis with home-cooked achar and tea.</p>
              <p class="price">Nrs. 200</p>
             <div class="buttons">
              <div class="q-btn">
                  <input type="number" value="1" min="1" class="quantity-input">
              </div>
              <button class="add-btn" onclick="addToCart('Selroti and Achar', '2 selrotis with home-cooked achar and tea.', 200, 'Images/breakfast1.jpg')">Add to Cart</button>
              <button class="order-btn" onclick="orderNow('Selroti and achar', '2 selrotis with home-cooked achar and tea.', 200, 'Images/breakfast1.jpg', this)">Order Now</button>
  </div>
            </div>
      </div>



      <div class="card">
          <img src="Images/Breakfast 3.jpg" alt="Bread Omelette">
          <div class="card-content">
              <h3>Bread Omelette</h3>
              <p>2 pieces of bread with an omelette.</p>
              <p class="price">Nrs. 200</p>
              <div class="buttons">
            
                  <input type="number" value="1" min="1" class="quantity-input">
         
              <button class="add-btn" onclick="addToCart('Bread Omelette', '2 pieces of bread with an omelette.', 200, 'Images/Breakfast 3.jpg')">Add to Cart</button>
              <button class = "order-btn" onclick = "orderNow('Bread Omelette', '2 pieces of bread with an omelette.', 200, 'Images/Breakfast 3.jpg', this)">Order now</button>
              </div>

            </div>
      </div>
      <div class="card">
          <img src="Images/samosa.jpg" alt="Samosas">
          <div class="card-content">
              <h3>Samosas</h3>
              <p>4 pieces of samosas with chutney.</p>
              <p class="price">Nrs. 200</p>
              <div class="buttons">
              
                  <input type="number" value="1" min="1" class="quantity-input">
           
              <button class="add-btn" onclick="addToCart('Samosas', '4 pieces of samosas with chutney.', 200, 'Images/samosa.jpg')">Add to Cart</button>
              <button class = "order-btn" onclick = "">Order now</button>

            </div>
      </div>
  </div>
  
  <!-- Lunch-->
  <div class="menu-section">
    <h2>Lunch</h2>
    <div class="card-container">
      <div class="card">
        <img src="Images/Lunch1.jpg" alt="Thakali Khana Set">
        <div class="card-content">
          <h3>Thakali Khana Set</h3>
          <p>A khana set with rice, chicken curry, achar, and vegetables.</p>
          <p class="price">Nrs. 600</p>
          <div class="buttons">
            
                  <input type="number" value="1" min="1" class="quantity-input">
           
          <button class="add-btn" onclick="addToCart('Thakali Khana Set', 'A khana set with rice, chicken curry, achar, and vegetables.', 600, 'Images/Lunch1.jpg')">Add to Cart</button>
          <button class = "order-btn" onclick = "">Order now</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="Images/Fried rice.jpg" alt="Fried Rice">
        <div class="card-content">
          <h3>Fried Rice</h3>
          <p>A plate of fried rice with vegetables.</p>
          <p class="price">Nrs. 200</p>
          <div class="buttons">
             
                  <input type="number" value="1" min="1" class="quantity-input">
        
          <button class="add-btn" onclick="addToCart('Fried Rice', 'A plate of fried rice with vegetables.', 200, 'Images/Fried rice.jpg')">Add to Cart</button>
          <button class = "order-btn" onclick = "">Order now</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="Images/dish.jpg" alt="Momo">
        <div class="card-content">
          <h3>Momo</h3>
          <p>A plate of chicken momo.</p>
          <p class="price">Nrs. 200</p>
          <div class="buttons">
            
                  <input type="number" value="1" min="1" class="quantity-input">
              
          <button class="add-btn" onclick="addToCart('Momo', 'A plate of chicken momo.', 200, 'Images/dish.jpg')">Add to Cart</button>
          <button class = "order-btn" onclick = "">Order now</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Dinner-->
  <div class="menu-section">
    <h2>Dinner</h2>
    <div class="card-container">
      <div class="card">
        <img src="Images/Dinner2.jpg" alt="Parathas">
        <div class="card-content">
          <h3>Parathas</h3>
          <p>Soft parathas with curry.</p>
          <p class="price">Nrs. 200</p>
          <div class="buttons">
             
                  <input type="number" value="1" min="1" class="quantity-input">
         
          <button class="add-btn" onclick="addToCart('Parathas', 'Soft parathas with curry.', 200, 'Images/Dinner2.jpg')">Add to Cart</button>
          <button class = "order-btn" onclick = "">Order now</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="Images/Lunch1.jpg" alt="Thakali Khana Set">
        <div class="card-content">
          <h3>Thakali Khana Set</h3>
          <p>A khana set with rice, chicken curry, achar, and vegetables.</p>
          <p class="price">Nrs. 600</p>
          <div class="buttons">
              
                  <input type="number" value="1" min="1" class="quantity-input">
              
          <button class="add-btn" onclick="addToCart('Thakali Khana Set', 'A khana set with rice, chicken curry, achar, and vegetables.', 600, 'Images/Lunch1.jpg')">Add to Cart</button>
          <button class = "order-btn" onclick = "">Order now</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="Images/roti.jpg" alt="Roti">
        <div class="card-content">
          <h3>Roti</h3>
          <p>Roti with vegetable curry.</p>
          <p class="price">Nrs. 200</p>
          <div class="buttons">
             
                  <input type="number" value="1" min="1" class="quantity-input">
         
          <button class="add-btn" onclick="addToCart('Roti', 'Roti with vegetable curry.', 200, 'Images/roti.jpg')">Add to Cart</button>
          <button class = "order-btn" onclick = "">Order now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Cold Drink-->
  <div class="menu-section">
    <h2>Cold Drinks</h2>
    <div class="card-container">
      <div class="card">
        <img src="Images/coke.jpeg" alt="">
        <div class="card-content">
          <h3>Coke</h3>
          <p>Chilled coke can (500ml).</p>
          <p class="price">Nrs. 100</p>
          <div class="buttons">
                  <input type="number" value="1" min="1" class="quantity-input">
              

          <button class="add-btn" onclick="addToCart('Coke', 'chilled coke can', 100, 'Images/coke.jpeg')">Add to Cart</button>
          <button class = "order-btn" onclick = "">Order now</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="Images/sprite.jpeg" alt="Sprite">
        <div class="card-content">
          <h3>Sprite</h3>
          <p>Chilled sprite bottle (500ml).</p>
          <p class="price">Nrs. 100</p>
          <div class="buttons">
          
                  <input type="number" value="1" min="1" class="quantity-input">
          
          <button class="add-btn" onclick="addToCart('Sprite', 'Chilled sprite bottle.', 100, 'Images/sprite.jpeg')">Add to Cart</button>
          <button class = "order-btn" onclick = "">Order now</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="Images/fanta.jpeg" alt="Fanta">
        <div class="card-content">
          <h3>Fanta</h3>
          <p>Chilled fanta bottle (500ml).</p>
          <p class="price">Nrs. 100</p>
        
          <div class="buttons">
            <input type="number" value="1" min="1" class="quantity-input">
          <button class="add-btn" onclick="addToCart('Fanta', 'chilled fanta bottle.', 100, 'Images/fanta.jpeg')">Add to Cart</button>
          <button class = "order-btn" onclick = "">Order now</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="loginPopup" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%);
     background:#fff; padding:20px; box-shadow:0px 0px 10px rgba(0,0,0,0.2);">
    
    <a href="Login.php">Login</a>
    <br><br>
    <button onclick="closeLoginPopup()">Close</button>
</div>


<!--Operational Times-->


<div class="body2">
  <div class="operational-times">
    <div class="icon-title">
     
      <h2>Operational Times</h2>
    </div>
    <ul>
      <li>Monday: 8:00 AM–3:00 AM</li>
      <li>Tuesday: 8:00 AM–3:00 AM</li>
      <li>Wednesday: 8:00 AM–3:00 AM</li>
      <li>Thursday: 8:00 AM–3:00 AM</li>
      <li>Friday: 8:00 AM–3:00 AM</li>
      <li>Saturday: 8:00 AM–3:00 AM</li>
      <li>Sunday: 8:00 AM–3:00 AM</li>
    </ul>
  </div>
</div>

<section class="section-res">
    <div class="top">
    <h2>More Restaurants</h2>
    <button>></button>
    
    </div>
    <div class="more">
    <div class="image11"></div>
    <div class="image22"></div>
    <div class="image33"></div>
  </div>
  </section>

  
<!-- Restaurant Images Section -->
<section class="section-res">
  <div class="more">
      <div class="image-box"></div>
      <div class="image-box"></div>
      <div class="image-box"></div>
  </div>
  <button class="top-button"><a href="#top" style="text-decoration: none; color: black;">↑</button></a>
</section>

  <footer class="footer">
    <div class="logo-container">
        <img src="Images/Logo.png" alt="Logo">
        <p>Company #490039-445, Registered with House of Companies.</p>
    </div>

    <div class="social">
        <h4>Connect With Us</h4>
        <div class="social-icons">
            <img src="Images/fb_logo.jpeg" alt="Facebook">
            <img src="Images/ins_logo.jpeg" alt="Instagram">
            <img src="Images/t_logo.png" alt="TikTok">
            <img src="Images/snap_logo.jpeg" alt="Snapchat">
        </div>
    </div>

    <div class="footer-links">
        <div class="links">
            <h4>Legal</h4>
            <ul>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Modern Slavery Statement</a></li>
            </ul>
        </div>

        <div class="links">
            <h4>Important Links</h4>
            <ul>
                <li><a href="#">Get Help</a></li>
                <li><a href="Restaurant.html">Add Your Restaurant</a></li>
                <li><a href="#">Create a Business Account</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Copyright Section -->
<section class="footer-bottom">
    <p>Foodly &copy; 2025, All Rights Reserved.</p>
    <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Do Not Sell or Share My Personal Info</a></li>
    </ul>
</section>


  <script>
   

function addToCart(name, description, price, image_path, quantity = 1, restaurant_id = 1) {
    // Check if user is logged in
    fetch('check_login.php')
    .then(response => response.json())
    .then(data => {
        if (data.logged_in) {
            console.log("User ID:", data.user_id);
            console.log("First Name:", data.fname);
            console.log("Last Name:", data.lname);
            console.log("Email:", data.email);

            // Prepare the data to send to the server
            const cartData = {
                name,
                description,
                price,
                image_path,
                user_id: data.user_id,
                quantity, // Add quantity to the request
                restaurant_id // Add restaurant_id to the request
            };

            // Send the data to the server
            fetch('add_to_cart.php', {   
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(cartData)
            })
            .then(response => response.text())
            .then(data =>{ alert(data);
            if (orderNow) {
                    window.location.href = "Menu1.php"; // Redirect to checkout if "Order Now" was clicked
                }
            })
            .catch(error => console.error('Error:', error)); // Log any errors
        } else {
            // Redirect to login page if the user is not logged in
            window.location.href = "Login.php"; 
        }
    })
    .catch(error => console.error('Error checking login:', error)); // Log any errors when checking login status
}


    </script>
    <script>
        function orderNow(name, description, price, image, buttonElement) {
            let quantityInput = buttonElement.parentElement.querySelector('.quantity-input');
            let quantity = quantityInput ? quantityInput.value : 1;

            let orderData = {
                food_name: name,
                description: description,
                price: price,
                image: image,
                quantity: quantity
            };

            fetch('create_order.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(orderData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = `order_details.php?order_id=${data.order_id}`;
                } else {
                    alert("Failed to create order!");
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>

</body>
</html>