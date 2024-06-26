<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Productos</title> <!-- Título del Dashboard -->
    <link rel="stylesheet" href="/PRUEBA/Css/style.css">
    <link rel="stylesheet" href="/PRUEBA/Css/Modificar_Productos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="nav container">
            <div class="logo">
            </div>
            <a href="/PRUEBA/index.php" class="logo">Zen Shooping</a>
            <a href="#" class="dashboard">Modificar Productos</a> <!-- Título del Dashboard -->
            <a href="Agregar_Nuevos_productos.php" class="dashboard">Agregar Productos</a>
            <a href="Lista_Ventas.php" class="dashboard">Lista Ventas</a>
             <!-- cart-Icon -->
             <i class='bx bx-shopping-bag' id="cart-icon"></i>
             <!-- cart- -->
             <div class="cart">
                 <h2 class="cart-title"> Tu Carrito</h2>
                 <!-- content- -->
                 <div class="cart-content">
             <!-- Remove cart --> 
             <i class='bx bxs-trash-alt cart-remove' ></i>
          </div>
            <!-- Total- --> 
            <div class="total">
                 <div class="total-title">Total</div>
                 <div class="total-price">$0</div>
         </div>
             <!-- Buy Botton- --> 
             <button type="button" class="btn-buy">Compre Ahora</button>
             <!-- Cart Close- --> 
             <i class='bx bx-x' id="close-cart"></i>
               </header>
               <main>
                <h1>Modificar Productos</h1>
                <div class="product-list">
                    <!-- Box 1 -->
                    <div class="product-box">
                    <img src="/PRUEBA/images/productos/Gorra ClásicaHombre.png" alt="" class="product-img">
                        <h2 class="product-title">Gorra clasica</h2>
                        <span class="price">$25.000</span>
                        <form>
                            <label for="edit-name">Nombre:</label>
                            <input type="text" id="edit-name" name="edit-name" value="Gorra clasica">
                    
                            <label for="edit-price">Precio:</label>
                            <input type="text" id="edit-price" name="edit-price" value="$25.000">
                    
                            <button class="btn-save">Guardar</button>
                    </div>
                     <!-- Box 2 -->
            <div class="product-box">
                <img src="/PRUEBA/images/productos/Gorra de Beisbol hombre.png" alt=""class="product-img">
                <h2 class="product-title">Gorra Beisbol</h2>
                <span class="price">$80.000</span>
                <form>
                    <label for="edit-name">Nombre:</label>
                    <input type="text" id="edit-name" name="edit-name" value="Gorra clasica">
            
                    <label for="edit-price">Precio:</label>
                    <input type="text" id="edit-price" name="edit-price" value="$25.000">
            
                    <button class="btn-save">Guardar</button>
            </div>
            <!-- Box 3-->
     <div class="product-box">
        <img src="/PRUEBA/images/productos/Gorra Corduroy Script Logo.png" alt=""class="product-img">
        <h2 class="product-title">Gorra Corduroy</h2>
        <span class="price">$85.000</span>
        <form>
            <label for="edit-name">Nombre:</label>
            <input type="text" id="edit-name" name="edit-name" value="Gorra clasica">
    
            <label for="edit-price">Precio:</label>
            <input type="text" id="edit-price" name="edit-price" value="$25.000">
    
            <button class="btn-save">Guardar</button>
        </div>
     <!-- Box 4 -->
<div class="product-box">
    <img src="/PRUEBA/images/productos/Hoodie Clásico  - eleccion de color.png" alt="" class="product-img">
    <h2 class="product-title">Hoodie Clasico</h2>
    <span class="price">$280.000</span>
    <form>
        <label for="edit-name">Nombre:</label>
        <input type="text" id="edit-name" name="edit-name" value="Hoodie Clasico">

        <label for="edit-price">Precio:</label>
        <input type="text" id="edit-price" name="edit-price" value="$280.000">

        <label for="edit-size">Talla:</label>
        <select id="edit-size" name="edit-size">
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>

        <button class="btn-save">Guardar</button>
    </form>
