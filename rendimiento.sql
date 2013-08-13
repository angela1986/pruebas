$sql = 'CREATE TABLE `rendimiento` ('
        . ' `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, '
        . ' `NACA_ROOT_SECTION` VARCHAR(20) NOT NULL, '
        . ' `NACA_TIP_SECTION` VARCHAR(20) NOT NULL, '
        . ' `clmax` VARCHAR(20) NOT NULL, '
        . ' `clmax2` VARCHAR(20) NOT NULL, '
        . ' `prclmax` VARCHAR(20) NOT NULL'
        . ' )'
        . ' ENGINE = myisam;';