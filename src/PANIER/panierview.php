
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../output.css" rel="stylesheet">

</head>
<style>
    * {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
    }   

   

    @media (max-width: 768px) {
    /* Configurer le tableau pour utiliser CSS Grid */
    .table-mobile tbody tr {
        display: grid;
        grid-template-columns: 1fr 2fr; /* Diviser en deux colonnes: 1 pour les en-têtes, 2 pour les données */
        gap: 10px; /* Espace entre les colonnes */
    }

    /* Mettre chaque cellule en mode bloc pour alignement vertical */
    .table-mobile th, .table-mobile td {
        display: block;
        width: 100%;
    }

    /* Placer les labels des en-têtes de manière explicite à gauche */
    .table-mobile td:before {
        content: attr(data-label); /* Ajoute le label avant le contenu de la cellule */
        font-weight: bold; /* Rend le label en gras */
        float: left; /* Place le label à gauche */
        margin-right: 90px; /* Espace entre le label et le contenu */
        grid-column: 1; /* Place tous les labels dans la première colonne */
    }

    /* Assurer que les données remplissent la seconde colonne */
    .table-mobile td {
        grid-column: 3 /* Place les données dans la deuxième colonne */
    }

    /* Style pour améliorer la visibilité des en-têtes sur petits écrans */
    .table-mobile thead {
        display: none; /* Masquer l'en-tête traditionnelle */
    }
}


   
</style>

<body style="background-color:white">


    <div class="bg-green-100 p-5">
        <ul id="slidedown" class="flex-rew">
            <li class="text-2xl text-center text-black text-bold mt-5 mb-2">Panier</li>
            <li class="mb-5 text-center text-bold "><span>Home </span> <span class="text-black text-bold"><i
                        class="fa-solid fa-caret-right"></i> Panier</span></li>
        </ul>
    </div>
    <section class="mb-12">
    <div class="container mx-auto px-4 mt-10 flex flex-col sm:flex-col md:flex-row justify-between">
    <table class="w-full md:w-3/5 text-left shadow-lg rounded-lg table-mobile">
    <thead class="h-32">
        <tr class="text-xs text-center text-gray-500 bg-gray-50 uppercase border-b">
            <th class="px-4 py-3">Produit</th>
            <th class="px-4 py-3">Prix</th>
            <th class="px-4 py-3">Quantité</th>
            <th class="px-4 py-3">Subtotal</th>
            <th class="px-4 py-3">Supprimer</th>
        </tr>
    </thead>
    <tbody class="h-28">
    <?php foreach ($_SESSION["panier"] as $productName): ?>
    <?php 
    $details = $panierModel->panierproduct($productName);
    if ($details): ?>
    <?php  $subtotal = $details['Prixv'] * 1; 
                $total += $subtotal;?>
        <tr class="text-gray-700 text-center">
            <td class="px-4 py-3" data-label="Produit:">
                <div class="flex items-center gap-1.5">
                    <div class="flex-shrink-0 w-10 h-10">
                        <?php  
                       
                         $imageData = base64_encode($details['Imagep']);
                       
                        echo '<img src="data:image/jpeg;base64,' . $imageData . '" class="w-full h-full rounded-full" />';
                        ?>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900"><?php echo $details['Libellép'] ?></p>
                    </div>
                </div>
            </td>
            <td class="px-4 py-3 text-sm" data-label="Prix:"><?php echo $details['Prixv'] ?> DH</td>
            <td class="px-4 py-3 text-sm" data-label="Quantité:">
            <input style="background-color:white" type="number" value="1" min="1" class="w-16 text-center rounded border appearance-none quantity-input" data-price="<?php echo $details['Prixv'] ?>">

            </td>
            <td class="px-4 py-3 text-sm subtotal" data-label="Subtotal:"><?php echo $details['Prixv']  ?> DH</td>

            <form action="panierController.php" method="post">
              <input type="hidden" name="action" value="remove">
              <input type="hidden" name="product_name" value="<?php echo $details['Libellép']; ?>">

              <td class="px-4 py-3 text-sm" data-label="Supprimer:">
               <button type="submit" class="p-2 rounded-full hover:bg-red-100 border border-transparent hover:border-red-500 text-red-500 hover:text-red-600 remove-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
    </td>
</form>

        </tr>
    <?php endif; ?>
<?php endforeach; ?>

    </tbody>
</table>      
        <table class="w-full md:w-1/3 md:mr-5 mt-5 md:mt-0 text-left shadow-lg rounded-lg">
            <thead class="h-16">
                <tr class="text-xs text-center text-gray-500 bg-gray-50 uppercase border-b">
                    <th class="px-4 py-3">Cart totals</th>
                    <th class="px-4 py-3"></th>
                </tr>
            </thead>
            <tbody class="h-32">
                <tr>
                    <th class="px-4">Subtotal</th>
                    <td id="Subtotal" class="px-4"><?php echo number_format($total, 2); ?> DH</td>
                </tr>
                <tr>
                    <th class="px-4">Total</th>
                    <td id="total" class="px-4"><?php echo number_format($total, 2); ?> DH</td>
                </tr>
                <tr>
                    <th class="px-7">
                        <div class="flex flex-col space-y-4">
                            <a href="../CHECKOUT/checkoutcontroller.php" class="bg-amber-600 text-white font-bold py-2 rounded-full text-center hover:bg-amber-700">Passez à la caisse</a>
                            <a href="../PRODUCTS/productscontroller.php" class="bg-gray-200 text-gray-800 font-bold py-2 rounded-full text-center hover:bg-gray-300">Continuer Shopping</a>
                        </div>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<script>

    window.addEventListener('DOMContentLoaded', () => {
        const rows = document.querySelectorAll('.text-gray-700.text-center');

        rows.forEach(row => {
            const priceCell = row.querySelector('[data-label="Prix:"]');
            const price = parseFloat(priceCell.textContent);
            const quantityInput = row.querySelector('.quantity-input');
            const subtotalCell = row.querySelector('.subtotal');

            quantityInput.addEventListener('input', () => {
                const quantity = parseFloat(quantityInput.value);
                const subtotal = price * quantity;
                subtotalCell.textContent = subtotal + ' DH';
                updateTotal();
            });
        });

        // Update total function
        function updateTotal() {
            total = 0;
            rows.forEach(row => {
                const subtotalCell = row.querySelector('.subtotal');
                total += parseFloat(subtotalCell.textContent);
            });
            document.getElementById('Subtotal').textContent = total.toFixed(2) + 'DH';
            document.getElementById('total').textContent = total.toFixed(2) + 'DH';
        }
    });




   
</script>


</body>

</html>
<?php include '../Footer/Footerview.php'?>
