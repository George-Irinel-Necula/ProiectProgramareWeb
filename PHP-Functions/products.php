
<?php
class Product
{
    public string $name;
    public string $photo;
    public float $rating;
    public float $price;

    public function __construct(string $name, string $photo, float $rating, float $price)
    {
        $this->name = $name;
        $this->photo = $photo;
        $this->rating = $rating;
        $this->price=$price;
    }

    public function render()
    {
        echo '
        <div class="card card-xs sm:max-w-xs">
            <figure><img src="' . $this->photo . '" alt="' . $this->name . '"></figure>
            <div class="card-body p-4">
                <h5 class="card-title min-h-12 line-clamp-2">' . $this->name . '</h5>
                <div class="flex gap-1 py-2 items-center">
                    <span class="icon-[tabler--star-filled]"></span>
                    <span class="icon-[tabler--star-filled]"></span>
                    <span class="icon-[tabler--star-filled]"></span>
                    <span class="icon-[tabler--star-filled]"></span>
                    <span class="icon-[tabler--star-filled]"></span>
                    <h5 class="text-md">(' . $this->rating . ')' . '</h5>
                </div>
                <div class="card-actions justify-end mt-2">
                    <button class="btn btn-primary btn-outline btn-sm sm:btn-md">Vezi detalii</button>
                    <button class="btn btn-secondary btn-sm sm:btn-md">Cumpara</button>
                </div>
            </div>
        </div>';
    }
}

function renderProductsFromDB() {
    include "./PHP-Functions/db-connect.php";
    $sql = "SELECT product_name, photo, rating FROM products";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $product = new Product(
                $row['product_name'],
                $row['photo'],
                (float)$row['rating']
            );
            $product->render();
        }
    } else {
        echo "<p>No products found.</p>";
    }
}

