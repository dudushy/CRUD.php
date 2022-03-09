CREATE TABLE `ci4`.`tb_personal` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `title` VARCHAR(100) NOT NULL ,
    `status` VARCHAR(2) NOT NULL ,
    `description` VARCHAR(255) NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `tb_personal` (`id`, `title`, `status`, `description`)
VALUES
(NULL, 'Lorem Ipsum', '0', '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"');

SELECT * FROM `tb_personal`