-- jb756
CREATE TABLE IF NOT EXISTS `user_favorites` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `slang_id` INT NOT NULL,
    FOREIGN KEY (`user_id`) REFERENCES `Users`(`id`),
    FOREIGN KEY (`slang_id`) REFERENCES `slang_terms`(`id`),
    UNIQUE (`user_id`, `slang_id`)
);

-- Add a column for Word of the Day in the Users table
ALTER TABLE `Users` ADD COLUMN `word_of_the_day` INT DEFAULT NULL,
ADD FOREIGN KEY (`word_of_the_day`) REFERENCES `slang_terms`(`id`);
