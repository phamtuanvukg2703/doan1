// Mock data (danh sách người dùng)
let users = [
    { id: 1, username: "nguoidung1", email: "nguoidung1@example.com" },
    { id: 2, username: "nguoidung2", email: "nguoidung2@example.com" },
    // Thêm dữ liệu người dùng khác nếu cần
];

// Hiển thị danh sách người dùng ban đầu
function displayUsers() {
    const userList = document.getElementById("userList");
    userList.innerHTML = "";
    for (const user of users) {
        const listItem = document.createElement("li");
        listItem.innerHTML = `${user.username} - ${user.email} <button onclick="editUser(${user.id})">Sửa</button> <button onclick="deleteUser(${user.id})">Xóa</button>`;
        userList.appendChild(listItem);
    }
}

// Thêm người dùng mới
document.getElementById("addUserForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const newUser = { id: Date.now(), username, email };
    users.push(newUser);
    displayUsers();
    document.getElementById("username").value = "";
    document.getElementById("email").value = "";
});

// Sửa người dùng
function editUser(userId) {
    const user = users.find(u => u.id === userId);
    if (user) {
        document.getElementById("userId").value = user.id;
        document.getElementById("editUsername").value = user.username;
        document.getElementById("editEmail").value = user.email;
    }
}

document.getElementById("editUserForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const userId = parseInt(document.getElementById("userId").value);
    const username = document.getElementById("editUsername").value;
    const email = document.getElementById("editEmail").value;
    const userIndex = users.findIndex(u => u.id === userId);
    if (userIndex !== -1) {
        users[userIndex].username = username;
        users[userIndex].email = email;
        displayUsers();
    }
    document.getElementById("userId").value = "";
    document.getElementById("editUsername").value = "";
    document.getElementById("editEmail").value = "";
});

// Xóa người dùng
function deleteUser(userId) {
    const userIndex = users.findIndex(u => u.id === userId);
    if (userIndex !== -1) {
        users.splice(userIndex, 1);
        displayUsers();
    }
}

document.getElementById("deleteUserForm").addEventListener("submit", function (e) {
    e.preventDefault();
    const userId = parseInt(document.getElementById("deleteUserId").value);
    deleteUser(userId);
    document.getElementById("deleteUserId").value = "";
});

// Hiển thị danh sách người dùng ban đầu
displayUsers(); 