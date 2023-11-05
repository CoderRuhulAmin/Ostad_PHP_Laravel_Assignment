/* 
Orders: Contains information about the orders placed by customers, such as 

order ID, 
customer ID, 
order date, and 
total amount.
*/

CREATE TABLE `orders`(
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `customer_id` BIGINT(20) UNSIGNED NOT NULL,
    `total_amount` VARCHAR(50) NOT NULL,
    `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    FOREIGN KEY (`customer_id`) REFERENCES `customers`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE
)


-- Insert data into Orders Table
INSERT INTO `orders` (`id`, `customer_id`, `total_amount`) VALUES
(1, 1, '100'),
(2, 1, '200'),
(3, 2, '400'),
(4, 3, '500'),
(5, 7, '800'),
(6, 5, '400'),
(7, 2, '600'),
(8, 3, '200'),
(9, 3, '200'),
(10, 4, '100');