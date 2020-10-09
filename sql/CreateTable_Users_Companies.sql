create table companies (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    address VARCHAR(30) NOT NULL,
	sector VARCHAR(30) NOT NULL
);

create table employees (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    company_id INT(6) UNSIGNED NOT NULL,
    CONSTRAINT FK_CompanyEmployee FOREIGN KEY (company_id)
    REFERENCES companies(id)
);