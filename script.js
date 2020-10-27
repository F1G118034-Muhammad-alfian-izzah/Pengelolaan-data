let keyword = document.querySelector(".keyword");
let cari = document.querySelector(".cari");
let ct = document.querySelector(".container-table");
keyword.addEventListener("keyup", function (e) {
    console.log(e.target.value)
    fetch("ajax/live.php?keyword=" + e.target.value).then(res => res.text()).then((res) => ct.innerHTML = res);
})