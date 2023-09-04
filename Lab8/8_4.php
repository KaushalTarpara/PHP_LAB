<?php

class Item {
    protected $itemName;
    protected $itemNo;

    public function __construct($itemName, $itemNo) {
        $this->itemName = $itemName;
        $this->itemNo = $itemNo;
    }

    public function display() {
        echo "Item Name: " . $this->itemName . "\n";
        echo "Item No: " . $this->itemNo . "\n";
    }
}

class Category extends Item {
    protected $categoryName;
    protected $subcategory;
    protected $price;

    public function __construct($itemName, $itemNo, $categoryName, $subcategory, $price) {
        parent::__construct($itemName, $itemNo);
        $this->categoryName = $categoryName;
        $this->subcategory = $subcategory;
        $this->price = $price;
    }

    public function displayItem() {
        parent::display();
        echo "Category: " . $this->categoryName . "\n";
        echo "Subcategory: " . $this->subcategory . "\n";
        echo "Price: $" . $this->price . "\n";
    }

    public function getPrice() {
        return $this->price;
    }
}

class Purchase extends Item {
    protected $purchaseId;
    protected $totalAmount;
    protected $quantity;

    public function __construct($itemName, $itemNo, $purchaseId, $quantity) {
        parent::__construct($itemName, $itemNo);
        $this->purchaseId = $purchaseId;
        $this->quantity = $quantity;
        $this->totalAmount = $this->calculateOrderAmount();
    }

    public function calculateOrderAmount() {
        // Assuming that the price is set in the Category class
        $category = new Category($this->itemName, $this->itemNo, '', '', 0);
        $price = $category->getPrice();
        return $price * $this->quantity;
    }

    public function displayPurchase() {
        parent::display();
        echo "Purchase ID: " . $this->purchaseId . "\n";
        echo "Quantity: " . $this->quantity . "\n";
        echo "Total Amount: $" . $this->totalAmount . "\n";
    }
}

// Create an object of the Purchase class
$purchase = new Purchase("Laptop", 12345, 1, 2);

// Display the details of the purchase
$purchase->displayPurchase();
?>
