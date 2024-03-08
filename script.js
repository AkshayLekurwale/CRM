function toggleSidePanel() {
    var panel = document.getElementById("sidepanel");
    // Check if the side panel is already open
    if (panel.style.left === "0px") {
        // It's open, so close it by moving it out of view
        panel.style.left = "-250px"; // Adjust "-250px" based on your side panel's width
    } else {
        // It's closed, so open it by moving it into view
        panel.style.left = "0px";
    }
}




function fetchCustomerInfo() {
    var customer_id = document.getElementById('customer_id').value;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'fetch_customer_info.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('customer-details').innerHTML = xhr.responseText;
        }
    };
    xhr.send('customer_id=' + customer_id);
}
