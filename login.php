<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">

</head>
<body>
    <h2>Login</h2>
    <form action="login_process.php" method="post" id="login_form">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <div style="text-align: center;">
            <select name="Designation" id="designation" required>
                <option value="">Please Choose Your Designation</option>
                <option value="director">DIRECTOR</option>
                <option value="ceo">CEO</option>
                <option value="admin_panel">ADMIN PANEL</option>
                <option value="accountant">ACCOUNTANT</option>
                <option value="mis">MIS</option>
                <option value="hr_head">HR HEAD</option>
                <option value="hr_executive">HR EXECUTIVE</option>
                <option value="marketing_manager">MARKETING MANAGER</option>
                <option value="hr_recruiter">OPERATOR - HR RECRUITER</option>
                <option value="legal_officer">LEGAL OFFICER</option>
                <option value="project_manager">PROJECT MANAGER</option>
                <option value="assistant_project_manager">ASSISTANT PROJECT MANAGER</option>
                <option value="bgl_recovery_executive">BGL RECOVERY EXECUTIVE</option>
                <option value="technical_support">TECHNICAL SUPPORT</option>
                <option value="crm_admin_panel">CRM ADMIN PANEL</option>
                </select>
        </div>
        

        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