</div>

         <!-- Box 5-->
     <div class="product-box">
        <img src="/PRUEBA/images/productos/Hoodie Box Fit Freedom - Crema Unico color.png"alt=""class="product-img">
        <h2 class="product-title">Buzo Fredom capucha</h2>
        <span class="price">$320.000</span>
        <form>
            <label for="edit-name">Nombre:</label>
            <input type="text" id="edit-name" name="edit-name" value="Hoodie Clasico">
    
            <label for="edit-price">Precio:</label>
            <input type="text" id="edit-price" name="edit-price" value="$320.000">
    
            <label for="edit-size">Talla:</label>
            <select id="edit-size" name="edit-size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
    
            <button class="btn-save">Guardar</button>
        </form>
    </div>
        <!-- Box 6-->
     <div class="product-box">
        <img src="/PRUEBA/images/productos/Buzo Cuello Tortuga Box Fit Sunday .png"alt=""class="product-img">
        <h2 class="product-title">Buzo Cuello tortuga</h2>
        <span class="price">$380.000</span>
        <form>
            <label for="edit-name">Nombre:</label>
            <input type="text" id="edit-name" name="edit-name" value="Hoodie Clasico">
    
            <label for="edit-price">Precio:</label>
            <input type="text" id="edit-price" name="edit-price" value="$380.000">
    
            <label for="edit-size">Talla:</label>
            <select id="edit-size" name="edit-size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
    
            <button class="btn-save">Guardar</button>
        </form>
    </div>
        <!-- Box 7-->
     <div class="product-box">
        <img src="/PRUEBA/images/productos/Hoodie Box Fit Iliminatad  - Unico color Gris.png"alt=""class="product-img">
        <h2 class="product-title">Hoodie perchada</h2>
        <span class="price">$450.000</span>
        <form>
            <label for="edit-name">Nombre:</label>
            <input type="text" id="edit-name" name="edit-name" value="Hoodie Clasico">
    
            <label for="edit-price">Precio:</label>
            <input type="text" id="edit-price" name="edit-price" value="$450.000">
    
            <label for="edit-size">Talla:</label>
            <select id="edit-size" name="edit-size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
    
            <button class="btn-save">Guardar</button>
        </form>
    </div>
        <!-- Box 8-->
     <div class="product-box">
        <img src="/PRUEBA/images/productos/Gorra The Green Edit.png"alt=""class="product-img">
        <h2 class="product-title">Gorra Hand</h2>
        <span class="price">$80.000</span>
        <form>
            <label for="edit-name">Nombre:</label>
            <input type="text" id="edit-name" name="edit-name" value="Gorra clasica">
    
            <label for="edit-price">Precio:</label>
            <input type="text" id="edit-price" name="edit-price" value="$80.000">
    
            <button class="btn-save">Guardar</button>
    </div>
        <!-- Box 9-->
     <div class="product-box">
        <img src="/PRUEBA/images/productos/Gorra Cinco Paneles Community .png"alt=""class="product-img">
        <h2 class="product-title">Gorra Cinco Paneles</h2>
        <span class="price">$99.000</span>
        <form>
            <label for="edit-name">Nombre:</label>
            <input type="text" id="edit-name" name="edit-name" value="Gorra clasica">
    
            <label for="edit-price">Precio:</label>
            <input type="text" id="edit-price" name="edit-price" value="$99.000">
    
            <button class="btn-save">Guardar</button>
    </div>
        <!-- Box 10-->
     <div class="product-box">
        <img src="/PRUEBA/images/productos/Retreat Cropped Hoodie.png"alt=""class="product-img">
        <h2 class="product-title">Cropped</h2>
        <span class="price">$195.000</span>
        <form>
            <label for="edit-name">Nombre:</label>
            <input type="text" id="edit-name" name="edit-name" value="Hoodie Clasico">
    
            <label for="edit-price">Precio:</label>
            <input type="text" id="edit-price" name="edit-price" value="$195.000">
    
            <label for="edit-size">Talla:</label>
            <select id="edit-size" name="edit-size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
    
            <button class="btn-save">Guardar</button>
        </form>
    </div>
        <!-- Box 11-->
     <div class="product-box">
        <img src="/PRUEBA/images/productos/Chaqueta Puffer Retreat.png"alt=""class="product-img">
        <h2 class="product-title">Chaqueta Puffer</h2>
        <span class="price">$395.000</span>
        <form>
            <label for="edit-name">Nombre:</label>
            <input type="text" id="edit-name" name="edit-name" value="Hoodie Clasico">
    
            <label for="edit-price">Precio:</label>
            <input type="text" id="edit-price" name="edit-price" value="$395.000">
    
            <label for="edit-size">Talla:</label>
            <select id="edit-size" name="edit-size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
    
            <button class="btn-save">Guardar</button>
        </form>
    </div>
        <!-- Box 12-->
     <div class="product-box">
        <img src="/PRUEBA/images/productos/Chaqueta Slim En Denim Freedom .png"alt=""class="product-img">
        <h2 class="product-title">Chaqueta Denim</h2>
        <span class="price">$205.000</span>
        <form>
            <label for="edit-name">Nombre:</label>
            <input type="text" id="edit-name" name="edit-name" value="Hoodie Clasico">
    
            <label for="edit-price">Precio:</label>
            <input type="text" id="edit-price" name="edit-price" value="$205.000">
    
            <label for="edit-size">Talla:</label>
            <select id="edit-size" name="edit-size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
    
            <button class="btn-save">Guardar</button>
        </form>
    </div>
        <!-- Box 13-->
     <div class="product-box">
        <img src="/PRUEBA/images/productos/Chaqueta Bomber Antifluido Sunday.png"alt=""class="product-img">
        <h2 class="product-title">Bommer</h2>
        <span class="price">$205.000</span>
        <form>
            <label for="edit-name">Nombre:</label>
            <input type="text" id="edit-name" name="edit-name" value="Hoodie Clasico">
    
            <label for="edit-price">Precio:</label>
            <input type="text" id="edit-price" name="edit-price" value="$205.000">
    
            <label for="edit-size">Talla:</label>
            <select id="edit-size" name="edit-size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
    
            <button class="btn-save">Guardar</button>
        </form>
    </div>
            <!-- Repite el mismo patrón para los demás productos -->
        </div>
    </main>
    <!-- Cart section -->
    <!-- Esta sección puede permanecer igual, para posibles futuras implementaciones -->
</body>
</html>

            