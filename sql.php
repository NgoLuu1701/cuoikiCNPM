<?php
// Kết nối Database
include "connect.php";

// Tạo cơ sở dữ liệu
$sql = "CREATE DATABASE IF NOT EXISTS modell_donthuoc";
if ($conn->query($sql) === TRUE) {
    echo "Tạo cơ sở dữ liệu thành công<br>";
} else {
    echo "Tạo cơ sở dữ liệu thất bại: " . $conn->error . "<br>";
}

// Sử dụng cơ sở dữ liệu
$conn->select_db("modell_donthuoc");

// Tạo bảng BACSI
$sql = "CREATE TABLE IF NOT EXISTS BACSI (
    MABS INT NOT NULL PRIMARY KEY,
    TENBS VARCHAR(50),
    CHUYENMON VARCHAR(50),
    SDT VARCHAR(10)
)";
if ($conn->query($sql) === TRUE) {
    echo "Tạo bảng BACSI thành công<br>";
} else {
    echo "Tạo bảng BACSI thất bại: " . $conn->error . "<br>";
}

// Thêm thông tin vào bảng BACSI
$sql = "INSERT INTO BACSI (MABS, TENBS, CHUYENMON, SDT)
        VALUES (1, 'Nguyen Van A', 'Nhi Khoa', '0123456789'),
               (2, 'Tran Thi B', 'Tim Mạch', '0987654321')";
if ($conn->query($sql) === TRUE) {
    echo "Thêm thông tin vào bảng BACSI thành công<br>";
} else {
    echo "Thêm thông tin vào bảng BACSI thất bại: " . $conn->error . "<br>";
}

// Tạo bảng BENHNHAN
$sql = "CREATE TABLE IF NOT EXISTS BENHNHAN (
    MABN INT NOT NULL PRIMARY KEY,
    TENBN VARCHAR(50),
    NGAYSINH DATE,
    GIOITINH VARCHAR(10),
    DIACHI VARCHAR(100)
)";
if ($conn->query($sql) === TRUE) {
    echo "Tạo bảng BENHNHAN thành công<br>";
} else {
    echo "Tạo bảng BENHNHAN thất bại: " . $conn->error . "<br>";
}

// Thêm thông tin vào bảng BENHNHAN
$sql = "INSERT INTO BENHNHAN (MABN, TENBN, NGAYSINH, GIOITINH, DIACHI)
        VALUES (1, 'Nguyen Thi C', '1990-01-01', 'Nữ', 'Hanoi, Vietnam'),
               (2, 'Tran Van D', '1985-05-10', 'Nam', 'Ho Chi Minh City, Vietnam')";
if ($conn->query($sql) === TRUE) {
    echo "Thêm thông tin vào bảng BENHNHAN thành công<br>";
} else {
    echo "Thêm thông tin vào bảng BENHNHAN thất bại: " . $conn->error . "<br>";
}

// Tạo bảng DONTHUOC
$sql = "CREATE TABLE IF NOT EXISTS DONTHUOC (
    MADT INT NOT NULL PRIMARY KEY,
    MABN INT,
    MABS INT,
    NGAYKEDON DATE
)";
if ($conn->query($sql) === TRUE) {
    echo "Tạo bảng DONTHUOC thành công<br>";
} else {
    echo "Tạo bảng DONTHUOC thất bại: " . $conn->error . "<br>";
}

// Thêm thông tin vào bảng DONTHUOC
$sql = "INSERT INTO DONTHUOC (MADT, MABN, MABS, NGAYKEDON)
        VALUES (1, 1, 1, '2023-01-01'),
               (2, 2, 2, '2023-02-01')";
if ($conn->query($sql) === TRUE) {
    echo "Thêm thông tin vào bảng DONTHUOC thành công<br>";
} else {
    echo "Thêm thông tin vào bảng DONTHUOC thất bại: " . $conn->error . "<br>";
}

// Tạo bảng CHITIETKEDON
$sql = "CREATE TABLE IF NOT EXISTS CHITIETKEDON (
    MACTKD INT NOT NULL PRIMARY KEY,
    MADT INT,
    MALL INT,
    DOSE VARCHAR(50)
)";
if ($conn->query($sql) === TRUE) {
    echo "Tạo bảng CHITIETKEDON thành công<br>";
} else {
    echo "Tạo bảng CHITIETKEDON thất bại: " . $conn->error . "<br>";
}

// Thêm thông tin vào bảng CHITIETKEDON
$sql = "INSERT INTO CHITIETKEDON (MACTKD, MADT, MALL, DOSE)
        VALUES (1, 1, 1, '2 viên/ngày'),
               (2, 2, 2, '1 viên/ngày')";
if ($conn->query($sql) === TRUE) {
    echo "Thêm thông tin vào bảng CHITIETKEDON thành công<br>";
} else {
    echo "Thêm thông tin vào bảng CHITIETKEDON thất bại: " . $conn->error . "<br>";
}

// Tạo bảng LIEULUONG
$sql = "CREATE TABLE IF NOT EXISTS LIEULUONG (
    MALL INT NOT NULL PRIMARY KEY,
    TENTHUOC VARCHAR(50),
    MIN_SINGLE_DOSE VARCHAR(50),
    MAX_SINGLE_DOSE VARCHAR(50),
    MIN_DAILY_DOSE VARCHAR(50),
    MAX_DAILY_DOSE VARCHAR(50),
    MIN_PERIOD_DOSE VARCHAR(50),
    MAX_PERIOD_DOSE VARCHAR(50)
)";
if ($conn->query($sql) === TRUE) {
    echo "Tạo bảng LIEULUONG thành công<br>";
} else {
    echo "Tạo bảng LIEULUONG thất bại: " . $conn->error . "<br>";
}

// Thêm thông tin vào bảng LIEULUONG
$sql = "INSERT INTO LIEULUONG (MALL, TENTHUOC, MIN_SINGLE_DOSE, MAX_SINGLE_DOSE, MIN_DAILY_DOSE, MAX_DAILY_DOSE, MIN_PERIOD_DOSE, MAX_PERIOD_DOSE)
        VALUES (1, 'Thuốc A', '1 viên', '2 viên', '1 viên', '4 viên', '1 ngày', '7 ngày'),
               (2, 'Thuốc B', '1 viên', '3 viên', '2 viên', '6 viên', '1 ngày', '14 ngày')";
if ($conn->query($sql) === TRUE) {
    echo "Thêm thông tin vào bảng LIEULUONG thành công<br>";
} else {
    echo "Thêm thông tin vào bảng LIEULUONG thất bại: " . $conn->error . "<br>";
}

$conn->close();
?>