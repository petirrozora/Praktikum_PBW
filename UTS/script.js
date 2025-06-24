function cekNilai() {
    let nim = document.getElementById("nim").value;
    let nilai = parseInt(document.getElementById("nilai").value);
    let hasilElement = document.getElementById("hasil");

    // Validasi nilai harus dalam rentang 0 - 100
    if (isNaN(nilai) || nilai < 0 || nilai > 100) {
        hasilElement.innerHTML = "<span class='error'>Nilai tidak valid!</span>";
        return;
    }

    let hurufMutu;

    // Menentukan huruf mutu berdasarkan rentang nilai
    if (nilai >= 80) {
        hurufMutu = "A";
    } else if (nilai >= 70) {
        hurufMutu = "B";
    } else if (nilai >= 60) {
        hurufMutu = "C";
    } else if (nilai >= 50) {
        hurufMutu = "D";
    } else {
        hurufMutu = "E";
    }

    // Menampilkan hasil
    hasilElement.innerHTML = `NIM: ${nim} <br> Nilai: ${nilai} <br> Huruf Mutu: <strong>${hurufMutu}</strong>`;
}
