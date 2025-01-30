-- 1. CREATE `tbl_register` TABLE (For User Registration and Login)
CREATE TABLE IF NOT EXISTS tbl_register (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    pass VARCHAR(255) NOT NULL
);

-- 2. CREATE `tbl_add` TABLE (For Employee Records)
CREATE TABLE IF NOT EXISTS tbl_add (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nam VARCHAR(100) NOT NULL,
    em VARCHAR(100) NOT NULL,
    addr TEXT NOT NULL,
    gen ENUM('Male', 'Female', 'Other') NOT NULL,
    dept VARCHAR(100) NOT NULL,
    pos VARCHAR(100) NOT NULL,
    ph VARCHAR(20) NOT NULL
);