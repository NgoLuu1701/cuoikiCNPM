<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .header {
      background-color: #fff;
      color: #000;
      padding: 20px;
      text-align: center;
    }

    .medicine-list {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 20px;
    }

    .medicine-item {
      background-color: #f5f5f5;
      padding: 20px;
      margin-bottom: 20px;
    }

    .medicine-item h3 {
      margin-bottom: 10px;
    }

    .button-container {
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .primary-button {
      padding: 10px 20px;
      background-color: #6586E6;
      color: #000;
      border: none;
      cursor: pointer;
    }

    .footer {
      padding: 20px;
    }

    .content {
      max-width: 800px;
      margin: 0 auto;
    }

    .left-content {
      float: left;
      width: 50%;
      box-sizing: border-box;
      padding: 10px;
    }

    .right-content {
      float: right;
      width: 50%;
      box-sizing: border-box;
      padding: 10px;
    }

    .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .form-group label {
      margin-right: 10px;
    }

    .form-group input {
      padding: 5px;
    }

    .form-group textarea {
      padding: 5px;
    }

    .divider {
      clear: both;
      border-bottom: 1px solid #ccc;
      margin: 20px 0;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>PHARMACY</h1>
  </div>

  <h1 style="color:#6586E6; text-indent: 10%;">Chi tiết đơn thuốc</h1>

  <div class="content">
    <div class="left-content">
      <div class="form-group">
        <label for="patient-id">ID bệnh nhân:</label>
        <input type="text" id="patient-id" name="patient-id">
      </div>
      <div class="form-group">
        <label for="patient-name">Tên bệnh nhân:</label>
        <input type="text" id="patient-name" name="patient-name">
      </div>
      <div class="form-group">
        <label for="patient-address">Địa chỉ:</label>
        <input type="text" id="patient-address" name="patient-address">
      </div>
      <div class="form-group">
        <label for="patient-phone">Số điện thoại:</label>
        <input type="text" id="patient-phone" name="patient-phone">
      </div>
      <div class="form-group">
        <label for="doctor-id">ID bác sĩ:</label>
        <input type="text" id="doctor-id" name="doctor-id">
      </div>
    </div>

    <div class="right-content">
      <div class="medicine-list">
        <div class="medicine-item">
          <p>50v, ngày 2 lần sáng tối, lần 1 viên</p>
        </div>
        <div class="medicine-item">
          <p>60v, ngày 2 lần sáng tối, lần 1 viên</p>
        </div>
        <div class="medicine-item">
          <p>40v, ngày 2 lần sáng tối, lần 1 viên</p>
        </div>
        <!-- Thêm các mục thuốc khác tại đây -->
      </div>
</body>
</html>