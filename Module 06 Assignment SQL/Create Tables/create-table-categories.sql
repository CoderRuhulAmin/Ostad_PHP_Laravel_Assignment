/* 
The database contains the following tables:

Categories: Contains information about the different categories of products, such as category ID and name.
*/


CREATE TABLE `categories`(
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
    `name` VARCHAR(50) NOT NULL,

    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
)


-- Insert Data into Categories Table
INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Electronics'),
(2, 'Books'),
(3, 'Clothing'),
(4, 'Home & Kitchen'),
(5, 'Sports & Outdoors'),
(6, 'Toys & Games'),
(7, 'Health & Beauty'),
(8, 'Automotive'),
(9, 'Garden & Tools'),
(10, 'Music & Movies');