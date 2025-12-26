// Declare Trait allows reuse of code
// across multiple classes for common characteristics or use cases

<?php
trait Logger {
    public function log($message) {
    	$date = new DateTime();
        echo "| ".  $date->format('Y-m-d H:i:s') . " | " . $message;
    }
}

// Use case : 
// Call trait with "use <trait name> in Class"

class User {
    use Logger; 

    public function createUser() {
        // User creation logic
        $this->log("User created.");
    }
}

class Product {
    use Logger;

    public function createProduct() {
        // Product creation logic
        $this->log("Product created.");
    }
}

$user = new User();
$user->createUser(); // Output ex: | 2025-06-18 14:06:09 | User created.

$product = new Product();
$product->createProduct(); // Output ex: | 2025-06-18 14:06:09 | Product created.
