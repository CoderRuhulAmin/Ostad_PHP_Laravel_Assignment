/* 
Products: Contains information about the products available for purchase, such as 

product ID, 
name, 
description, and 
price.
*/


CREATE TABLE `products`(
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `category_id` bigint(20) UNSIGNED NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `description` VARCHAR(50) NOT NULL,
    `price` VARCHAR(50) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) 

-- Insert data into Product Table
INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`) VALUES
(1, 1, 'Product A', 'Description of Product A', '10'),
(2, 2, 'Product B', 'Description of Product B', '20'),
(3, 1, 'Product C', 'Description of Product C', '30'),
(4, 1, 'Product D', 'Description of Product D', '40'),
(5, 3, 'Product E', 'Description of Product E', '50'),
(6, 2, 'Product F', 'Description of Product F', '60'),
(7, 1, 'Product G', 'Description of Product G', '70'),
(8, 5, 'Product H', 'Description of Product H', '80'),
(9, 1, 'Product I', 'Description of Product I', '90'),
(10, 4, 'Product J', 'Description of Product J', '100');