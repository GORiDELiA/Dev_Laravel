CREATE USER 'Delia'@'localhost' IDENTIFIED BY 'docker';
GRANT ALL PRIVILEGES ON *.* TO 'Delia'@'localhost';

CREATE USER 'Delia'@'%' IDENTIFIED BY 'docker';
GRANT ALL PRIVILEGES ON *.* TO 'Delia'@'%';
