<!DOCTYPE html>
<html>
<head>
    <title>Navbar with Side Panel</title>
    <link rel="stylesheet" type="text/css" href="profilecss.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="tools">
            <a href="#">Home</a>
            <a href="#">Profile</a>
            <a href="#">Language</a>
            <a href="#main">Skip to Main</a>
        </div>
    </div>
    <button class="toggle-btn" onclick="toggleSidePanel()">&#9776;</button>

    <div class="sidepanel" id="sidepanel">
        <ul>
            <li><a href="#">Director</a></li>
            <li><a href="#">CEO</a></li>
            <li><a href="#">Admin Panel</a></li>
            <li><a href="#">Accountant</a></li>
            <li><a href="#">MTS</a></li>
            <li><a href="#">HR Head</a></li>
            <li><a href="#">HR Executive</a></li>
            <li><a href="#">Marketing Manager</a></li>
        </ul>
    </div>
    <div id="main" class="main-content">
        <div class="flex-container">
            <div class="customer-info">
                <form id="customer-form">
                    <label for="customer_id">Enter Mobile no.</label>
                    <input type="text" id="customer_id" name="customer_id" required>
                    <input type="button" value="Submit" onclick="fetchCustomerInfo()">
                </form>
                <div id="customer-details" class="info-box"></div>
            </div>
            <div id="call-dashboard" class="call-box">
                <h3>Call Dashboard</h3>
                <label for="mob_no">Mobile No:</label>
                <input type="text" id="mob_no" name="mob_no">
                <div class="operator-details">
                    <p>Operator: John Doe</p>
                    <p>Extension: 1234</p>
                </div>
                <div class="options">
                    <button>Make Call</button>
                    <button>Hold</button>
                    <button>Conference</button>
                    <button>Release</button>
                </div>
            </div>
        </div>
        <div class="horizontal-list">
            <a href="#">BGL List</a>
            <a href="#">Penalty</a>
            <a href="#">New Enquiry History</a>
            <a href="#">New Complaint History</a>
            <a href="#">Activation History</a>
            <a href="#">Work History</a>
            <a href="#">Calls History</a>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>