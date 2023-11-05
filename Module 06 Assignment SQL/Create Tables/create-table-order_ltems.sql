/* 
Order_Items: Contains information about the individual items included in each order, 

such as order item ID, 
order ID, 
product ID, 
quantity, and 
unit price.
*/

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `unit_price` varchar(50) NOT NULL,
  `total_amount` NUMERIC(20, 2) GENERATED ALWAYS AS (unit_price * quantity) STORED,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
   FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
   FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE
)

-- Insert data into Order Items Table
INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `unit_price`) VALUES
(1, 1, 1, '10', '10'),
(2, 2, 1, '10', '10'),
(3, 2, 2, '5', '20'),
(4, 3, 1, '5', '10'),
(5, 3, 2, '5', '20'),
(6, 3, 3, '5', '30'),
(7, 4, 2, '10', '20'),
(8, 4, 3, '10', '30'),
(9, 5, 10, '8', '100'),
(10, 6, 5, '8', '50'),
(11, 7, 1, '10', '10'),
(12, 7, 5, '10', '50'),
(13, 8, 2, '10', '20'),
(14, 9, 2, '2', '20'),
(15, 9, 4, '4', '40'),
(16, 10, 10, '1', '100'),
(17, 10, 6, '10', '60');