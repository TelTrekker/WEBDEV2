// log.js
// Login Page
document.getElementById("post").addEventListener("submit", function(event) {
    event.preventDefault();
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    
    fetch("https://jsonplaceholder.typicode.com/users")
    .then(response => response.json())
    .then(users => {
        const user = users.find(user => user.username === username);
        
        if (user) {
            if (password === "secret123") {
                window.location.href = "post.html";
                // window.location.href = "photos/sample2.html";
                //can try with two posts
            } else {
                alert("Incorrect password!");
            }
        } else {
            alert("User not found!");
        }
    })
    .catch(error => alert("Error fetching users:", error));
});