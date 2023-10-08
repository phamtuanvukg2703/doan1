{/* JavaScript cơ bản để xử lý sự kiện khi các nút "Sửa" và "Xóa" được nhấn. */}
{/* Bạn có thể thay đổi mã này để thực hiện các chức năng cụ thể của mình. */}
{/* Lấy danh sách các nút "Sửa" và "Xóa" */}
var btnSuaList = document.getElementsByClassName("btnSua"); 
var btnXoaList = document.getElementsByClassName("btnXoa");
{/* Xử lý sự kiện khi các nút "Sửa" được nhấn */}
//code về btn_Sua chua đc sử dụng

// Xử lý sự kiện khi các nút "Sửa" được nhấn
var btnSuaList = document.getElementsByClassName("btnSua");
for (var i = 0; i < btnSuaList.length; i++) {
 btnSuaList[i].addEventListener("click", function() {
     window.location.href="form-up-phong.html"
     });
 }
 for (var i = 0; i < btnXoaList.length; i++) {
    btnXoaList[i].addEventListener("click", function() {
        var row = this.parentElement.parentElement; // Lấy tham chiếu đến hàng chứa nút "Xóa"
        var tenMuc = row.cells[0].textContent.trim(); // Lấy nội dung cột đầu tiên (tên mục)
        if (confirm("Xóa phòng: " + tenMuc + "?")) {
            row.remove(); // Xóa hàng khỏi bảng
            // Thêm mã xử lý cho chức năng Xóa ở đây
        }
    });
}
