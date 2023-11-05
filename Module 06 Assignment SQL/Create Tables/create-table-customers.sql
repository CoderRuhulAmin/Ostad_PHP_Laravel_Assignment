/* 
Customers: Contains information about the customers, such as 

customer ID, 
name, 
email, and 
location.
*/

CREATE TABLE `customers`(
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 

    `name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `location` VARCHAR(50) NOT NULL,
    
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)

-- Insert data into Customers Table
INSERT INTO `customers` (`id`, `name`, `email`, `location`) VALUES
(1, 'Alice Johnson', 'alice.johnson@email.com', 'Uttara'),
(2, 'Bob Smith', 'bob.smith@email.com', 'Mirpur'),
(3, 'Charlie Brown', 'charlie.brown@email.com', 'Saver'),
(4, 'Diana Ross', 'diana.ross@email.com', 'Islampur'),
(5, 'Edward Norton', 'edward.norton@email.com', 'Mohakhali'),
(6, 'Fiona Apple', 'fiona.apple@email.com', 'Uttara'),
(7, 'George Lucas', 'george.lucas@email.com', 'Islampur'),
(8, 'Helen Hunt', 'helen.hunt@email.com', 'Uttara'),
(9, 'Ian McKellen', 'ian.mckellen@email.com', 'Mirpur'),
(10, 'Julia Roberts', 'julia.roberts@email.com', 'Demra');