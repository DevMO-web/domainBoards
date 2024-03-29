<!DOCTYPE html>
<html lang="en">
<?php require("partials/head.php")?>
<body>
   
    <main class="admin-main">
        <header class="admin-header">
            <div class="admin-header-logo-container">
                <img class="admin-panel-logo" src="Assests/Images/Brand/Logo.svg">
            </div>
            <nav class="admin-header-side-nav">
                <ul>
                    <li>
                        <a href="/">Return to Site</a>
                    </li>
                    <li>
                        <a href="">Dashboard</a>
                    </li>
                </ul>
            </nav>
        </header>
        
    
        <section class="admin-dashboard">
        <div class="admin-dashboard-top">
            <h1>Product List</h1>
            <button><a href="/create">Create New</a></button>

        </div>
        
        <div class="admin-dashboard-bottom">
            <div class="admin-dashboard-container">
                <div class="admin-dashboard-wrapper">
                <table class="admin-dashboard-table">
                    <thead class="admin-product-head">
                        <tr class="admin-product-rows">
                            <th>Product ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $info) : ?>
                        <tr class="admin-product-rows">
                            <td><?=$info['id']?></td>
                            <td class="admin-product-images"><img class="admin-product-images"src="<?=$info['mainImage']?>"></td>
                            <td><?=$info['productName']?></td>
                            <td>$<?=$info['productPrice']?></td>
                            <? // use javascript onclick to direct the input to certain place. ?>
                            <td><input type="button" value="Edit" onClick="window.location.href='/edit?id=<?=$info['id']?>'"></td>
                            <td><input type="button" value="Delete" onClick="window.location.href='/delete?id=<?=$info['id']?>'"></td>
                        </tr>
                     <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
               
            </div>
            </div>
        </section>
    </main>
</body>
</html>

