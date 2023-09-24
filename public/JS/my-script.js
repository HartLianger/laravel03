let listbarang = document.getElementsByTagName("ol");
listbarang[0].addEventListener("click",tampilkan);
function tampilkan(event){
       alert("Cek data barang"+event.target.innerHTML);
 }
