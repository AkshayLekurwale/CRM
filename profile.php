<!DOCTYPE html>
<html>
<head>
    <title>Navbar with Side Panel</title>
    <link rel="stylesheet" type = "text/css" href= "profilecss.css" >
    
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img  src="logo.jpg" alt="Logo">
        </div>
        <div class="tools">
            <a href="#">Mail</a>
            <a href="#">Chats</a>
            <a href="#">Google</a>
            <a href="#">Aadhar Portal</a>
            <a href="#">Notepad</a>
            <a href="#">Excel</a>
            <a href="#">Word</a>
            <a href="#">Meet</a>
            <a href="#">File Manager</a>
            <a href="#">Paint</a>
            <a href="#">Power point</a>
            <a href="#">Access Request</a>
            <a href="#">Profile and Documents</a>
            <a href="#">Application and attendence</a>
            <a href="#">History</a>
            <a href="#">complaint</a>
            <a href="#">Suggestion and feedback</a>
            
            
            <a href="#main">Skip to Main</a>
        </div>
    </div>
    <button id = "toggle-btn" class="toggle-btn" onclick="toggleSidePanel()">&#9776;</button>

    <div class="sidepanel" id="sidepanel">
        <ul>
        <li><a href="#">  Search 🔍 </a></li>
        <li><a href="#">  Profile </a></li>
        <li><a href="#">  Calling history</a></li>
        <li><a href="#">  Complaint history </a></li>
        <li><a href="#">  Status Alert </a></li>
        <li><a href="#">  Tech support</a></li>
        <li><a href="#">  BGL Statement</a></li>
        <li><a href="#">  Penalty amount</a></li>
        <li><a href="#">  Documents</a></li>
        <li><a href="#">  Deposit amount</a></li>
        <li><a href="#">  Activation history</a></li>
        <li><a href="#">  Operator work report</a></li>
        <li><a href="#">  Enquiry</a></li>
        <li><a href="#">  Complaint</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="flex-container">
            <div class="customer-info">
                <form id="customer-form">
                    <label for="customer_id">Enter Mobile no.</label>
                    <input type="text" id="customer_id" name="customer_id" required>
                    <input type="button" id='getInfoBtn' value="Submit" onclick="fetchCustomerInfo()">
                    <input type="button" id='getProfile' value="Profile" onclick="ProfileInfo()">
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
            <button onclick="fetchBGL()">BGL</button>
            <button onclick="fetchPenalty()">Penalty</button>
            <button onclick="fetchEnquiry()">Enquiry History</button>
            <button onclick="fetchComplaintHistory()">Complaint History</button>
            <button onclick="fetchActivationHistory()">Activation History</button>
            <button onclick="fetchWorkHistory()">Work History</button>
            <!--<input type="button" onclick="fetchCallHistory()">Calls History</input> -->
        </div>

       
    </div>
   
    <div id="customer-history"></div>
    <script>
        function ProfileInfo() {
            var customer_id = document.getElementById('customer_id').value;
            window.location.href = 'originalprofile.php?customer_id=' + customer_id;
        }
    </script>
    <script src="script.js"></script>
</body>
</html>