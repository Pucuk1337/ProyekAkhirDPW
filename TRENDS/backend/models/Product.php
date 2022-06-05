<?php
    class Product {
        //DB Like
        private $conn;
        private $table = 'product';

        // Product Properties
        public $id;
        public $name;
        public $size;
        public $stock;
        public $price;

        // Constructor with DB
        public function __construct($db) {
            $this->conn = $db;
        }

        // GET product
        public function post() {
            // Create Query
            $query = 'SELECT * FROM ' . $this->table . ' ORDER BY Id';

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Execute Query
            $stmt->execute();

            return $stmt;

        }

        // GET Single Product
        public function detail() {
            // Create Query
            $query = 'SELECT * FROM ' . $this->table . ' WHERE Id = ?';

            //PREPARE Statement
            $stmt = $this->conn->prepare($query);

            //BIND ID
            $stmt->bindParam(1, $this->id);

            //EXECUTE Query
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            //Set Properties
            $this->id = $row['id'];
            $this->name = $row['name'];
            $this->size = $row['size'];
            $this->stock = $row['stock'];
            $this->price = $row['price'];
        }

        // Create Post
        public function create() {
            // Create Query
            $query = 'INSERT INTO ' . $this->table . ' SET id = :id, name = :name, size = :size, stock = :stock, price = :price';

                // Prepare Statement
                $stmt = $this->conn->prepare($query);

                // Clean Data
                $this->id = htmlspecialchars(strip_tags($this->id));
                $this->name = htmlspecialchars(strip_tags($this->name));
                $this->size = htmlspecialchars(strip_tags($this->size));
                $this->stock = htmlspecialchars(strip_tags($this->stock));
                $this->price = htmlspecialchars(strip_tags($this->price));

                // Bind Data
                $stmt->bindParam(':id', $this->id);
                $stmt->bindParam(':name', $this->name);
                $stmt->bindParam(':size', $this->size);
                $stmt->bindParam(':stock', $this->stock);
                $stmt->bindParam(':price', $this->price);

                // Execute Query
                if($stmt->execute()){
                    return true;
                }

                // Print Error if Something goes Wrong
                printf("Error: %s.\n", $stmt->error);

                return false;
        }

        // Create Post
        public function update() {
            // Create Query
            $query = 'UPDATE ' . $this->table . ' SET id = :id, name = :name, size = :size, stock = :stock, price = :price WHERE id = :id';

                // Prepare Statement
                $stmt = $this->conn->prepare($query);

                // Clean Data
                $this->id = htmlspecialchars(strip_tags($this->id));
                $this->name = htmlspecialchars(strip_tags($this->name));
                $this->size = htmlspecialchars(strip_tags($this->size));
                $this->stock = htmlspecialchars(strip_tags($this->stock));
                $this->price = htmlspecialchars(strip_tags($this->price));

                // Bind Data
                $stmt->bindParam(':id', $this->id);
                $stmt->bindParam(':name', $this->name);
                $stmt->bindParam(':size', $this->size);
                $stmt->bindParam(':stock', $this->stock);
                $stmt->bindParam(':price', $this->price);

                // Execute Query
                if($stmt->execute()){
                    return true;
                }

                // Print Error if Something goes Wrong
                printf("Error: %s.\n", $stmt->error);

                return false;
        }

        // Delete Post
        public function delete() {
            // Create query
            $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Clean data
            $this->id = htmlspecialchars(strip_tags($this->id));

            // Bind data
            $stmt->bindParam(':id', $this->id);

            // Execute query
            if($stmt->execute()) {
                return true;
            }

            // Print error if something goes wrong
            printf("Error: %s.\n", $stmt->error);

            return false;
        }
    
    }